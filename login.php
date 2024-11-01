<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<style>

    body{
        background-color: #4B4444;
    }

    .main {
        height: 100vh;
    }

    .login-box {
        width: 500px;
        height: 400px;
        box-sizing: border-box;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: -7px 8px 5px #D7D5D5;
    }
</style>


<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 ">
            <h3 class="d-flex flex-column align-items-center ">
            <form method="post">Login</h3>
                <div>
                    <label for="username">username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div>
                    <label for="password">password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div>
                    <button class="btn btn-primary form-control mt-3" type="submit" name="btnlogin">submit</button>
                    <button class="btn btn-danger form-control mt-3" type="reset" name="btnlogin">Batal</button>

                </div>
            </form>
        </div>