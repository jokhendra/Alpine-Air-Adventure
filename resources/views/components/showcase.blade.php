<div class="mb-[-12px]">
  <div class="flex flex-col items-center justify-center">    
    <!-- Carousel Component -->
    <div 
      x-data="{ 
        activeSlide: 0,
        slides: [
          { type: 'image', src: 'https://dam.destination.one/806001/7b8b4f94048385dcc3e9779db40e400bbe43c1f57a8af663ca1a8d6e3ade7b58/.jpg', alt: 'Power Hang Glider Soaring Above Mountains' },
          { type: 'image', src: 'https://cdn.freedome.it/t/categories/landing/01J32ZFH844CNC7FX4PNRD46DE.jpg?width=1920', alt: 'Power Hang Glider Sunset Flight' },
          { type: 'video', src: 'https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f62a23f76d2ad1ee63c9817ef0f346104b&profile_id=139&oauth2_token_id=57447761', poster: 'https://images.unsplash.com/photo-1506012787146-f92b2d7d6d96?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=600&q=80' },
          { type: 'image', src: 'https://skyjam-aircraft.com/wp-content/uploads/2015/12/Skyjam-Deltatrike-ST-Freestyle_15.jpg', alt: 'Power Hang Glider Equipment Close-up' },
          { type: 'image', src: 'https://southernoceanblog.com/wp-content/uploads/2023/03/screenshot-2023-03-03-at-7.07.24-pm.jpg?w=1024', alt: 'Aerial View from Power Hang Glider' },
          { type: 'image', src: 'https://images.unsplash.com/photo-1452421822248-d4c2b47f0c81?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=600&q=80', alt: 'Power Hang Glider Launch Preparation' },
          { type: 'video', src: 'https://player.vimeo.com/external/434045526.sd.mp4?s=ef9b3f9fcc0f05c7b1c7a5f7d4126a07be0564c7&profile_id=139&oauth2_token_id=57447761', poster: 'https://images.unsplash.com/photo-1473773508845-188df298d2d1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=600&q=80' },
          { type: 'image', src: 'https://images.unsplash.com/photo-1526285849717-482456cd7436?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=600&q=80', alt: 'Power Hang Glider Over Canadian Rocky Mountains' },
          { type: 'image', src: 'https://images.unsplash.com/photo-1465311530779-5241f5a29892?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=600&q=80', alt: 'Coastal Power Hang Gliding Adventure' },
          { type: 'image', src: 'https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=600&q=80', alt: 'Power Hang Glider Forest Expedition View' }
        ],
        autoplay: true,
        autoplaySpeed: 5000,
        init() {
          if (this.autoplay) {
            this.autoplayInterval = setInterval(() => {
              this.next();
            }, this.autoplaySpeed);
          }
        },
        next() {
          this.activeSlide = (this.activeSlide + 1) % this.slides.length;
          this.resetVideoIfActive();
        },
        prev() {
          this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
          this.resetVideoIfActive();
        },
        goToSlide(index) {
          this.activeSlide = index;
          this.resetVideoIfActive();
        },
        resetVideoIfActive() {
          if (this.slides[this.activeSlide].type === 'video') {
            setTimeout(() => {
              const video = document.getElementById(`carousel-video-${this.activeSlide}`);
              if (video) {
                video.currentTime = 0;
                video.play();
              }
            }, 50);
          }
        }
      }"
      x-init="init()"
      @keydown.right.window="next()"
      @keydown.left.window="prev()"
      class="relative w-full mx-auto overflow-hidden rounded-lg shadow-lg"
      style="height: 500px;"
    >
      <!-- Slides Container -->
      <div class="relative h-full">
        <template x-for="(slide, index) in slides" :key="index">
          <div 
            x-show="activeSlide === index" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            class="absolute inset-0 w-full h-full"
          >
            <!-- Image Slide -->
            <template x-if="slide.type === 'image'">
              <img 
                :src="slide.src" 
                :alt="slide.alt" 
                class="object-cover w-full h-full"
                onerror="this.onerror=null; this.src='https://placehold.co/1200x600/3b82f6/ffffff?text=Power+Hang+Glider'; this.alt='Power Hang Glider placeholder'"
              >
            </template>
            
            <!-- Video Slide -->
            <template x-if="slide.type === 'video'">
              <video 
                :id="'carousel-video-' + index"
                :poster="slide.poster"
                class="object-cover w-full h-full"
                controls
                autoplay
                muted
                loop
                onerror="this.onerror=null; this.poster='https://placehold.co/1200x600/3b82f6/ffffff?text=Power+Hang+Glider+Video'"
              >
                <source :src="slide.src" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </template>
          </div>
        </template>
      </div>
      
      <!-- Navigation Arrows -->
      <div class="absolute inset-0 flex items-center justify-between p-4">
        <button 
          @click="prev()"
          class="p-2 text-white bg-black bg-opacity-50 rounded-full hover:bg-opacity-75 focus:outline-none"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button 
          @click="next()"
          class="p-2 text-white bg-black bg-opacity-50 rounded-full hover:bg-opacity-75 focus:outline-none"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
      
      <!-- Indicators -->
      <div class="absolute bottom-4 left-0 right-0">
        <div class="flex items-center justify-center space-x-2">
          <template x-for="(slide, index) in slides" :key="index">
            <button 
              @click="goToSlide(index)" 
              :class="{'bg-white': activeSlide === index, 'bg-white/50': activeSlide !== index}"
              class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none"
            ></button>
          </template>
        </div>
      </div>
    </div>
    
    <!-- Caption -->
    <div class="mt-4 text-center">
      <template x-for="(slide, index) in slides" :key="index">
        <div x-show="activeSlide === index" class="text-lg font-medium">
          <span x-text="slide.type === 'image' ? slide.alt : 'Power Hang Glider Flight Video'"></span>
        </div>
      </template>
    </div>
  </div>
</div>
