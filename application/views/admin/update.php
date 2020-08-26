<?php foreach ($alldata as $row) : ?>
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
                        <h1 class="mt-4">Update Book</h1>
                        <hr>
                        <?php $uid = $this->uri->segment(3); ?>
                     
                        	<div class="row" style="display: flex; justify-content: center;">
<div class="col-md-8 col-sm-6 col-xs-12 col-md-offset-4">
	
<div class="card">
<div class="card-header bg-info">
Update Book Info
</div>
<div class="card-body">
<form role="form" method="post" action="<?=base_url(); ?>books/bookupdate/<?=$uid; ?>">
<div class="form-group">
<label>Book Name<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="bookname" autocomplete="off" value="<?php echo $row->BookName; ?>" required="" />
</div>

<div class="form-group">
<label> Category<span style="color:red;">*</span></label>
<select class="form-control" name="categoryname">
	<option value="<?=$row->CatId; ?>"><?=$row->CategoryName; ?></option>
 	<?php 
				foreach ($cat as $rows) {
					?>
						<option value="<?=$rows->id; ?>"><?=$rows->CategoryName; ?></option>
					<?php
				}
			?>
</select>
</div>


<div class="form-group">
<label> Author<span style="color:red;">*</span></label>
<select class="form-control" name="authorname">
	<option value="<?=$row->AuthorId; ?>"><?=$row->AuthorName; ?></option>
	<?php 
				foreach ($authe as $rowss) {
					?>
						<option value="<?=$rowss->id; ?>"><?=$rowss->AuthorName; ?></option>
					<?php
				}
			?>
</select>
</div>

<div class="form-group">
<label>ISBN Number<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="isbn" value="<?=$row->ISBNNumber; ?>" required="required" autocomplete="off"  />
<p class="help-block">An ISBN is an International Standard Book Number.ISBN Must be unique</p>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
 <label>Quantity<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="qty" autocomplete="off" value="<?=$row->Qty; ?>" required="required" />
 </div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
 <label>Price<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="price" autocomplete="off" value="<?=$row->BookPrice; ?>" required="required" />
 </div>
	</div>
</div>
<input type="submit" name="add" value="UPDATE BOOKS" style="float: right;" class="btn btn-info">

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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url(); ?>assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url(); ?>assets/datatables-demo.js"></script>
    </body>
</html>
<?php endforeach; ?>