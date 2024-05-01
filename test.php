<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .form-control {
            border-radius: 0;
        }
        .login-form {
            width: 500px;
            margin: 0 auto;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            padding: 30px;
            border-radius: 5px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input {
            height: auto;
            padding: 8px 9px;
            font-size: 14px;
            line-height: 1.42857143;
            border-radius: 3px;
        }
        .btn {
            font-weight: bold;
            padding: 9px 20px;
            border-radius: 3px;
        }
        .btn:hover {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <form>
            <h2 class="text-center">Login</h2>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <div class="clearfix">
                <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                <a href="#" class="pull-right">Forgot Password?</a>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>