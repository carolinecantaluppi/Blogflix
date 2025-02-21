# Blogflix

Blogflix is a web application designed for movie enthusiasts to share and discuss their favorite films. Users can create, read, update, and delete (CRUD) posts, each accompanied by images. The project leverages modern web technologies to provide a seamless experience.

## Features

- **User Authentication**: Secure login and registration system.
- **CRUD Operations**: Create, read, update, and delete blog posts with ease.
- **Image Uploads**: Enhance posts by uploading and displaying images.
- **Responsive Design**: Optimized for various devices using Bootstrap.

## Technologies Used

- **Backend**: PHP with the Laravel framework.
- **Frontend**: HTML, CSS, and Bootstrap for responsive design.
- **Database**: MySQL for data storage and management.

## Installation

To set up the project locally, follow these steps:

1. **Clone the Repository**:
   git clone https://github.com/carolinecantaluppi/Blogflix.git
   cd Blogflix

2. **Install Dependencies**:
    Ensure you have Composer installed, then run:
    composer install

3. **Environment Configuration**:
    Duplicate the .env.example file and rename it to .env.
    Update the .env file with your database credentials and other configurations.

4. **Generate Application Key:**
    php artisan key:generate

5. **Run Migrations: Set up the database tables:**
    php artisan migrate

6. **Serve the Application: Start the development server:**
    php artisan serve

7. **The application will be accessible at:**
    http://localhost:8000.

## Usage

- **Register/Login**: Create an account or log in with existing credentials.
- **Create Post**: Navigate to the "Create Post" section to share a new movie review or article.
- **Manage Posts**: Edit or delete your posts as needed.
- **Browse Posts**: View posts from other users and engage with the community.

