# LearningPortal_Laravel-CodeAcademyProject

# The project was realized as part of the final exam for the Code Academy`s PHP/Laravel/SQL course - 2023.

# LearningPortal 
is a platform built as a multifunctional tool that includes various login roles - public, student, teacher, business, and administrator.

# Access 
to the pages and personal panels of users with different roles is achieved through a menu. The available information about the possible courses is displayed via an interactive dropdown menu.

The input data is processed through specialized forms.

# To expand the functionality of the project, REST API and Amazon Web Services are used.

# The incoming requests 
are validated through specially organized middleware and requests. Various queries are used to interact with the database, and emails are sent synchronously through a queue worker using events and event listeners, as well as a specific table.

# The project 
is implemented using PHP, Laravel, and SQL as the backend, while HTML, CSS, and JavaScript are implemented for the frontend part.

-- make sure to migrate the tables before testing LearningPortal`s functionality --
-- php artisan migrate / php artisan db:seed --
