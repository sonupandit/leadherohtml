<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                     <div class="col-12 col-md">
                        <div class="row title-row mb-4">
                            <div class="col">
                                <h1 class="h4 m-0">Export Contacts</h1>
                            </div>                                                                 
                        </div>
                     </div>
                </div>

              <div class="row">
                  <div class="col-12">
                     <p>Import your leads, past clients and old CRM quickly using our import tool.</p>
                     <p>You will need a .csv export file from your old system.</p>
                     <p>We'll walk you through matching up your data in the next step.</p>                     
                  </div>
              </div>  

              <div class="form-box mx-600">
                  <form action="">
                      <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="up">
                                    <label class="custom-file-label" for="up">Browse your CSV file</label>
                                </div>
                            </div>
                      </div>
                  </form>
              </div>

              <div class="row pt-3">
                  <div class="col-12">
                      <a href="import-list.php" class="btn btn-primary">View recent imports</a>
                  </div>
              </div>

            </div>
          </div>
        </main>
<?php include("footer.php");?>