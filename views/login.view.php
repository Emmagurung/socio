<!DOCTYPE html>
<html lang="en">

<head>
  <title>Social Networking</title>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <style>
    html,
    body {
      height: 100%;
    }

    .global-container {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f5f5f5;
    }

    form {
      padding-top: 10px;
      font-size: 14px;
      margin-top: 30px;
    }

    .card-title {
      font-weight: 300;
    }

    .btn {
      font-size: 14px;
      margin-top: 20px;
    }


    .login-form {
      width: 330px;
      margin: 20px;
    }

    .sign-up {
      text-align: center;
      padding: 20px 0 0;
    }

    .alert {
      margin-bottom: -30px;
      font-size: 13px;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="global-container">
    <div class="card login-form">
      <div class="card-body">
        <h3 class="card-title text-center">Log in</h3>
        <div class="card-text">
          <!--
            <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
          <form method="POST">
            <!-- to error: add class "has-danger" -->
            <div class="form-group">
              <label>Email address</label>
              <input required
                type="email"
                class="form-control form-control-sm"
                name="email">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input required
                type="password"
                class="form-control form-control-sm"
                name="password">
            </div>
            <div>
              <?php
              if ($error) {
                echo "<p class='text-danger'>$error</p>";
              }
              ?>
            </div>
            <button type="submit"
              class="btn btn-primary btn-block">Sign in</button>

            <div class="sign-up">
              Don't have an account? <a href="register.php">Create One</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>