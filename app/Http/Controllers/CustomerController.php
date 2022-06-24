<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $data = array('title' => 'Customer');
        return view('customer.index', $data);
    }

    public function about() {
        $data = array('title' => 'About Us');
        return view('customer.about', $data);
    }
    public function testimonials() {
        $data = array('title' => 'Testimonial');
        return view('customer.testimonials', $data);
    }
    public function customermerk() {
        $data = array('title' => 'merk');
        return view('customer.merkcustomer', $data);
    }
    public function DataCar() {
        $data = array('title' => 'car');
        return view('customer.datacar', $data);
    }

}
