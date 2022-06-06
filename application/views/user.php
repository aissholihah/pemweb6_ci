<!-- class="badge bg-primary text-wrap" -->
<div class="content-wrapper" > 
	<section class="content-header" >
    <h1>
      Data user
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data user</li>
    </ol>
  </section>

  <section class="content">
   <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah User</button>
   <!-- bikin kontainer form modal-->



   <table class="table">
    <tr>
     <th>NO</th>
     <th>USERNAME PENGGUNA</th>
     <th>PASSWORD</th>
     <th>EMAIL</th>
   </tr>
   <?php
   $no=1;
   foreach ($user as $usr ) :?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $usr->username_user ?></td>
     <td><?php echo $usr->password_user ?></td>
     <td><?php echo $usr->email_user ?></td>
     <td onclick="javascript: return confirm ('Anda Yakin Data Ini Akan Di Hapus?')"><?php echo anchor ('user/hapus/'.$usr->id_user,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
     <td> <?php echo anchor ('user/edit/'.$usr->id_user,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
   </tr>
 <?php endforeach ?>
</table>

</section>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah User</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url(). 'user/tambah_aksi' ?>">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username_user" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password_user" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email_user" class="form-control" required>
          </div>
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
          
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<!-- end div --> 
</div> 

