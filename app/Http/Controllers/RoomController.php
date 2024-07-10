<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{


    public function index(Request $request)
    {
        $tanggal = $request->input('tanggal');
        $mulai = $request->input('mulai');
        $selesai = $request->input('selesai');
        $lantai = $request->input('lantai');

        $rooms = Room::where('tanggal', $tanggal)
            ->where('lantai', $lantai)
            ->where(function ($query) use ($mulai, $selesai) {
                if ($mulai && $selesai) {
                    $query->where('mulai', '<=', $selesai)
                        ->where('selesai', '>=', $mulai);
                }
            })
            ->get();

        return view('user.ruangan', compact('rooms'));
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
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
