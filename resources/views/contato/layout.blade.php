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

<body>
    <style>
        .active{
            color: #7b1fa2!important;
        }

        #logo{
            margin-left:10px;
        }
    </style>

    <nav class="purple darken-4">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">
              <img id="logo" width="100" src="{{ app('url')->asset('img/logo.png') }}" alt="Kenoby">
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="https://kenoby.com/blog/">Blog</a></li>
            <li><a href="https://kenoby.com/materiais/">Materiais Gratuitos</a></li>
            <li><a href="https://jobs.kenoby.com/kenoby">Carreiras</a></li>
          </ul>
        </div>
    </nav>

    <section id="app" style="margin-top:20px;"> 
        @yield('content')
    </section>
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{ app('url')->asset('materialize/js/materialize.min.js') }}"></script>
    
</body>
</html>
        
