<!DOCTYPE html> 

<html> 
<head>
  <meta charset="utf-8">
  <title>Azubi Africa: List</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="width:100%;overflow:hidden"> 


<div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
<h1><a href="#" rel="dofollow">Guest List</a></h1>
<button style="position:absolute;right:3rem;padding:.3rem"><a href="index.php" rel="dofollow" style="color:red">Log out</a></button>
</div>
<!-- start here -->
	
<!-- php sdk connection to dynamoDB -->
<!-- tr stands for table row, and td for description..... this will need to be dynamic -->
<?php
require 'vendor/autoload.php';
// Set up AWS SDK for PHP
use Aws\DynamoDb\DynamoDbClient;
use Aws\Credentials\Credentials;

// Sample credentials
$accessKeyId = 'access key here';
$secretAccessKey = 'secret access key here';
$region = 'us-east-1'; // Replace with the appropriate AWS region

// Create a new DynamoDB client
$credentials = new Credentials($accessKeyId, $secretAccessKey);
$dynamodb = new DynamoDbClient(['version' => 'latest','region' => $region,'credentials' => $credentials]);

// Example operation: List all tables in DynamoDB
$result = $dynamodb->listTables();

// Print out the table names
//foreach ($result['TableNames'] as $tableName) {
//echo $tableName . PHP_EOL;}
                   

                

 //Fetch data from table using scan metjod
 $tableName = 'GuestBook'; // Replace with your actual table name
 $params = ['TableName' => $tableName];
 $result = $dynamodb->scan($params);
 ?>

<!-- the end of your dynamo pickups -->

<!-- styles for our table .... dont tamper -->
<!-- Display the guests in a table with CSS styles -->
<div class="table-name"><?php echo $tableName; ?></div>
  <table class="styled-table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Country</th>
      </tr>   
    </thead>
    <tbody>
      <?php foreach ($result['Items'] as $item) { ?>
        <tr>
          <td><?php echo $item['Name']['S']; ?></td>
          <td><?php echo $item['Email']['S']; ?></td>
          <td><?php echo $item['Country']['S']; ?></td> <!-- Assuming 'Country' is of type String -->
        </tr>
      <?php } ?>
    </tbody>
  </table>

  <style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 20%;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
</style>


<div class="padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" >
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>

</body>
</html>
