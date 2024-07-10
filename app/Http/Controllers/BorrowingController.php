<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Room;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowingController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $borrowings = Borrowing::where('user_id', $user_id)->with(['user', 'room'])->get();
        return view('user.riwayat', [
            'borrowings' => $borrowings
        ]);
    }
    public function create($id)
    {
        $room = Room::where('id', $id)->first();
        return view('user.peminjaman', [
            'room' => $room
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $peminjaman = new Borrowing();
        $peminjaman->room_id = $request->room_id;
        $peminjaman->user_id = Auth::user()->id;
        $peminjaman->dosen_pengampu = $request->dosen_pengampu;
        $peminjaman->keterangan = $request->keterangan;
        $peminjaman->status = 'Menunggu Persetujuan';
        $peminjaman->save();

        $room = Room::where('id', $request->room_id)->first();
        $room->status = 'Tidak Tersedia';
        $room->save();

        return redirect()->route('ruangan.cari')->with('success', 'Permohonan peminjaman ruangan berhasil dikirim.');
    }
}
