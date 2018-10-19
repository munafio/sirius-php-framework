<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
	
	/**
     * Disable timestamps [Created at, Updates at]
     *
     * @var boolean
     */
	public $timestamps = false;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'username','email'
	];
}