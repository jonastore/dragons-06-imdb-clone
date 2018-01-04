
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/08e7939fc8.js"></script>
</head>
    <!--style for register, make a new file later-->

    <style>
    
    html{
        
        background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvp8GMRz-lSUgR0EfVlXq4lbz9nn7IOZIsj8RY7ATjK2i-aj5XwA);
        background-repeat: no-repeat;
        background-size: cover;
        background-color: none;
        height: 100%;
    
    }
    

    

    </style>

    <!--Register Form Bulma-->
<body>

    

    <div class="container is-fluid">

        <div class="columns is-centered ">
            <h1 class="title">Moviekyte</h1>
        </div>

        <div class="columns is-centered">
            <h2 class="subtitle">Create New Account</h2>
        </div>
        
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="field">
                    <div class="control">
                        <input class="input" type="text" placeholder="Name">
                    </div>
                </div>

                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="Email">
                        <span class="icon is-small is-left">
                        <i class="fa fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                        <i class="fa fa-check"></i>
                        </span>
                    </p>
                </div>

                <div class="field"> 
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Password">
                        <span class="icon is-small is-left">
                        <i class="fa fa-lock"></i>
                        </span>
                    </p>
                </div>

                <div class="field">
                    <p class="control">
                        <button class="button is-success is-fullwidth">
                        Submit  
                        </button>
                    </p>
                </div>

                <div class="columns is-centered">
                    <h2 class="subtitle">Already have an Account?
                    <a href="/login">Sign in</a></h2>
                </div>
            </div>
        </div>

    </div>

 

</body>
</html>
