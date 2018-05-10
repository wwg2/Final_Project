<?php
class Todo {
    private $id;
    private $title;
    private $isCompleted;
    private $userId;
    private $userEmail;
    private $dueDate;
    private $createdDate;
    //Getters
    public function getId() {
        return $this->id;
    }
    public function getTitle() {
        return $this->title;
    }
    public function isCompleted() {
        return $this->isCompleted;
    }
    public function getUserId() {
        return $this->userId;
    }
    public function getUserEmail() {
        return $this->userEmail;
    }
    public function getCreatedDate() {
        return $this->createdDate;
    }
    public function getDueDate() {
        return $this->createdDate;
    }
