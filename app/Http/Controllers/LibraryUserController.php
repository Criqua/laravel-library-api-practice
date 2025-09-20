<?php

namespace App\Http\Controllers;

use App\Models\LibraryUser;
use Illuminate\Http\Request;
use App\Http\Resources\LibraryUserResource;

class LibraryUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = LibraryUser::query();

        if ($s = $request->query('search')){
            $query->where('nombre', 'like', "%$s%")
                  ->orWhere('email', 'like', "%$s%")
                  ->orWhere('tipo', 'like', "%$s%");
        }

        return LibraryUserResource::collection($query->orderBy('usuario_id', 'desc')->paginate(5));
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
    public function show(LibraryUser $libraryUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LibraryUser $libraryUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LibraryUser $libraryUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LibraryUser $libraryUser)
    {
        //
    }
}
