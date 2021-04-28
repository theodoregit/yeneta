<!-- Section: Sidebar -->
<section>

    <!-- Section: Filters -->
    <section>
    <form action="">
      <h5> Grades Filters </h5>
  
      <!-- Section: Condition -->
      <section class="mb-4">
  
        <h6 class="font-weight-bold mb-3">Section</h6>
  
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="sectionone">
          <label class="form-check-label small text-uppercase card-link-secondary" for="sectionone">One (A)</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="sectiontwo">
          <label class="form-check-label small text-uppercase card-link-secondary" for="sectiontwo">Two (B)</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="checkbox" class="form-check-input filled-in" id="sectionthree">
          <label class="form-check-label small text-uppercase card-link-secondary" for="sectionthree">Three (C)</label>
        </div>
        <div class="form-check pl-0 mb-3 pb-1">
          <input type="checkbox" class="form-check-input filled-in" id="sectionfour">
          <label class="form-check-label small text-uppercase card-link-secondary" for="sectionfour">Four (D)</label>
        </div>
  
      </section>
      <!-- Section: Condition -->
  
      <!-- Section: score -->
      <section class="mb-4">
  
        <h6 class="font-weight-bold mb-3">Grades</h6>
  
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="over3sgpa" name="materialExampleRadios">
          <label class="form-check-label small text-uppercase card-link-secondary" for="over3sgpa">Over 3.0 SGPA</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="over3cgpa" name="materialExampleRadios">
          <label class="form-check-label small text-uppercase card-link-secondary" for="over3cgpa">Over 3.0 CGPA</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="topmale" name="materialExampleRadios">
          <label class="form-check-label small text-uppercase card-link-secondary" for="topmale">Top Male Student</label>
        </div>
        <div class="form-check pl-0 mb-3">
          <input type="radio" class="form-check-input" id="topfemale" name="materialExampleRadios">
          <label class="form-check-label small text-uppercase card-link-secondary" for="topfemale">Top Female Student</label>
        </div>
        <form>
          <div class="d-flex align-items-center mt-4 pb-1">
            <div class="md-form md-outline my-0">
              <input id="mingrade" type="text" class="form-control mb-0" placeholder="input the max grade">
              <label for="mingrade">Min Grade</label>
            </div>
            <p class="px-2 mb-0 text-muted"> - </p>
            <div class="md-form md-outline my-0">
              <input id="maxgrade" type="text" class="form-control mb-0" placeholder="input the max grade">
              <label for="maxgrade">Max Grade</label>
            </div>
          </div>
        </form>
  
      </section>
      <!-- Section: score -->
    <button type="submit" class="btn btn-sm btn-primary form-control col-md-3">
      <span class="glyphicon glyphicon-search"></span>Filter
    </button>
    </form>
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