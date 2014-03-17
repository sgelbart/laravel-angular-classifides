<?php

/**
 * An Eloquent Model: 'Ad'
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Ad extends \Eloquent {

	// All fields required
	public static $rules = [
        'title' => 'required',
        'body' => 'required'
    ];

    protected $guarded = array('id');

}