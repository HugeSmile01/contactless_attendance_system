# Contact-Less Attendance System

A QR based attendance system built using Laravel.

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/HugeSmile01/contactless_attendance_system.git
   cd contactless_attendance_system
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Set up your database configuration in the `.env` file.

6. Run the migrations:
   ```bash
   php artisan migrate
   ```

7. Serve the application:
   ```bash
   php artisan serve
   ```

8. Open your browser and go to `http://localhost:8000`.

## Features

- Student and Teacher authentication
- QR code based attendance marking
- Attendance history and records

## Project Structure

- `app/Http/Controllers`: Contains the controllers for handling requests
- `resources/views`: Contains the Blade templates for the views
- `routes/web.php`: Contains the routes for the application
- `composer.json`: Contains the project dependencies and metadata
