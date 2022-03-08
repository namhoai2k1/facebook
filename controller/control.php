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

        public function addblog($date, $title, $s_content, $l_conten) {
            global $conn;
            $sql = "INSERT INTO blog (date, title, short_content, long_content) VALUES ('$date', '$title', '$s_content', '$l_conten')";
            $query = mysqli_query($conn, $sql);
            return $query;
        }
    }
?>

