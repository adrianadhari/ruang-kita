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
                    <a href="/dashboard"
                        class="{{ Request::is('dashboard') ? 'bg-[#636292] py-4 px-8 rounded-2xl text-white' : 'text-[#625959]' }} text-lg font-bold tracking-wider hover:text-white">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/peminjaman-ruangan"
                        class="{{ Request::is('peminjaman-ruangan') ? 'bg-[#636292] py-4 px-8 rounded-2xl text-white' : 'text-[#625959]' }} text-lg font-bold tracking-wider hover:text-white">
                        Peminjaman Ruangan
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
