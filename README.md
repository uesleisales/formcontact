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

Após a instalação das dependências, inicie o servidor rodando o comando abaixo:
```
php -S localhost:8000 -t public
```

> Acessando <b>localhost:8000</b> você verá o projeto rodando na sua máquina local.

Você pode fazer a leitura da documentação completa do Lumen no site oficial: [Lumen website](https://lumen.laravel.com/docs).

## Configuração do servidor de e-mail (Sendgrid)
Para esse projeto em específico, foi utilizado o sendgrid como servidor para envios de emails. Contudo, existem outras opçõos disponíveis no mercado e que poderiam ser utilizados seguindo princípios parecidos.

#### Criação e configuração da API_KEY

1. Acesse o [site](app.sendgrid.com), crie uma conta e gere uma nova API KEY (Guarde-a em um arquivo de texto para usar posteriormente).
2. No painel de controle do Sendgrid, acesse : Settings > Sender Authentication e adicione um endereço de email que sera usado como remetente (Necessário ativar).


## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
