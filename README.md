# 🎓 G-SCORES

**Vietnam National High School Exam Score Management System (THPT 2024)**

G-SCORES is a web application designed to import, manage, analyze, and report Vietnam National High School Exam (THPT 2024) scores from raw CSV data.

The project focuses on **clean backend architecture, OOP principles, ORM usage, data processing, and reporting visualization**.

---

## 📌 Features

### ✅ Must Have

-   Import raw exam data from CSV into database using **Migration & Seeder**
-   Search and view student scores by **Registration Number (SBD)**
-   Score classification report with **4 levels**:
    -   ≥ 8 points
    -   < 8 and ≥ 6 points
    -   < 6 and ≥ 4 points
    -   < 4 points
-   Statistics of student counts in each score level **by subject**
-   Chart visualization using **Chart.js**
-   List **Top 10 students of Group A** (Math + Physics + Chemistry)
-   Mandatory **OOP programming** for subject management
-   Form validation and business logic handling
-   ORM usage for database interaction

### ✅ Expand Feature

-   Expand Top 10 ranking feature to support multiple exam groups such as **A00, A01, B00, D01**, allowing users to switch groups dynamically.

### ✨ Nice To Have (Optional)

-   Responsive UI (desktop, tablet, mobile)
-   Clean UI with Bootstrap 5
-   Easy extension for Docker & deployment

---

## 🛠 Technology Stack

### Frontend

-   HTML5
-   CSS3
-   JavaScript
-   **Bootstrap 5**
-   **Chart.js**

### Backend

-   **PHP – Laravel Framework**
-   OOP-based architecture
-   Eloquent ORM

### Database

-   **MySQL**

---

## 🚀 Installation Guide

Follow the steps below to set up and run the project locally.

---

### 1️⃣ Clone the repository

```bash
git clone https://github.com/your-username/g-scores.git
cd g-scores

```

### 2️⃣ Install backend dependencies

```bash
composer install

```

### 3️⃣ Environment configuration

Create .env file from example:

```bash
cp .env.example .env

```

Generate application key:

```bash
php artisan key:generate

```

Update database configuration in .env:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=g_scores
DB_USERNAME=root
DB_PASSWORD=

```

### 4️⃣ Database migration & seeding

Run migrations to create database tables:

```bash
php artisan migrate

```

Import exam data from CSV file:

```bash
php artisan db:seed

```

📌 Note:
Ensure the file diem_thi_thpt_2024.csv is placed in:

```bash
storage/app/diem_thi_thpt_2024.csv

```

### 5️⃣ Run the application

Start Laravel development server:

```bash
php artisan serve

```

### 👤 Author

-   Name: Tam Ho
