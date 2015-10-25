<?php

return array(


    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Lessons',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'lessons',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'lessons',

    'columns' => array(
        'name' => array(
            'title' => 'Name',
        )
        ),
    'edit_fields' => array(
    'name' => array(
        'title' => 'Name',
        'type' => 'text'
    ),
    )
);