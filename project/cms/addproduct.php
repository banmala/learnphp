<?php 
  include  $_SERVER['DOCUMENT_ROOT'].'/learn/project/config/init.php';
  include 'inc/header.php';
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Product</h3>
              </div>

              <div class="title_right text-right">
              
                <!-- <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div> -->
                <!-- <button class="btn btn-primary">Add Product</button> -->
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <!-- <div class="x_title">
                    <h2>Plain Page</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div> -->
                  <div class="x_content">
                      <!-- product adding form -->
                    
                  	<form method="post" action="process/addproduct">
                      <div class="form-group">
                        <label for="productname">Product Name</label>
                        <input type="text" class="form-control" id="productname" name="productname" placeholder="Enter Product Name" required>
                      </div>
                      <div class="form-group">
                        <label for="description">Product Description</label>
                        <textarea name="description" class="form-control" id="description"  placeholder="Enter Product Description" rows="10" ></textarea>
                      </div>
                      <div class="row">
                      <div class="form-group col-md-4">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" placeholder="Enter Stock Amount" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="rate">Rate</label>
                        <input type="number" class="form-control" id="rate" name="rate" placeholder="Enter Rate Amount" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" name="status" class="form-control">
                          <option selected>Choose...</option>
                          <option value="Active">Active</option>
                          <option value="Passive">Passive</option>
                        </select>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-12 text-center">
                          <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                        
                        </div>
                      
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php 
        include 'inc/footer.php';
?>
