<?php require('config.php');
// $qry2 = mysqli_query($conn, "SELECT * FROM movies WHERE movie_id='" . $_GET['id'] . "'");
// $movie = mysqli_fetch_array($qry2);
$id = $_GET['movie_id'];
$query = "SELECT * FROM movies WHERE movie_id=" . $id;
//get result 
$result = mysqli_query($conn, $query);
$movie = mysqli_fetch_array($result, MYSQLI_ASSOC);
// free result (free it from memory)
mysqli_free_result($result);
//close connection
mysqli_close($conn);
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./css/book-movie.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <?php include('nav.php'); ?>
    <h3><?php echo $movie['movie_name']; ?> </h3>



    <div class="movie-container">
        <div class="movie-image"><img src="<?php echo $movie['movie_image']; ?>"></div>
        <div class="movie-details">
            <h2>
                <h2><?php echo $movie['movie_name']; ?></h2>
                <p><?php echo $movie['movie_desc']; ?></p>
        </div>
        <div class="booking-container">
            <label>The movie you want to book: </label>
            <input type="text" disabled value="<?php echo $movie['movie_name']; ?>">

        </div>


        <!-- <a href="" class="btn book">Book</a> -->
    </div>
    </div>
</body>