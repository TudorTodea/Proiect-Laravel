<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\book_issue;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        return view('report.index');
    }

   

    public function not_returned()
    {
        return view('report.notReturned',[
            'books' => book_issue::latest()->get()
        ]);
    }
}
