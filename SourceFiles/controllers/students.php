<?php

class Students extends Controller
{
	private $db = null;
	
	function __construct()	{
		parent::__construct();
		$this->db = new Database();
	}
	

	//View the schools and the students
	function view() {
		$id = intval($_GET['id']);
		$student = $this->db->query('SELECT * FROM students WHERE id='.$id.';')->fetch();

		$school = $this->db->query('SELECT * FROM schools WHERE id='.$student['school_id'].';')->fetch();

		$this->view->render('students/view', false, ['student'=>$student, 'school'=>$school]);
	}

	//Getting the students
	function index() {
		$students = $this->db->query('SELECT * FROM students ORDER BY first_name ASC;');
			$schools = $this->db->query("SELECT * FROM schools");

		$this->view->render('students/index', false, ['students'=>$students, 'schools'=>$schools]);

	}


	//Delete student
		function delete() {
		$id = intval($_GET['id']);

    	$this->db->query("DELETE FROM students WHERE id = $id;");

    	header('Location: '.$_SERVER['HTTP_REFERER']);
	}


	//Update student info  
	function update() {
		$id = intval($_GET['id']);

		$student = $this->db->query("SELECT * FROM students WHERE id=$id")->fetch();
		$schools = $this->db->query("SELECT * FROM schools");

		$this->view->render('students/update', false, ['student'=>$student, 'schools'=>$schools]);
	}

	function updatestudent() {
		$id = intval($_POST['id']);
		$first_name = $this->db->quote($_POST['first_name']);
		$last_name = $this->db->quote($_POST['last_name']);
		$birthday = $this->db->quote($_POST['birthday']);
		$school_id = intval($_POST['school_id']);

		$this->db->query("UPDATE students SET first_name=$first_name, last_name=$last_name, birthday=$birthday, school_id=$school_id WHERE id=$id");
    	
    	header('Location: '.URL.'students');
	}


	//Adding new student
	function add() {

		// print_r($_POST);

		$first_name = $this->db->quote($_POST['first_name']);
		$last_name = $this->db->quote($_POST['last_name']);
		$birthday = $this->db->quote($_POST['birthday']);
		$school_id = intval($_POST['school_id']);
		// $image = $this->db->quote($_POST['image']);

		//inserting image
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;


		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
   			 echo "Sorry, your file was not uploaded.";

		// if everything is ok, try to upload file
			} else {
   					 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       					 echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  						  } else {
       						 echo "Sorry, there was an error uploading your file.";
  				  }
			}
		
			$target_file = $this->db->quote($target_file);
		$this->db->query("INSERT INTO students (first_name, last_name, birthday, school_id, image) VALUES (".$first_name.", ".$last_name.", ".$birthday.", ".$school_id.", ".$target_file.") ");
		
// print_r($_FILES,true);
// 		print_r($this->db->errorInfo());

		header('Location: '.URL. 'students');

		}
}
