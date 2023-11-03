{{-- @extends('layouts.carousel')

@section('content')
<div x-data="{ activeSlider: 1 }">
    <!-- Toggle Buttons for Sliders -->
    <div class="flex space-x-2 mb-4">
        @foreach($sliders as $slider)
            <button @click="activeSlider = {{ $slider->id }}"
                :class="{ 'bg-blue-500 text-white': activeSlider === {{ $slider->id }}, 'bg-gray-200': activeSlider !== {{ $slider->id }} }"
                class="px-4 py-2 rounded cursor-pointer">
                Toggle Slider {{ $slider->id }}
            </button>
        @endforeach
    </div>

    <!-- Slider Images -->
    @foreach($sliders as $slider)
        <div x-show="activeSlider === {{ $slider->id }}">
            <!-- Use $slider->images to display images for the current slider -->
            @foreach($slider->images as $image)
                <img src="{{ $image }}" alt="Slider Image">
            @endforeach
        </div>
    @endforeach
</div>
@endsection --}}

<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
    body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
    }

    /* Create a Parallax Effect */
    .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
    background-image: url('/w3images/parallax1.jpg');
    min-height: 100%;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
    background-image: url("/w3images/parallax2.jpg");
    min-height: 400px;
    }

    /* Third image (Contact) */
    .bgimg-3 {
    background-image: url("/w3images/parallax3.jpg");
    min-height: 400px;
    }

    .w3-wide {letter-spacing: 10px;}
    .w3-hover-opacity {cursor: pointer;}

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1600px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
        min-height: 400px;
    }
    }
    </style>
