<?php

namespace App\Http\Controllers;

use App\Island;
use App\Province;
use App\Regency;
use App\Http\Resources\Islands as IslandCollection;
use App\Http\Resources\Provinces as ProvinceCollection;
use App\Http\Resources\Regencies as RegencyCollection;
use Illuminate\Http\Request;

class AreaController extends Controller
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
     * Get filtered island list
     *
     * @param Request $request
     * @return void
     */
    public function island(Request $request)
    {
        $data = Island::when($request->filled('island'), function ($query) use ($request) {
            if ( ! is_array($request->island)) {
                $request->merge(['island' => [$request->island]]);
            }
            $query->whereIn('code', $request->island);
        })->with(['provinces.regencies'])->get();
        return new IslandCollection($data);
    }

    /**
     * Get filtered province list
     *
     * @param Request $request
     * @return void
     */
    public function province(Request $request)
    {
        $data = Province::when($request->filled('island'), function ($query) use ($request) {
            if ( ! is_array($request->island)) {
                $request->merge(['island' => [$request->island]]);
            }
            $query->whereHas('island', function ($island) use ($request) {
                $island->whereIn('islands.code', $request->island);
            });
        })->when($request->filled('province'), function ($query) use ($request) {
            if ( ! is_array($request->province)) {
                $request->merge(['province' => [$request->province]]);
            }
            $query->whereIn('code', $request->province);
        })->with(['regencies'])->get();
        return new ProvinceCollection($data);
    }

    /**
     * Get filtered regency list
     *
     * @param Request $request
     * @return void
     */
    public function regency(Request $request)
    {
        $data = Regency::when($request->filled('island'), function ($query) use ($request) {
            if ( ! is_array($request->island)) {
                $request->merge(['island' => [$request->island]]);
            }
            $query->whereHas('province.island', function ($island) use ($request) {
                $island->whereIn('islands.code', $request->island);
            });
        })->when($request->filled('province'), function ($query) use ($request) {
            if ( ! is_array($request->province)) {
                $request->merge(['province' => [$request->province]]);
            }
            $query->whereHas('province', function ($island) use ($request) {
                $island->whereIn('provinces.code', $request->province);
            });
        })->when($request->filled('regency'), function ($query) use ($request) {
            if ( ! is_array($request->regency)) {
                $request->merge(['regency' => [$request->regency]]);
            }
            $query->whereIn('code', $request->regency);
        })->get();
        return new RegencyCollection($data);
    }
}

