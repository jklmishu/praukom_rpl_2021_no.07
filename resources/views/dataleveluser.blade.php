<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Level User</title>
  </head>
  <body>
    <h1 class="text-center mb-5">Data Level User</h1>
        <div class="container">
            <div class="button">
                <a href="/dashboard/tambahleveluser" class="btn btn-dark">Tambah +</a>
            </div>
            <div class="row">
              @if ($message = Session::get('success'))
              <div class="alert alert-secondary" role="alert">
                {{ $message }}
              </div>
              @endif 
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Level</th>
                        <th scope="col">Nama Level</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                        @foreach ($data as $row)
                        
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{ $row->kode_level }}</td>
                        <td>{{ $row->nama_level }}</td>
                        <td>{{ $row->keterangan }}</td>
                        <td>
                            <a href ="/dashboard/tampilkanleveluser/{{ $row->kode_level }}" 
                            class="btn btn-dark">Info</a>
                            <button type="button" class="btn btn-dark">Delete</button>
                        </td>
                      </tr>
                      @endforeach 
                    </tbody>
                  </table>
            </div>
        </div>
    
       

    <!-- Optional JavaScript choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>