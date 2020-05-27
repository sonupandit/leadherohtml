<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row with-sidebar">
                     <div class="col-12 col-md">
                        <div class="row title-row mb-4">
                            <div class="col-auto">
                                <h1 class="h4 m-0">Tasks</h1>
                            </div>
                            <div class="col-12 col-md">
                                <div class="row mx-n2 mt-3 mt-md-0">
                                    <div class="col-12 col-md-3 px-2">
                                        <div class="form-group">
                                            <label class="mb-0" for="">From</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 px-2">
                                        <div class="form-group">
                                            <label class="mb-0" for="">To</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md px-2">
                                        <div class="form-group">
                                            <label class="mb-0" for="">Showing :</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-auto px-2 align-self-end">
                                        <div class="form-group">                                           
                                            <button class="btn btn-primary btn-sm">GO</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                  
                        </div>

                        <div class="overdue clearfix">
                           <h5>Overdue Tasks</h5>
                           <ul class="list-unstyled minimal-listing mt-4">
                                <li>
                                    <div class="row flex-nowrap align-items-center">
                                        <div class="col-auto pr-0">
                                            <div class="custom-control mr-0 custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cc">
                                                <label class="custom-control-label" for="cc"></label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <span class="badge p-1 badge-dark">Follow Up </span> <strong>Aug 14, 2018 </strong><a href="">Follow Up  </a>  :: [ Re: ] 
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row flex-nowrap align-items-center">
                                        <div class="col-auto pr-0">
                                            <div class="custom-control mr-0 custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="c1">
                                                <label class="custom-control-label" for="c1"></label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <span class="badge p-1 badge-dark">Follow Up </span> <strong>Jun 17, 2019 </strong><a href="">Call  </a>  [ Re: Rajeev M Gowda ]
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row flex-nowrap align-items-center">
                                        <div class="col-auto pr-0">
                                            <div class="custom-control mr-0 custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="c2">
                                                <label class="custom-control-label" for="c2"></label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <span class="badge p-1 badge-dark">Follow Up </span> <strong>Jun 19, 2019 </strong><a href="">Call  </a>  [ Re: Vinit Kumar ]
                                        </div>
                                    </div>
                                </li>
                            </ul>


                        <nav class="pagination-wrap mt-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <ul class="pagination mb-0 flex-wrap pagination-sm">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>                              
                                        <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 mt-2 mt-sm-0 col-sm-auto">
                                    <div class="show-perpage">
                                       Show per page: <a href="">10</a> <a href="">20</a> <a href="">50</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                            
                        </div>




                     </div>

                     <aside class="col-12 col-md-auto sidebar-column">
                       <div class="sc-inner">
                            <div class="card card-accent-success">
                                <div class="card-header">
                                  <span class="icon-help-circle"></span> Need help?
                                </div>
                                <div class="card-body">
                                    <p>Contact us at <a href="mailto:help@leadhero.co.in">help@leadhero.co.in</a></p>
                                    <p>You can also check our Knowledge Base and suggest features.</p>
                                </div>
                            </div>
                       </div>
                     </aside>                
                </div>

            </div>
          </div>
        </main>
<?php include("footer.php");?>