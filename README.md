# Laravel Docker Blog Site

## About the Project

This is a simple blog website built with Laravel and fully containerized using Docker. The project is intended for learning and small-scale blogging purposes.

### Features

*  Create and publish blog posts
*  Simple and clean blog structure
*  Dockerized environment (PHP, Nginx, Node, MySQL)

---

## Tech Stack

* **Backend:** Laravel
* **Frontend:** Blade, TailwindCSS, Vite
* **Database:** MySQL
* **Web Server:** Nginx
* **Containerization:** Docker & Docker Compose

---

## How to Run the Project with Docker

### Requirements

Make sure you have the following installed on your system:

* Docker
* Docker Compose

You can check with:

```bash
docker --version
docker compose version
```

---

### lone the Repository

```bash
git clone https://github.com/your-username/laravel-docker-blog-site.git
cd laravel-docker-blog-site
```

---

### Environment Setup

Copy the example environment file:

```bash
cp .env.example .env
```

Update database credentials in `.env` if needed (should match `docker-compose.yml`).

---

### Build and Start Containers

```bash
docker compose up --build
```

---

### Application Key & Migrations

```bash
php artisan key:generate
php artisan migrate
```

---

## Access the Application

Open your browser and visit:

```
http://localhost
```

(or the port defined in `docker-compose.yml`)

---

## Useful Docker Commands

Stop containers:

```bash
docker compose down
```

Rebuild containers:

```bash
docker compose up --build
```

---

## Vite not working:
  Make sure `npm run dev` is running inside the container.

---

## Notes

* This project is for **learning and development purposes**.

---