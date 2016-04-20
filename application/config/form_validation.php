<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function check_default($post_string)
{
	
  return $post_string == '0' ? FALSE : TRUE;
}

	
$config = array(

     
	 'registration' => array(
                 array(
                     'field'=>'useremail',
                     'label'=>'Useremail',
                     'rules'=>'trim|required|valid_email|is_unique[login.useremail]'
                ),
                 array(
                     'field'=>'password',
                     'label'=>'Password',
                     'rules'=>'trim|required|min_length[8]|max_length[16]'
                ),
                 array(
                     'field'=>'repassword',
                     'label'=>'Confirm  Password',
                     'rules'=>'trim|required|matches[password]'
                ),
                array(
                     'field'=>'fname',
                     'label'=>'First name',
                     'rules'=>'trim|required|min_length[1]|max_length[50]|alpha'
                ),
                array(
                     'field'=>'lname',
                     'label'=>'Last name',
                     'rules'=>'trim|required|min_length[1]|max_length[50]|alpha'
                ),
                array(
                     'field'=>'phone_no',
                     'label'=>'Phone Number',
                     'rules'=>'trim|required|numeric'
                ),
		
                array(
                     'field'=>'city',
                     'label'=>'City',
                     'rules'=>'trim|required|'
                )
     ),

    'login' => array(
                array(
                    'field'     => 'client_id',
                    'label'     => 'client id',
                    'rules'     => 'trim|required'
                    ),
                array(
                    'field'     => 'password',
                    'label'     => 'Password',
                    'rules'     => 'required|md5'
                )
    ),

	 'changepassword' => array(
                array(
				    
                    'field'     => 'current_password',
                    'label'     => 'Current Password',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'first_password',
                    'label'     => 'New Password',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'second_password',
                    'label'     => 'Confirm New Password',
                    'rules'     => 'trim|required'
                )

     ),

    'password' => array(
               array(
                    'field'     => 'pass',
                    'label'     => 'Password',
                    'rules'     => 'required|min_length[6]|md5'
                )
    ),
	 
	'forget_pwd' => array(
                array(
                    'field'     => 'client_id',
                    'label'     => 'Client ID',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'registered_email_address',
                    'label'     => 'Email Address',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'registered_phone',
                    'label'     => 'Phone NO.',
                    'rules'     => 'trim|required'
                )
     ),
	'testimonialvalid' => array(
	             array(
					 'field'=>'tesname',
					 'label'=>'Name',
					 'rules'=>'trim|required'
	            ),
	             array(
					 'field'=>'tesemail',
					 'label'=>'Email',
					 'rules'=>'trim|required|valid_email'
	            ),
				 array(
					 'field'=>'tesarea',
					 'label'=>'Testimonial Text',
					 'rules'=>'trim|required'
	            )
    ),
	 'newsletter' => array(
	             array(
					 'field'=>'user_email',
					 'label'=>'Email',
					 'rules'=>'trim|required|valid_email'
	            )
    ),
	'setting' => array(
	             array(
					 'field'=>'current_password',
					 'label'=>'Password',
					 'rules'=>'trim|required'
	            ),
	             array(
					 'field'=>'new_password',
					 'label'=>'Password',
					 'rules'=>'trim|required'
	            ),
				 array(
					 'field'=>'confirm_new_password',
					 'label'=>'Password',
					 'rules'=>'trim|required|matches[new_password]'
	            )
    ),
	 'checkemail' => array(
	             array(
					 'field'=>'user_email',
					 'label'=>'Email',
					 'rules'=>'trim|required|valid_email'
	            )
    ),
	 'newsletter_setting' => array(
	             array(
					 'field'=>'update_newsletter_email',
					 'label'=>'Email',
					 'rules'=>'trim|required|valid_email'
	            )
    ),
	 'active_newsletter' => array(
	             array(
					 'field'=>'user_email',
					 'label'=>'Email',
					 'rules'=>'trim|required|valid_email'
	            ),
				 array(
					 'field'=>'userename',
					 'label'=>'User Name',
					 'rules'=>'trim|required'
	            )
    ),
	 'referfriend' => array(
	             array(
					 'field'=>'name',
					 'label'=>'Name',
					 'rules'=>'trim|required'
	            ),
				 array(
					 'field'=>'email',
					 'label'=>'Email',
					 'rules'=>'trim|required||valid_email'
	            ),
				 array(
					 'field'=>'Femail',
					 'label'=>'Friend Email',
					 'rules'=>'trim|required|valid_email'
	            ),
				 array(
					 'field'=>'comment',
					 'label'=>'Comment',
					 'rules'=>'trim|required|'
	            )
    ),
	 
	'addbalancerequest' => array(
                array(
                    'field'     => 'agency_name',
                    'label'     => 'Agency Name',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'curr_balance_amount',
                    'label'     => 'Current Balance Amount',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'req_for_amount',
                    'label'     => 'Request for amount',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'payment_date',
                    'label'     => 'Payment Date',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'payment_mode',
                    'label'     => 'Payment Mode',
                    'rules'     => 'selected[payment_mode]'
                )
     ),
	 'addblogcategory' => array(
                array(
                    'field'     => 'category_name',
                    'label'     => 'Category Name',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'category_slug',
                    'label'     => 'Category Slug',
                    'rules'     => 'trim|required'
                ),
				
     ),
	  'addblog' => array(
                array(
                    'field'     => 'blog_title',
                    'label'     => 'Blog Title',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'blog_content',
                    'label'     => 'Blog Content',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'blog_category[]',
                    'label'     => 'Blog Category',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'blog_author',
                    'label'     => 'Blog Author Name',
                    'rules'     => 'trim|required'
                ),
				
     ),
	 'aboutUs' => array(
                array(
                    'field'     => 'title',
                    'label'     => 'Title',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'content',
                    'label'     => 'Content',
                    'rules'     => 'trim|required'
                ),
				
     ),
	  'contactUs' => array(
                array(
                    'field'     => 'title',
                    'label'     => 'Title',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'address',
                    'label'     => 'Address',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'phone',
                    'label'     => 'Contact Number',
                    'rules'     => 'trim|required'
                ),
				array(
                    'field'     => 'email',
                    'label'     => 'Email',
                    'rules'     => 'trim|required|valid_email'
                ),
				
     )
	
)

?>