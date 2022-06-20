<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function testimonialsForm()
    {
        $data = array('title' => 'testimonialsForm');
        return view('customer.testimonialsForm', $data);
    }

    public function storeTestimonialForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'car_name' => 'required',
            'review' => 'required',
        ]);

        $input = $request->all();

        Testimonials::create($input);

        return redirect()->back()->with(['success' => 'Testimonials Submit Successfully']);
    }
}
