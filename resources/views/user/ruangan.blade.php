@extends('main')
@section('content')
    <div class="bg-[#B7B0B0B2] p-6 my-20">
        @if (Session::has('success'))
            <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ Session::get('success') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        <div>
            <h3 class="text-center text-3xl font-semibold">Data Ruangan</h3>
        </div>
        <form method="GET" action="{{ route('ruangan.cari') }}">
            <div class="flex items-end space-x-5 my-11">
                @csrf
                <div class="flex flex-col">
                    <span class="text-xl font-semibold" id="tanggal">Tanggal</span>
                    <input type="date" name="tanggal" id="tanggal" required value="{{ request('tanggal') }}"
                        class="mt-2 px-8 py-4 border-none rounded-xl focus:outline-none focus:ring-2 focus:ring-slate-100">
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-semibold" id="mulai">Jam Mulai</span>
                    <input type="time" name="mulai" id="mulai" required value="{{ request('mulai') }}"
                        class="mt-2 px-8 py-4 border-none rounded-xl outline-none focus:outline-none focus:ring-2 focus:ring-slate-100">
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-semibold" id="selesai">Jam Selesai</span>
                    <input type="time" name="selesai" id="selesai" required value="{{ request('selesai') }}"
                        class="mt-2 px-8 py-4 border-none rounded-xl focus:outline-none focus:ring-2 focus:ring-slate-100">
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-semibold" id="lantai">Lantai</span>
                    <input type="number" name="lantai" id="lantai" required value="{{ request('lantai') }}"
                        class="mt-2 px-8 py-4 border-none rounded-xl focus:outline-none focus:ring-2 focus:ring-slate-100">
                </div>
                <div class="flex flex-col">
                    <button type="submit"
                        class="bg-[#474CBB] px-8 py-4 rounded-xl font-bold text-white tracking-wide text-xl">Cari</button>
                </div>
            </div>
        </form>

        @if (isset($rooms))
            <div id="search-results" class="mt-8 px-5">
                <h2 class="text-xl font-semibold text-gray-900">Hasil Pencarian untuk Lantai {{ request('lantai') }}</h2>
                <div class="grid grid-cols-5 gap-4 mt-4">
                    @foreach ($rooms as $room)
                        <div class="card bg-white shadow-md rounded-lg p-4">
                            <div class="card-body">
                                <h5 class="card-title text-lg font-medium text-gray-900">{{ $room->nama_ruangan }}</h5>
                                <p>{{ $room->mulai }} - {{ $room->selesai }}</p>
                                @if ($room->status == 'Tersedia')
                                    <a href="/peminjaman/{{ $room->id }}"
                                        class="inline-block mt-2 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Pesan
                                        Ruangan</a>
                                @else
                                    <button
                                        class="inline-block mt-2 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-600 cursor-not-allowed"
                                        disabled>Tidak Tersedia</button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @if (!isset($rooms) || $rooms->isEmpty())
            <div id="alert-2"
                class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    Tidak ada ruangan yang tersedia dengan kriteria yang dipilih.
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
    </div>
@endsection
