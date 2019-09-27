<?php include 'header.php'; ?>

<?php $id = $_GET['id'];
    if ($id == "0"){
?>
    <div class="text2">
        <div class="container has-text-centered">
            <h1 class="title is-italic"> Welcome To My Portfolio</h1>
        </div>
    </div>
    <div class="text2">
        <div class="container has-text-centered">
                <h1 class="title has-text-weight-bold"> WEB PROFIL </h1>
                <p class="subtitle"> Membuat Web Profil Menggunakan Boostrap </p>
                <p class="button is-rounded is-danger">HTML</p>
                <p class="button is-primary is-rounded">CSS</p>
                <p class="button is-link is-rounded">JavaScript</p>
                <p class="button is-info is-rounded">Boostrap</p>
                <p class="subtitle"> Completed: 16 March 2019</p>
                <a class="tag is-rounded is-medium is-dark" href="v2.php"> <- Back </a>
        </div>
    </div>
    <div class="container">
        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="tile is-child box">
                  <a href="img/image.jpg" data-lightbox="porto" data-title="Tampilan Awal">
                     <img src="img/image.jpg">
                  </a>    
                </div>
            </div>
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                  <a href="img/img2.jpg" data-lightbox="porto" data-title="Tampilan Galeri">
                     <img src="img/img2.jpg">
                  </a>    
                </div>
                <div class="tile is-child box">
                  <a href="img/img3.jpg" data-lightbox="porto" data-title="Tampilan Contact">
                     <img src="img/img3.jpg">
                  </a> 
                </div>   
            </div>
        </div>
    </div>


    <?php }elseif ($id == "1"){ ?>
        <div class="text2">
            <div class="container has-text-centered">
                <h1 class="title is-italic"> Welcome To My Portfolio</h1>
            </div>
        </div>

    <div class="text2">
        <div class="container has-text-centered">
            <h1 class="title has-text-weight-bold"> Edit Foto </h1>
            <p class="subtitle"> Edit foto menggunakan aplikasi mobile </p>
            <p class="button is-rounded is-danger">Lightroom</p>
            <p class="button is-primary is-rounded">Pixellab</p>
            <p class="button is-link is-rounded">Photoshop</p>
            <p class="subtitle"> Completed: 16 September 2019</p>
            <a class="tag is-rounded is-medium is-dark" href="v2.php"> <- Back </a>
        </div>
    </div>

    <div class="container">
        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="tile is-child box">
                  <a href="img/rpl.jpg" data-lightbox="edit" data-title="Pembuatan desain sticker">
                     <img src="img/rpl.jpg">
                  </a>    
                </div>
            </div>
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                  <a href="img/bio.jpg" data-lightbox="edit" data-title="Hasil edit desain kelas RPL" class="image is-3by2">
                     <img src="img/bio.jpg">
                  </a>    
                </div>
                <div class="tile is-child box">
                  <a href="img/light.jpg" data-lightbox="edit" data-title="Hasil edit Lightroom CC">
                     <img src="img/light.jpg">
                  </a> 
                </div>   
            </div>
        </div>
    </div>


        <?php }elseif ($id == "2"){ ?>
            <div class="text2">
                <div class="container has-text-centered">
                    <h1 class="title is-italic"> Welcome To My Portfolio </h1>
                </div>
            </div>

            <div class="text2">
        <div class="container has-text-centered">
            <h1 class="title has-text-weight-bold"> Web Company </h1>
            <p class="subtitle"> Membuat web commpany yang ditugaskan oleh guru </p>
            <p class="button is-rounded is-danger">HTML</p>
            <p class="button is-primary is-rounded">CSS</p>
            <p class="button is-link is-rounded">JavaScript</p>
            <p class="subtitle"> Completed: 11 September 2019 </p>
            <a class="tag is-rounded is-medium is-dark" href="v2.php"> <- Back </a>
        </div>
    </div>
    <div class="container">
        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="tile is-child box">
                  <a href="img/host.jpg" data-lightbox="comp" data-title="Tampilan Header" class="image is-16by9">
                     <img src="img/host.jpg">
                  </a>    
                </div>
            </div>
            <div class="tile is-4 is-vertical is-parent">
                <div class="tile is-child box">
                  <a href="img/host2.jpg" data-lightbox="comp" data-title="Tampilan team dan testimoni">
                     <img src="img/host2.jpg">
                  </a>    
                </div>
                <div class="tile is-child box">
                  <a href="img/host3.jpg" data-lightbox="comp" data-title="Tampilan Contact">
                     <img src="img/host3.jpg">
                  </a> 
                </div>   
            </div>
        </div>
    </div>


                <?php }else{
                    echo " ID KOSONG ";
                } 
                ?>

<?php include 'footer.php'; ?>
</body>
</html>