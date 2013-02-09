<?php

namespace Tooter\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SignUpForm extends AbstractType
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
		parent::__construct('customer');
		$this->setAttribute('method', 'post');
		
		//add user name
		$this->add(array(
            'name' => 'firstName',
            'attributes' => array(
                'type'  => 'text',
				'id'	=> 'firstName',
            ),
        ));
		
		//add last name
		$this->add(array(
            'name' => 'lastName',
            'attributes' => array(
                'type'  => 'text',
				'id'	=> 'lastName',
            ),
        ));
		
		//add email
		$this->add(array(
            'name' => 'email',
            'attributes' => array(
                'type'  => 'text',
				'id'	=> 'email',
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
		
		//add confirmPassword
		$this->add(array(
            'name' => 'confirmPassword',
            'attributes' => array(
                'type'  => 'password',
				'id'	=> 'confirmPassword',
            ),
        ));
		
		//add groupUrl
		$this->add(array(
            'name' => 'groupUrl',
            'attributes' => array(
                'type'  => 'radio',
				'id'	=> 'groupUrl',
            ),
        ));
		
		//add submit button
		$this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
				'id'	=> 'submitbutton',
				'class'	=> 'btn btn-primary'
            ),
        ));
	}*/
}