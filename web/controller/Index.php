<?php

namespace web\controller;

class Index
{
	protected $view;
	public function __construct()
	{
		$this->view = new \core\View();
	}
    public function show()
    {
    	// echo   $this->view->make('index');
        return $this->view->make('index')->with('version','版本1.0');
    }

    public function post()
    {
        echo "post";
    }
}