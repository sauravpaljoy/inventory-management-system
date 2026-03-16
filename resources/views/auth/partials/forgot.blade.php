<div class="cs-login">
  <div class="cs-login_left">
    <img src="{{ asset('assets/img/about_img_1.png') }}" alt="Login Thumb">
  </div>
  <div class="cs-login_right">
    <form class="cs-login_form">
      <h2>Forgot your Password</h2>
      <div class="cs-height_30 cs-height_lg_30"></div>
      <input type="email" class="cs-form_field cs-border_color" placeholder="Email address" required>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <button class="cs-btn cs-size_md w-100"><span>Send Me Email</span></button>
      <div class="cs-height_20 cs-height_lg_20"></div>
      <p class="cs-m0">
        Don't have an account? 
        <a href="{{ route('register') }}" class="cs-link">Register</a>
      </p>
    </form>
  </div>
</div>
<!-- End Forgot Password Modal -->
