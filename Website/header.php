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
        $mainmenu =[ 
            'profile' => 'Profile',
            'skill' => 'Skill',
            'education' => 'Education',
            'portfolio' => 'Portfolio',
            'contact' => 'Contact'
        ] ;

        $profile = [ 
           'nama' => 'Fakhri Alauddin',
           'age' => '18 Tahun',
           'ttl' => 'Jombang, 31 Maret 2001',
           'alamat' => 'Jl Raya Benowo No 06',
           'hoby' => " Coding dan Editing",
           
         ];

        $sosmed = [ 
            'fb' => 'https://www.facebook.com/Tayo2001',
            'ig' => 'https://www.instagram.com/fakhrialauddin13/',
            'wa' => 'https://wa.me/628970632441',
            'tele' => 'https://t.me/Fakhri_AL',
            'git' => 'https://github.com/Fakhri17',
            
         ] ;
  

        $skills = [ 
          [ 
            'skill' => 'C++',
            'color' => 'is-success',
            'persen' => '60',
            'tampil' => '60%',
            'img' => 'img\CPP.png',
            'deskripsi' => 'Menguasai berbagai macam operasi seperti arimatika ',
            
            
        ],
        [
            'skill' => 'HTML',
            'color' => 'is-warning',
            'persen' => '40',
            'tampil' => '40%',
            'img' => 'img\HTML.png',
            'deskripsi' => 'Menguasai berbagai macam tag pada HTML',
            
        ],
        [
          'skill' => 'CSS',
          'color' => 'is-warning',
          'persen' => '40',
          'tampil' => '40%',
          'img' => 'img\CSS.png',
          'deskripsi' => 'Menguasai berbagai style yang ada di CSS',

      ],
            [
              'skill' => 'JAVA',
              'color' => 'is-primary',
              'persen' => '55',
              'tampil' => '55%',
              'img' => 'img\JAVA.png',
              'deskripsi' => 'Menguasai OOP yang ada dalam JAVA',
          ],
          [
            'skill' => 'PHP',
            'color' => 'is-warning',
            'persen' => '45',
            'tampil' => '45%',
            'img' => 'img\PHP.png',
            'deskripsi' => 'Menguasai method POST dan GET dalam PHP',
        ],
        [
          'skill' => 'BULMA',
          'color' => 'is-primary',
          'persen' => '50',
          'tampil' => '50%',
          'img' => 'img\BUL.png',
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

          'judul' => 'Web Profil',
          'sub' => 'Pembuatan Web dengan Framework Boostrap',
          'galeri'=> 'porto',
          'imgweb' => [
            'img\image.jpg',
            'img\img2.jpg',
            'img\img3.jpg',
          ],
          'capt' => [
            'Tampilan Awal',
            'Tampilan Galeri',
            'Tampilan contact',
          ],
          'komplit' => 'Completed : 16 March 2019',
          'id' => '0',
          'button' => [
            'button is-rounded is-danger',
            'button is-primary is-rounded',
            'button is-link is-rounded',
            'button is-info is-rounded',
          ],
          'label' => [
              'HTML',
              'CSS',
              'JavaScript',
              'Boostrap',
          ],
          'imgweb1' => [
            'img\image.jpg',
            'img\img2.jpg',
            'img\img3.jpg'
          ],
          'title' => [
            'Tampilan awal',
            'Tampilan Galeri',
            'Tampilan Contact',
          ],
         
    
        ],

        [
          'judul' => 'Edit Foto',
          'sub' => 'Editing Foto Menggunakan Aplikasi Editing (Pixellab, Picsart, PS Touch)',
          'galeri'=> 'edit',
          'imgweb' => [
            'img\rpl.jpg',
            'img\bio.jpg',
            'img\light.jpg',
          ],
          'capt' => [
            'Pembuatan desain sticker',
            'Hasil edit desain kelas RPL',
            'Hasil edit Lightroom CC',
          ],
          'komplit' => 'Completed : 26 November 2019',
          'id' => '1',
          'button' => [
            'button is-rounded is-danger',
            'button is-primary is-rounded',
            'button is-link is-rounded',
            'button is-info is-rounded',
          ],
          'label' => [
              'Lightroom',
              'Pixellab',
              'Photoshop',
              'PsTouch',
          ],
          'imgweb1' => [
            'img\rpl.jpg',
            'img\bio.jpg',
            'img\light.jpg'
          ],
          'title' => [
            'Pembuatan desain sticker',
            'Hasil edit desain kelas RPL',
            'Hasil edit Lightroom CC',
          ],

        ],

        [
          'judul' => 'Web Commpany ',
          'sub' => ' Pembuatan Web Company Dari Tugas guru',
          'galeri'=> 'comp',
          'imgweb' => [
            'img\host.jpg',
            'img\host2.jpg',
            'img\host3.jpg'
          ],
          'capt' => [
            'Tampilan Header',
            'Tampilan team dan testimoni',
            'Tampilan Contact',
          ],
          'komplit' => 'Completed : 12 September 2019',
          'id' => '2', 
          'button' => [
            'button is-rounded is-danger',
            'button is-primary is-rounded',
            'button is-link is-rounded',
            'button is-info is-rounded',
          ],
          'label' => [
              'HTML',
              'CSS',
              'JavaScript',
              'PHP'
          ],
          'imgweb1' => [
            'img\host.jpg',
            'img\host2.jpg',
            'img\host3.jpg'
          ],
          'title' => [
            'Tampilan Header',
            'Tampilan team dan testimoni',
            'Tampilan Contact',
          ],
       
        ],
      ];

      $index = [
        [
          'title' => 'TAMPILAN V1',
          'img' => 'img\v1.jpg',
          'link' => 'v1.php',
          'sub' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nesciunt, soluta! Sequi molestiae unde blanditiis corporis soluta itaque consectetur quam aliquam. 
                    Iste molestiae, tempore impedit vitae magnam vero iusto harum laudantium.',

        ],
        [
          'title' => 'Tampilan V2',
          'img' => 'img\v2.jpg',
          'link' => 'v2.php',
          'sub' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nesciunt, soluta! Sequi molestiae unde blanditiis corporis soluta itaque consectetur quam aliquam. 
                    Iste molestiae, tempore impedit vitae magnam vero iusto harum laudantium.',
        ],

      ];

      ?>