<?php include("header.php");?>
      <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">

                <div class="row title-row mb-4">
                     <div class="col-auto">
                        <h1 class="h4 m-0">New Contact</h1>
                     </div>                  
                </div>

             <div class="form-box" style="max-width: 800px;">
                 <form action="#">
                     <div class="row">
                         <div class="col-12 col-sm-6">
                             <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control">
                             </div>
                         </div>
                         <div class="col-12 col-sm-6">
                             <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control">
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-12">
                            <label for="">Email Addresses</label>
                            <div class="row">
                                <div class="col-12 col-sm-6">                                   
                                    <div class="form-group">
                                         <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                   <div class="form-group">
                                        <select name="" id="" class="form-control">
                                            <option value="">Home</option>
                                            <option value="">Work</option>
                                            <option value="">Other</option>
                                        </select>
                                   </div>
                                </div>
                            </div>
                           <div class="form-group">
                               <button class="btn btn-secondary btn-block"><span class="icon-plus"></span></button>
                           </div>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-12">
                            <label for="">Phone Numbers</label>
                            <div class="row">
                                <div class="col-12 col-sm-6">                                   
                                    <div class="form-group">
                                         <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                   <div class="form-group">
                                        <select name="" id="" class="form-control">
                                            <option value="">Home</option>
                                            <option value="">Work</option>
                                            <option value="">Other</option>
                                        </select>
                                   </div>
                                </div>
                            </div>
                            <button class="btn btn-secondary btn-block"><span class="icon-plus"></span></button>
                         </div>
                     </div>

                 </form>
             </div>


            </div>
          </div>
        </main>
<?php include("footer.php");?>