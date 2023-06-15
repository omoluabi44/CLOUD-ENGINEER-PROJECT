# Webserver
Developing  my first docker container for a web app .
## Technologies used include:
- HTML
- CSS
- PHP
Pre-requisites include:
- Docker Desktop 
- IDE(using VS CODE in the project)
- AWS account(if you prefer to  push image to  AWS ECS)
## Project creation
 1. Create a  new folder to  host  your files in  VS CODE IDE
 2. Create a file called "index.html"
 3. Create a file called "style.css"
 4. Create a file called "verify.php"
 5. Create a dockerfile. N/B:Name it  "Dockerfile" .Dockerfiles do not have an extension

## Content of the index file 

```
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign UP Portal</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<div class="form-box">
			<h1>SIGN UP </h1>
					<form action="verify.php" method="POST">
						<div class="input-group">
							<div class="input-field">
								<input type="text" placeholder="Name" name="username">

							</div>
							<div class="input-field">
								<input type="email" placeholder="Email" name="email">

							</div>
							<div class="input-field">
								<input type="tel" placeholder="Phone Number" name="tel">

							</div>
							<div class="input-field">
								<input type="password" placeholder="Password" name="password">

							</div>
							<div class="btn">
								<input type="submit" class="submit" value="SIGN UP" name="">

							</div>
						</div>

						

					</form>
		</div>
	</div>
</body>

</html>
```




 ## Create an external css file (named style.css)
 ``` 
 *{
    margin :0;
    padding: 0;
    font-family: 'poppins', sans-serif;
    box-sizing: border-box;
}

.container{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,50,0.8),rgba(0,0,50,0.8) );
}
.form-box{
    width: 90%;
    max-width: 450px;
    position: absolute;
    top: 50%;
    left:50%;
    transform: translate(-50%, -50%);
    background: #fff;
    padding:50px 60px 70px;
    text-align: center;
}

.form-box h1{
    font-size: 30px ;
    margin-bottom: 60px;
    color:#3c00a0;
    position:relative;

}
.form-box h1::after{
    content: '';
    width:30px;
    height: 4px;
    border-radius: 3px;
    background:#3c00a0;
    position: absolute;
    bottom: -12px;
    left:50%;
    transform:translateX(-50%);
}


.input-field{
    background: #eaeaea;
    margin: 15px 0;
    border-radius: 3px;
    display:flex;
    align-items: center;

}

input{
    width: 100%;
    background: transparent;
    border: 0;
    outline: 0;
    padding:18px 15px;

}

.input-field i{
    margin-left: 15px;
    color: #999;
}
.btn{
    width:100%;
    display:flex;
    justify-content: space-between;
    flex-basis: 48%;
    background: #3c00a0;
    height: 40px;
    border-radius:20px;
    border:0;
    outline: 0;
    transition: .4s;
    
}
.submit{
    color: #fff;
    font-size: 20px;
    padding-top: 10px;

}
.btn:hover{
background-color: #999;
border:#3c00a0;
cursor: pointer;
}
.input-group{
    height: 280px;
}


```

##  Create a  simple  php file 
```
<?php

// Hardcoded username and password
$username = "anyone";
$password = "password123";
$email = "anyone@mail.com";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get the submitted username and password
  $submittedUsername = $_POST['username'];
  $submittedPassword = $_POST['password'];
  $submittedmail = $_POST['email'];

  // Verify the username and password
  if ($submittedUsername == $username && $submittedPassword == $password && $submittedmail== $email) {
    // Successful login
    echo "Welcome, " . $username . "!";
  } else {
    // Invalid login
    echo "Invalid username or password.";
  }
}

?>

```

## To containerize our application ,create a dockerfile

Name file *Dockerfile* --skip if named file earlier
Copy contents below to your dockerfile

