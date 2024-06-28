<div>
    <div>
        <section class="w-full bg-cover bg-center py-48"
            style="background-image: url('{{ Vite::asset('resources/assets/images/hero-contacto.png') }}');">
            <div class="flex flex-col items-center justify-center  pb-12">
                <div>
                    <h2 class=" text-6xl text-white font-semibold">Contacto</h2>
                    <div>
                        <span class="inline-block w-32 h-1 rounded-full bg-green-600"></span>
                        <span class="inline-block w-3 h-1 ml-1 rounded-full bg-green-600"></span>
                        <span class="inline-block w-1 h-1 ml-1 rounded-full bg-green-600"></span>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto mt-10 flex max-w-lg flex-col items-center sm:max-w-xl md:max-w-2xl lg:mx-0 lg:max-w-none">
            <h1
                class="text-center text-4xl font-semibold leading-snug text-slate-700 sm:text-5xl sm:leading-snug md:mx-auto md:max-w-4xl xl:mx-0">
                Contáctenos para Cualquier Consulta
            </h1>
            <p class="mx-auto mt-5 max-w-xl text-center text-lg leading-relaxed text-slate-700 sm:mt-6">
                Si tiene alguna pregunta o necesita nuestros productos, contáctenos. En Viul, estamos
                aquí para ayudarte.
            </p>
        </div>
    </div>
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
                        <input type="text" name="name" id="name" placeholder="Juan Perez" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-vinoflow-500" />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600">Mail
                        </label>
                        <input type="text" name="email" id="email" placeholder="tu@empresa.com" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-vinoflow-500" />
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm text-gray-600">Tu
                            Mensaje</label>

                        <textarea rows="7" name="message" id="message" placeholder="tu consulta"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-green-100 focus:border-green-600"
                            required></textarea>
                    </div>
                    <div class="mb-6">
                        {{-- @if (!$messageSent) --}}
                        <button wire:click="sendEmail" wire:loading.attr="disabled" wire:target="sendEmail"
                            class="w-full px-3 py-4 text-white bg-green-600 rounded-md focus:bg-green-700 focus:outline-none">
                            <span wire:loading.remove wire:target="sendEmail">Enviar Mensaje</span>
                            <span wire:loading wire:target="sendEmail">Manando...</span>
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
