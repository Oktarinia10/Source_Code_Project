<x-layouts.test title="Aplikasi Tes Psikologi Terbaik">

    {{-- Soal --}}
    <section class="">
        <div class="space-y-8">
            <div class="flex flex-col gap-8 lg:flex-row">
                <div class="w-full h-fit p-8 space-y-4 rounded-3xl bg-light-100">
                    <div class="py-3">
                        <a class="text-3xl text-base-800 font-bold font-display">Latihan Soal</a>
                        <div class="py-3">
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="py-3">
                            <ul class="flex flex-wrap ">
                                <li class="gap-3 py-2 mx-2">
                                    <x-atoms.button size="default" status="outline" class="w-[316px] h-[46px] lg:w-auto lg:mx-auto">
                                        <i class="bi bi-arrow-right-circle-fill"></i> Placeholder 1
                                    </x-atoms.button>
                                </li>
                                <li class="gap-3 py-2 mx-2">
                                    <x-atoms.button size="default" status="outline" class="w-[316px] h-[46px] lg:w-auto lg:mx-auto">
                                        <i class="bi bi-arrow-right-circle-fill"></i> Placeholder 2
                                    </x-atoms.button>
                                </li>
                                <li class="gap-3 py-2 mx-2">
                                    <x-atoms.button size="default" status="outline" class="w-[316px] h-[46px] lg:w-auto lg:mx-auto">
                                        <i class="bi bi-arrow-right-circle-fill"></i> Placeholder 3
                                    </x-atoms.button>
                                </li>
                                <li class="gap-3 py-2 mx-2">
                                    <x-atoms.button size="default" status="outline" class="w-[316px] h-[46px] lg:w-auto lg:mx-auto">
                                        <i class="bi bi-arrow-right-circle-fill"></i> Placeholder 4
                                    </x-atoms.button>
                                </li>
                                <li class="gap-3 py-2 mx-2">
                                    <x-atoms.button size="default" status="outline" class="w-[316px] h-[46px] lg:w-auto lg:mx-auto">
                                        <i class="bi bi-arrow-right-circle-fill"></i> Placeholder 5
                                    </x-atoms.button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Pagination --}}
                <div class="flex-warp py-5 lg:w-[500px] h-[384px] rounded-3xl bg-light-100">
                    <div class="container">
                        <a class="text-base-800 font-semibold py-3 mx-2">Nomor Soal</a>
                    <div class="py-2">
                        <ul class="flex flex-wrap">
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">1</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">2</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">3</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">4</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">5</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">6</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">7</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">8</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">9</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">10</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">11</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">12</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="solid" class="mx-auto text-base-800 font-normal text-2xs">13</x-atoms.numberbutton></li>
                            <li class="gap-3 py-2 mx-2"><x-atoms.numberbutton size="default" status="outline" class="mx-auto text-base-800 font-normal">
                                <i class="far fa-clipboard"></i></x-atoms.numberbutton></li>
                    </div>
                    <div class="py-2">
                        <p class="text-base-900 font-semibold py-3 mx-2">Keterangan</p>
                        <div class="flex flex-wrap py-1">
                            <a class="w-[15px] h-[15px] rounded text-sm py-[5px] px-[6px] bg-info mx-2"></a>
                            <p class="py-[1px] text-base-800 font-normal text-2xs">Soal Saat Ini</p>
                        </div>
                        <div class="flex flex-wrap py-1">
                            <a class="w-[15px] h-[15px] rounded text-sm py-[5px] px-[6px] bg-success mx-2"></a>
                            <p class="py-[1px] text-base-800 font-normal text-2xs">Sudah Diisi</p>
                        </div>
                        <div class="flex flex-wrap py-1">
                            <a class="w-[15px] h-[15px] rounded text-sm py-[5px] px-[6px] bg-light-200 mx-2"></a>
                            <p class="py-[1px] text-base-800 font-normal text-2xs">Belum Diisi</p>
                        </div>
                        <div class="flex flex-wrap py-1">
                            <a class="w-[15px] h-[15px] rounded text-sm py-[5px] px-[6px] border border-solid bg-light-100 border-success mx-2"></a>
                            <p class="py-[1px] text-base-800 font-normal text-2xs">Akhir Soal</p>
                        </div>
                    </div>

                    </div>
                    
                </div>
        </div>
        <div class="flex flex-row justify-end items-center gap-5">
            <!-- Modal Button -->
            <i class="Modal fab fa-flipboard"><button data-bs-toggle="modal" data-bs-target="#modal_soal"></button></i>
            <x-atoms.button class="lg:w-auto w-full">Selanjutnya</x-atoms.button>
        </div>
        <x-atoms.modalsoal></x-atoms.modalsoal>
    </section>
</x-layouts.test>
<script>
    document.addEventListener('livewire:load', function() {
        // Your JS here.
        console.log("ngetes js jalan");

        function showModal(params) {
            document.getElementById("modal_soal").style.display = "show";
        }
        var nomorsoal = document.getElementsByClassName("Modal");
        nomorsoal[0].addEventListener("click", showModal);
          
    })
</script>
