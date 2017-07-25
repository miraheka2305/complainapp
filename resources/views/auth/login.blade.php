@if(Auth::check())
    @if(Auth::user()->type== 0)
        <script type="text/javascript">
            window.location = "{{'home-ad'}}";//here double curly bracket
        </script>
    @endif
    <script type="text/javascript">
        window.location = "{{'home-fl'}}";//here double curly bracket
    </script>
@endif
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link type="text/css" rel="stylesheet" href="css/collab.css"  media="screen,projection">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
</head>

<body>
    <!-- <nav>
        <div class="nav-wrapper white">
            <a href="{{route('homeadmin')}}" class="brand-logo"><img class="responsive-img logo" src="img/collab.png"></a>
        </div>
    </nav> -->

    <div class="row" style="padding:60px;">
        <div class="col s12 l6">
            <div class="row valign-wrapper" style="padding-top: 50px;">
                <img class="responsive-img" src="img/collab.png">
            </div>
        </div>
        <div class="col s12 l6" style="padding:90px;">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="username" name="email" type="text" class="validate">
                            <label for="username">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" type="password" class="validate" name="password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" style="float:right" type="submit" name="action">
                        Login
                    </button>
                </form>
            
        </div>
    </div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
