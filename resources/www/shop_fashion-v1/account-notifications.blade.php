<x-www-layout>

  <div class="container py-5 mt-n2 mt-sm-0">
    <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">


      <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <aside class="col-lg-3">
        @partials('account_side')
    </aside>


      <!-- Notifications content -->
      <div class="col-lg-9">
        <div class="ps-lg-3 ps-xl-0">

          <!-- Page title + Master switch -->
          <div class="nav flex-nowrap align-items-center justify-content-between pb-3 mb-3 mb-lg-4">
            <h1 class="h2 me-3 mb-0">Notifications</h1>
            <div class="form-check form-switch nav-link animate-underline p-0 m-0" data-master-checkbox='{"container": "#notifications", "label": "Select all", "labelChecked": "Unselect all"}'>
              <label for="notifications-master" class="form-check-label animate-target me-5">Unselect all</label>
              <div class="ps-3">
                <input type="checkbox" class="form-check-input" id="notifications-master" checked>
              </div>
            </div>
          </div>


          @livewire("site-notification-user")

          <!-- Communication channels -->
          <h2 class="h6 pt-5 mt-md-2">Communication channels</h2>
          <div class="d-flex flex-column gap-2">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="sms">
              <label for="sms" class="form-check-label">SMS</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="whatsapp">
              <label for="whatsapp" class="form-check-label">Messages in WhatsApp</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="email" checked>
              <label for="email" class="form-check-label">Email</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="push">
              <label for="push" class="form-check-label">App push notifications</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-www-layout>
