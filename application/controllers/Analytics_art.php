<?php
defined('BASEPATH') OR exit('No direct script access allowed');


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require_once ('assets/src/Exception.php');
require_once ('assets/src/PHPMailer.php');
require_once ('assets/src/SMTP.php');

class Analytics_art extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->vars(array('base_url' => base_url()));
		$this->load->library('email');
		$this->load->library('session'); // Load the session library
		$this->load->model('modal');
        $this->load->model('MasterModel');
        $this->db4 = $this->load->database('db4', true);

        set_timezone();

        // Prevent browser from caching sensitive pages
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
            
    }
	
	
	public function send($userType = null, $aa_userId = null, $aaEmail = null) {

        // print_r($_POST);die;
		$otp = mt_rand(100000, 999999); // Generate a 6-digit OTP

        // Get email from form submission
        if($userType == 4){
        	$email = $aaEmail;
		}
        else{
			$email = $this->input->post('email');
		}

      $from_email = 'mentor@ecovisrkca.com'; //change this to yours
        //  $from_email = 'asmita.sagare@gbtech.in'; //change this to yours
        $this->load->library('email');
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'vashi.rkca.net'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number 587 on server
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = 'Mentor@123$'; // Your email password
        //  $config['smtp_pass'] = 'Asmita@123$'; // Your email password
        $config['smtp_crypto'] = 'ssl';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
    
        //send mail
        $this->email->from($from_email, 'Mentor-Bi Registration');
        // $this->email->to($to);
        // $this->email->subject($subject);
        // $this->email->message($message);

		$this->email->to($email);
        $this->email->subject('OTP Verification');
        $this->email->message('Your OTP is: ' . $otp);
		if ($this->email->send()) {
			if($userType == 4){
				$created_on = date('Y-m-d H:i:s');
				$valid_upto = date('Y-m-d H:i:s', strtotime($created_on . ' +5 minutes'));

				$otpArray = array(
					'user_id'    => $aa_userId,
					'email'    	 => $email,
					'otp'        => $otp,
					'created_on' => $created_on,
					'valid_upto' => $valid_upto,
					'is_valid' 	 => 1,
				);
//				echo"<pre>";print_r($otpArray);exit();

				$insertOTP = $this->db4->insert('otp_master', $otpArray);

				$response['success'] = true;
				$response['otp'] = $otp;

				return $response;
				exit();
			}

            $this->session->set_userdata('otp', $otp);
            $response['success'] = true;
            $response['otp'] = $otp;
        } else {
            // Email sending failed
            $response['success'] = false;
            $response['message'] = 'Failed to send OTP. Please try again later.';
        }

        // Send response as JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    //--user registration starts Analytics Arts---
	public function aa_research() {
		$this->load->view('aa_research');
	}

    public function aa_otp_verification() {
        $id = $this->input->get('id');
        $data['id'] = $id;
        $this->load->view('aa_otp_verification',$data);

        // $query = $this->MasterModel->_select1('aa_users',array('id'=>$id),'*');

        // if($query->totalCount>0)
        // {
        //     $query_data = $query->data;

        //     if($query_data->activity_status==0)
        //     {
        //         $data['id'] = $id;
        //         $data['email'] = $query_data->email;
        //         $this->load->view('aa_otp_verification',$data);
        //     }else{

        //         redirect(base_url('aa_research'));
        //     }

        // }else{

        //     redirect(base_url('aa_research'));
        // }
        
	}

	public function aa_landing_page() {
		$this->load->view('aa_landing_page');
	}

	public function aaUserRegisteration(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
       
		$phone_no = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$age = $this->input->post('age');
		$profession = $this->input->post('profession');
		$highestQualification = $this->input->post('qualification');
		$residence = $this->input->post('residence');
		$linkedIn_url = $this->input->post('linkedin');

        /*---for check Password--*/
        // $plainPassword = 1234565;
        // if (password_verify($plainPassword, $hashedPassword)) {
        //     echo "Password is correct!";
        // } else {
        //     echo "Invalid password!";
        // }

		if((!is_null($name) && !empty($name)) && (!is_null($email) && !empty($email)) && (!is_null($password) && !empty($password))
			&& (!is_null($phone_no) && !empty($phone_no)) && (!is_null($gender) && !empty($gender)) && (!is_null($age) && !empty($age))
			&& (!is_null($profession) && !empty($profession)) && (!is_null($highestQualification) && !empty($highestQualification))
			&& (!is_null($residence) && !empty($residence))){

			$checkExists = $this->db4->query('select * from aa_users where email = "'.$email.'" and activity_status = 1');
			$result = $checkExists->result_array();
//			echo"<pre>";print_r($result);exit();
			if(count($result) > 0){

				$response['status'] = 201;
				$response['body'] = "User for this Email already exists. Please enter another Email";

				echo json_encode($response);
				exit();
			}

			$insertArray = array(
				'name'						=> $name,
				'email'						=> $email,
				'password'					=> $hashedPassword,
				'phone_no'					=> $phone_no,
				'gender'					=> $gender,
				'age'						=> $age,
				'profession'				=> $profession,
				'highest_qualification'		=> $highestQualification,
				'current_city_of_residence'	=> $residence,
				'linkedin_url'				=> $linkedIn_url,
				'user_type'					=> 4,
				'activity_status'			=> 0
			);

//			echo"<pre>";print_r($insertArray);exit();

            $checkEntryExists = $this->db4->query('select * from aa_users where email = "'.$email.'" and activity_status = 0');
            $result1 = $checkEntryExists->result_array();
            
            if(count($result1) > 0){
                foreach($result1 as $val1)
                {

                    $delete = $this->MasterModel->_delete1('aa_users',array('id'=>$val1['id']));
                }
            }

			$insertAAUsers = $this->db4->insert('aa_users',$insertArray);
			if($this->db4->affected_rows()>0){
				$userId = $this->db4->insert_id();
	//			echo"<pre>";print_r($userId);exit();

				$sendOTP = $this->send(4, $userId, $email);

				if($sendOTP['success'] == true){

					$response['status'] = 200;
					$response['userId'] = $userId;
					$response['email'] = $email;
					$response['password'] = $password;
					$response['body'] = "OTP send Successfully. Please Check your Email";

				}
				else{
					$response['status'] = 201;
					$response['body'] = "Error While generating OTP. Please try again.";
				}
			}
		}
		else{

			$response['status'] = 201;
			$response['body'] = "Please fill all the Required Fields";
		}
		echo json_encode($response);
	}

	public function verifyAA_otp(){
		$otp = $this->input->post('otp');
        $userId = $this->input->post('user_id');
		// $email = $this->input->post('email');
		$registerStatus = 0;

		$current_time = date('Y-m-d H:i:s');
		// $checkOTP = $this->db4->query('select * from otp_master where user_id = '.$userId.' and email = "'.$email.'" and otp = "'.$otp.'" and is_valid = 1 and "'.$current_time.'" BETWEEN created_on and valid_upto');

        $checkOTP = $this->db4->query('select * from otp_master where user_id = '.$userId.' and otp = "'.$otp.'" and is_valid = 1 and "'.$current_time.'" BETWEEN created_on and valid_upto');
		$result = $checkOTP->result_array();

		if(count($result) > 0){

			$updateStatus = $this->db4->query('update aa_users set activity_status = 1 where id = '.$userId);
			if($this->db4->affected_rows()>0){
				$registerStatus = 1;

				$response['status'] = 200;
				$response['registerStatus'] = $registerStatus;
				$response['body'] = "Registration Successful!";
			}
			else{
				$response['status'] = 201;
				$response['registerStatus'] = $registerStatus;
				$response['body'] = "This User Is Already Verified!";
			}
		}
		else{
			$response['status'] = 201;
			$response['registerStatus'] = $registerStatus;
			$response['body'] = "Invalid OTP entered!";
		}

		echo json_encode($response);
	}

    public function resendAA_otp()
    {
        
        $user_id = $this->input->post('user_id');
        $query = $this->MasterModel->_select1("aa_users",array('id'=>$user_id,'activity_status'=>0),'*');

        if($query->totalCount>0)
        {

            $queryCheck = $this->MasterModel->_rawQuery1("select * from otp_master where user_id=$user_id");

            if($queryCheck->totalCount>0)
            {
                $update = $this->MasterModel->_update1('otp_master',array('is_valid'=>0),array('user_id'=>$user_id));
            }

            $email = $query->data->email;
            $sendOTP = $this->send(4, $user_id, $email);

                if($sendOTP['success'] == true){

                    $response['status'] = 200;
                    $response['userId'] = $user_id;
                    $response['email'] = $email;
                    // $response['password'] = $password;
                    $response['body'] = "OTP send Successfully. Please Check your Email!";

                }
                else{
                    $response['status'] = 201;
                    $response['body'] = "Error While generating OTP. Please try again!";
                }

        }else{

            $response['status'] = 201;
            $response['body'] = "This User Is Already Verified!";
        }

        echo json_encode($response);
    }



}
