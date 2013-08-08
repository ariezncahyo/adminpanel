<?php 
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	
	$totalPolls = $manageUsers->showpolls();

?>
<div id="dashboard">
	<div id="polls">
    	<blockquote>
        	<p>Manage Polls of your site</p>
        	<small>It will help <cite title="Source Title">you in getting more statistics</cite></small>
        </blockquote>

		<div id="polladder">
        		<form class="polls" action="v-includes/functions/function.managepolls.php" method="post">
                  <fieldset>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Enter Question</label>
                      <input type="text" class="form-control" name="question" id="exampleInputEmail" placeholder="Enter email" style="width:400px">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel" >1st Answer</label>
                      <input type="text" class="form-control" name="firstanswer" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel">2nd Answer</label>
                      <input type="text" class="form-control" name="secondanswer" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel">3rd Answer</label>
                      <input type="text" class="form-control" name="thirdanswer" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel">4th Answer</label>
                      <input type="text" class="form-control" name="fourthanswer" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left:220px;">Submit</button>
                  </fieldset>
                </form>  
                
                
<table class="table table-hover table-bordered polltable">
<caption><h4>Section Wise Polls</h4></caption>
	<thead>
    	<tr>

  <td><h4>Polls: List</h4></td>

   </tr>

    <tr>

      <th>Question</th>

      <th>1st Answer</th>

      <th>2nd Answer</th>

      <th>3rd Answer</th>
      <th>4th Answer</th>
	  <th>Delete</th>
      <th>Activate</th>
    </tr>

  </thead>

  <tbody>
	<?php 
		foreach($totalPolls as $polls)
		{  ?>
    <tr>
	<form action="v-includes/functions/function.deletepolls.php" method="post">
    	<input type="hidden" value="<?php echo $polls['id'] ?>" name="id" />
      <td><?php echo $polls['question']?></td>

      <td><?php echo $polls['first_answer'] ?></td>

      <td><?php echo $polls['second_answer'] ?></td>

      <td><?php echo $polls['third_answer'] ?></td>
      <td><?php echo $polls['fourth_answer'] ?></td>
      <td><button type="submit" class="btn btn-danger" name="delete"><i class="icon-trash"></i></button></td>
      <td><button type="submit" class="btn btn-success" name="activate"><i class="icon-ok-sign"></i></button></td>
      </form>
		<?php } ?>
    </tr>


  </tbody>

</table>
      
        
		</div>
	</div>
</div>