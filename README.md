# Nigerian British University E-Library Management System

This project is an E-Library Management System developed using Laravel for the Nigerian British University (NBU). It is designed to provide a seamless and user-friendly interface for managing digital resources for different user types: Admin, Staff, Students, and Visitors. Each user type has different levels of access to the system and its functionalities.

## Features

-   **Admin**:

    -   Manage users (Staff, Students, and Visitors)
    -   Add, edit, and delete digital resources
    -   Generate reports on resource usage
    -   Oversee system operations and configurations

-   **Staff**:

    -   Upload, edit, and manage digital resources
    -   View resource usage statistics
    -   Interact with students and visitors for resource-related inquiries

-   **Students**:

    -   Browse, search, and read resources
    -   Download available resources
    -   Interact with staff for resource-related support

-   **Visitors**:
    -   Browse and search for resources
    -   Read available resources (download access is restricted)

## Technologies Used

-   **Backend**: Laravel (PHP)
-   **Frontend**: HTML5, CSS3, Bootstrap, JavaScript
-   **Database**: MySQL
-   **Authentication**: Laravel Sanctum for user authentication and role-based access control
-   **File Storage**: Local filesystem or cloud storage (AWS S3, Google Cloud Storage)

## Installation

### Prerequisites

-   PHP >= 8.1
-   Composer
-   MySQL or any supported database
-   Web server (Apache, Nginx)
-   Node.js and npm (for asset management)

### Setup

1. Clone the repository:

    \`\`\`bash
    git clone https://github.com/coding-fortunatus/e-library.git
    \`\`\`

2. Navigate to the project directory:

    \`\`\`bash
    cd e-library
    \`\`\`

3. Install the dependencies:

    \`\`\`bash
    composer install
    npm install
    \`\`\`

4. Create a `.env` file by copying `.env.example`:

    \`\`\`bash
    cp .env.example .env
    \`\`\`

5. Generate the application key:

    \`\`\`bash
    php artisan key:generate
    \`\`\`

6. Configure the database settings in the `.env` file:

    \`\`\`
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=e_library
    DB_USERNAME=root
    DB_PASSWORD=
    \`\`\`

7. Run the migrations to create the database tables:

    \`\`\`bash
    php artisan migrate
    \`\`\`

8. Seed the database (optional):

    \`\`\`bash
    php artisan db:seed
    \`\`\`

9. Serve the application locally:

    \`\`\`bash
    php artisan serve
    \`\`\`

10. Compile the frontend assets:

    \`\`\`bash
    npm run dev
    \`\`\`

### Admin Access

To access the admin dashboard, use the following credentials after seeding the database:

-   Email: `admin@nbu.edu`
-   Password: `admin@nbu`

You can change these details in the admin panel.

## Usage

-   **Admin Dashboard**: Admins can manage all aspects of the library system, including user management, resource uploads, and system configurations.
-   **Staff Dashboard**: Staff members can upload and manage digital resources and interact with users.
-   **Student Access**: Students can browse, read, and download resources, based on the resource permissions set by the admin or staff.
-   **Visitor Access**: Visitors can browse and read resources but do not have download permissions.

## Contribution Guidelines

-   Fork the repository.
-   Create a new branch for your feature or bug fix.
-   Make your changes.
-   Submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

Developed and maintained by the Nigerian British University ICT Department.
