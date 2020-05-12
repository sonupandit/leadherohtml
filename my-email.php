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
                                    <li class="nav-item"><a class="nav-link active" href="my-email.php">Email</a></li>
                                    <li class="nav-item"><a class="nav-link" href="knowlarity-settings.php">Knowlarity [SR Calls]</a></li>
                                </ul>
                            </nav>
                            <div class="tab-content py-4">
                                 <div class="tab-pane d-block">
                                     <div class="form-box">
                                        <p><strong>Connect your Email to Lead Hero (<a href="">learn more</a>)</strong></p> 
                                        <p>Connecting your email gives these benefits:</p>
                                        <ul class="bullet-align">
                                           <li>Sync Sent and Received Emails.</li>
                                           <li>Process lead notifications from supported Lead Providers (Gmail/Google Apps only).</li>
                                           <li>Better deliverability.</li>
                                           <li>Email sent direct from your email provider.</li>
                                           <li>Removes the small "sent via" message.</li>
                                        </ul>
                                        <a href="" class="btn btn-primary">Connect Gmail / Google Apps</a>  <a href="" class="btn btn-outline-primary">Connect Other Email</a>



                                       <form action="">
                                           <div class="row flex-nowrap align-items-end mt-5 mb-3">
                                                <div class="col">
                                                <label class="m-0"><strong>Email Signature</strong> <sup>*</sup></label>
                                                </div>
                                                <div class="col-auto">
                                                    <select class="form-control" name="" id="">
                                                        <option value="">-Merge Fields-</option>
                                                        <option value="">Agent Name</option>
                                                        <option value="">Agent First Name</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                   <div class="form-group">
                                                       <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                   </div>
                                                   <div class="form-group">
                                                       When clicking an email address in Lead Hero:    
                                                   </div>
                                                   <div class="form-group">
                                                        <div class="custom-control custom-radio mb-1">
                                                            <input type="radio" checked="" id="d1" name="n1" class="custom-control-input">
                                                            <label class="custom-control-label" for="d1">Send email through Lead Hero (recommended)</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" checked="" id="d2" name="n1" class="custom-control-input">
                                                            <label class="custom-control-label" for="d2"> Open your default email program outside Lead Hero (e.g. Gmail, Outlook, Apple Mail)</label>
                                                        </div>
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