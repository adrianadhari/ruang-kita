<nav class="sticky top-0 z-50 bg-[#A49494] h-28 flex items-center">
    <div class="container mx-auto flex justify-center items-center">
        <div>
            <ul class="hidden lg:flex items-center gap-x-20">
                <li>
                    <a href="/">
                        <img src="/assets/images/logo.svg" alt="Logo">
                    </a>
                </li>
                <li>
                    <a href="/"
                        class="{{ Request::is('/') ? 'bg-[#636292] py-4 px-8 rounded-2xl text-white' : 'text-[#625959]' }} text-lg font-bold tracking-wider hover:text-white">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="/ruangan"
                        class="{{ Request::is('ruangan') ? 'bg-[#636292] py-4 px-8 rounded-2xl text-white' : 'text-[#625959]' }} text-lg font-bold tracking-wider hover:text-white">
                        Data Ruangan
                    </a>
                </li>
                <li>
                    <a href="/riwayat"
                        class="{{ Request::is('riwayat') ? 'bg-[#636292] py-4 px-8 rounded-2xl text-white' : 'text-[#625959]' }} text-lg font-bold tracking-wider hover:text-white">
                        Riwayat Peminjaman
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="p-5 bg-[#D64343] text-white font-bold rounded-2xl text-lg py-4 px-8 hover:opacity-80"
                            type="submit">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
