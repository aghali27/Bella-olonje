# Bedrock WordPress Project

## Overview

This README file provides instructions for setting up and running a WordPress project using Bedrock. Bedrock is a modern WordPress stack that follows best practices and provides a more structured and modular approach to managing WordPress projects.

## Prerequisites

Before setting up the Bedrock WordPress project, ensure you have the following prerequisites installed on your machine:

- PHP (version 7.2 or higher)
- Composer (https://getcomposer.org/)
- Node.js (version 12 or higher)
- NPM (comes with Node.js)
- MySQL or MariaDB database server
- Git (optional but recommended)

## Getting Started

To set up and run the Bedrock WordPress project, follow the steps below:

1. Clone the Bedrock repository to your local machine or download the ZIP file from the GitHub repository.

   ```bash
   git clone https://github.com/roots/bedrock.git
   ```

2. Navigate to the project directory.

   ```bash
   cd bedrock
   ```

3. Install the project dependencies using Composer.

   ```bash
   composer install
   ```

4. Configure your environment variables by copying the `.env.example` file to `.env`.

   ```bash
   cp .env.example .env
   ```

5. Edit the `.env` file and update the database connection details according to your setup.

6. Generate a unique application key.

   ```bash
   php artisan key:generate
   ```

7. Create a new database for your WordPress installation.

8. Copy the `wp-config-sample.php` file to `wp-config.php` in the project root directory.

   ```bash
   cp config/environments/development.php config/environments/production.php
   ```

9. Edit `wp-config.php` and update the database connection details with the credentials for your newly created database.

10. In your web server's document root, create a new directory for your WordPress installation.

11. Copy the contents of the `web` directory to the newly created directory in your web server's document root.

    ```bash
    cp -r web/ /path/to/wordpress/installation/
    ```

12. Open your web browser and navigate to the URL of your WordPress installation. Follow the WordPress installation wizard to complete the setup.

13. You're all set! Start developing your WordPress project using Bedrock's structured approach.

## Documentation

For more detailed documentation and usage examples, refer to the official Bedrock documentation: [https://roots.io/bedrock/docs/](https://roots.io/bedrock/docs/)

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
