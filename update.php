


            <?php
                        require 'db.php';

                        $id = $_GET['id'];

                        $selqr = mysqli_query($dbhandale,"select * from logindb where id={$id}");
                         
                        $feqr = mysqli_fetch_array($selqr);
                        
                        if(isset($_POST['update'])){

                            $username = $_POST['uname'];
                            $email = $_POST['email'];
                            $password = $_POST['pwd'];
                            $mono =$_POST['mno'];
                            $city = $_POST['city'];
                        
                    
                            $qurey = mysqli_query($dbhandale,"select * from logindb ");

                                $updtqry = " update logindb SET id=$id,username = '$username',
                                email ='$email',password='$password', mobileno ='$mono', city='$city' WHERE id='$id'";     

                                
                                
                                $res =mysqli_query($dbhandale,$updtqry);
                        }

                              
                       


             ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.com</title>
    <link rel="stylesheet" href="singup.css">
</head>
<body>
    <div class="login">
        <div class="lb">

        
            <h1>Login Form</h1>
            <form method="post">

    
                <div class="inputt">
                    <input type="text" placeholder="Username"  value="<?php echo $feqr['username']?>" name="uname" id="uname" required>
                
                </div>

                <div class="inputt">
                    <input type="email" placeholder="email" value="<?php echo $feqr['email']?>" name="email" id="email">
                
                </div>
                
                <div class="inputt">
                    <input type="password" placeholder="password" value="<?php echo $feqr['password']?>" name="pwd" id="pwd">
                
                </div>


                <div class="inputt">
                    <input type="number" placeholder="Mobile No." value="<?php echo $feqr['mobileno']?>" name="mno" id="mno">
                
                </div>
                
                <div class="inputt">
                    <input type="text" placeholder="City" value="<?php echo $feqr['city']?>" name="city" id="city">
                
                </div>
                
                
                <input type="submit" name="update" value="update" onclick="return myfunction(this.form);">
                
                <span id="asd"><a class="btn" href="logindata.php"> view data </a></span>
            
            
             </form>
             
             
             
             Alredy have account <a href="login.php">Login hear</a>
        </div>
    </div>

<script>


	function myfunction(f){
		if(f.uname.value=='' ){
			alert("Plese enter  username");
			f.uname.focus();
			return false;
		}

        else if(f.pwd.value==''){
            alert("Plese enter  password");
			f.pwd.focus();
			return false;
        }

        else if(f.mno.value==''){
            alert("Plese enter  Mobile No");
			f.mno.focus();
			return false;
        }
        else if(f.city.value==''){
            alert("Plese enter  city");
			f.city.focus();
			return false;
        }
		
		
	}


</script>
    
</body>
</html>



