<?php
    session_start();
    if ($_SESSION['username'] == '') {
        header('location: login.php');
    } else {
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
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../view/style/style.css" />
        <title>Facebook Login</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="#">Facebook</a>

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbardrop - 1"
                            data-toggle="dropdown"
                        >
                            Blog
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Add Blog</a>
                        </div>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbardrop-2"
                            data-toggle="dropdown"
                        >
                            <?php echo $_SESSION['username']; ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                                >Change Password</a
                            >
                            <a class="dropdown-item" href="./index.php"
                                >LogOut</a
                            >
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="blog__title">
                <h1>Blog</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-4">
                        <div class="form-container">
                            <form id="form">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="date"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="title"
                                        placeholder="Title"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea
                                        class="form-control"
                                        id="content"
                                        rows="3"
                                        placeholder="Content"
                                    ></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="container-fluid footer">
                <div class="row">
                    <div class="col-sm-12">
                        <p>&copy; Copyright 2018 - All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <?php
    }
?>
    </body>
</html>
