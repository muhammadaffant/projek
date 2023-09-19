<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Ucok',
        //     'email' => 'Ucok@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'uppan',
        //     'email' => 'uppan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);

        Post::factory(30)->create();
        // Post::create([
        //     'title' => 'Bahasa Pemrograman: Definisi, Manfaat, dan Tips Belajar untuk Pemula',
        //     'slug' => 'manfaat-dan-tips-belajar-untuk-pemula',
        //     'excerpt' => 'Apa Itu Bahasa Pemrograman?Dikutip dari modul Bahasa Pemrograman untuk Pemula oleh Syarifudin, dkk,',
        //     'body' => '<p>Dikutip dari modul Bahasa Pemrograman untuk Pemula oleh Syarifudin, dkk, bahasa pemrograman adalah instruksi dasar yang disusun programmer agar komputer bisa mengerjakan tugas atau fungsi tertentu. Supaya sebuah komputer bisa memahami perintah dari seorang programmer, maka instruksi dibuat dalam bentuk kata-kata yang terdiri dari banyak baris.</p><p>Bahasa pemrograman memungkinkan seorang programmer untuk bisa mengekspresikan algoritma dalam bentuk yang dapat dipahami oleh sebuah komputer. Hingga akhirnya dapat menghasilkan program atau aplikasi yang dapat dijalankan oleh komputer itu sendiri</p><p>Dalam perkembangan teknologi dan digitalisasi ini, bahasa pemrograman memainkan peran yang sangat penting karena hampir semua sistem dan aplikasi yang digunakan sekarang berjalan berdasarkan kode-kode yang ditulis menggunakan bahasa pemrograman</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Contoh Desain Web untuk Cari Inspirasi',
        //     'slug' => 'contoh-desain-web-untuk-cari-inspirasi',
        //     'excerpt' => 'Apakah Anda sedang mencari inspirasi untuk contoh desain web? Jangan ke mana-mana, karena Anda berada di artikel yang tepat. Di sini,',
        //     'body' => '<p>Apakah Anda sedang mencari inspirasi untuk contoh desain web? Jangan ke mana-mana, karena Anda berada di artikel yang tepat. Di sini, kami menghadirkan daftar beberapa dari desain website terbaik untuk inspirasi proyek website selanjutnya.</p><p>1. Hostinger Web Builder</p><p>Kalau Anda mencari template yang indah dan intuitif, website builder Hostinger adalah jawabannya. Tersedia banyak template desain website dengan tampilan yang rapi dan modern, dan kami jamin tampilan website Anda akan terlihat profesional sekaligus menarik</p><p>Gulirkan kursor Anda di berbagai pilihan template dan preview desain website yang Anda menarik perhatian. Pun, jika Anda menemukan template yang sesuai dengan keinginan, Anda dapat langsung menggunakannya secara gratis. Fitur drag-and-drop yang intuitif memungkinkan siapa saja untuk mengedit template sesuai dengan keinginannya dengan mudah.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Tren Web Design Terpopuler di Tahun 2023 untuk Websitemu',
        //     'slug' => 'tren-web-design',
        //     'excerpt' => 'Salah satu hal yang harus diperhatikan dalam membuat website ialah mengikuti tren web design',
        //     'body' => '<p>Salah satu hal yang harus diperhatikan dalam membuat website ialah mengikuti tren web design. Desain dalam website adalah hal esensial untuk memberikan citra ke pengunjung.</p><p>Inovasi desain web saat ini beradaptasi dari perkembangan teknologi dan kebutuhan pengunjung. Baik dalam segi pilihan warna, konten dan visual, semua disesuaikan untuk menarik perhatian visitor.</p><p>Nah, apakah website kamu sudah memiliki tampilan yang up to date? Jika kamu butuh inspirasi desain website yang sedang tren, cek artikel ini ya!</p><p>1. Dark Mode</p><p>Mode gelap menjadi tren desain web di tahun 2021 ini. Seiring dengan populernya penggunaan night mode di beberapa perangkat dan aplikasi, design web turut mengadaptasi tampilan dalam mode gelap.Design ala dark mode ini banyak digunakan oleh brand-brand terkemuka, seperti Apple, Mercedes Benz, dan lainnya. Penggunaan warna gelap membuat para desainer lebih bebas mengkreasikan elemen-elemen dalam website agar terlihat lebih menonjol.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
