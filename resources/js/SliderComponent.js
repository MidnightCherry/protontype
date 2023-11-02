// resources/js/SliderComponent.js
window.Alpine.component('slider', {
    data() {
        return {
            slides: [],
            currentSlide: 0,
        };
    },
    async mounted() {
        const response = await fetch('/api/slides'); // Assuming you have an API endpoint for slider data
        const data = await response.json();
        this.slides = data;
    },
    methods: {
        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        },
        prevSlide() {
            this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
        },
    },
});
