<html lang="en">

<head>

    <title><?php echo $title;?></title>

    
    <link href="<?php echo base_url();?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo  base_url()?>plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" >
    <link href="<?php echo base_url();?>plugins/bootstrap/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>plugins/bootstrap/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>plugins/bootstrap/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>plugins/bootstrap/css/style-cargtm.css" rel="stylesheet">


    
    <!-- Javascript -->
    <script src="<?php echo base_url();?>plugins/bootstrap/js/jquery.js"></script>
    <script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>plugins/bootstrap/js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>plugins/bootstrap/js/sb-admin-2.js"></script>
    <script src="<?php echo  base_url()?>plugins/datatable/js/jquery.dataTables.js"></script>

</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" id="nav-header" role="navigation" style="margin-bottom: 0">
            <div class="nav-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                    <img src="<?php echo base_url(); ?>docs/images/logo.jpg" class="shadow" style="float:left; width:40px; margin:5px"><a class="head" href="<?php echo base_url(); ?>/index.php/home">Cargo Terminal Management</a><div class="clear"></div>
                </div>
            </div>
            <!-- /.navbar-header -->
            <div class="navbar-default sidebar" role="navigation" >
                <div class="sidebar-nav navbar-collapse" >
                    <ul class="nav" id="side-menu">
                        <!-- 1 -->
                        <?php if ($jobdesk=='manager') {?>
                        <li>
                            <a <?php echo ($menu==1)?'class="aktif"': ''; ?> href="<?php echo base_url(); ?>manager"><i class="fa fa-dashboard fa-fw"></i> Dasbor</a>
                        </li>
                        <li>
                            <a <?php echo ($menu==2)?'class="aktif"': ''; ?> href="<?php echo base_url(); ?>manager/manajemen-pengguna"><i class="fa fa-users fa-fw"></i> Manajemen Pengguna</a>
                        </li>
                        <li>
                            <a <?php echo ($menu==3 || $menu==4 || $menu==5)? 'class="aktif"': ''; ?> href=""><i class="fa fa-file-text fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php echo ($menu==3)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>manager/laporan/persiapan-angkut"><i class="fa fa-file-text fa-fw"></i> Persiapan Angkut</a>
                                </li>
                                <li>
                                    <a <?php echo ($menu==4)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>manager/laporan/pengambilan-kargo"><i class="fa fa-file-text fa-fw"></i> Pengambilan Kargo</a>
                                </li>
                                <li>
                                    <a <?php echo ($menu==5)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>manager/laporan/transport-dan-alat"><i class="fa fa-file-text fa-fw"></i> Transport & Alat Angkut</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                        <li>
                            <a <?php echo ($menu==6 || $menu==7)? 'class="aktif"': ''; ?> href=""><i class="fa fa-database fa-fw"></i> Backup dan Restore<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php echo ($menu==6)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>manager/backup-dan-restore/backup"><i class="fa fa-database fa-fw"></i> Backup</a>
                                </li>
                                <li>
                                    <a <?php echo ($menu==7)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>manager/backup-dan-restore/restore"><i class="fa fa-database fa-fw"></i> Restore</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                        <li>
                            <a <?php echo ($menu==8)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>manager/pengaturan"><i class="fa fa-wrench fa-fw"></i> Pengaturan</a>
                        </li>
                        <?php } ?>
                        <!-- 2 -->
                        <?php if ($jobdesk=='operator-terminal') {?>
                        <li>
                            <a <?php echo ($menu==9)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>operator-terminal"><i class="fa fa-table fa-fw"></i> Daftar Kargo</a>
                        </li>
                        <li>
                            <a <?php echo ($menu==10)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>operator-terminal/persiapan-angkut"><i class="fa fa-tags fa-fw"></i> Persiapan Angkut Kargo</a>
                        </li>
                        <li>
                            <a <?php echo ($menu==11)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>operator-terminal/pengambilan-kargo"><i class="fa fa-flag fa-fw"></i> Pengambilan Kargo</a>
                        </li>
                        <?php } ?>
                        <!-- 3 -->
                        <?php if ($jobdesk=='petugas-gerbang') {?>
                        <li>
                            <a <?php echo ($menu==12)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>petugas-gerbang"><i class="fa fa-table fa-fw"></i> Daftar Kargo</a>
                        </li>
                        <li> 
                            <a <?php echo ($menu==13)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>petugas-gerbang/kargo-tidak-diketahui"><i class="fa fa-table fa-fw"></i> Daftar Kargo Gelap</a>
                        </li>
                        <?php } ?>
                        <!-- 4 -->
                        <?php if ($jobdesk=='petugas-transport') {?>
                        <li>
                            <a <?php echo ($menu==14)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?>petugas-transport"><i class="fa fa-table fa-fw"></i> Daftar Transport & Alat Angkut</a>
                        </li>
                        <?php } ?>
                        <!-- Akun -->
                        <li>
                            <a <?php echo ($menu==15 || $menu==16)? 'class="aktif"': ''; ?> href=""><i class="fa fa-user fa-fw"></i> Akun Pengguna<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php echo ($menu==15)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?><?php echo $jobdesk;?>/profile"><i class="fa fa-edit fa-fw"></i> Ubah Profil</a>
                                </li>
                                <li>
                                    <a <?php echo ($menu==16)? 'class="aktif"': ''; ?> href="<?php echo base_url(); ?><?php echo $jobdesk;?>/logout"><i class="fa fa-power-off fa-fw"></i> Log Out</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
