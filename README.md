# Test – Full Stack Developer – Muhammad Lutfi Wahid

## 📌 Overview

This project is a **Mini CRUD Application** built using **Laravel 12** as part of a technical assessment.  
The goal of this project is not complexity, but **code clarity, clean structure, validation, security awareness, and thoughtful UI/UX decisions**.

The application manages a simple **Product** entity with the following fields:

-   Name
-   Amount
-   Quantity (Qty)

---

## 🧱 Tech Stack

-   **Backend**: Laravel 12
-   **Frontend**: Blade Template Engine
-   **Styling**: Tailwind CSS + DaisyUI
-   **Interactivity**: Alpine.js (lightweight UI behavior)
-   **Database**: MySQL
-   **Build Tool**: Vite

---

## 🔄 Application Flow

1. User opens the Product List page.
2. The system displays paginated product data.
3. User can:
    - Create a new product
    - Edit existing product data
    - Delete a product with confirmation
4. Each form submission is validated server-side.
5. UI feedback is provided via alerts and loading indicators.
6. After actions (create/update/delete), the user is redirected back with a success message.

---

## 🧪 CRUD Features

-   ✅ Create Product
-   ✅ Read Product List (Pagination)
-   ✅ Update Product
-   ✅ Delete Product (with confirmation dialog)

All CRUD operations are fully functional.

---

## 🎨 UI / UX Decisions

-   **DaisyUI components** are used for consistent styling and better readability.
-   **Atomic Design principles** are applied to Blade components:
    -   Atoms (buttons, inputs)
    -   Molecules (form groups, table actions)
    -   Organisms (product table, product form)
-   **Loading states** are added to action buttons (Save / Delete) to prevent double submission.
-   **Confirmation dialogs** are used for destructive actions.

The focus is on clarity and comfort, not flashy animations.

---

## 🔐 Validation & Security Measures

### Form Validation (Form Request)

```php
return [
    'name' => 'required|string|min:3|max:255',
    'amount' => 'required|numeric|min:0',
    'qty' => 'required|integer|min:0',
];
```

---

## Why These Validations Matter

| Rule                         | Reason                                                              |
| ---------------------------- | ------------------------------------------------------------------- |
| `required`                   | Prevents empty submissions and ensures mandatory fields are filled  |
| `string / numeric / integer` | Ensures the input data matches the expected data type               |
| `min:3`                      | Prevents overly short and non-meaningful product names              |
| `max:255`                    | Prevents excessively long input and potential database or UI issues |
| `min:0`                      | Prevents invalid negative values for amount and quantity            |

---

## Security Considerations

-   CSRF Protection
    All forms use Laravel’s CSRF tokens to prevent cross-site request forgery.
-   Method Spoofing
    DELETE requests are handled safely via method spoofing.
-   Mass Assignment Protection
    Only fillable fields are allowed in the model.
-   Server-side Validation
    Validation is enforced regardless of client-side behavior.

> Authentication and authorization were intentionally not implemented to keep the scope aligned with a mini CRUD challenge.

---

## 🧩 Code Structure & Clean Code

-   Validation logic is separated using Form Request classes.
-   Blade components are organized and reusable.
-   Controllers remain thin and readable.
-   No unnecessary abstraction or over-engineering.
-   Naming conventions follow Laravel standards.

---

## 📦 Additional Libraries Used

DaisyUI – UI component library built on Tailwind CSS
Alpine.js – Lightweight JavaScript for UI interactivity
Both libraries were chosen for simplicity and maintainability

---

## 🚀 How to Run the Project

### Requirements

-   PHP 8.2+
-   Composer
-   Node.js & NPM
-   MySQL

### Installation Steps

```bash
git clone https://github.com/Mhmmadlthfi/Test---Full-Stack-Developer---Muhammad-Lutfi-Wahid.git
cd project-folder

composer install
npm install
npm run dev

cp .env.example .env
php artisan key:generate

php artisan migrate --seed
php artisan serve
```

---

### 🌍 Live Demo

> Live deployment link: [helloluthfiii.my.id](helloluthfiii.my.id)

---

## 📝 Closing Note

This project focuses on engineering fundamentals, clean structure, and clear reasoning behind each decision rather than advanced complexity.

Thank you for the opportunity.
