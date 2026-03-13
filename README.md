<div align="center">
  <br />
    <a href="https://github.com/[your-username]/abo-news">
        <img src="https://i.pinimg.com/736x/f4/32/a6/f432a63b29dfae75dff1432eb4b60b62.jpg" alt="Abo News Portal Logo" width="160">
    </a>
  <br />
  <h1>🎤 Abo News · Ado Fan Portal</h1>
  <p>
    <strong>A modern, categorized news platform dedicated to tracking the latest updates, releases, and tours for the artist Ado.</strong>
  </p>
  <p>
    <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel" /></a>
    <a href="https://tailwindcss.com"><img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS" /></a>
    <a href="#"><img src="https://img.shields.io/badge/Status-In_Development-yellow?style=for-the-badge" alt="Development Status" /></a>
  </p>
</div>

---

## 📖 Project Overview

**Abo News** is a full-featured CRUD application built to serve as a central hub for news about the artist Ado. This project demonstrates a clean implementation of the Laravel framework with a sleek, responsive frontend styled by Tailwind CSS. It showcases best practices in MVC architecture, database relationships, and user interface design.

<div align="center">
    <img src="https://i.pinimg.com/736x/f4/32/a6/f432a63b29dfae75dff1432eb4b60b62.jpg" alt="Abo News Portal Screenshot" width="80%" style="border-radius: 8px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);"/>
    <p><em>⚡ Clean, dark-themed UI for an immersive fan experience.</em></p>
</div>

## ✨ Key Features

*   **Complete Content Management:** Full **CRUD** (Create, Read, Update, Delete) capabilities for news posts, empowering admins to manage content effortlessly.
*   **Intelligent Categorization:** Posts are organized into specific categories (e.g., *Tours*, *Merchandise*, *Music Releases*), making it easy for fans to filter and find relevant news.
*   **Rich Media Support:** Integrated a file dropzone component for seamless image uploads and live previews, enhancing the visual appeal of each post.
*   **User Authentication:** Secure Laravel Breeze authentication scaffold ensures that content editing is restricted to authorized users only.
*   **Responsive & Modern UI:** A fully responsive design built with **Tailwind CSS**, featuring a sleek dark mode that provides an optimal viewing experience on any device.
*   **Pagination:** Efficiently handles large numbers of posts by displaying them in paginated chunks, improving page load times and user navigation.

## 🛠️ Built With

*   **[Laravel](https://laravel.com/)** - The powerful PHP framework providing the robust backend architecture, routing, and Eloquent ORM.
*   **[Tailwind CSS](https://tailwindcss.com/)** - A utility-first CSS framework used to craft the custom, responsive, and dark-themed user interface.
*   **[MySQL](https://www.mysql.com/)** - The relational database management system for storing posts, categories, and user data.
*   **[Mailpit](https://github.com/axllent/mailpit)** - *(Recommended)* An email testing tool used during development to capture and view emails locally.

## 🚀 Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

*   PHP >= 8.1
*   Composer
*   Node.js & NPM
*   MySQL or SQLite

### Installation

1.  **Clone the repository**
    ```bash
    git clone https://github.com/[your-username]/abo-news.git
    cd abo-news
    ```

2.  **Install PHP & Frontend Dependencies**
    ```bash
    composer install
    npm install && npm run build
    ```

3.  **Environment Configuration**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *   Open the `.env` file and update your database credentials (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
    *   *Tip: If you're using Mailpit for local email testing, ensure your `.env` mail settings point to `MAIL_HOST=localhost` and `MAIL_PORT=1025`.*

4.  **Database Setup & Seeding**
    This command will create the database tables and populate them with initial categories and test posts.
    ```bash
    php artisan migrate:fresh --seed
    ```

5.  **Run the Application**
    ```bash
    php artisan serve
    ```
    Visit `http://127.0.0.1:8000` in your browser to see the application.

---

## 📝 Roadmap & Future Enhancements

This project is actively being developed. Here is a glimpse into the planned features to complete the core functionality and add exciting new capabilities:

### Core CRUD Completion
- [ ] **Update Functionality:** Implement the `edit` view and controller logic to allow admins to modify existing posts.
- [ ] **Delete Functionality:** Add secure deletion of posts with proper authorization checks.
- [ ] **Single Post View:** Create a detailed `post.show` page to display full content, author information, and timestamps.

### Access Control & User Experience
- [ ] **Public Access:** Configure middleware to allow guests to view the post index and individual post details.
- [ ] **Role-Based Permissions:** Restrict **Create, Edit, and Delete** actions to authenticated administrators only.

### Community & Social Features
- [ ] **Comments System:** Introduce a `Comment` model and relationship to enable user interaction and discussions on news posts.
- [ ] **User Profiles & Avatars:** Implement user profiles and integrate avatar support (e.g., using Gravatar or local file uploads).

---

## 📄 License

This project is licensed under the MIT License. The image of Ado is used for illustrative purposes and is the property of its respective owner.

---

<div align="center">
  <p>Crafted as a fun class project!</p>
  <a href="https://github.com/stingy-namake">GitHub</a> ·
</div>
