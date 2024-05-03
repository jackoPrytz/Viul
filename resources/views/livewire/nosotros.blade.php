<div>
    <div>
        <section class="w-full bg-cover bg-center py-48"
            style="background-image: url('{{ Vite::asset('resources/assets/images/nosotros.png') }}');">
            <div class="container mx-auto text-center text-white">
                {{-- <h1 class="text-5xl text-slate-100 font-medium mb-6">Transformando techos con excelencia: </h1>
				<p class="text-xl mb-12 mx-10">¡Tu elección
					principal para membranas de alta calidad en Argentina!</p>
				<a href="#"
					class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Contáctenos</a> --}}

            </div>
        </section>
    </div>
    {{-- <div class="py-16 bg-white flex mx-auto">
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                {{-- <div class="md:5/12 lg:w-5/12">
                    <img src="{{ Vite::asset('resources/assets/images/about-us.png') }}" alt="image" loading="lazy"
                        width="" height="">
                </div> --}}
    {{-- <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Nuxt development is carried out by
                        passionate developers</h2>
                    <p class="mt-6 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis
                        voluptatem accusantium nemo perspiciatis delectus atque autem! Voluptatum tenetur beatae unde
                        aperiam, repellat expedita consequatur! Officiis id consequatur atque doloremque!</p>
                    <p class="mt-4 text-gray-600"> Nobis minus voluptatibus pariatur dignissimos libero quaerat iure
                        expedita at? Asperiores nemo possimus nesciunt dicta veniam aspernatur quam mollitia.</p>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="md:w-6/10 w-2/3 mx-auto">
        <div class="mx-auto my-10 bg-gray-100 p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-6 text-3xl font-semibold text-gray-700 ">Contáctanos</h1>
                <p class="text-gray-400 ">Completa el formulario a continuación para enviarnos un mensaje.</p>
            </div>
            <div class="m-7">
                <div>
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm text-gray-600 ">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="John Doe" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-vinoflow-500" />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600">Mail
                        </label>
                        <input type="text" name="email" id="email" placeholder="you@company.com" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-vinoflow-500" />
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm text-gray-600">Tu
                            Mensaje</label>

                        <textarea rows="7" name="message" id="message" placeholder="Your Message"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-green-100 focus:border-green-600"
                            required></textarea>
                    </div>
                    <div class="mb-6">
                        {{-- @if (!$messageSent) --}}
                        <button wire:click="sendEmail" wire:loading.attr="disabled" wire:target="sendEmail"
                            class="w-full px-3 py-4 text-white bg-green-600 rounded-md focus:bg-green-700 focus:outline-none">
                            <span wire:loading.remove wire:target="sendEmail">Mandar Mensaje</span>
                            <span wire:loading wire:target="sendEmail">Sending...</span>
                        </button>
                        {{-- @else
                            <div>Thanks for your message! We'll be in touch soon.</div>
                        @endif --}}
                    </div>
                    <p class="text-base text-center text-gray-400" id="result">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
