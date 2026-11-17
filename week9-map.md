# Week 9 – Project Map and Analysis

## 1. Project Overview

**Project Name:** Inventory Management System

**Framework:** Laravel 12

**Programming Language:** PHP

**Database:** MySQL

The Inventory Management System is a web-based application developed using Laravel. It manages products, categories, suppliers, stock levels, users, and inventory reports.

## 2. Folder Map

### Main Project Structure

```text
inventory-system/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   │
│   ├── Models/
│   └── Providers/
│
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
│
├── public/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── auth/
│       ├── categories/
│       ├── layout/
│       ├── layouts/
│       ├── products/
│       ├── reports/
│       ├── suppliers/
│       └── users/
│
├── routes/
│   ├── web.php
│   └── console.php
│
├── storage/
│
└── tests/
```

### Important Folder Functions

- Controllers: Handle application requests and business logic.
- Models: Communicate with the database.
- Middleware: Control user access and permissions.
- Requests: Handle form validation.
- Views: Display application pages.
- Routes: Define application URLs.
- Migrations: Manage database table structures.

## 3. Three Route Traces

### Route 1: Products List

**URL:** `/products`

**Method:** GET

**Controller:** ProductController

**Method:** index()

**Flow:**

Browser → routes/web.php → Authentication Middleware → ProductController → Product Model → MySQL Database → Products View → Browser

**Purpose:**

Displays the available products from the database.

### Route 2: Create Product

**URL:** `/products/create`

**Method:** GET

**Controller:** ProductController

**Method:** create()

**Middleware:**
- Authentication
- Admin Authorization

**Flow:**

Browser → routes/web.php → Authentication Middleware → Admin Authorization → ProductController → Category and Supplier Models → Create Product View → Browser

**Purpose:**

Displays the product creation form for authorized administrators.

### Route 3: Store Product

**URL:** `/products`

**Method:** POST

**Controller:** ProductController

**Method:** store()

**Middleware:**
- Authentication
- Admin Authorization

**Flow:**

Browser → POST Route → Authentication Middleware → Admin Authorization → StoreProductRequest → ProductController → Product Model → MySQL Database → Redirect to Products List

**Purpose:**

Validates and saves the submitted product information in the database.

## 4. Project Counts

Counts based on the inspected project folders:

| Component | Count |
|---|---:|
| Main Controllers (including base Controller) | 10 |
| Auth Controllers | 1 |
| Total Controllers | 11 |
| Models | 6 |
| Middleware | 1 |
| Form Requests | 2 |
| Service Providers | 1 |
| Route Files | 2 |
| Blade View Files | 23 |
| CSS Files | 1 |
| JavaScript Files | 2 |
| Other Resources Files | 2 |

**Total files inside resources:** 28

**Registered Routes:** 37

**Application Routes:** 34

**Framework Routes:** 3

Note: Counts are based on the inspected folder listings and supplied web.php code.

## 5. Comparison of Three Routes

| Feature | Products List | Create Product | Store Product |
|---|---|---|---|
| URL | /products | /products/create | /products |
| HTTP Method | GET | GET | POST |
| Controller | ProductController | ProductController | ProductController |
| Controller Method | index() | create() | store() |
| Authentication | Required | Required | Required |
| Admin Permission | Not required | Required | Required |
| Main Purpose | Display products | Display form | Save product |
| Database Operation | Read | Read | Insert |
| Validation | No form validation | No form validation | Yes |

## 6. Important Differences

### GET Request

GET requests are used to retrieve information and display pages.

### POST Request

POST requests are used to submit form data to the server.

### Middleware

Middleware checks whether a user is authenticated and authorized to access a route.

### Form Request

Form Requests validate the submitted data before it is processed by the controller.

## 7. Conclusion

The Laravel project structure was inspected and documented. Three important product routes were traced from the browser to the controller and database. Project components were counted, and the GET and POST routes were compared to understand their different responsibilities.