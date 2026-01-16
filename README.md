🎓 G-SCORES

Vietnam National High School Exam Score Management System

G-SCORES is a web application designed to import, manage, analyze, and report Vietnam National High School Exam scores from raw CSV data.
The project focuses on clean backend architecture, OOP principles, ORM usage, data processing, and reporting visualization.

📌 Features

✅ Import raw exam data from CSV into database using Migration & Seeder

✅ Search and view student scores by Registration Number (SBD)

✅ Score classification report with 4 levels:

≥ 8 points

< 8 and ≥ 6 points

< 6 and ≥ 4 points

< 4 points

✅ Statistics of student counts in each score level by subject

✅ Chart visualization for score distribution

✅ List Top 10 students of Group A (Math + Physics + Chemistry)

✅ Mandatory OOP programming for subject management

✅ Form validation and business logic handling

✅ ORM usage for database interaction

Extend Feature

✨ Nice To Have (Optional)

✅ Responsive UI for desktop, tablet, and mobile

✅ Clean UI with Bootstrap 5

🛠 Technology Stack
Frontend

HTML5

CSS3

JavaScript

Bootstrap 5

Chart.js

Backend

PHP – Laravel Framework

OOP-based architecture

Eloquent ORM

Database

MySQL

🚀 Installation Guide
1️⃣ Clone repository
git clone https://github.com/your-username/g-scores.git
cd g-scores

2️⃣ Install dependencies
composer install

3️⃣ Environment setup
cp .env.example .env
php artisan key:generate

Update database configuration in .env

4️⃣ Run migration & seed data
php artisan migrate
php artisan db:seed

5️⃣ Start application
php artisan serve

Access the application at:
👉 http://localhost:8000

👤 Author

Name: Tam Ho

Role: Web Developer

Tech Stack: Laravel, PHP, JavaScript, Bootstrap
