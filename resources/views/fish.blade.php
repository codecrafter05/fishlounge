<!doctype html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fish Lounge – Menu</title>
  <link rel="stylesheet" href="{{ asset('css/fish.css') }}">
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

<script>
  // ------- Data model (Category -> Subcategory -> Products) -------
  const DATA = {
    pizza: {
      title: "Pizza",
      subcats: {
        italian: {
          label: "Italian",
          items: [
            {
              name: "Margherita",
              desc: "Tomato sauce, mozzarella, basil",
              img: "https://images.unsplash.com/photo-1604382354936-07c5d9983bd3?q=80&w=800&auto=format&fit=crop",
              price: "BD 5.100"
            },
            {
              name: "Diavola",
              desc: "Tomato, mozzarella, spicy salami",
              img: "https://images.unsplash.com/photo-1541599188778-cdc73298e8f8?q=80&w=800&auto=format&fit=crop",
              price: "BD 6.100"
            }
          ]
        },
        levantine: {
          label: "Levantine",
          items: [
            {
              name: "Zaatar & Cheese",
              desc: "Zaatar blend, akkawi cheese, olive oil",
              img: "https://images.unsplash.com/photo-1548365328-9f547fb0953a?q=80&w=800&auto=format&fit=crop",
              price: "BD 5.600"
            },
            {
              name: "Shawarma Pizza",
              desc: "Chicken shawarma slices, garlic sauce, pickles",
              img: "https://images.unsplash.com/photo-1601050690597-9d5a1e1a0f2e?q=80&w=800&auto=format&fit=crop",
              price: "BD 6.600"
            }
          ]
        }
      }
    },

    pasta: {
      title: "Pasta",
      subcats: {
        creamy: {
          label: "Creamy",
          items: [
            {
              name: "Fettuccine Alfredo",
              desc: "Cream sauce, parmesan, parsley",
              img: "https://images.unsplash.com/photo-1520207588543-6f87a6c06ba9?q=80&w=800&auto=format&fit=crop",
              price: "BD 4.800"
            }
          ]
        },
        tomato: {
          label: "Tomato-Based",
          items: [
            {
              name: "Arrabbiata",
              desc: "Spicy tomato sauce, garlic, chili",
              img: "https://images.unsplash.com/photo-1525755662778-989d0524087e?q=80&w=800&auto=format&fit=crop",
              price: "BD 4.600"
            }
          ]
        }
      }
    },

    salad: {
      title: "Salad",
      subcats: {
        fresh: {
          label: "Fresh",
          items: [
            {
              name: "Mediterranean Salad",
              desc: "Cucumber, tomato, olives, feta, oregano",
              img: "https://images.unsplash.com/photo-1551183053-bf91a1d81141?q=80&w=800&auto=format&fit=crop",
              price: "BD 3.200"
            }
          ]
        }
      }
    },

    drinks: {
      title: "Drinks",
      subcats: {
        cold: {
          label: "Cold",
          items: [
            {
              name: "Lemon Mint",
              desc: "Fresh lemon, mint, crushed ice",
              img: "https://images.unsplash.com/photo-1541976076758-347942db1970?q=80&w=800&auto=format&fit=crop",
              price: "BD 1.800"
            }
          ]
        }
      }
    }
  };

  // ------- Helpers -------
  const elTrack = document.getElementById('storiesTrack');
  const elProducts = document.getElementById('products');
  const elSubcats = document.getElementById('subcats');
  const elTitle = document.getElementById('sectionTitle');
  document.querySelector('.stories__nav.left')
    .addEventListener('click', () => elTrack.scrollBy({ left: -240, behavior: 'smooth' }));
  document.querySelector('.stories__nav.right')
    .addEventListener('click', () => elTrack.scrollBy({ left: 240, behavior: 'smooth' }));

  function renderSubcats(categoryKey) {
    const subcats = DATA[categoryKey].subcats;
    elSubcats.innerHTML = '';

    const keys = Object.keys(subcats);
    keys.forEach((key, idx) => {
      const btn = document.createElement('button');
      btn.className = 'subcat-pill' + (idx === 0 ? ' is-active' : '');
      btn.dataset.subcat = key;
      btn.textContent = subcats[key].label;
      btn.addEventListener('click', () => {
        document.querySelectorAll('.subcat-pill').forEach(b => b.classList.remove('is-active'));
        btn.classList.add('is-active');
        renderProducts(categoryKey, key);
      });
      elSubcats.appendChild(btn);
    });

    // render first subcat by default
    if (keys.length) renderProducts(categoryKey, keys[0]);
  }

  function renderProducts(categoryKey, subcatKey) {
    const items = DATA[categoryKey].subcats[subcatKey].items;
    elProducts.innerHTML = items.map(item => `
      <article class="item">
        <img class="item__img" src="${item.img}" alt="${item.name}">
        <div class="item__body">
          <h4 class="item__title">${item.name}</h4>
          <p class="item__desc">${item.desc}</p>
        </div>
        <div class="item__price"><span class="price">${item.price}</span></div>
      </article>
    `).join('');
  }

  function activateCategory(categoryKey) {
    document.querySelectorAll('.story').forEach(s => s.classList.remove('is-active'));
    const active = document.querySelector(`.story[data-category="${categoryKey}"]`);
    if (active) active.classList.add('is-active');

    elTitle.textContent = DATA[categoryKey].title;
    renderSubcats(categoryKey);
  }

  // Category click handlers
  document.querySelectorAll('.story').forEach(s => {
    s.addEventListener('click', e => {
      e.preventDefault();
      activateCategory(s.dataset.category);
    });
  });

  // Init with first active category
  activateCategory('pizza');

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
</script>
</body>
</html>
