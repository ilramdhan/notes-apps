# Notes Application 📓

A modern and scalable **Notes Application** built with the latest **Laravel**, **Livewire**, **Tailwind CSS**, and **Laravel Modules**. This application offers a seamless experience for creating, managing, and sharing notes with real-time updates and flexible modular architecture.

---

## 🚀 Features

### **Core Functionality**
- **User Authentication**
  - Register, Login, Logout.
  - Google Account Integration (via **Socialite**).
  - Token-based access (ensures only one active session per user).
  - Email verification.
  - Forgot and Reset Password.

- **Notes Management**
  - Full CRUD for Notes.
  - Archive Notes.
  - Share Notes to Social Media.

- **Dashboards**
  - User Dashboard.
  - Notes Dashboard.
  - Archived Notes Dashboard.

### **Modern Architecture**
- **Frontend**
  - Designed with **Tailwind CSS** for responsive and clean UI.
  - Real-time updates powered by **Livewire**.
  
- **Backend**
  - Built with **Laravel** using a modular approach with **nwidart/laravel-modules**.
  - RESTful API using **OpenAPI**.
  - Secure user sessions via **Sanctum**.

### **Key Features**
- Modular architecture for scalability and maintainability.
- Real-time data processing (no page refresh required).
- Secure user authentication with **Laravel Sanctum**.
- Integrated with **Google OAuth** for easy account management.

---

## 🛠️ Installation

Follow these steps to set up the project locally:

### Prerequisites
- **PHP 8.3+**
- **Composer**
- **Node.js & npm**
- **MySQL**

### Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/notes-app.git

2. Open the folder:
   ```bash
   cd notes-app
   
3. Install dependencies:
   ```bash
   composer install
   npm install
   
4. Copy .env.example to .env:
   ```bash
   cp .env.example .env

5. Configure database, mail, and Google OAuth settings in .env.
   ```bash
   GOOGLE_CLIENT_ID = Your client ID
   GOOGLE_CLIENT_SECRET = Your client secret
   GOOGLE_REDIRECT_URL = Your redirect Url
   
7. Generate application key:
   ```bash
   php artisan key:generate

8. Run migrations and seeders:
   ```bash
   php artisan migrate --seed
   
9. Build frontend assets:
   ```bash
   npm run build

10. Start the application:
    ```bash
    php artisan serve

---

## 🌟 Modules
The application is built with a modular structure using Laravel Modules. Below are the key modules:


### **Auth**
- Handles user registration, login, logout, email verification, and password reset.
- Google OAuth integration via Laravel Socialite.

### **Notes**
- CRUD operations for notes.
- Archive functionality.
- Social media sharing.

### 📂 Project Structure
Frontend: Tailwind CSS + Livewire for a modern and interactive UI.
Backend: Laravel Modules + Sanctum for secure and modular architecture.


### 📧 Contact
For any inquiries, feel free to reach out at ilhamram332@gmail.com

### 🙌 Acknowledgements
Special thanks to:

Laravel, Livewire, Tailwind CSS, FLowbite, Laravel Modules, Laravel Sanctum, Laravel Socialite, Laravel Fortify.
