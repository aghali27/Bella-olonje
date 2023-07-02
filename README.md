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
   git clone https://github.com/aghali27/Bella-olonje.git
   ```

2. Navigate to the project directory.

   ```bash
   cd Bella Olonje
   ```

3. Install the project dependencies using Composer.

   ```bash
   composer install
   ```

4. Configure your environment variables by copying the `.env.example` file to `.env`.

   ```bash
   cp .env.example .env
   ```

5. Copy the database file from DB folder and setup in phpmyadmin.

6. Edit the `.env` file and update the database connection details according to your setup.

7. Update `.env` file, `bud.config.js` file and wp_options table with URL for e.g. http://bella-olonje.local.

8. In your web server's document root, select the project directory for e.g. `/Sites/Bellaolonje/web`.

9. Open your web browser and navigate to the URL of your WordPress.

10. You're all set!.
