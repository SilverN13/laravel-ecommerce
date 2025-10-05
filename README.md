# 🛒 Laravel E-Commerce Project / مشروع متجر إلكتروني بلارافيل

This project is an **E-Commerce web application** built using **Laravel 10**.  
The goal is to create a simple yet functional store that allows an admin to manage products and users to register, log in, and view available items.  
المشروع عبارة عن **تطبيق متجر إلكتروني** تم تطويره باستخدام **Laravel 10**،  
ويهدف إلى توفير منصة بسيطة لكنها عملية تمكّن المشرف من إدارة المنتجات، والمستخدمين من التسجيل وتصفح المنتجات.

---

## 🚀 Features Implemented / الميزات المنجزة

### 🧩 Admin Panel / لوحة التحكم

-   إضافة منتجات جديدة (الاسم، التفاصيل، السعر، الصورة)
-   تعديل المنتجات الحالية
-   حذف المنتجات
-   التحقق من صحة البيانات المدخلة (Validation)
-   التحقق من سلامة الصور وحجمها ونوعها

### 👥 User System / نظام المستخدمين

-   تسجيل مستخدم جديد وتسجيل الدخول باستخدام **Laravel Breeze**
-   تشفير كلمات المرور وإدارة الجلسات (Sessions)
-   حماية المسارات من الوصول غير المصرح به

### 🏠 Main Website / الواجهة الرئيسية

-   عرض المنتجات على الصفحة الرئيسية حتى قبل تسجيل الدخول
-   استمرار عرض المنتجات بعد تسجيل الدخول مع التخطيط لإضافة تفاعلات إضافية لاحقًا

---

## 🧱 Tech Stack / التقنيات المستخدمة

| الجزء          | الأدوات والتقنيات                                |
| -------------- | ------------------------------------------------ |
| Backend        | Laravel 10                                       |
| Authentication | Laravel Breeze                                   |
| Database       | MySQL                                            |
| Frontend       | Blade Templates + Bootstrap (أو أي إطار CSS آخر) |
| Storage        | Laravel Storage                                  |
| Validation     | Laravel Form Request Validation                  |

---

## ⚙️ Installation Guide / خطوات التثبيت

1. **Clone the repository / نسخ المستودع:**

    ```bash
    git clone https://github.com/silverN13/laravel-ecommerce.git
    ```

2. Install dependencies / تثبيت المتطلبات:
   composer install
   npm install && npm run dev

3. Create the .env file / إنشاء ملف الإعدادات:
   cp .env.example .env

4. Generate app key / توليد مفتاح التطبيق:
   php artisan key:generate

5. Configure the database then migrate / إعداد قاعدة البيانات وتشغيل الهجرات:
   php artisan migrate

6. Run the development server / تشغيل الخادم المحلي:
   php artisan serve

📦 Project Structure / هيكل المشروع
app/
├─ Http/
│ ├─ Controllers/
│ ├─ Requests/
├─ Models/
resources/
├─ views/
database/
├─ migrations/
routes/
├─ web.php
public/
├─ images/

🧠 Notes / ملاحظات

This project is under development and will continue to evolve over time.
The current version focuses on core functionalities like authentication, product management, and product display.
المشروع لا يزال قيد التطوير وسيتم إضافة المزيد من الميزات لاحقًا.
النسخة الحالية تركز على الأساسيات مثل نظام المستخدمين، إدارة المنتجات، وعرضها في الواجهة الرئيسية.

📜 License / الترخيص

This project is open-source and available under the MIT License
.
هذا المشروع مفتوح المصدر ومتوفر تحت ترخيص MIT
.

👤 Author / المطور

Mohammed Amin

💼 [GitHub Profile](https://github.com/SilverN13)

📧 Email: mohammedaminasw@gmail.com
