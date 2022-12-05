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
                    Diagnosa Penyakit
                </div>
                <form action="/diagnosa" method="post">
                    @csrf
                    <div class="card-body">
                        @foreach($role as $data)
                        <p>Apakah terdapat gejala {{$data->gejala->nama_gejala}}</p>
                        <input type="hidden" name="gejala_id" value="{{$data->gejala->id}}">
                        <input type="hidden" name="penyakit_id" value="{{$data->penyakit_id}}">
                        @endforeach
                    </div>
                    <div class="my-2 text-center">
                        <button type="submit" value="1" name="ya" class="btn btn-primary">Ya</button>
                        <button type="submit" value="0" name="tidak" class="btn btn-secondary">Tidak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>

</html>