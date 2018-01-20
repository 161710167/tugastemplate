@extends('layouts.1')
@extends('layouts.app')
@section('konten')
<center>
<div class="col-sm-8">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title"><br>BADEN POWELL(Bapak Pramuka)</br></h3>
              <?php
$b=glob("badenpowel.jpg");
for($i=0;$i<count($b);$i++)
{
	$bb = $b[$i];
	?>
	<img src="<?php echo $bb;?>" width="350" heigth="150"/?> 
	<?php
}
?>

            </div>
            <div class="panel-body">
            <br>
            <P>
            <br>
               Sejarah atau asal mula kepanduan tidak dapat dipisahkan dari dari penemunya yaitu Robert Stephenson Smyth Baden Powell. Beliaulah yang telah mendirikan Gerakan Kepanduan Dunia pertama kali. Pramuka yang kita kenal di Indonesia ini adalah inspirasi dari kepanduan yang didirikan oleh Baden-Powell. Siapakah Robert Stephenson Smyth Baden Powell? mari kita simak baik-baik bagaimana perjalanan hidupnya.<P>
<BR>
Biodata Baden Powell<BR>
<BR>
Nama Lengkap 	: Robert Stephenson Smyth Baden Powell<BR>
Nama panggilan 	: Baden Powell atau dipanggil “BP”(baca:bipi), nama “BP” akrab dipanggil oleh para pandu<BR>
Nama Kecil 		: Stephenson<BR>
TTL 			: Kota London, Inggris, 22 Februari 1857<BR>
<BR>
Nama Ayah 		: Prof. Domine Baden-Powell<BR>
Ibu             : Miss Henrietta Grace Smyth<BR>
Saudara         : 9 orang (Warrington, George, Augustus, Frank, Penrose, Agnes, Henrietta, Jessie, dan Baden Fletcher)<BR>
<BR>
        <P> Robert Stephenson Smyth Baden-Powell, Baron I Baden-Powell Gilwell, adalah seorang <BR>tentara Inggris dan penemu the Boy Scouts, lahir di London, dan merupakan lulusan<BR> Charterhouse School. Bergabung dengan Pasukan Hussars Ke-13 di India pada tahun<BR>1876. Dari 1888 sampai 1895, BP sukses bertugas, di India, Af­ghanistan, Zulu, dan <BR>Ashanti. .Sebelum dan semasa Perang Boer, BP bertugas sebagai perwira staff dari <BR>Pasukan Kerajaan Inggris (1896-1897), menjadi kolonel dari Pasukan Berkuda, Afrika <BR>Selatan, dan letnan kolonel dari Pengawal Naga ke-5 (5th Dragon Guards, 1897-1899). <BR>Karena keberanian dan pengabdiannya selama mempertahankan Kota Mafikeng (dulu Mafeking) dari kepungan musuh, dipromosikan menjadi mayor jendral. Baden-Powell <BR>kemudian kembali ke Inggris, pada tahun 1908 BP menjadi letnan jendral. Dianugerahi <BR>gelar kesatria tahun 1909, kemudian pensiun dari dinas militer pada tahun <BR>berikutnya. BP membentuk the Boys Scouts di tahun 1908, dan dua tahun berikutnya BP<BR> membantu mendirikan the Girl Guides, organisasi serupa untuk para anak-anak dan <BR>remaja putri. Selama Perang Dunia I.<BR></P>

            </div>
          </div>

</center>
</body>
</html>
@endsection