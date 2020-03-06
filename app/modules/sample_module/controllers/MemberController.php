<?php

namespace Test_project\Sample_module\Controllers;

use Phalcon\Db\Adapter\MongoDB\Collection as Collection;

class MemberController extends \Phalcon\Mvc\Controller
  {
    public function indexAction()
      {			
	        $mongo_client = $this->di->getShared('mongo');
	        //$mongo_client->selectDatabase('blive_data_model');
	        	        
	        $member_collection = $mongo_client->selectCollection('blive_data_model','member');
	        
	        if($this->request->isPost())
              {
                $post_parameters = $this->request->getPost();
							  $member['username'] = $post_parameters['username'];
							  $member['userpass'] = $post_parameters['userpass'];
							  $member['profile_name'] = $post_parameters['profile_name'];
							  $member['recruiter_id'] = array('member_id' => 'abcd');
							  $member['date_join_under_recruiter'] = $post_parameters['date_join_under_recruiter'];
							  $member['first_name'] = $post_parameters['first_name'];
							  $member['last_name'] = $post_parameters['last_name'];
							  $member['email'] = $post_parameters['email'];
							  $member['sex'] = $post_parameters['sex'];
							  $member['dob'] = $post_parameters['dob'];
							  $member['profile_picture_id'] = array('collection_name' => 'pictures' ,
							                                     'mime_type' => 'audio/mpeg' ,
							                                     'file_location' => 'https://www.blive.com' ,
							                                     'file_size_bytes' => 5 ,
							                                     'date_created' => 'Timestamp(1581877800, 1)' );
							  $member['top_rank_score'] = $post_parameters['top_rank_score'];
							  $member['activation_code'] = $post_parameters['activation_code'];
							  $member['qr_code'] = $post_parameters['qr_code'];
							  $member['gift_exchange_pin'] = $post_parameters['gift_exchange_pin'];
							  $member['contact_number_mobile'] = $post_parameters['contact_number_mobile'];
							  $member['gcm_notification_id'] = $post_parameters['gcm_notification_id'];
							  $member['country_code'] = $post_parameters['country_code'];
							  $member['status'] = $post_parameters['status'];
							  $member['date_created'] = $post_parameters['date_created'];
							  $member['date_updated'] = $post_parameters['date_updated'];
							  $member['role_name'] = $post_parameters['role_name'];
						    $member_collection->insert($member);   
      				} 
      				
      	  if($this->request->isGet())
      	     {
      	        $member_result = Models\Member::find();
                foreach ($member_result as $member_record) 
                {
                echo $member_record->name, "<br>";
                }			
      				  
             }
      } 
  }      
