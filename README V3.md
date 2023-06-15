<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>



<!-- ABOUT THE PROJECT -->
## About The Project

This project is a page that displays data from a DynamoDB table
* Phase 1 - Manual Dynamo Table
* Phase 2 - Linkage of Dynamo to Webpage 
* Phase 3 - Using terraform for DynamoDB creation
* Phase 4 - Deployment of project on dockerhub

* This project forms part of a requirement for the completion of a 6 month cloud professional program with Azubi Africa
* With the help of the world wide webs rich resources, me and my team were able to research enough on most technologies using documentations and AI assistances like chatGPT to tackle chanllenges 
* Few challenges:
1 Linkage of DynamoDB to webpage
2 Setup of composer and php sdk
3 Using terraform to upload sample items in database table

### Collaborations
Team members
I was able to work with:
1. Paul Timothy Wekesa Wafula [paul.timothy@azubiafrica.org]
2. Aaron Odeny [aaron.odeny@azubiafrica.org]
3. Ogunleye Emmanuel [ogunleye.emmanuel@azubiafrica.org]
7. Kelvin Michuki Mwangi [kelvin.michuki@azubiafrica.org]
##
### Project Overview
```sh
   Todo and resources
1. Phase 1 - Dynamo Db: A fully managed NoSQL database service that supports ke-value and document data structures
2. Phase 2 - AWS SDKs + PhP: Sofware development kits that provide libraries tools for various tools for programming access to AWS servies. We used SDK for php to link our website to dynamo
3. Phase 3 - Using terraform as a code tool to build dynamoDb platform with initial data
4. Dockerize application and push to dockerHub
```

## 
```sh
   Task 1: Manual Dynamo Table
```
You need to have a an AWS account, you can get a freetire account which basically means you get a free 1 year to use some AWS resources. In our case, we have that setup and we will be using the dynamoDB service

* Go to your AWS Console and navigate to the DynamoDB service. 
* Click on the "Create table" button. 
* Enter "GuestBook" as the table name. 
* Enter "Email" as the primary key and make sure to select "String" as the data type. 
* Create a Country and Name Fields. You may need to research on (global and local indexes)
* Click on the "Create" button to create the table. 
* Once the table is created, click on the "Items" tab to add some sample data to the table.  
* Click on the "Create item" button and enter the sample data for the "Name", "Email", and "Country" fields. 
* Populate this with your team members info.


##
```sh
   Task 2: Link Dynamo to webpage
```
We will be working with  a new page Guestlist.php we will use php as it can process the requests in the background. Pick the template for this new file:
[https://github.com/lawrencemuema/Cloud_project02]

**There are some packages needed for us to run the connection to dynamo***
# Working with AWS SDK for php

1. Install Composer (https://getcomposer.org/), a package manager for PHP.  
2. In your project directory, run the “composer require aws/aws-sdk-php". This will install the needed packages. 
  Git error: Install git from here, https://git-scm.com/download 
3. Once the AWS SDK for PHP is installed, you can use it in your PHP code by including the Composer-generated autoloader: 
require 'vendor/autoload.php'; 
4. You are now able to call on dynamo and perform the desired functions. 

```sh
   Task 3: Using Terraform
```
To reduce redundancy and complexities we will use terraform to create our dynamo dB table.
Read: 
** A terraform file is a configuration file that defines the infrastructure and resources to be created by Terraform.**

#Using Terraform to create dynamo dB
1. Install Terraform on your local machine following the installation guide for your operating system: 
Install terraform
<!-- https://developer.hashicorp.com/terraform/downloads -->
2. Set up your AWS credentials on your local machine. You can do this by configuring the AWS Command Line Interface (CLI) using the aws configure command. 
3. Create a new directory/folder on your local machine where you will store your Terraform configuration files.  
4. Create a new file in your Terraform directory called anything.tf. or any name of your choice
5. Create a new file in your Terraform directory called anything.tf. 
6. To create a dynamo dB using a terraform file, you need to: 
 * Define the attributes and settings of the dynamo dB table, such as name, hash key, range key, read capacity, write capacity, etc. 
 * Dummy Data can be added in the same file, different file. But make sure you add the data using terraform.
7. Dummy Data can be added in the same file, different file. But make sure you add the data using terraform.
8. Run terraform plan to preview the changes that will be made
9. Run terraform apply to create the dynamo dB table 

```sh
   Task 4: Deployment
```
We will work on packaging our application
#Docker Hub Deployment

1. Create a Dockerfile in the "version3" folder with the following contents: Dockerfiles are what tell docker how it should build your image (environments)  
2. Build the Docker image using the following command:  
 ** docker build -t your-dockerhub-username/docker-web-app:3.0**
 ** This will build a Docker image with the name "your-dockerhub-username/docker-web-app" and the tag "3.0". **
3. Push the Docker image to DockerHub using the following command:  
 ** docker push your-dockerhub-username/docker-web-app:3**
 
<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.


### Installation

_Below is an example of how you can instruct your audience on installing and setting up your app. This template doesn't rely on any external dependencies or services._

1. Clone the repo
   ```sh
   git clone https://github.com/Amigo51/docker-web-app.git
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Seth Ofori-Amanfo - [@my_twitter](https://twitter.com/@20pesewes) - seth.ofori-amanfo@azubiafrica.org

Project Link: https://github.com/Amigo51/docker-web-app.git]https://github.com/Amigo51/docker-web-app.git)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- References -->
## References

Helpful resources that might help

* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Malven's Flexbox Cheatsheet](https://flexbox.malven.co/)
* [Malven's Grid Cheatsheet](https://grid.malven.co/)
* [Img Shields](https://shields.io)
* [GitHub Pages](https://github.com/lawrencemuema/Cloud_project02)
* [Terraform Helpful links](https://registry.terraform.io/providers/hashicorp/aws/latest/docs/resources/dynamodb_table)
* [Terraform Helpful links](https://cloudkatha.com/how-to-create-dynamodb-table-using-terraform/)

<p align="right">(<a href="#readme-top">back to top</a>)</p>
