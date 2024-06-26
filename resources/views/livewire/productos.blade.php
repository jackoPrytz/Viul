<div>
    <div>
        <section class="w-full bg-cover bg-center py-48"
            style="background-image: url('{{ Vite::asset('resources/assets/images/nosotros.png') }}');">
            <div class="flex flex-col items-center justify-center  pb-12">
                <div>
                    <h2 class=" text-6xl text-white font-semibold">Productos</h2>
                    <div>
                        <span class="inline-block w-32 h-1 rounded-full bg-green-600"></span>
                        <span class="inline-block w-3 h-1 ml-1 rounded-full bg-green-600"></span>
                        <span class="inline-block w-1 h-1 ml-1 rounded-full bg-green-600"></span>
                    </div>
                </div>
            </div>

        </section>
        <div class="px-full px-4 sm:px-6 lg:px-8 py-24 ">
            <div class="flex flex-col items-center">
                <p class="flex items-center space-x-3.5 text-xl font-medium text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="3" viewBox="0 0 28 3"
                        fill="green">
                        <line y1="1.5" x2="28" y2="1.5" stroke="currentColor" strokeOpacity="0.65"
                            strokeWidth="3" />
                    </svg>

                    <span>Nuestra Productos</span>
                </p>
                <h1
                    class="mt-5 text-center text-4xl font-semibold leading-snug text-slate-700 sm:mt-6 sm:text-5xl sm:leading-snug md:mx-auto md:max-w-4xl xl:mx-0">


                    Ofrecemos membranas y pinturas asfálticas de alta calidad con garantía, ideales para cualquier
                    techo, proporcionando durabilidad y excelente impermeabilización.
                </h1>
            </div>
        </div>
        <div class="w-1/4 mx-auto h-1 bg-slate-300"></div> {{-- Slate-700 line separator --}}
        <section class="relative overflow-hidden bg-vanilla pb-20 pt-12 lg:py-12 ">
            {{-- Container --}}

            <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 sm:space-y-4">

                <div id='product-details-1'
                    class="sm:mb-8 lg:mb-0 relative mx-auto w-full max-w-lg sm:max-w-xl lg:mx-0 lg:max-w-none">
                    {{-- Image with Stats --}}
                    <div class="left-0 top-1/2 z-10 w-full lg:absolute lg:w-1/2 lg:-translate-y-1/2">
                        <img src="{{ Vite::asset('resources/assets/images/product-one.png') }}"
                            alt="Packages page from the app"class="h-auto w-full" />
                    </div>

                    {{-- Content --}}
                    <div
                        class="w-full bg-gray-secondary-50 px-6 pt-10 py-8 lg:ml-auto lg:w-7/12 py-5 lg:py-16 lg:pl-28 xl:pl-36 xl:pr-20">
                        <h2 class="text-2xl  leading-tight text-slate-900 xl:text-3xl xl:leading-tight">
                            <span class="text-green-600 font-semibold">KoverTech Roll: </span>
                            <span class="text-xl xl:text-2xl">Membrana constituida por asfaltos plásticos
                                normalizados,
                                refuerzo
                                central de polietileno y con cara superior de aluminio gofrado.</span>
                        </h2>
                        <div class="flex flex-col space-y-2">
                            <div class="flex mt-4">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="green">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Impermeabilizaciones expuestas, no transitables.
                                </div>
                            </div>
                            <div class="flex">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Mayor flexibilidad y adaptabilidad.
                                </div>
                            </div>
                            <div class="flex">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Mayor elongación y resistencia mecánica.
                                </div>
                            </div>
                            <div class="flex">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="green"
                                        viewBox="0 0 24 24" stroke="green">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    No se rompen ni se quiebran.
                                </div>
                            </div>
                        </div>
                        <a href="#" wire:navigate.hover
                            class="group mt-4 flex items-center rounded-lg justify-center border border-green-600 px-5 py-2.5 text-base font-medium text-green-600 duration-150 ease-in-out hover:bg-green-800 hover:text-white sm:mt-12">
                            Consulta
                        </a>
                    </div>
                </div>

                {{-- Block 2 --}}
                <div id='product-details-2'
                    class="relative mx-auto w-full max-w-lg sm:max-w-xl lg:mx-0 mt-12 lg:mt-32 lg:max-w-none">
                    {{-- Image with Stats --}}
                    <div class="-right-10 top-1/2 z-10 w-full lg:absolute lg:w-1/2 lg:-translate-y-1/2">
                        <image src="{{ Vite::asset('resources/assets/images/product-two.png') }}"
                            alt="image of vinoflow admin dashboard" class="h-auto w-full" />
                    </div>

                    {{-- Content --}}
                    <div
                        class="w-full bg-gray-secondary-50 px-6 py-8 sm:p-14 lg:w-7/12 lg:py-16 lg:pl-28 xl:pl-36 xl:pr-20">
                        <h2 class="text-2xl  leading-tight text-slate-900 xl:text-3xl xl:leading-tight">
                            <span class="text-green-600 font-semibold">KoverTech Flex: </span>
                            <span class="text-xl xl:text-2xl">Membrana de asfalto plástico de alta calidad con
                                refuerzo
                                de
                                polietileno y superficie de aluminio gofrado, aumenta resistencia, extiende vida
                                útil y
                                reduce
                                mantenimiento.
                            </span>
                        </h2>
                        <div class="flex flex-col space-y-2">
                            <div class="flex mt-4">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Mayor flexibilidad y adaptabilidad.
                                </div>
                            </div>
                            <div class="flex">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Mayor elongación y resistencia mecánica.
                                </div>
                            </div>
                            <div class="flex">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Gran durabilidad.
                                </div>
                            </div>
                            <div class="flex">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                                    </svg>

                                </span>
                                <div class="mt-2">
                                    Buen comportamiento ante climas adversos.
                                </div>
                            </div>
                        </div>
                        <a href="#" wire:navigate.hover
                            class="group mt-4 flex items-center rounded-lg justify-center border border-green-600 px-5 py-2.5 text-base font-medium text-green-600 duration-150 ease-in-out hover:bg-green-800 hover:text-white sm:mt-12">
                            Consulta
                        </a>
                    </div>
                </div>
                {{-- Block 3 --}}
                <div id="product-details-3"
                    class="sm:mb-8 lg:mb-0 relative mx-auto w-full max-w-lg sm:max-w-xl lg:mx-0 lg:max-w-none mt-32">
                    {{-- Image with Stats --}}
                    <div class="left-0 top-1/2 z-10 w-full lg:absolute lg:w-1/2 lg:-translate-y-1/2">
                        <img src="{{ Vite::asset('resources/assets/images/product-three.png') }}"
                            alt="Packages page from the app"class="h-auto w-full" />
                    </div>

                    {{-- Content --}}
                    <div
                        class="w-full bg-gray-secondary-50 px-6 pt-10 py-8 lg:ml-auto lg:w-7/12 py-5 lg:py-16 lg:pl-28 xl:pl-36 xl:pr-20">
                        <h2 class="text-2xl  leading-tight text-slate-900 xl:text-3xl xl:leading-tight">
                            <span class="text-green-600 font-semibold">KoverPrimer- Pintura asfáltica</span>
                            <span class="text-xl xl:text-2xl">Imprimante de base solvente de secado rápido. Es una
                                solución
                                en la que participan bases asfálticas especiales oxidadas y solventes volátiles
                                provenientes
                                de la destilación del petróleo.</span>
                        </h2>
                        <div class="flex flex-col space-y-2">
                            <div class="flex mt-4">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="green">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Secado rápido por rápida volatilización de los solventes
                                </div>
                            </div>
                            <div class="flex">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Impermeabilizante, anticorrosivo
                                </div>
                            </div>
                            <div class="flex">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Inflamable
                                </div>
                            </div>

                        </div>
                        <a href="#" wire:navigate.hover
                            class="group mt-4 flex items-center rounded-lg justify-center border border-green-600 px-5 py-2.5 text-base font-medium text-green-600 duration-150 ease-in-out hover:bg-green-800 hover:text-white sm:mt-12">
                            Consulta
                        </a>
                    </div>
                </div>
                {{-- block 4 --}}
                <div id="product-details-4"
                    class="relative mx-auto w-full max-w-lg sm:max-w-xl lg:mx-0 mt-12 lg:mt-32 lg:max-w-none">
                    {{-- Image with Stats --}}
                    <div class="-right-10 top-1/2 z-10 w-full lg:absolute lg:w-1/2 lg:-translate-y-1/2">
                        <image src="{{ Vite::asset('resources/assets/images/product-four.png') }}"
                            alt="image of vinoflow admin dashboard" class="h-auto w-full" />
                    </div>

                    {{-- Content --}}
                    <div
                        class="w-full bg-gray-secondary-50 px-6 py-8 sm:p-14 lg:w-7/12 lg:py-16 lg:pl-28 xl:pl-36 xl:pr-20">
                        <h2 class="text-2xl  leading-tight text-slate-900 xl:text-3xl xl:leading-tight">
                            <span class="text-green-600 font-semibold">Emapi Maca P


                            </span>
                            <span class="text-xl xl:text-2xl">Pintura Asfáltica Especial de Secado Rápido ofrece
                                protección superior, aplicación eficiente, rápida adherencia y durabilidad para techos.
                            </span>
                        </h2>
                        <div class="flex flex-col space-y-2">
                            <div class="flex mt-4">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Excelente adherencia a múltiples sustratos.
                                </div>
                            </div>
                            <div class="flex">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Secado rápido y alta volatilidad.
                                </div>
                            </div>
                            <div class="flex">
                                <span class="inline-block p-2 text-vinoflow-600  md:mx-4 :text-white :bg-vinoflow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
                                    </svg>
                                </span>
                                <div class="mt-2">
                                    Protección hidrófuga y anticorrosiva efectiva.
                                </div>
                            </div>

                        </div>
                        <a href="#" wire:navigate.hover
                            class="group mt-4 flex items-center rounded-lg justify-center border border-green-600 px-5 py-2.5 text-base font-medium text-green-600 duration-150 ease-in-out hover:bg-green-800 hover:text-white sm:mt-12">
                            Consulta
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
