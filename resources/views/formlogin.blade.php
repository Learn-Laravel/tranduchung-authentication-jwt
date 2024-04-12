<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset( 'css/login.css' )}}">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">
          <div class="form-header">
            <h1>Account Login</h1>
          </div>
          <div class="form-content">
            <form action='api/auth/login' method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="text" name="email" required="required"/>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required="required"/>
              </div>
              <div class="form-group">
                <label class="form-remember">
                  <input type="checkbox"/>Remember Me
                </label><a class="form-recovery" href="#">Forgot Password?</a>
              </div>
              <div class="form-group">
                <button type="submit">Log In</button>
              </div>
            </form>
        </div>
    </div>
</body>
</html>