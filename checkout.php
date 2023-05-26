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

<section>
  
      <div class="s1 bg-light br-2">
        <p></br></p>
        <h2>Lengkapi Data Pembelian Sebelum Checkout</h2>

        <form class="info">
          <label for="name">Nama</label>
          <input id="name" type="text" />
          <label for="addie"
            >Alamat</label>
          
          <textarea id="addie" name="alamat" rows="5" cols="20"></textarea>

          <label for="zip">Kode Pos</label>
          
          <input id="zip" type="text" />

          <label for="phone">No HP</label>
         
          <input id="phone" type="text" />
        </form>

        <form class="kirim">
          <label for="pengiriman">Pengiriman:</label>
          <br />
          <select id="pengiriman" name="pengiriman">
            <option value="jne">J&T EXPRESS</option>
            <option value="gosend">JNE</option>
            <option value="tiki">REGULER</option>
          </select>
        </form>

        <form class="bayar">
          <label for="pembayaran">Pembayaran:</label>
          <br />
          <select id="Pembayaran" name="Pembayaran">
            <option value="Bank">BRI</option>
            <option value="Bank">BCA</option>
             <option value="Bank">BNI</option>
          </select>
        </form>

        <div></div>
      </div>

      

        <div class="button">
          <a href="pembeli.php">
            <input id="back" type="submit" value="Kembali" />
          </a>

          <a href="checkout.php">
            <input id="check" type="submit" value="Checkout" />
          </a>
        </div>
      </div>

      <!--KONTEN MASING-MASING ADA DI SINI-->
    </section>
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
              Jiligos merupakan website ecommerce yang bagus untuk berbelanja apa saja
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
              <li>jilogics20@.gmail.com</li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    
    
    <title>Halaman3</title>
  </head>
  <body>
    

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
