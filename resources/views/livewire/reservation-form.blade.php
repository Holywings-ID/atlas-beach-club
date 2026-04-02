<div>
    @if ($submitted && session('reservation'))
        <div class="mt-6 rounded-lg bg-green-50 p-4 text-green-800">
            Thank you, {{ session('reservation.name') }}!
            Your reservation for {{ session('reservation.guests') }} guest(s)
            on {{ session('reservation.date') }} has been received.
        </div>
    @else
        <form wire:submit="submit" class="mt-8 max-w-xl space-y-4">
            <div>
                <input wire:model="name" type="text" placeholder="Full Name"
                       class="w-full rounded-lg border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black" />
                @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <input wire:model="email" type="email" placeholder="Email"
                       class="w-full rounded-lg border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black" />
                @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <input wire:model="phone" type="tel" placeholder="Phone"
                       class="w-full rounded-lg border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black" />
                @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <input wire:model="date" type="date" min="{{ now()->format('Y-m-d') }}"
                       class="w-full rounded-lg border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black" />
                @error('date') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <select wire:model="guests"
                        class="w-full rounded-lg border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black">
                    <option value="">Number of Guests</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5+</option>
                </select>
                @error('guests') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <textarea wire:model="notes" rows="3" placeholder="Special Requests (optional)"
                          class="w-full rounded-lg border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"></textarea>
            </div>

            <button type="submit"
                    class="rounded-full bg-black px-8 py-3 font-semibold text-white transition hover:bg-gray-800">
                Submit Reservation
            </button>
        </form>
    @endif
</div>
