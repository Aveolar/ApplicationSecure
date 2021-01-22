<div class="admin-login">
   
    <h4 class="text-center"> Login as Admin</h4>
    <hr>
    <div>
        <form class="text-center admin-login" method="post" action="<?php echo site_url('Adminlogin/verify')?>">
            <label>telephone number</label><br>
          <input  class="text-left" type="text" placeholder="telephone "  name="phone"><br>
            <label>password</label><br>
            <input type="password"  placeholder="enter password" name="password"><br>
            <button type="submit" name="" class="text-center">continue</button>
           
        </form>
    </div>
</div>