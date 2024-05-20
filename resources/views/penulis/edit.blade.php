<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penulis</title>
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
                        <form action="{{ route('penulis.update', $dataPenulis->kd_penuliss) }}" method="POST">
                          @csrf
                          @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Penulis</label>
                                <input type="text" name="nama_penulis" class="form-control" placeholder="Nama Penulis" value="{{ old('nama_penulis', $dataPenulis->nama_penulis) }}">
                                <label for="exampleInputEmail1">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Tinggal Penulis" value="{{ old('tempat_lahir', $dataPenulis->tempat_lahir) }}">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                <input type="text" name="tgl_lahir" class="form-control" placeholder="yyyy-mm-dd" value="{{ old('tgl_lahir', $dataPenulis->tgl_lahir) }}">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email Penulis" value="{{ old('email', $dataPenulis->email) }}">
                                @error('nama_penulis', 'tempat_lahir', 'tgl_lahir', 'email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <br/>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                          </form>
           
                        
                        {{-- {{ $user->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



