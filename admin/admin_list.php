<?php

 require('head_c.php');
$_SESSION['menu']='product';
$data=$obj->admin();
  ?>
<div class="wrapper">
  <?php
  require('leftMenu.php');
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin List
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="new_admin.php">New Admin </a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
          <div class="box-body">
              <div class="col-xs-12 col-md-12">
                <table id="example1" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Passwor</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($d=$data->fetch(PDO::FETCH_ASSOC)) {?>
                    <tr>
                      <td><?php echo $d['name'] ?></td>
                      <td><?php echo $d['email'] ?></td>
                      <td><?php echo $d['password'] ?></td>
                      <td><?php echo $d['status'] ?></td>
                     
                      <td>
                        <a href="admin_edit.php?id=<?php echo $d['id']?>" class="btn btn-primary">Edit</a>
                        <a href="admin_delete.php?id=<?php echo $d['id']?>" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              
              
            </div>
        </div>
        </div>
        </div>
        
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- ./wrapper -->
    <?php require('footer_c.php');?>
