<html>
    <head>
        <title>Contoh Form Login</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">

            <div class="badan">
                <div class="kepala">
                    <p class="kepalatext">&#187; Dwi Febriandaru Site &#171;</p>
                </div>
                  <div class="bingkai">
                   <div style="padding-top:10px; padding-left:10px; padding-right:10px; color:#030033;">
                         <?php
                          session_start();
                          if(empty($_SESSION['username'])){
                              echo "<center>TAMPILAN SEBELUM LOGIN</center><br/>Maaf sepertinya anda belum Login,silahkan tekan link login dibawah <br/>
                                      <a href='login.php'><center>Login</center></a>";
                          }else{
                              echo "<center>TAMPILAN SETELAH LOGIN<br/>Selamat Anda Berhasil Login<br/><a href='logout.php'>Logout</a></center>";
                          }
                          ?>
                   </div>
                  </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> 