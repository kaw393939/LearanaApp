<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class Registration extends Form
{
    public function buildForm()
    {
        $this

            ->add('submit', 'submit', ['label' => 'Register' ]);
    }
}
