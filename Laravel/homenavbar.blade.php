<navbar class="fixed z-20 w-full bg-light-100 backdrop-blur bg-opacity-70" x-cloak x-data="{ navmenu: false }">
    <div class="container mx-auto gap-[85px] px-2 lg:flex lg:items-center lg:justify-between">
        <div class="flex justify-between my-4">
            {{-- Kiri --}}
            <div class="mx-6">
                <img src="{{ asset('img/global/mainlogo.webp') }}" alt="Logo Pilih Jurusan">
            </div>
            {{-- Kanan --}}
            <div class="flex">
                <span class="lg:hidden" @click="navmenu = ! navmenu">
                    <i class="fa-solid fa-bars"></i>
                </span>
            </div>
        </div>
        {{-- Tampilan mobile masih menunggu design  --}}
        <div :class="{ 'hidden lg:block': !navmenu }">
            <div
                class="absolute py-4 rounded-lg max-w-[150px] w-full right-7 top-full
        lg:static lg:max-w-full lg:shadow-none lg:rounded-none">
                <div class=" lg:items-center">
                    <ul class="lg:flex">
                        <li><a class="flex py-2 mx-6 text-base transition-all lg:py-3 text-base-600 hover:text-primary-400 hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold"
                                href="#">Beranda</a></li>
                        <li><a class="flex py-2 mx-6 text-base transition-all lg:py-3 text-base-600 hover:text-primary-400 hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold"
                                href="#">Kegiatan</a></li>
                        <li><a class="flex py-2 mx-6 text-base transition-all lg:py-3 text-base-600 hover:text-primary-400 hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold"
                                href="#">Layanan</a></li>
                        <li><a class="flex py-2 mx-6 text-base transition-all lg:py-3 text-base-600 hover:text-primary-400 hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold"
                                href="#">Kemitraan</a></li>
                        <li><a class="flex py-2 mx-6 text-base transition-all lg:py-3 text-base-600 hover:text-primary-400 hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold"
                                href="#">Blog</a></li>
                        <li><a class="flex py-2 mx-6 text-base transition-all lg:py-3 text-base-600 hover:text-primary-400 hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold"
                                href="#">Tentang Kami</a></li>
                        <li class="flex ml-6 transition-all hover:scale-90">
                            <x-atoms.button size="default" status="outline" class="mx-auto text-base">
                                Login
                            </x-atoms.button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</navbar>
