<html>
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/floating-labels/floating-labels.css" rel="stylesheet">
  </head>
<body class="text-center">
    <form id="user" class="form-signin" method="POST" action="/register.php">
        <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
        <label for="login" class="sr-only">Login</label>
        <input type="text" id="login" name="login" class="form-control" placeholder="Login" required="" autofocus=""><br>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <br>
        <h5 class="h5 mb-3 font-weight-normal">Already have an account? Please <a href="../login.php">Sign In</a>!</h5>
    </form>
</body>
</html>