<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
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

  <!-- Additional Meta Tags -->
  <meta name="theme-color" content="#b4cbdb" />
  <meta name="msapplication-TileColor" content="#b4cbdb" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="default" />
  <meta name="apple-mobile-web-app-title" content="فيش لاونج | Fish Lounge" />
  <meta name="application-name" content="فيش لاونج | Fish Lounge" />

  <!-- Canonical URL -->
  <link rel="canonical" href="{{ url()->current() }}" />
  
  <!-- Favicon and Icons -->
  <link rel="icon" type="image/png" href="{{ asset('images/logo2.png') }}" />
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}" />
  
  <!-- Preconnect for Performance -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="loader" id="loader">
    <div class="loader-content">
      <div class="loader-logo">
        <img src="{{ asset('images/logo2.png') }}" alt="فيش لاونج -  في مجمع الأفنيوز البحرين | Fish Lounge in Avenues Mall Bahrain" width="300" height="300" decoding="async">
      </div>
    </div>
  </div>

  <section class="hero-section" id="hero-section">
    <div class="hero-content">
      <img src="{{ asset('images/logo3.png') }}" alt="فيش لاونج - أفضل مطعم مأكولات بحرية في مجمع الأفنيوز البحرين | Fish Lounge - Best Seafood Restaurant in Avenues Mall Bahrain" class="hero-logo" width="600" height="600" decoding="async">
    </div>
  </section>

  <section class="menu-section" id="menu">
    <div class="container">
      <div class="menu-top">
        <img src="{{ asset('images/logo1.png') }}" alt="فيش لاونج - قائمة الطعام | Fish Lounge - Food Menu" class="header-logo" width="200" height="100" loading="lazy" decoding="async">
        <div class="lang-switch" id="lang-switch" role="group" aria-label="تبديل اللغة | Language Switch">
          <button type="button" class="lang-btn active" data-lang="en" aria-pressed="true">EN</button>
          <button type="button" class="lang-btn" data-lang="ar" aria-pressed="false">AR</button>
        </div>
      </div>

      <div class="menu-header">
        <div class="header-content">
          <div class="header-right">
            <nav class="categories" id="categories" aria-label="فئات القائمة | Menu Categories" role="tablist"></nav>
          </div>
        </div>
      </div>
      <div class="product-grid" id="product-grid"></div>
    </div>
  </section>

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

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>


