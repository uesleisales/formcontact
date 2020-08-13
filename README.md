# Formulário de contato com envio de email

### Ferramentas utilizadas
<p><b>Framework Backend:</b> Lumen/PHP. </p>
<p><b>FrontEnd:</b> MaterializeCss, Jquery e HTML5.</p>
<p><b>Banco de dados:</b> Mysql.</p>
<p><b>Versão do PHP:</b> 7.3.5</p>


## Instalação e dependências do Lumen

#### Requisitos do servidor
A estrutura do Lumen tem alguns requisitos de sistema. Claro, todos esses requisitos são atendidos pela máquina virtual Laravel Homestead :

- PHP> = 5.5.9
- Extensão OpenSSL PHP
- Extensão PHP Mbstring
- Extensão Tokenizer PHP

#### Instalação das dependências via composer

Na pasta do projeto rode o seguinte comando:
```
composer install
```

Altere o nome do arquivo ".env.example" para ".env" (Caso não exista um já criado). 

Altere os campos do arquivo .env para a configuração do banco local.

```
DB_DATABASE=homestead      //Nome do banco de dados
DB_USERNAME=homestead      //Nome de usuário do banco de dados
DB_PASSWORD=secret         //Senha do banco de dados (Caso não tenha, deixar em branco).

```

Após a instalação das dependências, inicie o servidor rodando o comando abaixo:
```
php -S localhost:8000 -t public
```

> Acessando <b>localhost:8000</b> você verá o projeto rodando na sua máquina local.

Você pode fazer a leitura da documentação completa do Lumen no site oficial: [Lumen website](https://lumen.laravel.com/docs).

## Configuração do servidor de e-mail (Sendgrid)
Para esse projeto em específico, foi utilizado o sendgrid como servidor para envios de emails. Contudo, existem outras opçõos disponíveis no mercado e que poderiam ser utilizados seguindo princípios parecidos.

#### Criação e configuração da API_KEY

1. Acesse o [site](app.sendgrid.com), crie uma conta e gere uma nova <b>API KEY</b> (Guarde-a em um arquivo de texto para usar posteriormente).
2. No painel de controle do Sendgrid, acesse : <b>Settings</b> > <b>Sender Authentication</b> e adicione um endereço de email que será utilizado como remetente (Necessário ativar).
3. Com a <b>API_KEY</b> em posse e com o email autenticando, configure o arquivo .env presente na raiz do projeto, adicionando as seguintes linhas(Preenchendo as informações que faltam): 
```
MAIL_DRIVER=sendgrid
SENDGRID_API_KEY=SUA API KEY AQUI
MAIL_ADDRESS =SEU ENDEREÇO DE EMAIL AQUI
```



## Resolução de erros de SSL (Em servidor local). 

É possível que durante a execução da rota de envio de email, ocorra um erro parecido com "<b>cURL error 60: SSL certificate: unable to get local issuer certificate
</b>". Para resolver esse erro, siga os passos abaixo (Sistema Operacional Windows):

1. Baixe o certificado 'cacert.pem' clicando [aqui](https://curl.haxx.se/docs/caextract.html)
2. Adicione o arquivo baixado na pasta: <b> \bin\php\php(Version)\extras\ssl\ </b> 
3. Abra o seu arquivo .ini e adicione a seguinte linha (Não esqueça de adicionar o caminho de acordo com sua versão do PHP).
```
curl.cainfo = "C:\wamp64\bin\php\php(Version)\extras\ssl\cacert.pem"
```
-  Para descobrir qual a versão do seu PHP, digite no seu terminal: 
> php -v
4. Reinicie o servidor, e pronto! Estará resolvido :)

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
