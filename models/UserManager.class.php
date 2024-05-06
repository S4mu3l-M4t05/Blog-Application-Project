<?php
class UserManager extends DbConnect {

    public function addUser(User $user) {
        $query = $this->db->prepare('INSERT INTO users (username, password, gender, email, avatar, status, age, firstname, lastname) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $query->execute([
            $user->getUsername(),
            $user->getPassword(),
            $user->getGender(),
            $user->getEmail(),
            $user->getAvatar(),
            $user->getStatus(),
            $user->getAge(),
            $user->getFirstname(),
            $user->getLastname()
        ]);
    }

    public function updateUser($username, $newData) {
        $query = "UPDATE users SET username = :newUsername, email = :newEmail, avatar = :newAvatar, gender = :newGender, age = :newAge, firstname = :newFirstname, lastname = :newLastname WHERE username = :oldUsername";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':newUsername', $newData['newUsername']);
        $stmt->bindParam(':newEmail', $newData['newEmail']);
        $stmt->bindParam(':newAvatar', $newData['newAvatar']);
        $stmt->bindParam(':newGender', $newData['newGender']);
        $stmt->bindParam(':newAge', $newData['newAge']);
        $stmt->bindParam(':newFirstname', $newData['newFirstname']);
        $stmt->bindParam(':newLastname', $newData['newLastname']);
        $stmt->bindParam(':oldUsername', $username);
        $stmt->execute();
    }

    public function updatePostNumber($username) {
        // Increment the post number for the user in the database
        $query = $this->db->prepare('UPDATE users SET post_number = post_number + 1 WHERE username = ?');
        $query->execute([$username]);
    }

    public function changePassword($username, $newPassword) {
        // Change the user's password in the database
        $query = $this->db->prepare('UPDATE users SET password = ? WHERE username = ?');
        $query->execute([$newPassword, $username]);
    }


    public function getAllUsers() {
        // Retrieve all users from the database and return them as an array
        $query = $this->db->query('SELECT * FROM users');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserByUsername($username) {
        // Retrieve user data from the database based on the provided username
        $query = $this->db->prepare('SELECT * FROM users WHERE username = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function verifyLogin($username, $password) {
        // Verify the login credentials against the database
        $query = $this->db->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
        $query->execute([$username, $password]);
        return $query->rowCount() > 0;
    }

    public function getLastSevenPosts() {
        // Retrieve the last 7 posts from the database and return them as an array
        $query = $this->db->query('SELECT * FROM posts ORDER BY post_date DESC LIMIT 7');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sendPost($username, $title, $content, $avatar) {
    // Insert a new post into the database for the specified user
        $query = $this->db->prepare('INSERT INTO posts (title, username, content, avatar, post_date) VALUES (?, ?, ?, ?, NOW())');
        $query->execute([$title, $username, $content, $avatar]);
    }
    public function verifyExistence($username) {
        // Check if a user exists in the database based on the provided username
        $query = $this->db->prepare('SELECT * FROM users WHERE username = ?');
        $query->execute([$username]);
        return $query->rowCount() > 0;
    }

    public function formatDate($timestamp) {
        // Format the timestamp to a human-readable date format
        return date('F j, Y, g:i a', strtotime($timestamp));
    }

    public function sendEmail($to, $subject, $message) {
        // Implement email sending logic here
        // Example: mail($to, $subject, $message);
    }
    public function getPostNumber($username) {
        $query = $this->db->prepare('SELECT post_number FROM users WHERE username = ?');
        $query->execute([$username]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['post_number'];
    }
}
