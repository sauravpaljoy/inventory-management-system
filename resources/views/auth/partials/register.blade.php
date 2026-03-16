<!-- Start Register Modal -->
<div class="cs-modal" data-modal="register">
  <div class="cs-close_overlay"></div>
  <div class="cs-modal_in">
    <div class="cs-modal_container cs-white_bg">
      <button class="cs-close_modal cs-center cs-primary_bg">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.7071 1.70711C12.0976 1.31658 12.0976 0.683417 11.7071 0.292893C11.3166 -0.0976311 10.6834 -0.0976311 10.2929 0.292893L11.7071 1.70711ZM0.292893 10.2929C-0.0976311 10.6834 -0.0976311 11.3166 0.292893 11.7071C0.683417 12.0976 1.31658 12.0976 1.70711 11.7071L0.292893 10.2929ZM1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L1.70711 0.292893ZM10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L10.2929 11.7071ZM10.2929 0.292893L0.292893 10.2929L1.70711 11.7071L11.7071 1.70711L10.2929 0.292893ZM0.292893 1.70711L10.2929 11.7071L11.7071 10.2929L1.70711 0.292893L0.292893 1.70711Z" fill="white"/>
        </svg>            
      </button>
      <div class="cs-height_95 cs-height_lg_70"></div>
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
              <a href="{{ route('login') }}" class="cs-link cs-modal_btn" data-modal="login">Login</a>
            </p>
            <div class="cs-height_30 cs-height_lg_30"></div>
          </form>
        </div>
      </div>
      <div class="cs-height_100 cs-height_lg_70"></div>
    </div>
  </div>
</div>
<!-- End Register Modal -->
