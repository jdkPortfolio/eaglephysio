<?php
    
    include 'config.php';

    if($_POST['action'] == 'login'){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $query = "select id, password from users where username = '$user'";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchall();

        $output = [];
        foreach($result as $row){
            if($row['password'] == $pass){
            $output['id'] = $row['id'];
            $_SESSION['userid'] = $row['id'];
            }
        }

        echo json_encode($output);
    }

    if($_POST['action'] == 'delete_blog'){
        $id = $_POST['id'];
        $output = "";
        try{
            $query = "update blogs set status = 0 where id = '$id'";
            $statement = $connect->prepare($query);
            $statement->execute();
            $output = "success";    
        }catch(Exception $e){
            $output = $e->getmessage();
        }

        echo json_encode($output);

    }


?>