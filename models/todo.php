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
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }
    public function setCompleted($isCompleted) {
        $this->isCompleted = $isCompleted;
        return $this;
    }
    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }
    public function setUserEmail($userEmail) {
        $this->userEmail = $userEmail;
        return $this;
    }
    public function setCreatedDate($createdDate) {
        $this->createdDate = $createdDate;
        return $this;
    }
    public function setDueDate($dueDate) {
        $this->dueDate = $dueDate;
        return $this;
    }
    public function create() {
        $db = new Database();
        $query = "INSERT INTO todos (owneremail, ownerid, createddate, duedate, message, isdone) VALUES ('$this->userEmail', $this->userId, NOW(), '$this->dueDate', '$this->title', $this->isCompleted)";
        $result = $db->query($query);
        return ['success' => true, 'msg' => 'Your todo has been saved successfully.'];
    }
    public static function edit($id, $title, $due_date) {
        $db = new Database();
        $query = "UPDATE todos SET message = '$title', duedate = '$due_date' WHERE id = $id";
        $db->query($query);
        return ['success' => true, 'msg' => 'Your todo has been edited successfully'];
    }
    public static function getTodosByUserId($id) {
        $db = new Database();
        $query = "SELECT * FROM todos WHERE ownerid = '$id' ORDER BY duedate";
        $todos = $db->query($query);
        return $todos;
    }
    public static function deleteTodoById($id) {
        $db = new Database();
        $query = "DELETE FROM todos WHERE id = $id";
        $db->query($query);
        return ['success' => true, 'msg' => 'Todo has been deleted successfully'];
    }
    
    public static function toggleCompletedById($id) {
        $db = new Database();
        $query = "UPDATE todos SET isdone = 1-isdone WHERE id = $id";
        $db->query($query);
        return ['success' => true, 'msg' => 'Your todo completion status has been updated'];
    }
}
