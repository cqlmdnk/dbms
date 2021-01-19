<?php  
require_once('Business/get_persons_nonajax.php');
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $row = GetPersonById($id);
            // get movies and series by join
        }
        else{
            include("err404.php");
        }

        
        
?>


<section class="movie-section">
    <div class="poster-container">

        <h1 class="title-name"><?php echo $row['personName'] ?></h1>

        <img class="poster" id=<?php echo $row['personId'] ?> src=<?php echo $row['personImageUrl']?> />;
        
    </div>
    <section class="title-info"> <div class="info"><?php echo $row['personInfo'] ?> </div>
    <br/>
    <?php 
    
    
    ?>
    </section> 
</section>