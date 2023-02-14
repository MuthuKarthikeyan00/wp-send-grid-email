<?php
defined('ABSPATH') or die('not access');
?>

<form method="post" action="" id="form">
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <div class="form">
       <div>
          <label>subject</label>
          <input name="subject" id="subject"  type="text" class="input" required>
       </div>  
        <div>
          <label>body</label>
          <input name="body" id="body" type="text" class="input" required>
       </div>  
        <button type="button" id="my_save_btn" class="my_save_btn">Save</button>
    </div>
</div>
</form>
