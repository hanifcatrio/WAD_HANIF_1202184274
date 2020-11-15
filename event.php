<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Buat event</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-primary">
        <!-- Navbar content -->
        <a class="navbar-brand" href="Home.php">EAD EVENTS</a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active text-light" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <form class="form-inline">
                    <button class="btn btn-outline-light" href="event.php" type="button">Buat Event</button>
                </form>
            </li>
        </ul>
    </nav>
<h5>Buat Event</h5>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header bg-primary">
      </div>
      <div class="card-body ">
      <form action="HOME.php" method="post" enctype="multipart/form-data">
   <div class="form-group">
    <label>Nama </label>
        <br>
    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
   </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi </label>
    <br>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   <div class="form-group">
    <label>Upload Gambar</label>
        <br>
    <input type="file" class="form-control" name="foto" required="required">
   </div> 
      <label>Kategori</label>  
      <br>
   <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Online</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Offline</label>
</div>
  </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card ">
    <div class="card-header bg-danger">
      </div>
      <div class="card-body">
            <form action="HOME.php" method="post" enctype="multipart/form-data">
    <div class="form-group ">
            <label for="example-date-input" class=" col-form-label">Tanggal </label>
            <br>
            <input name="tanggal" class="form-control" type="date" value="dd/mm/yy" id="example-date-input">
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
      <label for="inputState">Jam mulai </label>
      <select id="mulai" class="form-control">
        <option selected>19.00</option>
        <option>20.00</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Jam Berakhir </label>
      <select id="berakhir" class="form-control">
        <option selected>20.00</option>
        <option>21.00</option>
      </select>
      </div>
      </div>
     <div class="form-group">
    <label>Tempat </label>
        <br>
    <input type="text" class="form-control"  name="tempat" required="required">
   </div>
      <div class="form-group">
    <label>Harga </label>
        <br>
    <input type="text" class="form-control" placeholder="10000" name="harga" required="required">
   </div>
      <label>Benefit </label>
        <br>
      <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineCheckbox1" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Snacks</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineCheckbox2" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Sertifikat</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineCheckbox3" id="inlineCheckbox3" value="option3">
  <label class="form-check-label" for="inlineCheckbox3">Souvenir</label>
</div>
<br>
<br>
<p style="text-align:right">
<button class="btn btn-primary" type="submit">Submit</button>
<button class="btn btn-danger" type="submit">Cancel</button>
</p>
</form>
      </div>
    </div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>