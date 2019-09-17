<!DOCTYPE html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        
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
           
          
        ] ];
        ?>


         <!-- Navbar -->
        <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
          
  <?php foreach ($mainmenu as $key => $value): ?>
  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
      <?php echo $value['profile'] ?> </a>
      <a class="navbar-item">
      <?php echo $value['skill'] ?> </a>
      <a class="navbar-item">
      <?php echo $value['education'] ?> </a>
      <a class="navbar-item">
      <?php echo $value['portfolio'] ?> </a>
      <a class="navbar-item">
      <?php echo $value['contact'] ?> </a>
    </div>
    <?php endforeach ?>
  </div>
  </nav>
          <!-- End Navbar -->

          <!-- Header -->
<?php  include 'header.php'; ?>
<br>
          <!--  End Header -->

          <!-- Profile -->
          <!-- End Profile -->

          <!-- Footer -->
          <?php include 'footer.php'; ?>
          <!-- End Footer -->
        
          

    </body>
</html>