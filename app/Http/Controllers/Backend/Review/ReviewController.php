<?php

namespace App\Http\Controllers\Backend\Review;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{

    public function index()
    {
        $reviews = Review::where('active',true)->orderBy('id','desc')->paginate(5);
        return view('Backend.review.index')->withReviews($reviews);
    }

    public function blockReview($id)
    {
        Review::find($id)->update([
            'active' => false
        ]);
        return redirect()->back()->withFlashSuccess(__('alert.deleted'));
    }
}
