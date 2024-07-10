@extends('main')
@section('content')
    <div class="bg-[#B7B0B0B2] px-20 py-10 my-6 rounded-xl">
        <div>
            <h3 class="text-center text-3xl font-semibold">Formulir Peminjaman Ruangan</h3>
        </div>
        <form action="{{ route('peminjaman.store') }}" method="POST">
            <div class="flex flex-col space-y-4 my-5">
                @csrf
                <div class="flex items-center space-x-4">
                    <div class="flex flex-col space-y-2 w-1/2">
                        <span class="text-lg font-medium">Nama Ruangan</span>
                        <input type="text" name="nama_ruangan"
                            class="p-5 rounded-xl border-none bg-white placeholder:text-[#524A4A] placeholder:text-lg focus:outline-none"
                            id="nama_ruangan" value="{{ $room->nama_ruangan }}" disabled>
                    </div>
                    <div class="flex flex-col space-y-2 w-1/2">
                        <span class="text-lg font-medium">Tanggal</span>
                        <input type="date" name="tanggal"
                            class="p-5 rounded-xl border-none bg-white placeholder:text-[#524A4A] placeholder:text-lg focus:outline-none"
                            id="tanggal" value="{{ $room->tanggal }}" disabled>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex flex-col space-y-2 w-full">
                        <span class="text-lg font-medium">Jam Mulai</span>
                        <input type="time" name="mulai"
                            class="p-5 rounded-xl border-none bg-white placeholder:text-[#524A4A] placeholder:text-lg focus:outline-none"
                            id="mulai" value="{{ $room->mulai }}" disabled>
                    </div>
                    <div class="flex flex-col space-y-2 w-full">
                        <span class="text-lg font-medium">Jam Selesai</span>
                        <input type="time" name="selesai"
                            class="p-5 rounded-xl border-none bg-white placeholder:text-[#524A4A] placeholder:text-lg focus:outline-none"
                            id="selesai" value="{{ $room->selesai }}" disabled>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <span class="text-lg font-medium">Dosen Pengampu</span>
                    <input type="text" name="dosen_pengampu"
                        class="p-5 rounded-xl border-none bg-white placeholder:text-[#524A4A] placeholder:text-lg focus:outline-none"
                        id="dosen_pengampu" placeholder="Masukkan Nama Dosen Pengampu" required>
                </div>
                <div class="flex flex-col space-y-2">
                    <span class="text-lg font-medium">Keterangan</span>
                    <textarea rows="4" cols="50" name="keterangan"
                        class="p-5 rounded-xl border-none bg-white placeholder:text-[#524A4A] placeholder:text-lg focus:outline-none"
                        id="keterangan" placeholder="Masukkan Keterangan" required></textarea>
                </div>
                <input type="hidden" name="room_id" value="{{ $room->id }}">
            </div>
            <div class="mt-7">
                <button class="w-full bg-[#615555] p-5 text-xl rounded-xl font-semibold hover:opacity-90">Kirim</button>
            </div>
        </form>
    </div>
@endsection
