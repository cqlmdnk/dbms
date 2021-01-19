
<?php 
require_once('Business/get_reviews.php');
?>

<section class="reviews-section">
    <h2 style="text-align: center;"> Reviews </h2>
    <div> 
        <?php 
            echo GetMovieReviewsByUsername($_SESSION['username']);

        ?>
    </div>
</section>