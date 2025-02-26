# 🚗 **Smart Parking Lot** 🚗

<p align="center">
  <img src="https://media.giphy.com/media/3o7abKhOpu0NwenH3O/giphy.gif" width="300" alt="Smart Parking Logo">
</p>

![GitHub Repo](https://img.shields.io/github/repo-size/HMAHD/Smart-Parking?style=for-the-badge)
![Laravel Version](https://img.shields.io/badge/Laravel-5.4%2B-red?style=for-the-badge)
![License](https://img.shields.io/github/license/HMAHD/Smart-Parking?style=for-the-badge)

> 🚀 A **web-based parking reservation system** for real-time parking bookings, managing spaces, and communicating with users via email & SMS notifications!

---

## 📌 **Features at a Glance**

✅ **Real-Time Booking** - Instant & scheduled parking reservations.  
✅ **User Roles** - Super Admin, Admin, and Operator management.  
✅ **Notifications** - Automated email & SMS alerts.  
✅ **Reports** - Export bookings in **PDF, CSV, Excel**.  
✅ **Google Maps** - Find the nearest parking zones.  
✅ **Multi-Language Support** - Choose your preferred language.  
✅ **Promo Codes** - Discount offers via codes.

---

## 🏗️ **Installation Guide**

### 🚀 **Step 1: Clone the Repository**

```sh
git clone https://github.com/HMAHD/Smart-Parking.git
cd Smart-Parking
```

### 📦 **Step 2: Install Dependencies**

Ensure **Composer** is installed, then run:

```sh
composer install
```

### ⚙️ **Step 3: Configure Environment**

Duplicate `.env.example` and rename it to `.env`:

```sh
cp .env.example .env
```

Edit `.env` and set up your **database credentials**:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

### 📌 **Step 4: Generate Application Key**

```sh
php artisan key:generate
```

### 🏗️ **Step 5: Run Database Migrations**

```sh
php artisan migrate --seed
```

This will create required tables & insert default data.

### 🚀 **Step 6: Start the Application**

```sh
php artisan serve
```

Visit **[http://127.0.0.1:8000](http://127.0.0.1:8000)** in your browser.

<p align="center">
  <img src="https://media.giphy.com/media/5VKbvrjxpVJCM/giphy.gif" width="400" alt="Installation Success">
</p>

---

## 📂 **Project Structure**

📂 **Frontend** (HTML, CSS, JavaScript, Bootstrap)  
📂 **Backend** (Laravel, MySQL, API Integrations)  
📂 **Database** (User & Booking Management)

---

## 🛠️ **User Roles & Permissions**

👑 **Super Admin** - Full control over the system.  
🔧 **Admin** - Manages parking zones & bookings.  
👷 **Operator** - Manages customer bookings.

---

## 📊 **Dashboard Features**

📌 **Booking Analytics** - View total bookings & earnings.  
📌 **Parking Zone Management** - Add, edit, delete zones.  
📌 **Customer Management** - Manage user accounts.  
📌 **Promo Codes** - Create & apply discount codes.  
📌 **Reports Export** - Download booking reports.

---

## 📜 **API Integrations**

📍 **Google Maps API** - Find parking spots.  
📧 **Mailgun / SMTP** - Send email notifications.  
📲 **Twilio / Nexmo** - Send SMS alerts.

---

## 🏁 **Final Notes**

🔹 **Recommended PHP version**: 7.2+  
🔹 **Required Extensions**: OpenSSL, PDO, Mbstring, XML  
🔹 **Laravel Version**: 5.4+

> 🏆 **Built for parking lot owners & admins to streamline parking management effortlessly.**

🚀 **Happy Coding!**
