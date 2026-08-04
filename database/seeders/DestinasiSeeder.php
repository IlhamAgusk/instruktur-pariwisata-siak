<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destinasi; 

class DestinasiSeeder extends Seeder
{
    public function run(): void
    {
        Destinasi::truncate();

        Destinasi::create([
            'nama' => 'Istana Siak',
            'deskripsi' => 'Istana peninggalan Kesultanan Siak Sri Indrapura, dibangun pada masa kejayaan kesultanan Melayu di tepian Sungai Siak. Kini menjadi museum yang menyimpan berbagai koleksi benda bersejarah dan menjadi ikon utama wisata sejarah Kabupaten Siak.',
            'gambar' => 'istana-siak.jpg',
            'jam_buka' => '08:00:00',
            'jam_tutup' => '17:00:00',
            'lokasi' => 'Kecamatan Siak, Kabupaten Siak',
        ]);

        Destinasi::create([
            'nama' => 'Tangsi Belanda',
            'deskripsi' => 'Bangunan barak militer peninggalan zaman kolonial Belanda yang dulunya berfungsi sebagai zona pertahanan tentara Belanda. Setelah dipugar, kini menjadi destinasi wisata edukasi sejarah dengan bangunan yang masih terjaga bentuk aslinya, lengkap dengan ruang-ruang yang dulu dipakai sebagai barak, gudang senjata, dan ruang komando.',
            'gambar' => 'tangsi-belanda.jpeg',
            'jam_buka' => '08:00:00',
            'jam_tutup' => '17:00:00',
            'lokasi' => 'Kampung Benteng Hulu, Kecamatan Mempura, Kabupaten Siak',
        ]);

        Destinasi::create([
            'nama' => 'Skywalk Tengku Buwang Asmara',
            'deskripsi' => 'Jembatan layang pejalan kaki sepanjang lebih dari 1 kilometer yang membentang di atas Sungai Siak, dengan sebagian lantai kaca tempered transparan setinggi sekitar 12 meter dari permukaan air. Dinamai dari Sultan Siak kedua, jembatan ini menjadi spot favorit menikmati pemandangan Istana Siak dan senja, apalagi pada malam hari dengan lampu hias yang menari.',
            'gambar' => 'skywalk-tengku-buwang-asmara-siak.jpg',
            'jam_buka' => '16:00:00',
            'jam_tutup' => '22:00:00',
            'lokasi' => 'Kampung Tengah, Kecamatan Mempura, Kabupaten Siak',
        ]);
    }
}