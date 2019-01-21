CREATE EMPLOYEE

<br /> <br />
<form method="POST" 
 action="/Employee">
 {{ csrf_field() }}
 <h4>Id</h4>
<br>
<input type="text" name="txt_id" />
<br/>
<h4>Name</h4>
<br>
<input type="text" name="txt_name" />
<br/>
<h4>Adress</h4>
<br>
<input type="text" name="txt_address" />
<br/>
<h4>Phone Number</h4>
<br>
<input type="text" name="txt_phone_number" />
<br/>

<br /> <br />
<input type="submit"
id="sbm_save"
name="sbm_save"
address="sbm_save"
value="save" />
<br>
</form>
