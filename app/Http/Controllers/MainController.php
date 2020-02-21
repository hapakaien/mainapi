<?php

namespace App\Http\Controllers;

use App\LicensePlate;
use App\Http\Resources\LicensePlates as LicensePlatesCollection;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // parent::__construct();
    }

    /**
     * Get filtered license plate list
     *
     * @param Request $request
     * @return void
     */
    public function licensePlate(Request $request)
    {
        $data = LicensePlate::with(['regencies.province.island'])->when($request->filled('license_plate'), function ($query) use ($request) {
            if ( ! is_array($request->license_plate)) {
                $request->merge(['license_plate' => [$request->license_plate]]);
            }
            $query->whereIn('name', $request->license_plate);
        })->get();
        return new LicensePlatesCollection($data);
    }
}
