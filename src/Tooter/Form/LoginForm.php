<?php

namespace Tooter\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginForm extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('userName', 'text');
        $builder->add('password', 'password');
		$builder->add('submit', 'submit');
    }

    public function getName()
    {
        return 'customer';
    }
	/*
	public function __construct($name = null)
	{
		$this->setAttribute('method', 'post');
		
		//add user name
		$this->add(array(
            'name' => 'userName',
            'attributes' => array(
                'type'  => 'text',
				'id'	=> 'userName',
            ),
        ));
		
		//add password
		$this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type'  => 'password',
				'id'	=> 'password',
            ),
        ));
		
		//add submit button
		$this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
				'value' => 'Go',
				'id'	=> 'submitbutton',
				'class'	=> 'btn btn-primary'
            ),
        ));
	}*/
}