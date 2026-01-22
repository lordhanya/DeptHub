# DeptHub

A comprehensive departmental management system for educational institutions, designed to streamline administrative tasks, enhance communication, and improve the academic experience for students and teachers.

## 🚀 Features

### For Students
- **Timetable Management** - View class schedules, exam dates, and important deadlines
- **Assignment Tracking** - Submit assignments and track academic progress
- **Attendance Records** - Monitor attendance history and statistics
- **Grade Portal** - Access grades and performance analytics
- **Communication Hub** - Connect with teachers and classmates

### For Teachers
- **Class Management** - Organize classes, share materials, and communicate
- **Attendance System** - Track student attendance with automated reporting
- **Grade Management** - Efficient grading system with comprehensive reports
- **Schedule Coordination** - Manage teaching schedules and prevent conflicts
- **Performance Analytics** - Real-time insights into student performance

### Administration
- **Department Overview** - Centralized dashboard for all departments
- **User Management** - Role-based access control and user administration
- **Resource Allocation** - Optimize classroom and resource scheduling
- **Reporting System** - Generate comprehensive reports and analytics

## 🛠️ Technology Stack

- **Backend**: PHP 7.4+
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **UI Framework**: Bootstrap 5.3
- **Authentication**: Custom PHP session management
- **API Integration**: Chatbot with Flask backend (Python)
- **Dependencies**: Composer (PHP), npm (Node.js minimal)

## 📋 Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- Composer (PHP package manager)
- Python 3.7+ (for chatbot feature)

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone <repository-url>
cd DeptHub
```

### 2. Install Dependencies

#### PHP Dependencies
```bash
composer install
```

#### Node Dependencies
```bash
npm install
```

#### Python Chatbot Dependencies
```bash
cd includes/chatbot/Backend
pip install -r requirements.txt
```

### 3. Database Setup

1. Create a MySQL database named `depthub`
2. Import the database schema (if available)
3. Configure database credentials in `.env` file:

```env
DB_HOST=localhost
DB_USER_NAME=your_username
DB_PASSWORD=your_password
DB_NAME=depthub
```

### 4. Environment Configuration

Copy the environment template and configure:

```bash
cp .env.example .env
```

Edit the `.env` file with your database and application settings.

### 5. Start Development Servers

#### PHP Development Server
```bash
php -S localhost:8000
```

#### Chatbot Backend (Optional)
```bash
cd includes/chatbot/Backend
python gemini_chatbot.py
```

## 📁 Project Structure

```
DeptHub/
├── index.php                 # Landing page
├── get-started.php           # Onboarding carousel
├── includes/                 # PHP components
│   ├── header.php           # Page header
│   ├── footer.php           # Page footer
│   ├── student/             # Student-specific pages
│   ├── teacher/             # Teacher-specific pages
│   └── chatbot/             # Chatbot functionality
├── public/                   # Static assets
│   ├── CSS/                 # Stylesheets
│   └── JS/                  # JavaScript files
├── assets/                   # Images and media
├── db/                      # Database configuration
├── vendor/                  # Composer dependencies
└── .env                     # Environment variables
```

## 🎨 Theming & Styling

The application uses a modern, gradient-based design system with:

- **Primary Colors**: Purple and pink gradients
- **CSS Variables**: Consistent theming throughout
- **Responsive Design**: Mobile-first approach
- **Animations**: AOS (Animate On Scroll) library
- **BEM Methodology**: Organized CSS naming convention

### CSS Variables
```css
:root {
  --color-bg: linear-gradient(135deg, #300955 0%, #251313 100%);
  --primary-color: #a23bff;
  --color-accent: linear-gradient(135deg, #a23bff, #ff2e4c);
  --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
```

## 🔧 Development Commands

### Testing
```bash
# Test database connection
php -r "include 'db/connection.php'; echo 'DB connected';"

# Test PHP syntax
php -l includes/teacher/save_attendance.php

# Test chatbot endpoint
curl -X POST http://localhost:5000/chat -H "Content-Type: application/json" -d '{"message": "Hello"}'

# Python syntax check
cd includes/chatbot/Backend && python -m py_compile gemini_chatbot.py
```

### Linting & Quality
```bash
# PHP syntax check
php -l filename.php

# Check environment variables
php -r "include 'vendor/autoload.php'; \$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); \$dotenv->load(); echo 'DB_NAME: ' . \$_ENV['DB_NAME'];"
```

## 🏗️ Code Conventions

### PHP
- **Naming**: snake_case for files, variables, functions
- **Classes**: PascalCase
- **Database**: PDO with prepared statements
- **Error Handling**: Try-catch blocks with logging
- **Security**: Input sanitization with `htmlspecialchars()`

### JavaScript
- **Syntax**: ES6+ (arrow functions, const/let)
- **Events**: Event delegation and DOMContentLoaded
- **Libraries**: Loaded via CDN (no ES6 modules)

### CSS
- **Methodology**: BEM (Block__Element--Modifier)
- **Prefixes**: `.depthub_`, `.dept-`
- **Responsive**: Mobile-first design
- **Variables**: CSS custom properties

## 🔒 Security Features

- Prepared statements for database operations
- Input validation and sanitization
- Environment variables for sensitive data
- Session-based authentication
- CSRF protection on forms
- SQL injection prevention


## 📞 Support

For support and queries, please contact at ashifrahman8638471722@gmail.com or open an issue in the repository.

## 🙏 Acknowledgments

- Bootstrap for the responsive UI framework
- AOS for beautiful scroll animations
- Flask and Python for the chatbot backend
- All contributors and users of DeptHub

---

**DeptHub** - Transforming educational management, one department at a time.