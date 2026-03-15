# Product Management System 📦

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![PHP](https://img.shields.io/badge/PHP-%23777BB4.svg?style=flat&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-%2300f.svg?style=flat&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-%23E34F26.svg?style=flat&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-%231572B6.svg?style=flat&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-%23323330.svg?style=flat&logo=javascript&logoColor=%23F7DF1E)

A full-stack Product Management System using a PHP/MySQL backend and a dynamic, modern HTML/CSS/JavaScript frontend. This system allows you to manage an inventory of products efficiently using standalone RESTful API endpoints and a beautifully designed user interface.

## ✨ Features

- **Modern Dashboard UI:** A beautiful, responsive, dark-themed User Interface to seamlessly navigate the system.
- **Add Products:** Insert new inventory records (Name, Category, Price, Quantity) smoothly into the database.
- **View Inventory:** Fetch and display all current products in an organized, stylized data table.
- **Manage Products (Update/Delete):** 
  - Edit product details via interactive modal windows.
  - Delete products with real-time feedback.
- **RESTful API:** Independent PHP endpoints (`create.php`, `read.php`, `update.php`, `delete.php`) handling full CRUD operations securely over JSON.
- **CORS Enabled:** API endpoints are fully configured for Cross-Origin Resource Sharing.

## 📁 Project Structure

```
├── backend/                  # PHP API and DB connection
│   ├── create.php            # Accepts POST, inserts a new product
│   ├── read.php              # Accepts GET, returns all products as JSON
│   ├── update.php            # Accepts POST, updates an existing product
│   ├── delete.php            # Accepts POST, deletes a product by ID
│   └── db.php                # MySQL database connection settings
│
├── frontend/                 # Client-side UI
│   ├── index.html            # Main Dashboard and Navigation
│   ├── add.html              # Form UI to add new products
│   ├── view.html             # Table UI to read products
│   ├── manage.html           # UI containing Edit and Delete actions
│   ├── index.css             # Modern Styling and Animations
│   └── config.js             # Centralized API Base URL configuration
│
└── README.md                 # Project Documentation
```

## 🚀 Setup Instructions

This project is built to work **out-of-the-box** when cloned completely into a single directory on a local web server (like **XAMPP**, **MAMP**, or **WAMP**).

### 1. Database Setup

1. Create a MySQL database (e.g. via phpMyAdmin) named `inventory_system`.
2. Execute the following SQL query to create the `products` table:

```sql
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```
3. Update `backend/db.php` with your local database connection credentials if they differ from the defaults (e.g., username `root`, password empty).

### 2. Running The Server

1. **Clone the repository:** 
   Move the entire cloned project folder containing both `frontend` and `backend` directories into your server's public root folder (e.g., `C:\xampp\htdocs\` or `/Applications/MAMP/htdocs/`).
   
2. Ensure your **Apache** and **MySQL** services are running.

### 3. Using the System

Because the `frontend` and `backend` folders are hosted side-by-side, the frontend API paths use **relative URLs** (`../backend/...`) via the `frontend/config.js` file.

This means you don't need to configure any URLs!

Just navigate to the public address of the project in your browser:  
`http://localhost/Product_Management_System/frontend/index.html` *(Change "Product_Management_System" to whatever you renamed the cloned folder to)*

*(Note: If you decide to host the API frontend and backend on completely different domains later, simply update the `API_BASE_URL` in `frontend/config.js` to an absolute URL).*

## 🛠️ Technology Stack
* **Frontend:** Vanilla HTML5, CSS3, JavaScript (Fetch API)
* **Backend:** PHP 8.x
* **Database:** MySQL relational database
