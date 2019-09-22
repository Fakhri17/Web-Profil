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

        $skills = [ 
          [ 
            'skill' => 'C++',
            'persen' => '60',
            'tampil' => '60%',
            
            
        ],
        [
            'skill' => 'HTML',
            'persen' => '40',
            'tampil' => '40%',
            
        ],
        [
          'skill' => 'CSS',
          'persen' => '40',
          'tampil' => '40%',
          

      ],
            [
              'skill' => 'JAVA',
              'persen' => '55',
              'tampil' => '55%',
              
          ],
          [
            'skill' => 'PHP',
            'persen' => '45',
            'tampil' => '45%',
           
        ],
        [
          'skill' => 'BULMA',
          'persen' => '50',
          'tampil' => '50%',
         
      ],
      [
        'skill' => 'EDITING',
        'persen' => '70',
        'tampil' => '70%',
        

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

          <!-- Header -->
                <?php  include 'header.php'; ?>
          </div>
<br>
          <!--  End Header -->

          <!-- Profile -->
       
 <div class="container">
   <div class="columns">
    <div class="column is-6 ">
      <div class="card">
       <br>
       <h1 class="title has-text-centered"> PROFIL </h1>

  <div class="card-content">
    <div class="media">
        <figure class="image is-96x96 has-texted-center">
          <img src="img\me.jpg" alt="My photo">
        </figure>
      </div>
    
    <?php foreach ($profile as $key => $value): ?>
    <div class="content subtitle">
     Nama saya <strong><?php echo $value['nama'] ?></strong>.
     Saya lahir di <strong><?php echo $value['ttl'] ?></strong>.
     Saat ini saya berumur <strong><?php echo $value['age']?></strong>.
     Alamat rumah saya berada di <strong><?php echo $value['alamat'] ?></strong>.
     Saya memiliki hobi <strong><?php echo $value['hoby']?></strong>
    <?php endforeach ?>
   </div>
      </div>
    </div>
   </div>
  </div>
</div>



<br>
<br>


        
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