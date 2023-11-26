            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">SCHOOL YEAR</h6>
                            <div id="gridYear" class="ag-theme-alpine" style="width: 100%; height: 500px;"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ADD SCHOOL YEAR</h6>
                            <form action="home.php?view=schoolyear&action=schoolyear" method="POST"> 
                              <div class="form-floating mb-3">
                                    <input type="number" name="year_from" class="form-control" id="floatingInput" placeholder="From Year" min="2023" max="4000">
                                    <label for="floatingInput">From Year</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" name="year_to" class="form-control" id="floatingPassword" placeholder="To Year" min="2024" max="4000">
                                    <label for="floatingPassword">To Year</label>
                                </div>
                                <button type="submit" name="add" style="width:100%;" class="btn btn-primary">Add School Year</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
