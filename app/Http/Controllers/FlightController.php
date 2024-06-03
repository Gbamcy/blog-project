<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightFormRequest;
use App\Models\Flight;
use Illuminate\Http\Request;
use function PHPUnit\Framework\name;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return view('pages.contact',compact('flights'));
    }
    public function store(FlightFormRequest $request)
    {
//    no validation because i already validated it in form request ( i.e Flight Form Request),also use new validation
//  rules and put flight in array instead of doing Flight = new flight

        $flight = new Flight;
        $flight->name =$request->name;
        $flight->phone =$request->phone;
        $flight->email =$request->email;
        $flight->content =$request->get('content');
        $flight->save();
        return redirect('contact')->with('success','submitted successfully');
    }
}
