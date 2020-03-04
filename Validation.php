<?php

class Validation {
    private $error = null;
    
    public function validate_participant($member) {
        if (!isset($this->error)) {
            if (empty($member['name']) || empty($member['surname']) || empty($member['email'])) {
                $this->error = "Complete all required field for all mandatory members";
            } elseif (!preg_match("/^[a-zA-Z`]*$/", $member['name']) || !preg_match("/^[a-zA-Z`]*$/", $member['surname'])) {
                $this->error = "Name and surname should only consist of alphabets";
            } elseif (!filter_var($member['email'], FILTER_VALIDATE_EMAIL)) {
                $this->error = "${member['name']} ${member['surname']}'s email is invalid, please enter a valid email";
            }
            return $this->error;
        }
    }
    
    public function validate_team($team_name) {
        if (!isset($this->error)) {
            if (empty($team_name)) {
                $this->error = "Team name required";
            }
            return $this->error;
        }
    }
}

?>
