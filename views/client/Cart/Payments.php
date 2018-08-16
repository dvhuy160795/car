<h2 class="h2" style="text-align:center">ENTER CUSTOMER INFORMATION</h2>
<style>
    table tr{text-align: center}
</style>

<div>
<form method="post">
    
    <table border="1" style="width:70%;margin: 5% 15% 5% 15%;"  cellspacing="3" cellpadding="2" class="table table-striped table-bordered table-hover">
  
        <tr>
            <td> Name Customer</td>
            <td><input pattern="^[a-zA-Z]{6,}$" class="form-control" placeholder="Your Name" type="text" name="name" id="name" > </td>
        </tr>
    
    
        <tr>
            <td>Contact</td>
            <td><input pattern="^(\d){10,11}$" class="form-control" placeholder="0987654321" type="tel" name="tel" id="contact"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea class="form-control" name="address" placeholder="Hà Nội" id="address"></textarea></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input pattern="^(\w){6,}@.[a-z]{1,}(.[a-z]{1,})?$" placeholder="@gmail.com" class="form-control" type="email" name="email" id="email"></td>
        </tr>
        
        <tr>
            <td colspan="2"><input  class="btn btn-primary" value="Send oder" type="submit" name="send" >  </td>  
        </tr>
</table>
    <input type="hidden" name="hide" value="<?=$_SESSION['token']?>">
</form>
</div>


