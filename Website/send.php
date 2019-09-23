<?php include 'header.php'; ?>
            
        <div class= "container has-text-centered " id="contact">
            <h1 class="title"> Terima Kasih </h1>
        </div>
        <br>
        <br>
        <div class="container">
  <div class="notification is-primary">
    <div class="textpf has-text-justified is-family-monospace">
   <h1> Name : <strong><?php echo  $_POST['Name']; ?></strong>
   <h1> Telp : <strong><?php echo $_POST['Telp']; ?></strong> 
   <h1> Email : <strong><?php echo $_POST['Email']; ?></strong> 
   <h1> Your Massgae : <strong> <?php echo $_POST['Massage']; ?> </strong> 
    </div> 
  </div>
</div>
        </body>
    </head>
</html>