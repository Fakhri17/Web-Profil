<?php include 'header.php'; ?>

         <!-- Navbar -->
 <nav class="navbar is-dark is-fixed-top">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="#home">
            <img  src="img\nav.png" width="100" height="80">
          </a>
          <span class="navbar-burger burger" data-target="navMenu">
              <span></span>
              <span></span>
              <span></span>
              </span>
         </div>

        
        <div id="navMenu" class="navbar-menu">
          <div class="navbar-end">
               <a class="navbar-item" href=#profile>
                  <?php echo $mainmenu['profile'] ?> 
                </a>
                <a class="navbar-item" href="#skills">
                  <?php echo $mainmenu['skill'] ?> 
                </a>
                <a class="navbar-item" href="#education">
                  <?php echo $mainmenu['education'] ?> 
                </a>
                <a class="navbar-item" href="#portfolio">
                  <?php echo $mainmenu['portfolio'] ?>
                </a>
                <a class="navbar-item" href=#contact>
                  <?php echo $mainmenu['contact'] ?>
                </a>
          </div>
        </div>
      </div>
  </nav>
          <!-- End Navbar -->

          <!-- Banner -->
                <?php  include 'banner.php'; ?>
          </div>
          <br>
          <!--  End Banner -->

          <!-- Profile -->

 <div class="container">
    <div class="columns is-dekstop">
       <div class="column is-half">
         <div class="card">
             <br>
            <h1 class="title has-text-centered" id="profile"> PROFIL </h1>
                <div class="card-image has-text-centered">
                    <figure class="image is-128x128 is-inline-block">
                      <img  src="img\me.jpg"/>
                    </figure>
                </div>

              <div class="card-content">
                <div class="content subtitle ">
                      Nama  <strong><?php echo $profile['nama'] ?></strong>.
                      TTL   <strong><?php echo $profile['ttl'] ?></strong>.
                      Umur <strong><?php echo $profile['age']?></strong>.
                      Alamat <strong><?php echo $profile['alamat'] ?></strong>.
                      Hobi<strong><?php echo $profile['hoby']?></strong>
                 </div>
              </div>
            </div>
          </div>
  
        <div class="column is-half">
          <div class="card">
            <br>
            <h1 class="title has-text-centered "> SOSMED </h1>
                <div class="card-image has-text-centered">
                    <figure class="image is-128x128 is-inline-block" ">
                      <img  src="img\bio.jpg"/>
                    </figure>
                </div>
            <div class="card-content">
               <div class="content subtitle has-text-centered">
                      <p> You can find me : </p>
                      <a class="button" href="<?php echo $sosmed['fb'] ?>" target="_blank">Facebook</a>
                      <a class="button" href="<?php echo $sosmed['ig'] ?>" target="_blank">Instagram</a>
                      <a class="button" href="<?php echo $sosmed['wa'] ?>" target="_blank">Whatsapp</a>
                      <a class="button" href="<?php echo $sosmed['tele'] ?>" target="_blank">Telegram</a>
                      <a class="button" href="<?php echo $sosmed['git'] ?>" target="_blank">Github</a> 
                 </div>
              </div>
           </div>
         </div>
     </div>
   </div><br><br>
      

        <!-- Skills -->
    <div class= "container has-text-centered " id="skills">
      <h1 class=title > Programming </h1> 
    </div> <br>

  <div class="container">  
     <div class="columns is-dekstop is-multiline">
          <?php foreach ($skills as $key => $value): ?>
           <div class="column is-4"> 
             <article class="message is-info">
                   <div class="message-header"> 
                         <?php echo $value['skill'] ?>
                   </div>
                <div class="message-body">
                    <div class="card-image has-text-centered">
                        <figure class="image is-128x128 is-inline-block">
                          <img src=" <?php echo $value['img'] ?>" >
                        </figure>
                      </div>
                       <div class="subtitle">
                         Skills  : <?php echo $value['deskripsi'] ?><br> <br>
                       </div>
                  </div>
               </article>
             </div>
            <?php endforeach ?>
       </div>
    </div>
    <br><br>
        <!-- End Skills -->


        <!-- Education -->
    <div class= "container has-text-centered " id="education">
          <h1 class=title > Education </h1> 
     </div> <br>
        
   <div class="container">
      <?php foreach ($education as $key => $value): ?>
      <div class="columns is-dekstop">
         <div class="column">
          <div class="box">
            <div class="card-image has-text-centered">
              <figure class="image is-3by1">
                <img src="<?php echo $value['imsch'] ?>" >
               </figure>
             </div>
               <p class="title is-4"><?php echo $value['scholl'] ?></p>
               <p class="subtitle">Year : <?php echo $value['year'] ?></p>
               <p class="subtitle">Deggre : <?php echo $value['deggre'] ?></p>
               <p class="subtitle">Location : <?php echo $value['location'] ?></p>
            </div>
          </div>
       </div>  
       <?php endforeach ?>     
     </div> <br><br>
           
        <!-- End Education -->


        <!--  Portolio -->
        <div class= "container has-text-centered " id="portfolio">
            <h1 class="title"> Portfolio </h1>
        </div> <br> <br>

      
   <div class="container">          
     <div class="tile is-ancestor">       
        <?php foreach ($portfolio as $key => $value): ?>
           <div class="tile is-parent ">         
                <article class="tile is-child box">         
                   <p class="title has-text-centered"> <?php echo $value['judul'] ?> </p>
                   <p class="subtitle has-text-centered"> <?php echo $value['sub'] ?> </p>
                   <a  class="image is-3by1" href="portfolio.php?id=<?php echo $value['id'] ?>"> 
                     <img src="<?php echo $value ['imgweb'][0] ?>">
                   </a>
                </article>
            </div>
          <?php endforeach ?>
        </div>
    </div>
        <br> <br> 
        <!-- End Portfolio --> 

        <!-- Contact -->
  <div class= "container has-text-centered " id="contact">
            <h1 class="title"> Contact </h1>
        </div>

  <form action="send.php" method="post">
     <div class="container">
           <div class="field">
              <label class="label">Name</label>
                <div class="control">
                  <input class="input" type="text" name="Name"
                  data-validation="length" 
                  data-validation-length="3-12" 
                  data-validation-error-msg=" Name harus (3-12 chars)"
                  placeholder="Your Name" >
                </div>
             </div>

               <div class="field">
                <label class="label">Telp</label>
                   <div class="control">
                    <input class="input" type="number" name="Telp" data-validation="length telp"
                    data-validation-length="11-12" 
                    placeholder="0897063****">
                  </div>
                </div>

                <div class="field">
                <label class="label">Email</label>
                   <div class="control">
                    <input class="input" type="email" name="Email" data-validation="email"placeholder="your@mail.com">
                  </div>
                </div>


                <div class="field">
                  <label class="label">Message</label>
                  <div class="control">
                    <textarea class="textarea is-mobile" placeholder="Message" name="Massage"></textarea>
                  </div>
                </div>

          <div class="field is-grouped">
            <div class="control">
            <input class="button is-link" type="submit" value="Submit"> 
            <input class="button is-link" type="reset"Value="Reset" > 
            </div>      
        </div>
      </div>
  </form><br><br>
       
        <!--  End Contact -->


          <!-- Footer -->
        
          <?php include 'footer.php'; ?>
          
          <!-- End Footer -->
          <script type="text/javascript">
              (function() {
                var burger = document.querySelector('.burger');
                var nav = document.querySelector('#'+burger.dataset.target);
                burger.addEventListener('click', function(){
                  burger.classList.toggle('is-active');
                  nav.classList.toggle('is-active');
                });
              })();
         </script>

    </body>
</html>