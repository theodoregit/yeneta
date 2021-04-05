<!-- Section: Sidebar -->
<section>

    <!-- Section: Filters -->
    <section>
      
      <h5> Payment Filters </h5>
  
      <!-- Section: payment -->
      <section class="mb-4">
  
        <h6 class="font-weight-bold mb-3">Payment</h6>
  
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="paid">
          <label class="form-check-label small text-uppercase card-link-secondary" for="paid">Paid</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="unpaid">
          <label class="form-check-label small text-uppercase card-link-secondary" for="unpaid">Unpaid</label>
        </div>
        <a class="btn btn-link text-muted p-0" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          More
        </a>
        <div class="collapse pt-3" id="collapseExample">
          <div class="form-check pl-0 mb-3">
            <input type="checkbox" class="form-check-input filled-in" id="lastpay">
            <label class="form-check-label small text-uppercase card-link-secondary" for="lastpay">Last Pay</label>
          </div>
          <div class="form-check pl-0 mb-3">
            <input type="checkbox" class="form-check-input filled-in" id="firstpay">
            <label class="form-check-label small text-uppercase card-link-secondary" for="firstpay">First Pay</label>
          </div>
          <div class="form-check pl-0 mb-3">
            <label class="form-check-label small text-uppercase card-link-secondary" for="year">Year</label>
            <select class="form-control" aria-label="Default select example">
              <option selected>Select Year</option>
              <option value="2021">2021</option>
              <option value="22020">2020</option>
              <option value="2019">2019</option>
            </select>
          </div>
          <div class="form-check pl-0 mb-3">
            <label class="form-check-label small text-uppercase card-link-secondary" for="month">Month</label>
            <select class="form-control" aria-label="Default select example">
              <option selected>Select Month</option>
              <option value="1">september</option>
              <option value="2">october</option>
              <option value="3">november</option>
              <option value="3">december</option>
              <option value="3">january</option>
              <option value="3">february</option>
              <option value="1">march</option>
              <option value="2">april</option>
              <option value="3">may</option>
              <option value="3">june</option>
              <option value="3">july</option>
              <option value="3">august</option>
            </select>
          </div>
        </div>
        <a href="#" class="btn btn-sm btn-primary">Filter</a>
  
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