*/

COMPUTER FORCE WEBSITE - INSTALLATION GUIDE
============================================

REQUIREMENTS:
- PHP 7.0 or higher
- MySQL 5.6 or higher
- Apache web server (or equivalent with mod_rewrite)
- Web browser

INSTALLATION STEPS:

1. EXTRACT FILES
   - Extract all files to your web server directory (e.g., htdocs, www, public_html)
   - Maintain the folder structure as provided

2. CREATE DATABASE
   - Open phpMyAdmin or MySQL command line
   - Create a new database called 'computerforce'
   - Import the database.sql file from the database/ folder
   - This will create all necessary tables and insert sample data

3. CONFIGURE DATABASE CONNECTION
   - Open database/db.php
   - Update the following constants with your database credentials:
     * DB_HOST (usually 'localhost')
     * DB_USER (your MySQL username, usually 'root' for local)
     * DB_PASS (your MySQL password)
     * DB_NAME (should be 'computerforce')

4. SET PERMISSIONS (Linux/Mac only)
   - Ensure the web server has read permissions for all files
   - chmod 755 for directories
   - chmod 644 for files

5. ACCESS THE WEBSITE
   - Open your web browser
   - Navigate to: http://localhost/computerforce/
   - Or: http://localhost/[your-folder-name]/

FOLDER STRUCTURE:
computerforce/
├── css/
│   └── style.css              # All styles
├── js/
│   └── main.js                # JavaScript functions
├── images/                    # Image assets (add your own)
├── database/
│   ├── db.php                 # Database connection
│   └── database.sql           # Database structure and data
├── processes/
│   ├── register_process.php  # Registration logic
│   └── login_process.php     # Login logic
├── index.php                  # Home page
├── register.php               # Registration page
├── product.php                # Products page
├── about.php                  # About page
├── privacyPolicy.php         # Privacy policy page
└── README_FIRST.txt          # This file

FEATURES:
- User registration with validation
- Product categories and listings
- Shopping cart display
- Search functionality
- Responsive design
- MySQL database integration
- Session management
- Password hashing for security

TESTING:
1. Test registration by creating a new account
2. Test search functionality
3. Browse product categories
4. Check all navigation links

TROUBLESHOOTING:

Problem: "Connection failed" error
Solution: Check database credentials in database/db.php

Problem: Blank page
Solution: Enable PHP error reporting by adding to top of index.php:
         error_reporting(E_ALL);
         ini_set('display_errors', 1);

Problem: 404 Not Found
Solution: Ensure files are in correct directory and web server is running

Problem: Registration not working
Solution: Check that database tables were created successfully

CUSTOMIZATION:
- Add your logo/images to the images/ folder
- Modify colors in css/style.css
- Add more products via phpMyAdmin
- Customize text content in PHP files

SECURITY NOTES:
- Change default database credentials
- Use HTTPS in production
- Implement CSRF protection for production use
- Add rate limiting for registration
- Implement proper session timeout

SUPPORT:
For issues or questions, contact: info@computerforce.com.au

VERSION: 1.0
DATE: December 2025
AUTHOR: Leonard Siu

============================================
END OF INSTALLATION GUIDE
============================================

/*