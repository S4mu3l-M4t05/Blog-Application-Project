# Blog Application

Welcome to my final project, the Blog Application! This project aims to create a user-friendly platform for blogging, allowing users to register, log in, post comments, and edit their profiles. Below, you'll find all the necessary information to understand and utilize this application effectively.

## Overview

The Blog Application follows the Model-View-Controller (MVC) architecture and is implemented using Object-Oriented Programming (OOP) principles. It provides functionalities for user management, post management, and database connectivity.

## Implementation

### Model Classes

In the `models` folder, I've implemented the following classes:
- **User**: Handles user-related functionalities.
- **Post**: Manages post-related functionalities.
- **Database Connection**: Manages the database connection.
- **User/Post Manager**: Manages user operations, including user validation, password hashing, and post management.

### Controller

The `controllers` folder contains a separate file to handle user interactions, route requests, and interact with views and models.

### View Templates

The view part includes templates for:
- Home
- Post
- Profile
- User list pages

Additionally, I've implemented a registration modal with form fields for user registration, including gender, first name, last name, username, email, password, confirmation, and avatar.

### Form Validation

Form validation is implemented for all user input fields in the registration and edit profile forms. The avatar image is validated for correct file type and size (100KB).

### Home Page

- Displays a maximum of 6 posts on the home page, sorted from newest to oldest.
- Shows post attributes such as title, date, username, user avatar, and body.
- Date is displayed in the specified format.

### Sidebar

- A sidebar displays the logged-in user's avatar, username, number of posts, and a logout button.

### User List & User Cards

- Implements a user list view that displays information about all users.
- User cards are created to display usernames, avatars, and other relevant information.

### Inactive Users & Activation

- Logic tracks login attempts and sets a user as inactive after three failed login attempts.
- Sends an email with a random number for reactivation.