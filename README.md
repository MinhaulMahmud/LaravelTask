# Laravel API Implementation

This project demonstrates the implementation of three API tasks using Laravel:

1. **Blog Post CRUD API**: Create, list, and view blog posts.
2. **User Registration API**: User registration with validation and password hashing.
3. **Task Management API**: Manage tasks with features like adding, marking as completed, and fetching pending tasks.

## Requirements

- PHP >= 8.0
- Composer
- Laravel >= 9.0
- MySQL (or any other supported database)

## Setup Instructions

### Step 1: Clone the Repository
```bash
git remote add origin https://github.com/MinhaulMahmud/LaravelTask.git
cd LaravelTask
```

### Step 2: Install Dependencies
```bash
composer install
```

### Step 3: Configure Environment
Copy the `.env.example` file and rename it to `.env`. Then configure your database and other environment variables:
```bash
cp .env.example .env
```
Update the following variables in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### Step 4: Generate Application Key
```bash
php artisan key:generate
```

### Step 5: Run Migrations
```bash
php artisan migrate
```

### Step 6: Serve the Application
```bash
php artisan serve
```
The application will be available at `http://localhost:8000`.

## API Endpoints

### Task 1: Blog Post CRUD API

#### Create a Post
**Endpoint**: `POST /http://127.0.0.1:8000/posts`

**Request Body:**
```json
{
  "title": "My First Post",
  "content": "This is my content."
}
```
**Response:**
```json
{
  "id": 1,
  "title": "My First Post",
  "content": "This is my content.",
  "created_at": "2024-12-18T10:00:00Z"
}
```

#### List All Posts
**Endpoint**: `GET /http://127.0.0.1:8000/posts`

**Response:**
```json
[
  {
    "id": 1,
    "title": "My First Post",
    "content": "This is my content.",
    "created_at": "2024-12-18T10:00:00Z"
  }
]
```

#### View a Single Post
**Endpoint**: `GET /http://127.0.0.1:8000/posts/1`

**Response:**
```json
{
  "id": 1,
  "title": "My First Post",
  "content": "This is my content.",
  "created_at": "2024-12-18T10:00:00Z"
}
```

### Task 2: User Registration API

#### Register a User
**Endpoint**: `POST /http://127.0.0.1:8000/register`

**Request Body:**
```json
{
  "name": "Jane Doe",
  "email": "jane@example.com",
  "password": "password123"
}
```
**Response:**
```json
{
  "id": 1,
  "name": "Jane Doe",
  "email": "jane@example.com",
  "created_at": "2024-12-18T10:00:00Z"
}
```

### Task 3: Task Management API

#### Add a Task
**Endpoint**: `POST /http://127.0.0.1:8000/tasks`

**Request Body:**
```json
{
  "title": "Finish Laravel test"
}
```
**Response:**
```json
{
  "id": 1,
  "title": "Finish Laravel test",
  "is_completed": false,
  "created_at": "2024-12-18T10:00:00Z"
}
```

#### Mark Task as Completed
**Endpoint**: `PUT /http://127.0.0.1:8000/tasks/5`

**Request Body:**
```json
{
  "is_completed": true
}
```
**Response:**
```json
{
  "id": 1,
  "title": "Finish Laravel test",
  "is_completed": true,
  "created_at": "2024-12-18T10:00:00Z"
}
```

#### Get Pending Tasks
**Endpoint**: `GET /http://127.0.0.1:8000/tasks/pending`

**Response:**
```json
[
  {
    "id": 2,
    "title": "Start new Laravel project",
    "is_completed": false,
    "created_at": "2024-12-19T12:00:00Z"
  }
]
```

## Testing the APIs

You can use tools like Postman or CURL to test the API endpoints.