<footer class="bg-[#26251D] flex flex-col gap-12 sm:gap-16 lg:gap-20 items-center px-4 sm:px-8 lg:px-20 xl:px-[140px] py-12 sm:py-16 lg:py-20 w-full">

    {{-- Main row --}}
    <div class="flex flex-col xl:flex-row xl:items-start xl:justify-between gap-12 xl:gap-8 w-full max-w-desktop-lg mx-auto">

        {{-- Left: Logo + Social --}}
        <div class="flex flex-col gap-6 sm:gap-[27px] items-start w-full max-w-[266px] xl:shrink-0">
            <a href="{{ route('home') }}" class="inline-block">
                <img src="{{ asset('assets/logo-small.webp') }}" alt="{{ config('app.name') }}" class="h-28 sm:h-36 lg:h-[170px] w-auto max-w-full object-contain object-left" />
            </a>

            <div class="flex flex-col gap-4 items-start w-full">
                <p class="font-sans font-medium text-base text-gray-500 tracking-[-0.3px]">
                    Follow us on Social Media
                </p>

                <div class="flex flex-wrap gap-2 items-center">
                    {{-- Facebook --}}
                    <a href="#" aria-label="Facebook" class="size-[30px] rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <img src="{{ asset('assets/svgs/facebook.svg') }}" alt="" class="size-full" width="30" height="30">
                    </a>

                    {{-- X (Twitter) --}}
                    <a href="#" aria-label="X" class="size-[30px] rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <img src="{{ asset('assets/svgs/x.svg') }}" alt="" class="size-full" width="30" height="30">
                    </a>

                    {{-- Instagram --}}
                    <a href="#" aria-label="Instagram" class="size-[30px] rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <img src="{{ asset('assets/svgs/instagram.svg') }}" alt="" class="size-full" width="30" height="30">
                    </a>

                    {{-- LinkedIn --}}
                    <a href="#" aria-label="LinkedIn" class="size-[30px] rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <img src="{{ asset('assets/svgs/linkedin.svg') }}" alt="" class="size-full" width="30" height="30">
                    </a>
                </div>
            </div>
        </div>

        {{-- Right: Quick Links + Contact --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-x-12 xl:gap-x-16 xl:gap-y-0 w-full xl:flex-1 xl:justify-end">

            {{-- Quick Links --}}
            <div class="flex flex-col gap-6 sm:gap-[34px] items-start">
                <h6 class="font-heading font-semibold text-xl sm:text-2xl text-white tracking-[-0.4px] leading-9">
                    Quick Links
                </h6>
                <div class="flex flex-col gap-3 sm:gap-4 items-start font-sans font-medium text-base sm:text-lg text-white tracking-[-0.3px] leading-[27px]">
                    <a href="#" class="hover:text-light-gold transition-colors">Lux Rentals Glasgow</a>
                    <a href="#" class="hover:text-light-gold transition-colors">Account</a>
                    <a href="#" class="hover:text-light-gold transition-colors">About Us</a>
                    <a href="#" class="hover:text-light-gold transition-colors">Car Hire</a>
                    <a href="#" class="hover:text-light-gold transition-colors">Testimonials</a>
                    <a href="#" class="hover:text-light-gold transition-colors">Contact Us</a>
                </div>
            </div>

            {{-- Services --}}
            <div class="flex flex-col gap-6 sm:gap-[34px] items-start">
                <h6 class="font-heading font-semibold text-xl sm:text-2xl text-white tracking-[-0.4px] leading-9">
                    Services
                </h6>
                <div class="flex flex-col gap-3 sm:gap-4 items-start font-sans font-medium text-base sm:text-lg text-white tracking-[-0.3px] leading-[27px]">
                    <a href="#" class="hover:text-light-gold transition-colors">Wedding Car Hire</a>
                    <a href="#" class="hover:text-light-gold transition-colors">Events Car Hire</a>
                    <a href="#" class="hover:text-light-gold transition-colors">Chauffeur Service</a>
                    <a href="#" class="hover:text-light-gold transition-colors">Corporate Car Hire</a>
                </div>
            </div>

            {{-- Contact + Address --}}
            <div class="flex flex-col gap-6 items-start sm:col-span-2 lg:col-span-1">

                <div class="flex flex-col gap-3 items-start">
                    <h6 class="font-heading font-semibold text-xl sm:text-2xl text-white tracking-[-0.4px] leading-9">
                        Contact us
                    </h6>
                    <p class="font-sans font-medium text-base sm:text-lg text-white tracking-[-0.3px] leading-[27px]">
                        +01 41 221 0041
                    </p>
                </div>

                <div class="flex flex-col gap-3 items-start">
                    <h6 class="font-heading font-semibold text-xl sm:text-2xl text-white tracking-[-0.4px] leading-9">
                        Address
                    </h6>
                    <p class="font-sans font-medium text-base sm:text-lg text-white tracking-[-0.3px] leading-[27px] max-w-xs">
                        123 Luxury Lane, Glasgow , UK
                    </p>
                </div>

            </div>

        </div>
    </div>

    {{-- Credits --}}
    <div class="flex flex-col gap-6 sm:gap-8 items-center w-full max-w-desktop-lg mx-auto">
        <hr class="border-white/20 w-full" />
        <div class="flex flex-col-reverse sm:flex-row sm:items-center sm:justify-between gap-4 w-full text-center sm:text-start">
            <p class="font-sans font-normal text-sm text-white leading-normal">
                © {{ date('Y') }} Lux Rentals, All Right Reserved.
            </p>
            <a href="#" class="font-sans font-normal text-sm text-white underline leading-normal hover:text-light-gold transition-colors shrink-0">
                Terms and Conditions
            </a>
        </div>
    </div>

</footer>
