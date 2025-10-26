<section id="about" class="py-16 md:py-20 bg-white section-fade">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">IIT BAY AREA ALUMNI</h2>
                <div class="w-24 h-1 bg-blue-600 mb-6 lg:mx-0 mx-auto"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    The Indian Institute of Technology Bay Area Alumni (IITBAA) is a 501(c)3 California nonprofit
                    public benefit corporation. IITBAA is dedicated to the professional advancement of alumni from all
                    IIT
                    campuses throughout India who call the greater San Francisco Bay Area home. The primary goal is
                    to educate the alumni through the dissemination of ideas that lead the market and create global
                    technology trends. IITBAA arranges periodic subject matter discussions and organizes an annual
                    conference that empowers the IIT alumni as they retain their edge in the workforce.
                </p>
            </div>

            <!-- Carousel -->
            <div id="animation-carousel" class="relative w-full" data-carousel="slide" data-carousel-interval="3000">
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/meeting.png') }}" class="absolute block w-full object-contain"
                            alt="Event Image">
                    </div>
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/event2.png') }}" class="absolute block w-full object-contain"
                            alt="Event Image">
                    </div>
                    <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                        <img src="{{ asset('images/event3.png') }}" class="absolute block w-full object-contain"
                            alt="Event Image">
                    </div>
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/event4.png') }}" class="absolute block w-full object-contain"
                            alt="Event Image">
                    </div>
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/event5.png') }}" class="absolute block w-full object-contain"
                            alt="Event Image">
                    </div>
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/event6.png') }}" class="absolute block w-full object-contain"
                            alt="Event Image">
                    </div>
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/event7.png') }}" class="absolute block w-full object-contain"
                            alt="Event Image">
                    </div>
                </div>
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 group-hover:bg-white/30 group-focus:ring-2 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 group-hover:bg-white/30 group-focus:ring-2 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</section>