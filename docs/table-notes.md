# Database Table Notes
## Inventory Management System

### 1. Users Table
Stores user account and login information.

- id – Unique user ID (Primary Key)
- name – User name
- email – User email
- password – Hashed password
- role – User role (admin/user)
- email_verified_at – Email verification time
- remember_token – Remember login token
- created_at – Record creation time
- updated_at – Record update time

### 2. Products Table
Stores product information.

- id – Product ID (Primary Key)
- name – Product name
- description – Product description
- price – Product price
- quantity – Available stock quantity
- category_id – Category reference (Foreign Key)
- supplier_id – Supplier reference (Foreign Key)
- sku – Product SKU
- image – Product image path
- created_at – Record creation time
- updated_at – Record update time

### 3. Categories Table
Stores product category information.

- id – Category ID (Primary Key)
- name – Category name
- description – Category description
- created_at – Record creation time
- updated_at – Record update time

### 4. Suppliers Table
Stores supplier information.

- id – Supplier ID (Primary Key)
- name – Supplier name
- email – Supplier email
- phone – Supplier phone number
- address – Supplier address
- created_at – Record creation time
- updated_at – Record update time

### 5. Tags Table
Stores product tags.

- id – Tag ID (Primary Key)
- name – Tag name
- created_at – Record creation time
- updated_at – Record update time

### 6. Product_Tag Table
Connects products and tags using a many-to-many relationship.

- id – Record ID
- product_id – Product reference
- tag_id – Tag reference
- created_at – Record creation time
- updated_at – Record update time

### 7. Stock_Movements Table
Stores product stock movement information.

- id – Stock movement ID (Primary Key)
- product_id – Product reference
- type – Movement type
- quantity – Movement quantity
- note – Movement description
- created_at – Record creation time
- updated_at – Record update time

### 8. Other Supporting Tables

| Table | Purpose |
|---|---|
| migrations | Stores migration history |
| sessions | Stores session information |
| cache | Stores cached data |
| cache_locks | Stores cache locks |
| jobs | Stores queued jobs |
| job_batches | Stores job batch information |
| failed_jobs | Stores failed job information |
| password_reset_tokens | Stores password reset tokens |

## Conclusion

The Inventory Management System database contains 15 tables. The main tables manage users, products, categories, suppliers, tags and stock movements. Supporting tables handle sessions, caching, migrations and background jobs.