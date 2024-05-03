<div>
    <div class="w-2/3 mx-auto">
        <div class="mx-auto my-10 bg-gray-100 p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-6 text-3xl font-semibold text-gray-700 ">Contáctanos</h1>
                <p class="text-gray-400 ">Fill up the form below to send us a message.</p>
            </div>
            <div class="m-7">
                <div>
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm text-gray-600 ">Full
                            Name</label>
                        <input type="text" name="name" id="name" placeholder="John Doe" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-vinoflow-500" />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600">Email
                            Address</label>
                        <input type="text" name="email" id="email" placeholder="you@company.com" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-vinoflow-500" />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600">Email
                            Address</label>
                        <input type="text" name="email" id="email" placeholder="you@company.com" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-vinoflow-500" />
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm text-gray-600">Your
                            Message</label>

                        <textarea rows="7" name="message" id="message" placeholder="Your Message"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-green-100 focus:border-green-600"
                            required></textarea>
                    </div>
                    <div class="mb-6">
                        {{-- @if (!$messageSent) --}}
                        <button wire:click="sendEmail" wire:loading.attr="disabled" wire:target="sendEmail"
                            class="w-full px-3 py-4 text-white bg-green-600 rounded-md focus:bg-green-700 focus:outline-none">
                            <span wire:loading.remove wire:target="sendEmail">Send Message</span>
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
