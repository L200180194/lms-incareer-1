<?php
class Courses
{
    private $courseId;
    private $courseName;
    private $CourseDesc;
    private $dbConn;

    public function __construct()
    {
        require_once 'DbConnect.php';
        $db = new DbConnect();
        $this->dbConn = $db->connect();
    }

    public function getCourseId()
    {
        return $this->courseId;
    }

    public function setCourseId($id)
    {
        $this->courseId = $id;
    }

    public function getCourseName()
    {
        return $this->courseName;
    }

    public function setCourseName($name)
    {
        $this->courseName = $name;
    }
    public function getCourseDesc()
    {
        return $this->CourseDesc;
    }

    public function setCourseDesc($desc)
    {
        $this->CourseDesc = $desc;
    }

    public function getAllCourse()
    {
        $stmnt = $this->dbConn->prepare(
            'SELECT * FROM courses'
        );


        try {
            if ($stmnt->execute()) {
                $allCourse = $stmnt->fetch(PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $allCourse;
    }
}
