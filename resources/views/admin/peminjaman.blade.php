@extends('main-admin')
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
                        Aksi
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
                            @if ($borrowing->status == 'Menunggu Persetujuan')
                                <div class="flex items-center space-x-5">
                                    <div>
                                        <form action="{{ route('approve.borrowing', $borrowing->id) }}" method="post">
                                            @csrf
                                            <button
                                                class="bg-[#FF8A00] px-6 py-3 rounded-xl text-white font-semibold">Terima</button>
                                        </form>
                                    </div>
                                    <div>
                                        <form action="{{ route('reject.borrowing', $borrowing->id) }}" method="post">
                                            @csrf
                                            <button
                                                class="bg-[#C11010] px-6 py-3 rounded-xl text-white font-semibold">Tolak</button>
                                        </form>
                                    </div>
                                </div>
                            @elseif ($borrowing->status == 'Disetujui')
                                <div class="flex items-center">
                                    <div>
                                        <button class="bg-green-600 px-6 py-3 rounded-xl text-white font-semibold"
                                            disabled>Disetujui</button>
                                    </div>
                                </div>
                            @elseif ($borrowing->status == 'Ditolak')
                                <div class="flex items-center">
                                    <div>
                                        <button class="bg-[#C11010] px-6 py-3 rounded-xl text-white font-semibold"
                                            disabled>Ditolak</button>
                                    </div>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
