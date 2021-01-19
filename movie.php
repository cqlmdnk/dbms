<?php  
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $row = GetMovieById($id);
            $actor_row = GetMovieActorById($id);
            $director_row = GetMovieDirectorById($id);
            $writer_row = GetMovieWriterById($id);
        }
        else{
            include("err404.php");
        }
        require_once("Business/show_add_content.php");
        require_once('Business/get_reviews.php');
        require_once('Business/show_rate_stars.php');
        $_SESSION['movieID'] =  $row['movieID'];   
        unset($_SESSION['seriesID']);
        
        
?>
 <script src="assets/js/rate.js"></script> 

<section class="movie-section">
    <div class="poster-container">

        <h1 class="title-name"><?php echo $row['movieName'] ?></h1>

        <img class="poster" id=<?php echo $row['movieID'] ?> src=<?php echo $row['imageUrl']?> />;
        <h1 class="title-info">Relase Year : <?php echo $row['releaseYear'] ?></h1>
        <h1 class="title-info">Duration : <?php echo $row['duration'] ?></h1>
        <h1 class="title-info">Rating : <?php echo $row['rating'] ?>/10</h1>
        <h1 class="title-info">Nation : <?php echo $row['nation'] ?></h1>
        
        
        <?php
        echo ShowRateStars(); 
        ?>
   
    </div>
    <section class="title-info"> <div class="info"><?php echo $row['movieInfo'] ?> </div>
    <br/>
    <?php 
    foreach($actor_row as $actor){
        echo "<a href=\"?url=person&id=".$actor['personId'] ."\"><button class=\"person-button\" id = ".$actor['personId']. " style= \"background-image: url('" . $actor['personImageUrl'] . "');\"></button></a>";
    }
    
    ?>
    <br/>
    <br/>
    <?php 
    foreach($director_row as $director){
        echo "<a href=\"?url=person&id=".$director['personId'] ."\"><button class=\"person-button\" id = ".$director['personId']. " style= \"background-image: url('" . $director['personImageUrl'] . "');\"></button></a>";
    }
    
    ?>
    <br/>
    <br/>
    <?php 
    foreach($writer_row as $writer){
        echo "<a href=\"?url=person&id=".$writer['personId'] ."\"><button class=\"person-button\" id = ".$writer['personId']. " style= \"background-image: url('" . $writer['personImageUrl'] . "');\"></button></a>";
    }
    
    ?>
    </section> 
    <?php 
    
    echo ShowContentAdders();
    ?>
</section>
<section class="reviews-section">
<h2 style="text-align: center;"> Reviews </h2>
    <div> 
        <?php 
            echo GetMovieReviewsById($_SESSION['movieID']);

        ?>
    </div>
</section>