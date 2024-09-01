# User Registration System

This project is a user registration system developed using PHP OOP and the Smarty template engine. It allows users to input their information, validates the data on the server-side, and displays a confirmation message upon successful registration.

## Features

- **User Registration:** A simple form where users can register by providing a username, email, and password.
- **Server-Side Validation:** Validation is done using PHP OOP principles to ensure the username, email, and password meet the required criteria.
- **Templating with Smarty:** The project uses the Smarty template engine to separate the presentation layer from the business logic, providing a clean and modular code structure.
- **Bootstrap Styling:** The registration form and confirmation page are styled using Bootstrap to ensure a responsive and visually appealing design.

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/yourusername/user-registration.git
    ```
2. **Navigate to the project directory:**
    ```bash
    cd user-registration
    ```
3. **Install dependencies:**
    - Run `composer install` to install the Smarty template engine and other dependencies.
    
4. **Set up directories:**
    - Ensure the `templates/` and `templates_c/` directories are writable by the web server.

5. **Run the project:**
    - You can run this project on a local server like XAMPP, WAMP, or through PHP's built-in server:
    ```bash
    php -S localhost:8000
    ```

6. **Access the registration form:**
    - Open your browser and navigate to `http://localhost:8000/index.php`.

## Usage

- **Register a User:** Fill in the registration form and submit. The system will validate the input data and either show validation errors or a confirmation message with the entered details.

## Why No Database?

The project does not include database functionality because the instruction did not specify the need for it. The primary focus is on demonstrating PHP OOP, server-side validation, and the integration of Smarty for templating. However, this system could easily be extended to include database interaction for storing and managing user information if needed.

## File Structure

- **bootstrap.php:** Centralized initialization file for loading dependencies and setting up the Smarty template engine.
- **index.php:** Displays the user registration form.
- **process_registration.php:** Handles form submission, validation, and displays the confirmation page.
- **classes/User.php:** Contains the User class, which includes properties and methods for validation.
- **templates/register.tpl:** Smarty template for the registration form.
- **templates/confirmation.tpl:** Smarty template for the confirmation page.
- **templates_c/**: Compiled templates directory for Smarty.

## License

This project is open-source and available under the [MIT License](LICENSE).

