<?php

use Illuminate\Database\Seeder;

//Pake faker
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // insert data ke table pegawai
        /*DB::table('pegawai')->insert([
        	'pegawai_nama' => 'Joni',
        	'pegawai_jabatan' => 'Web Designer',
        	'pegawai_umur' => 25,
        	'pegawai_alamat' => 'Jl. Panglateh'
        ]);*/
        // insert data ke table pegawai
        $faker = Faker::create('id_dosen');
        for($i = 1; $i <= 50; $i++){
            DB::table('dosen')->insert([
                'nama' => $faker->name,
                'jabatan' => $faker->jobTitle,
                'gaji' => $faker->numberBetween(2000000,40000000),
                'status' => $faker->country
            ]);
        }
        
    }
}
