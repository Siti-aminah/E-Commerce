<?php

include('connection.php');
if (!$_SESSION['login']){
    header("location: pembeli.php");
}
$statement = oci_parse($connection, "SELECT * FROM TB_ADMIN WHERE DEL_FLAGE = 0");
oci_execute($statement);?>

 
 <!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('nav_pembeli.php'); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="fontawesome-free/css/all.min.css"
    />
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>HOME</title>
  </head>
  <body>
    
    <div class="row mt-5 no-gutters">
      <div class="col-md-2 bg-ligth">
        <ul class="list-group list-grup-flush p-2 pt-4">
          <li class="list-group-item bg-dark text-white">
            <i class="fas fa-list"></i> KATEGORI PRODUK
          </li>
          <li class="list-group-item">
            <i class="fas fa-angle-right"></i> Peralatan Elektronik
          </li>
          <li class="list-group-item">
            <i class="fas fa-angle-right"></i> Aksesoris Elektronik
          </li>
          <li class="list-group-item">
            <i class="fas fa-angle-right"></i> Fashion Pria
          </li>
          <li class="list-group-item">
            <i class="fas fa-angle-right"></i> Fashion Wanita
          </li>
        </ul>
      </div>
      <div class="col-md-10">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="slide/slide1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="slide/slide2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="slide/slide3.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleControls"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleControls"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <h4 class="text-center font-weigth-blod m-4">PRODUK TERBARU</h4>

        <div class="row mx-auto">
          <div class="card mr-1 ml-1" style="width: 15rem">
            <img
              class="card-img-top"
              src="image/headphone.jpg"
              alt="Card image cap"
            />
            <div class="card-body bg-ligth">
              <h5 class="card-title">Headphone</h5>
              <p class="card-text">Sony MDR-ZX310</p>
              <p class="card-text">Rp 415.000</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="far fa-star text-warning"></i><br />
              <a href="detail_produk.php" class="btn btn-primary">Detail</a>
              <a href="#" class="btn btn-danger">Beli</a>
            </div>
          </div>

          <div class="card mr-1 ml-1" style="width: 16rem">
            <img class="card-img-top" src="image/kamera.jpg" alt="Card image cap" />
            <div class="card-body bg-ligth">
              <h5 class="card-title">Kamera</h5>
              <p class="card-text">Kamera DSLR CANON 700D</p>
              <p class="card-text">Rp 1.000.000</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
              <i class="far fa-star text-warning"></i><br />
              <a href="#" class="btn btn-primary">Detail</a>
              <a href="#" class="btn btn-danger">Beli</a>
            </div>
          </div>

          <div class="card mr-1 ml-1" style="width: 14rem">
            <img class="card-img-top" src="image/laptop.jpg" alt="Card image cap" />
            <div class="card-body bg-ligth">
              <h5 class="card-title">Laptop</h5>
              <p class="card-text">Asus RAM 2GB Layar 14 Inch</p>
              <p class="card-text">Rp 5.000.000</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
              <i class="far fa-star text-warning"></i><br />
              <a href="#" class="btn btn-primary">Detail</a>
              <a href="#" class="btn btn-danger">Beli</a>
            </div>
          </div>

          <div class="card mr-1 ml-1" style="width: 16rem">
            <img class="card-img-top" src="image/speaker.jpg" alt="Card image cap" />
            <div class="card-body bg-ligth">
              <h5 class="card-title">Speaker</h5>
              <p class="card-text">Speaker Bluetooth</p>
              <p class="card-text">Rp 300.000</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
              <i class="far fa-star text-warning"></i><br />
              <a href="#" class="btn btn-primary">Detail</a>
              <a href="#" class="btn btn-danger">Beli</a>
            </div>
          </div>

          <div class="row mx-auto mt-5">
            <div class="card mr-1 ml-1" style="width: 16rem">
              <img class="card-img-top" src="image/jacket.jpg" alt="Card image cap" />
              <div class="card-body bg-ligth">
                <h5 class="card-title">Jacket</h5>
                <p class="card-text">Jacket kulit import</p>
                <p class="card-text">Rp 100.000</p>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star-half-alt text-warning"></i>
                <i class="far fa-star text-warning"></i><br />
                <a href="detail_produk.php" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-danger">Beli</a>
              </div>
            </div>

            <div class="card mr-2 ml-2" style="width: 16rem">
              <img class="card-img-top" src="image/ssd.jpg" alt="Card image cap" />
              <div class="card-body bg-ligth">
                <h5 class="card-title">Ssd Samsung</h5>
                <p class="card-text">SSD samsung Kapasitas 5GB</p>
                <p class="card-text">Rp 300.000</p>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star-half-alt text-warning"></i>
                <i class="far fa-star text-warning"></i><br />
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-danger">Beli</a>
              </div>
            </div>

            <div class="card mr-1 ml-1" style="width: 14rem">
              <img class="card-img-top" src="image/sdcard.jpg" alt="Card image cap" />
              <div class="card-body bg-ligth">
                <h5 class="card-title">SDCARD SANDISK</h5>
                <p class="card-text">SDCARD kapasitas 128GB</p>
                <p class="card-text">Rp 400.000</p>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star-half-alt text-warning"></i>
                <i class="far fa-star text-warning"></i><br />
                <a href="#" class="btn btn-primary">Deatil</a>
                <a href="#" class="btn btn-danger">Beli</a>
              </div>
            </div>

            <div class="card mr-1 ml-1" style="width: 14rem">
              <img class="card-img-top" src="image/usb.jpg" alt="Card image cap" />
              <div class="card-body bg-ligth">
                <h5 class="card-title">USB Iphone</h5>
                <p class="card-text">USB khusus iphone</p>
                <p class="card-text">Rp 50.000</p>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star-half-alt text-warning"></i>
                <i class="far fa-star text-warning"></i><br />
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-danger">Beli</a>
              </div>
            </div>
          </div>

          <div
            class="modal fade"
            id="produk1"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">
                    Modal title
                  </h5>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">...</div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                  >
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="bg-dark text-white p-3 mt-5">
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
            Jiligos merupakan website ecommerce yang bagaus untuk berbelanja apa saja
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
              <li>jeligock20@.gmail.com</li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    <div class="copyrigth text-center text-white font-weigth-bold bg-secondary p-2">
   <p>Copyrigth <i class="far fa-copyrigth"></i> 2022</p>

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


