@vite(["resources/scss/app.scss", "resources/scss/banner.scss"])

@props(["context"])

<div class="banner container">{{ $context }}</div>