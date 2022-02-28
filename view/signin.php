<?php
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
                        <h1 class="text-center">Facebook Sign In</h1>
                    </div>
                </div>
                <form method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            placeholder="Enter username"
                            name="username"
                        />
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input
                            type="password"
                            class="form-control"
                            id="pswd"
                            placeholder="Enter password"
                            name="pswd"
                        />
                    </div>
                    <div class="form-group">
                        <label for="cpwd">Repeat Password:</label>
                        <input
                            type="password"
                            class="form-control"
                            id="cpwd"
                            placeholder="Repeat password"
                            name="cpswd"
                        />
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Đăng ký</button>
                    </div>
                </form>
                <?php
                    if (isset($_POST['submit'])) {
                        if(empty($_POST['username']) || empty($_POST['pswd']))
                        {
                            echo "<p class='text-danger'>Please fill all the fields</p>";
                        } 
                        elseif($_POST['pswd'] != $_POST['cpswd'])
                        {
                            echo "<p class='text-danger'>Password not match</p>";
                        }
                        else 
                        {
                            try {
                                $get_data->signin($_POST['username'], $_POST['pswd']);
                                header('location: index.php');
                            } catch (Exception $e) {
                                echo '<p class="text-danger">Sign in fail</p>';
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
