<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = array(
			'name' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
			);

		$uri = Request::path();

		if ( $uri == 'users/create'){

		$rules = [			
            'password' => 'required|min:4',
            'password-control' => 'same:password',
		];
		}

		return $rules;
	}

}
