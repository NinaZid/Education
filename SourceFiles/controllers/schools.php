<?php

class Schools extends Controller
{
	private $db = null;
	
	function __construct()	{
		parent::__construct();
		$this->db = new Database();
	}
	

	function index() {
		$schools = $this->db->query('SELECT * FROM schools;');

		$this->view->render('schools/index', false, ['schools'=>$schools]);
	}



	//view the schools
	function view() {
		$id = intval($_GET['id']);
		$students = $this->db->query('SELECT * FROM students WHERE school_id='.$id.';');

		$this->view->render('schools/view', false, ['students'=>$students]);
	}

	//Delete school
		function deleteSchool() {
		$school_id = intval($_GET['id']);

    	$this->db->query("DELETE FROM schools WHERE id = $school_id;");
    	$this->db->query('DELETE FROM students WHERE school_id = '.$school_id.';');

		// print_r($this->db->errorInfo());
    
    	header('Location: '.URL. 'schools');
	}

	//Update school info  
	function updateS() {
		$school_id = intval($_GET['id']);

		$school = $this->db->query("SELECT * FROM schools WHERE id=$school_id")->fetch();
		
		$this->view->render('schools/update', false, ['school'=>$school]);
	}

	function updateSchool() {

		$id = intval($_POST['id']);	
		$name = $this->db->quote($_POST['name']);
		$address = $this->db->quote($_POST['address']);
		$max_students = intval($_POST['max_students']);
		$fee = intval($_POST['fee']);

		$this->db->query("UPDATE schools SET name=$name, address=$address, max_students=$max_students, fee=$fee WHERE id=$id");
    	
    	header('Location: '.URL.'schools');
	}

	function addSchool() {

		// print_r($_POST);

		$name = $this->db->quote($_POST['name']);
		$address = $this->db->quote($_POST['address']);
		$max_students = intval($_POST['max_students']);
		$fee = intval($_POST['fee']);


	$this->db->query("INSERT INTO schools (name, address, max_students, fee) VALUES (".$name.", ".$address.", ".$max_students.", ".$fee.") ");
		
		header('Location: '.URL. 'schools');
	}
}