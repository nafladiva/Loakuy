<?php

use Illuminate\Database\Seeder;

class IklanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Iklan::insert([
            [
                'id'  			=> 1,
                'user_id' 		=> 2,
                'judul'	        => 'Baju Koko',
                'gambar'		=> '1588760098_loakuy-2.jpeg',
                'harga'			=> '150.000',
                'alasan'	    => 'Kekecilan',
                'kondisi'		=> 9,
                'deskripsi'		=> 'Baju koko dewasa. Merk Al Thaaf. Bahan katun Jepang. Lengan pendek. Ukuran M : LD 55 cm, PB 79 cm. Warna : Maroon. Info lainnya bisa hubungi nomor hp saya'
            ],
            [
                'id'  			=> 2,
                'user_id' 		=> 1,
                'judul'	        => 'Baju Atasan Blouse Tunik Wanita',
                'gambar'		=> '1588771121_loakuy-baju.jpg',
                'harga'			=> '93.000',
                'alasan'	    => 'Kebesaran',
                'kondisi'		=> 9,
                'deskripsi'		=> 'Baju Atasan Blouse Tunik Wanita Baju Muslim Blus Muslim Amor Tunik. All size fit to L (LD=100cm, Pjg depan = 63cm, Pjg belakang = 91cm). Tunik bahan wolfis, Resleting depan. Berat : 260 gram'
            ],
            [
                'id'  			=> 3,
                'user_id' 		=> 1,
                'judul'	        => 'Kamera DSLR Canon 1300D',
                'gambar'		=> '1588771297_Kamera1.jpg',
                'harga'			=> '2.500.000',
                'alasan'	    => 'Mau ganti yang baru',
                'kondisi'		=> 7,
                'deskripsi'		=> 'Alamat : Jln Cengger Ayam 9a Kota Malang – Jawa Timur. Nego bisa lewat telepon/sms'
            ],
            [
                'id'  			=> 4,
                'user_id' 		=> 1,
                'judul'	        => 'Baju Atasan Wanita',
                'gambar'		=> '1588771410_baju1.jpg',
                'harga'			=> '120.000',
                'alasan'	    => 'Kebesaran',
                'kondisi'		=> 9,
                'deskripsi'		=> 'Bahannya enak dan ringan. Yang minat, telepon/sms. Trims'
            ],
            [
                'id'  			=> 5,
                'user_id' 		=> 2,
                'judul'	        => 'Handphone Vivo Y12',
                'gambar'		=> '1588772230_hp.jpg',
                'harga'			=> '1.480.000',
                'alasan'	    => 'Mau ganti yang baru',
                'kondisi'		=> 8,
                'deskripsi'		=> 'DIJUAL Vivo Y12!! Produk bekas pakai dengan kondisi fisik lebih dari 7 titik lecet/penyok/cat terkelupas di body dan sedikit berbayang (shadow) di layar. Contoh seperti di gambar.'
            ],
            [
                'id'  			=> 6,
                'user_id' 		=> 2,
                'judul'	        => 'Kamera Sony A6000',
                'gambar'		=> '1588772581_kamera.jpg',
                'harga'			=> '4.500.000',
                'alasan'	    => 'Mau ganti yang baru',
                'kondisi'		=> 8,
                'deskripsi'		=> 'Kamera Sony A6000. Tidak ada lecet, masih mulus. Yang minat bisa telepon.'
            ],
            [
                'id'  			=> 7,
                'user_id' 		=> 1,
                'judul'	        => 'Kamera Canon 550D',
                'gambar'		=> '1588772779_kamera2.jpg',
                'harga'			=> '3.675.000',
                'alasan'	    => 'Tidak dipakai',
                'kondisi'		=> 9,
                'deskripsi'		=> 'Spesifikasi : Kamera 18 Megapixels, Lensa kit 18-55mm IS2, HD Movie Recording. Fisik: 90%. Fungsi : 100% Normal'
            ],
            [
                'id'  			=> 8,
                'user_id' 		=> 1,
                'judul'	        => 'Laptop Asus Vivobook S14',
                'gambar'		=> '1588789471_laptop.jpeg',
                'harga'			=> '12.000.000',
                'alasan'	    => 'Mau ganti yang lain',
                'kondisi'		=> 8,
                'deskripsi'		=> 'Asus vivobook s14   Spesifikasi: ram 8 gb, Intel corei-7,ukuran layar 13 inci. Alasan dijual: ingin beli yg baru. Lama pemakaian: 2 tahun'
            ]
        ]);
    }
}
