<?php
class Post {
    private $title;
    private $date;
    private $username;
    private $userAvatar;
    private $body;

    public function __construct($title, $username, $userAvatar, $body) {
        $this->title = $title;
        $this->username = $username;
        $this->userAvatar = $userAvatar;
        $this->body = $body;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getUserAvatar() {
        return $this->userAvatar;
    }

    public function getBody() {
        return $this->body;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setUserAvatar($userAvatar) {
        $this->userAvatar = $userAvatar;
    }

    public function setBody($body) {
        $this->body = $body;
    }
}
