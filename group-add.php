<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row with-sidebar">
                     <div class="col-12 col-md">
                        <div class="row title-row mb-4">
                            <div class="col">
                                <h1 class="h4 m-0">Add New Group</h1>
                            </div>                                        
                        </div>


                       <div class="form-box" style="max-width: 800px;">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>First Name <sup>*</sup></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>                                    
                                </div>                               
                               
                                <div class="row">                                   
                                    <div class="col-12">
                                        <div class="form-group mb-0">
                                            <label>Assigned Agents</label>
                                            <div class="custom-control custom-checkbox custom-control-inline form-control">
                                                <input type="checkbox" class="custom-control-input" id="a1">
                                                <label class="custom-control-label" for="a1"><strong>Vianaar Homes</strong> ( ADMIN )</label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">                                            
                                            <div class="custom-control custom-checkbox custom-control-inline form-control">
                                                <input type="checkbox" class="custom-control-input" id="a2">
                                                <label class="custom-control-label" for="a2"><strong>Rayhan Khan</strong> ( SALES-MANAGER )</label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">                                            
                                            <div class="custom-control custom-checkbox custom-control-inline form-control">
                                                <input type="checkbox" class="custom-control-input" id="a3">
                                                <label class="custom-control-label" for="a3"><strong>Suraj Pinge</strong>  ( SALES-MANAGER )</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group form-sumbit mb-0 mt-3">
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