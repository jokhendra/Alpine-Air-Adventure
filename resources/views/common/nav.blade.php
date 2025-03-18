<!DOCTYPE html>
<html lang="en">
@include('common.header')
<body>
    <nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-gradient-to-r from-sky-900/95 via-blue-700/95 to-indigo-800/95 border-gray-200 dark:bg-gray-900 shadow-lg">
        <div class="flex flex-wrap items-center justify-between p-4 w-full">
            <div class="sm:w-[20%] md:w-[25%] lg:w-[15%] flex items-center">
                <a href="/" class="flex items-center pl-[15px] sm:pl-[25px] md:pl-[50px] lg:pl-[75px]">
                    <img src="{{ asset('images/logo/Alpine.logo.webp') }}" class="h-8 sm:h-10 md:h-12 mr-3 rounded-4xl" alt="Alpine Air Adventures Logo" />
                    <!-- <span class="self-center text-2xl font-bold whitespace-nowrap text-white dark:text-white">
                        <span class="text-sky-200">Alpine</span> Air <span class="text-emerald-300">Adventures</span>
                    </span> -->
                </a>
            </div>
            
            <div class=" sm:w-[60%] md:w-[75%] lg:w-[75%] flex justify-end items-center pr-[15px] sm:pr-[25px] md:pr-[50px] lg:pr-[75px]">
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-3 rounded-lg bg-blue-800/95 md:flex-row md:space-x-4 lg:space-x-8 md:mt-0 md:border-0 md:bg-transparent absolute md:relative left-0 right-0 top-[60px] md:top-0 md:shadow-none shadow-lg z-40 md:items-center">
                        <li>
                            <a href="/" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-emerald-300 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Welcome
                            </a>
                        </li>
                        <!-- <li class="relative group">
                            <a href="#" class="flex items-center w-full py-2 pl-3 pr-4 text-white rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-emerald-300 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                Products <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </a>
                            <div class="z-10 hidden group-hover:block md:group-hover:block absolute font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-48 dark:bg-gray-700 dark:divide-gray-600 border border-blue-200 transition-all duration-300">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400">
                                    <li>
                                        <a href="/products/gliders" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-700 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                            </svg>
                                            Hang Gliders
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/products/motors" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-700 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            Motors
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/products/accessories" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-700 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                            </svg>
                                            Accessories
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/products/parts" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-700 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                            </svg>
                                            Spare Parts
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <li class="relative group">
                            <a href="#" class="flex items-center w-full py-2 pl-3 pr-4 text-white rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-emerald-300 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                                Training <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </a>
                            <div class="z-10 hidden group-hover:block md:group-hover:block absolute font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-48 dark:bg-gray-700 dark:divide-gray-600 border border-blue-200 transition-all duration-300">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400">
                                    <li>
                                        <a href="/training/beginner" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-700 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                            </svg>
                                            Beginner Courses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/training/advanced" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-700 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                            </svg>
                                            Advanced Training
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/training/certification" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-700 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                            </svg>
                                            Certification
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/gallery" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-emerald-300 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="/contact" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-emerald-300 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="/about" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-emerald-300 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                About
                            </a>
                        </li>
                        <li>
                            <a href="/weather" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-emerald-300 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                                Weather
                            </a>
                        </li>
                        <li class="md:ml-4">
                            <a href="/booking" class="block py-2 pl-3 pr-4 text-white rounded bg-emerald-600 hover:bg-emerald-700 md:border-0 md:hover:text-white md:px-4 md:py-2 md:rounded-lg md:shadow-md md:transition-all md:duration-300 md:transform md:hover:scale-105 dark:text-white dark:hover:bg-emerald-600 dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="font-semibold">Book Now</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Add padding to the top of the page to account for the fixed navbar -->
    <div class="pt-20"></div>

    <script>
        // Toggle mobile menu
        document.addEventListener('DOMContentLoaded', function() {
            const button = document.querySelector('[data-collapse-toggle="navbar-default"]');
            const menu = document.getElementById('navbar-default');
            
            button.addEventListener('click', function() {
                menu.classList.toggle('hidden');
            });
            
            // Mobile dropdown functionality (touch devices)
            if (window.innerWidth < 768) {
                const dropdownParents = document.querySelectorAll('.group');
                
                dropdownParents.forEach(parent => {
                    const link = parent.querySelector('a');
                    const dropdown = parent.querySelector('div');
                    
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        dropdown.classList.toggle('hidden');
                    });
                });
                
                // Close dropdowns when clicking outside
                document.addEventListener('click', function(event) {
                    const dropdowns = document.querySelectorAll('.group div');
                    dropdowns.forEach(dropdown => {
                        if (!dropdown.parentElement.contains(event.target)) {
                            dropdown.classList.add('hidden');
                        }
                    });
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.getElementById('main-nav');
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    // When scrolled down, make background more solid and change color
                    nav.classList.remove('from-sky-900/95', 'via-blue-700/95', 'to-indigo-800/95');
                    nav.classList.add('from-sky-950/98', 'via-blue-800/98', 'to-indigo-900/98');
                    nav.classList.add('backdrop-blur-sm');
                } else {
                    // When at top, revert to original styling
                    nav.classList.add('from-sky-900/95', 'via-blue-700/95', 'to-indigo-800/95');
                    nav.classList.remove('from-sky-950/98', 'via-blue-800/98', 'to-indigo-900/98');
                    nav.classList.remove('backdrop-blur-sm');
                }
            });
        });
    </script>
</body>
</html>