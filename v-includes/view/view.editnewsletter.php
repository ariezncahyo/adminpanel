<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	
	$newsletters = $manageUsers->shownewsletter();
	

?>

<div id="dashboard">
	<div id="newsletter">
    	<blockquote>
        	<p>Manage Newsletter of your site</p>
        	<small>It will help <cite title="Source Title">you in managing the contents of your news letter</cite></small>
    <div id="addnewsletter">
     </blockquote>
	 <form action="v-includes/functions/function.newsletter.php" method="post">
    <textarea class="ckeditor" id="editor1" name="editor1"></textarea>
    <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
    </form>
    </div>
	
    <table class="table table-hover table-bordered newslettertable">
<caption><h4>Section Wise NewsLetter</h4></caption>
	<thead>
    	<tr>

  <td><h4>Newsletter: List</h4></td>

   </tr>

    <tr>

      <th>Excerpt</th>

	  <th>Delete</th>
      <th>Activate</th>
      <th>De-activate</th>
      <th>Edit</th>
      <th>status</th>
    </tr>

  </thead>

  <tbody>
	<?php 
		foreach($newsletters as $newsletter)
		{  ?>
    <tr>
	<form action="v-includes/functions/function.newsletter.php" method="post">
    	<input type="hidden" value="<?php echo $newsletter['id'] ?>" name="id" />
      <td><?php echo substr($newsletter['newsletter'], 0,50) ?></td>

      <td><button type="submit" class="btn btn-danger" value="delete" name="delete"><i class="icon-trash"></i></button></td>
      <td><button type="submit" class="btn btn-success" value="activate" name="activate"><i class="icon-ok-sign"></i></button></td>
      <td><button type="submit" class="btn btn-success" value="deactivate" name="deactivate"><i class="icon-off"></i></button></td>
      <td><button type="submit" class="btn btn-success" value="edit" name="edit"><i class="icon-edit"></i></button></td>
       <td><button type="button" class="btn btn-success" value="edit" name="edit"><i class="<?php 
																									if($newsletter['activated']==1)
																										echo 'icon-ok';
																									else
																										echo 'icon-remove';
																									?>"></i></button></td>

      </form>
		<?php  } ?>
    </tr>


  </tbody>

</table>
<div class="clearfix"></div>

	</div>
</div>