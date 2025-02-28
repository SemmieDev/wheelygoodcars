<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class OfferController extends Controller {
    public function show(): View {
        return view("place_offer");
    }

    public function submit(Request $request) {
        return response($request, 200)->header("Content-Type", "text/html");
    }
}
