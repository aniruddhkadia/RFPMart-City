# USWDS-Based PHP / HTML Templates

## 📁 Project Overview

This is a **PHP-based website template project** built using the **U.S. Web Design System (USWDS)**.

### Project Type

| Attribute         | Details                        |
| ----------------- | ------------------------------ |
| **Framework**     | PHP (requires PHP 8.1+)        |
| **Design System** | U.S. Web Design System (USWDS) |
| **License**       | MIT                            |
| **Author**        | Ashish Adeshara / RFPMart LLC  |

### What It Contains

- Ready-to-use PHP/HTML templates for building government-style websites
- Pre-built pages for:
  - Departments (police, fire, city council, emergency management, etc.)
  - Blogs (grid, list, and detail views)
  - Events (grid, list, and detail views)
  - Careers listings
  - Contact forms
  - User authentication (login, registration, multi-sign-on)
- USWDS assets (CSS, JS, images) in the `src-php/uswds` folder
- Modular PHP structure with reusable components:
  - `0_config.php` - Configuration settings
  - `1_head.php` - HTML head section
  - `2_nav.php` - Navigation menu
  - `9_footer.php` - Footer section

### Features

- Built on U.S. Web Design System (USWDS)
- Accessibility-first and WCAG-aligned
- Clean, modular HTML and PHP structure
- Easy to customize and extend
- Suitable for government, enterprise, and public-sector style projects

---

## 🚀 How to Run Locally

### Option 1: Using XAMPP (Recommended for Windows)

1. **Download & Install XAMPP** from [https://www.apachefriends.org/](https://www.apachefriends.org/)

2. **Copy the project folder** to:

   ```
   C:\xampp\htdocs\uswds-1
   ```

3. **Start Apache** from the XAMPP Control Panel

4. **Open your browser** and navigate to:
   ```
   http://localhost/uswds-1/src-php/
   ```

### Option 2: Using PHP Built-in Server

1. **Open PowerShell** or Command Prompt

2. **Navigate to the project directory and start the server**:

   ```powershell
   cd "d:\00-Interview Test\2-feb-2026-Ahmedabad\uswds-1-main\src-php"
   php -S localhost:8000
   ```

3. **Open your browser** and navigate to:
   ```
   http://localhost:8000
   ```

### Option 3: Using WAMP

1. **Download & Install WAMP** from [https://www.wampserver.com/](https://www.wampserver.com/)

2. **Copy the project folder** to:

   ```
   C:\wamp64\www\uswds-1
   ```

3. **Start WAMP** and ensure the icon is green

4. **Open your browser** and navigate to:
   ```
   http://localhost/uswds-1/src-php/
   ```

### Option 4: Using Laragon

1. **Download & Install Laragon** from [https://laragon.org/](https://laragon.org/)

2. **Copy the project folder** to:

   ```
   C:\laragon\www\uswds-1
   ```

3. **Start Laragon** and click "Start All"

4. **Open your browser** and navigate to:
   ```
   http://localhost/uswds-1/src-php/
   ```

---

## 🔗 Live Demo

You can view the live demo at: **https://www.uswebdesignsystem.org/uswds-1/**

---

## 📂 Project Structure

```
uswds-1-main/
├── src-php/
│   ├── 0_config.php              # Configuration
│   ├── 1_head.php                # HTML head section
│   ├── 2_nav.php                 # Navigation menu
│   ├── 9_footer.php              # Footer section
│   ├── index.php                 # Homepage
│   ├── departments-*.php         # Department pages
│   ├── sample-pages-*.php        # Sample pages (blog, events, etc.)
│   ├── user-*.php                # User authentication pages
│   ├── images/                   # Image assets
│   └── uswds/                    # USWDS framework assets
├── composer.json                 # PHP dependencies
├── package.json                  # NPM configuration
├── README.md                     # Original readme
└── LICENSE                       # MIT License
```

---

## 📋 Requirements

- **PHP 8.1 or higher**
- A web server (Apache, Nginx) or PHP's built-in server

---

## 📝 License

This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for details.
