<?php
require 'functions.php';
// Todo Application
//
// Task, Comment, User



Class Task {

	public $description;

	public $completed =false;

	public function __construct($description)
	{
		//Automically triggered on instantiation
		$this ->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}

	public function notComplete()
	{
		$this->completed = false;
	}

	public function isComplete()

	{
		return $this->completed;
	}
	
}

$tasks = [
	new task('Go to the store'), // 0
	new task ('Finish my screencast'), // 1
	new task ('Clean my room') // 2
];

$tasks[0]->complete();

//$task = New task('Go to the store'); // a new task object

//$task->complete(); // complete the task
//dd($task);
//var_dump($task->isComplete()); 

require 'index.view.php';

