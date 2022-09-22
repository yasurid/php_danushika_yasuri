<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
<head>
        <?php $this->load->view('inc/header'); ?>
        <link rel="stylesheet" href="<?= Domain ?>/assets/css/style.css" />
    </head>
    <body class="pd-w">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1>List of sales Team</h1>
        <a class="btn btn-info" href="<?php echo Domain ?>index.php/Dashboard/create">Add New</a>
        <?php //print_r($this->db->last_query()); ?>
        <?php echo @$this->session->has_userdata('form_return'); ?>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Current Role</th>
                <th scope="col"></th>
                <th scope="col">
                    
                </th>
                <th scope="col">
                    
                </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($all as $mem): ?>
              <tr>
                <th scope="row"><?= $mem->MemberId ?></th>
                <td><?= $mem->MemberName ?></td>
                <td><?= $mem->Email ?></td>
                <td><?= $mem->Phone ?></td>
                <th ><?= $mem->Role ?></th>
                <td>
                <button type="button"  class="btn btn-primary member_view" 
                data-id="<?= $mem->MemberId ?>" 
                 data-toggle="modal" data-target="#exampleModal">
                    View
                  </button>
                </td>
                <td>
                <a type="button" class="btn btn-info" href="http://test123.test/index.php/Dashboard/edit/<?= $mem->MemberId ?>">
                    Edit
              </a>
                </td>
                <td>
                <a type="button" class="btn btn-danger" href="http://test123.test/index.php/Dashboard/delete/<?= $mem->MemberId ?>">
                    Delete
              </a>
                </td>
              </tr>
              <?php endforeach; ?>
              
            </tbody>
          </table>


          <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">View</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
        
                <div class="form-group">
                    <label for="exampleInputEmail1">Id</label>
                    <input type="text"  class="form-control" disabled id="Id" aria-describedby="emailHelp">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text"  class="form-control" disabled id="Name" aria-describedby="emailHelp">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text"  class="form-control" disabled id="Email" aria-describedby="emailHelp">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text"  class="form-control" disabled id="Phone" aria-describedby="emailHelp">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">JoinedDate</label>
                    <input type="text"  class="form-control" disabled id="JoinedDate" aria-describedby="emailHelp">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Role</label>
                    <input type="text"  class="form-control" disabled id="Role" aria-describedby="emailHelp">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Comment</label>
                    <textarea id="Comment" class="form-control" disabled> </textarea>

                    
                   
                </div>
                  
                  
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $(".member_view").click(function(){
        var id = $(this).data('id');
        //alert(id);
        var url = window.location.origin+'/index.php/Dashboard/get_one';
        //alert(url);
        $.ajax({
              url: url,
              type: 'POST',
              data : {"id": id},
              dataType: 'json',
              success: function(res) {

                $("#Id").val(res[0].MemberId);
                $("#Name").val(res[0].MemberName);
                $("#Email").val(res[0].Email);
                $("#Phone").val(res[0].Phone);
                $("#JoinedDate").val(res[0].JoinedDate);
                $("#Role").val(res[0].Role);
                $("#Comment").val(res[0].Comment);
                $("#Team").val(res[0].Team);
               // $("#Name").val(res[0].MemberName);
                 // console.log(res[0].MemberName);
                //  alert(res);
    }
});
      });
    });
  </script>
    
    </body>
</html>