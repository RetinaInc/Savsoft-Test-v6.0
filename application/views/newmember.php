

<div id="container">
	<h1>Add New Member 
	<div style="float:right" >
	<?php echo anchor('member/',img('images/back.gif'));?> &nbsp;
	
	</div>
	</h1>

	<div id="body">

	<?php echo form_open('member/add/');?>
	<?php echo validation_errors(); 
	if(isset($msg)){
	echo $msg; }
	?>
	
	
	<code>
	
	
	<table>
	<tr><td>First Name</td><td width="20px"></td><td><input type="text" name="first_name" value="" ></td></tr>
	<tr><td>Last Name</td><td width="20px"></td><td><input type="text" name="last_name" value="" ></td></tr>
	<tr><td>Email</td><td width="20px"></td><td><input type="text" name="email" value="" ></td></tr>
	<tr><td>Password</td><td width="20px"></td><td><input type="password" name="password" value="" ></td></tr>
	<tr><td>Contact No. </td><td width="20px"></td><td><input type="text" name="contact_no" value="" ></td></tr>
	<tr><td valign=top >Address</td><td width="20px"></td><td><input type="text" name="address" value="" ></td></tr>
	<tr><td>Country</td><td width="20px"></td><td><input type="text" name="country" value="" ></td></tr>
	<tr><td>Credit</td><td width="20px"></td><td><input type="text" name="credit" value="" ></td></tr>
	<tr><td>Group</td><td width="20px"></td><td><select name="gid"><?php foreach($groupName as $groupname){ ?><option value="<?=$groupname['gid']?>"  ><?=$groupname['group_name']?></option><?php } ?></select></td></tr>
	<tr><td valign=top >Status</td><td width="20px"></td><td><input type="radio" name="status" value="1"  > Active <br/><input type="radio" name="status" value="0"  > Deactive</td></tr>
	<tr><td valign=top >Account type</td><td width="20px"></td><td><input type="radio" name="su" value="0"  > User <br/><input type="radio" name="su" value="1"  > Administrator</td></tr>
	</table>
	
	<input type="submit" value="Submit">
	</code>
	
	 
	
	</div>

	
</div>

