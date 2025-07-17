<div class="gcore-testimonial-slider {{ $class }}" style="{{ $style }}" {{ $attributes }}>
    <div class="gcore-testimonial-track">
        @foreach($testimonials as $testimonial)
            <div class="gcore-testimonial-slide">
                <blockquote class="gcore-testimonial-quote">
                    <p>{{ $testimonial['quote'] }}</p>
                </blockquote>
                <div class="gcore-testimonial-author">
                    @if(isset($testimonial['avatar']))
                        <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['author'] }}" class="gcore-testimonial-avatar">
                    @endif
                    <div class="gcore-author-info">
                        <span class="gcore-author-name">{{ $testimonial['author'] }}</span>
                        @if(isset($testimonial['title']))
                            <span class="gcore-author-title">{{ $testimonial['title'] }}</span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if($showControls)
        <div class="gcore-slider-controls">
            <button class="gcore-slider-prev">&#10094;</button>
            <button class="gcore-slider-next">&#10095;</button>
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slider = document.querySelector('.gcore-testimonial-slider');
            if (!slider) return;

            const track = slider.querySelector('.gcore-testimonial-track');
            const slides = Array.from(track.children);
            const slideWidth = slides[0].getBoundingClientRect().width;
            let currentIndex = 0;

            const setSlidePosition = () => {
                track.style.transform = 'translateX(-' + (currentIndex * slideWidth) + 'px)';
            };

            const moveToNextSlide = () => {
                currentIndex = (currentIndex + 1) % slides.length;
                setSlidePosition();
            };

            const moveToPrevSlide = () => {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                setSlidePosition();
            };

            // Initial positioning
            setSlidePosition();

            // Autoplay
            @if($autoplay)
                let autoPlayInterval = setInterval(moveToNextSlide, {{ $interval }});

                slider.addEventListener('mouseenter', () => clearInterval(autoPlayInterval));
                slider.addEventListener('mouseleave', () => {
                    autoPlayInterval = setInterval(moveToNextSlide, {{ $interval }});
                });
            @endif

            // Controls
            @if($showControls)
                const prevButton = slider.querySelector('.gcore-slider-prev');
                const nextButton = slider.querySelector('.gcore-slider-next');

                if (prevButton) prevButton.addEventListener('click', moveToPrevSlide);
                if (nextButton) nextButton.addEventListener('click', moveToNextSlide);
            @endif

            // Handle window resize
            window.addEventListener('resize', () => {
                // Recalculate slideWidth on resize to ensure correct positioning
                const newSlideWidth = slides[0].getBoundingClientRect().width;
                track.style.transform = 'translateX(-' + (currentIndex * newSlideWidth) + 'px)';
            });
        });
    </script>
</div>