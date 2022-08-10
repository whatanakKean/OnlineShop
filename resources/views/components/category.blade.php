@vite(["resources/scss/app.scss", "resources/scss/category.scss"])

@props(["title"])

<div class="category-wrapper container">
  <p class="title">{{ $title }}</p>
  <div class="category-row">
    @foreach([1,2,3,4,5,6,7,8] as $item)
    <!--- Category Box -->
    <div class="category-box">
      <div class="bookcover"></div>
      <div class="bookcontent">
          <p>Harry Potter</p>
          <small>Jk Rowling</small>  
          <div class="contentfooter">
              <p>Price: 59.99$</p>
              <span class="material-icons">shopping_cart</span>
          </div>
        </div>
    </div>
     <!---End Category Box -->
     @endforeach
  </div>
</div>