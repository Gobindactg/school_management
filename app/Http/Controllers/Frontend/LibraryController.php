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
    public function manage_books() {
        return view('Frontend.pages.library.manageBooks');
        
    }
    public function manage_category() {
        return view('Frontend.pages.library.manageCategory');
        
    }
    public function issue_book() {
        return view('Frontend.pages.library.issueBook');
    }
    public function manage_issued_books() {
        return view('Frontend.pages.library.manageIssuedBooks');
    }
    public function create_library_card() {
        return view('Frontend.pages.library.createLibraryCard');
    }
    public function manage_library_card() {
        return view('Frontend.pages.library.manageLibraryCard');
    }
// <<<<<<< HEAD
// }
// =======
}
// >>>>>>> gobinda
