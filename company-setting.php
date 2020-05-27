<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                     <div class="col-12 col-md">
                        <div class="row title-row mb-4">
                            <div class="col-auto">
                                <h1 class="h4 m-0">Company Settings</h1>
                            </div>                  
                        </div>

                        <div class="tab-wrap clearfix">
                            <nav class="tabs-link">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" href="company-setting.php">Company Settings</a></li>
                                    <li class="nav-item"><a class="nav-link" href="company-custom-fields.php">Custom Fields</a></li>                                   
                                </ul>
                            </nav>
                            <div class="tab-content py-3">
                                 <div class="tab-pane d-block">
                                     <div class="form-box mx-600">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Subdomain</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.leadhero.co.in</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Company Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Address</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Address 2</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">City</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">State</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>                                                
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Zipcode / Postal code</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Country</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Permission reminder</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group form-sumbit mb-0">
                                                        <button class="btn btn-primary">Save address</button>
                                                        <button class="btn btn-warning">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                     </div>
                                 </div>
                            </div>
                        </div>


                     </div> 
                </div>

            </div>
          </div>
        </main>
<?php include("footer.php");?>