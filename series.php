<?php  
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $row = GetSeriesById($id);
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
</section>