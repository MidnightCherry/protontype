<?php

namespace App\Http\Controllers;
use App\Models\Slider;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function showSliders()
{
    $sliders = Slider::all(); // Assuming you have an Eloquent model named Slider

    return view('slider', compact('sliders'));
}

}
