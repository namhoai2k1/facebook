<?php 
    include('connect.php'); 
    class Data {
        public function login($username, $password) {
            global $conn;
            $sql = "SELECT * FROM login WHERE user_name = '$username' AND pass_word = '$password'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            return $row;
        }
        public function signin($user, $password) {
            global $conn;
            $sql = "INSERT INTO login (user_name, pass_word) VALUES ('$user', '$password')";
            $query = mysqli_query($conn, $sql);
            return $query;
        }
        public function addblog($date, $title, $s_content, $l_conten, $author) {
            global $conn;
            $sql = "INSERT INTO blog (date, title, L_content, S_content, author) VALUES ('$date', '$title', '$s_content', '$l_conten', '$author')";
            $query = mysqli_query($conn, $sql);
            return $query;
        }

        public function selectblog () {
            global $conn;
            $sql = "SELECT id,title,author,date FROM `blog`";
            $query = mysqli_query($conn, $sql);
            return $query;
        }

        // tao function delete
        public function deleteblog($id) {
            global $conn;
            $sql = "DELETE FROM blog WHERE id = '$id'";
            $query = mysqli_query($conn, $sql);
            return $query;
        }

        // tao function edit
        public function editblog($id, $date, $title, $S_content, $L_conten) {
            global $conn;
            $sql = "UPDATE blog SET date = '$date', title = '$title', S_content = '$S_content', L_content = '$L_conten' WHERE id = '$id'";
            $query = mysqli_query($conn, $sql);
            return $query;
        }

        // tao function select edit
        public function selecteditblog($id) {
            global $conn;
            $sql = "SELECT * FROM blog WHERE id = '$id'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($query);  
            return $row;
        }
    }
?>

