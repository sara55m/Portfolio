# 💼 Portfolio

A responsive personal portfolio website built with **Laravel** and **Blade**, showcasing my background, technical skills, projects, training, and professional experience as a **Junior Backend Laravel Developer**.

[![Live Demo](https://img.shields.io/badge/🌐%20Live%20Demo-Portfolio-0A66C2?style=for-the-badge)](https://portfolio-xq7.pages.dev/)

## 🌐 Live Demo

👉 **https://portfolio-xq7.pages.dev/**

---

## ✨ Features

- Responsive and modern user interface
- Multi-page portfolio built with Laravel Blade
- Professional project showcase
- Technical skills overview
- Training and work experience sections
- Contact page
- Static site export using Spatie Laravel Export
- Hosted on Cloudflare Pages

---

## 📄 Pages

| Page | Description |
|------|-------------|
| **Home** | Landing page with a brief introduction |
| **About** | Personal background and career summary |
| **Skills** | Technical and soft skills |
| **Projects** | Portfolio projects with descriptions |
| **Trainings** | Training programs and certifications |
| **Experience** | Professional experience timeline |
| **Contact** | Contact information |

---

## 🛠️ Tech Stack

- **Laravel** — PHP web application framework
- **Blade** — Laravel templating engine
- **Bootstrap 5** — Responsive UI components
- **CSS3** — Custom styling
- **JavaScript** — Interactive functionality
- **Spatie Laravel Export** — Static site generation
- **Cloudflare Pages** — Static website hosting

---

## 🚀 Getting Started

### Prerequisites

- PHP 8.0+
- Composer
- Laravel CLI

### Installation

1. Clone the repository

```bash
git clone https://github.com/sara55m/Portfolio.git
cd Portfolio
```

2. Install dependencies

```bash
composer install
```

3. Create the environment file

```bash
cp .env.example .env
```

4. Generate the application key

```bash
php artisan key:generate
```

5. Start the development server

```bash
php artisan serve
```

6. Visit

```
http://localhost:8000
```

---

## 📦 Static Export

This portfolio is exported as a static website using **Spatie Laravel Export** and deployed on **Cloudflare Pages**.

Generate the static version with:

```bash
php artisan export
```

The generated files will be available in the `dist/` directory.

---

## 📁 Project Structure

```text
portfolio/
├── app/
│   └── Http/
│       └── Controllers/
├── public/
│   ├── css/
│   ├── images/
│   └── js/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── skills.blade.php
│       ├── projects.blade.php
│       ├── trainings.blade.php
│       ├── experience.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php
├── dist/
└── README.md
```

---

## 👩‍💻 Author

**Sara Mohamed Abdullah**

- 🌐 Portfolio: https://portfolio-xq7.pages.dev/
- GitHub: https://github.com/sara55m
- LinkedIn: https://linkedin.com/in/sara-mohamed6295
- Email: sara.mohamed7611250@gmail.com

---

⭐ If you found this project interesting, feel free to give it a star!
