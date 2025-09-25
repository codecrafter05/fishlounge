<!doctype html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Primary Meta Tags -->
  <title>فيش لاونج | Fish Lounge </title>
  <link rel="canonical" href="{{ url()->current() }}"/>
  <meta name="title" content="فيش لاونج | Fish Lounge – أفضل المأكولات البحرية في مجمّع الأفنيوز البحرين">
  <meta name="description" content="تذوّق أشهى المأكولات البحرية الطازجة في فيش لاونج – مجمّع الأفنيوز البحرين. أسماك مشوية، روبيان، سلطات بحرية، سوب بحري، وأطباق بلاتر مشاركة. أجواء عصرية مطلة على البحر. | Enjoy fresh seafood at Fish Lounge – Avenues Mall Bahrain: grilled fish, shrimp, seafood salads & soups, shared platters, and a modern seaside vibe.">
  <meta name="keywords" content="فيش لاونج, مطعم بحري, مأكولات بحرية, أسماك, روبيان, سلطعون, بلاتر بحري, مجمّع الأفنيوز, الأفنيوز البحرين, المنامة, مطاعم البحرين, Fish Lounge, seafood restaurant, grilled fish, shrimp, crab, seafood platter, Avenues Mall Bahrain, Manama restaurants">
  <meta name="author" content="Fish Lounge | فيش لاونج">
  <meta name="robots" content="index, follow">
  <meta name="language" content="Arabic, English">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="restaurant">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="فيش لاونج | Fish Lounge – أفضل المأكولات البحرية في مجمّع الأفنيوز البحرين">
  <meta property="og:description" content="مأكولات بحرية طازجة وأجواء عصرية مطلة على البحر في مجمّع الأفنيوز البحرين. أسماك مشوية، روبيان، بلاتر مشاركة والمزيد. | Fresh seafood & modern seaside vibes at Avenues Mall Bahrain.">
  <meta property="og:image" content="{{ asset('images/fishlounge-og.jpg') }}">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Fish Lounge – طاولة مأكولات بحرية متنوعة">
  <meta property="og:site_name" content="Fish Lounge | فيش لاونج">
  <meta property="og:locale" content="ar_BH">
  <meta property="og:locale:alternate" content="en_US">
  
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="{{ url()->current() }}">
  <meta name="twitter:title" content="فيش لاونج | Fish Lounge – أفضل المأكولات البحرية في مجمّع الأفنيوز البحرين">
  <meta name="twitter:description" content="استمتع بمأكولات بحرية طازجة وأجواء عصرية مطلة على البحر في مجمّع الأفنيوز البحرين. | Fresh seafood & modern vibes at Avenues Mall Bahrain.">
  <meta name="twitter:image" content="{{ asset('images/fishlounge-og.jpg') }}">

  <!-- PWA Meta Tags -->
  <meta name="theme-color" content="#1e40af" />
  <meta name="msapplication-TileColor" content="#1e40af" />
  <meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="apple-mobile-web-app-title" content="Fish Lounge" />
  <meta name="application-name" content="Fish Lounge" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="msapplication-tap-highlight" content="no" />

  <!-- Canonical URL -->
  <link rel="canonical" href="{{ url()->current() }}" />
  
  <!-- PWA Manifest -->
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}" />
  
  <!-- Favicon and Icons -->
  <link rel="icon" type="image/png" href="{{ asset('images/logo2.png') }}" />
  <link rel="apple-touch-icon" href="{{ asset('images/logo1.png') }}" />
  <link rel="apple-touch-icon" sizes="16x16" href="{{ asset('images/logo1.png') }}" />
  <link rel="apple-touch-icon" sizes="32x32" href="{{ asset('images/logo1.png') }}" />
  <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('images/logo2.png') }}" />
  <link rel="apple-touch-icon" sizes="512x512" href="{{ asset('images/logo3.png') }}" />
  <link rel="stylesheet" href="{{ asset('css/fish.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pwa.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Loader -->
  <div class="loader" id="loader">
    <div class="loader-content">
      <div class="loader-logo">
        <img src="{{ asset('images/logo2.png') }}" alt="Fish Lounge" width="300" height="300" decoding="async">
      </div>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" id="hero-section">
    <div class="hero-content">
      <img src="{{ asset('images/logo3.png') }}" alt="Fish Lounge" class="hero-logo" width="600" height="600" decoding="async">
    </div>
  </section>

  <div class="page">
    
    <header class="header">
      <div class="brand">
        <img class="brand__mark" src="{{ asset('images/logo1.png') }}" alt="Fish Lounge">
      </div>

      <!-- Language Switch under the logo -->
      <div class="lang-switch">
        <button class="is-active" data-lang="en">English</button>
        <span>|</span>
        <button data-lang="ar">العربية</button>
      </div>
    </header>

    <!-- Categories (keep this pattern) -->
    <section class="stories">
      <button class="stories__nav left" aria-label="Scroll left">‹</button>
      <div class="stories__track" id="storiesTrack">
        <a href="#" class="story is-active" data-category="pizza">
          <img src="https://images.unsplash.com/photo-1541745537413-b804d9049a36?q=80&w=200&auto=format&fit=crop" alt="Pizza">
          <span>Pizza</span>
        </a>
        <a href="#" class="story" data-category="pasta">
          <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=200&auto=format&fit=crop" alt="Pasta">
          <span>Pasta</span>
        </a>
        <a href="#" class="story" data-category="salad">
          <img src="https://images.unsplash.com/photo-1505577058444-a3dab90d4253?q=80&w=200&auto=format&fit=crop" alt="Salad">
          <span>Salad</span>
        </a>
        <a href="#" class="story" data-category="drinks">
          <img src="https://images.unsplash.com/photo-1497534446932-c925b458314e?q=80&w=200&auto=format&fit=crop" alt="Drinks">
          <span>Drinks</span>
        </a>
      </div>
      <button class="stories__nav right" aria-label="Scroll right">›</button>
    </section>

    <!-- Section title -->
    <div class="section-head">
      <h3 id="sectionTitle">Pizza</h3>
      <span class="sep"></span>
    </div>

    <!-- Sub-category pills (auto-filled by JS for the active category) -->
    <nav class="subcats" id="subcats" aria-label="Sub-categories"></nav>

    <!-- Products -->
    <main class="menu list" id="products"></main>

  </div>

  <!-- Product Modal -->
  <div class="product-modal" id="product-modal">
    <div class="modal-overlay" id="modal-overlay"></div>
    <div class="modal-content">
      <button class="modal-close" id="modal-close" aria-label="إغلاق | Close">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
      <div class="modal-body">
        <div class="modal-image-container">
          <img id="modal-product-image" src="" alt="" class="modal-product-image">
        </div>
      </div>
    </div>
  </div>

