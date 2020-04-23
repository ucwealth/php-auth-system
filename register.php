<?php include('lib/header.php'); require_once('functions/alert.php'); require_once('functions/user.php');
if(is_user_loggedIn()){
  //redirect to dashboard
  header("Location: dashboard.php");
}
?>
<p style="text-align:center;"><?php print_alert(); ?></p>
<div class="hero_area">
  <h3>Register Here</h3>
  <p>All Fields are required</p>
</div>


    <form action="processRegister.php" method="POST">
		<p class="input-group">
			<!-- <label>First Name</label><br /> -->
			<input 
            <?php
              if(isset($_SESSION['first_name'])){
                echo "value=".$_SESSION['first_name'];
              }
            ?> 
            type="text" name="first_name"  placeholder="Enter Your First Name" />
		</p>

        <p class="input-group">
			<!-- <label>Last Name</label><br /> -->
			<input 
            <?php
              if(isset($_SESSION['last_name'])){
                echo "value=".$_SESSION['last_name'];
              }
            ?> 
            type="text" name="last_name"  placeholder="Enter Your Last Name" />
		</p>

		<p class="input-group">
			<!-- <label for="email">Email</label><br /> -->
			<input 
            <?php
              if(isset($_SESSION['email'])){
                echo "value=".$_SESSION['email'];
              }
            ?> 
            type="email" name="email" placeholder="Enter Your Email" />
		</p>

      <p class="input-group">
			<!-- <label for="password">Password</label><br /> -->
			<input type="password" name="password" placeholder="Enter Your password"     />
		  </p>

        <p class="input-group">
            <!-- <label>Gender</label> -->
            <select name="gender" required>
                <option value="">Select Your Gender</option>
                <option
                <?php
                if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
                    echo "selected";
                }
                ?> 
                >Female</option>
                <option
                <?php
                if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
                    echo "selected";
                }
                ?> 
                >Male</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!-- </p>
    
        <p class="input-group"> -->
            <!-- <label>Designation</label><br /> -->
            

             <select name="designation" required>
                <option value="">Select Your Designation</option>
                <option
                <?php
                if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Buyer'){
                    echo "selected";
                }
                ?> 
                >Buyer</option>
                <option
                <?php
                if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Seller'){
                    echo "selected";
                }
                ?> 
                >Seller</option>
              </select>
        </p>

        <p class="input-group">
			<!-- <label>Department</label><br /> -->
			<input 
            <?php
              if(isset($_SESSION['department'])){
                echo "value=".$_SESSION['department'];
              }
            ?> 
            type="text" name="department" required placeholder="Enter Department" />
		   </p>

        <p>
            <button type="submit" name="submit" class="btn">Register</button>
            Already a member? <a href="login.php">Sign in</a>
        </p> 
        <p>
		  <!-- Already a member? <a href="login.php">Sign in</a> -->
	    </p>   

</form>
    
<?php
    include('lib/footer.php');
?>