# Inventory Management System

## Project Overview

The Inventory Management System is a web-based application developed using Laravel. It is designed to manage products, suppliers, categories, stock levels, and inventory reports.

## Technologies Used

- PHP
- Laravel
- MySQL
- HTML
- CSS
- Bootstrap
- JavaScript

## Main Features

### 1. Dashboard
- Displays total products.
- Displays total suppliers.
- Displays total categories.
- Displays low-stock product count.

### 2. Product Management
- Add new products.
- View product details.
- Update product information.
- Upload product images.
- Search products by name or SKU.
- Filter products by category.
- Paginate product lists.

### 3. Category Management
- Manage product categories.
- Organize products by category.

### 4. Supplier Management
- Manage supplier information.
- View supplier details.

### 5. Stock Management
- Record stock-in movements.
- Record stock-out movements.
- View stock movement history.
- Monitor low-stock products.

### 6. Reports
- Stock Value Report.
- Stock Movements Report.
- Category Stock Report.

### 7. Authentication and Authorization
- User login and logout.
- Role-based access control.
- Admin-only operations.

## Installation and Setup

### Requirements

- PHP
- Composer
- MySQL
- XAMPP
- Laravel

### Steps

1. Clone the repository:

```bash
git clone https://github.com/nawshafarvin/inventory-system.git
```

2. Open the project folder:

```bash
cd inventory-system
```

3. Install dependencies:

```bash
composer install
```

4. Create the environment file:

```bash
copy .env.example .env
```

5. Generate the application key:

```bash
php artisan key:generate
```

6. Create a MySQL database named:

```text
inventory_system
```

7. Configure the database settings in the `.env` file.

8. Run migrations:

```bash
php artisan migrate
```

9. Create the storage link:

```bash
php artisan storage:link
```

10. Start the Laravel development server:

```bash
php artisan serve
```

Open the application at:

http://127.0.0.1:8000

## Testing

Run the Laravel tests using:

```bash
php artisan test
```

The Unit Test and Feature Test were executed successfully.

## Repository

GitHub:
https://github.com/nawshafarvin/inventory-system

## Developer

Developed as part of IT Industrial Training.