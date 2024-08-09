<x-www-layout>

    <div class="container py-5 mt-n2 mt-sm-0">
        <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

            <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
            <aside class="col-lg-3">
                @partials('account_side')
            </aside>

            <!-- Personal info content -->
            <div class="col-lg-9">
                <div class="ps-lg-3 ps-xl-0">

                    <!-- Page title -->
                    <h1 class="h2 mb-3 mb-sm-2">Personal info</h1>

                    <div class="border-bottom py-4">
                        <div class="row">
                            <div class="col-2">
                                @livewire('avata-image', [
                                    'width' => '128px',
                                ])
                            </div>
                            <div class="col-10">
                                @livewire('profile-status', [])
                            </div>
                        </div>
                    </div>

                    <div class="border-bottom py-4">
                        <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
                            <h2 class="h6 mb-0">Phone</h2>
                        </div>
                        @livewire('profile-phone')
                    </div>

                    <!-- Basic info -->
                    <div class="border-bottom py-4">
                        <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
                            <h2 class="h6 mb-0">Basic info</h2>
                            <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed"
                                href=".basic-info" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="basicInfoPreview basicInfoEdit">Edit</a>
                        </div>
                        <div class="collapse basic-info show" id="basicInfoPreview">
                            <ul class="list-unstyled fs-sm m-0">
                                <li>Susan Gardner</li>
                                <li>May 12, 1996</li>
                                <li>English</li>
                            </ul>
                        </div>
                        <div class="collapse basic-info" id="basicInfoEdit">
                            <form class="row g-3 g-sm-4 needs-validation" novalidate>
                                <div class="col-sm-6">
                                    <label for="fn" class="form-label">First name</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="fn" value="Susan"
                                            required>
                                        <div class="invalid-feedback">Please enter your first name!</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="ln" class="form-label">Last name</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="ln" value="Gardner"
                                            required>
                                        <div class="invalid-feedback">Please enter your last name!</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="birthdate" class="form-label">Date of birth</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control form-icon-end" id="birthdate"
                                            data-datepicker='{
                      "dateFormat": "F j, Y",
                      "defaultDate": "May 15, 1996"
                    }'
                                            placeholder="Choose date">
                                        <i
                                            class="ci-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Language</label>
                                    <select class="form-select"
                                        data-select='{
                    "placeholderValue": "Select language",
                    "choices": [
                      {
                        "value": "",
                        "label": "Select language",
                        "placeholder": true
                      },
                      {
                        "value": "English",
                        "label": "<div class=\"d-flex align-items-center\"><img src=\"assets/img/flags/en-us.png\" class=\"flex-shrink-0 me-2\" width=\"20\" alt=\"English\"> English</div>",
                        "selected": true
                      },
                      {
                        "value": "Français",
                        "label": "<div class=\"d-flex align-items-center\"><img src=\"assets/img/flags/fr.png\" class=\"flex-shrink-0 me-2\" width=\"20\" alt=\"Français\"> Français</div>"
                      },
                      {
                        "value": "Deutsch",
                        "label": "<div class=\"d-flex align-items-center\"><img src=\"assets/img/flags/de.png\" class=\"flex-shrink-0 me-2\" width=\"20\" alt=\"Deutsch\"> Deutsch</div>"
                      },
                      {
                        "value": "Italiano",
                        "label": "<div class=\"d-flex align-items-center\"><img src=\"assets/img/flags/it.png\" class=\"flex-shrink-0 me-2\" width=\"20\" alt=\"Italiano\"> Italiano</div>"
                      }
                    ]
                  }'
                                        data-select-template="true"></select>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex gap-3 pt-2 pt-sm-0">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="collapse"
                                            data-bs-target=".basic-info" aria-expanded="true"
                                            aria-controls="basicInfoPreview basicInfoEdit">Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="border-bottom py-4">
                        <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
                            <div class="d-flex align-items-center gap-3 me-4">
                                <h2 class="h6 mb-0">Contact</h2>
                            </div>
                            <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed"
                                href=".contact-info" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="contactInfoPreview contactInfoEdit">Edit</a>
                        </div>
                        <div class="collapse contact-info show" id="contactInfoPreview">
                            <ul class="list-unstyled fs-sm m-0">
                                <li class="mb-1">susan.gardner@email.com</li>
                                <li>+1 (805) 348 95 72 <span class="text-success ms-1">Verified</span></li>
                            </ul>
                        </div>
                        <div class="collapse contact-info" id="contactInfoEdit">
                            <form class="row g-3 g-sm-4 needs-validation" novalidate>
                                <div class="col-sm-6">
                                    <label for="email" class="form-label">Email address</label>
                                    <div class="position-relative">
                                        <input type="email" class="form-control" id="email"
                                            value="susan.gardner@email.com" required>
                                        <div class="invalid-feedback">Please enter a valid email address!</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone" class="form-label">Phone number</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="phone"
                                            data-input-format='{"numericOnly": true, "delimiters": ["+1 (", ")", " "], "blocks": [0, 3, 0, 3, 2, 2]}'
                                            placeholder="+1 (___) ___ __ __" value="+1 (805) 348 95 72" required>
                                        <div class="invalid-feedback">Please enter your phone number!</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex gap-3 pt-2 pt-sm-0">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="collapse"
                                            data-bs-target=".contact-info" aria-expanded="true"
                                            aria-controls="contactInfoPreview contactInfoEdit">Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="border-bottom py-4">
                        <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
                            <div class="d-flex align-items-center gap-3 me-4">
                                <h2 class="h6 mb-0">Password</h2>
                            </div>
                            <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed"
                                href=".password-change" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="passChangePreview passChangeEdit">Edit</a>
                        </div>
                        <div class="collapse password-change show" id="passChangePreview">
                            <ul class="list-unstyled fs-sm m-0">
                                <li>**************</li>
                            </ul>
                        </div>
                        <div class="collapse password-change" id="passChangeEdit">
                            <form class="row g-3 g-sm-4 needs-validation" novalidate>
                                <div class="col-sm-6">
                                    <label for="current-password" class="form-label">Current password</label>
                                    <div class="password-toggle">
                                        <input type="password" class="form-control" id="current-password"
                                            placeholder="Enter your current password" required>
                                        <label class="password-toggle-button" aria-label="Show/hide password">
                                            <input type="checkbox" class="btn-check">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="new-password" class="form-label">New password</label>
                                    <div class="password-toggle">
                                        <input type="password" class="form-control" id="new-password"
                                            placeholder="Create new password" required>
                                        <label class="password-toggle-button" aria-label="Show/hide password">
                                            <input type="checkbox" class="btn-check">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex gap-3 pt-2 pt-sm-0">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="collapse"
                                            data-bs-target=".password-change" aria-expanded="true"
                                            aria-controls="passChangePreview passChangeEdit">Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Delete account -->
                    <div class="pt-3 mt-2 mt-sm-3">
                        <h2 class="h6">Delete account</h2>
                        <p class="fs-sm">When you delete your account, your public profile will be deactivated
                            immediately. If you change your mind before the 14 days are up, sign in with your email and
                            password, and we'll send you a link to reactivate your account.</p>
                        <a class="text-danger fs-sm fw-medium" href="#!">Delete account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-www-layout>
