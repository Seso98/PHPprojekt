<?php 
	print '
	<div class="news"><h1>Contact form</h1></div>
		<div id="container">
<center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11143.322088529567!2d16.0739271!3d45.7144367!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe159703d90972cf3!2sUniversity%20of%20Applied%20Sciences%20Velika%20Gorica!5e0!3m2!1sen!2shr!4v1610197939635!5m2!1sen!2shr" width="500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>				
			<form action="/action_page.php">
    <label for="fname"><b>First Name</b></label>
    <input type="text" id="fname" name="firstname" placeholder="Your name...">

    <label for="lname"><b>Last Name</b></label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name...">

    <label for="email"><b>Email</b></label>
    <input type="email" id="email" name="email" placeholder="Your email...">
				
	<label for="country"><b>Country</b></label>
    <select id="country" name="country">
      <option value="Croatia">Croatia</option>
      <option value="Serbia">Serbia</option>
      <option value="Montenegro">Montenegro</option>
	<option value="Slovenia">Slovenia</option>
	<option value="BiH">BiH</option>
		<option value="Other">Other</option>
    
	</select>
	

    <label for="subject"><b>Write to us</b></label>
    <textarea id="subject" name="subject" placeholder="Write something..." style="height:150px"></textarea>

    <input type="submit" value="Submit">
  </form>
  </div>';
?>