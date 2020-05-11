<?php include("header.php");?>
<main class="c-main">
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row title-row mb-4">
                <div class="col-auto">
                    <h1 class="h4 m-0">Master Settings</h1>
                </div>
            </div>

            <div class="tab-wrap clearfix">
                <nav class="tabs-link">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link" href="funnel-reason.php">Lead Funnel</a></li>
                        <li class="nav-item"><a class="nav-link" href="screening-home-preference.php">Screening
                                Call</a></li>
                        <li class="nav-item"><a class="nav-link active" href="lead-segment-master.php">Lead Segment</a></li>
                    </ul>
                </nav>

                <div class="tab-content py-3">
                    <div class="tab-pane d-block">
                        <div class="row mb-4">
                            <div class="col">
                                <div class="card mb-0 mw-xl-50">
                                    <div class="card-header">
                                        <strong>Manage </strong> Lead Segment
                                    </div>
                                    <div class="card-body">
                                        <div class="form-box">
                                            <form action="">
                                                <ul class="repeat-list bs-list list-unstyled">
                                                   <li>
                                                       <div class="row flex-nowrap">
                                                           <div class="col">
                                                               <div class="form-group">
                                                                   <label>Name</label>
                                                                   <input type="text" class="form-control" disabled value="Cold">
                                                               </div>
                                                           </div>
                                                           <div class="col-auto">
                                                                <div class="form-group">
                                                                    <label>Color</label>
                                                                    <input style="max-width:75px;" type="text" class="form-control jscolor {closable:true,closeText:'Close'}" value="c8ffff">
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-group">
                                                                    <label>Upto</label>
                                                                    <input style="max-width:75px;" type="text" class="form-control" value="1.5">
                                                                </div>
                                                            </div>
                                                       </div>
                                                   </li>
                                                   <li>
                                                       <div class="row flex-nowrap">
                                                           <div class="col">
                                                               <div class="form-group">
                                                                   <label>Name</label>
                                                                   <input type="text" class="form-control" disabled value="Warm">
                                                               </div>
                                                           </div>
                                                           <div class="col-auto">
                                                                <div class="form-group">
                                                                    <label>Color</label>
                                                                    <input style="max-width:75px;" type="text" class="form-control jscolor {closable:true,closeText:'Close'}" value="fda50f">
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-group">
                                                                    <label>Upto</label>
                                                                    <input style="max-width:75px;" type="text" class="form-control" value="3.5">
                                                                </div>
                                                            </div>
                                                       </div>
                                                   </li>
                                                   <li>
                                                       <div class="row flex-nowrap">
                                                           <div class="col">
                                                               <div class="form-group">
                                                                   <label>Name</label>
                                                                   <input type="text" class="form-control" disabled value="Hot">
                                                               </div>
                                                           </div>
                                                           <div class="col-auto">
                                                                <div class="form-group">
                                                                    <label>Color</label>
                                                                    <input style="max-width:75px;" type="text" class="form-control jscolor {closable:true,closeText:'Close'}" value="d468d4">
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-group">
                                                                    <label>Upto</label>
                                                                    <input style="max-width:75px;" type="text" class="form-control" value="5">
                                                                </div>
                                                            </div>
                                                       </div>
                                                   </li>
                                                 </ul>
                                                <div class="form-group form-sumbit mb-0">
                                                    <button class="btn btn-primary">Save</button>
                                                    <button class="btn btn-warning">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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