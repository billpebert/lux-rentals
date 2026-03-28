<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    {{ filled($title ?? null) ? $title.' - '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
</title>

{{ $meta ?? '' }}

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/android-chrome-192x192.png" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- @fluxAppearance --}}
{{ $styles ?? '' }}
