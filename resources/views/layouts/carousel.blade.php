<div x-data="{ slide: 1 }" class="relative">
    <!-- Slideshow container -->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div x-show="slide === 1" class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="{{ asset('images/proton_car_png/X90/x90_Side_1_Red.png') }}" style="width:100%">
            <!--<div class="text">Caption Text 1</div>-->
        </div>
        <div x-show="slide === 2" class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="{{ asset('images/proton_car_png/X90/x90_Front_Red.png') }}" style="width:100%">
            <!--<div class="text">Caption Text 2</div>-->
        </div>
        <div x-show="slide === 3" class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="{{ asset('images/proton_car_png/X90/x90_Side_2_Red.png') }}" style="width:100%">
            <!--<div class="text">Caption Text 3</div>-->
        </div>
        <div x-show="slide === 4" class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="{{ asset('images/proton_car_png/X90/x90_Bank_Red.png') }}" style="width:100%">
            <!--<div class="text">Caption Text 3</div>-->
        </div>
        
        <!-- Next and previous buttons -->
        <a x-on:click="slide--" class="prev absolute top-1/2 left-4 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
        <a x-on:click="slide++" class="next absolute top-1/2 right-4 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
    </div>
    
    <!-- The dots/circles -->
    <div class="flex justify-center mt-2">
        <span x-on:click="slide = 1" class="dot"></span>
        <span x-on:click="slide = 2" class="dot"></span>
        <span x-on:click="slide = 3" class="dot"></span>
    </div>
</div>
