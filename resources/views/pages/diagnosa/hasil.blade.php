<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- content -->
    <div class="row mt-5 justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <form action="/diagnosa" method="get">
                    @csrf
                    <div class="card-body">
                        <p>Anda diagnosa mengidap penyakit {{$role->nama_penyakit}}</p>
                    </div>
                    <div class="my-2 text-center">
                        <button type="submit" class="btn btn-primary">Mau Lagi?</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>

</html>