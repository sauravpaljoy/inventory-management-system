<div class="cs-login">
  <div class="cs-login_left">
    <img src="{{ asset('assets/img/retail-store.png') }}" alt="Login Thumb">
  </div>
  <div class="cs-login_right">
    <form class="cs-login_form" action="{{ route('register') }}" method="POST">
      @csrf
      <h2>Create your new account</h2>
      <div class="cs-height_30 cs-height_lg_30"></div>
      <input type="text" name="name" class="cs-form_field cs-border_color" placeholder="Your Name" required>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <input type="email" name="email" class="cs-form_field cs-border_color" placeholder="Email address" required>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <input type="password" name="password" class="cs-form_field cs-border_color" placeholder="Password" required>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <input type="password" name="password_confirmation" class="cs-form_field cs-border_color" placeholder="Confirm Password" required>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <div class="cs-login_meta">
        <div class="cs-check">
          <input type="checkbox" required>
          <label>I agree to the terms of service</label>
        </div>
      </div>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <button type="submit" class="cs-btn cs-size_md w-100"><span>Register</span></button>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <p class="cs-m0">
        Already have an account?
        <a href="{{ route('login') }}" class="cs-link">Login</a>
      </p>
      <div class="cs-height_30 cs-height_lg_30"></div>
    </form>
  </div>
</div>
<!-- End Register Modal -->
