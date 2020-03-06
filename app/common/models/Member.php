<?php

namespace Test_project\Models;

use Phalcon\Db\Adapter\MongoDB;

class Member extends Collection
{
		  public $username;
		  public $userpass;
		  public $profile_name;
		  public $recruiter_id;
		  public $date_join_under_recruiter;
		  public $first_name;
		  public $last_name;
			public $email; 
			public $sex;
			public $dob;
			public $profile_picture_id; 
			public $top_rank_score; 
			public $activation_code;
			public $qr_code;
			public $gift_exchange_pin;
			public $contact_number_mobile;
			public $gcm_notification_id;
			public $country_code;
			public $status; 
			public $date_created;
			public $date_updated; 
			public $role_name;
			 
    public function initialize()
    {
        $this->setSource('Member');
    }
    
}
