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
        // \App\Models\User::factory(10)->create();
        // \App\Models\Paket_data::factory(10)->create();

        Paket_data::create(
            [
            'nama' => 'Paket 3P (Dengan Akses Disney+ Hotstar)',
            'kategori' => 'Paket 3P',
            'kecepatan' => 30,
            'harga'     => 385000,
            'harga_pemasangan' => '500000',
            'ppn'              => 10,
            'label'            => 'promo',
            ]);
        Paket_data::create(
            [
            'nama' => 'Paket 3P (Dengan Akses Disney+ Hotstar)',
            'kategori' => 'Paket 3P',
            'kecepatan' => 50,
            'harga'     => 615000,
            'harga_pemasangan' => '500000',
            'ppn'              => 10,
            'label'            => 'promo',
            ]);
        Paket_data::create(
            [
            'nama' => 'Paket 3P (Dengan Akses Disney+ Hotstar)',
            'kategori' => 'Paket 3P',
            'kecepatan' => 100,
            'harga'     => 965000,
            'harga_pemasangan' => '500000',
            'ppn'              => 10,
            'label'            => 'promo',
            ]);
        // Paket_data::create(
        //     [
        //     'nama' => 'PPaket 3P',
        //     'kategori' => 'Promo Internet Telepon',
        //     'kecepatan' => 50,
        //     'harga'     => 590000,
        //     'harga_pemasangan' => '500000',
        //     'ppn'              => 10,
        //     'label'            => 'promo',
        //     ]);
        // Paket_data::create(
        //     [
        //     'nama' => 'Promo Internet Telepon',
        //     'kategori' => 'Promo Internet Telepon',
        //     'kecepatan' => 100,
        //     'harga'     => 945000,
        //     'harga_pemasangan' => '500000',
        //     'ppn'              => 10,
        //     'label'            => 'promo',
        //     ]);
    }
}
