<?php
namespace App\Custom;
class CreateTables {
    public function create_table($tablename){
        $conn = new \MySQLi('localhost', 'root', '', 'yeneta');
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "CREATE TABLE $tablename(
            id INT AUTO_INCREMENT  PRIMARY KEY, 
            course_name VARCHAR(255) NOT NULL,
            credit_hrs INT NOT NULL,
            year INT NOT NULL,
            semester VARCHAR(30) NOT NULL,
            assessment FLOAT NOT NULL,
            mid_exam FLOAT NOT NULL,
            final_exam FLOAT NOT NULL,
            total FLOAT NOT NULL,
            grade_type VARCHAR(30) NOT NULL
            )";
            
        if ($conn->query($sql) === TRUE) {
            // echo "Table employees created successfully";
        } else {
            // echo "Error creating table: " . $conn->error;
        }
        
        $conn->close();
    }
}