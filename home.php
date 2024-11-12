    <!-- Hero Section -->
    <section class="relative h-screen flex items-center text-white "> <!-- mt-16 to prevent overlap with navbar -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
        <video class="min-w-full min-h-full absolute object-cover" src="assets/hero.mp4" type="video/mp4" autoplay muted loop></video>
        <!-- Black overlay with opacity -->
        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-60"></div>
    </div>

    <!-- Content section with flexbox to split into left and right -->
    <div class="relative z-10 w-full flex justify-center items-center mt-60 sm:mt-10 px-8">
        <div class="w-full md:w-3/4 lg:w-2/3 flex flex-col md:flex-row justify-around gap-8 items-center">
            <!-- Left side: Text and Button -->
            <div class="w-full md:w-1/2 bg-gray-400/50 p-6 rounded-lg flex flex-col justify-center items-start">
                <h1 class="text-center font-semibold text-4xl">
                    Be a Part of Revolution with
                </h1>
                <h3 class="font-semibold text-xl mt-2">
                    Power your future with clean, renewable energy. Join the solar revolution today and take a step
                    towards a greener, more sustainable tomorrow. Save money, protect the environment, and brighten
                    your world with solar energy solutions tailored just for you.
                </h3>
                <button class="mt-4 px-6 py-2 bg-orange-500 text-white border border-orange-500 rounded-lg hover:bg-orange-600">
                    Get Started
                </button>
            </div>

            <!-- Right side: Typewriter effect -->
            <div class="w-full md:w-1/2 p-6 rounded-lg">
                <h1 class="text-center font-semibold text-3xl">
                    Thinking Solar?<br />
                    <span class="typewriter" id="typewriter"></span>
                </h1>
            </div>
        </div>
    </div>
