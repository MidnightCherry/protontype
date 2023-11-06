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
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
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
    </div>
    <div x-data="{slide: 1, totalSlides: 4,}" class="flex h-screen relative">
        <!-- Main Content (70%) -->
        <div class="w-3/4 bg-cover bg-center relative">
            <div class="absolute inset-0 items-center justify-center">
                {{-- <div x-data="{ activeTab: 0 }">
                    <div x-show="activeTab === 0" x-transition:enter.duration.1500ms x-transition.opacity:leave.duration.1ms class=" toggle-content">
                        <!-- Slider 1 -->
                        <div x-data="{ slide: 1, totalSlides: 4 }" class="toggle-content relative flex items-center justify-center h-screen">
            
                            <!-- Slideshow container -->
                            <div class="slideshow-container w-4/5">
                                <!-- Full-width images with number and caption text -->
                                <template x-for="i in totalSlides" :key="i">
                                    <div x-show="slide === i" class="mySlides" x-transition.delay.50ms>
                                        <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div>
                                        <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_Red.png') }}`" style="width:100%">
                                        <!--<div class="text">Caption Text</div>-->
                                    </div>
                                </template>
                            </div>
                            
                            <!-- Next and previous buttons -->
                                <a x-on:click="slide = (slide === 1) ? totalSlides : slide - 1" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
                                <a x-on:click="slide = (slide === totalSlides) ? 1 : slide + 1" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
                                
                        </div>
                    </div>
                    <div x-show="activeTab === 1" x-transition:enter.duration.1500ms x-transition.opacity:leave.duration.1ms class=" toggle-content">
                        <!-- Slider 2 -->
                        <div x-data="{ slide: 1, totalSlides: 4 }" class="toggle-content relative flex items-center justify-center h-screen">
                            
                            <!-- Slideshow container -->
                            <div class="slideshow-container w-4/5">
                                <!-- Full-width images with number and caption text -->
                                <template x-for="i in totalSlides" :key="i">
                                    <div x-show="slide === i" class="mySlides" x-transition.delay.50ms>
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
                                    <div x-show="slide === i" class="mySlides" x-transition.delay.50ms>
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
                                    <div x-show="slide === i" class="mySlides" x-transition.delay.50ms>
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
                
                    <button x-on:click="activeTab = 0; slide = 1" class="toggle-button">Toggle Tab 1</button>
                    <button x-on:click="activeTab = 1; slide = 1" class="toggle-button">Toggle Tab 2</button>
                    <button x-on:click="activeTab = 2; slide = 1" class="toggle-button">Toggle Tab 3</button>
                    <button x-on:click="activeTab = 3; slide = 1" class="toggle-button">Toggle Tab 4</button>
                    <!-- Add more toggle-button elements for additional tabs as needed -->
                </div>                                   --}}

                <!-- Slider 1 -->
                <div class="static toggle-content flex items-center justify-center h-screen">
    
                    <!-- Slideshow container -->
                    <div class="slideshow-container w-4/5 flex flex-row">
                        <!-- Full-width images with number and caption text -->
                        <template x-for="i in totalSlides" :key="i">
                            <div x-show="slide === i" class="mySlides">
                                {{-- <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div> --}}
                                <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_Red.png') }}`" style="width:100%">
                                <!--<div class="text">Caption Text</div>-->
                            </div>
                        </template>
                    </div>
                    
                    <!-- Next and previous buttons -->
                        <a x-on:click="slide = (slide === 1) ? totalSlides : slide - 1" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
                        <a x-on:click="slide = (slide === totalSlides) ? 1 : slide + 1" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
                        
                </div>

                <!-- Slider 2 -->
                <div class="static toggle-content flex items-center justify-center h-screen">
                    
                    <!-- Slideshow container -->
                    <div class="slideshow-container w-4/5 flex flex-row">
                        <!-- Full-width images with number and caption text -->
                        <template x-for="i in totalSlides" :key="i">
                            <div x-show="slide === i" class="mySlides">
                                {{-- <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div> --}}
                                <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_White.png') }}`" style="width:100%">
                                <!--<div class="text">Caption Text</div>-->
                            </div>
                        </template>
                    </div>
                    
                    <!-- Next and previous buttons -->
                        <a x-on:click="slide = (slide === 1) ? totalSlides : slide - 1" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
                        <a x-on:click="slide = (slide === totalSlides) ? 1 : slide + 1" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
                    
                </div>

                <!-- Slider 3 -->
                <div class="static toggle-content flex items-center justify-center h-screen">
    
                    <!-- Slideshow container -->
                    <div class="slideshow-container w-4/5 flex flex-row">
                        <!-- Full-width images with number and caption text -->
                        <template x-for="i in totalSlides" :key="i">
                            <div x-show="slide === i" class="mySlides transition-opacity">
                                {{-- <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div> --}}
                                <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_Blue.png') }}`" style="width:100%">
                                <!--<div class="text">Caption Text</div>-->
                            </div>
                        </template>
                    </div>
                    
                    <!-- Next and previous buttons -->
                        <a x-on:click="slide = (slide === 1) ? totalSlides : slide - 1" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
                        <a x-on:click="slide = (slide === totalSlides) ? 1 : slide + 1" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
                </div>

                <!-- Slider 4 -->
                <div class="static toggle-content flex items-center justify-center h-screen">
    
                    <!-- Slideshow container -->
                    <div class="slideshow-container w-4/5 flex flex-row">
                        <!-- Full-width images with number and caption text -->
                        <template x-for="i in totalSlides" :key="i">
                            <div x-show="slide === i" class="mySlides" x-transition.opacity>
                                {{-- <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div> --}}
                                <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_Grey.png') }}`" style="width:100%">
                                <!--<div class="text">Caption Text</div>-->
                            </div>
                        </template>
                    </div>
                    
                    <!-- Next and previous buttons -->
                        <a x-on:click="slide = (slide === 1) ? totalSlides : slide - 1" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
                        <a x-on:click="slide = (slide === totalSlides) ? 1 : slide + 1" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
                    
                </div>
            </div>
        </div>
    
        <!-- Side Content (30%) -->
        <div class="relative w-1/4 bg-gray-200">
            <div class="static mt-20 mx-10 ">
                <div class="flex justify-center">
                    <!-- Big Heading with Dual Color -->
                    <h1 class="text-4xl font-extrabold text-center text-black mb-4">Proton</h1>
                    <h1 class="text-5xl font-black text-center text-red-700 italic mb-4">X90</h1>
                </div>    
                
                <!-- Smaller Heading Below Big Heading -->
                <h2 class="text-lg text-black font-semibold mb-4">Colours</h2>

                <!-- Horizontal Small Buttons (3 of them) -->
                <div class="flex justify-center space-x-2 mx-4 my-4">
                    {{-- data-value="0" x-on:click="activeTab = $event.target.getAttribute('data-value')" --}}
                    {{-- <button @click="handleclick" class="toggle-button bg-white hover:bg-blue-700 text-white px-2 py-1 border border-slate-200 rounded">1</button>
                    <button data-value="1" class="toggle-button bg-white hover:bg-blue-700 text-white px-2 py-1 border border-slate-200 rounded">1</button>
                    <button @click="$event.target.getAttribute('message')" message="Hello World">Say Hi</button> --}}

                    <button x-on:click="slide = 1" class="toggle-button bg-white hover:bg-blue-700 text-white px-2 py-1 border border-slate-200 rounded">1</button>
                    <button x-on:click="slide = 1" class="toggle-button bg-gray-400 hover:bg-green-700 text-white px-2 py-1 border border-slate-200 rounded">2</button>
                    <button x-on:click="slide = 1" class="toggle-button bg-gray-700 hover:bg-yellow-700 text-white px-2 py-1 border border-slate-200 rounded">3</button>
                    <button x-on:click="slide = 1" class="toggle-button bg-blue-600 hover:bg-yellow-700 text-white px-2 py-1 border border-slate-200 rounded">4</button>
                    <button x-on:click="slide = 1" class="toggle-button bg-yellow-600 hover:bg-yellow-700 text-white px-2 py-1 border border-slate-200 rounded">5</button>
                    <button x-on:click="slide = 1" class="toggle-button bg-red-600 hover:bg-yellow-700 text-white px-2 py-1 border border-slate-200 rounded">6</button>
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
 
    <script>
        document.addEventListener('alpine:init', () => {
        Alpine.store('buttonValue', {
            on: false,
 
            toggle() {
                this.on = ! this.on
            }
        })
    })
    </script>

    <script>
        jQuery(document).ready(function($) {
        // Hide all elements except the first one
        $('.toggle-content:not(:first)').hide();
        var fadeDuration = 500;

        $('.toggle-button').on('click', function() {
            //get index for next btn
            var index = $('.toggle-button').index(this);

            // Fade out all visible elements with the specified duration
            $('.toggle-content:visible').fadeOut(fadeDuration);
            // $('.toggle-content').eq(index).replaceWith(clones[index])
            // Fade in the corresponding element with the specified duration
            $('.toggle-content').eq(index).fadeIn(fadeDuration);
        });
    });

    </script>

    {{-- <script type="text/javascript">
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
    </script> --}}
    {{-- <script>
        $(document).ready(function() {
            // Hide all elements except the first one
            $('.toggle-content:not(:first)').hide();
            
            // Button click handler
            $('.toggle-button').on('click', function() {
                // Hide all visible elements
                $('.toggle-content').hide();

                // Show the corresponding element
                var index = $(this).data('slider-index');
                $('.toggle-content[data-slider-index="' + index + '"]').fadeIn(500);
                
                // Reset slideIndex to 1 for the corresponding slider
                showSlides(1, $('.toggle-content[data-slider-index="' + index + '"] .mySlides'));
            });

            function showSlides(index, slides) {
                var totalSlides = slides.length;
                var slideIndex = index;
                
                // Next and Previous Button Click Handlers for the specific slider
                slides.find('.prev').click(function() {
                    showSlides(slideIndex -= 1, slides);
                });
                
                slides.find('.next').click(function() {
                    showSlides(slideIndex += 1, slides);
                });
                
                if (slideIndex > totalSlides) {
                    slideIndex = 1;
                }
                if (slideIndex < 1) {
                    slideIndex = totalSlides;
                }
                
                // Hide all slides
                slides.hide();
                
                // Show the current slide
                $(slides[slideIndex - 1]).show();
                
                // Update the slide number text
                slides.find('.numbertext').text(slideIndex + ' / ' + totalSlides);
            }
        });
    </script> --}}

</body>
</html>
