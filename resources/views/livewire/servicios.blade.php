<div>
    <div>
        <section class="w-full bg-cover bg-center py-48"
            style="background-image: url('{{ Vite::asset('resources/assets/images/hero-servicios.png') }}');">
            <div class="flex flex-col items-center justify-center  pb-12">
                <div>
                    <h2 class=" text-6xl text-white font-semibold">Servicios</h2>
                    <div>
                        <span class="inline-block w-32 h-1 rounded-full bg-green-600"></span>
                        <span class="inline-block w-3 h-1 ml-1 rounded-full bg-green-600"></span>
                        <span class="inline-block w-1 h-1 ml-1 rounded-full bg-green-600"></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative overflow-hidden bg-vanilla pb-16 pt-16 sm:pb-24 sm:pt-24 md:pb-24">
            {{-- Container --}}
            <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
                {{-- Header --}}


                {{-- Content --}}
                <p class="flex items-center justify-center space-x-3.5 text-xl font-medium text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="3" viewBox="0 0 28 3"
                        fill="green">
                        <line y1="1.5" x2="28" y2="1.5" stroke="currentColor" strokeOpacity="0.65"
                            strokeWidth="3" />
                    </svg>

                    <span>Nuestra Servicios</span>
                </p>
                <div class="mt-12 flex flex-col md:mt-8 md:flex-row md:divide-x md:divide-gray-secondary-400/60">
                    <div class="md:w-1/2 md:py-8 md:pr-6 lg:pr-16">
                        <p class="text-lg leading-relaxed text-slate-700">

                            En Viul, no solo vendemos membranas para techos y pinturas asfálticas de
                            alta calidad, sino que también ofrecemos un servicio integral de instalación. Nuestro equipo
                            de expertos se encargará de la colocación de las membranas y la pintura de techos,
                            asegurando un trabajo impecable y duradero.
                        </p>

                    </div>
                    <div class=" md:w-1/2 md:py-8 md:pl-6 lg:pl-16">


                        <p class=" mt-6 text-lg leading-relaxed text-slate-700">
                            Nos enfocamos en brindarte una solución
                            completa, desde la selección del producto adecuado hasta su instalación profesional, para
                            que no tengas que preocuparte por nada. Nuestro proceso de instalación se divide en tres
                            etapas
                        </p>
                    </div>
                </div>

                {{-- Image With Stats --}}

            </div>
        </section>

        {{-- Dark Values Grid --}}
        <section class="relative overflow-hidden bg-green-700 pb-6 pt-16 sm:pb-12 lg:pb-20 lg:pt-28">
            {{-- Container --}}
            <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
                <div class="relative mx-auto w-full max-w-lg px-4 sm:max-w-3xl sm:px-0 lg:mx-0 lg:max-w-none">
                    <h2
                        class="text-4xl font-semibold leading-tight text-white sm:text-center sm:text-5xl sm:leading-tight">
                        Instalación Profesional de Membranas y <br>Pinturas Asfálticas
                    </h2>

                    {{-- Values --}}
                    <div class="mt-0 grid sm:mt-16 lg:grid-cols-3 ">
                        {{-- Value 1 --}}
                        <div
                            class="relative flex flex-col items-center justify-center px-0 py-10 sm:px-8 sm:py-12 sm:after:absolute sm:after:right-0 sm:after:h-5/6 sm:after:w-px  sm:after:content-[''] xl:px-12 xl:py-16">
                            <div class="flex flex-1 items-center flex-col ">
                                <div
                                    class="flex justify-center items-center w-24 h-24 rounded-full border-4  bg-green-500  p-4">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        width="100">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M16 1C17.6569 1 19 2.34315 19 4C19 4.55228 18.5523 5 18 5C17.4477 5 17 4.55228 17 4C17 3.44772 16.5523 3 16 3H4C3.44772 3 3 3.44772 3 4V20C3 20.5523 3.44772 21 4 21H16C16.5523 21 17 20.5523 17 20V19C17 18.4477 17.4477 18 18 18C18.5523 18 19 18.4477 19 19V20C19 21.6569 17.6569 23 16 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H16Z"
                                                fill="#ffffff"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M20.7991 8.20087C20.4993 7.90104 20.0132 7.90104 19.7133 8.20087L11.9166 15.9977C11.7692 16.145 11.6715 16.3348 11.6373 16.5404L11.4728 17.5272L12.4596 17.3627C12.6652 17.3285 12.855 17.2308 13.0023 17.0835L20.7991 9.28666C21.099 8.98682 21.099 8.5007 20.7991 8.20087ZM18.2991 6.78666C19.38 5.70578 21.1325 5.70577 22.2134 6.78665C23.2942 7.86754 23.2942 9.61999 22.2134 10.7009L14.4166 18.4977C13.9744 18.9398 13.4052 19.2327 12.7884 19.3355L11.8016 19.5C10.448 19.7256 9.2744 18.5521 9.50001 17.1984L9.66448 16.2116C9.76728 15.5948 10.0602 15.0256 10.5023 14.5834L18.2991 6.78666Z"
                                                fill="#ffffff"></path>
                                            <path
                                                d="M5 7C5 6.44772 5.44772 6 6 6H14C14.5523 6 15 6.44772 15 7C15 7.55228 14.5523 8 14 8H6C5.44772 8 5 7.55228 5 7Z"
                                                fill="#ffffff"></path>
                                            <path
                                                d="M5 11C5 10.4477 5.44772 10 6 10H10C10.5523 10 11 10.4477 11 11C11 11.5523 10.5523 12 10 12H6C5.44772 12 5 11.5523 5 11Z"
                                                fill="#ffffff"></path>
                                            <path
                                                d="M5 15C5 14.4477 5.44772 14 6 14H7C7.55228 14 8 14.4477 8 15C8 15.5523 7.55228 16 7 16H6C5.44772 16 5 15.5523 5 15Z"
                                                fill="#ffffff"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="md:w-full md:py-8 text-center">
                                    <h3
                                        class="mt-8 text-3xl font-semibold leading-tighter items-center text-white sm:mt-12">
                                        Evaluación y Asesoramiento
                                    </h3>

                                    <p class="mt-5 leading-relaxed text-slate-50 sm:mt-6">
                                        Realizamos una inspección detallada del techo para determinar las necesidades
                                        específicas de tu proyecto. Te asesoramos en la elección de las membranas y
                                        pinturas
                                        asfálticas más adecuadas, asegurando que recibas el mejor producto para tu
                                        situación
                                        particular.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- Value 2 --}}
                        <div
                            class="relative flex flex-col items-center justify-center px-0 py-10 before:absolute before:top-0 before:h-px before:w-full before:bg-gray-secondary-400/80 before:content-[''] sm:px-8 sm:py-12 sm:before:w-5/6 sm:after:absolute sm:after:right-0 sm:after:h-5/6 sm:after:w-px lg:after:bg-gray-secondary-400/80 sm:after:content-[''] lg:before:h-0 lg:after:w-0 xl:px-12 xl:py-16"">
                            <div class="flex flex-1 items-center flex-col">
                                <div
                                    class="flex justify-center items-center w-24 h-24 rounded-full border-4  bg-green-500  p-4">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        width="100">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M6 4.5C6 3.56538 6 3.09808 6.20096 2.75C6.33261 2.52197 6.52197 2.33261 6.75 2.20096C7.09808 2 7.56538 2 8.5 2H15.5C16.4346 2 16.9019 2 17.25 2.20096C17.478 2.33261 17.6674 2.52197 17.799 2.75C18 3.09808 18 3.56538 18 4.5C18 5.43462 18 5.90192 17.799 6.25C17.6674 6.47803 17.478 6.66739 17.25 6.79904C16.9019 7 16.4346 7 15.5 7H8.5C7.56538 7 7.09808 7 6.75 6.79904C6.52197 6.66739 6.33261 6.47803 6.20096 6.25C6 5.90192 6 5.43462 6 4.5Z"
                                                fill="#ffffff"></path>
                                            <path
                                                d="M5.00214 3.93909C4.84746 4.07647 4.75 4.27687 4.75 4.50002C4.75 4.72318 4.84746 4.92357 5.00214 5.06095C4.99998 4.89619 4.99999 4.72205 5 4.54025V4.4598C4.99999 4.278 4.99998 4.10385 5.00214 3.93909Z"
                                                fill="#ffffff"></path>
                                            <path
                                                d="M10 16V20C10 20.9428 10 21.4142 10.2929 21.7071C10.5858 22 11.0572 22 12 22C12.9428 22 13.4142 22 13.7071 21.7071C14 21.4142 14 20.9428 14 20V16C14 15.0572 14 14.5858 13.7071 14.2929C13.4142 14 12.9428 14 12 14C11.0572 14 10.5858 14 10.2929 14.2929C10 14.5858 10 15.0572 10 16Z"
                                                fill="#ffffff"></path>
                                            <path
                                                d="M18.9944 5.25H19.0453C19.4999 5.25 19.8051 5.25037 20.0416 5.26579C20.2718 5.2808 20.3843 5.30776 20.4583 5.3369C20.781 5.46395 21.0364 5.71937 21.1635 6.04208C21.1926 6.11609 21.2196 6.22858 21.2346 6.45878C21.25 6.6953 21.2504 7.00044 21.2504 7.4551C21.2504 8.29243 21.2398 8.52185 21.179 8.69392C21.0747 8.98918 20.8634 9.23455 20.5869 9.38148C20.4257 9.4671 20.2004 9.5116 19.3724 9.63581L15.249 10.2543C14.4763 10.3702 13.8277 10.4675 13.3152 10.6116C12.7721 10.7643 12.2916 10.9923 11.9166 11.4278C11.5334 11.8727 11.3753 12.4055 11.3071 13.0062C11.5113 12.9999 11.727 13 11.9458 13H12.0546C12.3196 13 12.5799 12.9999 12.8208 13.011C12.8708 12.6902 12.9482 12.5286 13.0532 12.4067C13.1626 12.2796 13.3307 12.1654 13.7212 12.0556C14.1321 11.94 14.6865 11.8555 15.5182 11.7307L19.714 11.1014C20.3648 11.0044 20.8716 10.9288 21.2907 10.7061C21.8991 10.3829 22.3639 9.84304 22.5934 9.19346C22.7514 8.74599 22.751 8.23353 22.7504 7.57559L22.7504 7.43098C22.7504 7.00661 22.7504 6.65233 22.7314 6.3612C22.7116 6.05823 22.6691 5.77171 22.5592 5.49258C22.2797 4.78261 21.7177 4.22069 21.0078 3.94117C20.7286 3.83128 20.4421 3.78872 20.1392 3.76897C19.848 3.74999 19.4937 3.74999 19.0694 3.75H18.9944C19.0002 3.96867 19.0002 4.20681 19.0002 4.45976V4.54024C19.0002 4.7932 19.0002 5.03133 18.9944 5.25Z"
                                                fill="#ffffff"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="md:w-full md:py-8 text-center">
                                    <!-- Added text-center for center alignment -->
                                    <h3 class="mt-8 text-3xl font-semibold leading-tighter text-white sm:mt-12">
                                        Preparación y Colocación
                                    </h3>
                                    <p class="mt-5 leading-relaxed text-slate-50 sm:mt-6">
                                        Preparamos la superficie del techo adecuadamente para garantizar una adherencia
                                        óptima de las membranas y la pintura. Nuestro equipo de profesionales altamente
                                        capacitados se encarga de la instalación, siguiendo rigurosos estándares de
                                        calidad
                                        y seguridad.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- Value 3 --}}
                        <div
                            class="relative flex flex-col items-center justify-center px-0 py-10 before:absolute before:top-0 before:h-px before:w-full before:bg-gray-secondary-400/80 before:content-[''] sm:px-8 sm:py-12 sm:before:w-5/6 sm:after:absolute sm:after:right-0 sm:after:h-5/6 sm:after:w-px lg:after:bg-gray-secondary-400/80 sm:after:content-['']  lg:before:bg-gray-secondary-400/80 lg:before:h-0 lg:after:w-0 xl:px-12 xl:py-16">
                            <div class="flex flex-1 items-center flex-col">
                                <div
                                    class="flex justify-center items-center w-24 h-24 rounded-full border-4 bg-green-500 p-4">
                                    <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        width="100" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                                        stroke="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title>maintenance</title>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="Combined-Shape" fill="#ffffff"
                                                    transform="translate(42.666667, 42.666667)">
                                                    <path
                                                        d="M128,7.10542736e-15 C198.692448,7.10542736e-15 256,57.307552 256,128 C256,140.931179 254.082471,153.414494 250.516246,165.181113 L384,298.666667 C407.564149,322.230816 407.564149,360.435851 384,384 C360.435851,407.564149 322.230816,407.564149 298.666667,384 L165.181113,250.516246 C153.414494,254.082471 140.931179,256 128,256 C57.307552,256 7.10542736e-15,198.692448 7.10542736e-15,128 C7.10542736e-15,114.357909 2.13416363,101.214278 6.08683609,88.884763 L66.6347809,149.333333 L126.649,129.346 L129.329,126.666 L149.333333,66.7080586 L88.7145729,6.14152881 C101.0933,2.15385405 114.29512,7.10542736e-15 128,7.10542736e-15 Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="md:w-full md:py-8 text-center">
                                    <h3 class="mt-8 text-3xl font-semibold leading-tighter text-white sm:mt-12">
                                        Revisión y Mantenimiento
                                    </h3>
                                    <p class="mt-5 leading-relaxed text-slate-50 sm:mt-6">
                                        Después de completar la instalación, llevamos a cabo una revisión exhaustiva
                                        para
                                        asegurarnos de que todo esté en perfectas condiciones. Además, te ofrecemos un
                                        plan
                                        de mantenimiento para prolongar la vida útil de tu techo y mantenerlo en óptimas
                                        condiciones a lo largo del tiempo.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- <div
						class="relative flex flex-col items-center justify-center px-0 py-10 before:absolute before:top-0 before:h-px before:w-full before:bg-gray-secondary-400/80 before:content-[''] sm:px-8 sm:py-12 sm:before:w-5/6 lg:after:absolute lg:after:right-0 lg:after:h-5/6 lg:after:w-px lg:after:bg-gray-secondary-400/80 lg:after:content-[''] xl:px-12 xl:py-16">
						<div class="flex flex-1 flex-col">
							<h3 class="mt-8 text-3xl font-semibold leading-tighter text-white sm:mt-12">
								Integrity
							</h3>
							<p class="mt-5 leading-relaxed text-slate-50 sm:mt-6">
								At the core of our values lies integrity, steering our efforts to reshape the wine
								industry with authenticity and trust.
							</p>
						</div>
					</div>

					<div
						class="relative flex flex-col items-center justify-center px-0 py-10 before:absolute before:top-0 before:h-px before:w-full before:bg-gray-secondary-400/80 before:content-[''] sm:px-8 sm:py-12 sm:before:w-5/6 sm:after:absolute sm:after:right-0 sm:after:h-5/6 sm:after:w-px sm:after:bg-gray-secondary-400/80 sm:after:content-[''] xl:px-12 xl:py-16">
						<div class="flex flex-1 flex-col">
							<h3 class="mt-8 text-3xl font-semibold leading-tighter text-white sm:mt-12">
								Craftsmanship
							</h3>
							<p class="mt-5 leading-relaxed text-slate-50 sm:mt-6">
								Craftsmanship is woven into the fabric of our work, shaping our commitment to excellence
								in revolutionizing the wine industry.
							</p>
						</div>
					</div>

					<div
						class="relative flex flex-col items-center justify-center px-0 py-10 before:absolute before:top-0 before:h-px before:w-full before:bg-gray-secondary-400/80 before:content-[''] sm:px-8 sm:py-12 sm:before:w-5/6 xl:px-12 xl:py-16">
						<div class="flex flex-1 flex-col">
							<h3 class="mt-8 text-3xl font-semibold leading-tighter text-white sm:mt-12">
								Self-improvement
							</h3>
							<p class="mt-5 leading-relaxed text-slate-50 sm:mt-6">
								Self-improvement is our constant companion, propelling us to refine and enhance every
								aspect of our approach in reshaping the wine industry.
							</p>
						</div>
					</div> --}}
                    </div>
                </div>
                <p class="text-center text-xl text-white">Contáctanos para más información y descubre cómo podemos
                    ayudarte a
                    proteger y embellecer tu techo.
                </p>
                <div class="flex mt-10 justify-center">
                    <a href="{{ route('contacto') }}"
                        class="text-green-700 bg-white hover:bg-green-800 hover:text-white focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Contáctenos</a>
                </div>
            </div>
        </section>

    </div>
</div>
