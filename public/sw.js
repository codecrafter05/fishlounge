// Fish Lounge PWA Service Worker
const CACHE_NAME = 'fish-lounge-v1.0.0';
const STATIC_CACHE = 'fish-lounge-static-v1.0.0';
const DYNAMIC_CACHE = 'fish-lounge-dynamic-v1.0.0';

// Files to cache immediately
const STATIC_FILES = [
  '/',
  '/css/style.css',
  '/css/fish.css',
  '/js/script.js',
  '/images/logo1.png',
  '/images/logo2.png',
  '/images/logo3.png',
  '/images/fishimage.png',
  '/images/menuu.png',
  '/images/all.jpg',
  '/manifest.webmanifest',
  '/offline.html'
];

// Install Event - Cache static files
self.addEventListener('install', event => {
  console.log('Service Worker: Installing...');
  event.waitUntil(
    caches.open(STATIC_CACHE)
      .then(cache => {
        console.log('Service Worker: Caching static files');
        return cache.addAll(STATIC_FILES);
      })
      .then(() => {
        console.log('Service Worker: Installation complete');
        return self.skipWaiting();
      })
      .catch(error => {
        console.error('Service Worker: Installation failed', error);
      })
  );
});

// Activate Event - Clean up old caches
self.addEventListener('activate', event => {
  console.log('Service Worker: Activating...');
  event.waitUntil(
    caches.keys()
      .then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            if (cacheName !== STATIC_CACHE && cacheName !== DYNAMIC_CACHE) {
              console.log('Service Worker: Deleting old cache:', cacheName);
              return caches.delete(cacheName);
            }
          })
        );
      })
      .then(() => {
        console.log('Service Worker: Activation complete');
        return self.clients.claim();
      })
  );
});

// Fetch Event - Serve from cache or network
self.addEventListener('fetch', event => {
  const { request } = event;
  const url = new URL(request.url);

  // Skip non-GET requests
  if (request.method !== 'GET') {
    return;
  }

  // Skip external requests
  if (url.origin !== location.origin) {
    return;
  }

  event.respondWith(
    caches.match(request)
      .then(cachedResponse => {
        // Return cached version if available
        if (cachedResponse) {
          console.log('Service Worker: Serving from cache:', request.url);
          return cachedResponse;
        }

        // Try to fetch from network
        return fetch(request)
          .then(networkResponse => {
            // Check if response is valid
            if (!networkResponse || networkResponse.status !== 200 || networkResponse.type !== 'basic') {
              return networkResponse;
            }

            // Clone the response
            const responseToCache = networkResponse.clone();

            // Cache dynamic content
            caches.open(DYNAMIC_CACHE)
              .then(cache => {
                cache.put(request, responseToCache);
              });

            console.log('Service Worker: Serving from network:', request.url);
            return networkResponse;
          })
          .catch(error => {
            console.log('Service Worker: Network failed, serving offline page:', request.url);
            
            // If it's a navigation request, show offline page
            if (request.mode === 'navigate') {
              return caches.match('/offline.html');
            }
            
            // For other requests, return a basic response
            return new Response('Offline content not available', {
              status: 503,
              statusText: 'Service Unavailable',
              headers: new Headers({
                'Content-Type': 'text/plain'
              })
            });
          });
      })
  );
});

// Background Sync for offline actions
self.addEventListener('sync', event => {
  if (event.tag === 'background-sync') {
    console.log('Service Worker: Background sync triggered');
    event.waitUntil(doBackgroundSync());
  }
});

// Push notifications
self.addEventListener('push', event => {
  if (event.data) {
    const data = event.data.json();
    const options = {
      body: data.body,
      icon: '/images/logo1.png',
      badge: '/images/logo1.png',
      vibrate: [100, 50, 100],
      data: {
        dateOfArrival: Date.now(),
        primaryKey: 1
      }
    };
    
    event.waitUntil(
      self.registration.showNotification(data.title, options)
    );
  }
});

// Background sync function
function doBackgroundSync() {
  // Handle offline actions when connection is restored
  console.log('Service Worker: Performing background sync');
  return Promise.resolve();
}

// Message handling
self.addEventListener('message', event => {
  if (event.data && event.data.type === 'SKIP_WAITING') {
    self.skipWaiting();
  }
});

console.log('Service Worker: Script loaded');
