@extends('layouts.1')
@extends('layouts.app')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>tugas</title>
</head>
<body background="2.jpg">
<center>
<?php
$r=glob("PRAMUKA.jpg");
for($i=0;$i<count($r);$i++)
{
	$rr = $r[$i];
	?>
	<img src="<?php echo $rr;?>" width="950" heigth="750"/?>
	<?php

}
?>
</center>
</body>
</html>
@endsection