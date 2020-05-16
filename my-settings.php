<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row with-sidebar">
                     <div class="col-12 col-md">
                        <div class="row title-row mb-4">
                            <div class="col-auto">
                                <h1 class="h4 m-0">My Settings</h1>
                            </div>                  
                        </div>

                        <div class="tab-wrap clearfix">
                            <nav class="tabs-link">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" href="my-settings.php">My Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="my-email.php">Email</a></li>
                                    <li class="nav-item"><a class="nav-link" href="knowlarity-settings.php">Knowlarity [SR Calls]</a></li>
                                </ul>
                            </nav>
                            <div class="tab-content py-3">
                                 <div class="tab-pane d-block">
                                     <div class="form-box mx-600">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>First Name<sup>*</sup></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Last Name<sup>*</sup></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Email<sup>*</sup></label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Set New Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Confirm New Password</label>
                                                        <input type="password" class="form-control">
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
                            </div>
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