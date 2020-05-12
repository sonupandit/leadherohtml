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
                               <button class="btn btn-light btn-block"><span class="icon-plus1"></span></button>
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
                            <div class="form-group">
                                <button class="btn btn-light btn-block"><span class="icon-plus1"></span></button>
                            </div>
                         </div>
                     </div>


                     <div class="row">
                         <div class="col-12">                           
                            <div class="row">
                                <div class="col-12 col-sm-6">                                   
                                    <div class="form-group">
                                       <label for="">Custom Fields (<a href="#">Edit custom fields</a>)</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Add a custom field</option>
                                        </select>
                                    </div>
                                </div>                                
                            </div>
                         </div>

                         <div class="col-12">
                            <label for="">Birthday</label>
                            <div class="row flex-nowrap">                              
                                <div class="col col-sm-6">                                   
                                    <div class="form-group">                                       
                                       <input type="text" class="form-control">
                                    </div>
                                </div> 
                                <div class="col-auto">
                                    <button class="btn btn-danger"><span class="icon-x"></span></button>
                                </div>                              
                            </div> 
                         </div>


                         <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="">Lead Source</label>
                                <select name="" id="" class="form-control">                                  
                                  <option value="volvo">Refferal</option> 
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="">Stage</label>
                                <select name="" id="" class="form-control">                                  
                                  <option value="volvo">Lead</option> 
                                </select>
                            </div>
                        </div>


                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="">Assigned Agent / Group</label>
                                <select name="" id="" class="form-control">
                                    <optgroup label="Group">
                                        <option value="volvo">Lead Pool</option>                                      
                                    </optgroup>
                                    <optgroup label="User">
                                        <option value="volvo">Pool 1</option>                                      
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" style="max-width:150px;" class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Background</label>
                               <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                        </div>


                     </div>

                     <div class="row">
                         <div class="col-12">  
                            <div class="accordion" id="accordion">
                                <div class="card">
                                    <div class="card-header p-0" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block btn-link text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Screening Call <span class="icon-minus"></span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Project of Interest</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">La Gemela</option>
                                                        </select>
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="row">  
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Home Preference</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">-Select-</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Budget</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">-Select-</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">How did you hear about Vianaar</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">-Select-</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Location</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">-Select-</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Purchase Timeline</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">-Select-</option>
                                                        </select>
                                                    </div>
                                                </div>  
                                                <div class="col-12 col-sm-6 pb-2">
                                                    <div class="form-group">
                                                       <div class="row">
                                                           <div class="col">
                                                              Vianaar Pitch Given?
                                                           </div>
                                                           <div class="col-auto">
                                                                 <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" checked id="s" name="s" class="custom-control-input">  
                                                                    <label class="custom-control-label" for="s">No</label>
                                                                 </div>
                                                                 <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" checked id="sa" name="s" class="custom-control-input">  
                                                                    <label class="custom-control-label" for="sa">Yes</label>
                                                                 </div>
                                                           </div>
                                                       </div>
                                                    </div>
                                                    <div class="form-group">
                                                       <div class="row">
                                                           <div class="col">
                                                              Amenities Pitch Given?
                                                           </div>
                                                           <div class="col-auto">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" checked id="sb1" name="s1" class="custom-control-input">  
                                                                    <label class="custom-control-label" for="sb1">No</label>
                                                                 </div>
                                                                 <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" checked id="sb2" name="s1" class="custom-control-input">  
                                                                    <label class="custom-control-label" for="sb2">Yes</label>
                                                                 </div>
                                                           </div>
                                                       </div>
                                                    </div>
                                                    <div class="form-group">
                                                       <div class="row">
                                                           <div class="col">
                                                              Project Pitch Given?
                                                           </div>
                                                           <div class="col-auto">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" checked id="sc1" name="s2" class="custom-control-input">  
                                                                    <label class="custom-control-label" for="sc1">No</label>
                                                                 </div>
                                                                 <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" checked id="sc2" name="s2" class="custom-control-input">  
                                                                    <label class="custom-control-label" for="sc2">Yes</label>
                                                                 </div>
                                                           </div>
                                                       </div>
                                                    </div>
                                                </div>  
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Level of interest</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">-Select-</option>
                                                        </select>
                                                    </div>
                                                </div>  
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Other Notes</label>
                                                        <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
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
        </main>
<?php include("footer.php");?>