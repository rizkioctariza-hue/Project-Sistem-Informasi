<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // 🏠 Beranda
    public function home()
    {
        $news = [
            (object)[
                'title' => 'RRQ Hoshi Juara MPL ID S14!',
                'excerpt' => 'RRQ Hoshi berhasil mengalahkan ONIC Esports dalam final sengit MPL Indonesia Season 14.',
                'thumbnail' => 'https://images.unsplash.com/photo-1606112219348-204d7d8b94ee?auto=format&fit=crop&w=800&q=80',
                'slug' => 'rrq-hoshi-juara-mpl-id-s14',
                'author' => 'Admin'
            ],
            (object)[
                'title' => 'Alter Ego Kembali ke Puncak!',
                'excerpt' => 'Alter Ego tampil luar biasa dan mengamankan posisi pertama dalam klasemen minggu ini.',
                'thumbnail' => 'https://images.unsplash.com/photo-1581091870630-fd1ca04f0952?auto=format&fit=crop&w=800&q=80',
                'slug' => 'alter-ego-kembali-ke-puncak',
                'author' => 'Admin'
            ],
            (object)[
                'title' => 'Bigetron Red Villains di PMGC!',
                'excerpt' => 'Bigetron Red Villains menunjukkan performa luar biasa di PUBG Mobile Global Championship.',
                'thumbnail' => 'https://images.unsplash.com/photo-1593642632559-0c2d4e3a1e4d?auto=format&fit=crop&w=800&q=80',
                'slug' => 'bigetron-red-villains-di-pmgc',
                'author' => 'Admin'
            ],
        ];

        return view('home', compact('news'));
    }

    // 🏆 Halaman Turnamen
    public function turnamen()
    {
        return view('turnamen');
    }

    // 👥 Halaman Tim
    public function tim()
    {
        return view('tim');
    }

    // 🧠 Halaman Tentang
    public function tentang()
    {
        return view('tentang');
    }

    // 💌 Halaman Kontak
    public function kontak()
    {
        return view('kontak');
    }

    // 📰 (Opsional) Halaman Detail Berita
    public function showNews($slug)
    {
        $news = [
            'rrq-hoshi-juara-mpl-id-s14' => [
                'title' => 'RRQ Hoshi Juara MPL ID S14!',
                'content' => 'RRQ Hoshi tampil dominan dan berhasil menumbangkan ONIC Esports di final MPL ID Season 14 dengan skor 4-2.',
                'image' => 'https://images.unsplash.com/photo-1606112219348-204d7d8b94ee?auto=format&fit=crop&w=800&q=80'
            ],
            'alter-ego-kembali-ke-puncak' => [
                'title' => 'Alter Ego Kembali ke Puncak!',
                'content' => 'Alter Ego menunjukkan performa konsisten dan kini memimpin klasemen dengan selisih poin tipis dari RRQ.',
                'image' => 'https://images.unsplash.com/photo-1581091870630-fd1ca04f0952?auto=format&fit=crop&w=800&q=80'
            ],
            'bigetron-red-villains-di-pmgc' => [
                'title' => 'Bigetron Red Villains di PMGC!',
                'content' => 'Bigetron Red Villains berhasil masuk ke babak final PMGC setelah melewati babak penyisihan dengan hasil memukau.',
                'image' => 'https://images.unsplash.com/photo-1593642632559-0c2d4e3a1e4d?auto=format&fit=crop&w=800&q=80'
            ],
        ];

        if (!isset($news[$slug])) {
            abort(404);
        }

        return view('news-detail', ['item' => (object)$news[$slug]]);
    }
}
