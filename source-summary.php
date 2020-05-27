<?php include("header.php");?>
<main class="c-main">
  <div class="container-fluid">
    <div class="fade-in">

      <div class="row title-row mb-3 align-items-end">
        <div class="col-12 col-xl-auto">
          <h1 class="h4 mb-xl-0">Lead Source Summary: El Rosario </h1>
        </div>
        <div class="col-12 col-xl d-flex justify-content-xl-end">
          <div class="row justify-content-end align-items-center">
            <div class="col-12 col-sm">
              <div class="row mx-n2">
                <div class="col-12 col-sm px-2">
                  <div class="form-group mb-sm-0 d-sm-flex align-items-sm-center">
                    <label class="mb-0 mr-sm-1">From</label>
                    <input type="text" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="col-12 col-sm px-2">
                  <div class="form-group mb-sm-0 d-sm-flex align-items-sm-center">
                    <label class="mb-0 mr-sm-1">To</label>
                    <input type="text" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="col-12 col-sm-auto px-2">
                  <div class="form-group mb-sm-0">
                    <button class="btn btn-primary btn-sm">GO</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-auto">
              <select name="" id="" class="form-control form-control-sm">
                <option value="TODAY" selected>Today</option>
                <option value="YESTERDAY">Yesterday</option>
                <option value="LAST7DAYS">Last 7 days</option>
                <option value="THISWEEK">This Week</option>
                <option value="LASTWEEK">Last Week</option>
                <option value="LAST30DAYS">Last 30 days</option>
                <option value="THISMONTH">This Month</option>
                <option value="LASTMONTH">Last Month</option>
                <option value="LAST90DAYS">Last 90 days</option>
                <option value="THISYEAR">This Year</option>
                <option value="LASTYEAR">Last Year</option>
                <option value="ALL">All Time</option>
                <option value="CUSTOM-DT">Custom Dates</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="row dashboard-data">
        <div class="col-12 col-sm-6 col-md-4 col-xl">
          <a href="#" class="card bg-light-success">
            <div class="card-body card-body d-flex text-center justify-content-center align-items-center">
              <div>
                <div class="text-value-lg">32</div>
                <div>New Leads</div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-xl">
          <a href="#" class="card bg-light-warning">
            <div class="card-body card-body d-flex text-center justify-content-center align-items-center">
              <div>
                <div class="text-value-lg">12</div>
                <div>Unactioned</div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-xl">
          <a href="#" class="card bg-light-primary">
            <div class="card-body card-body d-flex text-center justify-content-center align-items-center">
              <div>
                <div class="text-value-lg">0%</div>
                <div>Trashed</div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-xl">
          <a href="#" class="card bg-light-info">
            <div class="card-body card-body d-flex text-center justify-content-center align-items-center">
              <div>
                <div class="text-value-lg">63%</div>
                <div>Contacted</div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-xl">
          <div class="card bg-light-danger">
            <div class="card-body card-body d-flex text-center justify-content-center align-items-center">
              <div>
                <div class="text-value-lg">2 min</div>
                <div>Speed to Action</div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row-->



      <div class="row">
        <div class="col-md-12 pt-3">
          <p class="mb-1">People added <strong>All Time</strong> from <strong>El Rosario</strong> source</p>
          <div class="table-responsive">
            <table class="table table-middle data-table table-striped text-center table-hover">
                <thead class="table-success">
                  <tr>
                    <th class="text-left">Name</th>
                    <th>Phone / Email</th>
                    <th>Lead Funnel</th>
                    <th>Source</th>
                    <th>Assigned</th>
                    <th>Contacted</th>
                    <th>Score</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="" class="avatar-link">
                        <div class="c-avatar">
                          <img class="c-avatar-img" src="images-leadhero/avatars/no-img.jpg">
                        </div>
                        <p>Vinay Rawat</p>
                      </a>
                    </td>
                    <td>
                      <div class="c-info">
                        <a href="mailto:rawatvin2@gmail.com">rawatvin2@gmail.com</a><br>
                        <a href="tel:+919980146652">+919980146652</a>
                      </div>
                    </td>
                    <td>N/A</td>
                    <td>
                      <h4>La Macedo</h4>
                      <small>seconds ago</small>
                    </td>
                    <td>
                      <h4>Vianaar Homes</h4>
                    </td>
                    <td>
                      <span class="badge p-1 badge-danger">Not Contacted</span>
                    </td>
                    <td>
                      N/A
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <a href="" class="avatar-link">
                        <div class="c-avatar">
                          <img class="c-avatar-img" src="images-leadhero/avatars/no-img.jpg">
                        </div>
                        <p>Pramod Pandit</p>
                      </a>
                    </td>
                    <td>
                      <div class="c-info">
                        <a href="mailto:dr.ppandit@gmail.com">dr.ppandit@gmail.com</a><br>
                        <a href="tel:+919820153904">+919820153904</a>
                      </div>
                    </td>
                    <td>N/A</td>
                    <td>
                      <h4>La Macedo</h4>
                      <small>18 minutes ago</small>
                    </td>
                    <td>
                      <h4>Lead Pool</h4>
                    </td>
                    <td>
                      <span class="badge p-1 badge-danger">Not Contacted</span>
                    </td>
                    <td>
                      N/A
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="data-all-btn clearfix">
                <a href="" class="btn btn-sm btn-outline-primary">View All 54 People</a>
              </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- /.row-->
    </div>
  </div>
</main>

<?php include("footer.php");?>