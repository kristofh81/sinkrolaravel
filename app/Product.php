<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {

	protected $table = 'products';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $guarded = array('user_id');
	protected $fillable = array('product_type');


	/**
	 * 	Eloquent Relation
	 *	Products belong to User
	 * 
	 */

	public function users()
	{
		return $this->belongsTo('App\User');
	}

}