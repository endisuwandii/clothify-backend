# 🛍️ Clothify API Engine

A high-performance, strictly REST API-only backend dedicated to powering the **Clothify Fashion E-commerce Platform**. Built with Laravel 11, this engine is designed to be lightweight, scalable, and fully separated from the frontend presentation layer.

---

## 🚀 Tech Stack

- **Framework:** Laravel 11
- **Language:** PHP 8.5
- **Database:** PostgreSQL / MySQL
- **API Documentation:** OpenAPI (Generated via [Scramble](https://scramble.dedoc.co/) & Rendered with [Scalar](https://scalar.com/))
- **Architecture:** Stateless REST API

## 🎯 Core Features

- **API-Only Architecture:** Stripped of unnecessary frontend scaffolding, focusing 100% on JSON responses.
- **Exclusive Fashion Catalog:** Optimized database schemas tailored specifically for clothing items, sizes, colors, and stock management.
- **Automated Documentation:** Zero-config OpenAPI specification generation that updates automatically as new endpoints are created.

---

## 🛠️ Getting Started

Follow these steps to set up the API engine on your local development environment.

### Prerequisites

- PHP 8.5 or higher
- Composer
- PostgreSQL or MySQL Server

### Installation

1.  **Clone the repository**

````bash
    git clone [https://github.com/yourusername/clothify-backend.git](https://github.com/yourusername/clothify-backend.git)
    cd clothify-backend
    ```

2.  **Install PHP dependencies**
```bash
    composer install
    ```

3.  **Environment Setup**
    Copy the example environment file and configure your local settings:
```bash
    cp .env.example .env
    ```
    *Open `.env` and update your database credentials (e.g., `DB_CONNECTION`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).*

4.  **Generate Application Key**
```bash
    php artisan key:generate
    ```

5.  **Run Database Migrations**
    *Ensure your database is created before running this command.*
```bash
    php artisan migrate
    ```

6.  **Start the Local Server**
```bash
    php artisan serve
    ```

---

## 📚 API Documentation (Scalar)

This project uses Scramble and Scalar to provide interactive, modern API documentation.

Once your local server is running, navigate to the root URL or the docs endpoint to view the API reference:
👉 **[http://127.0.0.1:8000/docs/scalar](http://127.0.0.1:8000/docs/scalar)**

*Note: Documentation generation is strictly enabled in the `local` environment only to protect production endpoints.*

---

## 📂 Project Structure Focus

As an API-centric application, the primary areas of development are located in:
*   `routes/api.php` - All API route declarations.
*   `app/Http/Controllers/` - Business logic and JSON response formatting.
*   `app/Models/` - Database interaction and relationship definitions.
*   `database/migrations/` - Schema definitions for the fashion catalog.

---

## 🤝 Development Team
Developed and maintained for the Clothify Project Ecosystem.
````
