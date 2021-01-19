<?php  
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $row = GetSeriesById($id);
            $actor_row = GetSeriesActorBySeriesId($id);
            $creator_row = GetSeriesCreatorBySeriesId($id);
        }
        else{
            include("err404.php");
        }
        require_once("Business/show_add_content.php");
        $_SESSION['seriesID'] =  $row['seriesID'];   
        unset($_SESSION['movieID']);
        
?>


<section class="series-section">
    <div class="poster-container">

        <h1 class="title-name"><?php echo $row['seriesName'] ?></h1>

        <img class="poster" id=<?php echo $row['seriesID'] ?> src=<?php echo $row['imageUrl']?> />;
        
        <h1 class="title-info">Relase Year : <?php echo $row['startYear'] ?></h1>
        <h1 class="title-info">Duration : <?php echo $row['duration'] ?></h1>
        <h1 class="title-info">Rating : <?php echo $row['rating'] ?>/10</h1>
        <h1 class="title-info">Nation : <?php echo $row['nation'] ?></h1>
        
    </div>
    <section class="title-info"> <?php echo $row['info'] ?>  
    <br/>
    <?php 
    foreach($actor_row as $actor){
        echo "<a href=\"?url=person&id=".$actor['personId'] ."\"><button class=\"person-button\" id = ".$actor['personId']. " style= \"background-image: url('" . $actor['personImageUrl'] . "');\"></button></a>";
    }
    ?>
    <br/>
    <?php
    foreach($creator_row as $creator){
        echo "<a href=\"?url=person&id=".$creator['personId'] ."\"><button class=\"person-button\" id = ".$creator['personId']. " style= \"background-image: url('" . $creator['personImageUrl'] . "');\"></button></a>";
    }
    ?> 
    </section>
    <?php 
    
    echo ShowContentAdders();
    ?>
</section>