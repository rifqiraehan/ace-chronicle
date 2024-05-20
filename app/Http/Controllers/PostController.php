<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' di ' . ($category ? $category->name : 'Kategori Tidak Ditemukan');
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' dari ' . ($author ? $author->name : 'Author Tidak Ditemukan');
        }

        $page = request('page', 1); // Ambil halaman saat ini
        session(['page' => $page]); // Simpan halaman saat ini ke sesi

        return view('posts', [
            "title" => "Semua Postingan" . $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        $page = session('page', 1); // Ambil halaman dari sesi atau default ke 1

        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post,
            "page" => $page
        ]);
    }
}