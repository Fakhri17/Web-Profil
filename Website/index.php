<?php include 'header.php'; ?>

  <div class="container">
    <div class="text1">
        <h1 class="title has-text-centered"> WEB DESIGN </h1>
        <div class="text2">
        <h1 class="title has-text-centered"> Pembuatan Web Design </h1>
        <h1 class="title has-text-centered"> Menggunakan Framework Bulma </h1>
      </div>
    </div>


 <div class="container ">
  <div class="columns is-dekstop">
      <?php foreach ($index as $key => $value): ?>
     <div class="column is-half">
         <div class="card">
             <br>
             <h1 class="title has-text-centered"> <?php echo $value['title'] ?> </h1>
                 <div class="card-image has-text-centered">
                     <figure class="image is-3by1">
                          <a href="<?php echo $value['link'] ?>">
                            <img  src="<?php echo $value['img'] ?>"/>
                          </a>
                     </figure>
                 </div>

                <div class="card-content">
                <div class="content subtitle">
                    <p><?php echo $value['sub'] ?></p>
                </div>     
              </div>
          </div>
        </div> 
        <?php endforeach ?>
      </div>
    </div>
  </div>


   <!-- Footer -->
        
   <?php include 'footer.php'; ?>
          
          <!-- End Footer -->
     
    
    </body>
</html>