</section>

    <!-- why solar section -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center lg:pt-32">
        <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-slate-900 sm:text-7xl">
            <span class="inline-block">Why<br />
                <span class="relative whitespace-nowrap text-orange-600">
                    <svg aria-hidden="true" viewBox="0 0 418 42"
                        class="absolute top-2/3 left-0 h-[0.58em] w-full fill-orange-300/70" preserveAspectRatio="none">
                        <path
                            d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                        </path>
                    </svg>
                    <span class="relative"> Solar
                    </span></span>
            </span>
        </h1>

        <div class="flex flex-col items-center my-8">
            <div class="border-t-4 border-dashed w-full max-w-8xl border-gray-400 mb-4"></div>

            <div class="text-center">
                <h1 class="text-2xl md:text-4xl font-semibold text-gray-700">
                    One Time Investment. Lifetime Savings.
                </h1>
                <p class="text-gray-500 mt-2">
                    With reduced costs & improved technology, now is the time to go solar.
                </p>
            </div>



            <div class="border-t-4 border-dashed w-full max-w-8xl border-gray-400 mt-4"></div>
        </div>
        <div class="container mx-auto px-5 py-12">
            <div class="flex flex-wrap text-center justify-center">
                <!-- Icon 1 - Reduced Energy Bills -->
                <div class="p-4 md:w-1/5 sm:w-1/2">
                    <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <!-- <i class="fas fa-lightbulb w-32 h-32 mb-3 text-orange-600"></i> -->
                            <i class="fa-solid fa-lightbulb fa-5x w-32 h-32 mb-3 text-orange-600"></i>
                        </div>
                        <h2 class="title-font font-regular text-xl text-gray-900">REDUCED ENERGY BILLS</h2>
                    </div>
                </div>

                <!-- Icon 2 - Safe Investment -->
                <div class="p-4 md:w-1/5 sm:w-1/2">
                    <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <i class="fas fa-coins fa-5x w-32 h-32 mb-3 text-slate-600"></i>
                        </div>
                        <h2 class="title-font font-regular text-xl text-gray-900">SAFE INVESTMENT, HIGH RETURNS</h2>
                    </div>
                </div>

                <!-- Icon 3 - Environment Friendly -->
                <div class="p-4 md:w-1/5 sm:w-1/2">
                    <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <i class="fas fa-leaf fa-5x w-32 h-32 mb-3 text-green-600"></i>
                        </div>
                        <h2 class="title-font font-regular text-xl text-gray-900">ENVIRONMENT FRIENDLY</h2>
                    </div>
                </div>

                <!-- Icon 4 - Negligible Maintenance -->
                <div class="p-4 md:w-1/5 sm:w-1/2">
                    <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <i class="fas fa-cog fa-5x w-32 h-32 mb-3 text-gray-600"></i>
                        </div>
                        <h2 class="title-font font-regular text-xl text-gray-900">NEGLIGIBLE MAINTENANCE</h2>
                    </div>
                </div>

                <!-- Icon 5 - Anyone Can Use -->
                <div class="p-4 md:w-1/5 sm:w-1/2">
                    <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <i class="fas fa-user-friends fa-5x w-32 h-32 mb-3 text-black"></i>
                        </div>
                        <h2 class="title-font font-regular text-xl text-gray-900">ANYONE CAN USE</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t-4 border-dashed w-full max-w-8xl border-gray-400 "></div>
    </div>
    <!-- our product -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center lg:pt-32">
        <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-slate-900 sm:text-7xl">
            <span class="inline-block">Our
                <span class="relative whitespace-nowrap text-orange-600">
                    <svg aria-hidden="true" viewBox="0 0 418 42"
                        class="absolute top-2/3 left-0 h-[0.58em] w-full fill-orange-300/70" preserveAspectRatio="none">
                        <path
                            d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                        </path>
                    </svg>
                    <span class="relative"> Products
                    </span>
                </span>
            </span>
        </h1>

        <div class="flex flex-col md:flex-row justify-between mt-10">
            <div class="w-full md:w-1/2 pr-2 bg-white shadow-lg p-4 rounded-lg mb-4 md:mb-0">
                <h2 class="text-3xl text-orange-600 font-bold">Solar for Homes</h2>
                <div class="slider">
                    <div>
                        <img src="assets/h1.png" alt="Solar Home 1" class="w-full" />
                    </div>
                    <div>
                        <img src="assets/h2.png" alt="Solar Home 2" class="w-full" />
                    </div>
                    <div>
                        <img src="assets/h3.png" alt="Solar Home 3" class="w-full" />
                    </div>
                    <div>
                        <img src="assets/h5.png" alt="Solar Home 4" class="w-full" />
                    </div>
                    <div>
                        <img src="assets/h6.png" alt="Solar Home 5" class="w-full" />
                    </div>
                </div>
                <a href="homesolar.html">
                    <button
                        class="mt-4 w-full px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700 transition duration-200">
                        Explore More
                    </button>
                </a>
                
            </div>

            <div class="w-full md:w-1/2 pl-2 bg-white shadow-lg p-4 rounded-lg">
                <h2 class="text-3xl text-orange-600 font-bold">Solar for Business</h2>
                <div class="slider">
                    <div>
                        <img src="assets/b1.png" alt="Solar Business 1" class="w-full" />
                    </div>
                    <div>
                        <img src="assets/b2.png" alt="Solar Business 2" class="w-full" />
                    </div>
                    <div>
                        <img src="assets/b3.png" alt="Solar Business 3" class="w-full" />
                    </div>
                    <div>
                        <img src="assets/b4.png" alt="Solar Business 4" class="w-full" />
                    </div>
                </div>
                <a href="bussinessolar.html">
                    <button
                        class="mt-4 w-full px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700 transition duration-200">
                        Explore More
                    </button>
                </a>
                
            </div>
        </div>
    </div>

    <!-- our client -->
    <div>
        <div class="text-center mb-8">
            <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-slate-900 sm:text-7xl">
                <span class="inline-block">Our
                    <span class="relative whitespace-nowrap text-orange-600">
                        <svg aria-hidden="true" viewBox="0 0 418 42"
                            class="absolute top-2/3 left-0 h-[0.58em] w-full fill-orange-300/70"
                            preserveAspectRatio="none">
                            <path
                                d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                            </path>
                        </svg>
                        <span class="relative"> Clients</span>
                    </span>
                </span>
            </h1>
        </div>
        <div class="w-full flex justify-center items-center">
            <section class="bg-gray-50 dark:bg-gray-800 w-full">
                <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
                    <div class="slider">
                        <div class="slide">
                            <figure class="max-w-screen-md mx-auto">
                                <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                        fill="currentColor" />
                                </svg>
                                <blockquote>
                                    <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">
                                        "Landwind is just awesome. It contains tons of predesigned components and pages
                                        starting from login screen to complex dashboard. Perfect choice for your next
                                        SaaS
                                        application."
                                    </p>
                                </blockquote>
                                <figcaption class="flex items-center justify-center mt-6 space-x-3">
                                    <img class="w-6 h-6 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                        alt="profile picture" />
                                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                        <div class="pr-3 font-medium text-gray-900 dark:text-white">Micheal Gough</div>
                                        <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at
                                            Google
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="slide">
                            <figure class="max-w-screen-md mx-auto">
                                <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                        fill="currentColor" />
                                </svg>
                                <blockquote>
                                    <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">
                                        "Amazing service, easy to integrate, and very customizable. My team and I love
                                        it!"
                                    </p>
                                </blockquote>
                                <figcaption class="flex items-center justify-center mt-6 space-x-3">
                                    <img class="w-6 h-6 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/elon-musk.png"
                                        alt="profile picture" />
                                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                        <div class="pr-3 font-medium text-gray-900 dark:text-white">Elon Musk</div>
                                        <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at
                                            Tesla
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- some of services section -->
    <div>
        <div class="text-center mb-8">
            <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-slate-900 sm:text-7xl">
                <span class="inline-block">Some of Our
                    <span class="relative whitespace-nowrap text-orange-600">
                        <svg aria-hidden="true" viewBox="0 0 418 42"
                            class="absolute top-2/3 left-0 h-[0.58em] w-full fill-orange-300/70"
                            preserveAspectRatio="none">
                            <path
                                d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                            </path>
                        </svg>
                        <span class="relative">Services</span>
                    </span>
                </span>
            </h1>
        </div>

        <div class="flex flex-wrap p-8">
            <!-- Service 1 -->
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="mb-9 rounded-xl py-8 px-7 shadow-md transition-all hover:shadow-lg sm:p-9 lg:px-6 xl:px-9">
                    <div>
                        <img src="assets/se.jpg" alt="Image 1" class="w-full" />
                    </div>
                    <div>
                        <h3 class="mb-4 text-xl font-bold text-black sm:text-2xl lg:text-xl xl:text-2xl">Solar Panel
                            Installation</h3>
                        <p class="text-base font-medium text-body-color">Expert installation of solar panels for homes,
                            businesses, and industries to harness clean energy. Tailored solutions designed to reduce
                            electricity bills and carbon footprint.</p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="mb-9 rounded-xl py-8 px-7 shadow-md transition-all hover:shadow-lg sm:p-9 lg:px-6 xl:px-9">
                    <div>
                        <img src="assets/s2.png" alt="Image 2" class="w-full h-64 object-cover" />
                    </div>
                    <div>
                        <h3 class="mb-4 text-xl font-bold text-black sm:text-2xl lg:text-xl xl:text-2xl">Solar System
                            Maintenance & Repair</h3>
                        <p class="text-base font-medium text-body-color">Professional cleaning, maintenance, and repair
                            services to keep solar systems running efficiently. Includes performance monitoring to
                            ensure
                            maximum energy output.</p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="mb-9 rounded-xl py-8 px-7 shadow-md transition-all hover:shadow-lg sm:p-9 lg:px-6 xl:px-9">
                    <div>
                        <img src="assets/s3.jpg" alt="Image 3" class="w-full" />
                    </div>
                    <div>
                        <h3 class="mb-4 text-xl font-bold text-black sm:text-2xl lg:text-xl xl:text-2xl">Solar Energy
                            Consultation</h3>
                        <p class="text-base font-medium text-body-color">Customized solar system design and energy
                            audits
                            based on your specific needs and energy goals. Expert consultation to maximize savings and
                            ensure optimal system performance.</p>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="mb-9 rounded-xl py-8 px-7 shadow-md transition-all hover:shadow-lg sm:p-9 lg:px-6 xl:px-9">
                    <div>
                        <img src="assets/s4.webp" alt="Image 4" class="w-full" />
                    </div>
                    <div>
                        <h3 class="mb-4 text-xl font-bold text-black sm:text-2xl lg:text-xl xl:text-2xl">Battery Storage
                            Solutions</h3>
                        <p class="text-base font-medium text-body-color">Installations of solar battery systems for
                            storing
                            excess energy and ensuring backup during outages. Seamless integration with solar setups for
                            uninterrupted power.</p>
                    </div>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="mb-9 rounded-xl py-8 px-7 shadow-md transition-all hover:shadow-lg sm:p-9 lg:px-6 xl:px-9">
                    <div>
                        <img src="assets/s6.jpg" alt="Image 5" class="w-full" />
                    </div>
                    <div>
                        <h3 class="mb-4 text-xl font-bold text-black sm:text-2xl lg:text-xl xl:text-2xl">Solar Financing
                            Options</h3>
                        <p class="text-base font-medium text-body-color">Flexible financing plans with options for solar
                            loans, leasing, and PPAs to make solar affordable. Assistance with accessing rebates and
                            incentives for further savings.</p>
                    </div>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="mb-9 rounded-xl py-8 px-7 shadow-md transition-all hover:shadow-lg sm:p-9 lg:px-6 xl:px-9">
                    <div>
                        <img src="assets/s7.jpg" alt="Image 6" class="w-full h-64 object-cover" />
                    </div>
                    <div>
                        <h3 class="mb-4 text-xl font-bold text-black sm:text-2xl lg:text-xl xl:text-2xl">Solar Water
                            Heaters
                            & Other Products</h3>
                        <p class="text-base font-medium text-body-color">Solar-powered water heating systems and
                            energy-efficient lighting for homes and businesses. Sustainable solutions to reduce reliance
                            on
                            conventional power sources.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- advantage section -->
    <section class="bg-white pb-6">
        <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
            <div class="container mx-auto px-6 p-6 bg-white">

                <div class="mb-16 text-center">
                    <p class="mt-2 text-5xl lg:text-7xl font-bold tracking-tight text-gray-900">Sun Solar - <span
                            class='text-orange-600'>Advantages</span>
                    </p>
                </div>

                <div class="flex flex-wrap my-12">

                    <!-- Cost Savings -->
                    <div class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-orange-600">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl text-black">Cost Savings</div>
                        </div>
                        <p class="leading-loose text-gray-500">Significantly reduce electricity bills with affordable,
                            high-efficiency solar solutions.</p>
                    </div>

                    <!-- Sustainable Energy -->
                    <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-orange-600">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl text-black">Sustainable Energy</div>
                        </div>
                        <p class="leading-loose text-gray-500">Harness renewable solar energy to reduce your carbon
                            footprint and help the environment.</p>
                    </div>

                    <!-- Custom Solutions -->
                    <div class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-orange-600">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl text-black">Custom Solutions</div>
                        </div>
                        <p class="leading-loose text-gray-500">Tailored solar systems designed to meet your unique
                            energy needs, ensuring efficiency.</p>
                    </div>

                    <!-- Expert Installation & Support -->
                    <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r lg:border-b-0 p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-orange-600">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl text-black">Expert Installation & Support</div>
                        </div>
                        <p class="leading-loose text-gray-500">Our professional team ensures seamless installation and
                            offers ongoing technical support.</p>
                    </div>

                    <!-- Advanced Technology -->
                    <div class="w-full border-b md:w-1/2 md:border-r md:border-b-0 lg:w-1/3 lg:border-b-0 p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-orange-600">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl text-black">Advanced Technology</div>
                        </div>
                        <p class="leading-loose text-gray-500">We utilize state-of-the-art technology to provide
                            efficient and long-lasting solar systems.</p>
                    </div>

                    <!-- Increased Property Value -->
                    <div class="w-full md:w-1/2 lg:w-1/3 p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-orange-600">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl text-black">Increased Property Value</div>
                        </div>
                        <p class="leading-loose text-gray-500">Installing solar systems can significantly increase your
                            property value over time.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Vision Section -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center ">
        <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-slate-900 sm:text-7xl">
            <span class="inline-block">Our
                <span class="relative whitespace-nowrap text-orange-600">
                    <svg aria-hidden="true" viewBox="0 0 418 42"
                        class="absolute top-2/3 left-0 h-[0.58em] w-full fill-orange-300/70" preserveAspectRatio="none">
                        <path
                            d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                        </path>
                    </svg>
                    <span class="relative"> Vission
                    </span></span>
            </span>
        </h1>

        <div class="flex flex-col items-center my-8">
            <div class="border-t-4 border-dashed w-full max-w-8xl border-gray-400 mb-4"></div>

            <div class="text-center">
                <h1 class="text-2xl md:text-4xl font-semibold text-gray-700">
                    SOLAR for every home, building and rooftop. SOLAR for every city and village.
                </h1>
                <p class="text-gray-500 mt-2">
                    At Sun Solar, our vision is to create a future where clean, renewable energy powers every home and
                    business. We strive to lead the shift towards sustainable living by providing affordable,
                    innovative, and efficient solar solutions that reduce dependency on traditional energy sources,
                    protect our environment, and empower communities worldwide. We envision a brighter, greener tomorrow
                    where energy is both accessible and environmentally responsible, driving a healthier planet for
                    future generations.
                </p>
            </div>



            <div class="border-t-4 border-dashed w-full max-w-8xl border-gray-400 mt-4"></div>
        </div>

    </div>