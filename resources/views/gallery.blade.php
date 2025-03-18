@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
@include('common.header')
<body>
  @include('common.nav')
  
  <!-- Gallery Hero Section -->
  <div class="bg-gradient-to-b from-blue-900 to-blue-700 text-white py-16">
    <div class="container mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Gallery</h1>
      <p class="text-lg text-blue-100 max-w-3xl mx-auto">Explore our collection of stunning images showcasing the beauty and excitement of power hang gliding. From breathtaking aerial views to close-up shots of our gliders, these images capture the essence of the sport and the passion of our community.</p>
    </div>
  </div>
  
  <!-- Gallery Filter Section -->
  <div class="bg-gray-100 py-8">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap justify-center gap-4 mb-8">
        <button class="filter-btn active px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors" data-filter="all">All</button>
        <button class="filter-btn px-6 py-2 bg-gray-200 text-gray-800 rounded-full hover:bg-blue-600 hover:text-white transition-colors" data-filter="aerial">Aerial Views</button>
        <button class="filter-btn px-6 py-2 bg-gray-200 text-gray-800 rounded-full hover:bg-blue-600 hover:text-white transition-colors" data-filter="equipment">Equipment</button>
        <button class="filter-btn px-6 py-2 bg-gray-200 text-gray-800 rounded-full hover:bg-blue-600 hover:text-white transition-colors" data-filter="training">Training</button>
        <button class="filter-btn px-6 py-2 bg-gray-200 text-gray-800 rounded-full hover:bg-blue-600 hover:text-white transition-colors" data-filter="events">Events</button>
      </div>
    </div>
  </div>
  
  <!-- Gallery Grid -->
  <div class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Aerial Views -->
        <div class="gallery-item aerial" data-category="aerial">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" 
                 alt="Hang glider soaring over mountains" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">Mountain Soaring</h3>
                <p class="text-sm">Gliding over the majestic mountain ranges</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="gallery-item aerial" data-category="aerial">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1622553716791-25b8e0d3097d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                 alt="Hang glider over coastline" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">Coastal Flight</h3>
                <p class="text-sm">Gliding along the beautiful coastline</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="gallery-item aerial" data-category="aerial">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1506012787146-f92b2d7d6d96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" 
                 alt="Sunset hang gliding" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">Sunset Flight</h3>
                <p class="text-sm">Experiencing the magic of flying during sunset</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Equipment -->
        <div class="gallery-item equipment" data-category="equipment">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1531747118685-ca8fa6e08806?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" 
                 alt="Power hang glider equipment" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">Premium Equipment</h3>
                <p class="text-sm">Our high-quality power hang gliders</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="gallery-item equipment" data-category="equipment">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1534787238916-9ba6764efd4f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" 
                 alt="Hang glider motor" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">Power Units</h3>
                <p class="text-sm">Reliable and efficient motor systems</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Training -->
        <div class="gallery-item training" data-category="training">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1502444330042-d1a1ddf9bb5b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1473&q=80" 
                 alt="Training session" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">Beginner Training</h3>
                <p class="text-sm">Learning the basics of hang gliding</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="gallery-item training" data-category="training">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1517358246897-4c2cbbfbf882?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                 alt="Advanced training" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">Advanced Techniques</h3>
                <p class="text-sm">Mastering advanced flying maneuvers</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Events -->
        <div class="gallery-item events" data-category="events">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1527007622069-1bcb8101ec57?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                 alt="Hang gliding competition" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">Annual Competition</h3>
                <p class="text-sm">Our yearly hang gliding championship</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="gallery-item events" data-category="events">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1526285849717-482456cd7436?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                 alt="Community event" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">Community Gathering</h3>
                <p class="text-sm">Bringing together hang gliding enthusiasts</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- More Aerial Views -->
        <div class="gallery-item aerial" data-category="aerial">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1507812984078-917a274065be?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" 
                 alt="Flying over lake" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">Lake View</h3>
                <p class="text-sm">Soaring over crystal clear waters</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="gallery-item equipment" data-category="equipment">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                 alt="Safety equipment" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">Safety Gear</h3>
                <p class="text-sm">Top-quality safety equipment for pilots</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="gallery-item training" data-category="training">
          <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer h-64">
            <img src="https://images.unsplash.com/photo-1605540436563-5bca919ae766?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" 
                 alt="Instructor with student" 
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
              <div class="p-4 text-white">
                <h3 class="font-bold">One-on-One Instruction</h3>
                <p class="text-sm">Personalized training with expert instructors</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Lightbox Modal -->
  <div id="lightbox" class="fixed inset-0 bg-black/90 z-50 hidden flex items-center justify-center p-4">
    <button id="close-lightbox" class="absolute top-4 right-4 text-white text-4xl hover:text-gray-300">&times;</button>
    <button id="prev-image" class="absolute left-4 text-white text-4xl hover:text-gray-300">&lt;</button>
    <button id="next-image" class="absolute right-4 text-white text-4xl hover:text-gray-300">&gt;</button>
    <img id="lightbox-image" src="" alt="Lightbox image" class="max-h-[80vh] max-w-[90vw] object-contain">
    <div id="lightbox-caption" class="absolute bottom-10 left-0 right-0 text-center text-white">
      <h3 id="lightbox-title" class="text-xl font-bold"></h3>
      <p id="lightbox-description" class="text-sm"></p>
    </div>
  </div>
  
  <!-- Video Section -->
  <div class="bg-gray-900 py-16">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-white">Experience the Thrill</h2>
        <p class="text-lg text-gray-300 mt-4 max-w-3xl mx-auto">Watch our videos to get a taste of the exhilarating experience of power hang gliding</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
        <div class="rounded-lg overflow-hidden shadow-lg">
          <div class="aspect-w-16 aspect-h-9">
            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-full h-full"></iframe>
          </div>
          <div class="bg-gray-800 p-4">
            <h3 class="text-xl font-bold text-white">Mountain Soaring</h3>
            <p class="text-gray-300 mt-2">Experience the thrill of flying over majestic mountain ranges</p>
          </div>
        </div>
        
        <div class="rounded-lg overflow-hidden shadow-lg">
          <div class="aspect-w-16 aspect-h-9">
            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-full h-full"></iframe>
          </div>
          <div class="bg-gray-800 p-4">
            <h3 class="text-xl font-bold text-white">Coastal Adventures</h3>
            <p class="text-gray-300 mt-2">Glide along beautiful coastlines with breathtaking ocean views</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Call to Action -->
  <div class="bg-blue-600 py-16">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-white mb-4">Ready to Experience the Freedom of Flight?</h2>
      <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">Join our community of passionate hang glider pilots and discover the thrill of soaring through the skies.</p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="/contact" class="px-8 py-3 bg-white text-blue-600 font-bold rounded-full hover:bg-blue-50 transition-colors">Contact Us</a>
        <a href="/training" class="px-8 py-3 bg-transparent border-2 border-white text-white font-bold rounded-full hover:bg-white/10 transition-colors">Learn More About Training</a>
      </div>
    </div>
  </div>
  
  @include('common.footer')
  
  <!-- Gallery JavaScript -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Filter functionality
      const filterButtons = document.querySelectorAll('.filter-btn');
      const galleryItems = document.querySelectorAll('.gallery-item');
      
      filterButtons.forEach(button => {
        button.addEventListener('click', function() {
          // Remove active class from all buttons
          filterButtons.forEach(btn => btn.classList.remove('active', 'bg-blue-600', 'text-white'));
          filterButtons.forEach(btn => btn.classList.add('bg-gray-200', 'text-gray-800'));
          
          // Add active class to clicked button
          this.classList.add('active', 'bg-blue-600', 'text-white');
          this.classList.remove('bg-gray-200', 'text-gray-800');
          
          const filter = this.getAttribute('data-filter');
          
          galleryItems.forEach(item => {
            if (filter === 'all' || item.getAttribute('data-category') === filter) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        });
      });
      
      // Lightbox functionality
      const lightbox = document.getElementById('lightbox');
      const lightboxImage = document.getElementById('lightbox-image');
      const lightboxTitle = document.getElementById('lightbox-title');
      const lightboxDescription = document.getElementById('lightbox-description');
      const closeLightbox = document.getElementById('close-lightbox');
      const prevImage = document.getElementById('prev-image');
      const nextImage = document.getElementById('next-image');
      
      let currentIndex = 0;
      const galleryImages = document.querySelectorAll('.gallery-item .relative');
      
      galleryImages.forEach((item, index) => {
        item.addEventListener('click', function() {
          currentIndex = index;
          openLightbox(this);
        });
      });
      
      function openLightbox(item) {
        const img = item.querySelector('img');
        const title = item.querySelector('h3').textContent;
        const description = item.querySelector('p').textContent;
        
        lightboxImage.src = img.src;
        lightboxTitle.textContent = title;
        lightboxDescription.textContent = description;
        
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        document.body.style.overflow = 'hidden';
      }
      
      closeLightbox.addEventListener('click', function() {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        document.body.style.overflow = 'auto';
      });
      
      prevImage.addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        openLightbox(galleryImages[currentIndex]);
      });
      
      nextImage.addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % galleryImages.length;
        openLightbox(galleryImages[currentIndex]);
      });
      
      // Close lightbox with escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
          closeLightbox.click();
        }
      });
    });
  </script>
</body>
</html>
@endsection