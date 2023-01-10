<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paket_data;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();
        // \App\Models\Paket_data::factory(10)->create();

        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345'), // password
                'remember_token' => Str::random(10),
            ]);
        // Paket_data::create(
        //     [
        //     'nama' => 'Paket 2P + telepon',
        //     'kategori_id' => 1,
        //     'kecepatan' => 30,
        //     'harga'     => 390000,
        //     'harga_pemasangan' => '500000',
        //     'ppn'              => 10,
        //     'label'            => 'promo',
        //     ]);
        // Paket_data::create(
        //     [
        //     'nama' => 'Paket 2P + telepon',
        //     'kategori_id' => 1,
        //     'kecepatan' => 40,
        //     'harga'     => 465000,
        //     'harga_pemasangan' => '500000',
        //     'ppn'              => 10,
        //     'label'            => 'promo',
        //     ]);
        // Paket_data::create(
        //     [
        //     'nama' => 'Paket 2P + telepon',
        //     'kategori_id' => 1,
        //     'kecepatan' => 50,
        //     'harga'     => 530000,
        //     'harga_pemasangan' => '500000',
        //     'ppn'              => 10,
        //     'label'            => 'promo',
        //     ]);
        // Paket_data::create(
        //     [
        //     'nama' => 'Paket 2P + telepon',
        //     'kategori_id' => 1,
        //     'kecepatan' => 100,
        //     'harga'     => 885000,
        //     'harga_pemasangan' => '500000',
        //     'ppn'              => 10,
        //     'label'            => 'promo',
        //     ]);
        // // Paket_data::create(
        // //     [
        // //     'nama' => 'PPaket 2P',
        // //     'kategori_id' => 'Promo Internet Telepon',
        // //     'kecepatan' => 50,
        // //     'harga'     => 590000,
        // //     'harga_pemasangan' => '500000',
        // //     'ppn'              => 10,
        // //     'label'            => 'promo',
        // //     ]);
        // // Paket_data::create(
        // //     [
        // //     'nama' => 'Promo Internet Telepon',
        // //     'kategori_id' => 'Promo Internet Telepon',
        // //     'kecepatan' => 100,
        // //     'harga'     => 945000,
        // //     'harga_pemasangan' => '500000',
        // //     'ppn'              => 10,
        // //     'label'            => 'promo',
        // //     ]);
    }
}
