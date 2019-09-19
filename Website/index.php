<!DOCTYPE html>
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
            'persen' => '<progress class="progress is-link" value="60" max="100"></progress>',
            'space' => '<br>',
            
        ],
        [
            'skill' => 'HTML',
            'persen' => '<progress class="progress is-link" value="40" max="100"></progress>',
            'space' => '<br>',
        ],
        [
          'skill' => 'CSS',
          'persen' => '<progress class="progress is-link" value="40" max="100">20%</progress>',
          'space' => '<br>',

      ],
            [
              'skill' => 'JAVA',
              'persen' => '<progress class="progress is-link" value="55" max="100"></progress>',
              'space' => '<br>',

          ],
          [
            'skill' => 'PHP',
            'persen' => '<progress class="progress is-link" value="45" max="100"></progress>',
            'space' => '<br>',

        ],
        [
          'skill' => 'BULMA',
          'persen' => '<progress class="progress is-link" value="50" max="100"></progress>',
          'space' => '<br>',

      ],
      [
        'skill' => 'EDITING',
        'persen' => '<progress class="progress is-link" value="70" max="100"></progress>',
        'space' => '<br>',

],

    ];

        $education = [ 
          [ 
            'year' => '2009 - 2015',
            'deggre' => 'Siswa',
            'scholl' => 'SDN Benowo 1',
            'location' => 'Jl Raya Benowo No 71, Pakal, Surabaya',
            'div' => ' <div class="column is-4">',
            'mesage' => '<div class="message-header">',
            'article' => '<article class="message is-info">',
            'imsch' => '<img src="img\Benowo.jpg">',
        ],
        [
            'year' => '2015 - 2018',
            'deggre' => 'Siswa',
            'scholl' => 'SMPN 14 Surabaya',
            'location' => 'Jl. Jurang Kuping, Pakal, Surabaya',
            'div' => ' <div class="column is-4">',
            'mesage' => '<div class="message-header">',
            'article' => '<article class="message is-info">',
            'imsch' => '<img src="img\smp14.jpg">',

        ],
        [
          'year' => '2015 - Sekarang',
          'deggre' => 'Siswa',
          'scholl' => 'SMKN 2  Surabaya',
          'location' => 'Jl. Tentara Genie Pelajar No.26, Sawahan, Surabaya',
          'div' => ' <div class="column is-4">',
          'mesage' => '<div class="message-header">',
          'article' => '<article class="message is-info">',
          'imsch' => '<img src="img\smk2.jpg">',

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
          <div class= "container has-text-centered " id="profile">
          <h1 class=title > Profil </h1> </div>
          <br>
          <div class="card-image has-text-centered">
        <figure class="image is-96x96 is-inline-block">
            <img  src="img\me.jpg"/>
        </figure>
    </div>
<br>
    <br>

    <?php foreach ($profile as $key => $value): ?> 
    <div class="container">
  <div class="notification is-primary">
    <div class="textpf has-text-justified is-family-monospace">
   <h1> Name : <strong><?php echo $value['nama'] ?></strong>
   <h1> Birth : <strong><?php echo $value['ttl'] ?></strong> 
   <h1> Age : <strong><?php echo $value['age'] ?></strong> 
   <h1> Address : <strong><?php echo $value['alamat'] ?></strong> 
   <h1> Hobby : <strong><?php echo $value['hoby'] ?></strong>
    </div> 
  </div>
</div>
      <?php endforeach ?>
    <br><br>
          <!-- End Profile -->

      
        <!-- Skills -->
        <div class= "container has-text-centered " id="skills">
          <h1 class=title > Skills </h1> </div> <br>
          <?php foreach ($skills as $key => $value): ?>
   <div class="container">
     <strong> <?php echo $value['skill'] ?>
       <?php echo $value['persen'] ?>
       <?php echo $value['space'] ?>
    </div>
        <?php endforeach ?>
    <br><br>
        <!-- End Skills -->

        <!-- Education -->
        <div class= "container has-text-centered " id="education">
          <h1 class=title > Education </h1> </div> <br>
        
        <div class="container">
       
       
              <div class="columns is-mobile">

               <?php foreach ($education as $key => $value): ?>
               <?php echo $value['div'] ?> 
               <?php echo $value['article'] ?>
               <?php echo $value['mesage'] ?> <?php echo $value['scholl'] ?></div>
                     <div class="message-body">
                        <div class="subtitle"> 
                        <div class="card-image has-text-centered">
                                     <figure class="image is-128x128 is-inline-block">
                                        <?php echo $value['imsch'] ?>
                                      </figure>
                                      </div>
                      Year : <?php echo $value['year'] ?> <br> <br>
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
  <div class="tile is-parent">
    <article class="tile is-child box">
    <a href="img\image2.jpg" data-lightbox="continue" data-title="Sistem Izin dengan PHP">
     <img src="img\image2.jpg" alt="image"></a>
    </article>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box">
    <a href="img\image.jpg" data-lightbox="continue" data-title="Web Profil 1">
     <img src="img\image.jpg" alt="image"></a>
    </article>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box">
    <a href="img\image3.jpg" data-lightbox="continue" data-title="Web Biodata">
      <img src="img\image3.jpg" alt="image"></a>
    </article>
  </div>
</div>
    </div>

        <br> <br> 
        <!-- End Portfolio --> 
        
        <!-- Contact -->
  <div class= "container has-text-centered " id="contact">
            <h1 class="title"> Contact </h1>
        </div>
        
        <div class="container">
        <div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input">
  </div>
</div>

        <div class="field">
  <label class="label">Telp</label>
  <div class="control">
    <input class="input" type="number" placeholder="Telp">
  </div>
</div>
<div class="field">
  <label class="label">Message</label>
  <div class="control">
    <textarea class="textarea is-mobile" placeholder="Textarea"></textarea>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">

    <button class="button is-link">Submit</button>
  </div>
 
</div>
    </div>
<br>
<br>
        <!--  End Contact -->

        
        <!-- End Galeri -->
          <!-- Footer -->
          <div class="footerss">
          <?php include 'footer.php'; ?>
          </div>
          <!-- End Footer -->
        
          


      <script src="dist/js/lightbox-plus-jquery.js"> </script>
      <script>
    lightbox.option({
      'resizeDuration': 200,
      'fadeDuration' : 500,
      'wrapAround': true,
      'alwaysShowNavOnTouchDevices' : true
    })
</script>

    </body>
</html>