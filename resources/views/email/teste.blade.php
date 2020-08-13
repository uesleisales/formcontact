<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ app('url')->asset('materialize/css/materialize.min.css') }}"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body >
    <div class="row container" style="margin-top:20px;">

        <div class="col s12 l12 offset-l4 offset-s4">
            <h3 class="yellow-text">Novo contato</h3>
        </div>

        <div class="container">
                <div class="divider"></div>
                <div class="section">
                    <h5>Nome</h5>
                    <p>{{ $nome }}</p>
                </div>

                <div class="divider"></div>
                <div class="section">
                    <h5>Email</h5>
                    <p>{{ $email }}</p>
                </div>

                <div class="divider"></div>
                <div class="section">
                    <h5>Telefone</h5>
                    <p>{{ $telefone }}</p>
                </div>

                <div class="divider"></div>
                <div class="section">
                    <h5>Mensagem</h5>
                    <p>{{ $mensagem }}</p>
                </div>

                <div class="divider"></div>
                <div class="section">
                    <h5>Anexo</h5>
                    <p><a href="{{ app('url')->asset('upload/'.$anexo) }}">Visualizar</a></p>
                </div>

                <div class="divider"></div>
                <div class="section">
                    <h5>IP de origem</h5>
                    <p>{{ $ip }}</p>
                </div>

                <div class="divider"></div>
                <div class="section">
                    <h5>Data da solicitação</h5>
                    <p>{{ date('d/m/Y') }}</p>
                </div>

                


        </div>
    </div>
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{ app('url')->asset('materialize/js/materialize.min.js') }}"></script>
    
</body>
</html>
        
