

<div id="container">
	<h1>Member 
	<div style="float:right;"><?php echo anchor('member/newm/','Add New');?></div>
	</h1>
	<div id="body">
	<input type="text" id="searchm" value="" onkeydown="if(event.keyCode==13){return searchMember();}"> <a href="javascript:searchMember();"><?php echo img(array('src'=>'images/search.jpg','width'=>'20','height'=>'20','title'=>'Search'));?></a>
	<table>
	<tr id="Theading" >
	<th id="Theading"> ID </th>
	<th id="Theading"> Email </th>
	<th id="Theading"> First Name </th>
	<th id="Theading"> Last Name </th>
	<th id="Theading"> Group </th>
	<th id="Theading"> Country </th>
	<th id="Theading"> View </th>
	<th id="Theading"> Edit </th>
	<th id="Theading"> Delete </th>
	</tr>
	<?php foreach($member as $member){ ?>
	<tr id="Tvalues">
	<td ><?=$member['uid']?></td>
	<td ><?=$member['email']?></td>
	<td ><?=$member['first_name']?></td>
	<td ><?=$member['last_name']?></td>
	<td ><?=$member['group_name']?></td>
	<td ><?=$member['country']?></td>
	<td ><center><?php echo anchor('member/view/'.$member['uid'],img(array('src'=>'images/view.png','title'=>'View')));?></center></td>
	<td ><center><?php echo anchor('member/edit/'.$member['uid'],img('images/edit.png'))?></center></td>
	<td ><center><a href="javascript:delm('<?php echo $member['uid']?>');"><?php echo img('images/delete.png')?></a></center></td>
	</tr>
	<?php } ?>
	</table>
	<?php if(isset($limit)){
	if(count($member)<=0){ echo "No Member Found!<br/>";}
	 
	$next=($limit+30); $back=($limit-30); 
	if($back<0){ $back=0;}
		echo anchor('member/index/'.$back,'Back');?> | <?php echo anchor('member/index/'.$next,'Next'); 
		
		} ?>
	<br/><br/>
	
	
	</div>

	
</div>

