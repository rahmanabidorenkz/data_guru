<?php

namespace Database\Seeders;

use App\Models\Dataguru;

use Illuminate\Database\Seeder;

class DataguruSeeder extends Seeder
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
            'dataguru' => 'guru mapel'
        ];

        Dataguru::create($data);


    }
}
