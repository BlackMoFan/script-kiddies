<?php
    require_once '../utilities/connection.php';
    require_once './functions.inc.php';

    if(isset($_POST['delete_student'])) {
        $user_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

        //if user id exists, then retrieve data
        $userIdExists = userIdExistence($conn, $user_id);

        $query = "DELETE FROM users WHERE user_id='$user_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            session_start();
            $_SESSION["fullnameDeleted"] = $userIdExists["full_name"];
            if($_SESSION["file_name"] === "index") {
                header("Location: ../index.php?error=none");
            } else if($_SESSION["file_name"] === "employees") {
                header("Location: ../components/employees.php?error=none");
            }
            // header("Location: ../index.php?error=none");
            exit();
        } else {
            if($_SESSION["file_name"] === "index") {
                header("Location: ../index.php?error=somethingwrong");
            } else if($_SESSION["file_name"] === "employees") {
                header("Location: ../components/employees.php?error=somethingwrong");
            }
            // header("Location: ../index.php?error=somethingwrong");
            exit();
        }
    }