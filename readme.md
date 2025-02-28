# ElectroMart – Online Electronics Store

Welcome to *ElectroMart*, an e-commerce web application designed to provide a seamless shopping experience for electronic products. This README file provides an overview of the project, installation steps, and basic usage instructions.

## Project Overview
ElectroMart is a dynamic, PHP-based web application that allows users to browse, purchase, and manage electronic products online. Administrators have complete control over product listings, orders, and customer management.

## Features
- **User Authentication**: Secure login and registration with password hashing.
- **Product Management**: Add, edit, and delete electronic products.
- **Shopping Cart**: Add items, update quantities, and proceed to checkout.
- **Order Tracking**: Track order status with real-time updates.
- **Responsive Design**: User-friendly interface across devices.

## Technology Stack
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap
- **Backend**: PHP (PDO for database interaction)
- **Database**: MySQL

## Installation Guide
1. **Clone the Repository**:
    ```bash
    git clone https://github.com/devmani46/phpWebAssignment.git
    ```

2. **Configure Database**:
    - Import the provided `eShop.sql` file into MySQL.
    - Update database credentials in `config.php`.

3. **Start Local Server**:
    - Use XAMPP, WAMP, or any PHP server to host the application.
    - Place the project files in the server's root directory (e.g., `htdocs` for XAMPP).

4. **Access the Application**:
    - Open `http://localhost/phpWebAssignment` in a web browser.

## Usage Guide
- **Homepage**: Browse available products.
- **Account Registration/Login**: Create an account or log in for personalized features.
- **Shopping Cart**: Add products to the cart and adjust quantities.
- **Checkout**: Provide shipping information and confirm the purchase.
- **Order Tracking**: Monitor the status of orders from the user dashboard.

## Administrator Instructions
- Log in with admin credentials.
- Access the admin dashboard to manage products, orders, and user accounts.

## Troubleshooting
- **Login Issues**: Ensure credentials are correct; reset if necessary.
- **Database Errors**: Verify database connections in `config.php`.
- **UI Problems**: Clear browser cache or try a different browser.

## File Structure
```
phpWebAssignment/
    ├── about.php
    ├── add_to_cart.php
    ├── admin_contacts.php
    ├── admin_header.php
    ├── admin_orders.php
    ├── admin_page.php
    ├── admin_products.php
    ├── admin_users.php
    ├── cart.php
    ├── checkout.php
    ├── config.php
    ├── contact.php
    ├── eShop.sql
    ├── footer.php
    ├── header.php
    ├── home.php
    ├── login.php
    ├── logout.php
    ├── orders.php
    ├── readme.md
    ├── register.php
    ├── search_page.php
    ├── shop.php
    ├── css/
        ├── admin_style.css
        ├── login.css
        └── style.css
    ├── images/
        └── (all website images)
    ├── js/
        ├── admin_script.js
    │   └── script.js   
    └── uploaded_img/
        └── (all uploaded images)
```

## License
This project is licensed under the Group 19. All Rights Reserved.

Happy Shopping with *ElectroMart*! 🎉

