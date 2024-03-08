# Hospital Management System

![Front End](FrontEnd.png)

## Front End

![Front End](FrontEnd.png)

## Back End

![Back End](admin-screenshot.png)

## Database Tables

![Database Tables](Tables_Screenshot.png)

## Installation

Follow these instructions to set up and run the project locally on your machine.

### Prerequisites

-   [Git](https://git-scm.com/)
-   [Composer](https://getcomposer.org/)
-   [PHP](https://www.php.net/)

### Installation

1. Clone the repository:

```bash
   git clone https://github.com/Stucom-Pelai/DAW2_M07_UF3_Eloquent-Hospital.git
```

2. Install Composer dependencies:

```bash
composer install
```

3. Update Livewire package 

```bash
composer update livewire/livewire
```

4. Copy the example enviroment file:

```bash
cp .env.example .env
```

5. Generate an application key

```bash
php artisan key:generate
```

6. Create a symbolic link from 'public/storage' to 'storage/app/public'

```bash
php artisan storage:link
```

7. Clear compiled view files 

```bash
php artisan view:clear
```

8. Publish livewire assets 

```bash
php artisan livewire:publish --assets
```

9. Create hms database

```bash
php artisan db:create hms
```

10. Run migrations and seed the database 

```bash
php artisan migrate:fresh --seed
```

11. Start the Laravel development server 

```bash
php artisan serve
```

12. You are all set

## Admin Credentials

Admin:

```bash
root@test.com
```

Password:

```bash
root
```

## If you like our project please leave a star ❤❤
