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

		$this->view->render('students/index', false, ['students'=>$students]);
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

}