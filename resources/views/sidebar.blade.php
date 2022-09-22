
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Dashboard</title>
  </head>
  <body>
  <div class="container laptop" style="margin-top: 70px;">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header d-block">
					<h4 class="card-title float-left">Data User</h4>
					<div class="d-inline ml-auto float-right">
						<form action="{{ route('logout') }}" method="POST">
							@csrf
							<button type="submit" class="btn btn-warning btn-sm"><i class="bi bi-dash-circle"></i></i> Logout</button>
						</form>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped datatable">
							<thead>
								<th>Name</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>No Telepon</th>
                				<th>Aksi</th>
							</thead>
							<tbody>
									<tr>
										<td>{{ auth()->user()->name ?? '' }}</td>
                   				        <td>{{ auth()->user()->email ?? '' }}</td>
										<td>{{ auth()->user()->alamat ?? '' }}</td>
										<td>{{ auth()->user()->no_telp ?? '' }}</td>
										<td>
											<a href="{{ route('edit') }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
											<a href="" class="btn btn-danger btn-sm btn-delete ml-2" onclick="return confirm('apakah anda yakin ingin menghapus data karyawan ini ?')"><i class="fa fa-trash"></i> Hapus</a>
										</td>
									</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





  </body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>
