<?php

namespace Tooter\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ResetPasswordForm extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email');
		$builder->add('submit', 'submit');
    }

    public function getName()
    {
        return 'user';
    }
/*
	public function __construct($name = null)
	{
		parent::__construct('user');
		$this->setAttribute('method', 'post');
		
		//add email
		$this->add(array(
            'name' => 'email',
            'attributes' => array(
                'type'  => 'text',
				'id'	=> 'email',
            ),
        ));
		
		//add submit button
		$this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
				'class'	=> 'btn btn-primary'
            ),
        ));
	}*/
}