 {{-- 
    <div x-data="{ slide: 1, totalSlides: 4 }" class="relative flex items-center justify-center h-screen">
    
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
    --}}
 
        