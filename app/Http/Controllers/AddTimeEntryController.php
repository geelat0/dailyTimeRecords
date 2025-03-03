<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddTimeEntryController extends Controller
{
    public function index()
        {
            return view('time_entry.add_time_entry');
        }

}
