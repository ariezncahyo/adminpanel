




<div id="dashboard">
	<div id="homepage">
    	<blockquote>
        	<p>Manage Home Page Content of your site</p>
        	<small>It will help <cite title="Source Title">you to manage content for the home page</cite></small>
        </blockquote>
		<div id="managePageContent">
        		<form class="polls" action="v-includes/functions/function.managehomepage.php" method="post">
                  <fieldset>
                    <div class="form-group">
                      <input type="hidden" name="firstbox" value="firstbox" />
                      <label for="exampleInputEmail" class="polllabel" >Enter Headline</label>
                      <input type="text" class="form-control" name="headline1" id="exampleInputEmail" placeholder="Enter headline" style="width:400px">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Enter Content</label>
                      <input type="text" class="form-control" name="content" id="exampleInputEmail" placeholder="Enter headline" style="width:400px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel" >1st line</label>
                      <input type="text" class="form-control" name="firstline" id="exampleInputPassword" placeholder="1st line">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel">2nd line</label>
                      <input type="text" class="form-control" name="secondline" id="exampleInputPassword" placeholder="2nd line">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel">3rd line</label>
                      <input type="text" class="form-control" name="thirdline" id="exampleInputPassword" placeholder="3rd line">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel">4th line</label>
                      <input type="text" class="form-control" name="fourthline" id="exampleInputPassword" placeholder="4th line">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel">5th line</label>
                      <input type="text" class="form-control" name="fifthline" id="exampleInputPassword" placeholder="5th line">
                    </div>

                    <button type="submit" class="btn btn-primary" style="margin-left:220px;">Submit</button>
                  </fieldset>
                </form>  
                

        		<form class="polls" action="v-includes/functions/function.managehomepage.php" name="secondbox" method="post">
                  <fieldset>
                    <div class="form-group">
                      <input type="hidden" name="secondbox" value="secondbox" />
                      <label for="exampleInputEmail" class="polllabel" >Enter Headline</label>
                      <input type="text" class="form-control" name="headline1" id="exampleInputEmail" placeholder="Enter headline" style="width:400px">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Enter Content</label>
                      <input type="text" class="form-control" name="content" id="exampleInputEmail" placeholder="Enter Content" style="width:400px">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel" >1st line</label>
                      <input type="text" class="form-control" name="firstline" id="exampleInputPassword" placeholder="1st line">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel">2nd line</label>
                      <input type="text" class="form-control" name="secondline" id="exampleInputPassword" placeholder="2nd line">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel">3rd line</label>
                      <input type="text" class="form-control" name="thirdline" id="exampleInputPassword" placeholder="3rd line">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel">4th line</label>
                      <input type="text" class="form-control" name="fourthline" id="exampleInputPassword" placeholder="4th line">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword" class="polllabel">5th line</label>
                      <input type="text" class="form-control" name="fifthline" id="exampleInputPassword" placeholder="5th line">
                    </div>

                    <button type="submit" class="btn btn-primary" style="margin-left:220px;">Submit</button>
                  </fieldset>
                </form>  


                <form action="v-includes/functions/function.managehomepage.php" name="bannertext" method="post">
                	<input type="hidden" name="thirdbox" value="thirdbox" />
                    <textarea class="ckeditor" id="editor1" name="editor1"></textarea>
                    <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
                </form>


		</div>
	</div>
</div>