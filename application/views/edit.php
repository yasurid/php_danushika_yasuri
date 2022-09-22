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

        <h1>Edit Sales Representative</h1>
        <a href="http://test123.test/index.php/Dashboard/" class="btn btn-primary">Back to list</a>

        <div >
            <h2></h2>
            <?php echo @validation_errors(); ?>
            <?php echo @$this->session->has_userdata('form_return'); ?>
            <form method="post" action="">
            <?php if($one[0]->MemberId):  ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Id</label>
                    <input type="text"  class="form-control" value="<?= set_value('',$one[0]->MemberId ) ?>" disabled>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
              <?php endif; ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" name="form[MemberName]" value="<?php echo set_value('form[MemberName]',$one[0]->MemberName ) ?>"  class="form-control" id="" aria-describedby="">
                    <small id="emailHelp" class="form-text text-muted">First name </small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" name="form[Email]" class="form-control" value="<?php echo set_value('form[Email]',$one[0]->Email ) ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telephone </label>
                    <input type="text" name="form[Phone]" class="form-control"  value="<?php echo set_value('form[Phone]',$one[0]->Phone ) ?>"  id="" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Joined Date</label>
                    <input type="date" name="form[JoinedDate]"  value="<?php echo set_value('form[JoinedDate]',$one[0]->JoinedDate ) ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Curret Role</label>
                    <select name="form[Role]" class="form-control" >
                      <option>Select Role</option>
                      <option value="1" <?php echo ($one[0]->Role==1)?"selected":"" ?>> Team Leader</option>
                      <option value="2" <?php echo ($one[0]->Role==2)?"selected":"" ?>> Team Member</option>
                    </select>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Comments</label>
                    
                    <textarea class="form-control"   name="form[Comment]" rows="3" ><?php echo ($one[0]->Comment)?$one[0]->Comment:"" ?></textarea>
                    
                  </div>
                  <button type="submit" class="btn btn-primary">OK</button>
            </form>
        </div>
       


 
    
    </body>
</html>