<!DOCTYPE html>
  <html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css\style.css">
        <link rel="stylesheet" type="text/css" href="css\bulma.css">
        <link rel="stylesheet" type="text/css" href="dist\css\lightbox.css">
        
       
       
        
    </head>
    <body>
        <?php 
        $mainmenu =[ [
            'profile' => 'Profile',
            'skill' => 'Skill',
            'education' => 'Education',
            'portfolio' => 'Portfolio',
            'contact' => 'Contact'
        ] ];

        $profile = [ [
           'nama' => 'Fakhri Alauddin',
           'age' => '18 Tahun',
           'ttl' => 'Jombang, 31 Maret 2001',
           'alamat' => 'Jl Raya Benowo No 06',
           'hoby' => " Coding dan Editing",
           
        ] ];

        
        $sosmed = [ [
          'fb' => 'https://www.facebook.com/Tayo2001',
          'ig' => 'https://www.instagram.com/fakhrialauddin13/',
          'wa' => 'https://wa.me/628970632441',
          'tele' => 'https://t.me/Fakhri_AL',
          'git' => 'https://github.com/Fakhri17',
          
       ] ];

        $skills1 = [ 
          [ 
            'skill' => 'C++',
            'img' => 'img\cpp.png',
            'deskripsi' => 'Menguasai berbagai macam operasi seperti arimatika ',
            
            
        ],
        [
            'skill' => 'HTML',
            'img' => 'img\html.png',
            'deskripsi' => 'Menguasai berbagai macam tag pada HTML',
            
        ],
        [
          'skill' => 'CSS',
          'img' => 'img\css.png',
          'deskripsi' => 'Menguasai berbagai style yang ada di CSS',
          

        ],
       ];
       
       $skills2 = [
         [
          'skill' => 'JAVA',
          'img' => 'img\java.png',
          'deskripsi' => 'Menguasai OOP yang ada dalam JAVA',
          
      ],
      [
        'skill' => 'PHP',
        'img' => 'img\php.png',
        'deskripsi' => 'Menguasai method POST dan GET dalam PHP',
       
    ],
    [
      'skill' => 'BULMA',
      'img' => 'img\bulma.png',
      'deskripsi' => 'Mampu memahami class-class Framework Bulma',
     
  ],
        ];


        $education = [ 
          [ 
            'year' => '2009 - 2015',
            'deggre' => 'Siswa',
            'scholl' => 'SDN Benowo 1',
            'location' => 'Jl Raya Benowo No 71, Pakal, Surabaya',
            'imsch' => 'img\Benowo.jpg',
        ],
        [
            'year' => '2015 - 2018',
            'deggre' => 'Siswa',
            'scholl' => 'SMPN 14 Surabaya',
            'location' => 'Jl. Jurang Kuping, Pakal, Surabaya',            
            'imsch' => 'img\smp14.jpg',

        ],
        [
          'year' => '2018 - Sekarang',
          'deggre' => 'Siswa',
          'scholl' => 'SMKN 2  Surabaya',
          'location' => 'Jl. Tentara Genie Pelajar No.26, Sawahan, Surabaya',         
          'imsch' => 'img\smk2.jpg',

      ],

    ];

        $portfolio = [ 
        [

          'judul' => 'Web Portfolio',
          'sub' => 'Pembuatan Web dengan Framework Boostrap',
          'galeri'=> 'porto',
          'imgweb' => 'img\image.jpg',
          'capt' => ' Tampilan Awal',
          
          

        ],

        [
          'judul' => 'Edit Foto',
          'sub' => 'Editing Foto Menggunakan Aplikasi Editing (Pixellab, Picsart, PS Touch)',
          'galeri'=> 'edit',
          'imgweb' => 'img\bio.jpg',
          'capt' => ' Pembuatan desain sticker',
          
        ],

        [
          'judul' => 'Web Commpany ',
          'sub' => ' Pembuatan web Company dengan HTML+CSS',
          'galeri'=> 'comp',
          'imgweb' => 'img\host.jpg',
          'capt' => ' Tampilan Header',
          
          
        ],
      
      ];

         
        ?>
        


         <!-- Navbar -->
         <nav class="navbar is-dark is-fixed-top">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="#home">
            <img src="img\foto.png">
  </a>

          <span class="navbar-burger burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>

        <?php foreach ($mainmenu as $key => $value): ?>
        <div id="navMenu" class="navbar-menu">
          <div class="navbar-end">
          <a class="navbar-item" href=#profile>
      <?php echo $value['profile'] ?> </a>
      <a class="navbar-item" href="#skills">
      <?php echo $value['skill'] ?> </a>
      <a class="navbar-item" href="#education">
      <?php echo $value['education'] ?> </a>
      <a class="navbar-item" href="#portfolio">
      <?php echo $value['portfolio'] ?> </a>
      <a class="navbar-item" href=#contact>
      <?php echo $value['contact'] ?> </a>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </nav>

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

          <!-- End Navbar -->

          <!-- Banner -->
                <?php  include 'banner.php'; ?>
          </div>
