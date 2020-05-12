<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                     <div class="col-12 col-md">
                        <div class="row title-row mb-4">
                            <div class="col-auto">
                                <h1 class="h4 m-0">Add New Task</h1>
                            </div>                  
                        </div>

                        <div class="form-box mx-600">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Name<sup>*</sup></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12"></div>                                   
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Date <sup>*</sup></label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Time <sup>*</sup></label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Assigned User <sup>*</sup></label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Select User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Task Type <sup>*</sup></label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Follow Up</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group form-sumbit mb-0">
                                            <button class="btn btn-primary">Save</button>
                                            <button class="btn btn-warning">Cancel</button>
                                        </div>
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