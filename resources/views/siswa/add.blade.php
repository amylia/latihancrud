@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Add Siswa</div>

				<div class="panel-body">
			<form method="POST" action="{{url('siswa/save')}}">
				<table class="table">
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama"
							class="form-control"></td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td><input type="text" name="kelas"
							class="form-control"></td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td><input type="text" name="jurusan"
							class="form-control"></td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td><input type="text" name="tempat_lahir"
							class="form-control"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><input type="date" name="tanggal_lahir"
							class="form-control"></td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit"
							class="btn btn-primary">Save</button></td>
					</tr>
				</table>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
			</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
