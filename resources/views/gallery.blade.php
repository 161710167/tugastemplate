@extends('layouts.1')
@extends('layouts.app')
@section('konten')

<!DOCTYPE html>
<html>
<head>
    <title>tugas</title>
</head>
<body background="coklat.jpg">
<h1><center>GALLERY PRAMUKA</center></h1>
<?php
$r=glob("ridwan.jpg");
$image=glob("JUNIKA.jpg");
$saya=glob("LAELA.jpg");
$aku=glob("LUTHFI.jpg");
$az=glob("KILAI.jpg");
$yk=glob("yeni.jpg");
for($i=0;$i<count($r);$i++)
for($i=0;$i<count($image);$i++)
for($i=0;$i<count($saya);$i++)
for($i=0;$i<count($aku);$i++)
for($i=0;$i<count($yk);$i++)

{
    $rr = $r[$i];
    $single_image = $image[$i];
    $a = $saya[$i];
    $b= $aku[$i];
    $c = $az[$i];
     $d= $yk[$i];
    ?>
    <img src="<?php echo $rr;?>" width="350" heigth="150"/?>
    <img src="<?php echo $single_image;?>" width="280" heigth="150"/?>
    <img src="<?php echo $a;?>" width="245" heigth="150"/?>
    <img src="<?php echo $b;?>" width="350" heigth="150"/?>
    <img src="<?php echo $c;?>" width="250" heigth="150"/?>
    <img src="<?php echo $d;?>" width="440" heigth="150"/?>
    <?php
}
?>

</body>
</html>

@endsection