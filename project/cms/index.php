<?php 
        include 'inc/header.php';
        include  $_SERVER['DOCUMENT_ROOT'].'/learn/project/config/init.php';
?>
        <!-- page content -->
        <div class="right_col" role="main">
        
          <div class="">
          
            <div class="page-title">
              <div class="title_left">
                <h3>Product List</h3>
              </div>

              <div class="title_right text-right">
              <?php flashMessage(); ?>
                <!-- <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div> -->
                <a href="addproduct.php"><button class="btn btn-primary">Add Product</button></a>
              </div>
            </div>

            <div class="clearfix">
            

            </div>
            
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
                  
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Stock Amount</th>
                            <th scope="col">Rate</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $product = new product();
                        $data = $product->getProduct(false);
                        // debugger($data);
                        for($i=0;$i<count($data);$i++){
                          // debugger($data[$i]);
                        
                        ?>
                          <tr>
                            <th scope="row"><?php echo $i+1; ?></th>
                            <td><?php echo  $data[$i]->productname?></td>
                            <td><?php echo $data[$i]->description; ?></td>
                            <td><?php echo $data[$i]->status;  ?></td>
                            <td><?php echo $data[$i]->stock;  ?></td>
                            <td><?php echo $data[$i]->rate;  ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <!-- listing products here -->
                      
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
        