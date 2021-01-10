<?php  
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $row = GetSeriesById($id);
            $actor_row = GetSeriesActorById($id);
        }
        else{
            include("err404.php");
        }

        
        
?>


<section class="series-section">
    <div class="poster-container">

        <h1 class="title-name"><?php echo $row['seriesName'] ?></h1>

        <img class="poster" id=<?php echo $row['seriesID'] ?> src=<?php echo $row['imageUrl']?> />;
        
    </div>
    <section class="title-info"> <?php echo $row['info'] ?> </section> 
    <?php 
    foreach($actor_row as $actor){
        echo "<img src=\"" . $actor['personImageUrl'] . "\" />";
    }
        
    
    ?>
</section>