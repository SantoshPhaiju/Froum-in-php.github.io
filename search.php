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
        #main-container {
            min-height: 100vh;
        }
    </style>

</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>


    <?php 
    
    if(isset($_COOKIE['name']) && $_COOKIE['name'] == true){
        include 'partials/_header.php';
    }else{
        include 'partials/_header1.php';
    }

    // if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    //     include 'partials/_header.php';
    // }else{
    //     include 'partials/_header1.php';
    // }
    
    ?>







    <!-- Search results starts here -->

    <div class="container my-3" id="main-container">
        <h1 class="py-3">Secarch result for: <em> "<?php echo $_GET['search']  ?>" </em> </h1>

        <?php


        $noresults = true;
        $query =  $_GET['search'];
        $sql = "SELECT * FROM `threads` WHERE thread_title LIKE '%$query%' OR thread_desc LIKE '%$query%'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $thread_id = $row['thread_id'];
            $url = "thread.php?threadid=". $thread_id;
            $noresults = false;

            // Display the search result
            echo '<div class="result">
                        <h3> <a href="'. $url .'" class="text-dark"> '. $title  .' </a></h3>
                        <p>'. $desc .'</p>
                 </div>';
        }

        if ($noresults){
            echo '<div class="container my-3">
            <div class="container-fluid bg-light text-dark p-5">
                <div class="container bg-light p-5">
                    <p class="display-5 fw-bold">No Results Found</p>
                    <p class="lead"> Suggestions:
                    <ul>
                    <li>Make sure that all words are spelled correctly.</li>
                    <li>Try different keywords.</li>
                    <li>Try more general keywords.</li>
                    <li>Try fewer keywords.</li>
                    </ul>
                     </p>
                  </div>
                 </div>
             </div>';
        }


        ?>

    </div>


    <?php include 'partials/_footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
