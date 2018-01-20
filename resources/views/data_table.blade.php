@extends('layouts.1')
@extends('layouts.app')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div class="jumbotron">
       <center><h1>---data tabel!---</h1></center>
        <p></p>
      </div>
<div class="container">
	<table border="2" class="tables">
        <th>Id</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal lahir</th>
        <th>Alamat</th>
        <th>Cita-Cita</th>
        <th>Hobi</th>
        <th>Foto</th>
        
   @foreach ($c as $gg)
   <tr>
 	<td>{{$gg -> id}}</td>
 	<td>{{$gg -> NIS}}</td>
 	<td>{{$gg -> Nama_Siswa}}</td>
 	<td>{{$gg -> Tempat_Lahir}}</td>
 	<td>{{$gg -> Tanggal_Lahir}}</td>
 	<td>{{$gg -> Alamat}}</td>
 	<td>{{$gg -> Cita_cita}}</td>
 	<td>{{$gg -> Hobi}}</td>
  <td><img src="{{ asset('images/'.$gg->Foto) }}" style="max-height: 150px;max-width: 150px;margin-top: 10px;"></td>
 	@endforeach
</tr>
</table>
</body>
</html>
@endsection