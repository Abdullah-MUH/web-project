<?php require('./config.php');
$query = 'SELECT * FROM movies';
// get results
$result = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($posts);
// free result (free it from memory)
mysqli_free_result($result);
//close connection
mysqli_close($conn); 
session_start();
            if (isset($_SESSION["useruid"])) {
                echo "Hello, ".$_SESSION["useruid"]."";
            }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Cinema Film Booking Website -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Website</title>
    <!-- LINK CSS FILE -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>


<body>
    <!-- Navigation Bar (Starts) -->
    <header>
        <a href="./index.php" class="logo">
            <i class='bx bxs-movie'></i> Movies
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <!-- Menu -->
        <ul class="navbar">
            <li><a href="./index.php" class="home-active">Home</a></li>
            <li><a href="#movies">Movies</a></li>
            <li><a href="#coming">Coming Soon</a></li>
            <li><a href="#film-search">Search</a></li>
            <li><a href="#newsletter">Newsletter</a></li>
        </ul>
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<a href='inc/logout-inc.php' class='btn'>Log out</a>";
            }
            else {
                echo "<a href='login.php' class='btn'>Sign In / Sign Up</a>";
            }
        ?>
                <?php
            if (isset($_SESSION["useruid"])) {
                echo "<a href='profile.php' class='btn'>Profile</a>";
            }
            else {
                echo "";
            }
        ?>
    </header>
    <!-- Navigation Bar (Ends) -->


    <!-- Home (starts) -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!-- Box 1 -->
            <div class="swiper-slide conatiner">
                <img src="images/header.png" alt="">
                <div class="home-text">
                    <span>Live the Journey</span>
                    <h1 class="white-text">The Lord of The Rings: The Fellowship of the Ring</h1>
                    <a href="#" class="btn">Book Now</a>
                    <a href="#" class="play">
                        <i class='bx bx-play'></i>

                    </a>
                </div>
            </div>
            <!-- Home (ends) -->


    </section>
    <a href="about-movie" class="movie-url"></a>
    <!-- Movies -->

    <section class="movies" id="movies">
        <h2 class="heading">Opening This Week</h2>
        <!-- Movies Conatiner -->
        <div class="movies-container">
            <?php foreach ($movies as $movie) : ?>
            <!-- Box 1 -->
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo $movie['movie_image'] ?>" alt="">
                </div>
                <h3><?php echo $movie['movie_name']; ?></h3>
                <a href="<?php echo ROOT_URL; ?>book-movie.php?movie_id=<?php echo $movie['movie_id']; ?>"
                    class="btn">Book</a>
            </div>
            <?php endforeach ?>
        </div>
    </section>


    <!-- Coming soon -->
    <section class=" coming" id="coming">
        <h2 class="heading">Coming Soon</h2>
        <!-- Coming Container -->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <!-- Box 1 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/harakiri.png" alt="">
                    </div>
                    <h3>Harakiri</h3>
                    <span>133 min | Samurai </span>
                </div>
                <!-- Box 2 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/7samurai.png" alt="">
                    </div>
                    <h3>Seven Samurai</h3>
                    <span>207 min | Samurai</span>
                </div>
                <!-- Box 3 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/rashomon.png" alt="">
                    </div>
                    <h3>Rashomon</h3>
                    <span>93 min | Drama/Crime</span>
                </div>
                <!-- Box 4 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/godfather2.png" alt="">
                    </div>
                    <h3>The Godfather: Part II</h3>
                    <span>202 min | Crime/Drama</span>
                </div>
                <!-- Box 5 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/funnygames.png" alt="">
                    </div>
                    <h3>Funny Games</h3>
                    <span>108 min | Crime/Drama/Thriller</span>
                </div>
                <!-- Box 6 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/barrylyndon.png" alt="">
                    </div>
                    <h3>Barry Lyndon</h3>
                    <span>184 min | Drama/War</span>
                </div>
                <!-- Box 7 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/spiritedaway.png" alt="">
                    </div>
                    <h3>Spirited Away</h3>
                    <span>125 min | Fantasy/Adventure</span>
                </div>
                <!-- Box 8 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/werckmeisterharmonies.png" alt="">
                    </div>
                    <h3>Werckmeister Harmonies</h3>
                    <span>145 min | Drama/Mystery</span>
                </div>
                <!-- Box 9 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/satantango.png" alt="">
                    </div>
                    <h3>Satantango</h3>
                    <span>450min | Drama</span>
                </div>
                <!-- Box 10 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/onthesilverglobe.png" alt="">
                    </div>
                    <h3>On the Silver Globe</h3>
                    <span>157 min | Sci-fi/Drama</span>
                </div>
            </div>

        </div>
    </section>

    <!-- Film Search -->
<section class="newsletter" id="film-search">
    <h2>Search for a film</h2>
    <div class="container">
        <form action="">
            <input type="search" name="search"  minlength="3" maxlength="30" placeholder="Search for a film..."  required>
            <input type="submit" name="submit" value="Search" class="btn">
        </form>
    </div>
</section>
<!-- Newsletter -->
<section class="newsletter" id="newsletter">
    <h2>Subscribe To Get Newsletter</h2>
    <form action="">
        <input type="text" class="email" minlength="8" maxlength="30" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="You have to enter valid email example@mail.com"  placeholder=" Enter Email..." required>
        <input type="submit" value="Subscribe" class="btn">
    </form>
</section>

    <!-- footer (Starts) -->
    <section class="footer">
        <a href="#" class="logo">
            <i class='bx bxs-movie'></i> Movies
        </a>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-tiktok'></i></a>
        </div>
    </section>
    <div class="copyright">
        <p>&#169; All rights reserved. Designed by Group 1.</p>
    </div>
    </section>
    <!-- footer (Ends) -->


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Link To Custom JS -->
    <script src="js/main.js"></script>

</body>

</html>
