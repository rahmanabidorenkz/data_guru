<?php

namespace Database\Seeders;

use App\Models\Daftarhadir;
use Illuminate\Database\Seeder;

class DaftarhadirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data =[
            'daftarhadir' => 'absen',
            'jumlah guru' => '15',
        ];

        Daftarhadir::create($data);

    }
}
