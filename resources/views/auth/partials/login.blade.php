<div class="cs-login">
  <div class="cs-login_left">
    <img src="{{ asset('assets/img/about_img_1.png') }}" alt="Login Thumb">
  </div>
  <div class="cs-login_right">
    <form class="cs-login_form" action="{{ route('login') }}" method="POST">
      @csrf
      <h2>Login in to your posing account</h2>
      <div class="cs-height_30 cs-height_lg_30"></div>
      <input type="email" name="email" class="cs-form_field cs-border_color" placeholder="Email address" required>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <input type="password" name="password" class="cs-form_field cs-border_color" placeholder="Password" required>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <div class="cs-login_meta">
        <div>
          <div class="cs-check">
            <input type="checkbox" name="remember">
            <label>Remember me</label>
          </div>
        </div>
        <div><span class="cs-text_btn"><span><a href="{{ route('password.request') }}">Forgot Password?</a></span></span></div>
      </div>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <button type="submit" class="cs-btn cs-size_md w-100"><span>Login</span></button>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <p class="cs-m0">
        Don't have an account? 
          <a href="{{ route('register') }}" class="cs-link">Register</a>
      </p>
      <div class="cs-height_30 cs-height_lg_30"></div>
    </form>
  </div>
</div>
<!-- End Login Modal -->
