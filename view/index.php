<?php
    session_start();
    include '../controller/control.php';
    $get_data = new Data();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- link bootrap 4 -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="./style/style.css">
        <title>Facebook Login</title>
    </head>
    <body>
        <header>
            <!-- <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 3</a>
                    </li>
                </ul>
            </nav> -->
        </header>
        <main>
            <div class="container main_login">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="text-center">Facebook Login</h1>
                    </div>
                </div>
                <form method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input
                            type="username"
                            class="form-control"
                            id="username"
                            placeholder="Enter email"
                            name="username"
                        />
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input
                            type="password"
                            class="form-control"
                            id="pwd"
                            placeholder="Enter password"
                            name="pswd"
                        />
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">
                        Login 
                    </button>
                    <button type="submit" class="btn btn-info">
                        <a href="./signin.php">Sign In</a>
                    </button>
                </form>
                <?php 
                    if (isset($_POST['login'])) {
                        if(empty($_POST['username']) || empty($_POST['pswd']))
                        {
                            echo "<p class='text-danger'>Please fill all the fields</p>";
                        }
                        else 
                        {
                            $login = $get_data->login($_POST['username'], $_POST['pswd']);
                            if ($login == 1) {
                                $_SESSION['username'] = $_POST['username'];
                                header('location: about.php');
                                // echo '<p class="text-white">Login success</p>';
                            } else {
                                echo '<p class="text-danger">Login fail</p>';
                            }
                        }
                    }
                ?>
            </div>
        </main>
        <footer>
            <div class="container-fluid footer">
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            &copy; Copyright 2018 - All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
