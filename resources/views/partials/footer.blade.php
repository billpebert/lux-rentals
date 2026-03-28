<footer class="bg-[#26251D] flex flex-col gap-20 items-center px-[140px] py-20 w-full">

    {{-- Main row --}}
    <div class="flex items-start justify-between w-full">

        {{-- Left: Logo + Social --}}
        <div class="flex flex-col gap-[27px] items-start w-[266px]">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/logo-small.webp') }}" alt="{{ config('app.name') }}" class="h-[170px] w-auto" />
            </a>

            <div class="flex flex-col gap-4 items-start w-full">
                <p class="font-sans font-medium text-base text-gray-500 tracking-[-0.3px]">
                    Follow us on Social Media
                </p>

                <div class="flex gap-2 items-center">
                    {{-- Facebook --}}
                    <a href="#" aria-label="Facebook" class="size-[30px] rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <svg class="size-4 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                    </a>

                    {{-- X (Twitter) --}}
                    <a href="#" aria-label="X" class="size-[30px] rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <svg class="size-4 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>

                    {{-- Instagram --}}
                    <a href="#" aria-label="Instagram" class="size-[30px] rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <svg class="size-4 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </a>

                    {{-- LinkedIn --}}
                    <a href="#" aria-label="LinkedIn" class="size-[30px] rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <svg class="size-4 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Right: Quick Links + Contact --}}
        <div class="flex items-start justify-between w-[608px]">

            {{-- Quick Links --}}
            <div class="flex flex-col gap-[34px] items-start">
                <h6 class="font-heading font-semibold text-2xl text-white tracking-[-0.4px] leading-9">
                    Quick Links
                </h6>
                <div class="flex flex-col gap-4 items-start font-sans font-medium text-lg text-white tracking-[-0.3px] leading-[27px]">
                    <a href="#" class="hover:text-light-gold transition-colors">Lux Rentals Glasgow</a>
                    <a href="#" class="hover:text-light-gold transition-colors">Account</a>
                    <a href="#" class="hover:text-light-gold transition-colors">About Us</a>
                    <a href="#" class="hover:text-light-gold transition-colors">Car Hire</a>
                    <a href="#" class="hover:text-light-gold transition-colors">Testimonials</a>
                    <a href="#" class="hover:text-light-gold transition-colors">Contact Us</a>
                </div>
            </div>

            {{-- Contact + Address --}}
            <div class="flex flex-col gap-4 items-start">

                <div class="flex flex-col gap-3 items-start">
                    <h6 class="font-heading font-semibold text-2xl text-white tracking-[-0.4px] leading-9">
                        Contact us
                    </h6>
                    <p class="font-sans font-medium text-lg text-white tracking-[-0.3px] leading-[27px]">
                        +01 41 221 0041
                    </p>
                </div>

                <div class="flex flex-col gap-3 items-start">
                    <h6 class="font-heading font-semibold text-2xl text-white tracking-[-0.4px] leading-9">
                        Address
                    </h6>
                    <p class="font-sans font-medium text-lg text-white tracking-[-0.3px] leading-[27px]">
                        123 Luxury Lane, Glasgow , UK
                    </p>
                </div>

            </div>

        </div>
    </div>

    {{-- Credits --}}
    <div class="flex flex-col gap-8 items-center w-full">
        <hr class="border-white/20 w-full" />
        <div class="flex items-center justify-between w-full">
            <p class="font-sans font-normal text-sm text-white leading-normal">
                © {{ date('Y') }} Lux Rentals, All Right Reserved.
            </p>
            <a href="#" class="font-sans font-normal text-sm text-white underline leading-normal hover:text-light-gold transition-colors">
                Terms and Conditions
            </a>
        </div>
    </div>

</footer>
