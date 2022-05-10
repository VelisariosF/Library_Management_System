<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Login/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <section class="register-page">
        <h1 class="title">Welcome, register to continue</h1>

        <form class="register-form" action="/home.php" method="POST">
           

            <input class="user-input" type="text" placeholder="username.." name="username" required/>

            <input class="user-input" type="email" placeholder="email.." name="email" required/>
             
             <input class="user-input" type="password" placeholder="password.." name="password" required/>
        
            
             <input class="user-submit" type="submit" placeholder="register" name="register" value="Register"/>
           </form>

           <a href="../../Login.php" >Already have an account.</a>
    </section>
</body>
</html>