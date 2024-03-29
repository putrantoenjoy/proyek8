<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Role</th>
                <th>Username</th>
                <th>Email</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($allData as $row => $data)
			<tr>
				<td>{{++$row}}</td>
                <td>{{$data->first_name}}</td>
                <td>{{$data->last_name}}</td>
                <td>
                    @foreach($data->getRoleNames() as $role)
                        {{ $role }}
                    @endforeach
                </td>
                <td>{{$data->username}}</td>
                <td>{{$data->email}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>