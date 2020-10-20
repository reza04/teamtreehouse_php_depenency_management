<?php

if(isset($_POST['action']))
{
  $success="Email Berhasil terkirim";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-4 mt-4">
                <h2>Send Email</h2>

                <?php if(isset($success)):?>
                  <div class="alert alert-primary" role="alert">
                    <?php echo $success ?>
                  </div>
                <?php endif; ?>

                <form method="POST" action="index.php">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control"  placeholder="Masukkan nama" name="awal" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" required placeholder="Masukkan nama belakang" name="akhir" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" required placeholder="Masukkan email yang akan anda kirim" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Kritik</label>
                        <textarea class="form-control" required placeholder="Isi" name="kritik" id="exampleFormControlTextarea1" name="critic" rows="3"></textarea>
                    </div>
                    <input type="submit" value="Kirim" name="input" class="btn btn-primary"></input>
                </form>
            </div>
        </div>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>