<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use Illuminate\Http\Request;

class AdminPeminjamanController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with(['user', 'room'])->get();
        return view('admin.peminjaman', [
            'borrowings' => $borrowings
        ]);
    }

    public function approveBorrowing(Request $request, $borrowingId)
    {
        $borrowing = Borrowing::findOrFail($borrowingId);
        $borrowing->status = 'Disetujui';
        $borrowing->save();
        return back()->with('success', 'Peminjaman disetujui!');
    }

    public function rejectBorrowing(Request $request, $borrowingId)
    {
        $borrowing = Borrowing::findOrFail($borrowingId);
        $borrowing->status = 'Ditolak';
        $borrowing->save();
        return back()->with('error', 'Peminjaman ditolak!');
    }
}
