<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                     <div class="col-12 col-md">
                        <div class="row title-row mb-4">
                            <div class="col-auto">
                                <h1 class="h4 m-0">My Settings</h1>
                            </div>                  
                        </div>

                        <div class="tab-wrap clearfix">
                            <nav class="tabs-link">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link" href="my-settings.php">My Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="my-email.php">Email</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="knowlarity-settings.php">Knowlarity [SR Calls]</a></li>
                                </ul>
                            </nav>
                            <div class="tab-content py-4">
                                 <div class="tab-pane d-block">
                                     <p>
                                         Knowlarity URL: <br>
                                         <strong>https://vianaar.leadhero.co.in/knowlarity_calls.php</strong>                                         
                                     </p>
                                     <p><button class="btn btn-primary">Click here to copy</button></p>
                                     <br>
                                     <p>Follow the below steps to configure your knowlarity settings:</p>
                                     <ol class="bullet-align text-primary">
                                         <li>Login to your Knowlarity Subscription</li>
                                         <li>Select Settings Tab</li>
                                         <li>Go to HOOK API</li>
                                         <li>Add API and paste above URL</li>
                                         <li>Save</li>
                                     </ol>
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