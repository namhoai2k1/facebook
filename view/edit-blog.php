<?php
    include '../controller/control.php';
    $get_data = new Data();
    session_start();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    // thay doi du lieu
    if(isset($_POST['submit'])){
        header('location: about.php');
        $date = $_POST['date'];
        $title = $_POST['title'];
        $scontent = $_POST['scontent'];
        $lcontent = $_POST['lcontent'];
        $get_data->editblog($id, $date, $title, $scontent, $lcontent);
    }   
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
                <h1 class="text-center">Edit Blog</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-4">
                        <div class="form-container">
                            <form id="form" method="post">
                                <div class="form-group">
                                    <label for="title">Date</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="date"
                                        name="date"
                                        value="<?php echo $get_data->selecteditblog($id)["date"]; ?>"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="title"
                                        placeholder="Title"
                                        name="title"
                                        value="<?php echo $get_data->selecteditblog($id)["title"]; ?>"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="content">Short Content</label>
                                    <textarea
                                        class="form-control"
                                        id="scontent"
                                        rows="3"
                                        placeholder="Short Content"
                                        name="scontent"
                                    ><?php echo $get_data->selecteditblog($id)["S_content"]; ?></textarea>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content">Long Content</label>
                                    <textarea
                                        class="form-control"
                                        id="lcontent"
                                        rows="3"
                                        placeholder="Long Content"
                                        name="lcontent"
                                    ><?php echo $get_data->selecteditblog($id)["L_content"]; ?></textarea>
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">
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
