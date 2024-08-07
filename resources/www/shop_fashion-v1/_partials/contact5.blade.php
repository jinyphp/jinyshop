<!-- FAQ accordion -->
  <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
    <h2 class="text-center pt-xxl-3 pb-lg-2 pb-xl-3">Popular questions</h2>
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-9 col-xl-8">

        <!-- Accordion -->
        <div class="accordion accordion-alt-icon" id="faq">

          @foreach(getSiteFaq(5) as $i => $item)
          <!-- Question -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeading-{{$i}}">
              <button type="button"
                class="accordion-button hover-effect-underline collapsed"
                data-bs-toggle="collapse"
                data-bs-target="#faqCollapse-{{$i}}"
                aria-expanded="false"
                aria-controls="faqCollapse-{{$i}}">
                <span class="me-2">
                  {{$item->question}}

                </span>
              </button>
            </h3>
            <div class="accordion-collapse collapse"
              id="faqCollapse-{{$i}}"
              aria-labelledby="faqHeading-{{$i}}"
              data-bs-parent="#faq">
              <div class="accordion-body">
                {{$item->answer}}
              </div>
            </div>
          </div>
          @endforeach














        </div>
        <!-- end of Accordion -->

      </div>
    </div>
  </section>

