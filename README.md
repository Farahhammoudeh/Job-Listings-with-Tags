# Job Listings with Tags

## Overview
This is a Laravel 11 project designed for managing job listings with advanced filtering and search capabilities. Users can log in, register, create job posts, and filter jobs by tags. The system also sends email notifications when a new job is created.

## Features
- **User Authentication**: Secure login and registration
- **Job Management**: Create, edit, and delete job listings
- **Tag Filtering**: Filter job listings by tags
- **Search Functionality**: Search job listings by name

## Requirements
- **PHP**: 8.1 or higher
- **Composer**
- **Laravel**: 11.x
- **Database**: MySQL, PostgreSQL, SQLite, or any other supported by Laravel

## Installation

### Clone the Repository:
```git clone https://github.com/yourusername/your-repository.git```

### Navigate to the Project Directory:
```cd your-repository```

### Install PHP Dependencies:
```composer install```

### Install JavaScript Dependencies:
```npm install```

## Set Up the Environment File:

### Copy the example environment file:
```cp .env.example .env```

### Generate the application key:
```php artisan key:generate```

### Configure the Database:
Open the .env file and update the database connection settings.

### Run Migrations:
```php artisan migrate```

### Seed the Database (if applicable):
```php artisan db:seed```

## Start the Development Servers:

### Laravel Development Server:
```php artisan serve```

### Vite Development Server (in a new terminal window):
```npm run dev```

### Access your application at http://localhost:8000.

## Usage
Login/Registration: Users can create an account or log in.
Job Management: Users can create and manage job listings.
Tag Filtering: Use tags to filter job listings and view jobs associated with specific tags.
Search Functionality: Use the search bar to find job listings by name.

## Contributing
Contributions are welcome! Please:
Fork the repository and create a new branch for your changes.
Follow coding standards and submit a pull request with a clear description of your changes.

## License
This project is licensed under the MIT License - see the LICENSE file for details.