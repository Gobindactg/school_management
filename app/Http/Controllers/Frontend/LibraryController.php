<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\LibraryBookCategory;
use App\Models\LibraryBooks;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LibraryController extends Controller
{
    public function index()
    {
        return view('Frontend.pages.library.index');
    }
    public function add_book()
    {
        $user_id = Auth::id();
        $user = User::find($user_id);

        $LibraryBookCategory = LibraryBookCategory::where("institution_id", $user->institution_id)->get();
        return view('Frontend.pages.library.addBooks')->with('categories', $LibraryBookCategory);
    }
    public function manage_books()
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        $LibraryBooks = LibraryBooks::where("institution_id", $user->institution_id)->get();

        return view('Frontend.pages.library.manageBooks')->with('books', $LibraryBooks);
    }
    public function manage_category()
    {

        $user_id = Auth::id();
        $user = User::find($user_id);

        $LibraryBookCategory = LibraryBookCategory::where("institution_id", $user->institution_id)->get();

        return view('Frontend.pages.library.manageCategory')->with('categories', $LibraryBookCategory);
    }
    public function issue_book()
    {
        return view('Frontend.pages.library.issueBook');
    }
    public function manage_issued_books()
    {
        return view('Frontend.pages.library.manageIssuedBooks');
    }
    public function create_library_card()
    {
        return view('Frontend.pages.library.createLibraryCard');
    }
    public function manage_library_card()
    {
        return view('Frontend.pages.library.manageLibraryCard');
    }


    // library asset crud functions
    public function store_book(Request $request) {
        $request->validate([
            "book_name"=>"required",
            "book_author"=>"required",
            "book_quantity"=>"required",
            "book_category"=>"required",
        ]);

        $user_id = Auth::id();
        $user = User::find($user_id);

        $newBook = new LibraryBooks;

        $newBook->institution_id = $user->institution_id;
        $newBook->book_name = $request->book_name;
        $newBook->author = $request->book_author;
        $newBook->quantity = $request->book_quantity;
        $newBook->category_id = $request->book_category;

        $newBook->save();

        session()->flash('success', 'Successfully Added New Book');

        return redirect()->back();
    }


    public function store_category(Request $request)
    {
        $request->validate([
            "category_name" => "required",
            "category_slug" => "required|unique:library_book_categories,category_slug",
        ]);

        $user_id = Auth::id();
        $user = User::find($user_id);



        $LibraryBookCategory = new LibraryBookCategory;

        $LibraryBookCategory->institution_id = $user->institution_id;
        $LibraryBookCategory->category = $request->category_name;
        $LibraryBookCategory->category_slug = $request->category_slug;

        $LibraryBookCategory->save();

        session()->flash('success', 'Successfully Added New Category');

        return redirect()->back();
    }

    public function delete_category(Request $request)
    {
        $request->validate([
            "id" => "required"
        ]);

        LibraryBookCategory::find($request->id)->delete();

        return "Successfully Deleted The Category!";
    }
}
