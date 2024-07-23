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

    <!-- Contact forms -->
    <section class="bg-body-tertiary pb-1 pb-sm-3 pb-md-4 pb-lg-5" style="margin-top: -110px; padding-top: 110px">
      <div class="container py-5 mb-xxl-3">

        <!-- Page title -->
        <h1 class="text-center pb-2 pb-sm-3 mt-lg-3 mt-xl-4">Contact our specialists</h1>

        <!-- Nav pills -->
        <ul class="nav nav-pills justify-content-center pb-2 pb-sm-3 mb-3" role="tablist">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" id="customers-tab" data-bs-toggle="pill" data-bs-target="#customers" role="tab" aria-controls="customers" aria-selected="true">
              <i class="ci-shopping-bag fs-base me-2 ms-n1"></i>
              For Customers
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="retailers-tab" data-bs-toggle="pill" data-bs-target="#retailers" type="button" role="tab" aria-controls="retailers" aria-selected="false">
              <i class="ci-box fs-base me-2 ms-n1"></i>
              For Retailers
            </button>
          </li>
        </ul>

        <!-- Forms wrapper -->
        <div class="row justify-content-center">
          <div class="col-md-11 col-lg-9 col-xl-8">
            <div class="tab-content bg-body rounded-5 py-3 py-sm-4 px-4 px-sm-5">
              <p class="text-center py-3 mx-auto" style="max-width: 450px">Fill out the form below and we will reply within 24 hours. You may also directly reach out to us at <a class="text-decoration-none" href="mailto:info@cartzilla.com">info@cartzilla.com</a></p>

              <!-- Customers form -->
              <div class="tab-pane fade show active" id="customers" role="tabpanel" aria-labelledby="customers-tab">
                <form class="needs-validation" novalidate>
                  <div class="row g-4">
                    <div class="col-md-6 position-relative">
                      <label for="fn" class="form-label">First name *</label>
                      <input type="text" class="form-control form-control-lg rounded-pill" id="fn" required>
                      <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your first name!</div>
                    </div>
                    <div class="col-md-6 position-relative">
                      <label for="ln" class="form-label">Last name *</label>
                      <input type="text" class="form-control form-control-lg rounded-pill" id="ln" required>
                      <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your last name!</div>
                    </div>
                    <div class="col-md-6 position-relative">
                      <label for="email" class="form-label">Email *</label>
                      <input type="email" class="form-control form-control-lg rounded-pill" id="email" required>
                      <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your email address!</div>
                    </div>
                    <div class="col-md-6">
                      <label for="phone" class="form-label">Phone number</label>
                      <input type="tel" class="form-control form-control-lg rounded-pill" id="phone" data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}' placeholder="+1 ___ ___ __">
                    </div>
                    <div class="col-12 position-relative">
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
                    <div class="col-12 position-relative">
                      <label for="message" class="form-label">Message *</label>
                      <textarea class="form-control form-control-lg rounded-6" id="message" rows="5" required></textarea>
                      <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Write your message!</div>
                    </div>
                    <div class="col-12 text-center pt-2 pb-3">
                      <button type="submit" class="btn btn-lg btn-dark rounded-pill">Send message</button>
                    </div>
                  </div>
                </form>
              </div>

              <!-- Retailers form -->
              <div class="tab-pane fade" id="retailers" role="tabpanel" aria-labelledby="retailers-tab">
                <form class="needs-validation" novalidate>
                  <div class="row g-4">
                    <div class="col-md-6 position-relative">
                      <label for="company" class="form-label">Company name *</label>
                      <input type="text" class="form-control form-control-lg rounded-pill" id="company" required>
                      <div class="invalid-tooltip bg-transparent py-0 ps-3">Enter your company name!</div>
                    </div>
                    <div class="col-md-6 position-relative">
                      <label for="person" class="form-label">Contact person *</label>
                      <input type="text" class="form-control form-control-lg rounded-pill" id="person" required>
                      <div class="invalid-tooltip bg-transparent py-0 ps-3">Enter contact person name!</div>
                    </div>
                    <div class="col-md-6 position-relative">
                      <label for="email-r" class="form-label">Email *</label>
                      <input type="email" class="form-control form-control-lg rounded-pill" id="email-r" required>
                      <div class="invalid-tooltip bg-transparent py-0 ps-3">Enter company email address!</div>
                    </div>
                    <div class="col-md-6">
                      <label for="phone-r" class="form-label">Phone number</label>
                      <input type="tel" class="form-control form-control-lg rounded-pill" id="phone-r" data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}' placeholder="+1 ___ ___ __">
                    </div>
                    <div class="col-md-6 position-relative">
                      <label for="website" class="form-label">Website</label>
                      <input type="text" class="form-control form-control-lg rounded-pill" id="website">
                    </div>
                    <div class="col-md-6 position-relative">
                      <label class="form-label">Subject *</label>
                      <select class="form-select form-select-lg rounded-pill" data-select='{
                        "classNames": {
                          "containerInner": "form-select form-select-lg rounded-pill"
                        }
                      }' required>
                        <option value="">Select subject</option>
                        <option value="General inquiry">General inquiry</option>
                        <option value="Product information">Product information</option>
                        <option value="Technical support">Technical support</option>
                        <option value="Account assistance">Affiliation program</option>
                        <option value="Security concerns">Marketing and promotions</option>
                        <option value="Security concerns">Press and media inquiries</option>
                      </select>
                      <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Select the subject of your message!</div>
                    </div>
                    <div class="col-12 position-relative">
                      <label for="message-r" class="form-label">Message *</label>
                      <textarea class="form-control form-control-lg rounded-6" id="message-r" rows="5" required></textarea>
                      <div class="invalid-tooltip bg-transparent py-0 ps-3">Write your message!</div>
                    </div>
                    <div class="col-12 text-center pt-2 pb-3">
                      <button type="submit" class="btn btn-lg btn-dark rounded-pill">Send message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact info -->
    <section class="container pt-5 mt-xxl-3">
      <div class="row row-cols-1 row-cols-sm-3 gy-4 gy-sm-0 pt-1 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
        <div class="col text-center mb-2 mb-sm-0">
          <i class="ci-phone-outgoing bg-dark text-white fs-4 rounded-circle p-3 mb-3 d-inline-flex d-none-dark"></i>
          <i class="ci-phone-outgoing bg-body-secondary text-white fs-4 rounded-circle p-3 mb-3 d-none d-inline-flex-dark"></i>
          <h3 class="text-body fs-sm fw-normal mb-2">Call us directly</h3>
          <div class="nav animate-underline justify-content-center">
            <a class="nav-link animate-target text-dark-emphasis fs-base p-0" href="tel:+15053753082">+1&nbsp;50&nbsp;537&nbsp;53&nbsp;082</a>
          </div>
        </div>
        <div class="col text-center mb-2 mb-sm-0">
          <i class="ci-mail bg-dark text-white fs-4 rounded-circle p-3 mb-3 d-inline-flex d-none-dark"></i>
          <i class="ci-mail bg-body-secondary text-white fs-4 rounded-circle p-3 mb-3 d-none d-inline-flex-dark"></i>
          <h3 class="text-body fs-sm fw-normal mb-2">Send us a message</h3>
          <div class="nav animate-underline justify-content-center">
            <a class="nav-link animate-target text-dark-emphasis fs-base p-0" href="mailto:info@cartzilla.com">info@cartzilla.com</a>
          </div>
        </div>
        <div class="col text-center">
          <i class="ci-help-circle bg-dark text-white fs-4 rounded-circle p-3 mb-3 d-inline-flex d-none-dark"></i>
          <i class="ci-help-circle bg-body-secondary text-white fs-4 rounded-circle p-3 mb-3 d-none d-inline-flex-dark"></i>
          <h3 class="text-body fs-sm fw-normal mb-2">Looking for support?</h3>
          <div class="nav animate-underline justify-content-center">
            <a class="nav-link animate-target text-dark-emphasis fs-base p-0" href="#!">Help Center</a>
          </div>
        </div>
      </div>
    </section>


    <!-- Store locations + Map in lightbox -->
    <section class="container py-1 py-sm-2 py-md-3 py-lg-4 py-xl-5 my-xxl-3">
      <div class="row row-cols-1 row-cols-md-2 g-0 overflow-hidden rounded-5 my-5">

        <!-- Map -->
        <div class="col position-relative">
          <div class="ratio ratio-4x3"></div>
          <img src="/assets/img/blog/grid/v2/video01.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
        </div>

        <!-- Contact details -->
        <div class="col bg-body-tertiary order-md-1 py-5 px-4 px-xl-5">
          <div class="py-md-4 py-lg-5 px-md-4 px-lg-5">
            <h1 class="pb-2 pb-sm-3 pb-lg-0 mb-md-4 mb-lg-5">Our stores</h1>
            <ul class="list-unstyled pb-sm-2 mb-0">
              <li class="lh-lg">New York 11741, USA<br>396 Lillian Bolavandy, Holbrook</li>
              <li class="nav">
                <a class="nav-link animate-underline fw-semibold px-0" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30908.594922615324!2d-73.07331970206108!3d40.788157341303005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8483b8bffed93%3A0x53467ceb834b7397!2s396%20Lillian%20Blvd%2C%20Holbrook%2C%20NY%2011741%2C%20USA!5e0!3m2!1sen!2s!4v1706086459668!5m2!1sen!2s" data-glightbox="width: 100vw; height: 100vh;" data-gallery="map1">
                  <span class="animate-target">Show on map</span>
                  <i class="ci-chevron-right fs-lg ms-2" style="margin-top: .1875rem"></i>
                </a>
              </li>
            </ul>
            <hr>
            <ul class="list-unstyled pb-sm-2 mb-0">
              <li class="lh-lg pt-2">California 32806, USA<br>514 S. Magnolia St., San Francisco</li>
              <li class="nav">
                <a class="nav-link animate-underline fw-semibold px-0" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.541405538252!2d-122.43545002315028!3d37.80078581065977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580da2de92663%3A0x343ead1106a153fa!2sMagnolia%20St%2C%20San%20Francisco%2C%20CA%2094123%2C%20USA!5e0!3m2!1sen!2s!4v1706785415174!5m2!1sen!2s" data-glightbox="width: 100vw; height: 100vh;" data-gallery="map2">
                  <span class="animate-target">Show on map</span>
                  <i class="ci-chevron-right fs-lg ms-2" style="margin-top: .1875rem"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>

</x-www-layout>


