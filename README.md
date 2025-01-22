# Basic Banking System

The Basic Banking System is a web application built using HTML, CSS, JavaScript, PHP, and MySQL. It allows users to view customer details, transfer money between customers, and display transaction success or failure based on available balances.

## Features

- Customer List: View a list of all customers with their name, email, and current balance.
- Transfer Money: Transfer money between customers if the sender has sufficient balance.
- Transaction Success/Failure: Displays transaction success or failure messages based on account balance.
- Simple User Interface: Built using HTML and CSS for a clean and straightforward user experience.
Screenshots

## Installation

Follow the steps below to run the Basic Banking System on your local machine.

### Prerequisites
1. XAMPP/WAMP or any PHP server setup (to run PHP and MySQL).
2. MySQL database server (or use the built-in MySQL server from XAMPP/WAMP).
3. A text editor like VS Code or Sublime Text to edit the code.
   
### Setup Instructions
1. Clone the Repository
   Clone the repository to your local machine:
   `git clone https://github.com/your-username/basic-banking-system.git`

2. Import the Database
   - Create a new MySQL database (e.g., customer).
   - Import the provided customer_table.sql file to create the necessary tables.
     You can use phpMyAdmin or MySQL Workbench to import the SQL file. The SQL file contains a customer table with customer details such as name, email, and balance.

3. Configure Database Connection
The `home.php`, `transfer.php`, and other PHP files use the following database connection configuration:
```php
$servername="localhost";
$username="root";
$password="";
$dbname="customer"; // Database name
```

Ensure that the MySQL server is running and the database connection credentials match your local environment.

4. Run the Application
   - Place the project folder in the htdocs directory (if using XAMPP).
   - Start your Apache and MySQL services through XAMPP/WAMP.
   - Open your web browser and visit:
     `http://localhost/basic-banking-system/home.php`

## Usage

Once the application is set up, you can use it as follows:

1. View Customers:
   On the homepage, click on "View all customers" to see a list of all customers in the system.
2. View Customer's Account:
   Enter the name of a customer to view their account details, including current balance.
3. Transfer Money:
   - After viewing an account, you can transfer money to another customer.
   - Enter the recipient's name and the amount to transfer.
   - If the sender has sufficient funds, the transaction will be processed, and the balance will be updated.
4. Transaction Status:
   - After each transaction, you'll receive a confirmation message showing whether the transaction was successful or if there was an issue (e.g., insufficient balance).

## Repo Structure

Here's the breakdown of the project files:
```bash
/basic-banking-system
    ├── home.php            # Homepage and view all customers functionality
    ├── transfer.php        # Logic for transferring money between customers
    ├── view-one-cust.php   # View individual customer's account details
    ├── customer_table.sql  # SQL file to create and populate the customer table
    ├── home.css            # Custom styles for the web pages
```

## Technologies Used

- HTML: Structure of the website
- CSS: Styling and design
- JavaScript: Interactivity (like form handling)
- PHP: Backend for database interactions
- MySQL: Database to store customer details and balances

## Contributing

If you'd like to contribute to this project, feel free to fork the repository, make changes, and submit a pull request.
