<?php

namespace App\Http\Controllers;

use App\Models\Car;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('home')->with('cars', $cars);

    }
    public function myCars()
    {
        $cars = Car::where('user_id', Auth::id())->get();
        return view('my-cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'license_plate' => 'required|unique:cars',
            'make' => 'required',
            'model' => 'required',
            'price' => 'required|numeric',
            'mileage' => 'required|integer',
            'image' => 'nullable|image|max:2048'
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('cars', 'public');
        }

        Car::create([
            'user_id' => Auth::id(),
            'license_plate' => $request->license_plate,
            'make' => $request->make,
            'model' => $request->model,
            'price' => $request->price,
            'mileage' => $request->mileage,
            'seats' => $request->seats,
            'doors' => $request->doors,
            'production_year' => $request->production_year,
            'weight' => $request->weight,
            'color' => $request->color,
            'image' => $imagePath
        ]);
            redirect()->route('cars.my-cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        if ($car->user_id !== Auth::id()) {
            abort(403);
        }

        $car->delete();

        return redirect()->route('cars.my-cars');
    }
}
