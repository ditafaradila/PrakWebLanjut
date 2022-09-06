<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051040',
                'nama'    => 'M. Hanif Pratama',
                'alamat'    => 'Bandar Lampung',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051002',
                'nama'    => 'Dita Faradila',
                'alamat'    => 'Terbanggi Besar',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051008',
                'nama'    => 'Kayla Atsila Ivanka',
                'alamat'    => 'Palembang',
                'created_at'    => Time::now()
            ],
        ];

        //using query builder
        foreach ($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
        
    }
}