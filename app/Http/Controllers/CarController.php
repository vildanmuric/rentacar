<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;


class CarController extends Controller
{
    public function getSearchPage(Request $request)
    {
        $query = Car::query();

        if ($request->filled('manufacturer')) {
            $manufacturer = $request->manufacturer;
            $query->where('manufacturer', '=', $manufacturer);
        }

        if ($request->filled('model')) {
            $model = $request->model;
            $query->where('model', '=', $model);
        }

        // Check if any transmission option is selected
        if ($request->filled('automatic') || $request->filled('manual')) {
            $transmissions = [];
            if ($request->filled('automatic')) {
                $transmissions[] = $request->automatic;
            }
            if ($request->filled('manual')) {
                $transmissions[] = $request->manual;
            }
            $query->whereIn('transmission', $transmissions);
        }

        if ($request->filled('fuel')) {
            $fuel = $request->fuel;
            $query->where('fuel', '=', $fuel);
        }

        if ($request->filled('year')) {
            $year = $request->year;
            $query->where('year', '=', $year);
        }

        if ($request->filled('from') && $request->filled('until')) {
            $from = Carbon::parse($request->from)->format('Y-m-d');
            $until = Carbon::parse($request->until)->format('Y-m-d');
            $query->where(function ($q) use ($from, $until) {
                $q->where(function ($q) use ($from, $until) {
                    $q->whereDate('from', '<=', $from)->whereDate('until', '>=', $until);
                });
            });
        }

        $cars = $query->get();

        if ($cars->isEmpty()) {
            $query->where('id', '=', null); // Add a condition that will not match any car
            $cars = $query->get();
        }

        return view('searchPage', compact('cars'));
    }

    public function getDescription($id)
    {
        $car = Car::findOrFail($id);

        return view('description', compact('car'));
    }

    public function delete($id){
        $car = Car::findOrFail($id);
        $car -> delete();

        return view('message');
    }



}
