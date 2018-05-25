<?php
	ob_start();
    include_once 'config.php';
    include_once 'libs/connect.inc.php';
    if(isset($_GET['page'])) {$p = $_GET['page'];}else{$p = '';} 
	
	//Thêm vào header.
	include_once 'theme/html/blocks/header.php';
?>
    <body>
        <?php include_once 'theme/html/blocks/navbar.php'; ?>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php include_once 'theme/html/blocks/sidebar.php'; ?>
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">                            
                            
							<?php 
								switch($p){
									case 'sinh-vien':
										include_once 'theme/html/pages/sinhvien.php';
									break;
                                    case 'sinh-vien-add':
                                        include_once 'theme/html/pages/sinhvien-add.php';
                                    break;
									case 'sinh-vien-edit':
                                        include_once 'theme/html/pages/sinhvien-edit.php';
                                    break;
									case 'sinh-vien-del':
                                        include_once 'theme/html/pages/sinhvien-del.php';
                                    break;
									case 'giao-vien':
										include_once 'theme/html/pages/giaovien.php';
									break;
                                    case 'giao-vien-add':
                                        include_once 'theme/html/pages/giaovien-add.php';
                                    break;
									case 'giao-vien-edit':
                                        include_once 'theme/html/pages/giaovien-edit.php';
                                    break;
									case 'giao-vien-del':
                                        include_once 'theme/html/pages/giaovien-del.php';
                                    break;
									case 'lop':
										include_once 'theme/html/pages/lop.php';
									break;
                                    case 'lop-add':
                                        include_once 'theme/html/pages/lop-add.php';
                                    break;
									case 'lop-edit':
                                        include_once 'theme/html/pages/lop-edit.php';
                                    break;
									case 'lop-del':
                                        include_once 'theme/html/pages/lop-del.php';
                                    break;
									case 'mon-hoc':
										include_once 'theme/html/pages/lop.php';
									break;
                                    case 'mon-hoc-add':
                                        include_once 'theme/html/pages/mon-hoc-add.php';
                                    break;
									case 'mon-hoc-edit':
                                        include_once 'theme/html/pages/mon-hoc-edit.php';
                                    break;
									case 'mon-hoc-del':
                                        include_once 'theme/html/pages/mon-hoc-del.php';
                                    break;
									case 'ke-hoach-giang-day':
										include_once 'theme/html/pages/kehoachgiangday.php';
									break;
                                    case 'ke-hoach-giang-day-add':
                                        include_once 'theme/html/pages/kehoachgiangday-add.php';
                                    break;
									case 'ke-hoach-giang-day-edit':
                                        include_once 'theme/html/pages/kehoachgiangday-edit.php';
                                    break;
									case 'ke-hoach-giang-day-del':
                                        include_once 'theme/html/pages/kehoachgiangday-del.php';
                                    break;
									
									default: 
										include_once 'theme/html/pages/home.php';
									break;
								}
							?>
							
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
       
	
<?php 
	//Thêm vào header.
	include_once 'theme/html/blocks/footer.php';
?>
    