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
                                    <li class="nav-item"><a class="nav-link" href="company-setting.php">Company Settings</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="company-custom-fields.php">Custom Fields</a></li>                                   
                                </ul>
                            </nav>
                            <div class="tab-content py-3">
                                   <div class="tab-pane d-block">
                                        <div class="card mx-600">
                                            <div class="card-header">
                                                <strong>Add</strong> custom field

                                                <div class="card-header-actions">
                                                    <a href="javascript:void(0)" class="btn-link" data-toggle="collapse" data-target="#formcard" aria-expanded="true">
                                                      <span class="icon-minus"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="collapse show" id="formcard">
                                              <div class="card-body">
                                                <div class="form-box">
                                                <form action="">
                                                    <div class="form-group">
                                                       <label for="">Field Name</label>
                                                       <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                       <label for="">Type</label>
                                                       <select name="" id=""  class="form-control">
                                                           <option value="">Select Type</option>
                                                       </select>
                                                    </div>
                                                    <div class="dynamic-fields clearfix">
                                                        <div class="form-group">
                                                            <button class="btn btn-dark">Options <span class="icon-plus-circle"></span></button>
                                                        </div> 
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-danger" type="button""><span class="icon-trash-2"></span></button>
                                                                </div>
                                                            </div>
                                                        </div>       
                                                    </div>
                                                    <div class="form-group form-sumbit mb-0">
                                                        <button class="btn btn-primary">Save</button>
                                                        <button class="btn btn-warning">Cancel</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                            </div>
                                           
                                        </div>

                                        <div class="table-data table-responsive">
                                            <table class="table table-sm table-bordered">
                                            <thead>
                                                <tr class="table-success">
                                                <th>Field Name</th>
                                                <th>Type</th>
                                                <th class="text-center">People</th>
                                                <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>                  
                                                <td>Anniversary</td>
                                                <td>Date</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">
                                                    <ul class="action-group d-flex justify-content-center list-unstyled m-0">
                                                    <li class="action-edit">
                                                        <a href="">
                                                        <i class="icon-edit"></i>
                                                        edit
                                                        </a>
                                                    </li>
                                                    <li class="action-delete">
                                                        <a href="">
                                                        <i class="icon-delete"></i>
                                                        delete
                                                        </a>
                                                    </li>
                                                    </ul>
                                                </td>                  
                                                </tr>                
                                            </tbody>
                                            </table>
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