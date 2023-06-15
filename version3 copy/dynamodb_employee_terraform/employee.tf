terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 3.27"
    }
  }

  required_version = ">= 0.14.9"
}

#Provider profile and region in which all the resources will create
provider "aws" {
  profile = "default"
  region  = "us-east-1"
}

#Resource to create dynamodb table 
resource "aws_dynamodb_table" "basic-dynamodb-table" {
  name           = "Employee"
  billing_mode   = "PROVISIONED"
  read_capacity  = 5
  write_capacity = 5
  hash_key       = "EmployeeId"

  attribute {
    name = "EmployeeId"
    type = "S"
  }

  

  tags = {
    Name        = "Dynamo-DB-Table"
    Environment = "Dev"
  }
}