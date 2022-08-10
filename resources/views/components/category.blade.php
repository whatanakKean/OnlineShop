@vite(["resources/scss/app.scss", "resources/scss/category.scss"])



<div class="category-wrapper container">
  <p class="title">Book</p>
  <div class="category-row">
    @foreach($books as $book)
    <!--- Category Box -->
    <div class="category-box">
      <div class="bookcover">
        <a href="{{ route('detailbook', $book->id) }}">
            <img src="{{$book->img}}" width="200" height="250">
        </a>
      </div>
      <div class="bookcontent">
          <p>{{$book->name}}</p>
          <small>{{$book->author}}</small>
          <div class="contentfooter">
              <p>Price: {{$book->price}}$</p>
              <span class="material-icons">shopping_cart</span>
          </div>
        </div>
    </div>
     <!---End Category Box -->
     @endforeach
  </div>
</div>
