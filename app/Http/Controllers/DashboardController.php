<?php

namespace App\Http\Controllers;

use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $postByUser = $user->posts->count();

        // Group posts by category ID and count them
        $postByUserByCategory = $user->posts->groupBy('category_id')->map(function ($item) {
            return $item->count();
        });

        // Get category names
        $categoryNames = Category::whereIn('id', $postByUserByCategory->keys())->pluck('name', 'id');

        // Replace category IDs with category names
        $postByUserByCategoryWithName = $postByUserByCategory->mapWithKeys(function ($count, $category_id) use ($categoryNames) {
            $categoryName = $categoryNames[$category_id] ?? 'Uncategorized';
            return [$categoryName => $count];
        });

        return view('dashboard.index', compact('postByUser', 'postByUserByCategoryWithName'));
    }
}
