<?php
 
namespace app\models;
 
use Yii;
use yii\base\Model;
 
/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
	public $first_name;
	public $mi;
	public $last_name;
	public $suffix;
	public $address;
	public $city;
	public $us_state;
	public $zip;
	public $phone;
	public $business_phone;
	public $dob;
	public $ssn;
	public $dep;
 
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
			['first_name', 'string', 'max' => 45],
			['mi', 'string', 'max' => 2],
			['last_name', 'string', 'max' => 45],
			['suffix', 'string', 'max' => 45],
			['address', 'string', 'max' => 45],
			['city', 'string', 'max' => 45],
			['us_state', 'string', 'max' => 2],
			['zip', 'string', 'max' => 10],
			['phone', 'string', 'max' => 14],
			['business_phone', 'string', 'max' => 14],
			['ssn', 'string', 'max' => 11],
			['dob', 'date', 'format' => 'php:Y-m-d'],
			
			
        ];
    }
 
 /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'password_confirm' => 'Confirm Password',
            'first_name' => 'First Name',
			'mi' => 'Middle Initial',
			'last_name' => 'Last Name',
			'suffix' => 'Suffix',
            'address' => 'Address',
            'city' => 'City',
			'us_state' => 'State',
			'zip' => 'Zipcode',
            'phone' => 'Phone',
            'business_phone' => 'Business Phone',
            'ssn' => 'SSN',
            'dob' => 'Date Of Birth',
			'dep' => 'Dependents',
            'groups' => 'Security Groups',
            'account_status' => 'Account Status',
        ];
    }
 
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
 
        if (!$this->validate()) {
            return null;
        }
 
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
		$user->first_name = $this->first_name;
		$user->mi = $this->mi;
		$user->last_name = $this->last_name;
		$user->suffix = $this->suffix;
		$user->address = $this->address;
		$user->city = $this->city;
		$user->us_state = $this->us_state;
		$user->zip = $this->zip;
		$user->phone = $this->phone;
		$user->business_phone = $this->business_phone;
		$user->ssn = $this->ssn;
		$user->dob = $this->dob;
		$user->dep = $this->dep;
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
	
	
}