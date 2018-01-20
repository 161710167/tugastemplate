<?php

use Illuminate\Database\Seeder;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tugas=[
        ['NIS'=>'161710167','Nama_Siswa'=>'Yeni Kartika Ayu','Tempat_Lahir'=>'Bandung','Tanggal_Lahir'=>'2000-10-23','Alamat'=>'Katapang','Cita_cita'=>'chef','Hobi'=>'mengetik','Foto'=>'yeni.jpg']
        ];
        DB::table('tugas')->insert($tugas);    }
}