<br>
          <!--  End Banner -->

          <!-- Profile -->
      <div id="profile">
 <div class="container">
   <div class="columns is-dekstop">

    <div class="column is-half">
      <div class="card">

       <br>
       <h1 class="title has-text-centered"> PROFIL </h1>
       <div class="card-image has-text-centered">
        <figure class="image is-96x96 is-inline-block">
            <img  src="img\me.jpg"/>
        </figure>
    </div>

  <div class="card-content">
    <div class="content subtitle">
    <?php foreach ($profile as $key => $value): ?>
     Nama saya <strong><?php echo $value['nama'] ?></strong>.
     Saya lahir di <strong><?php echo $value['ttl'] ?></strong>.
     Saat ini saya berumur <strong><?php echo $value['age']?></strong>.
     Alamat rumah saya berada di <strong><?php echo $value['alamat'] ?></strong>.
     Saya memiliki hobi <strong><?php echo $value['hoby']?></strong>
     <br>
     <br>
     <?php endforeach ?>
   </div>
      </div>

    </div>
   </div>
  
   <div class="column is-half">
      <div class="card">
       <br>
       <h1 class="title has-text-centered"> SOSMED </h1>
       <div class="card-image has-text-centered">
        <figure class="image is-96x96 is-inline-block">
            <img  src="img\bio.jpg"/>
        </figure>
    </div>
    <div class="card-content">
    <div class="content subtitle">
    <?php foreach ($sosmed as $key => $value): ?>
    Visit my facebook <a href="<?php echo $value['fb'] ?>" target="_blank"><strong>VISIT</strong></a>.
     Visit my instagram <strong><a href="<?php echo $value['ig'] ?>" target="_blank">VISIT</a></strong>.
     Visit my whatsapp <strong><a href="<?php echo $value['wa'] ?>" target="_blank">VISIT</a></strong>.
    Visit my telegram <strong><a href="<?php echo $value['tele'] ?>" target="_blank">VISIT</a></strong>.
   Visit my github <strong><a href="<?php echo $value['git'] ?>" target="_blank">VISIT</a></strong>.
   <br>
   <br>
   <p class="subtitle has-text-centered"> Thanks for all </p>
     <?php endforeach ?>
   </div>
      </div>
   </div>
      </div>
    </div>
   </div>

  </div>
</div>
    </div>
<br>
<br>

        <!-- Skills -->
<div class= "container has-text-centered " id="skills">
          <h1 class=title > Programming </h1> </div> <br>

          <div class="container">
       
       
       <div class="columns is-dekstop">

        <?php foreach ($skills1 as $key => $value): ?>
        <div class="column is-4"> 
        <article class="message is-info">
        <div class="message-header"> <?php echo $value['skill'] ?></div>
              <div class="message-body">
                 <div class="subtitle"> 
                
                 <div class="card-image has-text-centered">
                              <figure class="image is-128x128 is-inline-block">
                                 <img src="<?php echo $value['img'] ?>" >
                               </figure>
                               </div>
                 Skill  : <?php echo $value['deskripsi'] ?> <br> <br>
                 </div>
             </div>
        </article>
        </div>
        <?php endforeach ?>
 </div>
 <div class="columns is-dekstop">

        <?php foreach ($skills2 as $key => $value): ?>
        <div class="column is-4"> 
        <article class="message is-info">
        <div class="message-header"> <?php echo $value['skill'] ?></div>
              <div class="message-body">
                 <div class="subtitle"> 
                
                 <div class="card-image has-text-centered">
                              <figure class="image is-128x128 is-inline-block">
                                 <img src="<?php echo $value['img'] ?>" >
                               </figure>
                               </div>
                  Skill  : <?php echo $value['deskripsi'] ?> <br> <br>

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
          <h1 class=title > Education </h1> </div> <br>
        
      <div class="container">
      <?php foreach ($education as $key => $value): ?>
        <div class="columns is-dekstop">
        
  <div class="column is-narrow">
    <div class="box" style="width:200px;">
    <div class="card-image has-text-centered">
            <figure class="image is-128x128 ">
                 <img src="<?php echo $value['imsch'] ?>" >
                    </figure>

          </div>
    </div>
  </div>
  <div class="column">
    <div class="box">
      <p class="title is-4"><?php echo $value['scholl'] ?></p>
      <p class="subtitle">Year : <?php echo $value['year'] ?></p>
      <p class="subtitle">Deggre : <?php echo $value['deggre'] ?></p>
      <p class="subtitle">Location : <?php echo $value['location'] ?></p>
    </div>
  </div>
</div>  
<?php endforeach ?>     
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
            <a class="button is-link" href="<?php echo $value ['imgweb'] ?>" data-lightbox="<?php echo $value ['galeri'] ?>" 
            data-title="<?php echo $value ['capt'] ?>">Tampilkan</a>
            </article>
          </div>
          <?php endforeach ?>
          </div>
          </div>
            


             <!-- Galery -->
             
           <a href="img\img2.jpg" data-lightbox="porto" data-title="Tampilan Galeri"></a>
           <a href="img\img3.jpg" data-lightbox="porto" data-title="Tampilan Contact"></a>
           <a href="img\light.jpg" data-lightbox="edit" data-title="Hasil edit Lightroom CC"></a>
           <a href="img\rpl.jpg" data-lightbox="edit" data-title="Hasil edit desain kelas RPL"></a>
           <a href="img\host2.jpg" data-lightbox="comp" data-title=" Tampilan team dan testimoni"></a>
           <a href="img\host3.jpg" data-lightbox="comp" data-title=" Tampilan Contact"></a>
            

         

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
    </form>
        <br>
          <br>
      
        <!--  End Contact -->



       
          <!-- Footer -->
          <div class="footerss">
          <?php include 'footer.php'; ?>
          </div>
          <!-- End Footer -->
        
          
        

      <script src="dist/js/lightbox-plus-jquery.js"> </script>
      <script>
    lightbox.option({
      'resizeDuration': 250,
      'fadeDuration' : 500,
      'wrapAround': true,
      'alwaysShowNavOnTouchDevices' : true
    })
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
$.validate({
  });
  </script>
    </body>
</html>