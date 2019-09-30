<?php include 'header.php'; ?>

    <?php 
	    $id = $_GET['id'];
	   foreach($portfolio as $key => $value){
           $a = $key;
       }
       if ($id <= $a):
	?>
    <div class="text2">
        <div class="container has-text-centered">
            <h1 class="title is-italic"> Welcome to My Portfolio</h1>
        </div>
    </div>

    <div class="text2">
        <div class="container has-text-centered">
                <h1 class="title has-text-weight-bold"> <?php echo $portfolio [$id]['judul'] ?> </h1>
                <p class="subtitle"><?php echo $portfolio [$id]['sub'] ?> </p>
                <?php foreach ($portfolio[$id]['tag'] as $key => $value): ?>
                <p class="<?php echo $value['class'] ?>"><?php echo $value['label'] ?></p>
                <?php endforeach ?>
                <p class="subtitle"> <?php echo $portfolio [$id]['komplit'] ?></p>
                <a class="button" onclick="goBack()"> <- Back </a>
        </div>
    </div>
    <div class="container">
        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="tile is-child box">
                  <a href="<?php echo $portfolio [$id]['imgweb'][0] ?>" 
                     data-lightbox="<?php echo $portfolio [$id]['galeri'] ?>" 
                     data-title="<?php echo $portfolio [$id]['capt'][0] ?>">
                     <img src="<?php echo $portfolio [$id]['imgweb'][0] ?>">
                  </a>    
                </div>
            </div>
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                  <a href="<?php echo $portfolio [$id]['imgweb'][1] ?>" 
                     data-lightbox="<?php echo $portfolio [$id]['galeri'] ?>" 
                     data-title="<?php echo $portfolio [$id]['capt'][1] ?>">
                     <img src="<?php echo $portfolio [$id]['imgweb'][1] ?>">
                  </a>    
                </div>
                <div class="tile is-child box">
                  <a href="<?php echo $portfolio [$id]['imgweb'][2] ?>"
                     data-lightbox="<?php echo $portfolio [$id]['galeri'] ?>" 
                     data-title="<?php echo $portfolio [$id]['capt'][2] ?>">
                     <img src="<?php echo $portfolio [$id]['imgweb'][2] ?>">
                  </a> 
                </div>   
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

    <?php else: ?>
    <div class="text2">
        <div class="container has-text-centered">
            <h1 class="title is-italic"> Tampilan Tidak tersedia </h1>
            <a class="button" onclick="goBack()"> <- Back </a>
        </div>
    </div>



<?php

	endif; 
?>
     <script>
         function goBack() {
         window.history.back(-1);
         }
      </script>


</body>
</html>