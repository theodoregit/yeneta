<!-- Section: Sidebar -->
<section>
  @php
  $gregorian = new DateTime('now');
  $ethiopic = Andegna\DateTimeFactory::fromDateTime($gregorian);
@endphp
    <!-- Section: Filters -->
    <section>
      
      <h5> Payment Filters </h5>
  
      <!-- Section: payment -->
      <section class="mb-4">
  
        <h6 class="font-weight-bold mb-3">Payment</h6>
        <form action="{{route('paymentfilter')}} " method="POST">
          {{ csrf_field() }}
        <div class="form-check pl-0 mb-3">
          <label class="form-check-label small text-uppercase card-link-secondary" for="status">Status</label>
          <select aria-label="Default select example" name="status" id="status">
            <option selected>Select status</option>
            <option value="paid">paid</option>
            <option value="unpaid">unpaid</option>
          </select>  
        </div>
          <div class="form-check pl-0 mb-3">
            <label class="form-check-label small text-uppercase card-link-secondary" for="year">Department</label>
            <select aria-label="Default select example" name="dept_name" id="dept_name">
              <option selected>Select Department</option>
              <option value="accounting">Accounting</option>
              <option value="management">Management</option>
              <option value="computer science">Computer science</option>
            </select>  
          </div>
          <div class="form-check pl-0 mb-3">
            <label class="form-check-label small text-uppercase card-link-secondary" for="year">year</label>
            <select aria-label="Default select example" name="year" id="year">
              <option selected>Select year</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <input type="text" name="month" id="month" style="display: none" value={{$ethiopic->format('m')}} >
        <button class="btn btn-sm btn-primary">Filter</button>
          </form>
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