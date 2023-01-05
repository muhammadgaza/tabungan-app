<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabungan</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kenia&family=Lato:wght@300&family=Rubik:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  </head>
    <body style="overflow-x: hidden">
    

    <h1 class="text-center mt-5">TABUNGAN MASA DEPAN</h1>

    <!-- <div class="container text-center">
      <div class="row">
      <div class="col">
      <h3 class="ms-0">Tabungan Akhirat adalah berbuat amal baik yang akan membuat anda masuk surga</h3>
    </div>
    <div class="col">
  <img class="text-center col-6" src="img/human.png" alt="" style="height: 500px; -left: 20%">
    </div>
  </div>
</div> -->

    @if ($message = Session::get('success'))
  <div class="alert alert-primary text-center" role="alert">
    {{$message}}
  </div>
    @endif

    @if ($message = Session::get('failed'))
  <div class="alert alert-danger text-center" role="alert">
    {{$message}}
  </div>
    @endif

  <div class="row" style="margin-left: 120px;">
   <div class="col-md-6 card p-5 ms-5 mt-5 border border-3" style="width: 500px; margin-left: 90px;">
   <div class="card-content">
    <h3 class="bi bi-person-add text-center">  Daftar Member</h3>
  <form action="{{ route('store') }}" method="POST" class="container" style="widht: 200px;">
    @csrf
    <div class="card- mt-3">
    <div class="col-xs-2 style=" style="widht: 200px;"">
      <label for="ex1">NIS</label>
      <input class="form-control @error('nis') is-invalid @enderror" id="ex1" type="number" name="nis">
      @error('nis')
        <div class="text-danger">{{ $message }}</div>
      @enderror
      </div> 
    </div>

    <div class="col-xs-2 ">
      <label for="ex1">Nama</label>
      <input class="form-control" id="ex1" type="text" name="nama" >
    </div>

    <div class="col-xs-2">
      <label for="ex1">Rayon</label>
      <input class="form-control" id="ex1" type="rayon" name="rayon">
    </div>

    <div class="col-xs-2">
      <label for="ex1">Masukan tabungan</label>
      <input class="form-control" id="ex1" type="text" name="uangphp">
    </div>

    
       <button type="submit" class="btn btn-primary mt-5">Submit</button>
      </form>
    </div>
  </div>



    <div class="col-md-6 ms-5" style="margin-left: 90px;">
      <table class="table container mt-5" style="margin-left: 40px;">
        <thead>
          <tr>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Rayon</th>
            <th scope="col">Tabungan</th>
            <th scope="col">Action</th>
         </tr>
      </thead>
    <tbody>
    @foreach($tabung as $uang)

    <tr>
      <td>{{$uang->nis}}</td>
      <td>{{$uang->nama}}</td>
      <td>{{$uang->rayon}}</td>
      <td>{{$uang->uangphp}}</td>
      <td>
        <form action="{{ route('destroyTabungan', $uang->id) }}" method="post">
          @csrf
          <a class="btn btn-success bi-database-dash" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$uang->id}}" role="button"> Tambah</a>
          <a class="btn btn-danger bi-database-add" data-bs-toggle="modal"  data-bs-target="#kurang-{{$uang->id}}" role="button"> Kurang<a>
          <button class="btn" role="button"><i class="bi bi-trash-fill"></i></button>
        </form>
      </td>
    </tr>

    
    
    @include('modal')
    @include('min-modal')
       @endforeach
    </tbody>
  </table>
</div>
</div>
<div class="bg-primary p-2 text-white bg-opacity-50 mt-5 ms-5 me-5 rounded" style="margin-top: 90px;">
  <h3 class="ms-5 text-center">PERATURAN</h3>
  <br>
  <br>
  <h5 class="ms-5">
    1. Daftar member terleih dahulu
    <br>
    2. Klik tombol tambah untuk memasukan nominal yang ingin di tabung
    <br>
    3. Klik tombol kurang untuk menarik uang
    <br>
    <br>

    </h5>
</div>
<br>
<br>
<br>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>