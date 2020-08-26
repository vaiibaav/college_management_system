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
        <!-- <script type="text/javascript">
            function chkcontrol(j) {
                var total=0;
                for(var i=0; i < document.form1.checkbox.length; i++){
                if(document.form1.checkbox.checked){
                total =total +1;}
                if(total > 3){
                alert("Please Select only three") 
                document.form1.bacourse[j].checked = false ;
                return false;
                }
              }
            }
        </script> -->
    </head>
    <body class="sb-nav-fixed">
        <?php include 'navbar.php'; ?>
        <div id="layoutSidenav">
            <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Admission Form - U.G. Students</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Session : </li>
                        </ol>
                        <?php $this->load->view('admin/courseform'); ?>
                        <br>
                        <?php $this->load->view('admin/admissionform'); ?>
                         <input type="submit" name="bscadmission" value="Save" class="btn btn-lg btn-success" style="float: right;">
                         
                        </form>                   
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
        <script>
            $("input:checkbox").click(function() {
var bol = $("input:checkbox:checked").length >= 3;     
$("input:checkbox").not(":checked").attr("disabled",bol);
});
        </script>
    </body>
</html>
