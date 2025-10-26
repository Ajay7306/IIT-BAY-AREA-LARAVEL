<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIT BAY AREA ALUMNI</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body class="bg-gray-50">
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-full h-10 object-fit">
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-blue-600 transition">About</a>
                    <a href="#events" class="text-gray-700 hover:text-blue-600 transition">Events</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
                </div>
                <button class="md:hidden text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <section id="home" class="relative py-16 md:py-24 overflow-hidden">
        <div class="absolute inset-0 gradient-bg opacity-10"></div>
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse" style="animation-delay: 1s;"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

                <div class="lg:col-span-3 space-y-4 hidden md:block">
                    <div class="feature-card glass-effect rounded-2xl p-6 shadow-lg hover:shadow-2xl cursor-pointer group">
                        <a href="https://www.youtube.com/watch?v=_g2WHLN11ZA" class="flex items-start space-x-4" target="_blank">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-600 transition-colors">
                                    Conference 2024 Sessions</h3>
                            </div>
                        </a>
                    </div>

                    <div class="feature-card glass-effect rounded-2xl p-6 shadow-lg hover:shadow-2xl cursor-pointer group" style="animation-delay: 0.1s;">
                        <a href="https://www.youtube.com/watch?v=VhSGmVyKykg&list=PLscmDHSq5NkfUTE2KJVB346H_BJMzTNNQ" target="_blank" class="flex items-start space-x-4">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-purple-600 transition-colors">
                                    Conference 2023 Sessions</h3>
                            </div>
                        </a>
                    </div>

                    <div class="feature-card glass-effect rounded-2xl p-6 shadow-lg hover:shadow-2xl cursor-pointer group" style="animation-delay: 0.2s;">
                        <a href="https://www.youtube.com/playlist?list=PLscmDHSq5Nkcema7cmKYpDoGGSekX1ux3" target="_blank" class="flex items-start space-x-4">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-pink-600 transition-colors">
                                    Conference 2022 Sessions</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="relative group">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl transform group-hover:scale-[1.02] transition-all duration-500">
                            <img src="{{ asset('images/hero.png') }}" alt="Hero Image" class="w-full h-72 md:h-112 object-fit">

                            <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/20 to-transparent"></div>

                            <div class="absolute inset-0 shimmer-effect opacity-0 group-hover:opacity-100 transition-opacity"></div>

                            <div class="absolute inset-0 flex flex-col justify-end p-8 md:p-10">
                                <div class="transform group-hover:translate-y-2 transition-transform duration-500">
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://www.eventbrite.com/e/iit-bay-area-leadership-conference-2025-tickets-1440087353039?aff=oddtdtcreator"
                                            class="px-6 py-3 bg-white text-blue-600 rounded-xl font-semibold hover:bg-blue-50 transform hover:scale-105 transition-all shadow-lg">
                                            Register for Conference 2025
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -top-6 -left-6 bg-white rounded-2xl shadow-xl p-4 float-animation hidden md:block">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-900">98%</div>
                                    <div class="text-xs text-gray-600">Active Members</div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-4 float-animation hidden md:block" style="animation-delay: 1s;">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-900">50K+</div>
                                    <div class="text-xs text-gray-600">Connections Made</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 space-y-4 md:hidden block">
                    <div class="feature-card glass-effect rounded-2xl p-6 shadow-lg hover:shadow-2xl cursor-pointer group">
                        <a href="https://www.youtube.com/watch?v=_g2WHLN11ZA" class="flex items-start space-x-4" target="_blank">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-600 transition-colors">
                                    Conference 2024 Sessions</h3>
                            </div>
                        </a>
                    </div>
                    <div class="feature-card glass-effect rounded-2xl p-6 shadow-lg hover:shadow-2xl cursor-pointer group" style="animation-delay: 0.1s;">
                        <a href="https://www.youtube.com/watch?v=VhSGmVyKykg&list=PLscmDHSq5NkfUTE2KJVB346H_BJMzTNNQ" target="_blank" class="flex items-start space-x-4">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-purple-600 transition-colors">
                                    Conference 2023 Sessions</h3>
                            </div>
                        </a>
                    </div>
                    <div class="feature-card glass-effect rounded-2xl p-6 shadow-lg hover:shadow-2xl cursor-pointer group" style="animation-delay: 0.2s;">
                        <a href="https://www.youtube.com/playlist?list=PLscmDHSq5Nkcema7cmKYpDoGGSekX1ux3" class="flex items-start space-x-4" target="_blank">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-pink-600 transition-colors">
                                    Conference 2022 Sessions</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-3 space-y-4">
                    <div class="feature-card glass-effect rounded-2xl p-6 shadow-lg hover:shadow-2xl cursor-pointer group">
                        <a href="https://www.youtube.com/playlist?list=PLscmDHSq5NkewcaSXvJCKqR1fDVUmXI7h" target="_blank" class="flex items-start space-x-4">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition-colors">
                                    Conference 2022 Interviews</h3>
                            </div>
                        </a>
                    </div>
                    <div class="feature-card glass-effect rounded-2xl p-6 shadow-lg hover:shadow-2xl cursor-pointer group" style="animation-delay: 0.1s;">
                        <a href="https://www.iit-bayarea.org/conference2021" target="_blank" class="flex items-start space-x-4">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-orange-600 transition-colors">
                                    Conference 2021 Sessions</h3>
                            </div>
                        </a>
                    </div>
                    <div class="feature-card glass-effect rounded-2xl p-6 shadow-lg hover:shadow-2xl cursor-pointer group" style="animation-delay: 0.1s;">
                        <a href="https://www.iit-bayarea.org/donations-1" target="_blank" class="flex items-start space-x-4">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-orange-600 transition-colors">
                                    Donations</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 md:py-20 bg-white section-fade">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">IIT BAY AREA ALUMNI</h2>
                    <div class="w-24 h-1 bg-blue-600 mb-6 lg:mx-0 mx-auto"></div>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        The Indian Institute of Technology Bay Area Alumni (IITBAA) is a 501(c)3 California nonprofit
                        public benefit corporation. IITBAA is dedicated to the professional advancement of alumni from all IIT
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
                            <img src="{{ asset('images/meeting.png') }}" class="absolute block w-full object-contain" alt="Event Image">
                        </div>
                        <div class="hidden duration-200 ease-linear" data-carousel-item>
                            <img src="{{ asset('images/event2.png') }}" class="absolute block w-full object-contain" alt="Event Image">
                        </div>
                        <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                            <img src="{{ asset('images/event3.png') }}" class="absolute block w-full object-contain" alt="Event Image">
                        </div>
                        <div class="hidden duration-200 ease-linear" data-carousel-item>
                            <img src="{{ asset('images/event4.png') }}" class="absolute block w-full object-contain" alt="Event Image">
                        </div>
                        <div class="hidden duration-200 ease-linear" data-carousel-item>
                            <img src="{{ asset('images/event5.png') }}" class="absolute block w-full object-contain" alt="Event Image">
                        </div>
                        <div class="hidden duration-200 ease-linear" data-carousel-item>
                            <img src="{{ asset('images/event6.png') }}" class="absolute block w-full object-contain" alt="Event Image">
                        </div>
                        <div class="hidden duration-200 ease-linear" data-carousel-item>
                            <img src="{{ asset('images/event7.png') }}" class="absolute block w-full object-contain" alt="Event Image">
                        </div>
                    </div>
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 group-hover:bg-white/30 group-focus:ring-2 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="events" class="py-16 md:py-20 bg-blue-50 section-fade">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Upcoming Events or News</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Stay connected through networking events, webinars, and reunions and lastest news from IIT
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="transition-shadow duration-300 ease-in-out hover:-translate-y-1 hover:shadow-2xl bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-linear-to-br from-indigo-800 via-blue-800 to-blue-700 h-48 bg-blue-500 flex items-center justify-center">
                        <div class="text-white text-center">
                            <div class="text-5xl font-bold">15</div>
                            <div class="text-xl">November</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Annual Homecoming</h3>
                        <p class="text-gray-600 mb-4">Join us for a weekend of celebration, networking, and nostalgia on campus.</p>
                        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                            Register Now
                        </button>
                    </div>
                </div>

                <div class="transition-shadow duration-300 ease-in-out hover:-translate-y-1 hover:shadow-2xl bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-linear-to-br from-purple-500 via-purple-800 to-purple-700 bg-purple-500 h-48 flex items-center justify-center">
                        <div class="text-white text-center">
                            <div class="text-5xl font-bold">22</div>
                            <div class="text-xl">November</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Tech Innovation Summit</h3>
                        <p class="text-gray-600 mb-4">Explore cutting-edge technologies with industry leaders and fellow alumni.</p>
                        <button class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                            Learn More
                        </button>
                    </div>
                </div>

                <div class="transition-shadow duration-300 ease-in-out hover:-translate-y-1 hover:shadow-2xl bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-linear-to-br from-pink-500 via-pink-800 to-red-500 bg-pink-500 h-48 flex items-center justify-center">
                        <div class="text-white text-center">
                            <div class="text-5xl font-bold">05</div>
                            <div class="text-xl">December</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Career Mentorship Week</h3>
                        <p class="text-gray-600 mb-4">Share your expertise and guide the next generation of IIT students.</p>
                        <button class="w-full bg-pink-600 text-white py-2 rounded-lg hover:bg-pink-700 transition">
                            Volunteer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-16 md:py-20 bg-white section-fade">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Contact Us</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="shrink-0">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Email Us</h3>
                            <p class="text-gray-600">info@iit-bayarea.org</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="shrink-0">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">For volunteering opportunities, please email at</h3>
                            <p class="text-gray-600">volunteer@iit-bayarea.org</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="shrink-0">
                            <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Visit Us</h3>
                            <p class="text-gray-600">IIT Bay Area Alumni<br>
                                1600 DUANE AVE<br>
                                SANTA CLARA CA 95054</p>
                        </div>
                    </div>
                </div>

                <div class=" bg-white p-8 rounded-2xl shadow-lg">
                    @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                            class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }}"
                            placeholder="John Doe">

                            @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}"
                                placeholder="john@example.com">
                            @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" name="subject" value="{{ old('subject') }}"
                                class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition {{ $errors->has('subject') ? 'border-red-500' : 'border-gray-300' }}"
                                placeholder="Subject">
                            @error('subject')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="4" name="message"
                                class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition {{ $errors->has('message') ? 'border-red-500' : 'border-gray-300' }}"
                                placeholder="Tell us about yourself">{{ old('message') }}</textarea>
                            @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition font-semibold shadow-lg hover:shadow-xl">
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-linear-to-tl from-blue-800 via-blue-600 to-blue-800 bg-blue-700 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="IIT Bay area Logo" class="w-10 h-10 object-fit">
                    <h3 class="text-2xl font-bold mb-4">IIT BAY AREA ALUMNI</h3>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-blue-100 hover:text-white transition">Home</a></li>
                        <li><a href="#about" class="text-blue-100 hover:text-white transition">About</a></li>
                        <li><a href="#events" class="text-blue-100 hover:text-white transition">Events</a></li>
                        <li><a href="#contact" class="text-blue-100 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/iitbayarea/"
                            class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>

                        <a href="https://twitter.com/IITBayArea"
                            class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                            <i class="fab fa-x-twitter text-xl"></i>
                        </a>

                        <a href="https://www.linkedin.com/company/iitbayareaalumni"
                            class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>

                        <a href="https://www.instagram.com/iitbayarea/"
                            class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>

                        <a href="https://www.youtube.com/watch?v=8EpFDxhNjPY"
                            class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="border-t border-white/20 mt-8 pt-8 text-center text-blue-100">
                <p>&copy; 2021 by IIT Bay Area Alumni.</p>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>