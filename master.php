
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eagle Physiocare</title>

<link rel="shortcut icon" href="images/logo/LOGO1.png" type="image/x-icon">

<link rel="stylesheet" href="css/daisyUI.css">
<script src="js/tailwindcdn.js"></script>
<script src="js/jquery.js"></script>
<script src="js/actions.js"></script>

</head>

<?php include 'functions.php';?>

<body>
    <center>
        <div class="row" style="margin:auto;padding:10px;">
            <div class="form-control w-full max-w-xs">
                <img src="images/logo/iconlight.png" alt="hero-image" class="ah a2f">   
            </div>    
        </div>
    </center>
    <div class="not-prose grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
        <?php getBlogs($connect);?>
    </div>
    <button id='add' class="mt-2 ml-4 inline-block cursor-pointer rounded-md bg-gray-800 px-4 py-3 text-center text-sm font-semibold uppercase text-white transition duration-200 ease-in-out hover:bg-gray-900">New Blog</button>
            <input type="checkbox" id="my-modal" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box relative">
                    <label for="my-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                    <h3 class="font-bold text-lg">Are You Sure You Want To Delete this Article.</h3>
                    <p class="py-4">It Will be moved to archived articles</p>
                    <div class="modal-action">
                    <label for="my-modal" class="btn" id="delete">Yes</label>
                    </div>
                </div>
            </div>
</body>

</html>