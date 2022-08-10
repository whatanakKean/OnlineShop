@vite(["resources/scss/slide.scss", "resources/scss/app.scss"])

<div class="slide-wrapper container">
  <span class="material-icons left-arrow">arrow_back_ios</span>
  <span class="material-icons right-arrow">arrow_forward_ios</span>
  <div class="slide-row">
     @foreach([1,2,3,4,5] as $slidebox)
      <div class="slide-box"></div>
     @endforeach
  </div>
</div> 