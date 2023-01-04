<navbar class="fixed z-20 w-full bg-light-100" x-cloak x-data="{ navmenu: false }">
    <div class="container mx-auto gap-[32px] px-2 lg:flex lg:items-center lg:justify-between">
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
            <div class="absolute py-4 bg-light-100 rounded-lg max-w-[150px] w-full right-7 top-full
        lg:static lg:max-w-full lg:shadow-none lg:rounded-none">
                <div class=" lg:items-center">
                    <ul class="lg:flex ">
                        <li><a class="flex py-2 mx-6 transition-all lg:py-3 text-base-800 font-bold hover:underline hover:decoration-primary-500 hover:underline-offset-2"
                                href="#">Layanan</a></li>
                        <li><a class="flex py-2 mx-6 transition-all lg:py-3 text-base-800 font-bold hover:underline hover:decoration-primary-500 hover:underline-offset-2"
                                href="#">Kegiatan</a></li>
                        <li><a class="flex py-2 mx-6 transition-all lg:py-3 text-base-800 font-bold hover:underline hover:decoration-primary-500 hover:underline-offset-2"
                                href="#">Artikel</a></li>
                        <li><a class="flex py-2 mx-6 transition-all lg:py-3 text-base-800 font-bold hover:underline hover:decoration-primary-500 hover:underline-offset-2"
                                href="#">Tentang</a></li>
                        <li><a class="flex py-2 mx-[10px] my-1 bg-light-200 hover:bg-primary-500 text-dark-100 h-[2.25rem] w-[2.25rem] rounded-full justify-center items-center"> 
                            <i class="far fa-moon w-[18px] h-[18px]"></i></a>
                        </li>
                        <li><a class="flex py-2 mx-[10px] my-1 bg-light-200 hover:bg-primary-500 text-dark-100 h-[2.25rem] w-[2.25rem] rounded-full justify-center items-center"> 
                            <i class="far fa-message w-[18px] h-[18px]"></i></a>
                        </li>
                        <li><a class="flex py-2 mx-[10px] my-1 bg-light-200 hover:bg-primary-500 text-dark-100 h-[2.25rem] w-[2.25rem] rounded-full justify-center items-center"> 
                            <i class="fas fa-bag-shopping w-[18px] h-[18px]"></i></a>
                        </li>
                        <li><a class="flex py-2 mx-[10px] my-1 bg-light-200 text-dark-100 h-[2.25rem] w-[2.25rem] rounded-full justify-center items-center"> 
                            <img src="{{ asset('img/global/tono.webp') }}" alt="profile"></a>
                        </li>
                        <li><a class="flex py-2 mx-[10px] lg:py-3 text-dark-100">
                            John Doe</a></li>
                        <li><a class="flex py-2 mx-[10px] my-1"> 
                            <i class="fas fa-chevron-down w-[18px] h-[18px]"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</navbar>