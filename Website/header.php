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

    ];

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