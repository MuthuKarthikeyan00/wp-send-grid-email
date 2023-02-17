<?php
defined('ABSPATH') or die('not access');
?>

<style>
/* .my_save_btn{
  background-color: ;
} */
.form{
   max-width: 35%;
}
.my_field_group{
   display: flex;
   align-items: center;
   justify-content: space-between;
   margin: 10px;
}
</style>   

<form method="post" action="" id="form">
<div class="wrapper">
    <div class="title">
     <h2>Registration Form</h2> 
    </div>
    <div class="form">
    <?php wp_nonce_field( 'my_form_action', 'my_form_nonce' ); ?>
       <div class="my_field_group">
          <label class="my_label">subject</label>
          <input name="subject" id="subject"  type="text" class="input" required>
       </div>  
        <div class="my_field_group">
          <label class="my_label" >body</label>
          <input name="body" id="body" type="text" class="input" required>
       </div>  
      <button type="button" id="my_save_btn" class="my_save_btn">Save</button>
    </div>
</div>
</form>
