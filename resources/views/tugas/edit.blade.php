<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Pada Laravel</title>
</head>
<body>

	<h2>Tugas Hari H PWEB D</h2>
	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
        IDPegawai <input type="text" name="IDPegawai" required="required" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" name="Tanggal" required="required" value="{{ $t->Tanggal }}"> <br/>
		NamaTugas <input type="text" name="NamaTugas" required="required" value="{{ $t->NamaTugas }}"> <br/>
		Status <input type="text" name="Status" required="required" value="{{ $t->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
