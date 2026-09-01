<?php
// application/models/Your_model.php

defined('BASEPATH') OR exit('No direct script access allowed');
// use Ramsey\Uuid\Uuid;
class modal extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        // Load necessary libraries
        $this->load->database();
        $this->db2 = $this->load->database('db2', TRUE);
        $this->db3 = $this->load->database('db3', TRUE);
    }

    public function storeTempMentorData($data) {
        // Insert data into the database
        $this->db4->insert('Temp_Mentor', $data);
        return $this->db4->insert_id(); // Return the ID of the inserted row
    }
    public function storeTempStartupData($data) {
        // Insert data into the database
        $this->db4->insert('Temp_Startup', $data);
        return $this->db4->insert_id(); // Return the ID of the inserted row
    }

    public function getTempMentorupData() {
        // Retrieve temporary startup data from the database
        $query = $this->db4->get('Temp_Mentor');
        return $query->result_array();
    }
    public function updateAcceptanceStatus($mentorId, $status,$userType) {
        // Assuming your mentors table is named 'mentors'
        // Update the acceptance_status column for the mentor with the given ID
        $this->db4->where('id', $mentorId);
        if ($userType == "2") {
            $this->db4->update('Temp_Startup', array('Acceptance_Status' => $status));
        } else {
            $this->db4->update('Temp_Mentor', array('Acceptance_Status' => $status));
        }
        
        // Check if the update was successful
        return $this->db4->affected_rows() > 0;
    }
    // In your model
    public function deleteMentor($mentorId) {
        // Assuming your mentors table is named 'mentors'
        // Delete the mentor with the given ID
        $this->db4->where('id', $mentorId);
        $this->db4->delete('Temp_Mentor');
        
        // Check if the deletion was successful
        return $this->db->affected_rows() > 0;
    }

    public function getMentorData($mentorId) {
        // Assuming your mentors table is named 'mentors'
        // Retrieve mentor data based on the ID
        return $this->db4->get_where('Temp_Mentor', array('id' => $mentorId))->row_array();
    }

    public function insertUserData($userData, $userType,$assign_mentor_id=null) {
        // $uuid = bin2hex(random_bytes(16));
         $uuid = $this->generation_id();
    
        $userDataForUsersTable = array(
            'user_id' => $uuid,
            'name' => $userData['first_name'], //create
            'contact_number' => $userData['contact_number'],//create
            'email' => $userData['email'],
            'password' => isset($userData['mentor_password']) ? $userData['mentor_password'] : $userData['startup_password'],
            'linkedin_url' => $userData['linkedin_url'],//create
            'user_type_id' => $userType, // Assuming 2 for startup //create
            'user_type'=>4,
            'mobile_no' => $userData['contact_number'],
            'user_name'=>$userData['first_name'],
            'activity_status'=>1,
            'firm_id'=>'Firm_344',//RKCA Powai office //fix as per tanmay requirement
            'linked_with_boss_id'=>'B_117395390' //fix as per tanmay requirement
        );

        $dmsUserData=array('user_type'=>3,'user_name'=>$userData['first_name'],'mobile_no'=>$userData['contact_number'],'email'=>$userData['email'],'password'=>isset($userData['mentor_password']) ? $userData['mentor_password'] : $userData['startup_password'],'activity_status'=>1,'new_menu_access'=>1);
        
        //company_id =4
        $actaiUserdata=array('user_type'=>3,'user_name'=>$userData['first_name'],'mobile_no'=>$userData['contact_number'],'email'=>$userData['email'],'password'=>isset($userData['mentor_password']) ? $userData['mentor_password'] : $userData['startup_password'],'activity_status'=>1,'new_menu_access'=>1);
        
    
        if ($userType == "1") {
            $userDataForMentorsTable = array(
                'mentor_id' => $uuid,
                'expertise' => $userData['expertise'],
                'industry' => $userData['industry'],
                'reason_for_becoming_mentor' => $userData['reason_for_becoming_mentor'],
                'expectations' => $userData['expectations'],
            );
        } 
        if ($userType == "2") {
            $userDataForstartupTable = array(
                'startup_id' => $uuid,
                'what_you_seek' => $userData['what_you_seek'],
                'assign_mentor_id' => $assign_mentor_id
            );
        }


         $mentorUsersArr = array('user_id' => $uuid,
                                'name' => $userData['first_name'], //create
                                'contact_number' => $userData['contact_number'],//create
                                'email' => $userData['email'],
                                'password' => isset($userData['mentor_password']) ? $userData['mentor_password'] : $userData['startup_password'],
                                'linkedin_url' => $userData['linkedin_url'],//create
                                'user_type_id' => $userType, // Assuming 2 for startup //create
                                );

        try {

            $this->db->insert('user_header_all', $userDataForUsersTable);
            $this->copyBoardFunctionCalling($uuid);
            $this->db4->insert('Users', $mentorUsersArr);


            if ($userType == "1") {

                $this->db4->insert('Mentors', $userDataForMentorsTable);
            } else {
                $this->db4->insert('Startups', $userDataForstartupTable);
            }

            // insert into Actai project
            $this->db2->insert('user_header_all', $actaiUserdata);
            $actaiInsertId=$this->db2->insert_id();
            $actaiTallyCompany=array('user_id'=>$actaiInsertId,'template_type'=>1,'company_id'=>104);
            $this->db2->insert('tally_user_permission',$actaiTallyCompany);

            //insert into DMS project
            $this->db3->insert('user_header_all', $dmsUserData);
            $dmsInsertId=$this->db3->insert_id();
             $dmsTallyCompany=array('user_id'=>$dmsInsertId,'template_type'=>1,'company_id'=>4);
            $this->db3->insert('tally_user_permission',$dmsTallyCompany);

            return $this->db3->affected_rows() > 0;
        } catch (Exception $e) {
            if ($e->getCode() == 1062) { // Duplicate entry error code
                return false; // Handle duplicate entry error
            } else {
                throw $e; // Re-throw other exceptions
            }
        }
    }
    

    public function getTempStartupData() {
        // Retrieve temporary startup data from the database
        $query = $this->db4->get('Temp_Startup');
        return $query->result_array();
    }
    public function getstartupData($startupId) {
        // Assuming your mentors table is named 'mentors'
        // Retrieve mentor data based on the ID
        return $this->db4->get_where('Temp_Startup', array('id' => $startupId))->row_array();
    }

    public function checkUserExists($email, $userType) {
        // Query the database to check if the email and user type combination exists
        $this->db->where('email', $email);
        // $this->db->where('user_type_id', $userType);
        $query = $this->db->get('user_header_all');

        // Check if any rows are returned
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getUsersData() {
        // Query the database to fetch users data
        $query = $this->db->get('user_header_all');
    
        // Check if any rows are returned
        if ($query->num_rows() > 0) {
            // Return the users data as an array of objects
            return $query->result();
        } else {
            // Return false if no users are found
            return false;
        }
    }

    public function getUserByEmailAndPassword($email, $password) {
      // $this->db->where('email', $email);
        // $this->db->where('password', $password);
        // $query = $this->db->get('user_header_all');
    
        // if ($query->num_rows() > 0) {
           
        //     return $query->row();
        // } else {
            
        //     return false;
        // }

        $this->db4->where('email', $email);
        $this->db4->where('password', $password);
        $query = $this->db4->get('Users');
    
        if ($query->num_rows() > 0) {
           
            return $query->row();
        } else {
            
            return false;
        }
    }
    
    
    public function getUserTypeId($email) {
        // Query the database to retrieve user type ID based on email
        $this->db->select('user_type_id');
        $this->db->where('email', $email);
        $query = $this->db->get('user_header_all');
    
        // Check if any rows are returned
        if ($query->num_rows() > 0) {
            // Return the user type ID
            $row = $query->row();
            return $row->user_type_id;
        } else {
            // Return false or any other value to indicate failure
            return false;
        }
    }

    public function getUsersWithMentors(){
        // Assuming 'users' is the table name and 'mentors' is the foreign key column
        // You would join the 'users' table with the 'mentors' table
        $this->db4->select('Users.*,Mentors.*');
        $this->db4->from('Users');
        $this->db4->where('user_type_id', 1);
        $this->db4->join('Mentors', 'Users.user_id = Mentors.mentor_id');
        $query = $this->db4->get();
        
        // Return the result
        return $query->result();
    }

    public function storeTempStartUpMentor($mentor_startup_id, $mentor_id, $startup_id, $status,$mentor_name,$startup_name) {
        // Insert data into your database
        $data = array(
            'mentor_startup_id' => $mentor_startup_id,
            'mentor_id' => $mentor_id,
            'startup_id' => $startup_id,
            'created_at' => $startup_id,
            'Startup_Name'=>$startup_name,
            'Mentor_Name'=>$mentor_name,
            'status' => $status
        );
        return $this->db->insert('Temp_Mentor_Startup', $data);
    }

    public function fetchStatus($mentorId, $userId) {
        // Fetch status from database based on $mentorId and $userId
        $this->db->select('status');
        $this->db->where('mentor_id', $mentorId);
        $this->db->where('startup_id', $userId);
        $query = $this->db->get('Temp_Mentor_Startup');
         
      echo '<pre>';  print_r($query); exit();
        // Check if query was successful
        if ($query->num_rows() > 0) {
            // Retrieve status from the first row
            $row = $query->row();
            $status = $row->status;
        } else {
            // Status not found, set to default value
            $status = 'unknown';
        }

        return $status;
    }

    public function fetchTempMentors($user_id) {
        // Fetch temp mentors from database
        $this->db->where('startup_id', $user_id);
        $query = $this->db->get('Temp_Mentor_Startup');
    
        // Check if query was successful
        if ($query) {
            // Return fetched data as array
            return $query->result_array();
        } else {
            // Return empty array or handle error as needed
            return array();
        }
    }

    public function updateMentorStartupStatus($mentor_startup_id, $new_status) {
        // Data to update
        $data = array(
            'status' => $new_status
        );
    
        // Update status in database
        $this->db->where('mentor_startup_id', $mentor_startup_id);
        $result = $this->db->update('Temp_Mentor_Startup', $data);
    
        // Return true if update was successful, false otherwise
        return $result;
    }
    public function fetchTempMentorWithId($mentor_id) {
        // Fetch temp mentor status from database based on mentor ID
        $this->db->where('mentor_id', $mentor_id);
        $query = $this->db->get('Temp_Mentor_Startup');
    
        // Check if query was successful
        if ($query) {
            // Return fetched data as array
            return $query->result_array();
        } else {
            // Return empty array or handle error as needed
            return array();
        }
    }


    public function get_startup_dashboard_data($user_id) {
        // $this->db->select('Weekly_Progress, what_you_seek, Industry, Stage, Team_Size, Website_Link, Funding_Status, Meeting_Clarity, Meeting_Value','challenges');
        $this->db->where('startup_id', $user_id);
        $query = $this->db->get('Startups');
    
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function get_mentor_dashboard_data($user_id) {
        // $this->db->select('Weekly_Progress, what_you_seek, Industry, Stage, Team_Size, Website_Link, Funding_Status, Meeting_Clarity, Meeting_Value','challenges');
        $this->db->where('mentor_id', $user_id);
        $query = $this->db->get('Mentors');
    
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
    // In your model (e.g., Progress_model.php)

    public function get_mentor_engagement($user_id) {
        $this->db->where('startup_id', $user_id);
        $query = $this->db->get('mentor_engagement');

        if ($query->num_rows() > 0) {
            return $query->result_array(); // Fetch all rows matching the user ID
        } else {
            return false;
        }
    }



    public function get_startups_by_mentor_id($mentor_id) {
        $this->db->select('startup_id');
        $this->db->distinct();
        $this->db->where('mentor_id', $mentor_id);
        $query = $this->db->get('Temp_Mentor_Startup');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    public function get_unique_industries_by_startup_id($startup_id) {
        $this->db->select('Industry');
        $this->db->distinct();
        $this->db->where('startup_id', $startup_id);
        $query = $this->db->get('Startups');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    public function get_unique_stages_by_startup_id($startup_id) {
        $this->db->select('Stage');
        $this->db->distinct();
        $this->db->where('startup_id', $startup_id);
        $query = $this->db->get('Startups');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    public function get_unique_challenges_by_startup_id($startup_id) {
        $this->db->select('challenges');
        $this->db->distinct();
        $this->db->where('startup_id', $startup_id);
        $query = $this->db->get('Startups');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    function generation_id()
    {
        $user_id = 'U_' . rand(10, 1000);
        $this->db->select('*');
        $this->db->from('user_header_all');
        $this->db->where('user_id', $user_id);
        $this->db->get();
        if ($this->db->affected_rows() > 0) {
            return $this->generation_id();
        } else {
            return $user_id;
        }
    }

    function get_all_board($user_id)
    {
        try {

            return $this->db->query("select * from board_master_data  where status='1' and  board_id in (select board_id from board_employee_mapping where recent='1' and user_id='$user_id')order by id desc")->result();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            return null;
        }
    }

    public function copyBoardFunctionCalling($user_id)
    {
        $api_url = 'https://rmt.ecovisrkca.com/Board_conrtoller/callBoardHelperFromOtherProjects';

        // Parameters to send with the POST request
        $post_data = [
            'user_id' => $user_id
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://rmt.ecovisrkca.com/Board_conrtoller/callBoardHelperFromOtherProjects',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('user_id' => $user_id),
          CURLOPT_HTTPHEADER => array(
            'Cookie: ci_session=ha1vptsbk2ot47jp8chgrfvnr71bh05u'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

        // // Initialize cURL session
        // $ch = curl_init();

        // // Set cURL options for POST request
        // curl_setopt($ch, CURLOPT_URL, $api_url);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_HEADER, false);

        // // Execute cURL session and fetch data
        // $response = curl_exec($ch);

        // // Check for cURL errors
        // if ($response === false) {
        //     $error = curl_error($ch);
        //     curl_close($ch);
        //     die('Curl error: ' . $error);
        // }

        // // Close cURL session
        // curl_close($ch);
    }
    
}
