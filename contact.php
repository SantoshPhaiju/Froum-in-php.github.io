<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome to iDiscuss - Coding Forums </title>
    <style>
        .contheight {
            min-height: 80vh;
        }

    </style>
    <!-- <link rel="stylesheet" href="/forum/admin/style.css"> -->
</head>

<body>

    <?php include 'partials/_dbconnect.php'; ?>
    <?php 
    
    if(isset($_GET['loggedin']) && $_GET['loggedin'] == true){
        include 'partials/_header.php'; 
    }else{
        include 'partials/_header1.php';
    }
    ?>


<!-- Inserting form details in database -->

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact` (`fname`, `lname`, `subject`, `message`, `timestamp`) VALUES ('$fname', '$lname', '$subject', '$message', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your message is sent successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

}



?>



    <!-- Here the form goes here to save the contact details. -->


    <div class="container contheight my-3">
        <h1 class="text-center">Contact Us</h1>
        <form action="/forum/contact.php" method="POST">
            <div class="row">
                <div class="col">
                    <input type="text" name="fname" id="fname" class="form-control form-control-lg" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" name="lname" id="lname" class="form-control form-control-lg" placeholder="Last name" >
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" name="subject" id="subject" class="form-control form-control-lg my-3" placeholder="Subject" >
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-floating">
                        <textarea class="form-control form-control-lg" name="message" placeholder="Leave a message here" id="message" style="height: 200px;"></textarea>
                        <label for="message" style="font-size: 18px; font-weight: bold;">Message</label>
                    </div>
                </div>
            </div>
            <button class="btn buttonCall mt-3">
                Send Message
            </button>
        </form>
    </div>






    <?php include 'partials/_footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>