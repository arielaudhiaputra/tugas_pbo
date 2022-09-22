<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Edit Profile!</title>
  </head>
  <body>

<div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title float-left">Edit Profile</h4>
                                <div class="d-inline ml-auto float-right">
                                        <a href="{{ route('dashboard') }}" type="submit" class="btn btn-warning btn-sm">Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                            <form action="{{ route('proses', ['id' => $pegawai->id]) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nip" name="nip"   placeholder="NIP" >
                                    <span class="text-danger">@error('nip'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama"   placeholder="Full Name" >
                                    <span class="text-danger">@error('nama'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="kota_asal" name="kota_asal"   placeholder="Kota Asal" >
                                    <span class="text-danger">@error('kota_asal'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="st_asal" name="st_asal"   placeholder="Status Asal" >
                                    <span class="text-danger">@error('st_asal'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="ket_asal" name="ket_asal"   placeholder="Keterangan Asal" >
                                    <span class="text-danger">@error('ket_asal'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="kota_tujuan" name="kota_tujuan"   placeholder="Kota Tujuan" >
                                    <span class="text-danger">@error('kota_tujuan'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="st_pulang" name="st_pulang"   placeholder="Status Pulang" >
                                    <span class="text-danger">@error('st_pulang'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="ket_pulang" name="ket_pulang"   placeholder="Keterangan Pulang" >
                                    <span class="text-danger">@error('ket_pulang'){{ $message }}@enderror</span>
                                </div>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
