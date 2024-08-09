<!-- FAQ (Accordion) -->
<section class="container py-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
  <div class="row pt-xl-2">
    <div class="col-md-4 col-xl-3 mb-4 mb-md-0" style="margin-top: -120px">
      <div class="sticky-md-top text-center text-md-start pe-md-4 pe-lg-5 pe-xl-0"
        style="padding-top: 120px;">
        <h2>Popular FAQs</h2>
        <p class="pb-2 pb-md-3">Still have unanswered questions and need to get in touch?</p>

        <a class="btn btn-lg btn-primary" href="/contact">
          Contact us
        </a>
      </div>
    </div>
    <div class="col-md-8 offset-xl-1">

      <!-- Accordion of questions -->
      <div class="accordion" id="faq">


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
      <!-- end of Accordion of questions -->
    </div>
  </div>
</section>
