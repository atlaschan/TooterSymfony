<?php

namespace Tooter\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TootForm extends AbstractType
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
		parent::__construct('toot');
		$this->setAttribute('method', 'post');
		
		//add toot message
		$this->add(array(
            'name' => 'tootMessage',
            'attributes' => array(
                'type'  => 'text',
				'id'	=> 'tootMessage',
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