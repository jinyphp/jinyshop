<x-www-layout>

    <!-- Review form modal -->
    <div class="modal fade" id="reviewForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="reviewFormLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form class="modal-content needs-validation" novalidate>
          <div class="modal-header border-0">
            <h5 class="modal-title" id="reviewFormLabel">Leave a review</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-3 pt-0">
            <div class="mb-3">
              <label for="review-name" class="form-label">Your name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="review-name" required>
              <div class="invalid-feedback">Please enter your name!</div>
              <small class="form-text">Will be displayed on the comment.</small>
            </div>
            <div class="mb-3">
              <label for="review-email" class="form-label">Your email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="review-email" required>
              <div class="invalid-feedback">Please provide a valid email address!</div>
              <small class="form-text">Authentication only - we won't spam you.</small>
            </div>
            <div class="mb-3">
              <label class="form-label">Rating <span class="text-danger">*</span></label>
              <select class="form-select" data-select='{
                "classNames": {
                  "containerInner": "form-select"
                },
                "placeholderValue": "Choose rating",
                "choices": [
                  {
                    "value": "",
                    "label": "Choose rating",
                    "placeholder": true
                  },
                  {
                    "value": "1",
                    "label": "<span class=\"visually-hidden\">1 star</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "1 star"
                    }
                  },
                  {
                    "value": "2",
                    "label": "<span class=\"visually-hidden\">2 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "2 stars"
                    }
                  },
                  {
                    "value": "3",
                    "label": "<span class=\"visually-hidden\">3 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "3 stars"
                    }
                  },
                  {
                    "value": "4",
                    "label": "<span class=\"visually-hidden\">4 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "4 stars"
                    }
                  },
                  {
                    "value": "5",
                    "label": "<span class=\"visually-hidden\">5 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "5 stars"
                    }
                  }
                ]
              }' data-select-template="true" required></select>
              <div class="invalid-feedback">Please choose your rating!</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="review-text">Review <span class="text-danger">*</span></label>
              <textarea class="form-control" rows="4" id="review-text" required></textarea>
              <div class="invalid-feedback">Please write a review!</div>
              <small class="form-text">Your review must be at least 50 characters.</small>
            </div>
            <div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="yes" name="recommend" checked>
                <label for="yes" class="form-check-label">Yes, I recommend</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="no" name="recommend">
                <label for="no" class="form-check-label">No, I don't recommend</label>
              </div>
            </div>
          </div>
          <div class="modal-footer flex-nowrap gap-3 border-0 px-4">
            <button type="reset" class="btn btn-secondary w-100 m-0" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-dark w-100 m-0">Submit review</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Size chart (guide) modal -->
    <div class="modal fade" id="sizeGuide" tabindex="-1" aria-labelledby="reviewFormLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-body-tertiary border-0 py-2 ps-2 pe-4">
            <ul class="nav nav-tabs flex-nowrap text-nowrap py-2" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" href="#womens" id="womens-sizes" data-bs-toggle="tab" role="tab" aria-controls="mens" aria-selected="true">Women's sizes</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#mens" id="mens-sizes" data-bs-toggle="tab" role="tab" aria-controls="womens" aria-selected="false" tabindex="-1">Men's sizes</a>
              </li>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-0">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="womens" role="tabpanel" aria-labelledby="womens-sizes">
                <div class="table-responsive">
                  <table class="table fs-sm text-center mb-0">
                    <thead>
                      <tr>
                        <th scope="col" class="align-middle">US<br>Sizes</th>
                        <th scope="col" class="align-middle">Euro<br>Sizes</th>
                        <th scope="col" class="align-middle">UK<br>Sizes</th>
                        <th scope="col" class="align-middle">Inches</th>
                        <th scope="col" class="align-middle">CM</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-medium">4</td>
                        <td>35</td>
                        <td>2</td>
                        <td>8.1875"</td>
                        <td>20.8</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">4.5</td>
                        <td>35</td>
                        <td>2.5</td>
                        <td>8.375"</td>
                        <td>21.3</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">5</td>
                        <td>35-36</td>
                        <td>3</td>
                        <td>8.5"</td>
                        <td>21.6</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">5.5</td>
                        <td>36</td>
                        <td>3.5</td>
                        <td>8.75"</td>
                        <td>22.2</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">6</td>
                        <td>36-37</td>
                        <td>4</td>
                        <td>8.875"</td>
                        <td>22.5</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">6.5</td>
                        <td>37</td>
                        <td>4.5</td>
                        <td>9.0625"</td>
                        <td>23</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">7</td>
                        <td>37-38</td>
                        <td>5</td>
                        <td>9.25"</td>
                        <td>23.5</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">7.5</td>
                        <td>38</td>
                        <td>5.5</td>
                        <td>9.375"</td>
                        <td>23.8</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">8</td>
                        <td>38-39</td>
                        <td>6</td>
                        <td>9.5"</td>
                        <td>24.1</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">8.5</td>
                        <td>39</td>
                        <td>6.5</td>
                        <td>9.6875"</td>
                        <td>24.6</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">9</td>
                        <td>39-40</td>
                        <td>7</td>
                        <td>9.875"</td>
                        <td>25.1</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">9.5</td>
                        <td>40</td>
                        <td>7.5</td>
                        <td>10"</td>
                        <td>25.4</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">10</td>
                        <td>40-41</td>
                        <td>8</td>
                        <td>10.1875"</td>
                        <td>25.9</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">10.5</td>
                        <td>41</td>
                        <td>8.5</td>
                        <td>10.3125"</td>
                        <td>26.2</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">11</td>
                        <td>41-42</td>
                        <td>9</td>
                        <td>10.5"</td>
                        <td>26.7</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">11.5</td>
                        <td>42</td>
                        <td>9.5</td>
                        <td>10.6875"</td>
                        <td>27.1</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">12</td>
                        <td>42-43</td>
                        <td>10</td>
                        <td>10.875"</td>
                        <td>27.6</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="mens" role="tabpanel" aria-labelledby="mens-sizes">
                <div class="table-responsive">
                  <table class="table fs-sm text-center mb-0">
                    <thead>
                      <tr>
                        <th scope="col" class="align-middle">US<br>Sizes</th>
                        <th scope="col" class="align-middle">Euro<br>Sizes</th>
                        <th scope="col" class="align-middle">UK<br>Sizes</th>
                        <th scope="col" class="align-middle">Inches</th>
                        <th scope="col" class="align-middle">CM</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-medium">6</td>
                        <td>39</td>
                        <td>5.5</td>
                        <td>9.25"</td>
                        <td>23.5</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">6.5</td>
                        <td>39</td>
                        <td>6</td>
                        <td>9.5"</td>
                        <td>24.1</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">7</td>
                        <td>40</td>
                        <td>6.5</td>
                        <td>9.625"</td>
                        <td>24.4</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">7.5</td>
                        <td>40-41</td>
                        <td>7</td>
                        <td>9.75"</td>
                        <td>24.8</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">8</td>
                        <td>41</td>
                        <td>7.5</td>
                        <td>9.9375"</td>
                        <td>25.4</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">8.5</td>
                        <td>41-42</td>
                        <td>8</td>
                        <td>10.125"</td>
                        <td>25.7</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">9</td>
                        <td>42</td>
                        <td>8.5</td>
                        <td>10.25"</td>
                        <td>26</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">9.5</td>
                        <td>42-43</td>
                        <td>9</td>
                        <td>10.4375"</td>
                        <td>26.7</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">10</td>
                        <td>43</td>
                        <td>9.5</td>
                        <td>10.5625"</td>
                        <td>27</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">10.5</td>
                        <td>43-44</td>
                        <td>10</td>
                        <td>10.75"</td>
                        <td>27.3</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">11</td>
                        <td>44</td>
                        <td>10.5</td>
                        <td>10.9375"</td>
                        <td>27.9</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">11.5</td>
                        <td>44-45</td>
                        <td>11</td>
                        <td>11.125"</td>
                        <td>28.3</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">12</td>
                        <td>45</td>
                        <td>11.5</td>
                        <td>11.25"</td>
                        <td>28.6</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">13</td>
                        <td>46</td>
                        <td>12.5</td>
                        <td>11.5625"</td>
                        <td>29.4</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">14</td>
                        <td>47</td>
                        <td>13.5</td>
                        <td>11.875"</td>
                        <td>30.2</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">15</td>
                        <td>48</td>
                        <td>14.5</td>
                        <td>12.1875"</td>
                        <td>31</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">16</td>
                        <td>49</td>
                        <td>15.5</td>
                        <td>12.5"</td>
                        <td>31.8</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <main class="content-wrapper">

      <!-- Breadcrumb -->
      <nav class="container pt-2 pt-xxl-3 my-3 my-md-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-fashion-v1.html">Home</a></li>
          <li class="breadcrumb-item"><a href="shop-catalog-fashion.html">Shop</a></li>
          <li class="breadcrumb-item active" aria-current="page">Product page</li>
        </ol>
      </nav>


      <!-- Product gallery and details -->
      <section class="container">
        <div class="row">

          <!-- Gallery -->
          <div class="col-md-6 pb-4 pb-md-0 mb-2 mb-sm-3 mb-md-0">
            <div class="position-relative">
              <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-3 mt-sm-4 ms-3 ms-sm-4">Sale</span>
              <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-lg bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-2 mt-sm-3 me-2 me-sm-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Add to Wishlist" aria-label="Add to Wishlist">
                <i class="ci-heart animate-target"></i>
              </button>
              <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden mb-3 mb-sm-4 mb-md-3 mb-lg-4" href="assets/img/shop/fashion/product/01.png" data-glightbox data-gallery="product-gallery">
                <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(706 / 636 * 100%)">
                  <img src="assets/img/shop/fashion/product/01.png" alt="Image">
                </div>
              </a>
            </div>
            <div class="collapse d-md-block" id="morePictures">
              <div class="row row-cols-2 g-3 g-sm-4 g-md-3 g-lg-4 pb-3 pb-sm-4 pb-md-0">
                <div class="col">
                  <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/shop/fashion/product/02.png" data-glightbox data-gallery="product-gallery">
                    <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                    <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(342 / 306 * 100%)">
                      <img src="assets/img/shop/fashion/product/02.png" alt="Image">
                    </div>
                  </a>
                </div>
                <div class="col">
                  <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/shop/fashion/product/03.png" data-glightbox data-gallery="product-gallery">
                    <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                    <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(342 / 306 * 100%)">
                      <img src="assets/img/shop/fashion/product/03.png" alt="Image">
                    </div>
                  </a>
                </div>
                <div class="col">
                  <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/shop/fashion/product/04.png" data-glightbox data-gallery="product-gallery">
                    <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                    <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(342 / 306 * 100%)">
                      <img src="assets/img/shop/fashion/product/04.png" alt="Image">
                    </div>
                  </a>
                </div>
                <div class="col">
                  <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="assets/img/shop/fashion/product/05.png" data-glightbox data-gallery="product-gallery">
                    <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                    <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(342 / 306 * 100%)">
                      <img src="assets/img/shop/fashion/product/05.png" alt="Image">
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-lg btn-outline-secondary w-100 collapsed d-md-none" data-bs-toggle="collapse" data-bs-target="#morePictures" data-label-collapsed="Show more pictures" data-label-expanded="Show less pictures" aria-expanded="false" aria-controls="morePictures" aria-label="Show / hide pictures">
              <i class="collapse-toggle-icon ci-chevron-down fs-lg ms-2 me-n2"></i>
            </button>
          </div>


          <!-- Product details and options -->
          <div class="col-md-6">
            <div class="ps-md-4 ps-xl-5">

              <!-- Reviews -->
              <a class="d-none d-md-flex align-items-center gap-2 text-decoration-none mb-3" href="#reviews">
                <div class="d-flex gap-1 fs-sm">
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star text-body-tertiary opacity-75"></i>
                </div>
                <span class="text-body-tertiary fs-sm">23 reviews</span>
              </a>

              <!-- Title -->
              <h1 class="h3">Denim midi skirt with pockets</h1>

              <!-- Description -->
              <p class="fs-sm mb-0">Made from high-quality denim fabric, this midi skirt offers durability and comfort for all-day wear. The mid-length design strikes the perfect balance between casual and chic, making it suitable for various occasions, from casual outings to semi-formal events.</p>
              <div class="collapse" id="moreDescription">
                <div class="fs-sm pt-3">
                  <p>One of the standout features of this skirt is its functional pockets. With two spacious pockets at the front, you can conveniently carry your essentials such as keys, phone, or wallet without the need for a bulky bag. The pockets also add a touch of utility and flair to the overall look.</p>
                  <p class="mb-0">The skirt's classic denim color and timeless design make it easy to pair with a variety of tops, blouses, and footwear, allowing you to create endless stylish ensembles. Whether you prefer a laid-back look with a graphic tee and sneakers or a more polished ensemble with a blouse and heels, this skirt effortlessly adapts to your style.</p>
                </div>
              </div>

              <!-- Price -->
              <a class="d-inline-block fs-sm fw-medium text-dark-emphasis collapsed mt-1" href="#moreDescription" data-bs-toggle="collapse" aria-expanded="false" aria-controls="moreDescription" data-label-collapsed="Read more" data-label-expanded="Show less" aria-label="Show / hide description"></a>
              <div class="h4 d-flex align-items-center my-4">
                $126.50
                <del class="fs-sm fw-normal text-body-tertiary ms-2">$156.00</del>
              </div>

              <!-- Color options -->
              <div class="mb-4">
                <label class="form-label fw-semibold pb-1 mb-2">Color: <span class="text-body fw-normal" id="colorOption">Dark blue</span></label>
                <div class="d-flex flex-wrap gap-2" data-binded-label="#colorOption">
                  <input type="radio" class="btn-check" name="colors" id="dark-blue" checked>
                  <label for="dark-blue" class="btn btn-image p-0" data-label="Dark blue">
                    <img src="assets/img/shop/fashion/product/colors/color01.png" width="56" alt="Dark blue">
                    <span class="visually-hidden">Dark blue</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors" id="pink">
                  <label for="pink" class="btn btn-image p-0" data-label="Pink">
                    <img src="assets/img/shop/fashion/product/colors/color02.png" width="56" alt="Pink">
                    <span class="visually-hidden">Pink</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors" id="light-blue">
                  <label for="light-blue" class="btn btn-image p-0" data-label="Light blue">
                    <img src="assets/img/shop/fashion/product/colors/color03.png" width="56" alt="Light blue">
                    <span class="visually-hidden">Light blue</span>
                  </label>
                </div>
              </div>

              <!-- Size select -->
              <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between mb-1">
                  <label class="form-label fw-semibold mb-0">Size</label>
                  <div class="nav">
                    <a class="nav-link animate-underline fw-normal px-0" href="#sizeGuide" data-bs-toggle="modal">
                      <i class="ci-ruler fs-lg me-2"></i>
                      <span class="animate-target">Size guide</span>
                    </a>
                  </div>
                </div>
                <select class="form-select form-select-lg" data-select='{
                  "classNames": {
                    "containerInner": "form-select form-select-lg"
                  }
                }' aria-label="Material select">
                  <option value="">Choose a size</option>
                  <option value="xs">6-8 (XS)</option>
                  <option value="s">8-10 (S)</option>
                  <option value="m">10-12 (M)</option>
                  <option value="l">12-14 (L)</option>
                  <option value="xl">14-16 (XL)</option>
                </select>
              </div>

              <!-- Count input + Add to cart button -->
              <div class="d-flex gap-3 pb-3 pb-lg-4 mb-3">
                <div class="count-input flex-shrink-0">
                  <button type="button" class="btn btn-icon btn-lg" data-decrement aria-label="Decrement quantity">
                    <i class="ci-minus"></i>
                  </button>
                  <input type="number" class="form-control form-control-lg" min="1" value="1" readonly>
                  <button type="button" class="btn btn-icon btn-lg" data-increment aria-label="Increment quantity">
                    <i class="ci-plus"></i>
                  </button>
                </div>
                <button type="button" class="btn btn-lg btn-dark w-100">Add to cart</button>
              </div>

              <!-- Info list -->
              <ul class="list-unstyled gap-3 pb-3 pb-lg-4 mb-3">
                <li class="d-flex flex-wrap fs-sm">
                  <span class="d-flex align-items-center fw-medium text-dark-emphasis me-2">
                    <i class="ci-clock fs-base me-2"></i>
                    Estimated delivery:
                  </span>
                  15 - 27 Mar, 2024
                </li>
                <li class="d-flex flex-wrap fs-sm">
                  <span class="d-flex align-items-center fw-medium text-dark-emphasis me-2">
                    <i class="ci-delivery fs-base me-2"></i>
                    Free shipping &amp; returns:
                  </span>
                  On all orders over $100.00
                </li>
              </ul>

              <!-- Stock status -->
              <div class="d-flex flex-wrap justify-content-between fs-sm mb-3">
                <span class="fw-medium text-dark-emphasis me-2">🔥 Hurry up! The sale is coming to an end</span>
                <span><span class="fw-medium text-dark-emphasis">6</span> items in stock!</span>
              </div>
              <div class="progress" role="progressbar" aria-label="Left in stock" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                <div class="progress-bar rounded-pill" style="width: 25%"></div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Sticky product preview + Add to cart CTA -->
      <section class="sticky-product-banner sticky-top" data-sticky-element>
        <div class="sticky-product-banner-inner pt-5">
          <div class="navbar container flex-nowrap align-items-center bg-body pt-4 pt-lg-5 mt-lg-n2">
            <div class="d-flex align-items-center min-w-0 ms-lg-2 me-3">
              <div class="ratio ratio-1x1 flex-shrink-0" style="width: 50px">
                <img src="assets/img/shop/fashion/product/thumb.png" alt="Image">
              </div>
              <h4 class="h6 fw-medium d-none d-lg-block ps-3 mb-0">Denim midi skirt with pockets</h4>
              <div class="w-100 min-w-0 d-lg-none ps-2">
                <h4 class="fs-sm fw-medium text-truncate mb-1">Denim midi skirt with pockets</h4>
                <div class="h6 mb-0">$126.50 <del class="fs-xs fw-normal text-body-tertiary">$156.00</del></div>
              </div>
            </div>
            <div class="h4 d-none d-lg-block mb-0 ms-auto me-4">$126.50 <del class="fs-sm fw-normal text-body-tertiary">$156.00</del></div>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-icon btn-secondary animate-pulse" aria-label="Add to Wishlist">
                <i class="ci-heart fs-base animate-target"></i>
              </button>
              <button type="button" class="btn btn-dark ms-auto d-none d-md-inline-flex px-4">Add to cart</button>
              <button type="button" class="btn btn-icon btn-dark animate-slide-end ms-auto d-md-none" aria-label="Add to Cart">
                <i class="ci-shopping-cart fs-base animate-target"></i>
              </button>
            </div>
          </div>
        </div>
      </section>


      <!-- Product details tabs -->
      <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">

        <!-- Nav tabs -->
        <ul class="nav nav-underline flex-nowrap border-bottom" role="tablist">
          <li class="nav-item me-md-1" role="presentation">
            <button type="button" class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description-tab-pane" role="tab" aria-controls="description-tab-pane" aria-selected="true">
              Description
            </button>
          </li>
          <li class="nav-item me-md-1" role="presentation">
            <button type="button" class="nav-link" id="washing-tab" data-bs-toggle="tab" data-bs-target="#washing-tab-pane" role="tab" aria-controls="washing-tab-pane" aria-selected="false">
              Washing<span class="d-none d-md-inline">&nbsp;instructions</span>
            </button>
          </li>
          <li class="nav-item me-md-1" role="presentation">
            <button type="button" class="nav-link" id="delivery-tab" data-bs-toggle="tab" data-bs-target="#delivery-tab-pane" role="tab" aria-controls="delivery-tab-pane" aria-selected="false">
              Delivery<span class="d-none d-md-inline">&nbsp;and returns</span>
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" role="tab" aria-controls="reviews-tab-pane" aria-selected="false">
              Reviews<span class="d-none d-md-inline">&nbsp;(23)</span>
            </button>
          </li>
        </ul>

        <div class="tab-content pt-4 mt-sm-1 mt-md-3">

          <!-- Description tab -->
          <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel" aria-labelledby="description-tab">
            <div class="row">
              <div class="col-lg-6 fs-sm">
                <ul class="list-unstyled">
                  <li>Model's height: <span class="text-dark-emphasis fw-semibold">176 cm</span></li>
                  <li>The model is wearing size: <span class="text-dark-emphasis fw-semibold">S/36</span></li>
                </ul>
                <p>This skirt is designed to fall just below the knee, offering a flattering length that is suitable for various occasions. It is made from a soft and lightweight fabric that drapes beautifully, ensuring comfort and ease of movement. The blue color adds a vibrant touch, making it a standout piece in your wardrobe.</p>
                <ul>
                  <li>fitted waistband</li>
                  <li>fastened with a hidden zipper</li>
                  <li>midi length</li>
                </ul>
                <p class="mb-0">The blue color of the skirt allows for easy pairing with a variety of tops. You can opt for a crisp white blouse for a classic and polished outfit, or choose a patterned or contrasting-colored top for a more vibrant and fashion-forward look.</p>
              </div>
              <div class="col-lg-6 col-xl-5 offset-xl-1">
                <div class="row row-cols-2 g-4 my-0 my-lg-n2">
                  <div class="col">
                    <div class="py-md-1 py-lg-2 pe-sm-2">
                      <i class="ci-feather fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                      <h6 class="fs-sm mb-2">Lightweight</h6>
                      <p class="fs-sm mb-0">Designed with lightweight European fabrics, perfect for life on the go.</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="py-md-1 py-lg-2 ps-sm-2">
                      <i class="ci-hanger fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                      <h6 class="fs-sm mb-2">Perfect fit</h6>
                      <p class="fs-sm mb-0">Our clothing is designed to fit any body type, find your perfect look!</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="py-md-1 py-lg-2 pe-sm-2">
                      <i class="ci-delivery-2 fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                      <h6 class="fs-sm mb-2">Free delivery</h6>
                      <p class="fs-sm mb-0">Get free door-to-door delivery for all orders over $250.</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="py-md-1 py-lg-2 ps-sm-2">
                      <i class="ci-leaf fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                      <h6 class="fs-sm mb-2">Sustainability</h6>
                      <p class="fs-sm mb-0">We are proud to offer a Lifetime Guarantee on all products.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Washing instructions tab -->
          <div class="tab-pane fade fs-sm" id="washing-tab-pane" role="tabpanel" aria-labelledby="washing-tab">
            <p>Following below washing instructions can help prolong the life of your denim skirt and keep it looking its best for longer.</p>
            <div class="row row-cols-1 row-cols-md-2">
              <div class="col mb-3 mb-md-0">
                <dl class="pe-lg-2 pe-xl-3 mb-0">
                  <dt>Machine wash cold</dt>
                  <dd>Turn the denim midi skirt inside out before placing it in the washing machine. Use cold water to help preserve the color and fabric integrity.</dd>
                  <dt>Gentle cycle</dt>
                  <dd>Select the gentle or delicate cycle on your washing machine to prevent excessive agitation, which can cause unnecessary wear and tear on the denim.</dd>
                  <dt>Mild detergent</dt>
                  <dd>Use a mild detergent specifically formulated for denim or delicate fabrics. Avoid using bleach or harsh chemicals, as they can damage the denim fibers.</dd>
                  <dt>Avoid overloading</dt>
                  <dd class="mb-0">Do not overcrowd the washing machine with too many garments. This can lead to inadequate cleaning and may cause friction that damages the denim skirt.</dd>
                </dl>
              </div>
              <div class="col">
                <dl class="ps-lg-2 ps-xl-3 mb-0">
                  <dt>Wash separately</dt>
                  <dd>Wash the denim midi skirt separately from items with zippers, buttons, or other sharp accessories that could snag or damage the fabric.</dd>
                  <dt>Skip fabric softener</dt>
                  <dd>Avoid using fabric softener, as it can leave a residue on the denim and reduce its natural stiffness, which is characteristic of denim garments.</dd>
                  <dt>Air dry or tumble dry low</dt>
                  <dd>After washing, reshape the skirt and either lay it flat to air dry or tumble dry on a low heat setting. Avoid high heat, as it can shrink or distort the denim.</dd>
                  <dt>Ironing</dt>
                  <dd class="mb-0">If necessary, iron the denim midi skirt inside out using a low to medium heat setting. Avoid ironing directly on any embellishments or pockets to prevent damage.</dd>
                </dl>
              </div>
            </div>
          </div>

          <!-- Delivery and returns tab -->
          <div class="tab-pane fade fs-sm" id="delivery-tab-pane" role="tabpanel" aria-labelledby="delivery-tab">
            <div class="row row-cols-1 row-cols-md-2">
              <div class="col mb-3 mb-md-0">
                <div class="pe-lg-2 pe-xl-3">
                  <h6>Delivery</h6>
                  <p>We strive to deliver your denim midi skirt with pockets to you as quickly as possible. Our estimated delivery times are as follows:</p>
                  <ul class="list-unstyled">
                    <li>Standard delivery:  <span class="text-dark-emphasis fw-semibold">Within 3-7 business days</span></li>
                    <li>Express delivery: <span class="text-dark-emphasis fw-semibold">Within 1-3 business days</span></li>
                  </ul>
                  <p>Please note that delivery times may vary depending on your location and any ongoing promotions or holidays. You can track your order using the provided tracking number once your package has been dispatched.</p>
                </div>
              </div>
              <div class="col">
                <div class="ps-lg-2 ps-xl-3">
                  <h6>Returns</h6>
                  <p>We want you to be completely satisfied with your denim midi skirt with pockets. If for any reason you are not happy with your purchase, you can return it within 30 days of receiving your order for a full refund or exchange.</p>
                  <p>To be eligible for a return, the skirt must be unused, unwashed, and in its original condition with tags attached. Please ensure that all packaging is intact when returning the item.</p>
                  <p class="mb-0">To initiate a return, please contact our customer service team with your order number and reason for the return. We will provide you with a return shipping label and instructions on how to proceed. Please note that shipping fees are non-refundable.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Reviews tab -->
          <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab">

            <!-- Heading + Add review button -->
            <div class="d-sm-flex align-items-center justify-content-between border-bottom pb-2 pb-sm-3">
              <div class="mb-3 me-sm-3">
                <h2 class="h5 pb-2 mb-1">Customer reviews</h2>
                <div class="d-flex align-items-center text-body-secondary fs-sm">
                  <div class="d-flex gap-1 me-2">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                  Based on 23 reviews
                </div>
              </div>
              <button type="button" class="btn btn-outline-dark mb-3" data-bs-toggle="modal" data-bs-target="#reviewForm">Leave a review</button>
            </div>

            <!-- Review -->
            <div class="border-bottom py-4">
              <div class="row py-sm-2">
                <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                  <div class="d-flex h6 mb-2">
                    Rafael Marquez
                    <i class="ci-check-circle text-success mt-1 ms-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Verified customer"></i>
                  </div>
                  <div class="fs-sm mb-2 mb-md-3">June 25, 2024</div>
                  <div class="d-flex gap-1 fs-sm">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                  </div>
                </div>
                <div class="col-md-8 col-lg-9">
                  <p class="mb-md-4">Absolutely love this chair! It's exactly what I was looking for to complete my Scandinavian-themed living room. The wooden legs add a touch of warmth and the design is timeless. Comfortable and sturdy, couldn't be happier with my purchase!</p>
                  <div class="d-sm-flex justify-content-between">
                    <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                      <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                      Yes, I recommend this product
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                      <button type="button" class="btn btn-sm btn-secondary">
                        <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                        0
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review -->
            <div class="border-bottom py-4">
              <div class="row py-sm-2">
                <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                  <div class="d-flex h6 mb-2">
                    Bessie Cooper
                    <i class="ci-check-circle text-success mt-1 ms-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Verified customer"></i>
                  </div>
                  <div class="fs-sm mb-2 mb-md-3">April 8, 2024</div>
                  <div class="d-flex gap-1 fs-sm">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                </div>
                <div class="col-md-8 col-lg-9">
                  <p class="mb-md-4">While the design of the chair is nice and it does add a touch of retro vibe to my space, I found the quality to be lacking. After just a few weeks of use, one of the legs started to wobble, and the seat isn't as comfortable as I had hoped. Disappointed with the durability. Additionally, the assembly process was a bit frustrating as some of the screws didn't align properly with the holes, requiring extra effort to secure them in place. Overall, while it looks good, I expected better quality for the price.</p>
                  <div class="d-sm-flex justify-content-between">
                    <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                      <i class="ci-close fs-base me-1" style="margin-top: .125rem"></i>
                      No, I don't recommend this product
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                      <button type="button" class="btn btn-sm btn-secondary">
                        <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                        3
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review -->
            <div class="border-bottom py-4">
              <div class="row py-sm-2">
                <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                  <div class="d-flex h6 mb-2">Savannah Nguyen</div>
                  <div class="fs-sm mb-2 mb-md-3">March 30, 2024</div>
                  <div class="d-flex gap-1 fs-sm">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                </div>
                <div class="col-md-8 col-lg-9">
                  <p class="mb-md-4">Great addition to our dining room! The chair looks fantastic and is quite comfortable for short sits. Assembly was a breeze, and the quality seems decent for the price. Overall, satisfied with the purchase.</p>
                  <div class="d-sm-flex justify-content-between">
                    <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                      <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                      Yes, I recommend this product
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                      <button type="button" class="btn btn-sm btn-secondary">
                        <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                        7
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review -->
            <div class="border-bottom py-4">
              <div class="row py-sm-2">
                <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                  <div class="d-flex h6 mb-2">Daniel Adams</div>
                  <div class="fs-sm mb-2 mb-md-3">March 16, 2024</div>
                  <div class="d-flex gap-1 fs-sm">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                  </div>
                </div>
                <div class="col-md-8 col-lg-9">
                  <p class="mb-md-4">Couldn't be happier with this chair! It's not only stylish but also incredibly comfortable. The size is perfect for our space, and the wooden legs feel sturdy. Definitely recommend it to anyone looking for a chic and functional seating option.</p>
                  <div class="d-sm-flex justify-content-between">
                    <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                      <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                      Yes, I recommend this product
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                      <button type="button" class="btn btn-sm btn-secondary">
                        <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                        14
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review -->
            <div class="border-bottom py-4">
              <div class="row py-sm-2">
                <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                  <div class="d-flex h6 mb-2">Kristin Watson</div>
                  <div class="fs-sm mb-2 mb-md-3">February 7, 2024</div>
                  <div class="d-flex gap-1 fs-sm">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                </div>
                <div class="col-md-8 col-lg-9">
                  <p class="mb-md-4">The chair is nice, but it's not the most comfortable for extended periods of sitting. The wooden legs give it a nice aesthetic, but they seem a bit fragile. It's a decent chair for occasional use, but I wouldn't recommend it for daily use or long sitting sessions.</p>
                  <div class="d-sm-flex justify-content-between">
                    <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                      <i class="ci-check fs-base me-1" style="margin-top: .125rem"></i>
                      Yes, I recommend this product
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                      <button type="button" class="btn btn-sm btn-secondary">
                        <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                        9
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pagination -->
            <nav class="mt-3 pt-2 pt-md-3" aria-label="Reviews pagination">
              <ul class="pagination">
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                  </span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">4</a>
                </li>
                <li class="page-item">
                  <span class="page-link pe-none">...</span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">6</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </section>


      <!-- Complete look (carousel) -->
      <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
        <div class="d-flex align-items-center justify-content-between pt-1 pt-lg-0 pb-3 mb-2 mb-sm-3">
          <h2 class="mb-0 me-3">Complete your look</h2>

          <!-- Slider prev/next buttons -->
          <div class="d-flex gap-2">
            <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1" id="lookPrev" aria-label="Prev">
              <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle" id="lookNext" aria-label="Next">
              <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 order-md-2 mb-4 mb-md-0">

            <!-- Slider -->
            <div class="swiper" data-swiper='{
              "slidesPerView": 1,
              "spaceBetween": 40,
              "loop": true,
              "navigation": {
                "prevEl": "#lookPrev",
                "nextEl": "#lookNext"
              }
            }'>
              <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                  <div class="row row-cols-2">

                    <!-- Item -->
                    <div class="col">
                      <div class="animate-underline hover-effect-opacity">
                        <div class="position-relative mb-3">
                          <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                            <i class="ci-heart animate-target"></i>
                          </button>
                          <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                            <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                              <img src="assets/img/shop/fashion/02.png" alt="Image">
                            </div>
                          </a>
                          <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                            <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                              <div class="nav">
                                <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+1</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="nav mb-2">
                          <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                            <span class="text-truncate">Cotton lace blouse with necklace</span>
                          </a>
                        </div>
                        <div class="h6 mb-2">$54.00</div>
                        <div class="position-relative">
                          <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                          <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                            <input type="radio" class="btn-check" name="colors-2" id="color-2-1" checked>
                            <label for="color-2-1" class="btn btn-color fs-base" style="color: #dcb1b1">
                              <span class="visually-hidden">Pink</span>
                            </label>
                            <input type="radio" class="btn-check" name="colors-2" id="color-2-2">
                            <label for="color-2-2" class="btn btn-color fs-base" style="color: #ced6f0">
                              <span class="visually-hidden">Blue</span>
                            </label>
                            <input type="radio" class="btn-check" name="colors-2" id="color-2-3">
                            <label for="color-2-3" class="btn btn-color fs-base" style="color: #e1e0cf">
                              <span class="visually-hidden">Mustard</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                      <div class="animate-underline hover-effect-opacity">
                        <div class="position-relative mb-3">
                          <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                            <i class="ci-heart animate-target"></i>
                          </button>
                          <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                            <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                              <img src="assets/img/shop/fashion/07.png" alt="Image">
                            </div>
                          </a>
                          <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                            <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                              <div class="nav">
                                <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+4</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="nav mb-2">
                          <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                            <span class="text-truncate">Black massive women's boots</span>
                          </a>
                        </div>
                        <div class="h6 mb-2">$160.00</div>
                        <div class="position-relative">
                          <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                          <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                            <input type="radio" class="btn-check" name="colors-7" id="color-7-1" checked>
                            <label for="color-7-1" class="btn btn-color fs-base" style="color: #364254">
                              <span class="visually-hidden">Black</span>
                            </label>
                            <input type="radio" class="btn-check" name="colors-7" id="color-7-2">
                            <label for="color-7-2" class="btn btn-color fs-base" style="color: #e0e5eb">
                              <span class="visually-hidden">White</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                  <div class="row row-cols-2">

                    <!-- Item -->
                    <div class="col">
                      <div class="animate-underline hover-effect-opacity">
                        <div class="position-relative mb-3">
                          <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                            <i class="ci-heart animate-target"></i>
                          </button>
                          <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                            <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                              <img src="assets/img/shop/fashion/09.png" alt="Image">
                            </div>
                          </a>
                          <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                            <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XS</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                              <div class="nav">
                                <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+3</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="nav mb-2">
                          <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                            <span class="text-truncate">White cotton blouse with necklace</span>
                          </a>
                        </div>
                        <div class="h6 mb-2">$38.50</div>
                        <div class="position-relative">
                          <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                          <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                            <input type="radio" class="btn-check" name="colors-9" id="color-9-1" checked>
                            <label for="color-9-1" class="btn btn-color fs-base" style="color: #e0e5eb">
                              <span class="visually-hidden">White</span>
                            </label>
                            <input type="radio" class="btn-check" name="colors-9" id="color-9-2">
                            <label for="color-9-2" class="btn btn-color fs-base" style="color: #364254">
                              <span class="visually-hidden">Black</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                      <div class="animate-underline hover-effect-opacity">
                        <div class="position-relative mb-3">
                          <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                            <i class="ci-heart animate-target"></i>
                          </button>
                          <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                            <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                              <img src="assets/img/shop/fashion/08.png" alt="Image">
                            </div>
                          </a>
                          <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                            <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                              <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">8</span>
                              <div class="nav">
                                <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+3</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="nav mb-2">
                          <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                            <span class="text-truncate">Leather sneakers with golden laces</span>
                          </a>
                        </div>
                        <div class="h6 mb-2">$74.00</div>
                        <div class="position-relative">
                          <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                          <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                            <input type="radio" class="btn-check" name="colors-8" id="color-8-1" checked>
                            <label for="color-8-1" class="btn btn-color fs-base" style="color: #b1aa9b">
                              <span class="visually-hidden">Cream</span>
                            </label>
                            <input type="radio" class="btn-check" name="colors-8" id="color-8-2">
                            <label for="color-8-2" class="btn btn-color fs-base" style="color: #496c33">
                              <span class="visually-hidden">Dark green</span>
                            </label>
                            <input type="radio" class="btn-check" name="colors-8" id="color-8-3">
                            <label for="color-8-3" class="btn btn-color fs-base" style="color: #364254">
                              <span class="visually-hidden">Black</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Product image -->
          <div class="col-md-6 order-md-1">
            <img src="assets/img/shop/fashion/product/01.png" class="d-block bg-body-tertiary rounded" alt="Image">
          </div>
        </div>
      </section>


      <!-- Viewed products (carousel) -->
      <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
        <div class="d-flex align-items-center justify-content-between pt-1 pt-lg-0 pb-3 mb-2 mb-sm-3">
          <h2 class="mb-0 me-3">Viewed products</h2>

          <!-- Slider prev/next buttons -->
          <div class="d-flex gap-2">
            <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1" id="viewedPrev" aria-label="Prev">
              <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle" id="viewedNext" aria-label="Next">
              <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>
          </div>
        </div>

        <!-- Slider -->
        <div class="swiper" data-swiper='{
          "slidesPerView": 2,
          "spaceBetween": 24,
          "loop": true,
          "navigation": {
            "prevEl": "#viewedPrev",
            "nextEl": "#viewedNext"
          },
          "breakpoints": {
            "768": {
              "slidesPerView": 3
            },
            "992": {
              "slidesPerView": 4
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline hover-effect-opacity">
                <div class="position-relative mb-3">
                  <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                    <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                      <img src="assets/img/shop/fashion/11.png" alt="Image">
                    </div>
                  </a>
                  <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                    <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                      <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                      <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                      <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                      <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                      <div class="nav">
                        <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+1</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav mb-2">
                  <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                    <span class="text-truncate">Warm sweatshirts without a hoodie</span>
                  </a>
                </div>
                <div class="h6 mb-2">$32.99</div>
                <div class="position-relative">
                  <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                  <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                    <input type="radio" class="btn-check" name="colors-11" id="color-11-1" checked>
                    <label for="color-11-1" class="btn btn-color fs-base" style="color: #42675f">
                      <span class="visually-hidden">Green</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-11" id="color-11-2">
                    <label for="color-11-2" class="btn btn-color fs-base" style="color: #476585">
                      <span class="visually-hidden">Blue</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-11" id="color-11-3">
                    <label for="color-11-3" class="btn btn-color fs-base" style="color: #724c74">
                      <span class="visually-hidden">Purple</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline hover-effect-opacity">
                <div class="position-relative mb-3">
                  <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                      <img src="assets/img/shop/fashion/03.png" alt="Image">
                    </div>
                  </a>
                  <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                    <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                      <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6</span>
                      <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                      <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                      <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                      <div class="nav">
                        <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion.html">+4</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav mb-2">
                  <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                    <span class="text-truncate">Sneakers with a massive sole</span>
                  </a>
                </div>
                <div class="h6 mb-2">$86.50</div>
                <div class="position-relative">
                  <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                  <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                    <input type="radio" class="btn-check" name="colors-3" id="color-3-1" checked>
                    <label for="color-3-1" class="btn btn-color fs-base" style="color: #e0e5eb">
                      <span class="visually-hidden">White</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-3" id="color-3-2">
                    <label for="color-3-2" class="btn btn-color fs-base" style="color: #364254">
                      <span class="visually-hidden">Black</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline hover-effect-opacity">
                <div class="position-relative mb-3">
                  <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                      <img src="assets/img/shop/fashion/04.png" alt="Image">
                    </div>
                  </a>
                </div>
                <div class="nav mb-2">
                  <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                    <span class="text-truncate">Knitted bag with a wooden handle</span>
                  </a>
                </div>
                <div class="h6 mb-2">$105.00</div>
                <div class="position-relative">
                  <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                  <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                    <input type="radio" class="btn-check" name="colors-4" id="color-4-1" checked>
                    <label for="color-4-1" class="btn btn-color fs-base" style="color: #e7ddb4">
                      <span class="visually-hidden">Beige</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-4" id="color-4-2">
                    <label for="color-4-2" class="btn btn-color fs-base" style="color: #8b9bc4">
                      <span class="visually-hidden">Blue</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline hover-effect-opacity">
                <div class="position-relative mb-3">
                  <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">-17%</span>
                  <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                      <img src="assets/img/shop/fashion/05.png" alt="Image">
                    </div>
                  </a>
                </div>
                <div class="nav mb-2">
                  <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                    <span class="text-truncate">Polarized sunglasses for men</span>
                  </a>
                </div>
                <div class="h6 mb-2">$96.00 <del class="fs-sm fw-normal text-body-tertiary">$112.00</del></div>
                <div class="position-relative">
                  <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                  <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                    <input type="radio" class="btn-check" name="colors-5" id="color-5-1" checked>
                    <label for="color-5-1" class="btn btn-color fs-base" style="color: #8cc4ac">
                      <span class="visually-hidden">Green</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-5" id="color-5-2">
                    <label for="color-5-2" class="btn btn-color fs-base" style="color: #8cb7c4">
                      <span class="visually-hidden">Blue</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-5" id="color-5-3">
                    <label for="color-5-3" class="btn btn-color fs-base" style="color: #ccb782">
                      <span class="visually-hidden">Brown</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="animate-underline hover-effect-opacity">
                <div class="position-relative mb-3">
                  <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                    <i class="ci-heart animate-target"></i>
                  </button>
                  <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                      <img src="assets/img/shop/fashion/10.png" alt="Image">
                    </div>
                  </a>
                </div>
                <div class="nav mb-2">
                  <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion.html">
                    <span class="text-truncate">Leather handbag for women</span>
                  </a>
                </div>
                <div class="h6 mb-2">$140.00</div>
                <div class="position-relative">
                  <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                  <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                    <input type="radio" class="btn-check" name="colors-10" id="color-10-1" checked>
                    <label for="color-10-1" class="btn btn-color fs-base" style="color: #869286">
                      <span class="visually-hidden">Olive</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-10" id="color-10-2">
                    <label for="color-10-2" class="btn btn-color fs-base" style="color: #364254">
                      <span class="visually-hidden">Black</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-10" id="color-10-3">
                    <label for="color-10-3" class="btn btn-color fs-base" style="color: #526f99">
                      <span class="visually-hidden">Blue</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Instagram feed -->
      @partials("instagram_feed")
      {{-- <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
        <div class="text-center pt-1 pb-2 pb-md-3">
          <h2 class="pb-2 mb-1">
            <span class="animate-underline">
              <a class="animate-target text-dark-emphasis text-decoration-none" href="#!">#cartzilla</a>
            </span>
          </h2>
          <p>Find more inspiration on our Instagram</p>
        </div>
        <div class="overflow-x-auto pb-3 mb-n3" data-simplebar>
          <div class="d-flex gap-2 gap-md-3 gap-lg-4" style="min-width: 700px">
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="assets/img/instagram/01.jpg" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="assets/img/instagram/02.jpg" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="assets/img/instagram/03.jpg" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="assets/img/instagram/04.jpg" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="assets/img/instagram/05.jpg" alt="Instagram image">
              </div>
            </a>
          </div>
        </div>
      </section> --}}

    </main>

</x-www-layout>
