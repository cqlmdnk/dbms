
<?php 
require_once('Business/get_movies.php');
?>

<section class="mostrated-section">
    <h2 style="text-align: center;"> Most Rated Movies </h2>
    <div> 
        <?php 
            echo GetMostRatedMovies();

        ?>
    </div>
</section>