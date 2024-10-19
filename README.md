# Registration Form Project

This project is a simple **PHP Registration Form** that collects user information like first name, last name, gender, email, password, and phone number. The submitted data is stored in a MySQL database.

## Features

- HTML form for user registration
- Data validation with PHP
- Stores user information in a MySQL database
- Simple CSS for form styling

## Technologies Used

- **HTML5**: For building the structure of the registration form.
- **CSS3**: For styling the form.
- **PHP**: For handling the form submission and connecting to the MySQL database.
- **MySQL**: As the database to store the registered user information.
- **XAMPP**: Local development server for running the PHP and MySQL environment.

## How to Run the Project

### Prerequisites

- A local development environment like [XAMPP](https://www.apachefriends.org/index.html), [WAMP](http://www.wampserver.com/en/), or [MAMP](https://www.mamp.info/en/).
- MySQL should be installed and running.

### Steps to Run the Project Locally

1. **Download or Clone the Repository**

   - Clone the repository using Git:
     ```bash
     git clone https://github.com/your-username/registration-form.git
     ```

2. **Move the Project to the Server Directory**

   - Move the cloned project to your server's `htdocs` directory (for XAMPP) or `www` directory (for WAMP).
     - Example path for XAMPP: `C:\xampp\htdocs\Register-form-with-php`

3. **Set Up the MySQL Database**

   - Open [phpMyAdmin](http://localhost/phpmyadmin) in your browser.
   - Create a new database called `test` (or any name you prefer).
   - Create a table `registration` using the following SQL query:
     ```sql
     CREATE TABLE registration (
       id INT AUTO_INCREMENT PRIMARY KEY,
       Firstname VARCHAR(50),
       Lastname VARCHAR(50),
       Gender CHAR(1),
       Email VARCHAR(100),
       Password VARCHAR(255),
       Phone VARCHAR(20)
     );
     ```

4. **Configure Database Connection**

   - In the `connect.php` file, ensure the database connection parameters match your local MySQL setup:
     ```php
     $conn = new mysqli('localhost', 'root', '', 'test');
     ```

5. **Start the Local Server**

   - Start Apache and MySQL from your XAMPP/WAMP control panel.

6. **Access the Registration Form**
   - Open your browser and go to:
     ```bash
     http://localhost/Register-form-with-php/index.html
     ```
   - Fill in the form and submit it. The data will be stored in your MySQL database.

## Notes

- Make sure your PHP and MySQL services are running before trying to access the form.
- Passwords are stored in plain text in this version. For security, you should implement password hashing (e.g., using `password_hash()` in PHP).

## Future Enhancements

- Implement password hashing for security.
- Add client-side form validation using JavaScript.
- Add success/error message handling after form submission.

## License

This project is open-source and available under the [MIT License](LICENSE).
