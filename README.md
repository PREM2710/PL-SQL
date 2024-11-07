Customer Relationship Management (CRM)
Project Overview
This project is a basic Customer Relationship Management (CRM) system that allows you to manage customer information such as name, email, phone, and address. It supports Create, Read, Update, and Delete (CRUD) operations on customer data. The CRM is built using PHP for the backend, MySQL for the database, and HTML/CSS for the frontend.

Features
Add New Customers: Users can add new customer details (name, email, phone, address).
View Customer List: Displays a list of all customers stored in the database.
Edit Customer Information: Update existing customer details.
Delete Customers: Delete customer records from the database.
Technologies Used
Frontend: HTML, CSS
Backend: PHP
Database: MySQL
Prerequisites
To run this project, you need:

XAMPP/WAMP/LAMP (or any other local server that supports PHP and MySQL)
phpMyAdmin for managing MySQL databases
Installation Guide
Step 1: Download/Clone the Repository
You can either download the project as a zip file or clone the repository using Git.

bash
Copy code
git clone https://github.com/your-repository/mini-crm.git
Step 2: Set Up the Database
Open phpMyAdmin (usually accessible via http://localhost/phpmyadmin).
Create a new database named crm_db.
Run the following SQL command to create the customers table:
sql
Copy code
CREATE TABLE `customers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(15) NOT NULL,
  `address` TEXT NOT NULL
);
Step 3: Set Up the Project Files
Place the project folder (mini_crm) inside the htdocs directory if you are using XAMPP, or the corresponding directory for your web server.
Open the config.php file and ensure that the following database connection parameters are correct:
php
Copy code
$servername = "localhost";
$username = "root";  // Default MySQL username
$password = "";      // Default MySQL password (empty by default)
$dbname = "crm_db";  // The database name you created
Step 4: Start Your Server
Start your local server (e.g., XAMPP, WAMP, or LAMP). Ensure that both the Apache and MySQL services are running.

Usage
Open your web browser and go to http://localhost/mini_crm/.
You will be presented with the main CRM page (index.php).
From here, you can:
Add new customer: Fill out the form and click "Add Customer."
View the list of customers: The customer list is shown in a table format.
Edit customer: Click "Edit" next to a customer's entry to update their details.
Delete customer: Click "Delete" to remove a customer.
Code Explanation
1. Database Connection (config.php)
This file contains the PHP code to connect to the MySQL database. If the connection fails, an error message is displayed.

2. Main Page (index.php)
The index.php page displays all customer records from the database. It also contains a form to add new customers.

3. Add Customer (add_customer.php)
This file processes the form submission from index.php, inserts the customer data into the database, and redirects the user back to the main page.

4. Edit Customer (edit_customer.php)
The edit_customer.php file fetches the customer's data based on their ID and allows editing their details. After updating, the changes are saved back to the database.

5. Delete Customer (delete_customer.php)
This file deletes a customer record from the database when the delete link is clicked.

6. Styles (style.css)
The style.css file contains simple CSS rules to make the CRM interface user-friendly and visually appealing.

Learning Outcomes
By working on this project, you will learn:

Database Design and Management: Understanding how to design relational databases, use primary keys, and handle basic SQL operations.
SQL Query Skills: Writing SQL queries for CRUD operations (Create, Read, Update, Delete).
PHP and MySQL Integration: How to connect PHP to MySQL to manage customer data.
Frontend Development: Basic HTML for form creation and table layout, and CSS for styling.
Web Application Development: Building a simple but fully functional web application using PHP, MySQL, and HTML.
Future Enhancements
Some potential future improvements for this CRM project could include:

User Authentication: Add login functionality to restrict access to authorized users only.
Search Functionality: Implement a search bar to filter customers based on their name, email, or phone.
Validation: Add better form validation and error handling to improve data integrity and user experience.
Responsive Design: Make the application fully responsive for better usability on mobile devices.
Contributors
Prem (Your name)
