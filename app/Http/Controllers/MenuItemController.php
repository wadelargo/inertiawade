<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Inertia\Inertia;

class MenuItemController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::orderBy('created_at', 'desc')->get();

        return Inertia::render('Menu', [
            'menuItems' => $menuItems
        ]);
    }
}
