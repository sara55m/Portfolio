# 💼 Portfolio

A personal portfolio web application built with **Laravel** and **Blade templating**, showcasing my background, skills, projects, and professional experience in a clean and structured way.

---

## 🌐 Pages

| Page | Description |
|------|-------------|
| **Home** | Landing page with a brief introduction |
| **About** | Personal background and summary |
| **Skills** | Technical and soft skills overview |
| **Projects** | Showcase of development projects with details |
| **Trainings** | Relevant training programs and courses completed |
| **Experience** | Professional work experience timeline |
| **Contact** | Contact information and form to get in touch |

---

## 🛠️ Built With

- **[Laravel](https://laravel.com/)** — PHP web application framework
- **Blade** — Laravel's templating engine
- **CSS3** — Custom styling and responsive design
- **JavaScript** — Interactive UI behavior

---

## 🚀 Getting Started

Follow these steps to run the project locally.

### Prerequisites

- PHP >= 8.0
- Composer
- Laravel CLI

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/sara55m/portfolio.git
   cd portfolio
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Set up environment variables**
   ```bash
   cp .env.example .env
   ```

4. **Generate application key**
   ```bash
   php artisan key:generate
   ```

5. **Start the development server**
   ```bash
   php artisan serve
   ```

6. Open your browser and visit `http://localhost:8000`

---

## 📁 Project Structure

```
portfolio/
├── app/
│   └── Http/Controllers/     # Page controllers
├── resources/
│   └── views/                # Blade templates for each page
        ├── layouts/
            └── app.blade.php
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── skills.blade.php
│       ├── projects.blade.php
│       ├── trainings.blade.php
│       ├── experience.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php               # Application routes
└── public/
    └── css/ js/              # Frontend assets
```

---

## 👩‍💻 Author

**Sara Mohamed Abdullah**
- GitHub: [@sara55m](https://github.com/sara55m)
- LinkedIn: [sara-mohamed6295](https://linkedin.com/in/sara-mohamed6295)
- Email: sara.mohamed7611250@gmail.com
