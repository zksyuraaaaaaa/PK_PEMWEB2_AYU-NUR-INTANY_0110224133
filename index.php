<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form submission</title>
</head>
<body>
    <div class="container">
        <h2>Selamat Datang di Perpustakaaan STT-NF</h2>
        <p>silahkan isi buku tamu di bawah ini</p>
        <hr>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="formcss.css">

    <form method="post" action="kunjungan.php">
    <div class="form-group row">
        <label for="" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-address-card"></i>
            </div>
            </div> 
            <input id="nama" name="nama" type="text" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
        <input id="email" name="email" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Keperluan</label> 
        <div class="col-8">
        <textarea id="message" name="message" cols="40" rows="5" class="form-control" required="required"></textarea>
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form> 
    </div>
</body>
</html>