</head>
<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top bg-black text-white">
    <div class="w3-bar" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button">Logo</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right">Login</a>
        <a href="#home" class="w3-bar-item w3-button w3-hide-small w3-right">Home</a>
    </div>

    <!-- Navbar on small screens -->
    <!--<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
        <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
        <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
        <a href="#" class="w3-bar-item w3-button">SEARCH</a>
    </div>-->
    </div>

    <!-- First Parallax Image with Logo Text -->
    {{-- 
    <div class="bgimg-1 w3-display-container" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
        <img src="{{ asset('images/proton_car_png/X90/x90_Side_1_Red.png') }}">
        <!--<span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span>-->
    </div>
    </div>
        --}}

    <div class="flex h-screen relative">
        <!-- Main Content (70%) -->
        <div class="w-3/4 bg-cover bg-center relative">
            <div class="absolute inset-0 flex items-center justify-center">
                <div x-data="{ activeTab: 0 }">
                    <div x-show="activeTab === 0" x-transition:enter.duration.1500ms x-transition.opacity:leave.duration.1ms class=" toggle-content">
                        <!-- Slider 1 -->
                        <div x-data="{ slide: 1, totalSlides: 4 }" class="toggle-content relative flex items-center justify-center h-screen">
            
                            <!-- Slideshow container -->
                            <div class="slideshow-container w-4/5">
                                <!-- Full-width images with number and caption text -->
                                <template x-for="i in totalSlides" :key="i">
                                    <div x-show="slide === i" class="mySlides fade">
                                        <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div>
                                        <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_Red.png') }}`" style="width:100%">
                                        <!--<div class="text">Caption Text</div>-->
                                    </div>
                                </template>
                            </div>
                            
                            <!-- Next and previous buttons -->
                                <a x-on:click="slide = (slide === 1) ? totalSlides : slide - 1" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
                                <a x-on:click="slide = (slide === totalSlides) ? 1 : slide + 1" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
                                
                            <!-- The dots/circles -->
                            <div class="flex justify-center mt-2">
                                <template x-for="i in totalSlides" :key="i">
                                    <span x-on:click="slide = i" class="dot mr-2 cursor-pointer" :class="{ 'bg-gray-900': slide === i }"></span>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div x-show="activeTab === 1" x-transition:enter.duration.1500ms x-transition.opacity:leave.duration.1ms class=" toggle-content">
                        <!-- Slider 2 -->
                        <div x-data="{ slide: 1, totalSlides: 4 }" class="toggle-content relative flex items-center justify-center h-screen">
                            
                            <!-- Slideshow container -->
                            <div class="slideshow-container w-4/5">
                                <!-- Full-width images with number and caption text -->
                                <template x-for="i in totalSlides" :key="i">
                                    <div x-show="slide === i" class="mySlides fade">
                                        <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div>
                                        <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_White.png') }}`" style="width:100%">
                                        <!--<div class="text">Caption Text</div>-->
                                    </div>
                                </template>
                            </div>
                            
                            <!-- Next and previous buttons -->
                                <a x-on:click="slide = (slide === 1) ? totalSlides : slide - 1" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
                                <a x-on:click="slide = (slide === totalSlides) ? 1 : slide + 1" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
                                
                            <!-- The dots/circles -->
                            <div class="flex justify-center mt-2">
                                <template x-for="i in totalSlides" :key="i">
                                    <span x-on:click="slide = i" class="dot mr-2 cursor-pointer" :class="{ 'bg-gray-900': slide === i }"></span>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div x-show="activeTab === 2" x-transition:enter.duration.1500ms x-transition.opacity:leave.duration.1ms class=" toggle-content">
                        <!-- Slider 3 -->
                        <div x-data="{ slide: 1, totalSlides: 4 }" class="toggle-content relative flex items-center justify-center h-screen">
            
                            <!-- Slideshow container -->
                            <div class="slideshow-container w-4/5">
                                <!-- Full-width images with number and caption text -->
                                <template x-for="i in totalSlides" :key="i">
                                    <div x-show="slide === i" class="mySlides fade">
                                        <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div>
                                        <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_Blue.png') }}`" style="width:100%">
                                        <!--<div class="text">Caption Text</div>-->
                                    </div>
                                </template>
                            </div>
                            
                            <!-- Next and previous buttons -->
                                <a x-on:click="slide = (slide === 1) ? totalSlides : slide - 1" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
                                <a x-on:click="slide = (slide === totalSlides) ? 1 : slide + 1" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
                                
                            <!-- The dots/circles -->
                            <div class="flex justify-center mt-2">
                                <template x-for="i in totalSlides" :key="i">
                                    <span x-on:click="slide = i" class="dot mr-2 cursor-pointer" :class="{ 'bg-gray-900': slide === i }"></span>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div x-show="activeTab === 3" x-transition:enter.duration.1500ms x-transition.opacity:leave.duration.1ms class=" toggle-content">
                        <!-- Slider 4 -->
                        <div x-data="{ slide: 1, totalSlides: 4 }" class="toggle-content relative flex items-center justify-center h-screen">
            
                            <!-- Slideshow container -->
                            <div class="slideshow-container w-4/5">
                                <!-- Full-width images with number and caption text -->
                                <template x-for="i in totalSlides" :key="i">
                                    <div x-show="slide === i" class="mySlides fade">
                                        <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div>
                                        <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_Grey.png') }}`" style="width:100%">
                                        <!--<div class="text">Caption Text</div>-->
                                    </div>
                                </template>
                            </div>
                            
                            <!-- Next and previous buttons -->
                                <a x-on:click="slide = (slide === 1) ? totalSlides : slide - 1" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
                                <a x-on:click="slide = (slide === totalSlides) ? 1 : slide + 1" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
                                
                            <!-- The dots/circles -->
                            <div class="flex justify-center mt-2">
                                <template x-for="i in totalSlides" :key="i">
                                    <span x-on:click="slide = i" class="dot mr-2 cursor-pointer" :class="{ 'bg-gray-900': slide === i }"></span>
                                </template>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Add more toggle-content elements for additional tabs as needed -->
                
                    <button x-on:click="activeTab = 0" class="toggle-button">Toggle Tab 1</button>
                    <button x-on:click="activeTab = 1" class="toggle-button">Toggle Tab 2</button>
                    <button x-on:click="activeTab = 2" class="toggle-button">Toggle Tab 3</button>
                    <button x-on:click="activeTab = 3" class="toggle-button">Toggle Tab 4</button>
                    <!-- Add more toggle-button elements for additional tabs as needed -->
                </div>
                {{-- 
                <img src="{{ asset('images/proton_car_png/X90/x90_Side_1_Red.png') }}" class="max-w-full h-auto">
                <div x-data="{ sliders: [false, false, false] }">
                    <!-- Button to toggle sliders -->
                    <button @click="sliders = sliders.map(slider => !slider)">Toggle Sliders</button>
                    
                    <!-- Sliders -->
                    <div x-show="sliders[0]" class="slider-container">
                        <!-- Slider content for slider 1 -->
                        
                    </div>
                    <div x-show="sliders[1]" class="slider-container">
                        <!-- Slider content for slider 2 -->
                        
                    </div>
                    <div x-show="sliders[2]" class="slider-container">
                        <!-- Slider content for slider 3 -->
                        
                    </div>
                </div>
                    --}}
                    
                {{-- <div x-data="{
                    activeSlider: 1,
                    sliders: [1, 2, 3] // Number of sliders}">

                    <!-- Buttons to toggle sliders -->                 
                    <div class="flex space-x-2 mb-4">
                        <template x-for="slider in sliders">
                            <button @click="activeSlider = slider"
                                :class="{ 'bg-blue-500 text-white': activeSlider === slider, 'bg-gray-200': activeSlider !== slider }"
                                class="px-4 py-2 rounded cursor-pointer">
                                Slider {{ slider }}
                            </button>
                        </template>
                    </div>
                
                    <!-- Sliders -->
                    <div x-show="activeSlider === 1">
                        <!-- Slider 1 content -->
                        <div class="relative" x-data="{
                            images: [
                                'images/proton_car_png/X90/x90_Side_1_Red.png',
                                'images/proton_car_png/X90/x90_Side_2_Red.png',
                                'images/proton_car_png/X90/x90_Side_3_Red.png',
                                'images/proton_car_png/X90/x90_Side_4_Red.png',
                                // Add more image paths here
                            ],
                            currentIndex: 0,
                            totalImages: 3 // Change this based on the number of images
                            }">
                                <span class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer" @click="currentIndex = (currentIndex - 1 + totalImages) % totalImages">
                                    <!-- Font Awesome left arrow icon -->
                                    <i class="fas fa-angle-left"></i> 
                                </span>
                                <img x-bind:src="images[currentIndex]" alt="Slider Image">
                                <span class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer" @click="currentIndex = (currentIndex + 1) % totalImages">
                                    <!-- Font Awesome right arrow icon -->
                                    <i class="fas fa-angle-right"></i> 
                                </span>
                        </div>
                    </div>
                    <div x-show="activeSlider === 2">
                        <!-- Slider 2 content -->
                        <div class="relative" x-data="{
                            images: [
                                'images/proton_car_png/X90/x90_Side_1_White.png',
                                'images/proton_car_png/X90/x90_Side_2_White.png',
                                'images/proton_car_png/X90/x90_Side_3_White.png',
                                'images/proton_car_png/X90/x90_Side_4_White.png',
                                // Add more image paths here
                            ],
                            currentIndex: 0,
                            totalImages: 3 // Change this based on the number of images
                            }">
                                <span class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer" @click="currentIndex = (currentIndex - 1 + totalImages) % totalImages">
                                    <i class="fas fa-angle-left"></i> <!-- Font Awesome left arrow icon -->
                                </span>
                                <img x-bind:src="images[currentIndex]" alt="Slider Image">
                                <span class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer" @click="currentIndex = (currentIndex + 1) % totalImages">
                                    <i class="fas fa-angle-right"></i> <!-- Font Awesome right arrow icon -->
                                </span>
                        </div>
                    </div>
                    <div x-show="activeSlider === 3">
                        <!-- Slider 3 content -->
                        <div class="relative" x-data="{
                            images: [
                                'images/proton_car_png/X90/x90_Side_1_Grey.png',
                                'images/proton_car_png/X90/x90_Side_2_Grey.png',
                                'images/proton_car_png/X90/x90_Side_3_Grey.png',
                                'images/proton_car_png/X90/x90_Side_4_Grey.png',
                                // Add more image paths here
                            ],
                            currentIndex: 0,
                            totalImages: 3 // Change this based on the number of images
                            }">
                                <span class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer" @click="currentIndex = (currentIndex - 1 + totalImages) % totalImages">
                                    <i class="fas fa-angle-left"></i> <!-- Font Awesome left arrow icon -->
                                </span>
                                <img x-bind:src="images[currentIndex]" alt="Slider Image">
                                <span class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer" @click="currentIndex = (currentIndex + 1) % totalImages">
                                    <i class="fas fa-angle-right"></i> <!-- Font Awesome right arrow icon -->
                                </span>
                        </div>
                    </div>
                </div> --}}
                 
                {{-- 
                    <div x-data="{
                    activeSlider: 1,
                    sliders: [
                        { id: 1, images: [
                            'images/proton_car_png/X90/x90_Side_1_Red.png',
                            'images/proton_car_png/X90/x90_Side_2_Red.png',
                            'images/proton_car_png/X90/x90_Side_3_Red.png',
                            'images/proton_car_png/X90/x90_Side_4_Red.png',
                            // Add more image paths here
                        ] },
                        { id: 2, images: [
                            'images/proton_car_png/X90/x90_Side_1_White.png',
                            'images/proton_car_png/X90/x90_Side_2_White.png',
                            'images/proton_car_png/X90/x90_Side_3_White.png',
                            'images/proton_car_png/X90/x90_Side_4_White.png',
                            // Add more image paths here
                        ] },
                        { id: 3, images: [
                            'images/proton_car_png/X90/x90_Side_1_Grey.png',
                            'images/proton_car_png/X90/x90_Side_2_Grey.png',
                            'images/proton_car_png/X90/x90_Side_3_Grey.png',
                            'images/proton_car_png/X90/x90_Side_4_Grey.png',
                            // Add more image paths here
                        ] }
                    ]
                    }">
                    <!-- Slider Images -->
                    <div x-show="activeSlider === slider.id" x-for="slider in sliders">
                        <template x-for="(image, index) in slider.images">
                            <img x-show="index === 0" x-bind:src="image" alt="Slider Image">
                        </template>
                    </div>
                
                    <!-- Toggle Buttons for Sliders -->
                    <div class="mb-4">
                        <template x-for="slider in sliders">
                            <button @click="activeSlider = slider.id"
                                :class="{ 'bg-blue-500 text-white': activeSlider === slider.id, 'bg-gray-200': activeSlider !== slider.id }"
                                class="px-4 py-2 rounded cursor-pointer mb-2">
                                Toggle Slider {{ slider.id }}
                            </button>
                        </template>
                    </div>
                </div>
                    --}}
                   
                    
                {{-- @yield('content')   --}}                     
                
            </div>
        </div>
    
        <!-- Side Content (30%) -->
        <div class="relative w-1/4 bg-gray-200">
            <div class="static mt-20 mx-10 ">
                <div class="flex justify-center">
                    <!-- Big Heading with Dual Color -->
                    <h1 class="text-4xl font-extrabold text-center text-black mb-4">Proton</h1>
                    <h1 class="text-5xl font-black text-center text-red-700 italic mb-4">X70</h1>
                </div>    
                
                <!-- Smaller Heading Below Big Heading -->
                <h2 class="text-lg text-black font-semibold mb-4">Colours</h2>

                <!-- Horizontal Small Buttons (3 of them) -->
                <div class="flex justify-center space-x-2 mx-4 my-4">
                    <button x-on:click="activeTab = 0" class="toggle-button bg-white hover:bg-blue-700 text-white px-2 py-1 border border-slate-200 rounded">1</button>
                    <button x-on:click="activeTab = 1" class="toggle-button bg-gray-400 hover:bg-green-700 text-white px-2 py-1 border border-slate-200 rounded">2</button>
                    <button x-on:click="activeTab = 2" class="toggle-button bg-gray-700 hover:bg-yellow-700 text-white px-2 py-1 border border-slate-200 rounded">3</button>
                    <button x-on:click="activeTab = 3" class="toggle-button bg-blue-600 hover:bg-yellow-700 text-white px-2 py-1 border border-slate-200 rounded">4</button>
                    <button x-on:click="activeTab = 4" class="toggle-button bg-yellow-600 hover:bg-yellow-700 text-white px-2 py-1 border border-slate-200 rounded">5</button>
                    <button x-on:click="activeTab = 5" class="toggle-button bg-red-600 hover:bg-yellow-700 text-white px-2 py-1 border border-slate-200 rounded">6</button>
                </div>

                <!-- Smaller Heading Below Big Heading -->
                <h2 class="text-lg text-black font-semibold mb-4">Variants</h2>

                <!-- Vertical Medium Buttons (3 of them) -->
                <div class="flex flex-col space-y-2 mb-4">
                    <button class="bg-red-50 hover:bg-red-700 text-white px-4 py-2 border border-slate-400  rounded">1.8 TGDi</button>
                    <button class="bg-red-700 hover:bg-red-700 text-white px-4 py-2 border border-slate-200  rounded">1.8 TGDi</button>
                    <button class="bg-red-700 hover:bg-red-700 text-white px-4 py-2 border border-slate-200  rounded">1.8 TGDi</button>
                </div>

                <!-- Smaller Heading Below Big Heading -->
                <h2 class="text-lg text-black font-semibold mb-4">Wheels</h2>

                <!-- Vertical Medium Buttons (3 of them) -->
                <div class="flex flex-col space-y-2 mb-4">
                    <button class="bg-red-700 hover:bg-red-700 text-white px-4 py-2 rounded">18"</button>
                    <button class="bg-red-700 hover:bg-red-700 text-white px-4 py-2 rounded">17"</button>
                </div>

                <!-- Smaller Heading Below Big Heading -->
                <h2 class="text-lg text-black font-semibold mb-4">Wheels</h2>

                <!-- Dropdown Menu -->
                <div class="relative">
                    <button class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded block w-full">Dropdown</button>
                    <!-- Dropdown Content (hidden by default) -->
                    <div class="absolute mt-2 w-32 bg-white border border-gray-300 py-2 z-10 hidden">
                        <!-- Dropdown Items go here -->
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Item 1</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Item 2</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Item 3</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Middle Footer -->
        <div class="bg-gray-400 absolute inset-x-1/4 bottom-0 h-16 w-1/3 justify-center item-center content-center rounded -mb-1">
            <p class="text-white text-center my-5">This is middle footer</p>
        </div>
    </div>

    <!---<div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">14+</span><br>
        Partners
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">55+</span><br>
        Projects Done
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">89+</span><br>
        Happy Clients
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">150+</span><br>
        Meetings
    </div>
    </div>-->

    <!-- Second Parallax Image with Portfolio Text -->
    <!--<div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
    </div>
    </div>-->

    <!-- Container (Portfolio Section) -->
    <!--<div class="w3-content w3-container w3-padding-64" id="portfolio">
    <h3 class="w3-center">MY WORK</h3>
    <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>-->

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <!--<div class="w3-row-padding w3-center">
        <div class="w3-col m3">
        <img src="/w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
        </div>

        <div class="w3-col m3">
        <img src="/w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
        </div>

        <div class="w3-col m3">
        <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
        </div>

        <div class="w3-col m3">
        <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
        </div>
    </div>

    <div class="w3-row-padding w3-center w3-section">
        <div class="w3-col m3">
        <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
        </div>

        <div class="w3-col m3">
        <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
        </div>

        <div class="w3-col m3">
        <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
        </div>

        <div class="w3-col m3">
        <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
        </div>
        <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
    </div>
    </div>-->

    <!-- Modal for full size images on click-->
    <!--<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
    </div>-->

    <!-- Third Parallax Image with Portfolio Text -->
    <!--<div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
    </div>
    </div>-->

    <!-- Container (Contact Section) -->
    <!--<div class="w3-content w3-container w3-padding-64" id="contact">
    <h3 class="w3-center">WHERE I WORK</h3>
    <p class="w3-center"><em>I'd love your feedback!</em></p>

    <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container">
        <img src="/w3images/map.jpg" class="w3-image w3-round" style="width:100%">
        </div>
        <div class="w3-col m8 w3-panel">
        <div class="w3-large w3-margin-bottom">
            <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Chicago, US<br>
            <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
            <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
        </div>
        <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
        <form action="/action_page.php" target="_blank">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
            </div>
            <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
            <button class="w3-button w3-black w3-right w3-section" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
        </form>
        </div>
    </div>
    </div>-->

    <!-- Footer -->
    <!--<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
    </footer>
    
    <script>
    // Modal Image Gallery
    function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>-->

    <!--<script>
        jQuery(document).ready(function($) {
        // Hide all elements except the first one
        $('.toggle-content:visible').hide();

        // Button click handler
        $('.toggle-button').on('click', function() {
            // Fade out all visible elements with the specified duration
            $('.toggle-content:visible').fadeOut(fadeDuration);

            // Fade in the corresponding element with the specified duration
            var index = $('.toggle-button').index(this);
            $('.toggle-content').eq(index).fadeIn(fadeDuration);
        });
    });

    </script>-->

    <!---<script type="text/javascript">
        $(document).ready(function(){
            // Show the first element by default
            $(".toggleContent:first").addClass("active");
    
            // Toggle elements when buttons are clicked
            $(".toggleElem").on("click", function(){
                // Get the target element ID from the data attribute
                var targetElement = $(this).data("target");
                var $target = $("#" + targetElement);
    
                // Toggle the active class to show/hide the content
                if ($target.hasClass("active")) {
                    $target.removeClass("active");
                } else {
                    // Hide all elements
                    $(".toggleContent").removeClass("active");
    
                    // Show only the target element
                    $target.addClass("active");
                }
            });
        });
    </script>--->

</body>
</html>
