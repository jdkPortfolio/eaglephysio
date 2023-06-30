<?php

    include 'config.php';

    function getBlogs($connect){
        $query = "";
        if($_SESSION['userid'] == 1){
            $query .= "select id, title, image, created_at from blogs where status = 1";
        }else if(!empty($_SESSION['userid']) & $_SESSION['userid'] != 1){
            $query .= "select id, title, image, created_at from blogs where author =".$_SESSION['userid']." and status = 1";
        }

        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchall();

        $output = '';
        foreach($result as $row){
            $output .= 
            '<div class="card w-96 bg-base-100 shadow-xl">
                <figure><img src="images/blogimages/'.$row['image'].'" alt="image" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                    '.$row['title'].'
                    </h2>
                    <p>'.date($row['created_at']).'</p>
                    <div class="card-actions justify-end">
                        <button name="'.$row['id'].'" id="edit" class="mt-2 inline-block cursor-pointer rounded-md bg-gray-800 px-4 py-3 text-center text-sm font-semibold uppercase text-white transition duration-200 ease-in-out hover:bg-gray-900">Edit</button>
                        <label for="my-modal" class="mt-2 sbtn modal-button">Delete</label>
                    </div>
                </div>
            </div>';
        }

        echo $output;
    }

?>