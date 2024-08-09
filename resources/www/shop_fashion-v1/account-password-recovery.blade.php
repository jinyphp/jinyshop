<x-www-app>
<!-- Page content -->
<main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto" style="max-width: 1920px">
  <div class="d-lg-flex">

    <!-- Login form + Footer -->
    <div class="d-flex flex-column min-vh-100 w-100 py-4 mx-auto me-lg-5" style="max-width: 416px">

      <!-- Logo -->
      <header class="navbar align-items-center px-0 pb-4 mt-n2 mt-sm-0 mb-2 mb-md-3 mb-lg-4">
        <a href="/" class="navbar-brand pt-0">
          <span class="d-flex flex-shrink-0 text-primary me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"><path d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z" fill="currentColor"/><g fill="#fff"><path d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z"/><use href="#czlogo"/><use href="#czlogo" x="8.516" y="-2.172"/></g><defs><path id="czlogo" d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z"/></defs></svg>
          </span>
          Cartzilla
        </a>
        <div class="nav">
          <a class="nav-link fs-base animate-underline p-0" href="account-signin">
            <i class="ci-chevron-left fs-lg ms-n1 me-1"></i>
            <span class="animate-target">Back to Sign In</span>
          </a>
        </div>
      </header>

      <h1 class="h2 mt-auto">Forgot password?</h1>
      <p class="pb-2 pb-md-3">Enter the email address you used when you joined and we’ll send you instructions to reset your password</p>

      {{-- @partials("login.recovery") --}}
      @includeIf('jinyauth::password.forget.form')

      <!-- Footer -->
      <footer class="mt-auto">
        <div class="nav mb-4">
          <a class="nav-link text-decoration-underline p-0" href="help-topics-v1.html">Need help?</a>
        </div>
        <p class="fs-xs mb-0">
          &copy; All rights reserved. Made by <span class="animate-underline"><a class="animate-target text-dark-emphasis text-decoration-none" href="https://createx.studio/" target="_blank" rel="noreferrer">Createx Studio</a></span>
        </p>
      </footer>
    </div>


    <!-- Cover image visible on screens > 992px wide -->
    <div class="d-none d-lg-block w-100 py-4 ms-auto" style="max-width: 1034px">
      <div class="d-flex flex-column justify-content-end h-100 rounded-5 overflow-hidden">
        <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark" style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
        <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark" style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
        <div class="ratio position-relative z-2" style="--cz-aspect-ratio: calc(1030 / 1032 * 100%)">
          <img src="assets/img/account-cover.png" alt="Girl">
        </div>
      </div>
    </div>
  </div>
</main>
</x-www-app>
