<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../dispusipda.png">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>Login</title>
    </head>    
    <body>
        <div class="container">
            <div class="icon-container">
                <i class="fas fa-user-circle user-icon"></i>
            </div>
            <h1>Login</h1>
            <form action="proses_login.php" method="post">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Masukan Username">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </body>    
</html>