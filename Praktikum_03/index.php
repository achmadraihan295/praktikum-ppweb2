<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Selamat Datang Di Perpustakaan NF</h2>
        <p>Silahkan Isi Buku Tamu dibawah ini</p>
        <form method="post" action="kunjungan.php">
  <div class="form-group row">
    <label for="Fullname" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="Fullname" name="fullname" type="text" class="form-control" required="required" aria-describedby="FullnameHelpBlock">
      </div> 
      <span id="FullnameHelpBlock" class="form-text text-muted">Isi nama kamu</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="Your email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="Your email" name="email" type="text" aria-describedby="Your emailHelpBlock" class="form-control"> 
      <span id="Your emailHelpBlock" class="form-text text-muted">Isi email aktif kamu</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="Massage" class="col-4 col-form-label">Keperluan</label> 
    <div class="col-8">
      <textarea id="Massage" name="massage" cols="40" rows="5" class="form-control" required="required"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>