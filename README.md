# 🛒 Grocery Shop Web Application

A simple and interactive grocery shopping web application built with PHP, MySQL, HTML, CSS, and JavaScript. This application allows users to browse products, add them to cart, and place orders.

## 🚀 Features

- **User Authentication**: Simple login system that saves usernames to the database
- **Product Catalog**: Displays available grocery items with images and prices
- **Shopping Cart**: Add/remove items and view cart total
- **Responsive Design**: Works on both desktop and mobile devices
- **Modern UI**: Clean and intuitive user interface with smooth animations

## 🛠️ Prerequisites

- PHP 7.0 or higher
- MySQL 5.7 or higher
- XAMPP/WAMP/MAMP (for local development)
- Web browser with JavaScript enabled

## 🚦 Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/grocery-shop.git
   cd grocery-shop
   ```

2. **Database Setup**
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `grocery_shop`
   - Import the SQL file (if available) or create a `logins` table with the following structure:
     ```sql
     CREATE TABLE `logins` (
       `id` int(11) NOT NULL AUTO_INCREMENT,
       `username` varchar(255) NOT NULL,
       `login_time` timestamp NOT NULL DEFAULT current_timestamp(),
       PRIMARY KEY (`id`)
     ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
     ```

3. **Configuration**
   - Update database credentials in `save_login.php` if different from defaults:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "grocery_shop";
     ```

4. **Run the Application**
   - Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP)
   - Start your local server (Apache and MySQL)
   - Open `http://localhost/grocery-shop` in your browser

## 🖼️ Screenshots

![Login Page](screenshots/login.png)
*Login Page*

![Shop Page](screenshots/shop.png)
*Product Catalog*

## 📝 Usage

1. Enter your name on the login page
2. Browse available grocery items
3. Click "Add to Cart" to add items to your cart
4. View and manage your cart
5. Click "Place Order" to complete your purchase

## 📂 Project Structure

```
grocery-shop/
├── index.html          # Main application interface
├── save_login.php      # Backend API for saving logins
├── README.md           # This file
└── assets/            # (Optional) Directory for images, CSS, JS
    ├── css/
    ├── js/
    └── images/
```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- Font Awesome for icons
- Unsplash for sample product images
- All contributors who helped improve this project

---

<div align="center">
  Made with ❤️ by [Your Name]
</div>
