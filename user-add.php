<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row with-sidebar">
                     <div class="col-12 col-md">
                        <div class="row title-row mb-4">
                            <div class="col">
                                <h1 class="h4 m-0">Invite new agent</h1>
                            </div>                                        
                        </div>


                       <div class="form-box" style="max-width: 800px;">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>First Name <sup>*</sup></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Last Name <sup>*</sup></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Email <sup>*</sup></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Mobile  <sup>*</sup></label>
                                            <input type="text" class="form-control">
                                            <small class="form-text">Should be exactly same as in SR calls</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">SALES-MANAGER</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Group(s)</label>
                                            <div class="custom-control custom-checkbox custom-control-inline form-control">
                                                <input type="checkbox" class="custom-control-input" id="cc">
                                                <label class="custom-control-label" for="cc">Team Vianaar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                   
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Group(s)</label>
                                            <div class="custom-control custom-checkbox custom-control-inline form-control">
                                                <input type="checkbox" class="custom-control-input" id="ca">
                                                <label class="custom-control-label" for="ca">Check this, To enable for reporting</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                
                                <div class="card">
                                    <div class="card-header">Permissions</div>
                                     <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>                                            
                                                    <tr>
                                                        <th>Section</th>
                                                        <th>Action</th>
                                                        <th>&nbsp;</th>
                                                        <th class="text-right">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="d">
                                                                <label class="custom-control-label" for="d">Select All</label>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Company Settings</th>
                                                        <td>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="d1">
                                                                <label class="custom-control-label" for="d1">Manage</label>
                                                            </div>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Custom Fields</th>
                                                        <td>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="d2">
                                                                <label class="custom-control-label" for="d2">Manage</label>
                                                            </div>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Masters</th>
                                                        <td>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="d3">
                                                                <label class="custom-control-label" for="d3">Manage</label>
                                                            </div>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email Templates</th>
                                                        <td>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="d4">
                                                                <label class="custom-control-label" for="d4">Add</label>
                                                            </div>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Action Plans</th>
                                                        <td>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="d5">
                                                                <label class="custom-control-label" for="d5">Add / Edit </label>
                                                            </div>
                                                        </td>
                                                        <td>&nbsp;</td>                                               
                                                        <td>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="d5a">
                                                                <label class="custom-control-label" for="d5a">Delete</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
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