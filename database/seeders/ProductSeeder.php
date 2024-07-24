<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    public function run()
    {

        // Mengambil user_id pertama dari tabel users
        $userId = DB::table('users')->first()->id;

        DB::table('products')->insert([
            [
                'user_id' => $userId,
                'title' => 'Apel Fuji',
                'product_code' => 'PRD001',
                'price' => '30000',
                'description' => 'Apel Fuji segar dengan rasa manis dan renyah, cocok untuk dijadikan camilan sehat.',
            ],
            [
                'user_id' => $userId,
                'title' => 'Susu Kental Manis',
                'product_code' => 'PRD002',
                'price' => '15000',
                'description' => 'Susu kental manis dengan rasa lezat dan gurih, ideal untuk campuran kopi atau teh.',
            ],
            [
                'user_id' => $userId,
                'title' => 'Beras Pandan Wangi',
                'product_code' => 'PRD003',
                'price' => '65000',
                'description' => 'Beras Pandan Wangi dengan aroma harum dan tekstur pulen, sempurna untuk hidangan keluarga.',
            ],
            [
                'user_id' => $userId,
                'title' => 'Minyak Goreng Kelapa',
                'product_code' => 'PRD004',
                'price' => '28000',
                'description' => 'Minyak goreng kelapa murni yang sehat dan bebas kolesterol, bagus untuk memasak berbagai jenis masakan.',
            ],
            [
                'user_id' => $userId,
                'title' => 'Daging Sapi Giling',
                'product_code' => 'PRD005',
                'price' => '85000',
                'description' => 'Daging sapi giling segar dan berkualitas tinggi, cocok untuk membuat bakso atau burger.',
            ],
            [
                'user_id' => $userId,
                'title' => 'Telur Ayam Kampung',
                'product_code' => 'PRD006',
                'price' => '20000',
                'description' => 'Telur ayam kampung dengan kandungan nutrisi tinggi, bagus untuk sarapan sehat setiap hari.',
            ],
            [
                'user_id' => $userId,
                'title' => 'Tepung Terigu Serbaguna',
                'product_code' => 'PRD007',
                'price' => '12000',
                'description' => 'Tepung terigu serbaguna dengan kualitas premium, ideal untuk membuat kue, roti, dan gorengan.',
            ],
            [
                'user_id' => $userId,
                'title' => 'Mie Instan Pedas',
                'product_code' => 'PRD008',
                'price' => '5000',
                'description' => 'Mie instan dengan rasa pedas yang menggugah selera, cepat dan mudah disajikan.',
            ],
            [
                'user_id' => $userId,
                'title' => 'Kacang Tanah Goreng',
                'product_code' => 'PRD009',
                'price' => '18000',
                'description' => 'Kacang tanah goreng renyah dengan bumbu gurih, pas untuk cemilan atau tambahan hidangan.',
            ],
            [
                'user_id' => $userId,
                'title' => 'Jus Jeruk Segar',
                'product_code' => 'PRD010',
                'price' => '25000',
                'description' => 'Jus jeruk segar dengan rasa manis alami dan penuh vitamin C, menyegarkan dan menyehatkan.',
            ],
        ]);
    }
}
