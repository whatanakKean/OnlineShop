@vite(["resources/scss/app.scss", "resources/scss/navbar.scss"])

@props([
  'isRegistered',
  'profile' => '',
  'name' => '',
  'email' => ''
])

<div class="navbarbox">
  <div class="navbar-wrapper container">
      <h1 class="logo">
        <a href="/">CADT</a>
      </h1>
      <!-- Search Box -->
      <div class="searchbox">
        <span class="material-icons">tune</span>
        <input type="text" placeholder="What are you looking for..."/>
        <div class="search-button">
            <span class="material-icons">search</span>
        </div>
      </div>
      <!-- End Search Box -->
      <!-- Cart Box -->
      <a href="/cart" class="navbar-cartbox">
          <span class="material-icons">shopping_cart</span>
          <p>Cart</p>
          <div>1</div>
      </a>
      <!-- End Cart Box -->
      <!-- Auth or Profile Box -->
      @if($isRegistered)
        <div class="profilebox">
          <img class="profile-image" src="{{ asset($profile) }}" alt={{ $name }}>
          <div class="profile-content">
              <p>{{ $name }}</p>
              <small>{{ $email }}</small>
          </div>
        </div>
      @else
        <div class="authbox">
            <button>Login</button>
            <div>Or</div>
            <button>Register</button>
        </div>
      @endif
      <!-- End Auth or Profile Box -->
    </div>
</div>   