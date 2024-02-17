<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charsheet="UTF-8">
        <title>Komentar</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body>
        <nav class="navMain">
            <ul>
                <img src="images/home/batam.png">
                <li><a href="webHome.html">Home</a></li>
                <li><a href="webSejarah.html">Sejarah</a></li>
                <li><a href="webWst.html"">Pariwisata</a></li>
                <li><a href="webKuliner.html">Kuliner</a></li>
                <li class="active" ><a href="webKomenForm.php">Komentar</a></li>
            </ul>
        </nav>
        <div class="webContainer">
            <div class="bigHead">
                <h1 align="center">Komentar</h1>
            </div>
            <div class="mediumHead">
                <h1>Kirim Masukan Anda</h1>
            </div>
            <div class="textParagraphContainer">
                <div class="containerForm">
                    <form action="<?php echo ($_SERVER['PHP_SELF']);?>" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="nama" name="nama" placeholder="Masukan nama anda...">
                            </div>
                     
                            <div class="col-25">
                                <label for="email">E-MAIL</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="email" name="email" placeholder="Masukan email anda...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="komentar">Komentar</label>
                            </div>
                            <div class="col-75">
                                <textarea id="komentar" name="komentar" placeholder="Tuliskan Sesuatu..." style="height:200px"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="textParagraphContainer">
                <div class="textParagraph">
                    <?php
                        $nama = $email = $komentar = "";
                        if ($_SERVER["REQUEST_METHOD"]=="POST"){
                        $nama=$_POST['nama'];
                        $email=$_POST['email'];
                        $komentar=$_POST['komentar'];
                        }
                        if(!empty($nama)){
                            $nama;
                        }
                        if(!empty($email)){
                            $email;
                        }
                        if(!empty($komentar)){
                            $komentar;
                        }
                    ?>
                    <div class="komenNama">
                        <?php echo "$nama<br>"; ?>
                    </div>
                    <div class="komenEmail">    
                        <?php echo "$email<br>"; ?>
                    </div>
                    <div class="komenOutputBox">
                        <div class="komenOutput">
                            <?php echo "Komentar :<br><br> $komentar<br>"; ?>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
            <img class="imgFooter" src="images/home/batam.png" >
            <div class="social-linksBox">
                <div class="social-links">
                    <a href="https://web.facebook.com/kominfo.batam.1"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/mcbatam"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/mediacenterpemkobatam/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@mediacenterbatam38/videos"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="footer-col">
                    <h4>Alamat</h4>
                    <p class="textFooter">
                        Kantor Pemerintah Kota Batam. Jl. Raja H. Fisabilillah No.1, Tlk. Tering, Batam Kota, Kota Batam, Kepulauan Riau 29432, Indonesia. 
                    </p>
                </div>
                <div class="footer-col">
                    <h4>Kontak</h4>
                    <ul>
                        <li>Telp : +62 778 462164</li>
                        <li>Fax  : +62 778 461349 , 461813</li>
                        <li>email : kominfo@batam.go.id</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Nomor Penting</h4>
                    <ul>
                        <li>Informasi: 108</li>
                        <li>Pemadam Kebakaran: 113</li>
                        <li>Polsek Batam Kota: 463360</li>
                        <li>RSUD Batam: 0778391704</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Website Terkait</h4>
                    <ul>
                        <li><a href="http://email.batam.go.id">http://mediacenter.batam.go.id</a></li>
                        <li><a href="http://batam.go.id">http://batam.go.id</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>