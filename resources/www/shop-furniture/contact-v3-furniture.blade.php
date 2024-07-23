<x-www-layout>

  <!-- Shopping cart offcanvas (Empty state) -->
  <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">
    <div class="offcanvas-header py-3 pt-lg-4">
      <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body text-center">
      <svg class="d-block mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 29.5 30"><path class="text-body-tertiary" d="M17.8 4c.4 0 .8-.3.8-.8v-2c0-.4-.3-.8-.8-.8-.4 0-.8.3-.8.8v2c0 .4.3.8.8.8zm3.2.6c.4.2.8 0 1-.4l.4-.9c.2-.4 0-.8-.4-1s-.8 0-1 .4l-.4.9c-.2.4 0 .9.4 1zm-7.5-.4c.2.4.6.6 1 .4s.6-.6.4-1l-.4-.9c-.2-.4-.6-.6-1-.4s-.6.6-.4 1l.4.9z" fill="currentColor"/><path class="text-body-emphasis" d="M10.7 24.5c-1.5 0-2.8 1.2-2.8 2.8S9.2 30 10.7 30s2.8-1.2 2.8-2.8-1.2-2.7-2.8-2.7zm0 4c-.7 0-1.2-.6-1.2-1.2s.6-1.2 1.2-1.2 1.2.6 1.2 1.2-.5 1.2-1.2 1.2zm11.1-4c-1.5 0-2.8 1.2-2.8 2.8a2.73 2.73 0 0 0 2.8 2.8 2.73 2.73 0 0 0 2.8-2.8c0-1.6-1.3-2.8-2.8-2.8zm0 4c-.7 0-1.2-.6-1.2-1.2s.6-1.2 1.2-1.2 1.2.6 1.2 1.2-.6 1.2-1.2 1.2zM8.7 18h16c.3 0 .6-.2.7-.5l4-10c.2-.5-.2-1-.7-1H9.3c-.4 0-.8.3-.8.8s.4.7.8.7h18.3l-3.4 8.5H9.3L5.5 1C5.4.7 5.1.5 4.8.5h-4c-.5 0-.8.3-.8.7s.3.8.8.8h3.4l3.7 14.6a3.24 3.24 0 0 0-2.3 3.1C5.5 21.5 7 23 8.7 23h16c.4 0 .8-.3.8-.8s-.3-.8-.8-.8h-16a1.79 1.79 0 0 1-1.8-1.8c0-1 .9-1.6 1.8-1.6z" fill="currentColor"/></svg>
      <h6 class="mb-2">Your shopping cart is currently empty!</h6>
      <p class="fs-sm mb-4">Explore our wide range of products and add items to your cart to proceed with your purchase.</p>
      <a class="btn btn-dark rounded-pill" href="shop-catalog-furniture">Continue shopping</a>
    </div>
  </div>

  <!-- Page content -->
  <main class="content-wrapper">
    <div class="container py-5 mb-2 mb-sm-3 mb-md-4 mb-lg-5 mt-lg-3 mt-xl-4">

      <!-- Page title -->
      <h1 class="text-center">Contact us</h1>
      <p class="text-center pb-2 pb-sm-3">Fill out the form below and we will reply within 24 hours</p>


      <!-- Form + Image -->
      <section class="row row-cols-1 row-cols-md-2 g-0 overflow-hidden rounded-5">

        <!-- Contact form -->
        <div class="col bg-body-tertiary py-5 px-4 px-xl-5">
          <form class="needs-validation py-md-2 px-md-1 px-lg-3 mx-lg-3" novalidate>
            <div class="position-relative mb-4">
              <label for="name" class="form-label">Name *</label>
              <input type="text" class="form-control form-control-lg rounded-pill" id="name" required>
              <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your name!</div>
            </div>
            <div class="position-relative mb-4">
              <label for="email" class="form-label">Email *</label>
              <input type="email" class="form-control form-control-lg rounded-pill" id="email" required>
              <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your email address!</div>
            </div>
            <div class="position-relative mb-4">
              <label class="form-label">Subject *</label>
              <select class="form-select form-select-lg rounded-pill" data-select='{
                "classNames": {
                  "containerInner": "form-select form-select-lg rounded-pill"
                }
              }' required>
                <option value="">Select subject</option>
                <option value="General inquiry">General inquiry</option>
                <option value="Order status">Order status</option>
                <option value="Product information">Product information</option>
                <option value="Technical support">Technical support</option>
                <option value="Website feedback">Website feedback</option>
                <option value="Account assistance">Account assistance</option>
                <option value="Security concerns">Security concerns</option>
              </select>
              <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Select the subject of your message!</div>
            </div>
            <div class="position-relative mb-4">
              <label for="message" class="form-label">Message *</label>
              <textarea class="form-control form-control-lg rounded-6" id="message" rows="5" required></textarea>
              <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Write your message!</div>
            </div>
            <div class="pt-2">
              <button type="submit" class="btn btn-lg btn-dark rounded-pill">Send message</button>
            </div>
          </form>
        </div>

        <!-- Image -->
        <div class="col position-relative">
          <img src="/assets/img/contact/form-image.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
        </div>
      </section>


      <!-- Contacts -->
      <section class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pt-5 pb-3 pb-md-4 pb-lg-3 mt-lg-0 mt-xxl-4">
        <div class="col text-center pt-1 pt-sm-2 pt-md-3">
          <div class="position-relative d-inline-block bg-body-tertiary text-dark-emphasis fs-xl rounded-circle p-4 mb-3">
            <i class="ci-phone-outgoing position-absolute top-50 start-50 translate-middle"></i>
          </div>
          <h3 class="h6">Call us directly</h3>
          <ul class="list-unstyled m-0">
            <li class="nav animate-underline justify-content-center">
              Customers:
              <a class="nav-link animate-target fs-base ms-1 p-0" href="tel:+15053753082">+1&nbsp;50&nbsp;537&nbsp;53&nbsp;082</a>
            </li>
            <li class="nav animate-underline justify-content-center">
              Franchise:
              <a class="nav-link animate-target fs-base ms-1 p-0" href="tel:+15053753000">+1&nbsp;50&nbsp;537&nbsp;53&nbsp;000</a>
            </li>
          </ul>
        </div>
        <div class="col text-center pt-1 pt-sm-2 pt-md-3">
          <div class="position-relative d-inline-block bg-body-tertiary text-dark-emphasis fs-xl rounded-circle p-4 mb-3">
            <i class="ci-mail position-absolute top-50 start-50 translate-middle"></i>
          </div>
          <h3 class="h6">Send a message</h3>
          <ul class="list-unstyled m-0">
            <li class="nav animate-underline justify-content-center">
              Customers:
              <a class="nav-link animate-target fs-base ms-1 p-0" href="mailto:info@cartzilla.com">info@cartzilla.com</a>
            </li>
            <li class="nav animate-underline justify-content-center">
              Franchise:
              <a class="nav-link animate-target fs-base ms-1 p-0" href="mailto:franchise@cartzilla.com">franchise@cartzilla.com</a>
            </li>
          </ul>
        </div>
        <div class="col text-center pt-1 pt-sm-2 pt-md-3">
          <div class="position-relative d-inline-block bg-body-tertiary text-dark-emphasis fs-xl rounded-circle p-4 mb-3">
            <i class="ci-map-pin position-absolute top-50 start-50 translate-middle"></i>
          </div>
          <h3 class="h6">Store location</h3>
          <ul class="list-unstyled m-0">
            <li>New York 11741, USA</li>
            <li>396 Lillian Bolavandy, Holbrook</li>
          </ul>
        </div>
        <div class="col text-center pt-1 pt-sm-2 pt-md-3">
          <div class="position-relative d-inline-block bg-body-tertiary text-dark-emphasis fs-xl rounded-circle p-4 mb-3">
            <i class="ci-clock position-absolute top-50 start-50 translate-middle"></i>
          </div>
          <h3 class="h6">Working hours</h3>
          <ul class="list-unstyled m-0">
            <li>Mon - Fri  8:00 - 18:00</li>
            <li>Sut - Sun  10:00 - 16:00</li>
          </ul>
        </div>
      </section>

      <hr class="my-lg-5">


      <!-- Help center CTA -->
      <section class="text-center pb-xxl-3 pt-4 pt-lg-3">
        <h2 class="pt-md-2 pt-lg-0">Looking for support?</h2>
        <p class="pb-2 pb-sm-3">We might already have what you're looking for. See our FAQs or head to our dedicated Help Center.</p>
        <a class="btn btn-lg btn-outline-dark rounded-pill" href="#!">Help Center</a>
      </section>
    </div>
  </main>

</x-www-layout>




