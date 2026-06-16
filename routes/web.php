<?php

use Illuminate\Support\Facades\Route;

// 1. Redirect halaman utama langsung ke dokumentasi API
Route::redirect('/', '/docs/scalar');

// 2. Rute untuk menampilkan UI OpenAPI Scalar
Route::get('/docs/scalar', function () {
    return <<<'HTML'
    <!doctype html>
    <html>
      <head>
        <title>API Documentation</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
      </head>
      <body>
        <div id="app"></div>
        <script src="https://cdn.jsdelivr.net/npm/@scalar/api-reference"></script>
        <script>
          Scalar.createApiReference('#app', {
            url: '/docs/api.json',
          })
        </script>
      </body>
    </html>
    HTML;
});