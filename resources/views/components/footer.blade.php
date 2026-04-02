<footer class="bg-gray-900 text-gray-300">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <div>
                <h3 class="mb-4 text-lg font-bold text-white">ABC</h3>
                <p class="text-sm text-gray-400">Luxury redefined. Experience the extraordinary.</p>
            </div>
            <div>
                <h4 class="mb-4 font-semibold text-white">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('daybed') }}" class="footer-link">Daybed</a></li>
                    <li><a href="{{ route('dining') }}" class="footer-link">Dining</a></li>
                    <li><a href="{{ route('poolbar') }}" class="footer-link">Pool Bar</a></li>
                </ul>
            </div>
            <div>
                <h4 class="mb-4 font-semibold text-white">More</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('explore') }}" class="footer-link">Explore</a></li>
                    <li><a href="{{ route('whatson') }}" class="footer-link">What's On</a></li>
                    <li><a href="{{ route('offer') }}" class="footer-link">Offers</a></li>
                </ul>
            </div>
            <div>
                <h4 class="mb-4 font-semibold text-white">Help</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('support') }}" class="footer-link">Support</a></li>
                    <li><a href="{{ route('reserve') }}" class="footer-link">Reserve</a></li>
                </ul>
            </div>
        </div>
        <p class="mt-10 border-t border-gray-700 pt-6 text-center text-xs text-gray-500">
            &copy; {{ date('Y') }} ABC. All rights reserved.
        </p>
    </div>
</footer>
