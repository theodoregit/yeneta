<!-- Section: Sidebar -->
<section>

    <!-- Section: Filters -->
    <section>
      
      <h5> Payment Filters </h5>
  
      <!-- Section: payment -->
      <section class="mb-4">
  
        <h6 class="font-weight-bold mb-3">Payment</h6>
  
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="34">
          <label class="form-check-label small text-uppercase card-link-secondary" for="34">Paid</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="36">
          <label class="form-check-label small text-uppercase card-link-secondary" for="36">Unpaid</label>
        </div>
        <a class="btn btn-link text-muted p-0" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          More
        </a>
        <div class="collapse pt-3" id="collapseExample">
          <div class="form-check pl-0 mb-3">
            <input type="checkbox" class="form-check-input filled-in" id="last pay">
            <label class="form-check-label small text-uppercase card-link-secondary" for="last pay">Last Pay</label>
          </div>
          <div class="form-check pl-0 mb-3">
            <input type="checkbox" class="form-check-input filled-in" id="first pay">
            <label class="form-check-label small text-uppercase card-link-secondary" for="first pay">First Pay</label>
          </div>
        </div>
  
      </section>
      <!-- Section: Size -->
  
    </section>
    <!-- Section: Filters -->
  
  </section>
  <!-- Section: Sidebar -->

  <script>
      $('#multi').mdbRange({
    single: {
      active: true,
      multi: {
        active: true,
        rangeLength: 1
      },
    }
  });
  </script>