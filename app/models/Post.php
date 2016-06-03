<?php

Class Post extends Eloquent {

    protected $table = 'posts';

    public static $rules = array(
        'title'      => 'required|max:100',
        'content'       => 'required|max:10000'
    );
    
}