<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $data=[
            [
                'tanto_porciento'=>4,
                'nombre'=>"Super reducido"
            ],
            [
                'tanto_porciento'=>10,
                'nombre'=>"Reducido"
            ],
            [
                'tanto_porciento'=>21,
                'nombre'=>"General"
            ]
            ];
            DB::table('ivas')->insert($data);
    }
    

}

