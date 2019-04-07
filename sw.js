const CACHE_NAME = 'myredtv-cache-v1',
  urlsToCache = [
    './',
    './?utm=homescreen',
    './index.html',
    './index.html?utm=homescreen',
    './style.css',
    './script.js',
    './imagenes/favicon.png',
    './img/icon_192x192.png',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
    'https://use.fontawesome.com/releases/v5.8.1/css/all.css',
    'http://code.jquery.com/jquery-2.1.4.min.js',
    './js/geturl.js',
    './css/hover-min.css',
    './reproductor/video-js.css',
    './reproductor/videojs-ie8.min.js',
    './reproductor/jquery.min.js',
    './reproductor/video-js2.css',
    './reproductor/video.js',
    './reproductor/videojs-flash.js',
    './reproductor/videojs-contrib-hls.js',
    './manifest.json',
    '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css',
    '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css',
    '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css',
    '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
    '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js',
    '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js',
    'imagenes/cargando.gif',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
    'https://code.jquery.com/jquery-1.12.4.min.js',
    'http://jwpsrv.com/library/echLdpbKEeSi8w4AfQhyIQ.js',
    'http://yourjavascript.com/2122535051/antirightclick.js',
    'https://lh5.googleusercontent.com/-70ZyK7Gt4XE/VI8sxCvJGII/AAAAAAAAGd0/RZA9e6iSJBM/s300/superheroe.png'

  ]

self.addEventListener('install', e => {
  console.log('Evento: SW Instalado')
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Archivos en cache')
        return cache.addAll(urlsToCache)
        .then( () => self.skipWaiting() )
        //skipWaiting forza al SW a activarse
      })
      .catch(err => console.log('Falló registro de cache', err) )
  )
})

self.addEventListener('activate', e => {
  console.log('Evento: SW Activado')
  const cacheWhitelist = [CACHE_NAME]

  e.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          //Eliminamos lo que ya no se necesita en cache
          if ( cacheWhitelist.indexOf(cacheName) === -1 )
            return caches.delete(cacheName)
        })
      )
    })
    .then(() => {
      console.log('Cache actualizado')
      // Le indica al SW activar el cache actual
      return self.clients.claim()
    })
  )
})

self.addEventListener('fetch', e => {
  console.log('Evento: SW Recuperando')

  e.respondWith(
    //Miramos si la petición coincide con algún elemento del cache
    caches.match(e.request)
    .then(res => {
        console.log('Recuperando cache')
        if ( res ) {
          //Si coincide lo retornamos del cache
          return res
        }
        //Sino, lo solicitamos a la red
        return fetch(e.request)
      })
    )
})

self.addEventListener('push', e => {
  console.log('Evento: Push')

  let title = 'Push Notificación Demo',
    options = {
      body: 'Click para regresar a la aplicación',
      icon: './icon_192x192.png',
      vibrate: [100, 50, 100],
      data: { id: 1 },
      actions: [
        { 'action': 'Si', 'title': 'Amo esta aplicación :)', icon: './icon_192x192.png' },
        { 'action': 'No', 'title': 'No me gusta esta aplicación :(', icon: './icon_192x192.png' }
      ]
    }

    e.waitUntil( self.registration.showNotification(title, options) )
})

self.addEventListener('notificationclick', e => {
  console.log(e)

  if ( e.action === 'Si' ) {
    console.log('AMO esta aplicación')
    clients.openWindow('https://ed.team')
  } else if ( e.action === 'No' ) {
    console.log('No me gusta esta aplicación')
  }

  e.notification.close()
})

self.addEventListener('sync', e => {
  console.log('Evento: Sincronización de Fondo', e)

  //Revisamos que la etiqueta de sincronización sea la que definimos o la que emulan las devtools
  if ( e.tag === 'github' || e.tag === 'test-tag-from-devtools' ) {
    e.waitUntil(
      //Comprobamos todas las pestañas abiertas y les enviamos postMessage
      self.clients.matchAll()
        .then(all => {
          return all.map(client => {
            return client.postMessage('online')
          })
        })
        .catch( err => console.log(err) )
    )
  }
})
