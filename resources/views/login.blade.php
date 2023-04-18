<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/img/MC.png">
    <link rel="stylesheet" href="/css/style.css">
    <title>Master Craft</title>
</head>

<body>
    
    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown ">
        
        <div id="formContent" class="bg-dark">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first my-3">
                <img src="/img/logo_white.png" id="icon" alt="User Icon"/>
            </div>

            <!-- Login Form -->
            <form action="{{route('auth')}}" method="POST">
                @csrf
                <input type="email" id="login" class="fadeIn second" name="email" placeholder="Usuario">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Senha">
                <input type="submit" class="fadeIn fourth" value="Entrar">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Esqueceu sua senha?</a>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>