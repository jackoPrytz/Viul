<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viul</title>
    <link rel="icon" href="{{ Vite::asset('resources/assets/images/icon-viul.png') }}" type="image/png">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <style>
        @media (max-width: 1024px) {

            /* Adjust this value based on your large breakpoint */
            .whatsapp-icon {
                top: auto !important;
                /* Override any previous top value */
                bottom: 10px !important;
                /* Position it 10px from the bottom */
                width: 192px;
                /* 80% of the original 240px width */
                height: auto;
            }
        }
    </style>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

{{-- <script src="https://cdn.tailwindcss.com"></script> --}}


<body>
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex items-left">
                    <img src="{{ Vite::asset('resources/assets/images/viul-logo.png') }}" class="h-24"
                        alt="Viul Logo" />
                </a>
                <div class="flex items-center lg:order-2">
                    {{-- <a href="{{ route('home') }}"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Whatsapp</a> --}}
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="{{ route('home') }}"
                                class="{{ request()->routeIs('home') ? ' text-white rounded bg-green-700 lg:bg-transparent lg:text-green-700 lg:p-0  lg:text-green-700 lg:p-0 ' : ' text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-700 lg:p-0  ' }} block py-2 pr-4 pl-3 rounded ">
                                Incio
                            </a>
                        </li>
                        
                        <li x-data="{ open: false }">
                            <button class="flex" href="{{ route('productos') }}" @click.prevent="open = !open"
                            >
                            <span class="{{ request()->routeIs('productos') ? 'text-white rounded bg-green-700 lg:bg-transparent lg:text-green-700 lg:p-0' : 'text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-700 lg:p-0' }} block py-2 pr-4 pl-3 rounded">
                                Productos
                                
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5 duration-300"
                                :class="open ? 'rotate-180 text-slate-900' : 'text-slate-600/90 group-hover:text-slate-900'"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            </button>
                            <div x-show="open" @click.away="open = false"
                                class="absolute bg-white shadow-md mt-2 rounded-lg w-48">
                                <ul class="py-1">
                                    <li><a href="{{ route('productos'),}}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ver Todos</a></li>

                                    <li><a href="{{ route('productos'),}}#product-details-1"
                                            class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">KoverTech Roll 
                                            <img src="{{ Vite::asset('resources/assets/images/product-one.png') }}"
                                            alt="Packages page from the app"class="h-6 w-6 ml-6" /></a></li>
                                    <li><a href="{{ route('productos') }}#product-details-2"
                                            class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">KoverTech Flex <image src="{{ Vite::asset('resources/assets/images/product-two.png') }}"
                                            alt="image of vinoflow admin dashboard" class="h-6 w-6 ml-6" />
                                            </a> </li>
                                    <li><a href="{{ route('productos')}}#product-details-3"
                                            class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">KoverPrimer <img src="{{ Vite::asset('resources/assets/images/product-three.png') }}"
                                            alt="Packages page from the app"class="h-6 w-6 ml-6" /></a></li>
                                            <li><a href="{{ route('productos')}}#product-details-4"
                                                class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Maca P Pintura Asfaltica <image src="{{ Vite::asset('resources/assets/images/product-four.png') }}"
                                                alt="image of vinoflow admin dashboard" class="h-6 w-6 ml-6" /></a></li>
                                    <!-- Add more products as needed -->
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('servicios') }}"
                                class="{{ request()->routeIs('servicios') ? ' text-white rounded bg-green-700 lg:bg-transparent lg:text-green-700 lg:p-0  lg:text-green-700 lg:p-0 ' : ' text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-700 lg:p-0  ' }} block py-2 pr-4 pl-3 rounded ">
                                Servicios
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contacto') }}"
                                class="{{ request()->routeIs('contacto') ? ' text-white rounded bg-green-700 lg:bg-transparent lg:text-green-700 lg:p-0  lg:text-green-700 lg:p-0 ' : ' text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-700 lg:p-0  ' }} block py-2 pr-4 pl-3 rounded ">
                                Contacto
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div style="position: fixed; top: 0px; right: 20px; z-index: 1000;" class="whatsapp-icon">
            <a href="https://wa.me/5491166342801" target="_blank">
                <img src="{{ Vite::asset('resources/assets/images/whatsapp-logo.png') }}" alt="WhatsApp"
                    style="width: 240px; height: auto;">
            </a>
        </div>
    </header>

    {{ $slot }}

    <footer class="footer-1 bg-gray-100 py-8 sm:py-12">
        <div class="container mx-auto px-4">
            <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6">
                    <h5 class="text-xl font-bold mb-6">Productos</h5>
                    <ul class="list-none footer-links">
                        <li class="mb-2">
                            <a href="{{ route('productos'),}}#product-details-1"
                                class="border-b border-solid border-transparent hover:border-green-600 hover:text-green-600">KoverTech Roll </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('productos') }}#product-details-2"
                                class="border-b border-solid border-transparent hover:border-green-600 hover:text-green-600">KoverTech Flex</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('productos')}}#product-details-3"
                                class="border-b border-solid border-transparent hover:border-green-600 hover:text-green-600">KoverPrimer</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('productos')}}#product-details-4"
                                class="border-b border-solid border-transparent hover:border-green-600 hover:text-green-600">Maca P Pintura Asfaltica</a>
                        </li>

                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0">
                    <h5 class="text-xl font-bold mb-6">Servicios</h5>
                    <ul class="list-none footer-links">
                        <li class="mb-2">
                            <a href="#"
                                class="border-b border-solid border-transparent hover:border-green-600 hover:text-green-600">Evaluación y Asesoramiento</a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                                class="border-b border-solid border-transparent hover:border-green-600 hover:text-green-600">Preparación y Colocación</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('servicios')}}"
                                class="border-b border-solid border-transparent hover:border-green-600 hover:text-green-600">Revisión y Mantenimiento</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
                    <h5 class="text-xl font-bold mb-6">Contactos</h5>
                    <ul class="list-none footer-links">
                        <li class="mb-2">
                            <a href=https://www.instagram.com/viultech target="_blank"
                                class="border-b border-solid border-transparent hover:border-green-600 hover:text-green-600">Instagram</a>
                        </li>
                        <li class="mb-2">
                            <a href="https://wa.me/5491166342801" target="_blank"
                                class="border-b border-solid border-transparent hover:border-green-600 hover:text-green-600">Whatsapp</a>
                        </li>
                        <li class="mb-2">
                            <a href="mailto:example@example.com" target="_blank"
                                class="border-b border-solid border-transparent hover:border-green-600 hover:text-green-600">Mail</a>
                        </li>

                    </ul>
                </div>

                <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto">
                    <h5 class="text-xl  font-bold mb-6 sm:text-center xl:text-left">Mantente conectado</h5>
                    <div class="flex sm:justify-center xl:justify-start">
                        <a href=""
                            class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 text-gray-600 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href=""
                            class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href=""
                            class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-red-600 hover:border-red-600">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="sm:flex sm:flex-wrap sm:-mx-4 mt-6 pt-6 sm:mt-12 sm:pt-12 border-t">
                <div class="sm:w-full px-4 md:w-1/6">
                    <strong>FWR</strong>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
                    <h6 class="font-bold mb-2">Direcion</h6>
                    <address class="not-italic mb-4 text-sm">
                        123 6th St.<br>
                        Melbourne, FL 32904
                    </address>
                </div>

                <div class="px-4 md:w-1/4 md:ml-auto mt-6 sm:mt-4 md:mt-0">
                    <a
                    href="{{ route('contacto') }}" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Contactarnos</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
