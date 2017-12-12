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

}