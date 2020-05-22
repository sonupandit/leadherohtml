<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row with-sidebar">
                     <div class="col-12 col-md">
                        <div class="row title-row mb-4">
                            <div class="col">
                                <h1 class="h4 m-0">Create Email Template</h1>
                            </div>   
                        </div>

                        <div class="form-box">
                            <form action="">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Template Name <sup>*</sup></label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email Subject <sup>*</sup></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row flex-nowrap align-items-end mb-2">
                                    <div class="col">
                                        <label class="m-0">Body</label>
                                    </div>
                                    <div class="col-auto">
                                        <select class="form-control" name="" id="">
                                            <option value="">-Select a template-</option>    
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="" id="" rows="8" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">                                   
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="c1">
                                                <label class="custom-control-label" for="c1">share this template with my team (required for use with action plans)</label>
                                            </div>
                                        </div>
                                        <div class="form-group">                                   
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="c1">
                                                <label class="custom-control-label" for="c1">append user's signature to this template when sending email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-success">Save</button> 
                                        <button class="btn btn-warning">Cancel</button>
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