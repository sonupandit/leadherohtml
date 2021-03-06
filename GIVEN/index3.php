<?php include("header.php");?>
<style>
    .c-sidebar {
        background: #1b9e3e;
    }
    .c-app {      
        background-color: #f6ffed;
    }
    /* .c-sidebar .c-sidebar-nav-link, .c-sidebar .c-sidebar-nav-dropdown-toggle,.c-sidebar .c-sidebar-nav-title {
        color: #3c4b64;      
    } */
    .c-sidebar .c-sidebar-brand {
    color: #fff;
    background: #fff;
    border-right: 1px solid #d8dbe0;
}
.c-sidebar .c-sidebar-nav-link:hover, .c-sidebar .c-sidebar-nav-dropdown-toggle:hover {
    color: #fff;
    background: #147c30;
}
.bg-gradient-success {
    background: #7ab641 !important;
    background: linear-gradient(45deg, #7ab641 0%, #1b9e3e 100%) !important;
    border-color: #7ab641 !important;
}
.badge-success {   
    background-color: #6faa37;
}
.data-table .c-info a[href*="mailto:"],.avatar-link {
    color: #6faa37  !important;
}
</style>



      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">

                <div class="row title-row mb-4">
                  <div class="col-auto">
                      <h1 class="h2 m-0">Dashboard</h1>
                  </div>
                  <div class="col d-flex justify-content-end">
                      <div class="row justify-content-end align-items-center">
                          <div class="col"></div>
                          <div class="col-auto">
                          <select name="" id="" class="form-control">
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
                  <a href="#" class="card text-white bg-gradient-success">
                    <div class="card-body card-body d-flex text-center justify-content-center align-items-center">
                      <div>
                        <div class="text-value-lg">32</div>
                        <div>New Leads</div>
                      </div>                      
                    </div>
                  </a>
                </div>     

                <div class="col-12 col-sm-6 col-md-4 col-xl">
                  <a href="#" class="card text-white bg-gradient-warning">
                    <div class="card-body card-body d-flex text-center justify-content-center align-items-center">
                      <div>
                        <div class="text-value-lg">12</div>
                        <div>Unactioned</div>
                      </div>                      
                    </div>
                  </a>
                </div>  
                
                <div class="col-12 col-sm-6 col-md-4 col-xl">
                  <a href="#" class="card text-white bg-gradient-primary">
                    <div class="card-body card-body d-flex text-center justify-content-center align-items-center">
                      <div>
                        <div class="text-value-lg">76</div>
                        <div>Tasks Due</div>
                      </div>                      
                    </div>
                  </a>
                </div>   

                <div class="col-12 col-sm-6 col-md-4 col-xl">
                  <a href="#" class="card text-white bg-gradient-info">
                    <div class="card-body card-body d-flex text-center justify-content-center align-items-center">
                      <div>
                        <div class="text-value-lg">63%</div>
                        <div>Contacted</div>
                      </div>                      
                    </div>
                  </a>
                </div> 

                <div class="col-12 col-sm-6 col-md-4 col-xl">
                  <a href="#" class="card text-white bg-gradient-danger">
                    <div class="card-body card-body d-flex text-center justify-content-center align-items-center">
                      <div>
                        <div class="text-value-lg">2 min</div>
                        <div>Speed to Action</div>
                      </div>                      
                    </div>
                  </a>
                </div> 

              </div>              
              <!-- /.row-->

             
            
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">Leads added today</div>
                    <div class="card-body">  
                      <table class="table data-table text-center table-responsive-sm table-hover table-outline">
                        <thead class="thead-light">
                          <tr>
                            <th>Name</th>
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
                                   <img class="c-avatar-img" src="assets/img/avatars/no-img.jpg"> 
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
                                   <img class="c-avatar-img" src="assets/img/avatars/no-img.jpg"> 
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

                          <tr>
                            <td>
                              <a href="" class="avatar-link">
                                <div class="c-avatar">
                                   <img class="c-avatar-img" src="assets/img/avatars/no-img.jpg"> 
                                </div>
                                <p>Peterpaul Nadar</p>
                              </a>  
                            </td>
                            <td>
                              <div class="c-info">
                                <a href="mailto:peterpaulnadar@gmail.com">peterpaulnadar@gmail.com</a><br>
                                <a href="tel:+919825239178">+919825239178</a>
                              </div>
                            </td>
                            <td>Closed</td>
                            <td>
                                 <h4>La Macedo</h4>  
                                 <small>20 minutes ago</small>
                            </td>
                            <td>
                              <h4>Lead Pool</h4>  
                            </td>
                            <td>
                              <span class="badge p-1 badge-success">Contacted</span>
                            </td>
                            <td>
                              N/A
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <a href="" class="avatar-link">
                                <div class="c-avatar">
                                   <img class="c-avatar-img" src="assets/img/avatars/no-img.jpg"> 
                                </div>
                                <p>Gazge Salahuddin Husain</p>
                              </a>  
                            </td>
                            <td>
                              <div class="c-info">
                                <a href="mailto:sgazge@yahoo.com">sgazge@yahoo.com</a><br>
                                <a href="tel:+917738243132">+917738243132</a>
                              </div>
                            </td>
                            <td>Screened</td>
                            <td>
                                 <h4>La Macedo</h4>  
                                 <small>23 minutes ago</small>
                            </td>
                            <td>
                              <h4>Nakita Antao</h4>  
                            </td>
                            <td>
                              <span class="badge p-1 badge-success">Contacted</span>
                            </td>
                            <td>
                               2.0
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <a href="" class="avatar-link">
                                <div class="c-avatar">
                                   <img class="c-avatar-img" src="assets/img/avatars/no-img.jpg"> 
                                </div>
                                <p>NareshKumar Barik</p>
                              </a>  
                            </td>
                            <td>
                              <div class="c-info">
                                <a href="mailto:nrshkmrbrk@gmail.com">nrshkmrbrk@gmail.com</a><br>
                                <a href="tel:+918917589395">+918917589395</a>
                              </div>
                            </td>
                            <td>N/A</td>
                            <td>
                                 <h4>La Branca</h4>  
                                 <small>30 minutes ago</small>
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
                         <a href="" class="btn btn-outline-primary">View All 54 People</a>
                      </div>
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