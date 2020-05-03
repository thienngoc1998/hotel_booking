<?php

namespace App\Http\Controllers\Backend\Book;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index()
    {
        return view('Backend.booking.index')->withBooks(Book::orderBy('id','desc')->paginate(5));
    }

    public function changeStatus($id)
    {
        Book::find($id)->update([
           'status' => true
        ]);
        return redirect()->route('admin.booking')->withFlashSuccess(__('alert.change-status'));
    }

    public function destroy($id)
    {
        Book::find($id)->delete();
        return redirect()->route('admin.booking')->withFlashSuccess(__('alert.deleted'));
    }
}
