<?php

namespace App\Http\Controllers;

use App\Models\Wedo;
use App\Models\Event;
use App\Models\Partner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function pagesController()
    {
        $Event = Event::all();
        $Partner = Partner::all();
        $Wedo = Wedo::all();
        return view('pages', compact('Event','Partner','Wedo'));
    }
}
