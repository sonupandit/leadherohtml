<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row with-sidebar">
                     <div class="col-12 col-md">
                        <div class="row title-row mb-4">
                            <div class="col">
                                <h1 class="h4 m-0">Action Plans </h1>
                                <p class="m-0 small">Created on May 22, 2017 at 11:09am by Vianaar Homes</p>                                
                            </div>       
                        </div>
                        
                        <div class="form-box">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Action Plan Name <sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">                                   
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="cc">
                                        <label class="custom-control-label" for="cc">pause action plan when person is marked as Contacted</label>
                                    </div>
                                </div>

                                <ul class="list-unstyled flat-list actionplan-listing">
                                    <li>
                                        <div class="row align-items-center">
                                            <div class="col-auto order-2 order-sm-0  py-2 py-sm-0">
                                                <div class="step">Step <span class="badge badge-dark">1</span></div>
                                            </div>
                                            <div class="col-12 col-sm order-3 order-sm-0">
                                                <div class="form-inline flex-nowrap">
                                                    <label for="">Run</label>
                                                    <div class="px-2"><input type="text" style="width:75px;" class="form-control"></div>
                                                    <span>days after the action plan started</span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-auto order-1 order-sm-0">
                                                <div class="action-links text-right text-sm-left">
                                                    <button class="btn btn-sm btn-success"><span class="icon-arrow-up"></span></button>
                                                    <button class="btn btn-sm btn-success"><span class="icon-arrow-down"></span></button>
                                                    <button class="btn btn-sm btn-danger"><span class="icon-minus"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mt-3">
                                            <div class="col-12 col-sm-4">
                                                <div class="form-group mb-sm-0">
                                                    <label for="">Action <sup>*</sup></label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Creat Task</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-8">
                                                <div class="form-group mb-sm-0">
                                                    <label for="">Email Template <sup>*</sup></label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Followup 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row align-items-center">
                                            <div class="col-auto order-2 order-sm-0  py-2 py-sm-0">
                                                <div class="step">Step <span class="badge badge-dark">1</span></div>
                                            </div>
                                            <div class="col-12 col-sm order-3 order-sm-0">
                                                <div class="form-inline flex-nowrap">
                                                    <label for="">Run</label>
                                                    <div class="px-2"><input type="text" style="width:75px;" class="form-control"></div>
                                                    <span>days after the action plan started</span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-auto order-1 order-sm-0">
                                                <div class="action-links text-right text-sm-left">
                                                    <button class="btn btn-sm btn-success"><span class="icon-arrow-up"></span></button>
                                                    <button class="btn btn-sm btn-success"><span class="icon-arrow-down"></span></button>
                                                    <button class="btn btn-sm btn-danger"><span class="icon-minus"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mt-3">
                                            <div class="col-12 col-sm-4">
                                                <div class="form-group mb-sm-0">
                                                    <label for="">Action <sup>*</sup></label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Creat Task</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-8">
                                                <div class="form-group mb-sm-0">
                                                    <label for="">Email Template <sup>*</sup></label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Followup 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="form-group form-sumbit mb-0">
                                            <button class="btn btn-primary">Save</button>
                                            <button class="btn btn-warning">Cancel</button>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-dark btn-sm"><span class="icon-plus1"></span> Add a Step</button>
                                    </div>
                                </div>

                            </form>
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