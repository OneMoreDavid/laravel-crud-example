# Laravel CRUD Example

This repository is a simple example of how to build a basic CRUD (Create, Read, Update, Delete) application using **Laravel 11**. It complements the blog post on **CRUD operations in Laravel**, which will be published on **18th November 2024**.

Check out the detailed blog post here:
[onemoredavid.com/blog/2024-11-18-laravel-crud/](https://onemoredavid.com/blog/2024-11-18-laravel-crud/)

## About

This project demonstrates the basic functionality required to manage a resource—in this case, **posts** — through a typical CRUD interface. It includes the ability to:

- Create new posts
- List all posts
- View individual posts
- Edit existing posts
- Delete posts

## Features

- **Laravel 11** for modern PHP application development.
- Uses **Eloquent ORM** to interact with the database.
- Follows RESTful routing conventions with a **resource controller**.
- Example of mass assignment protection using `$fillable`.

## Installation

To run this project locally, follow these steps:

1. Clone the repository:

```bash
git clone https://github.com/your-username/laravel-crud-example.git
cd laravel-crud-example
```

2. Install dependencies using Composer:

```bash
composer install
```

3. Copy the `.env.example` file to `.env` and update the database configuration:

```bash
cp .env.example .env
```

4. Generate the application key:

```bash
php artisan key:generate
```

5. Run the migrations to set up the database:

```bash
php artisan migrate
```

6. Serve the application locally:

```bash
php artisan serve
```

Now, you can visit `http://localhost:8000/posts` to see the CRUD application in action (or use Laravel Herd, as I do)!

## Usage

Once the project is running, you can perform the following operations:

- **Create a Post**: Click on "Create Post" and fill out the form to add a new post.
- **View Posts**: The home page displays all posts. Click on any post to view its details.
- **Edit a Post**: On the post's detail page, click "Edit" to modify the post.
- **Delete a Post**: Use the delete button to remove a post from the database.

## Further Reading

For more information on how CRUD works and its role in web applications, check out the supporting blog post:
[What is CRUD? A Simple Guide with Laravel](https://onemoredavid.com/blog/2024-11-18-laravel-crud/)

## License

This project is open-sourced under the [MIT license](LICENSE).
