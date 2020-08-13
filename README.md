# Formulário de contato com envio de email

### Ferramentas utilizadas
#### Framework Backend: Lumen/PHP PHP Version 7.3.5.
#### FrontEnd: MaterializeCss, Jquery e HTML5.
#### Banco de dados: Mysql.


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
DB_USERNAME=homestead      //Nome de usuário do 
DB_PASSWORD=secret         //Senha do banco (Caso não tenha, deixar em branco).

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



## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
