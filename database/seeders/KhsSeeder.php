<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs = [
            'id_mahasiswa' => 20,
            'nim' => '2019121010',
            'nama' => 'sasa',
            'jurusan' => 'Teknik Informatika',
            'email' => 'sasa@mail.com',
            'alamat' => 'surabaya',
            'ttl' => Carbon::now(),
            'kelas_id' => 3
        ];
        DB::table('mahasiswa')->insert($mhs);

        $khs = [
            ['mahasiswa_id' => 20, 'matakuliah_id' => 1, 'nilai' => 'A'],
            ['mahasiswa_id' => 20, 'matakuliah_id' => 2, 'nilai' => 'A'],
            ['mahasiswa_id' => 20, 'matakuliah_id' => 3, 'nilai' => 'A'],
            ['mahasiswa_id' => 20, 'matakuliah_id' => 4, 'nilai' => 'A'],
        ];
        DB::table('mahasiswa_matakuliah')->insert($khs);
    }
}
