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
            <li class="nav-item"><a class="nav-link active" href="funnel-reason.php">Lead Funnel</a></li>
            <li class="nav-item"><a class="nav-link" href="screening-home-preference.php">Screening Call</a></li>
            <li class="nav-item"><a class="nav-link" href="lead-segment-master.php">Lead Segment</a></li>
          </ul>
        </nav>

        <div class="tab-content py-3">
          <div class="tab-pane d-block">
            <div class="row  mb-4">
              <div class="col-12 col-xl-3">
                <div class="vertical-list">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                      Reason for Closing
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-0 mw-xl-75">
                  <div class="card-header">
                    <strong>Add</strong> Reason options
                  </div>
                  <div class="card-body">
                    <div class="form-box">
                     <form action="">
                        <div class="form-group">
                          <label for="">Reason Title</label>
                          <input type="text" class="form-control">
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
            </div>
          </div>

          <div class="table-data table-responsive">
            <table class="table table-sm table-bordered">
              <thead>
                <tr class="table-success">
                  <th class="text-center">Default Option</th>
                  <th>Reason of Closing</th>
                  <th class="text-center">Action</th>
                  <th class="text-center">Position</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">
                    <a href="" class="active">
                      <svg class="c-icon c-icon-lg">
                        <use xlink:href="images-leadhero/free.svg#cil-flag-alt"></use>
                      </svg>
                    </a>
                  </td>
                  <td>
                    Not Closed
                  </td>
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
                  <td class="text-center">
                    <div class="move">
                      <svg class="c-icon c-icon-lg">
                        <use xlink:href="images-leadhero/free.svg#cil-cursor-move"></use>
                      </svg>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <a href="">
                      <svg class="c-icon c-icon-lg">
                        <use xlink:href="images-leadhero/free.svg#cil-flag-alt"></use>
                      </svg>
                    </a>
                  </td>
                  <td>
                    Unreachable
                  </td>
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
                  <td class="text-center">
                    <div class="move">
                      <svg class="c-icon c-icon-lg">
                        <use xlink:href="images-leadhero/free.svg#cil-cursor-move"></use>
                      </svg>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="text-center">
                    <a href="" class="move">
                      <svg class="c-icon c-icon-lg">
                        <use xlink:href="images-leadhero/free.svg#cil-flag-alt"></use>
                      </svg>
                    </a>
                  </td>
                  <td>
                    Budget Issues
                  </td>
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
                  <td class="text-center">
                    <div class="move">
                      <svg class="c-icon c-icon-lg">
                        <use xlink:href="images-leadhero/free.svg#cil-cursor-move"></use>
                      </svg>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <a href="" class="move">
                      <svg class="c-icon c-icon-lg">
                        <use xlink:href="images-leadhero/free.svg#cil-flag-alt"></use>
                      </svg>
                    </a>
                  </td>
                  <td>
                    Wants ready possession
                  </td>
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
                  <td class="text-center">
                    <div class="move">
                      <svg class="c-icon c-icon-lg">
                        <use xlink:href="images-leadhero/free.svg#cil-cursor-move"></use>
                      </svg>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>



        </div>

      </div>



    </div>
  </div>
</main>
<?php include("footer.php");?>