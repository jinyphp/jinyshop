<!-- Primary shipping address -->


          <!-- Alternative shipping address -->
          <div class="border-bottom py-4">
            <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
              <div class="d-flex align-items-center gap-3 me-4">
                <h2 class="h6 mb-0">Alternative shipping address</h2>
              </div>
              <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed" href=".alternative-address" data-bs-toggle="collapse" aria-expanded="false" aria-controls="alternativeAddressPreview alternativeAddressEdit">Edit</a>
            </div>
            <div class="collapse alternative-address show" id="alternativeAddressPreview">
              <ul class="list-unstyled fs-sm m-0">
                <li>Florida 32806, USA</li>
                <li>514 S. Magnolia St., Orlando</li>
              </ul>
            </div>
            <div class="collapse alternative-address" id="alternativeAddressEdit">
              <form class="row g-3 g-sm-4 needs-validation" novalidate>
                <div class="col-sm-6">
                  <div class="position-relative">
                    <label class="form-label">Country</label>
                    <select class="form-select" data-select='{
                      "searchEnabled": true,
                      "classNames": {
                        "containerInner": "form-select"
                      }
                    }' aria-label="Select country" required>
                      <option value="">Select country...</option>
                      <optgroup label="Africa">
                        <option value="Nigeria">Nigeria</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Egypt">Egypt</option>
                        <option value="Ethiopia">Ethiopia</option>
                      </optgroup>
                      <optgroup label="Asia">
                        <option value="China">China</option>
                        <option value="India">India</option>
                        <option value="Japan">Japan</option>
                        <option value="South Korea">South Korea</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                      </optgroup>
                      <optgroup label="Europe">
                        <option value="Germany">Germany</option>
                        <option value="France">France</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Italy">Italy</option>
                        <option value="Spain">Spain</option>
                      </optgroup>
                      <optgroup label="North America">
                        <option value="United States" selected>United States</option>
                        <option value="Canada">Canada</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Costa Rica">Costa Rica</option>
                      </optgroup>
                      <optgroup label="South America">
                        <option value="Brazil">Brazil</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Chile">Chile</option>
                        <option value="Peru">Peru</option>
                      </optgroup>
                      <optgroup label="Oceania">
                        <option value="Australia">Australia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                      </optgroup>
                    </select>
                    <div class="invalid-feedback">Please select your country!</div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="position-relative">
                    <label class="form-label">City</label>
                    <select class="form-select" data-select='{
                      "searchEnabled": true,
                      "classNames": {
                        "containerInner": "form-select"
                      }
                    }' aria-label="Select city" required>
                      <option value="">Select city...</option>
                      <option value="Austin">Austin</option>
                      <option value="Charlotte">Charlotte</option>
                      <option value="Chicago">Chicago</option>
                      <option value="Columbus">Columbus</option>
                      <option value="Dallas">Dallas</option>
                      <option value="Houston">Houston</option>
                      <option value="Jacksonville">Jacksonville</option>
                      <option value="Los Angeles">Los Angeles</option>
                      <option value="New York">New York</option>
                      <option value="Orlando" selected>Orlando</option>
                      <option value="Philadelphia">Philadelphia</option>
                      <option value="Phoenix">Phoenix</option>
                      <option value="San Antonio">San Antonio</option>
                      <option value="San Diego">San Diego</option>
                      <option value="San Jose">San Jose</option>
                    </select>
                    <div class="invalid-feedback">Please select your city!</div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="position-relative">
                    <label for="asa-zip" class="form-label">ZIP code</label>
                    <input type="text" class="form-control" id="asa-zip" value="32806" required>
                    <div class="invalid-feedback">Please enter your ZIP code!</div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="position-relative">
                    <label for="asa-address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="asa-address" value="514 S. Magnolia St." required>
                    <div class="invalid-feedback">Please enter your address!</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check mb-0">
                    <input type="checkbox" class="form-check-input" id="set-primary-2">
                    <label for="set-primary-2" class="form-check-label">Set as primary address</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-flex gap-3 pt-2 pt-sm-0">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target=".alternative-address" aria-expanded="true" aria-controls="alternativeAddressPreview alternativeAddressEdit">Close</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
