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
        <a href="/">Bookworm</a>
      </h1>

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
              <p>{{ session('user') }}</p>
              <!-- <small>{{ session('user') }}</small> -->
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
