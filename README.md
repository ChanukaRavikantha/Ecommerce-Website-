# Ecommerce-Website   (SUJITH FURNITURE)
 

## Introduction
SUJITH FURNITURE is a furniture manufacturing company located in Moratuwa, primarily supplying school and office furniture for tenders. Due to economic conditions, the company is now looking to expand its direct sales by accepting orders without the tender procedure. 

This project aims to create an e-commerce website that allows customers to browse, purchase, and track furniture orders online, improving the sales process and customer experience.

## Features

### User Features
- **User Registration & Login**: New users can register and log in to the system.
- **Profile Management**: Users can update and manage their profile details.
- **Product Listing**: Customers can browse and view available furniture with prices, measurements, wood type, and stock details.
- **Search Functionality**: Users can search for specific furniture based on categories.
- **Add to Cart & View Cart**: Customers can add furniture to their cart and review selected items before purchasing.
- **Checkout & Online Payment**: Secure payment gateway for completing purchases.
- **Order Tracking**: Users can track the status of their orders.
- **Contact SUJITH FURNITURE**: Customers can contact the company directly through the website.

### Admin Features
- **Dashboard**: Manage all functions of the website including product listings, customer orders, and stock updates.
- **Order Management**: View and process customer orders.
- **User Management**: Manage registered users and their details.
- **Payment Handling**: Process online payments and generate invoices.

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL (Managed using phpMyAdmin)
- **Server**: WAMP Server (Localhost for development)
- **Version Control**: Git & GitHub

## Installation & Setup
### Prerequisites
- Install [WAMP Server](https://www.wampserver.com/en/) or [XAMPP](https://www.apachefriends.org/index.html)
- Install a web browser (Chrome, Firefox, etc.)
- Install Git for version control

### Steps to Setup the Project
1. Clone the repository:
   ```sh
   git clone https://github.com/your-github-username/sujith-furniture.git
   ```
2. Move the project folder to the `www` directory of WAMP or `htdocs` directory of XAMPP.
3. Start the WAMP/XAMPP server.
4. Open phpMyAdmin and create a database named `sujith_furniture`.
5. Import the provided SQL file (`database.sql`) into the database.
6. Configure database settings in `config.php`:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "sujith_furniture";
   ```
7. Open a web browser and visit:
   ```
   http://localhost/sujith-furniture/
   ```

## Future Enhancements
- Implementing a customer review and rating system
- Integrating third-party payment gateways such as PayPal or Stripe
- Enhancing UI/UX with responsive design improvements

## Contributing
Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit (`git commit -m "Add new feature"`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## License
This project is open-source and available under the [MIT License](LICENSE).
