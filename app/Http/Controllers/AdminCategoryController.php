<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'categories' => Category::where('id', '!=', 1)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'category' => new Category()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
            'image' => 'image|file|max:5120'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('category-images');
        }

        Category::create($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'image|file|max:5120'
        ];

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('category-images');
        }

        Category::where('id', $category->id)
            ->update($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Kategori berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->image) {
            Storage::delete($category->image);
        }

        Category::destroy($category->id);

        $category->posts()->update(['category_id' => 1]);

        return redirect('/dashboard/categories')->with('success', 'Kategori berhasil dihapus!');
    }

    /**
     * Check if the slug is available.
     */
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);

        return response()->json(['slug' => $slug]);
    }
}
