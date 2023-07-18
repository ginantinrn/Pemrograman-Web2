<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>View Kategori Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to bottom right, #a8c0ff, #3f2b96);
        }
    </style>
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">
                            View Kategori Menu
                        </h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputName" type="text" placeholder="Nama Kategori Menu" readonly value="{{ $dataKategori->nama_kategori }}" />
                                <label for="inputName">Nama Kategori Menu</label>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small">
                            <a href="/kategori_menu">Kembali ke Daftar Kategori Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>
