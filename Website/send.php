<?php include 'header.php'; ?>

<div class="text2">
  <div class= "container has-text-centered ">
    <h1 class="title"> Terima Kasih </h1>
  </div>
</div>     

      <?php	if( isset ($_POST['Email'])){	?>

     <div class="container">
      <div class="notification is-primary">
       <div class="textpf has-text-justified is-family-monospace">
          <h1> Aku akan kirim balik melalui emailmu <strong><?php echo  $_POST['Email']; ?>
          </strong></h1>
        </div> 
       </div>
       <a class="button" onclick="goBack()">Back</a>
     </div>
     
     <?php
      }
      else
      { 
      ?>

      <div class="container">
        <div class="notification is-primary">
          <div class="textpf has-text-justified is-family-monospace">
            <h1> Submit Form tidak ditemukan. </h1>
         </div>
        </div>
      </div>

        <?php 
          	header( "refresh:1.5;url=index.php" );
          	die();	
          	}
      	?>

     <script>
         function goBack() {
         window.history.back(-1);
        }
      </script>

  </body>
</html>