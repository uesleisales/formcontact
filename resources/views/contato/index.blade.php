@extends('contato.layout')

@section('content')

<div class="row container">

    @if (isset($errors))
        <div class="row">
            <div class="col s12 m12 z-depth-4">
                <div class="card-panel red accent-3 lighten-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="white-text"> * {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        
    @endif


    @if (isset($type) && isset($msg))
        <div class="row">
            <div class="col s12 m12 z-depth-4">
                <div class="card-panel green accent-3 lighten-2">
                    <ul>
                        
                        <li class="white-text">  {{ $msg }}</li>
                        
                    </ul>
                </div>
            </div>
        </div>
        
    @endif

    <form action="{{ route('contato.submit') }}" method="POST" enctype="multipart/form-data" class="col s12 z-depth-4">
        <div class="row">
            <div class="col s6 offset-s3 ">
                <h3>Formulário de contato</h3>
            </div>
        </div>
        <hr>

        <div class="row ">
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" name="nome" class="validate">
                <label for="icon_prefix">Nome</label>
            </div>
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">email</i>
                <input id="icon_email" type="text" name="email" class="validate">
                <label for="icon_email">Email</label>
            </div>
        </div>

        <div class="row ">
            <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input id="tel" type="tel" name="tel" class="validate">
                <label for="tel">Telefone</label>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="msg" name="msg" data-length="255" class="materialize-textarea"></textarea>
                        <label for="msg">Mensagem</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <div class="file-field input-field">
                    <div class="btn purple darken-4" >
                        <span>Anexo</span>
                        <input type="file" name="anexo">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                        <span class="helper-text" >Formatos aceitos:<b>pdf, doc, docx, odt e txt.</b>  </span>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m2 offset-m10">
                <button class="btn waves-effect waves-light purple darken-4 btn-large" type="submit">Enviar
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
        
    </form>
  </div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        var textNeedCount = document.querySelectorAll('#msg');
        M.CharacterCounter.init(textNeedCount);
    });

</script>

<script src="{{ app('url')->asset('src/jquery.js') }}"></script>
<script src="{{ app('url')->asset('src/mask.js') }}"></script>

<script>
    jQuery("input#tel")
    .mask("(99)99999-999?9")
    .focusout(function (event) {  
        var target, phone, element;  
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
        phone = target.value.replace(/\D/g, '');
        element = $(target);  
        element.unmask();  
        if(phone.length > 10) {  
            element.mask("(99)99999-999?9");  
        } else {  
            element.mask("(99)9999-999?9");  
        }  
    });
</script>

@endsection