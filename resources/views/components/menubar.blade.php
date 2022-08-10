@vite(["resources/scss/app.scss", "resources/scss/menubar.scss"])

@php
$categoryList = [
  [ 'id' => 1, 'icon' => 'art-and-architecture.png', 'label' => "Art & Architecture", 'link' => "/artAndarchitecture" ],
  [ 'id' => 2, 'icon' => 'biography.png', 'label' => "Biography", 'link' => "/biography" ],
]
@endphp

<div>
  <div class="menubar-wrapper container">
    @foreach($categoryList as $item)
    <div class="menu-box">
      <img src="../public/category-icons/{{$item['icon']}}" alt={{ $item['label'] }}>
      <p class="label">
          <a href={{ $item['link'] }}>{{ $item['label'] }}</a>
      </p>
    </div>
    @endforeach
  </div>
</div>