```
FROM php:7.2-apache
COPY . /var/www/html/
```
##  Build image
 1.Open a terminal on your VS  code IDE and navigate to the folder of your surce code 
 2.Run  the docker comand as shown below:
 ![docker build success (2)](https://user-images.githubusercontent.com/30151289/228807174-96db6247-5180-4a98-b4a8-326d8694b185.jpg)
 
 ```
 docker build -t  your_image_name .
 ```
 
 The -t :refers to  tag \
 dot (.) - : signals that the build context for docker build is the current working directory \
 3. A successful built image 

![build complete (3)](https://user-images.githubusercontent.com/30151289/228814037-c40716de-5170-4ee0-a0b3-01a2dd414ff3.jpg)

## Run image and create container 
1. Run command `docker run -dit --name yourcontainername -p(preferred port number):80  your_image_name`
![build complete (3)](https://user-images.githubusercontent.com/30151289/228814037-c40716de-5170-4ee0-a0b3-01a2dd414ff3.jpg)

2. Check for images by running 
 `docker images`
 ![check image  (2)](https://user-images.githubusercontent.com/30151289/228814991-90d0bdfa-cf84-4563-a0e1-bd92bf66fab8.jpg)

 ## confirmation on Docker Desktop
  ![docker desktop container](https://user-images.githubusercontent.com/30151289/228841112-573eb077-26fb-40fb-9a81-a403162a658c.jpg)
  
  
**Congratulations on first step completion **

## Step 2: Pushing our image to  AWS ECR

### Pre-requisites 
1. Install AWS CLI \
[AWS installation](https://docs.aws.amazon.com/cli/latest/userguide/getting-started-install.html)

2.Create  IAM user in your AWS account  and  generate Access  Key ID and secret key

3.Configure your  AWS CLI account \
[credentials set up in AWS cli](https://docs.aws.amazon.com/cli/latest/userguide/cli-configure-quickstart.html) 

4 Install  AWS toolkit in your VS code IDE  and log in 
(https://docs.aws.amazon.com/toolkit-for-vscode/latest/userguide/connect.html)

5. Log into your  AWS console  and select AWS ECS 
 
6. Create an ECS cluster
![ecs cluster](https://user-images.githubusercontent.com/30151289/228849604-ff52fef7-2e6d-4d79-9a4d-dab81b040406.jpg) 
![AWS ECS cluster](https://user-images.githubusercontent.com/30151289/228849676-d59c894e-65ee-40b0-b301-a2d29810274b.jpg) 
7. Click on AWS ECR to create your public repository
 ![public repo aws](https://user-images.githubusercontent.com/30151289/228853317-3f9e49e2-faa1-4450-8abc-0f75373fa973.jpg)
8. After successful repo creation click on *push command* as shown  below
 ![successful push](https://user-images.githubusercontent.com/30151289/228853296-1fcab76f-ff3f-49eb-a555-cf741fed68d1.jpg)
 
9. On your AWS CLI,if you have already create an image on  your docker desktop   **follow only steps3 and 4 from above**

10. Create a task definition  from from ECS cluster
 (https://docs.aws.amazon.com/AmazonECS/latest/developerguide/create-task-definition.html)
 
11.Click on task definiton created to obtain public IP(highlighted in red),  click  on *ENI* (in   purple) to edit security group
  ![public ip](https://user-images.githubusercontent.com/30151289/228863739-95f2d42a-b868-47f7-8910-58cdfdf834cf.jpg)
 
12. Click on secuirty group as shown from the Elastic Network Interface
   ![select sg](https://user-images.githubusercontent.com/30151289/228863896-3b3017b6-667d-4482-805a-4c2ef2399d9f.jpg) 
   
 13. Edit security as shown:
   ![edit security](https://user-images.githubusercontent.com/30151289/228863924-f33c9f5a-9e7d-47b8-9166-7d67f403f791.jpg)
   
  14.Launch your Public IP  and Voila:
   
 ![web success](https://user-images.githubusercontent.com/30151289/228865179-9f6ad945-671d-4208-9537-9ff994667fbe.jpg)
 
 ***Congratulations on launching your web app* **





  
  

 





 
