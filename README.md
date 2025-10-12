# 🌐 LogicLand

*LogicLand* is an interactive learning platform designed to enhance *critical thinking, logical reasoning, and problem-solving skills* for *junior high school students*.  
It provides level-based problem sets — from *Beginner* to *Advanced* — each containing *5 stages*, along with *progress tracking* to monitor students’ achievements.

---

## 🧠 Main Features

### 🧩 Interactive Level-Based Exercises
- Levels: *Beginner → Elementary → Intermediate → Advance*
- Helps students think systematically, analyze answers, and design problem-solving strategies.

### 📊 Progress Tracking / Student Achievement
- Students can view their progress and achievements for each level.
- Encourages continuous growth and learning motivation.

---

## ⚙ Tech Stack

| Layer | Technology |
|-------|-------------|
| *Backend* | Laravel Framework (PHP) |
| *Database* | MySQL (Relational) |
| *Frontend* | HTML, CSS, JavaScript (for interactivity) |
| *Dependency Management* | Composer |
| *Version Control* | Git & GitHub |

---

## 🚀 How to Run the Project

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/logicland.git
cd logicland
```

### 2. Install Dependencies
Make sure you have *Composer* and *Node.js* installed.
```bash
composer install
npm install
```

### 3. Set Up Environment File
Copy `.env.example` to `.env` and adjust database settings:
```bash
cp .env.example .env
```

Edit your `.env`:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=logicland
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Run Migrations and Seeders (if available)
```bash
php artisan migrate --seed
```

### 6. Run the Development Server
```bash
php artisan serve
```

Then open:  
👉 http://localhost:8000

### 7. Compile Frontend Assets
Run Vite in a separate terminal:
```bash
npm run dev
```

---

## 🧾 Additional Notes
- Make sure *MySQL* service is running.
- Audio and visual assets are located under `/public/asset/`.
- To stop the development server, press **CTRL + C**.

---

## 🧑‍💻 Author
Developed with ❤ by the *CapCipCup Team* — featuring  
**Zhang Yu Ling**, **Chen Fei Ying**, and **Chen Cai Mei**.