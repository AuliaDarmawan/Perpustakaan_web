<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Penulis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Penulis</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Penulis</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td>{{ $penulis->nama_penulis }}</td>
                                        <td>{{ $penulis->tempat_lahir}}</td>
                                        <td>{{ $penulis->tgl_lahir }}</td>
                                        <td>{{ $penulis->email }}</td>
                                    </tr>
                                    </div>
                            </tbody>
                        </table>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



