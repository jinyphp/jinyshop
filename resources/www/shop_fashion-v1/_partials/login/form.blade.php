<!-- Form -->
<x-login-form>
  <div class="position-relative mb-4">
      {{--
<input type="email" class="form-control form-control-lg" placeholder="Email" required>
<div class="invalid-tooltip bg-transparent py-0">
Enter a valid email address!
</div>
--}}

      <x-login-email>
      </x-login-email>

  </div>

  {{--
<div class="mb-4">
<div class="password-toggle">
<input type="password" class="form-control form-control-lg" placeholder="Password" required>
<div class="invalid-tooltip bg-transparent py-0">Password is incorrect!</div>
<label class="password-toggle-button fs-lg" aria-label="Show/hide password">
<input type="checkbox" class="btn-check">
</label>
</div>
</div>
--}}

  <x-login-password>

  </x-login-password>

  <div class="d-flex align-items-center justify-content-between mb-4">
      <div class="form-check me-2">

          {{-- <input type="checkbox" class="form-check-input" id="remember-30">
          <label for="remember-30" class="form-check-label">Remember for 30 days</label> --}}
          <x-login-remember>
              Remember for 30 days
          </x-login-remember>
      </div>
      <div class="nav">
          <x-login-forgot class="nav-link animate-underline p-0" >
              <span class="animate-target">Forgot password?</span>
          </x-login-forgot>
      </div>
  </div>

  {{-- <button type="submit" class="btn btn-lg btn-primary w-100">Sign In</button> --}}
  <x-login-submit class="btn-lg w-100">
      로그인
  </x-login-submit>

</x-login-form>
{{-- <form class="needs-validation" novalidate>



</form> --}}
