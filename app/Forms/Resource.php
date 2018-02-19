<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class Resource extends Form
{
    public function buildForm()
    {
        $this
            ->add('url', 'url')
            ->add('publish', 'checkbox', [
                'label' => 'Publish',
                'default_value' => 'false'
            ])
            ->add('submit', 'submit', ['label' => 'Save form' ])

            ->add('clear', 'reset', ['label' => 'Clear form']);
    }

}
