<?php include 'header.php'; ?>
         <!-- Navbar -->
  <nav class="navbar is-dark is-fixed-top">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="#home">
              <img src="img\nav.png"  width="100" height="80">
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
          <br>
            
      <!--  End Banner-->

      <!-- Profile -->
   <div class= "container has-text-centered " id="profile">
      <h1 class=title > Profil </h1> 
   </div>     <br>

           <div class="card-image has-text-centered">
             <figure class="image is-128x128 is-inline-block">
                <img  src="img\me.jpg"/>
             </figure>
           </div><br> <br>

     <div class="container">
      <div class="notification is-primary ">
        <div class="textpf has-text-justified is-block-dekstop-only is-inline-touch is-family-monospace">
          <h1> Name : <strong><?php echo $profile['nama'] ?></strong>
          <h1> Birth : <strong><?php echo $profile['ttl'] ?></strong> 
          <h1> Age : <strong><?php echo $profile['age'] ?></strong> 
          <h1> Address : <strong><?php echo $profile['alamat'] ?></strong> 
          <h1> Hobby : <strong><?php echo $profile['hoby'] ?></strong>
        </div> 
      </div>
   </div>
    <br><br>
          <!-- End Profile -->

      
        <!-- Skills -->
      <div class= "container has-text-centered " id="skills">
           <h1 class=title > Skills </h1> 
      </div> <br>

          <?php foreach ($skills as $key => $value): ?>
     <div class="container">
        <strong> <?php echo $value['skill'] ?>
        <h1 class="subtitle has-text-centered"> <?php echo $value['tampil'] ?></h1></strong>
        <progress class="progress <?php echo $value['color'] ?>" value="<?php echo $value['persen'] ?>" max="100"> 
        </progress>
        <br>
     </div>
        <?php endforeach ?>
    <br><br>
        <!-- End Skills -->


        <!-- Education -->
        <div class= "container has-text-centered " id="education">
          <h1 class=title > Education </h1> </div> <br>
        
     <div class="container">  
       <div class="columns is-dekstop">

               <?php foreach ($education as $key => $value): ?>
             <div class="column is-4"> 
               <article class="message is-info">
                   <div class="message-header"> <?php echo $value['scholl'] ?>
                   </div>
                     <div class="message-body">
                        <div class="card-image has-text-centered">
                            <figure class="image is-5by4 ">
                                <img src="<?php echo $value['imsch'] ?>" >
                             </figure>
                         </div>
                        <br>
                       <div class="subtitle">
                         Year   : <?php echo $value['year'] ?> <br> <br>
                         Status : <?php echo $value['deggre'] ?> <br> <br>
                         Location : <?php echo $value['location'] ?> <br> <br>
                      </div>
                    </div>
             </article>
           </div>
               <?php endforeach ?>
        </div>
     </div>
         <br><br>   
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
              <a  class="image is-3by1" href="<?php echo $value ['imgweb'][0] ?>" data-lightbox="<?php echo $value ['galeri'] ?>" 
              data-title="<?php echo $value ['capt'][0] ?>"><img src="<?php echo $value ['imgweb'][0] ?>" alt=""></a>
              </article>
           </div>
            <?php endforeach ?>
         </div>
      </div>
 
             <!-- Galery -->
             
           <a href="img\img2.jpg" data-lightbox="porto" data-title="Tampilan Galeri"></a>
           <a href="img\img3.jpg" data-lightbox="porto" data-title="Tampilan Contact"></a>
           <a href="img\light.jpg" data-lightbox="edit" data-title="Hasil edit Lightroom CC"></a>
           <a href="img\bio.jpg" data-lightbox="edit" data-title="Hasil edit desain kelas RPL"></a>
           <a href="img\host2.jpg" data-lightbox="comp" data-title="Tampilan team dan testimoni"></a>
           <a href="img\host3.jpg" data-lightbox="comp" data-title="Tampilan Contact"></a>
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
    </form> <br> <br>
          
       
      
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