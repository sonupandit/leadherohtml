<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                <div class="row with-sidebar lead-info">
                     <div class="col-12 col-md">
                        <div class="row avatar-info">
                            <div class="col-12 col-md">
                                <div class="media align-items-center">
                                    <img src="images-leadhero/avatars/no-img.jpg" class="mr-3">
                                    <div class="media-body">
                                        <h5>Nitin Kulkarni <a href=""><span class="icon-edit1"></span></a></h5>
                                        <a href="javascript:void(0)" class="btn closing-btn">Closing</a>
                                        <!-- <a href="mailto:nitindkulkarni@rediffmail.com">nitindkulkarni@rediffmail.com (Home)</a> <br>
                                        <a href="tel:+919821879010">+919821879010 ( Home )</a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="row mx-n2 flex-nowrap">
                                    <div class="col-auto px-2">
                                       <span class="badge point-badge" style="background-color:#d468d4">5</span>
                                    </div>
                                    <div class="col px-2">
                                        <select name="" id="" style="min-width:150px;" class="form-control form-control-sm">
                                            <option value="">Hot</option>
                                        </select>                                       
                                        <div class="text-right pt-2">
                                            <span class="badge p-1 badge-success"><span class="icon-check"></span> Contacted</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 col-md-6">
                                <label for="">Lead Funnel</label>
                                <div class="row mx-n2">
                                    <div class="col-12 col-md-6 px-2">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value="">Screened</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 px-2">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value="">Lead</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="">Reason For Closing</label>
                                <div class="row mx-n2">
                                    <div class="col-12 col-md-6 px-2">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value="">Not Closed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 px-2">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value="">Follow Up</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-n2">
                            <div class="col-auto px-2">
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" placeholder="Tag name">
                                    <div class="input-group-append">
                                        <button class="btn btn-dark" type="button">Add Tag</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-2">
                               <ul class="cheaps list-unstyled">
                                 <li>
                                    <a href="" class="btn btn-outline-dark btn-sm btn-pill">Re-inquiry</a>
                                    <a href="" class="c-close"><span class="icon-x"></span></a>
                                 </li>
                               </ul>
                            </div>
                        </div>


                    <div class="sidebar-tab-wrap clearfix mt-4">
                         <div class="row no-gutters">
                            <div class="col-auto">
                               <nav class="sidbar-tabs">
                                    <ul class="sidebar-tab-links list-unstyled">
                                        <li><a href="lead-info.php">Overview</a></li>
                                        <li><a href="lead-info-send-email.php">Send Email</a></li>
                                        <li><a href="lead-info-notes.php">Notes <span class="badge badge-success">2</span></a></li>
                                        <li><a href="lead-info-task.php" class="active">Task <span class="badge badge-warning">1</span></a></li>
                                        <li><a href="lead-info-action-plans.php">Action Plans</a></li>
                                    </ul>
                               </nav>
                            </div>
                            <div class="col-12 col-md">
                               <div class="sidebar-tab-content p-3 bg-white">
                               <div class="form-box">
                                        <h4 class="h5 mb-3">Add a Task</h4>
                                        <form action="">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Task <sup>*</sup></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Date <sup>*</sup></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Time</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Assigned User <sup>*</sup></label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">Vianaar Homes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Task Type <sup>*</sup></label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">Follow Up</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                                                               
                                                
                                               <div class="col-12">
                                                    <div class="btn-wrap">
                                                        <button class="btn btn-primary">Save Task</button>           
                                                    </div>
                                               </div>
                                            </div>
                                        </form>
                                    </div>  

                                    <ul class="list-unstyled minimal-listing mt-4">
                                       <li>
                                         <div class="row flex-nowrap">
                                            <div class="col">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="e0">
                                                    <label class="custom-control-label" for="e0"><span class="badge badge-dark">Follow Up</span></label>
                                                </div>
                                                <a href="" style="text-decoration:line-through">call at 4 </a>  ::completed by Ruchi Sharma
                                            </div>
                                            <div class="col-auto">
                                               13 May-20 01:10 PM
                                            </div>
                                         </div>
                                       </li>
                                       <li>
                                         <div class="row flex-nowrap">
                                            <div class="col">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="e1">
                                                    <label class="custom-control-label" for="e1"><span class="badge badge-dark">Follow Up</span></label>
                                                </div>
                                                <a href="" style="text-decoration:line-through"> send lluvia details on whatsapp</a>  ::completed by Ruchi Sharma
                                            </div>
                                            <div class="col-auto">
                                                09 May-20 11:29 AM
                                            </div>
                                         </div>
                                       </li>   
                                    </ul>

                               </div>
                            </div>
                         </div>
                    </div>


                     </div>

                     <aside class="col-12 col-md-auto sidebar-column">
                       <div class="sc-inner">
                            <div class="card page-action-card">
                                <div class="card-body py-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <a href="" class="backlink">
                                               <span class="icon-corner-up-left"></span>
                                            </a>
                                        </div>
                                        <div class="col">                                           
                                            <div class="page-action d-flex align-items-center justify-content-end">
                                                <strong>1 of 99108</strong>
                                                <a class="btn disabled" href=""><span class="icon-chevron-left"></span></a>
                                                <a class="btn" href=""><span class="icon-chevron-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-accent-success">
                                <div class="card-header d-flex align-itens-center">
                                   <span class="pr-2">TASKS</span>
                                   <a href="" class="btn btn-dark btn-sm ml-auto py-0"><span class="icon-plus-circle"></span> Add a Task</a>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" id="c1">
                                        <label class="custom-control-label" for="c1"><span class="badge badge-dark">Follow Up</span></label>
                                    </div>
                                    <strong>16 May-20 </strong> <a href="">Follow Up</a>
                                </div>
                            </div>
                            <div class="card card-accent-success">
                                <div class="card-header d-flex align-itens-center">
                                   <span class="pr-2">CONTACT INFO</span>
                                   <a href="" class="btn btn-dark btn-sm ml-auto py-0"><span class="icon-edit1"></span> Edit info</a>
                                </div>
                                <div class="card-body">
                                   <ul class="list-unstyled mb-0 list-info">
                                        <li>
                                           <span class="icon-mail"></span>
                                           <a href="mailto:nitindkulkarni@rediffmail.com">nitindkulkarni@rediffmail.com (Home)</a>
                                        </li>
                                        <li>
                                           <span class="icon-phone"></span>
                                           <a href="tel:+919821879010">+919821879010 ( Home )</a>
                                        </li>
                                   </ul>
                                </div>
                            </div>
                            <div class="card card-accent-success">
                                <div class="card-header d-flex align-itens-center">
                                   <span class="pr-2">DETAILS</span>
                                   <a href="" class="btn btn-dark btn-sm ml-auto py-0"><span class="icon-edit1"></span> Edit info</a>
                                </div>
                                <div class="card-body">
                                   <p><strong>Source:</strong> <a href="">La Masseria</a></p>
                                   <p><strong>Assigned:</strong> <a href="">Ruchi Sharma</a></p>
                                   <p><strong>Receive Promotions:</strong> No</p>
                                </div>
                            </div>
                            <div class="card card-accent-success">
                                <div class="card-header d-flex align-itens-center">
                                   <span class="pr-2">BACKGROUND</span>
                                   <a href="" class="btn btn-dark btn-sm ml-auto py-0"><span class="icon-edit1"></span> Edit info</a>
                                </div>
                                <div class="card-body">
                                   <p>listed in HNI, mumbai. 5-10 Mn USD</p>                                   
                                </div>
                            </div>
                            <div class="card card-accent-success">
                                <div class="card-header d-flex align-itens-center">
                                   SCREENING CALL                            
                                </div>
                                <div class="card-body px-0 pb-0">
                                   <table class="table table-sm mb-0 table-striped">
                                       <thead>
                                           <tr class="bg-primary">
                                               <th>Screening Call</th>
                                               <th>Points</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <tr>
                                               <td colspan="2"><strong>Project Name</strong><br>Villa Lluvia</td>
                                           </tr>                                           
                                           <tr>
                                               <td colspan="2"><strong>Home Preference</strong><br>Standalone Villa</td>
                                           </tr>
                                           <tr>
                                               <td><strong>Budget:</strong><br>5Cr+</td>
                                               <td>5.0</td>
                                           </tr>
                                           <tr>
                                               <td><strong>How did you hear about Vianaar?:</strong><br>Facebook</td>
                                               <td>0.0</td>
                                           </tr>
                                           <tr>
                                               <td><strong>Location:</strong><br>Mumbai</td>
                                               <td>0.5</td>
                                           </tr>
                                           <tr>
                                               <td><strong>Purchase timeline:</strong><br>No plans to visit in next three months</td>
                                               <td>0.0</td>
                                           </tr>
                                           <tr>
                                               <td><strong>Level of interest:</strong><br>Low (Asked no specific questions)</td>
                                               <td>0.0</td>
                                           </tr>
                                           <tr>
                                               <td colspan="2"><strong>Vianaar pitch given?</strong><br>NO</td>
                                           </tr>
                                           <tr>
                                               <td colspan="2"><strong>Amenities pitch given?</strong><br>NO</td>
                                           </tr>
                                           <tr>
                                               <td colspan="2"><strong>Project pitch given?</strong><br>YES</td>
                                           </tr>
                                           <tr>
                                               <td colspan="2"><strong>Other Notes:</strong></td>
                                           </tr>
                                           <tr>
                                               <td class="text-right"><strong>Total:</strong></td>
                                               <td>5.5</td>
                                           </tr>
                                           <tr>
                                               <td class="text-right"><strong>Rounded off:</strong></td>
                                               <td>5</td>
                                           </tr>
                                       </tbody>
                                   </table>                               
                                </div>
                            </div>

                            <div class="card card-accent-success">
                                <div class="card-header d-flex align-itens-center">
                                   SOCIAL PROFILE
                                </div>
                                <div class="card-body">
                                   <ul class="list-unstyled m-0 d-flex social-links">
                                       <li><a href=""><span class="icon-twitter"></span></a></li>
                                       <li><a href=""><span class="icon-facebook"></span></a></li>
                                       <li><a href=""><span class="icon-instagram"></span></a></li>
                                       <li><a href=""><span class="icon-linkedin"></span></a></li>
                                   </ul>   
                                   <p><strong>Name:</strong> Nitin Kulkarni</p>  
                                   <p><strong>Gender:</strong> Male</p>                             
                                </div>
                            </div>

                       </div>
                     </aside>                
                </div>

            </div>
          </div>
        </main>
<?php include("footer.php");?>