@extends('main')
@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
        <table class="w-full text-base text-left text-gray-500">
            <thead class="text-lg text-gray-700 bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID Peminjaman
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Ruangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jam
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Lengkap
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NPM
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Dosen Pengampu
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu Permohonan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($borrowings as $borrowing)
                    <tr class="odd:bg-white  even:bg-gray-50  border-b ">
                        <td class="px-6 py-4">
                            {{ $borrowing->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $borrowing->room->nama_ruangan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $borrowing->room->tanggal }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $borrowing->room->mulai }} - {{ $borrowing->room->selesai }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $borrowing->user->nama_lengkap }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $borrowing->user->npm }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $borrowing->dosen_pengampu }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $borrowing->keterangan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $borrowing->created_at }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $borrowing->status }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
