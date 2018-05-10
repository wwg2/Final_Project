<!DOCTYPE html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://web.njit.edu/~snh7/is218/todo/assets/css/main.css" rel="stylesheet">
    <title>Todo App</title>
  </head>

<body>
 

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

      <a class="navbar-brand" href="https://web.njit.edu/~snh7/is218/todo/">My Todo App</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto"></ul>
                <?php if(!isset($_SESSION['email'])):
         ?>
          <ul class="navbar-nav float-right">
            <li class="nav-item active">
              <a class="nav-link" href="https://web.njit.edu/~snh7/is218/todo/login">Login</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="https://web.njit.edu/~snh7/is218/todo/register">Register</a>
            </li>
          </ul>
        <?php else: 
        ?>
