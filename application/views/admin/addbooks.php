
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Library Management System</title>
        <link href="<?=base_url(); ?>assets/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'navbar.php'; ?>
        <div id="layoutSidenav">
            <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Books</h1>
                        <hr>
                        
                     
                        	<div class="row" style="display: flex; justify-content: center;">
<div class="col-md-8 col-sm-6 col-xs-12 col-md-offset-4">
	<?php 
		if ($this->uri->segment(3) == "saved") { ?>
        	<div class="alert alert-success alert-dismissible fade show" role="alert">
  				<strong>Success!</strong> Book Added.
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
			</div>
    <?php } ?>
<div class="card">
<div class="card-header bg-info">
Book Info
</div>
<div class="card-body">
<form role="form" method="post" action="<?=base_url(); ?>books/bookvalidate">
<div class="form-group">
<label>Book Name<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="bookname" value="<?=set_value('bookname'); ?>" autocomplete="off" required="" />
</div>

<div class="form-group">
<label> Category<span style="color:red;">*</span></label>
<div class="row">
	<div class="col-md-11">
		<select class="form-control" name="category" required="required">
			<option value=""> Select Category</option>
			<?php 
				foreach ($fetched as $row) {
					?>
						<option value="<?=$row->id; ?>"><?=$row->CategoryName; ?></option>
					<?php
				}
			?>
		</select>
	</div>
	<div class="col-md-1">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  			Add
		</button>
	</div>
</div>
</div>


<div class="form-group">
<label> Author<span style="color:red;">*</span></label>
<div class="row">
	<div class="col-md-11">
		<select class="form-control" name="author" required="required">
			<option value=""> Select Author</option>
			<?php 
				foreach ($fauther as $rows) {
					?>
						<option value="<?=$rows->id; ?>"><?=$rows->AuthorName; ?></option>
					<?php
				}
			?>
		</select>
	</div>
	<div class="col-md-1">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
  			Add
		</button>
	</div>
</div>
</div>

<div class="form-group">
<label>ISBN Number<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="isbn" value="<?=set_value('isbn'); ?>" required="required" autocomplete="off"  />
<p class="help-block">An ISBN is an International Standard Book Number.ISBN Must be unique</p>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
 <label>Quantity<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="qty" value="<?=set_value('qty'); ?>" autocomplete="off"   required="required" />
 </div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
 <label>Price<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="price" value="<?=set_value('price'); ?>" autocomplete="off"   required="required" />
 </div>
	</div>
</div>
<input type="submit" name="add" value="ADD BOOKS" style="float: right;" class="btn btn-info">

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- Category Modal -->
<form method="post" action="<?=base_url();?>books/categoryvalidate">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="form-group">
      		<label>Add Category</label>
       		<input type="text" name="categoryname" class="form-control" required="">
      	</div>
      	<div class="form-group">
      		<label>Status</label>
       		<div class="form-check">
  <input class="form-check-input" type="radio" name="cstatus" id="exampleRadios1" value="1" checked>
  <label class="form-check-label" for="Active">
    Active
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="cstatus" id="exampleRadios2" value="0">
  <label class="form-check-label" for="Inactive">
    Inactive
  </label>
</div>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="addcategory" value="Save Changes" class="btn btn-info">
      </div>
    </div>
  </div>
</div>
</form>
<!-- Author Modal -->
<form method="post" action="<?=base_url();?>books/authorvalidate">
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Author</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        	<div class="form-group">
       			<label>Add Author</label>
       			<input type="text" name="authorname" class="form-control" required="">
       		</div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="addauthor" value="Save Changes" class="btn btn-info">
      </div>
    </div>
  </div>
</div>
</form>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url(); ?>assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url(); ?>assets/datatables-demo.js"></script>
    </body>
</html>
