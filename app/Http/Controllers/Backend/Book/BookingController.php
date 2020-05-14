<?php

namespace App\Http\Controllers\Backend\Book;

use App\Models\Book;
use App\Models\Room;
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
        $book = Book::find($id);
        $room = Room::find($book->id_room);
        $book->delete();
        $room->update([
            'number' => $room->number + 1
        ]);
        return redirect()->route('admin.booking')->withFlashSuccess(__('alert.deleted'));
    }
}
