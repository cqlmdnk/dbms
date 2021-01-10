<?php  
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $row = GetMovieById($id);
            $actor_row = GetMovieActorById($id);
        }
        else{
            include("err404.php");
        }

        
        
?>


<section class="movie-section">
    <div class="poster-container">

        <h1 class="title-name"><?php echo $row['movieName'] ?></h1>

        <img class="poster" id=<?php echo $row['movieID'] ?> src=<?php echo $row['imageUrl']?> />;
        
    </div>
    <section class="title-info"> <?php echo $row['movieInfo'] ?> </section> 
    <?php 
    foreach($actor_row as $actor){
        echo "<img src=\"" . $actor['personImageUrl'] . "\" />";
    }
        
    
    ?>
</section>