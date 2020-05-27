<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row title-row mb-4 align-items-end">
                    <div class="col-12 col-sm-auto">
                        <h1 class="h4 mb-sm-0">Reporting </h1>
                    </div>
                    <div class="col-12 col-sm d-flex justify-content-end">
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

                <div class="row">
                    <div class="col-12">
                        <h2 class="h6">Agents Activity  </h2>
                        <div class="table-responsive report-table text-nowrap">
                        <table class="table table-bordered table-striped table-middle">
                            <thead class="table-success">
                                <tr>
                                    <th class="text-center">Agent</th>
                                    <th class="text-center">New Leads</th>
                                    <th class="text-center">Not Actioned</th>
                                    <th class="text-center">Emails</th>
                                    <th class="text-center">Calls</th>
                                    <th class="text-center">Notes</th>
                                    <th class="text-center">Tasks Complete</th>
                                    <th class="text-center">Speed To Action	</th>
                                    <th class="text-center">Contact Rate</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a href="user-summary.php">Aloysius Vaz</a></td>
                                        <td class="text-center"><a href="">2</a></td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">N/A</td>
                                        <td class="text-center">100%</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="user-summary.php">Amit Sabhawal</a></td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">N/A</td>
                                        <td class="text-center">0%</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="user-summary.php">Anshu Sharma</a></td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">N/A</td>
                                        <td class="text-center">0%</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Total</th>
                                        <th class="text-center"><a href="">20</a></th>
                                        <th class="text-center"><a href="">4</a></th>
                                        <th class="text-center">0</th>
                                        <th class="text-center">0</th>
                                        <th class="text-center">62</th>
                                        <th class="text-center">100</th>
                                        <th class="text-center">6 min</th>
                                        <th class="text-center">80%</th>
                                    </tr>
                                </tbody>
                          </table>                           
                        </div>
                    </div>


                    <div class="col-12 pt-4">
                        <h2 class="h6">Lead Source Performance</h2>
                        <div class="table-responsive report-table text-nowrap">
                        <table class="table table-bordered table-striped table-middle">
                            <thead class="table-success">
                                <tr>
                                    <th class="text-center">Source</th>
                                    <th class="text-center">Leads</th>
                                    <th class="text-center">Prospects</th>
                                    <th class="text-center">Buyers</th>
                                    <th class="text-center">Sellers</th>
                                    <th class="text-center">Pending</th>
                                    <th class="text-center">Closed</th>
                                    <th class="text-center">Conversion</th>
                                    <th class="text-center">All</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a href="source-summary.php">El Rosario</a></td>
                                        <td class="text-center"><a href="">2</a></td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0%</td>
                                        <td class="text-center"><a href="">2</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="source-summary.php">Existing client</a></td>
                                        <td class="text-center"><a href="">2</a></td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0</td>
                                        <td class="text-center">0%</td>
                                        <td class="text-center"><a href="">2</a></td>
                                    </tr>
                                   
                                    <tr>
                                        <th class="text-center">Total</th>
                                        <th class="text-center"><a href="">50</a></th>
                                        <th class="text-center">0</th>
                                        <th class="text-center">0</th>
                                        <th class="text-center">0</th>
                                        <th class="text-center">0</th>
                                        <th class="text-center"><a href="">1</a></th>
                                        <th class="text-center">0%</th>
                                        <th class="text-center"><a href="">51</a></th>
                                    </tr>
                                </tbody>
                          </table>
                            <div class="data-all-btn clearfix">
                                <a href="" class="btn btn-sm btn-outline-primary">View old reporting by stage</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
          </div>
        </main>
<?php include("footer.php");?>