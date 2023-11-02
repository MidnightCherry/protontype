@extends('layouts.carousel')

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
@endsection
