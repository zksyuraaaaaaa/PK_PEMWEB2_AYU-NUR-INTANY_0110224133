<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background:rgb(10, 180, 180);
            font-family: 'Arial', sans-serif; 
        }

        .card {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(10, 188, 167, 0.76);
        }

        .btn-primary {
            width: 100%;
            font-size: 18px;
            border-radius: 8px;
        }

        input, select {
            border-radius: 8px !important;
        }

        input:focus, select:focus {
            border-color:rgb(17, 203, 132) !important;
            box-shadow: 0 0 5px rgba(10, 95, 148, 0.5) !important;
        }
    </style>
</head>

<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <div class="container">
        <div class="card">
            <div class="card-body">
                
                <form method="post" action="hasil_nilai.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM</label>
                        <div class="col-8">
                            <input id="nim" name="nim" placeholder="masukan nim anda" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rombel" class="col-4 col-form-label">Rombel</label>
                        <div class="col-8">
                            <input id="rombel" name="rombel" placeholder="masukkan rombel anda" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select" required="required">
                                <option value="Pemweb2">Pemweb2</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Statitiska">Statitiska</option>
                                <option value="UI/UX">UI/UX</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label>
                        <div class="col-8">
                            <input id="tugas" name="tugas" placeholder="masukkan nilai tugas" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-8">
                            <input id="uts" name="uts" placeholder="masukkan nilai uts anda" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
                        <div class="col-8">
                            <input id="uas" name="uas" placeholder="masukkan nilai uas anda" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>