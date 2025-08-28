<!-- Hero Section with Swiper - Different designs for mobile and desktop -->
<section id="hero" class="relative w-full overflow-hidden">
  <div class="swiper hero-swiper w-full">
      <div class="swiper-wrapper">
        @foreach ($sliders as $slider)
          <div class="swiper-slide relative">
          <!-- Mobile Background - Cover to always fill -->
          <div class="mobile-bg absolute inset-0 w-full h-[450px] bg-cover bg-center md:hidden"
               style="background-image: url('{{ $slider->thumbnail }}');"></div>
        
          <!-- Desktop Background - Cover for better look -->
          <div class="desktop-bg absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat hidden md:block"
               style="background-image: url('{{ $slider->thumbnail }}');"></div>
            
            
            <!-- Content -->
            @if ($slider->link)
              <div class="relative z-10 h-full flex items-center justify-center px-4">
                  <div class="text-center">
                    <!-- Mobile Button Style -->
                    <a href="{{ $slider->link }}" 
                       class="mobile-btn md:hidden inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-8 rounded-xl shadow-lg transition-all duration-300 text-base border-2 border-white/20">
                          {{ $slider->button_text }}
                    </a>
                    
                    <!-- Desktop Button Style -->
                    <a href="{{ $slider->link }}" 
                       class="desktop-btn hidden md:inline-block bg-white/90 hover:bg-white text-gray-800 font-semibold py-3 px-8 rounded-lg shadow-xl transition-all duration-300 text-lg backdrop-blur-sm">
                          {{ $slider->button_text }}
                    </a>
                  </div>
              </div>
            @endif
          </div>
        @endforeach
      </div>
      
      <!-- Pagination - Different styles for mobile/desktop -->
      <div class="swiper-pagination"></div>
  </div>
</section>

<style>
/* Hero Height - Full screen coverage */
#hero {
  /* Mobile: Full height coverage */
  height: 60vh;
  min-height: 400px;
}

@media (min-width: 768px) {
  #hero {
    height: 65vh;
    min-height: 450px;
  }
}

@media (min-width: 1024px) {
  #hero {
    height: 75vh;
    min-height: 500px;
  }
}

@media (min-width: 1280px) {
  #hero {
    height: 80vh;
    min-height: 600px;
  }
}

/* Swiper Container - Full coverage */
.hero-swiper {
  width: 100%;
  height: 100%;
}

.hero-swiper .swiper-slide {
  width: 100%;
  height: 100%;
}

/* Make sure backgrounds cover everything including pagination area */
.mobile-bg, .desktop-bg {
  height: 100% !important;
  width: 100% !important;
  top: 0 !important;
  left: 0 !important;
  right: 0 !important;
  bottom: 0 !important;
}

/* Mobile Background Styles - Show full image covering everything */
.mobile-bg {
  background-size: contain !important;
  background-position: center !important;
  background-repeat: no-repeat !important;
  z-index: 1;
}

/* Desktop Background Styles - Cover everything */
.desktop-bg {
  background-size: cover !important;
  background-position: center !important;
  background-repeat: no-repeat !important;
  z-index: 1;
}

/* Background color should cover everything */
.hero-swiper .swiper-slide > div:last-child {
  z-index: 0 !important;
}

/* Mobile Pagination - Floating over image */
@media (max-width: 767px) {
  .hero-swiper .swiper-pagination {
    bottom: 20px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    width: auto !important;
    z-index: 20 !important;
    position: absolute !important;
  }
  
  .hero-swiper .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: rgba(255, 255, 255, 0.9);
    opacity: 0.7;
    margin: 0 5px;
    transition: all 0.3s ease;
    border: 2px solid rgba(179, 32, 37, 0.8);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
  }
  
  .hero-swiper .swiper-pagination-bullet-active {
    background: #b32025;
    opacity: 1;
    transform: scale(1.3);
    border-color: #ffffff;
    box-shadow: 0 3px 12px rgba(179, 32, 37, 0.5);
  }
}

/* Desktop Pagination - Floating over image */
@media (min-width: 768px) {
  .hero-swiper .swiper-pagination {
    bottom: 25px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    width: auto !important;
    z-index: 20 !important;
    position: absolute !important;
  }
  
  .hero-swiper .swiper-pagination-bullet {
    width: 14px;
    height: 14px;
    background: rgba(255, 255, 255, 0.8);
    opacity: 0.7;
    margin: 0 6px;
    transition: all 0.3s ease;
    border: 2px solid rgba(179, 32, 37, 0.6);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  }
  
  .hero-swiper .swiper-pagination-bullet-active {
    background: #b32025;
    opacity: 1;
    transform: scale(1.2);
    border-color: #ffffff;
    box-shadow: 0 3px 15px rgba(179, 32, 37, 0.4);
  }
}

/* Ensure content is above background */
.hero-swiper .swiper-slide > div:first-child {
  z-index: 10 !important;
}