<script>
  // ------- Dynamic data from backend -------
  let menuData = null;
  let currentLang = 'en';
  
  // Default image path
  const defaultImagePath = '{{ asset("images/fishimage.png") }}';

  // Load menu data from API
  async function loadMenuData() {
    try {
      const response = await fetch('/api/menu');
      menuData = await response.json();
      initializeMenu();
    } catch (error) {
      console.error('Error loading menu data:', error);
    }
  }

  // Initialize menu with loaded data
  function initializeMenu() {
    if (!menuData) return;
    
    // Render categories
    renderCategories();
    
    // Set "All" category as active by default
    activateCategory('all');
  }

  // ------- Helpers -------
  const elTrack = document.getElementById('storiesTrack');
  const elProducts = document.getElementById('products');
  const elSubcats = document.getElementById('subcats');
  const elTitle = document.getElementById('sectionTitle');
  document.querySelector('.stories__nav.left')
    .addEventListener('click', () => elTrack.scrollBy({ left: -240, behavior: 'smooth' }));
  document.querySelector('.stories__nav.right')
    .addEventListener('click', () => elTrack.scrollBy({ left: 240, behavior: 'smooth' }));

  function renderCategories() {
    if (!menuData) return;
    
    elTrack.innerHTML = '';
    
    // Add "All" category first
    const allStory = document.createElement('a');
    allStory.href = '#';
    allStory.className = 'story is-active';
    allStory.dataset.category = 'all';
    
    const allImg = document.createElement('img');
    allImg.src = '{{ asset("images/all.jpg") }}';
    allImg.alt = currentLang === 'ar' ? 'الكل' : 'All';
    
    const allSpan = document.createElement('span');
    allSpan.textContent = currentLang === 'ar' ? 'الكل' : 'All';
    
    allStory.appendChild(allImg);
    allStory.appendChild(allSpan);
    
    allStory.addEventListener('click', (e) => {
      e.preventDefault();
      activateCategory('all');
    });
    
    elTrack.appendChild(allStory);
    
    // Add other categories
    menuData.categories.forEach((category, index) => {
      const story = document.createElement('a');
      story.href = '#';
      story.className = 'story';
      story.dataset.category = category.slug;
      
      const img = document.createElement('img');
      img.src = category.icon || defaultImagePath;
      img.alt = category.label[currentLang];
      
      const span = document.createElement('span');
      span.textContent = category.label[currentLang];
      
      story.appendChild(img);
      story.appendChild(span);
      
      story.addEventListener('click', (e) => {
        e.preventDefault();
        activateCategory(category.slug);
      });
      
      elTrack.appendChild(story);
    });
  }

  function renderSubcats(categoryKey) {
    if (!menuData) return;
    
    // Hide subcategories for "All" category
    if (categoryKey === 'all') {
      elSubcats.innerHTML = '';
      renderAllProducts();
      return;
    }
    
    const category = menuData.categories.find(cat => cat.slug === categoryKey);
    if (!category) return;
    
    elSubcats.innerHTML = '';

    category.subcategories.forEach((subcat, idx) => {
      const btn = document.createElement('button');
      btn.className = 'subcat-pill' + (idx === 0 ? ' is-active' : '');
      btn.dataset.subcat = subcat.slug;
      btn.textContent = subcat.label[currentLang];
      btn.addEventListener('click', () => {
        document.querySelectorAll('.subcat-pill').forEach(b => b.classList.remove('is-active'));
        btn.classList.add('is-active');
        renderProducts(categoryKey, subcat.slug);
      });
      elSubcats.appendChild(btn);
    });

    // render first subcat by default
    if (category.subcategories.length) {
      renderProducts(categoryKey, category.subcategories[0].slug);
    }
  }

  function renderAllProducts() {
    if (!menuData) return;
    
    let html = '';
    
    // Group products by category
    menuData.categories.forEach(category => {
      const categoryProducts = menuData.products.filter(product => 
        product.category === category.slug
      );
      
      if (categoryProducts.length > 0) {
        // Add category header
        html += `
          <div class="category-section">
            <h3 class="category-title">${category.label[currentLang]}</h3>
            <div class="category-products">
        `;
        
        // Add products for this category
        categoryProducts.forEach(item => {
          html += `
            <article class="item" onclick="openModal('${item.image || defaultImagePath}', '${item.name[currentLang]}')">
              <img class="item__img" src="${item.image || defaultImagePath}" alt="${item.name[currentLang]}">
              <div class="item__body">
                <h4 class="item__title">${item.name[currentLang]}</h4>
              </div>
              <div class="item__price"><span class="${getPriceClass(item.price)}">${formatPrice(item.price, item.currency)}</span></div>
            </article>
          `;
        });
        
        html += `
            </div>
          </div>
        `;
      }
    });
    
    elProducts.innerHTML = html;
  }

  function renderProducts(categoryKey, subcatKey) {
    if (!menuData) return;
    
    // Filter products by category and subcategory
    const items = menuData.products.filter(product => 
      product.category === categoryKey && product.subcategory === subcatKey
    );
    
    elProducts.innerHTML = items.map(item => `
      <article class="item" onclick="openModal('${item.image || defaultImagePath}', '${item.name[currentLang]}')">
        <img class="item__img" src="${item.image || defaultImagePath}" alt="${item.name[currentLang]}">
        <div class="item__body">
          <h4 class="item__title">${item.name[currentLang]}</h4>
        </div>
        <div class="item__price"><span class="${getPriceClass(item.price)}">${formatPrice(item.price, item.currency)}</span></div>
      </article>
    `).join('');
  }

  // Price formatter
  function formatPrice(price, currency = 'BHD') {
    const numValue = parseFloat(price);
    
    // If price is -1 or 0, show "AS PER WEIGHT"
    if (numValue <= 0) {
      return currentLang === 'ar' ? 'حسب الوزن' : 'AS PER WEIGHT';
    }
    
    let decimalPlaces = 2;
    if (numValue < 10) {
      decimalPlaces = 3;
    }
    
    return new Intl.NumberFormat('en-BH', {
      style: 'currency',
      currency: currency,
      minimumFractionDigits: decimalPlaces,
      maximumFractionDigits: decimalPlaces
    }).format(numValue);
  }

  // Get price class for styling
  function getPriceClass(price) {
    const numValue = parseFloat(price);
    return numValue <= 0 ? 'price as-per-weight' : 'price';
  }

  function activateCategory(categoryKey) {
    document.querySelectorAll('.story').forEach(s => s.classList.remove('is-active'));
    const active = document.querySelector(`.story[data-category="${categoryKey}"]`);
    if (active) active.classList.add('is-active');

    if (categoryKey === 'all') {
      elTitle.textContent = currentLang === 'ar' ? 'الكل' : 'All';
      renderSubcats(categoryKey);
    } else {
      const category = menuData.categories.find(cat => cat.slug === categoryKey);
      if (category) {
        elTitle.textContent = category.label[currentLang];
        renderSubcats(categoryKey);
      }
    }
  }

  // Language switch functionality
  document.querySelectorAll('.lang-switch button').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.lang-switch button').forEach(b => b.classList.remove('is-active'));
      btn.classList.add('is-active');
      currentLang = btn.dataset.lang;
      
      // Re-render everything with new language while maintaining current category
      if (menuData) {
        // Store the currently active category before re-rendering
        const activeCategory = document.querySelector('.story.is-active');
        const currentCategorySlug = activeCategory ? activeCategory.dataset.category : null;
        
        renderCategories();
        
        // Reactivate the same category after re-rendering
        if (currentCategorySlug) {
          activateCategory(currentCategorySlug);
        } else {
          // Fallback to first category if no active category found
          const firstCategory = menuData.categories[0];
          if (firstCategory) {
            activateCategory(firstCategory.slug);
          }
        }
      }
    });
  });

  // Load menu data when page loads
  loadMenuData();

  // Modal functionality
  const modal = document.getElementById('product-modal');
  const modalImage = document.getElementById('modal-product-image');
  const modalClose = document.getElementById('modal-close');
  const modalOverlay = document.getElementById('modal-overlay');

  function openModal(imageSrc, imageAlt) {
    modalImage.src = imageSrc;
    modalImage.alt = imageAlt;
    modal.classList.add('active');
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
  }

  function closeModal() {
    modal.classList.remove('active');
    document.body.style.overflow = ''; // Restore scrolling
  }

  // Event listeners for modal
  modalClose.addEventListener('click', closeModal);
  modalOverlay.addEventListener('click', closeModal);

  // Close modal with Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('active')) {
      closeModal();
    }
  });

  // Loader Animation
  window.addEventListener('load', function() {
    const loader = document.getElementById('loader');
    const heroSection = document.getElementById('hero-section');
    const page = document.querySelector('.page');
    
    // Hide loader after 2 seconds
    setTimeout(() => {
      loader.classList.add('hidden');
      
      // Show hero section
      setTimeout(() => {
        heroSection.classList.add('visible');
        
        // Hide hero section and show main page after 3 seconds
        setTimeout(() => {
          heroSection.classList.add('hidden');
          page.style.opacity = '1';
          page.style.transform = 'translateY(0)';
        }, 3000);
      }, 500);
    }, 2000);
  });

  // Set initial page styles
  document.addEventListener('DOMContentLoaded', function() {
    const page = document.querySelector('.page');
    page.style.opacity = '0';
    page.style.transform = 'translateY(50px)';
    page.style.transition = 'opacity 1s ease-out, transform 1s ease-out';
  });

  // PWA Service Worker Registration
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('/sw.js')
        .then(function(registration) {
          console.log('PWA: ServiceWorker registration successful with scope: ', registration.scope);
          
          // Check for updates
          registration.addEventListener('updatefound', () => {
            const newWorker = registration.installing;
            newWorker.addEventListener('statechange', () => {
              if (newWorker.state === 'installed' && navigator.serviceWorker.controller) {
                // New content is available, reload the page
                if (confirm('تحديث جديد متاح! هل تريد إعادة تحميل الصفحة؟\nNew update available! Reload page?')) {
                  window.location.reload();
                }
              }
            });
          });
        })
        .catch(function(err) {
          console.log('PWA: ServiceWorker registration failed: ', err);
        });
    });
  }

  // PWA Install Prompt
  let deferredPrompt;
  window.addEventListener('beforeinstallprompt', (e) => {
    console.log('PWA: Install prompt triggered');
    e.preventDefault();
    deferredPrompt = e;
    
    // Show install button
    const installButton = document.createElement('button');
    installButton.textContent = '📱 تثبيت التطبيق | Install App';
    installButton.className = 'pwa-install-btn';
    installButton.style.cssText = `
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 25px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      z-index: 1000;
      box-shadow: 0 4px 12px rgba(30, 64, 175, 0.3);
      transition: all 0.3s ease;
      font-family: 'Inter', sans-serif;
    `;
    
    installButton.addEventListener('click', () => {
      deferredPrompt.prompt();
      deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
          console.log('PWA: User accepted the install prompt');
        } else {
          console.log('PWA: User dismissed the install prompt');
        }
        deferredPrompt = null;
        installButton.remove();
      });
    });
    
    document.body.appendChild(installButton);
  });

  // PWA App Installed
  window.addEventListener('appinstalled', (evt) => {
    console.log('PWA: App was installed');
  });

  // PWA Online/Offline Status
  function updateOnlineStatus() {
    const status = navigator.onLine ? 'أونلاين | Online' : 'أوفلاين | Offline';
    console.log('PWA: Connection status:', status);
  }

  window.addEventListener('online', updateOnlineStatus);
  window.addEventListener('offline', updateOnlineStatus);
</script>
</body>
</html>
