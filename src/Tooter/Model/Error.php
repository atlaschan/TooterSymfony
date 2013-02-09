<?php

namespace Tooter\Model;

class Error
{
	private $id;
	
	private $styleClass;
	
	private $message;
	
	public function __construct($id, $styleClass, $message)
	{
		$this->id = $id;
		$this->styleClass = $styleClass;
		$this->message = $message;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function getStyleClass()
	{
		return $this->styleClass;
	}
	
	public function setStyleClass($styleClass)
	{
		$this->styleClass = $styleClass;
	}
	
	public function getMessage()
	{
		return $this->message;
	}
	
	public function setMessage($message)
	{
		$this->message = $message;
	}
}