/* Fix any gray background issues */
.hero-swiper,
.hero-swiper .swiper-wrapper,
.hero-swiper .swiper-slide {
  background: transparent !important;
}

/* Ensure no gray background shows through */
#hero {
  background: transparent !important;
}

/* Make sure pagination doesn't create gray background */
.hero-swiper .swiper-pagination {
  background: transparent !important;
  padding: 0 !important;
  margin: 0 !important;
}

/* Alternative background for mobile if needed */
.mobile-bg-fallback {
  background: linear-gradient(135deg, #b32025 0%, #8b1a1e 100%) !important;
}

/* Alternative mobile style - if you want to stretch the image */
@media (max-width: 767px) {
  .mobile-bg-stretch {
    background-size: 100% 100% !important;
  }
}

/* Navigation Buttons - Desktop only */
.hero-swiper .swiper-button-next,
.hero-swiper .swiper-button-prev {
  color: #ffffff;
  background: rgba(0, 0, 0, 0.4);
  width: 50px;
  height: 50px;
  border-radius: 50%;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
}

.hero-swiper .swiper-button-next:hover,
.hero-swiper .swiper-button-prev:hover {
  background: rgba(179, 32, 37, 0.7);
  transform: scale(1.1);
}

.hero-swiper .swiper-button-next::after,
.hero-swiper .swiper-button-prev::after {
  font-size: 18px;
  font-weight: bold;
}

/* Mobile Button Styling */
.mobile-btn {
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  box-shadow: 0 8px 25px rgba(179, 32, 37, 0.3);
  text-shadow: none;
  font-weight: 600;
  letter-spacing: 0.5px;
  min-width: 160px;
  transform: translateY(0);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  border: 2px solid rgba(179, 32, 37, 0.5);
}

.mobile-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 35px rgba(179, 32, 37, 0.4);
  background: rgba(179, 32, 37, 0.9);
}

.mobile-btn:active {
  transform: translateY(0);
}

/* Desktop Button Styling */
.desktop-btn {
  backdrop-filter: blur(15px);
  -webkit-backdrop-filter: blur(15px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.3);
  font-weight: 600;
  letter-spacing: 0.3px;
  min-width: 180px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.desktop-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 40px rgba(179, 32, 37, 0.3);
  background: rgba(255, 255, 255, 0.95);
  border-color: rgba(179, 32, 37, 0.4);
}

/* Loading State */
.hero-swiper {
  opacity: 0;
  transition: opacity 0.6s ease;
}

.hero-swiper.swiper-initialized {
  opacity: 1;
}

/* Touch Optimization */
.hero-swiper .swiper-slide {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

/* Prevent text selection on touch */
.hero-swiper * {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
}

/* Mobile specific improvements */
@media (max-width: 640px) {
  /* Ensure full image visibility */
  .mobile-bg {
    background-size: contain !important;
  }
  
  /* Alternative: if you want to stretch image to fill */
  .mobile-bg.stretch {
    background-size: 100% 100% !important;
  }
  
  /* Alternative: if you want to show more of the image width */
  .mobile-bg.fit-width {
    background-size: 100% auto !important;
  }
}

/* Very small screens */
@media (max-width: 480px) {
  #hero {
    height: 55vh;
    min-height: 350px;
  }
  
  .mobile-btn {
    font-size: 14px;
    py-3 px-6;
    min-width: 140px;
  }
}

/* Large screens optimization */
@media (min-width: 1920px) {
  #hero {
    height: 85vh;
    max-height: 800px;
  }
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
  if (typeof Swiper === 'undefined') {
    console.error('Swiper library not loaded');
    return;
  }

  const swiperElement = document.querySelector('.hero-swiper');
  if (!swiperElement) {
    console.error('Swiper element not found');
    return;
  }

  // Detect if mobile
  const isMobile = window.innerWidth < 768;

  const swiper = new Swiper('.hero-swiper', {
    loop: true,
    autoplay: {
      delay: isMobile ? 4000 : 5000,
      disableOnInteraction: false,
      pauseOnMouseEnter: !isMobile,
    },
    
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: !isMobile,
      dynamicMainBullets: isMobile ? 1 : 3,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    effect: 'slide',
    speed: isMobile ? 600 : 800,
    
    // Touch settings
    touchRatio: 1,
    touchAngle: 45,
    grabCursor: true,
    
    // Responsive breakpoints
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 500,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
      },
      1024: {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 1000,
      }
    },
    
    on: {
      init: function() {
        this.el.classList.add('swiper-initialized');
      },
      touchStart: function() {
        this.autoplay.stop();
      },
      touchEnd: function() {
        setTimeout(() => {
          this.autoplay.start();
        }, 2000);
      }
    }
  });

  // Handle visibility change
  document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
      swiper.autoplay.stop();
    } else {
      swiper.autoplay.start();
    }
  });

  // Handle resize
  let resizeTimer;
  window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      swiper.update();
    }, 250);
  });
});
</script>

<!-- Swiper CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
