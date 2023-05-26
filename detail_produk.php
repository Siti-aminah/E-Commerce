<?php

include('connection.php');
if (!$_SESSION['login']){
    header("location: detail_produk.php");
}
$statement = oci_parse($connection, "SELECT * FROM TB_KOMENTAR WHERE DEL_FLAGE = 0");
oci_execute($statement);
?>



<!DOCTYPE html>
<html lang="en">
<head>
<?php include('nav_pembeli.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css"/>

<title>DETAIL</title>
  </head>
  <body>
    
    <style>

        /*css menu*/
        
        body {
            background-color:white;
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0px;
            padding: 0px;
            display: grid;
        }
        
        * {
          box-sizing: border-box;
        }
        
        .row1::after {
          content: "";
          clear: both;
          display: grid;
        }
        [class*="col-"] {
          float: left;
          padding: 15px;
          margin: 0px;
        }
        
        /* For mobile phones: */
        [class*="col-"] {
          width: 100%;
        }
        
        @media only screen and (min-width: 600px) {
          /* For tablets: */
          .col-s-1 {width: 8.33%;}
          .col-s-2 {width: 16.66%;}
          .col-s-3 {width: 25%;}
          .col-s-4 {width: 33.33%;}
          .col-s-5 {width: 41.66%;}
          .col-s-6 {width: 50%;}
          .col-s-7 {width: 58.33%;}
          .col-s-8 {width: 66.66%;}
          .col-s-9 {width: 75%;}
          .col-s-10 {width: 83.33%;}
          .col-s-11 {width: 91.66%;}
          .col-s-12 {width: 100%;}
        }
        
        @media only screen and (min-width: 768px) {
          /* For desktop: */
          .col-1 {width: 8.33%;}
          .col-2 {width: 16.66%;}
          .col-3 {width: 25%;}
          .col-4 {width: 33.33%;}
          .col-5 {width: 41.66%;}
          .col-6 {width: 50%;}
          .col-7 {width: 58.33%;}
          .col-8 {width: 66.66%;}
          .col-9 {width: 75%;}
          .col-10 {width: 83.33%;}
          .col-11 {width: 91.66%;}
          .col-12 {width: 100%;}
        }
        
            </style>
        
        <div class="row1">
        <div class="col-6"  align="center">
            <ul>
            </br><br><img src=image/headphone.jpg width="90%" height="90%">
            </ul>
              </div>
            
            <div class="col-6">
              <div class="h1">
                 <p></br></p>
                <font size="6" color="#000000" face="Times New Roman"><b>Headphone</b></font>
            </div> 

            <div class="">
            <font size="3" face="Times New Roman "><b>Headphone Sony MDR-ZX310  headphone on-ear, 
              memiliki desain/gaya yang sama dengan Beats Solo 2 yang harganya beberakali lipat dibandingkan dengan MDR-ZX310 ini. Bahan yang dipilih membuat MDR-ZX310 sangatlah ringan, 
              sehingga headphone ini juga sangat nyaman digunakan menemani joging </b></font>
            </div><br>
            <div class="">Kondisi  : Baru</div><br>
            <div class="">Berat    : 400 Gram</div><br>
            <div class="">Kategori : Peralatan Elektronik</div><br>
            <div class="">Etalase  : Sony Headphone</div><br>
            <div class="">Rating   : <i class="fas fa-star text-warning"></i>
                                     <i class="fas fa-star text-warning"></i>
                                     <i class="fas fa-star text-warning"></i>
                                     <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i></div><br>
            <div class="">Review  : Kualitas suara baik, desainnya bagus, dan kemudahaan penggunaan sempurna </div><br><br>
            <div class="panel panel-primary">

            </div>
            </div>

            

</head>
     
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      
      

      <footer class="bg-dark text-white p-2">
        <div class="row">
          <div class="col-md-3">
            <h5>LAYANAN PELANGGAN</h5>
            <ul>
              <li>Pusat Bantuan</li>
              <li>Cara Pembelian</li>
              <li>Pengiriman</li>
              <li>Cara Pengembalian</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>TENTANG KAMI</h5>
            <p>
              Jiligos merupakan website ecommerce yang bagas untuk berbelanja apa saja.
            </p>
          </div>
          <div class="col-md-3">
            <h5>MITRA KERJA SAMA</h5>
            <ul>
              <li>REGULER</li>
              <li>J&T EXPRESS</li>
              <li>JNE</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>HUBUNGI KAMI</h5>
            <ul>
              <li>0813-3741-0436</li>
              <li>jilogics20@.gmail.com/li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

     <div class="copyrigth text-center text-white font-weigth-bold bg-secondary p-2">
   <p>Copyrigth <i class="far fa-copyrigth"></i> 2021</p>

 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

