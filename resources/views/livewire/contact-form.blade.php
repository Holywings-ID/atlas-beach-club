<div>
    @if ($submitted)
        <div class="mt-4 rounded-lg bg-green-50 p-4 text-green-800">
            Thank you! We'll get back to you shortly.
        </div>
    @else
        <form wire:submit="submit" class="mt-8 max-w-xl space-y-4">
            <div>
                <input wire:model="name" type="text" placeholder="Your Name"
                       class="w-full rounded-lg border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black" />
                @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <input wire:model="email" type="email" placeholder="Your Email"
                       class="w-full rounded-lg border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black" />
                @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <textarea wire:model="message" rows="4" placeholder="Your Message"
                          class="w-full rounded-lg border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"></textarea>
                @error('message') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <button type="submit"
                    class="rounded-full bg-black px-8 py-3 font-semibold text-white transition hover:bg-gray-800">
                Send Message
            </button>
        </form>
    @endif
</div>
