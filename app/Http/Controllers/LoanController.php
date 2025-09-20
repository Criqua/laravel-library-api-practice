<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use App\Http\Resources\LoanResource;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Loan::query();

        if ($s = $request->query('search')){
            $query->where('fecha_prestamo', 'like', "%$s%")
                  ->orWhere('fecha_devolucion_esperada', 'like', "%$s%")
                  ->orWhere('estado', 'like', "%$s%");
        }

        return LoanResource::collection($query->orderBy('prestamo_id', 'desc')->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
