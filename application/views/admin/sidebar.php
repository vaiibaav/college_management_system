<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?=base_url();?>admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Student
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="<?=base_url(); ?>admission">Add Student</a>
                                    <a class="nav-link" href="<?=base_url(); ?>allstudent">View Student</a>
                                    <a class="nav-link" href="<?=base_url(); ?>admissionfees">Admission Fee</a>
                                    <a class="nav-link" href="<?=base_url(); ?>admissionfees">Exam Fee</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Books
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url(); ?>Books/addbooks">Add Books</a>
                                    <a class="nav-link" href="<?=base_url(); ?>Books/allbooks">View Books</a>
                                    <a class="nav-link" href="<?=base_url(); ?>Books/issuebook">Issue Book</a>
                                    <a class="nav-link" href="<?=base_url(); ?>Books/returnbook">Return Book</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                   
                </nav>
            </div>