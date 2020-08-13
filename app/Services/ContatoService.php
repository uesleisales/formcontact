<?php 

namespace App\Services;

use Validator;
use Illuminate\Support\Facades\DB;

class ContatoService {

    public static function store($request){
       

        //Faz o upload do anexo e insere os dados no banco
        if ($request->hasFile('anexo')) {
            $original_filename = $request->file('anexo')->getClientOriginalName();
            $original_filename_arr = explode('.', $original_filename);
            $file_ext = end($original_filename_arr);
            
            $destination_path = './upload/';
            $anexo = 'U-' . time() . '.' . $file_ext;

            if ($request->file('anexo')->move($destination_path, $anexo)) {
                
                $data = [
                    'nome' => $request->input('nome'),
                    'email'=> $request->input('email'),
                    'telefone' => $request->input('tel'),
                    'mensagem' => $request->input('msg'),
                    'anexo' =>$anexo,
                    'ip' => $request->ip(),
                    'created_at' => date("Y-m-d H:i:s")
                ];
                
                send_mail($data,'email.teste', env('MAIL_ADDRESS_RECEIVE'),'Sistema', 'Formulário de contato');
                DB::table('contato')->insert($data);
                return ['msg' => 'Mensagem enviada com sucesso! Aguarde retorno.', 'type' => 'success'];
            } else {
                return ['msg' => 'Falha ao enviar a mensagem!', 'type' => 'error'];
            }
        } else {
            return ['msg' => 'Falha ao enviar a mensagem!', 'type' => 'error'];
        }
    }
    

    public static function valide($request){
        //============================================================
        //=============== Faz a validação dos campos =================
        $validatedData = Validator::make($request->all(),[
            'nome'  => 'required|max:255',
            'email' => 'required|email:rfc,dns,filter|max:255',
            'tel'   => 'required',
            'msg'   => 'required|max:255',
            'anexo' => 'required|max:500|mimes:pdf,doc,docx,odt,txt',
        ], ContatoService::messages());

        $validatedData->after(function ($validatedData) use ($request){

            if(self::checkPhone($request->input('tel')) == false) {
                //return validator with error by file input name
                $validatedData->errors()->add('tel', 'Formatado do telefone é inválido');
            }
        });

        //===============================================================        
        
        if ($validatedData->fails()) { 
            return view('contato.index', ['errors' => $validatedData->errors()]); //Obs: Lumen redirect session não é ativado
        }

        return null;
    }


    private static function checkFileExtension($file_ext){
        $valid=array(
            'pdf','doc', 'docx','odt','txt' // add your extensions here.
        );        
        return in_array($file_ext,$valid) ? true : false;
    }

    private static function checkPhone($value){ //(99)99999-9999 ou (99)9999-9999
        return preg_match('/^\(\d{2}\)\d{4,5}-\d{4}$/', $value) > 0;
    }

    public static function messages(){
        return [

            'nome.required'    => 'Nome é obrigatório!',
            'nome.max '        => 'Tamanho máximo do nome é 255 caracteres!',
            'email.required'   => 'O email é obrigatório!',
            'email.email'      => 'Insira um email válido!',
            'tel.required'     => 'O campo de telefone é obrigatório!',
            'msg.required'     => 'A mensagem não pode ficar em branco!',
            'msg.max'          => 'Tamanho máximo da mensagem é de 255 caracteres!',
            'anexo.required'   => 'O anexo é obrigatório!',
            'anexo.max'        => 'O tamanho máximo do anexo é de 500kb.',
            'anexo.mimes'      => 'Só são permitidos os seguintes formatos :  pdf, doc, docx, odt e txt',
            
        ];
    }
}