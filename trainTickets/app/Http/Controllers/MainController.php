<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\Train;
use App\Models\Route;
use App\Models\User;
use Illuminate\Http\Request;
use function React\Promise\all;

class MainController extends Controller
{

//    public function home(){
//        $authors = Author::all();
//        $countries = Country::all();
//        $books = Book::all();
//        $genres = Genre::all();
//        return view('home', ['authors' => $authors, 'countries' => $countries, 'books' => $books, 'genres' => $genres]);
//    }

    public function home()
    {
        $r = Route::all();
        $stations = Station::all();
        $train = Train::all();
        return view('welcome', ['routes' => $r, 'stat' => $stations, 'tr' => $train]);
    }

    public function tickets()
    {
        $usr = User::all();
        return view('order', ['users' => $usr,]);
    }

    public function allStations()
    {
        return view('allStations', ['stations' => Station::all(),]);
    }

    public function allRoutes()
    {
        return view('allRoutes', ['routes' => Route::all(),]);
    }

    public function allTrains()
    {
        return view('allTrains', ['trains' => Train::all(),]);
    }

    public function ticketss(Request $request)
    {
        $routes = Route::where('time_leave', $request->input('datee'));
//        return view('order', ['routes'=>$routes]);
        return view('order');
    }

    public function base()
    {
        return view('gallery');
    }

    public function admin()
    {
        return view('admin');
    }

    public function addTrainGET()
    {
        return view('train');
    }

    public function addTrain(Request $request)
    {
        Train::create([
            'name' => $request->input('name'),
            'number' => $request->input('number'),
            'places' => $request->input('places')
        ]);

        return redirect()
            ->route('addTrain')
            ->with('success', 'Train successfully added [' . $request->input('name') . ']');
    }


    public function addRouteGET()
    {
        $tr = Train::all();
        $st = Station::all();
        return view('route', ['train' => $tr, 'stations' => $st]);
    }

    public function addRoute(Request $request)
    {
        Route::create([
            'time_travelled' => $request->input('timetravel'),
            'time_leave' => $request->input('timeleave'),
            'train_id' => $request->input('train_id'),
            'from' => $request->input('from'),
            'to' => $request->input('to')
        ]);

        return redirect()
            ->route('addRoute')
            ->with('success', 'Route added successfully [' . Train::all()->get($request->input('train_id'))->name . ']');
    }

    public function addStationGET()
    {
        return view('station');
    }

    public function addStation(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2'
        ]);
        $request->input(['name']);
        if (strlen($request->only(['name'])) < 2) {
            return redirect()->back()->with('name_not', 'Incorrect Name, Please fill it up!');
        }
//        dd($request);
        Station::create([
            'name' => $request->input('name')
        ]);

        return redirect()
            ->route('addStation')
            ->with('success', 'Station successfully added [' . $request->input('name') . ']');
    }


}
