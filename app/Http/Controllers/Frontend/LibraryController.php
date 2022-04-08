<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index() {
        return view('Frontend.pages.library.index');
    }
    public function add_book() {
        return view('Frontend.pages.library.addBooks');
        
    }
    public function add_category() {
        return view('Frontend.pages.library.addCategory');
        
    }
    public function manage_borrowed_books() {
        return view('Frontend.pages.library.manageBorrowedBooks');
    }
    public function create_library_card() {
        return view('Frontend.pages.library.createLibraryCard');
    }
    public function manage_library_card() {
        return view('Frontend.pages.library.manageLibraryCard');
    }
}