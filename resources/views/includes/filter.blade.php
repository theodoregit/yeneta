<!-- Section: Sidebar -->
<section>

    <!-- Section: Filters -->
    <section>
      
      <h5> Grades Filters </h5>
  
      <!-- Section: Condition -->
      <section class="mb-4">
  
        <h6 class="font-weight-bold mb-3">Section</h6>
  
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="new">
          <label class="form-check-label small text-uppercase card-link-secondary" for="new">One (A)</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="used">
          <label class="form-check-label small text-uppercase card-link-secondary" for="used">Two (B)</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="collectible">
          <label class="form-check-label small text-uppercase card-link-secondary" for="collectible">Three (C)</label>
        </div>
        <div class="form-check pl-0 mb-3 pb-1">
          <input type="checkbox" class="form-check-input filled-in" id="renewed">
          <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Four (D)</label>
        </div>
  
      </section>
      <!-- Section: Condition -->
  
      <!-- Section: Price -->
      <section class="mb-4">
  
        <h6 class="font-weight-bold mb-3">Grades</h6>
  
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="under25" name="materialExampleRadios">
          <label class="form-check-label small text-uppercase card-link-secondary" for="under25">Over 3.0 SGPA</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="2550" name="materialExampleRadios">
          <label class="form-check-label small text-uppercase card-link-secondary" for="2550">Over 3.0 CGPA</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="2550" name="materialExampleRadios">
          <label class="form-check-label small text-uppercase card-link-secondary" for="2550">Top Male Student</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="2550" name="materialExampleRadios">
          <label class="form-check-label small text-uppercase card-link-secondary" for="2550">Top Female Student</label>
        </div>
        <form>
          <div class="d-flex align-items-center mt-4 pb-1">
            <div class="md-form md-outline my-0">
              <input id="from" type="text" class="form-control mb-0" placeholder="input the max grade">
              <label for="form">Min Grade</label>
            </div>
            <p class="px-2 mb-0 text-muted"> - </p>
            <div class="md-form md-outline my-0">
              <input id="to" type="text" class="form-control mb-0" placeholder="input the max grade">
              <label for="to">Max Grade</label>
            </div>
          </div>
        </form>
  
      </section>
      <!-- Section: Price -->
  
      <!-- Section: Size -->
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