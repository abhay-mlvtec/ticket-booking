# Ticket booking
## Pre-requisites
1. [PHP (7.2)](https://windows.php.net/download/)
2. [Composer](https://getcomposer.org/download/)
## Installation
To run the setup locally on your system.
1. Clone the remote repo to your local machine.
```bash
$git clone https://github.com/abhay-mlvtec/ticket-booking
```
or download the files and extract setup in your local machine.

2. To install dependencies using composer. Move to the project root directory and use the following command in the command line.
```bash
$composer install
```
## Dependecies
-> [SendGrid](https://sendgrid.com/)

## Setting up dependencies
1. Create a free account on sendgrid and generate an api key.(Used for sending ticket confirmation email.)
2. Setup global environment variable SENDGRID_API_KEY = 'your_api_key_here'

## Setting up project config
### Database config
-> Set the values for username, password, host inside 'validate_API/dbconnect.php' or you can set db connection string in environment variable DATABASE_URL = 'DB_connection_string'
-> Setup db schema from sql dumps inside sql dumps folder
