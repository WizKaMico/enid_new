<?php
require_once "DBController.php";

class portalController extends DBController
{
    function designation()
    {
      $query = "SELECT * FROM tbl_user_designation TUD";
      $availDesignation = $this->getDBResult($query);
      return $availDesignation;
    } 

    function userLogin($password, $uid, $role)
    {
        $query = "SELECT * FROM tbl_user_information TUI LEFT JOIN tbl_user_designation TUD ON TUI.designation = TUD.did WHERE TUI.uid = ? AND TUD.role = ? AND TUI.password = ?";

        $params = array(
           
           array(
               "param_type" => "s",
               "param_value" => $uid
           ),
           array(
            "param_type" => "s",
            "param_value" => $role
           ),
           array(
            "param_type" => "s",
            "param_value" => $password
           )
       );
       
       $userCredentials = $this->getDBResult($query, $params);
       return $userCredentials;
    }


    function saveTokenToDatabase($user_id, $token)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO tbl_user_remember_me_tokens (user_id,token,expiration_date)
        VALUES (?,?,?)"; 

        $params = array(
                   
            array(
                "param_type" => "i",
                "param_value" => $user_id
            ),
            array(
                "param_type" => "s",
                "param_value" => $token
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d H:i:s', strtotime('+30 days'))
            )
        );
        $this->insertDB($query, $params);
    }

    function generatedMailValidation($email, $uid, $code)
    {
        date_default_timezone_set('Asia/Manila');
        
        $query = "INSERT INTO tbl_user_security (uid,email,code,status,date_created) VALUES (?,?,?,?,?)"; 

        $params = array(
                   
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "i",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => 'UNUSED'
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        $this->insertDB($query, $params);
    }

    function getUserDetails($session_id)
    {
        $query = "SELECT * FROM tbl_user_information TUI LEFT JOIN tbl_user_designation TUD ON TUI.designation = TUD.did WHERE TUI.user_id = ?";

        $params = array(
           
           array(
               "param_type" => "i",
               "param_value" => $session_id
           )
       );
       
       $userCredentials = $this->getDBResult($query, $params);
       return $userCredentials;
    }

    function checkTheActiveSchoolYear()
    {
        $query = "SELECT * FROM `tbl_user_school_year` WHERE status = 'ACTIVATED'";
       $userCredentials = $this->getDBResult($query);
       return $userCredentials;
    }


    function getStudentDetails($uid)
    {
        $query = "SELECT * FROM tbl_user_information TUI LEFT JOIN tbl_user_designation TUD ON TUI.designation = TUD.did LEFT JOIN tbl_school_student_record TSSR ON TUI.uid = TSSR.uid LEFT JOIN tbl_school_year_details_section TSYDS ON TSSR.current_section = TSYDS.sid 
        LEFT JOIN  tbl_school_year_details_grade TSYDG ON TSYDG.gid = TSSR.current_level
        WHERE TUI.uid = ?";

        $params = array(
           
           array(
               "param_type" => "s",
               "param_value" => $uid
           )
       );
       
       $userCredentials = $this->getDBResult($query, $params);
       return $userCredentials;
    }

    function studentEnrollmentConsent($uid, $sycode, $confirm)
    {
        $query = "INSERT INTO tbl_student_confirmation_for_enrollment (uid,sycode,confirm) VALUES (?,?,?)"; 

        $params = array(    
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "s",
                "param_value" => $confirm
            )
        );
        $this->insertDB($query, $params);
    }

    function studentEnrollmentConsentChecking($uid)
    {
        $query = "SELECT * FROM tbl_student_confirmation_for_enrollment TSCFE WHERE TSCFE.uid = ?";

        $params = array(
           
           array(
               "param_type" => "s",
               "param_value" => $uid
           )
       );
       
       $userCredentials = $this->getDBResult($query, $params);
       return $userCredentials;
    }

    function validateSecurity($code, $uid)
    {
        $query = "SELECT * FROM tbl_user_security TUS WHERE TUS.uid = ? AND TUS.code = ?";

        $params = array(
           
           array(
               "param_type" => "s",
               "param_value" => $uid
           ),array(
            "param_type" => "i",
            "param_value" => $code
           )
       );
       
       $userCredentials = $this->getDBResult($query, $params);
       return $userCredentials;
    }

    function updateSecurity($code, $uid)
    {
        $query = "UPDATE tbl_user_security TUS SET TUS.status = ? WHERE TUS.uid = ? AND TUS.code = ?"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => 'USED'
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );

        $this->updateDB($query, $params);
    }

    function addSchoolYear($year_from, $year_to, $sycode)
    {
        date_default_timezone_set('Asia/Manila');
        
        $query = "INSERT INTO tbl_user_school_year (year_from,year_to,sycode,date_created) VALUES (?,?,?,?)"; 

        $params = array(
                   
            array(
                "param_type" => "s",
                "param_value" => $year_from
            ),
            array(
                "param_type" => "s",
                "param_value" => $year_to
            ),
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        $this->insertDB($query, $params);
    }

    function getYear()
    {
        $query = "SELECT * FROM tbl_user_school_year TUS";
        $yearCreated = $this->getDBResult($query);
        return $yearCreated;
    }

    function getSchoolYearDetails($sycode)
    {
        $query = "SELECT * FROM tbl_user_school_year TUS WHERE TUS.sycode = ?";

        $params = array( 
           array(
               "param_type" => "i",
               "param_value" => $sycode
           )
       );
       
       $userSchoolYear = $this->getDBResult($query, $params);
       return $userSchoolYear;
    }

    function addGradeSchoolYear($sycode, $grade)
    {
        $query = "INSERT INTO tbl_school_year_details_grade (sycode,grade) VALUES (?,?)"; 

        $params = array(
                   
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "s",
                "param_value" => $grade
            )
        );
        $this->insertDB($query, $params);
    }

    function getSchoolYearDetailsGrade($sycode)
    {
        $query = "SELECT * FROM tbl_school_year_details_grade TSYDG WHERE TSYDG.sycode = ?";

        $params = array( 
           array(
               "param_type" => "i",
               "param_value" => $sycode
           )
       );
       
       $userSchoolYearGrade = $this->getDBResult($query, $params);
       return $userSchoolYearGrade;
    }

    function getSchoolYearDetailsGradeSpecificEdit()
    {
        $query = "SELECT * FROM tbl_school_year_details_grade TSYDG WHERE TSYDG.sycode IN (SELECT TUSY.sycode FROM tbl_user_school_year TUSY WHERE TUSY.status = 'ACTIVATED')";
        $checkSpecificResult = $this->getDBResult($query);
        return $checkSpecificResult;
    }

    function getSchoolYearDetailsGradeFresh($sycode)
    {
        $query = "SELECT * FROM tbl_school_year_details_grade TSYDG WHERE TSYDG.sycode = ?";

        $params = array( 
           array(
               "param_type" => "i",
               "param_value" => $sycode
           )
       );
       
       $userSchoolYearGrade = $this->getDBResult($query, $params);
       return $userSchoolYearGrade;
    }

    function addSectionSchoolYear($sycode, $gid, $section_name, $min, $max, $student_max)
    {
        $query = "INSERT INTO tbl_school_year_details_section (gid,sycode,section_name,min,max,student_max) VALUES (?,?,?,?,?,?)"; 

        $params = array(
                   
            array(
                "param_type" => "i",
                "param_value" => $gid
            ),
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "s",
                "param_value" => $section_name
            ),
            array(
                "param_type" => "i",
                "param_value" => $min
            ),
            array(
                "param_type" => "i",
                "param_value" => $max
            ),
            array(
                "param_type" => "i",
                "param_value" => $student_max
            )
        );
        $this->insertDB($query, $params);
    }

    function getSchoolYearDetailsSection($sycode)
    {
        $query = "SELECT * FROM tbl_school_year_details_section TSYDC LEFT JOIN tbl_school_year_details_grade TSYDG ON TSYDC.gid = TSYDG.gid  WHERE TSYDC.sycode = ?";

        $params = array( 
           array(
               "param_type" => "i",
               "param_value" => $sycode
           )
       );
       
       $userSchoolYearGrade = $this->getDBResult($query, $params);
       return $userSchoolYearGrade;
    }
    
    function getSchoolYearDetailsSectionBracketing($sycode,$average,$rgid)
    {
        $query = "SELECT * FROM tbl_school_year_details_section TSYDC WHERE TSYDC.sycode = ? AND TSYDC.min >= ? AND ? <= TSYDC.max AND TSYDC.gid = ?";

        $params = array( 
           array(
               "param_type" => "i",
               "param_value" => $sycode
           ),
           array(
            "param_type" => "i",
            "param_value" => $average
          ),
          array(
           "param_type" => "i",
           "param_value" => $average
         ),
         array(
          "param_type" => "i",
          "param_value" => $rgid
        )
       );
       
       $userSchoolYearGrade = $this->getDBResult($query, $params);
       return $userSchoolYearGrade;
    }

    function getSchoolYearDetailsSectionSpecialBracketing($sycode,$average,$rgid)
    {
        $query = "SELECT * FROM tbl_school_year_details_section TSYDC WHERE TSYDC.sycode = ? AND TSYDC.min >= ? AND ? < TSYDC.max AND TSYDC.gid = ?";

        $params = array( 
          array(
               "param_type" => "i",
               "param_value" => $sycode
          ),
           array(
            "param_type" => "i",
            "param_value" => $average
          ),
          array(
           "param_type" => "i",
           "param_value" => $average
         ),
         array(
          "param_type" => "s",
          "param_value" => $rgid
        )
       );
       
       $userSchoolYearGrade = $this->getDBResult($query, $params);
       return $userSchoolYearGrade;
    }

    function getSchoolYearDetailsSectionDistinc($sycode)
    {
        $query = "SELECT * FROM tbl_school_year_details_section TSYDC LEFT JOIN tbl_school_year_details_grade TSYDG ON TSYDC.gid = TSYDG.gid  WHERE TSYDC.sycode = ? AND TSYDC.rid = 0";

        $params = array( 
           array(
               "param_type" => "i",
               "param_value" => $sycode
           )
       );
       
       $userSchoolYearGrade = $this->getDBResult($query, $params);
       return $userSchoolYearGrade;
    }

    function getSchoolYearDetailsSectionDistincFilter()
    {
       $query = "SELECT * FROM tbl_school_year_details_section TSYDC LEFT JOIN tbl_school_year_details_grade TSYDG ON TSYDC.gid = TSYDG.gid  WHERE TSYDC.sycode IN (SELECT TUSY.sycode FROM tbl_user_school_year TUSY WHERE TUSY.status = 'ACTIVATED')";
       $userSchoolYearGrade = $this->getDBResult($query);
       return $userSchoolYearGrade;
    }

    function getSchoolYearDetailsRoom()
    {
        $query = "SELECT * FROM tbl_school_year_details_map TSYD";
        $roomCreated = $this->getDBResult($query);
        return $roomCreated;
    }

    function getReEnrollmentStudent()
    {
       $query = "SELECT *,TSSR.rid as rid FROM `tbl_school_student_record` TSSR LEFT JOIN tbl_school_year_details_grade TSYDG ON TSSR.current_level = TSYDG.gid LEFT JOIN tbl_school_year_details_section TSYDS ON TSSR.current_section = TSYDS.sid";
       $students = $this->getDBResult($query);
       return $students;
    }

    function updateSectionSchoolYear($sycode, $sid, $rid)
    {
        $query = "UPDATE tbl_school_year_details_section SET rid = ? WHERE sid = ? AND sycode = ?";
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $rid
            ),  
            array(
                "param_type" => "i",
                "param_value" => $sid
            ),
            array(
                "param_type" => "i",
                "param_value" => $sycode
            )
        );
        $this->updateDB($query, $params);
    }

    function getSchoolYearDetailsInformation($sycode)
    {
        $query = "SELECT * FROM tbl_school_year_details_section TSYDC LEFT JOIN tbl_school_year_details_grade TSYDG ON TSYDC.gid = TSYDG.gid LEFT JOIN tbl_school_year_details_map TSYDM ON TSYDC.rid = TSYDM.id   WHERE TSYDC.sycode = ?";

        $params = array( 
           array(
               "param_type" => "i",
               "param_value" => $sycode
           )
       );
       
       $userSchoolYearInformation = $this->getDBResult($query, $params);
       return $userSchoolYearInformation;
    }

    function updateSectionInformationSchoolYear($sid, $section_name, $min, $max, $student_max)
    {
        $query = "UPDATE tbl_school_year_details_section SET section_name = ?, min = ?, max = ?, student_max = ? WHERE sid = ?";
        $params = array( 
            array(
                "param_type" => "s",
                "param_value" => $section_name
            ),
            array(
                "param_type" => "i",
                "param_value" => $min
            ),
            array(
                "param_type" => "i",
                "param_value" => $max
            ),
            array(
                "param_type" => "i",
                "param_value" => $student_max
            ),
            array(
                "param_type" => "i",
                "param_value" => $sid
            )
        );
        $this->updateDB($query, $params);
    }

    function updateGradeRoomInformtionSchoolYear($sid, $sycode, $rid, $gid)
    {
        $query = "UPDATE tbl_school_year_details_section SET gid = ?, rid = ? WHERE sid = ? AND sycode = ?";
        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $gid
            ),
            array(
                "param_type" => "i",
                "param_value" => $rid
            ),
            array(
                "param_type" => "i",
                "param_value" => $sid
            ),
            array(
                "param_type" => "s",
                "param_value" => $sycode
            )
        );
        $this->updateDB($query, $params);
    }

    function schoolYearActivation($sycode)
    {
        $query = "UPDATE tbl_user_school_year SET status = ? WHERE sycode = ?";
        $params = array( 
            array(
                "param_type" => "s",
                "param_value" => 'ACTIVATED'
            ),
            array(
                "param_type" => "i",
                "param_value" => $sycode
            )
        );
        $this->updateDB($query, $params);
    }

    function schoolYearDeActivation($sycode)
    {
        $query = "UPDATE tbl_user_school_year SET status = ? WHERE sycode = ?";
        $params = array( 
            array(
                "param_type" => "s",
                "param_value" => 'DEACTIVATED'
            ),
            array(
                "param_type" => "i",
                "param_value" => $sycode
            )
        );
        $this->updateDB($query, $params);
    }

    function schoolYearReActivation($sycode)
    {
        $query = "UPDATE tbl_user_school_year SET status = ? WHERE sycode = ?";
        $params = array( 
            array(
                "param_type" => "s",
                "param_value" => 'ACTIVATED'
            ),
            array(
                "param_type" => "i",
                "param_value" => $sycode
            )
        );
        $this->updateDB($query, $params);
    }

    function getYearActivated()
    {
        $query = "SELECT * FROM tbl_user_school_year TUS WHERE status = 'ACTIVATED'";
        $yearActivated = $this->getDBResult($query);
        return $yearActivated;
    }

    function newSchoolEnrolleee($sycode, $email, $fname, $mname, $lname, $average, $street, $gender, $region_text, $province_text, $city_text, $barangay_text)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO tbl_school_enrollee_fresh (uid,sycode,email,fname,mname,lname,average,gender,street,region_text,province_text,city_text,barangay_text,status,date_created) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => date('Ymd').rand(6666,9999)
            ),      
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $fname
            ),
            array(
                "param_type" => "s",
                "param_value" => $mname
            ),
            array(
                "param_type" => "s",
                "param_value" => $lname
            ),
            array(
                "param_type" => "i",
                "param_value" => $average
            ),
            array(
                "param_type" => "s",
                "param_value" => $gender
            ),
            array(
                "param_type" => "s",
                "param_value" => $street
            ),
            array(
                "param_type" => "s",
                "param_value" => $region_text
            ),
            array(
                "param_type" => "s",
                "param_value" => $province_text
            ),
            array(
                "param_type" => "s",
                "param_value" => $city_text
            ),
            array(
                "param_type" => "s",
                "param_value" => $barangay_text
            ),
            array(
                "param_type" => "s",
                "param_value" => 'NOT APPROVED'
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        $this->insertDB($query, $params);
    }

    function transSchoolEnrolleee($sycode, $email, $fname, $mname, $lname, $average, $street, $gender, $region_text, $province_text, $city_text, $barangay_text)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO tbl_school_enrollee_trans (uid,sycode,email,fname,mname,lname,average,gender,street,region_text,province_text,city_text,barangay_text,status,date_created) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => date('Ymd').rand(6666,9999)
            ),      
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $fname
            ),
            array(
                "param_type" => "s",
                "param_value" => $mname
            ),
            array(
                "param_type" => "s",
                "param_value" => $lname
            ),
            array(
                "param_type" => "i",
                "param_value" => $average
            ),
            array(
                "param_type" => "s",
                "param_value" => $gender
            ),
            array(
                "param_type" => "s",
                "param_value" => $street
            ),
            array(
                "param_type" => "s",
                "param_value" => $region_text
            ),
            array(
                "param_type" => "s",
                "param_value" => $province_text
            ),
            array(
                "param_type" => "s",
                "param_value" => $city_text
            ),
            array(
                "param_type" => "s",
                "param_value" => $barangay_text
            ),
            array(
                "param_type" => "s",
                "param_value" => 'NOT APPROVED'
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        $this->insertDB($query, $params);
    }

    function getAllFreshMen()
    {
        $query = "SELECT * FROM tbl_school_enrollee_fresh TSEF WHERE TSEF.status = 'NOT APPROVED'";
        $freshNotActivated = $this->getDBResult($query);
        return $freshNotActivated;
    }

    function getAlTrans()
    {
        $query = "SELECT * FROM tbl_school_enrollee_trans TSET WHERE TSET.status = 'NOT APPROVED'";
        $transNotActivated = $this->getDBResult($query);
        return $transNotActivated;
    }

    function freshSchoolEnrolleeeSyValidation($eid)
    {
        $query = "SELECT * FROM tbl_school_enrollee_fresh TSYDC  WHERE TSYDC.eid = ?";

        $params = array( 
           array(
               "param_type" => "i",
               "param_value" => $eid
           )
       );
       
       $checkUserSYearInformation = $this->getDBResult($query, $params);
       return $checkUserSYearInformation;
    }

    function transSchoolEnrolleeeSyValidation($eid)
    {
        $query = "SELECT * FROM tbl_school_enrollee_trans TSET  WHERE TSET.eid = ?";

        $params = array( 
           array(
               "param_type" => "i",
               "param_value" => $eid
           )
       );
       
       $checkUserSYearInformation = $this->getDBResult($query, $params);
       return $checkUserSYearInformation;
    }

    function getSchoolEnrolleeFreshmen($rgid,$status,$uid,$eid)
    {
        $query = "UPDATE tbl_school_enrollee_fresh SET gid= ?, status = ? WHERE uid = ? AND eid = ?";
        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $rgid
            ),
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "i",
                "param_value" => $eid
            )
        );
        $this->updateDB($query, $params);
    }

    function getSchoolEnrolleeTrans($rgid,$status,$uid,$eid)
    {
        $query = "UPDATE tbl_school_enrollee_trans SET gid= ?, status = ? WHERE uid = ? AND eid = ?";
        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $rgid
            ),
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "i",
                "param_value" => $eid
            )
        );
        $this->updateDB($query, $params);
    }

    function addFirstFreshHistory($sycode,$uid,$rgid,$sid,$average)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO tbl_user_student_history (sycode,uid,gid,section,average,date_added) VALUES (?,?,?,?,?,NOW())"; 

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),      
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "i",
                "param_value" => $rgid
            ),
            array(
                "param_type" => "i",
                "param_value" => $sid
            ),
            array(
                "param_type" => "i",
                "param_value" => $average
            )
        );
        $this->insertDB($query, $params);
    }

    function getMapOverall()
    {
        $query = "SELECT * FROM tbl_school_year_details_map";
        $allMap = $this->getDBResult($query);
        return $allMap;
    }

    function getChartActiveSchoolYear()
    {
        $query = "SELECT gender, count(*) as number FROM  tbl_school_student_record WHERE sycode IN (SELECT TUSSY.sycode FROM tbl_user_school_year TUSSY WHERE TUSSY.status = 'ACTIVATED') GROUP BY gender";
        $allMap = $this->getDBResult($query);
        return $allMap;
    }

    
    function genMap($mid)
    {
   
        $query = "SELECT * FROM tbl_school_year_details_map WHERE mid = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $mid
            )
        );


        $schoolRoom = $this->getDBResult($query, $params);
        return $schoolRoom;
    }

    function addFirstFreshRecord($sycode,$uid,$fname,$gender,$address,$rgid,$sid)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO  tbl_school_student_record (sycode,uid,fname,gender,address,current_level,current_section) VALUES (?,?,?,?,?,?,?)"; 

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),      
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $fname
            ),
            array(
                "param_type" => "s",
                "param_value" => $gender
            ),
            array(
                "param_type" => "s",
                "param_value" => $address
            ),
            array(
                "param_type" => "i",
                "param_value" => $rgid
            ),
            array(
                "param_type" => "i",
                "param_value" => $sid
            )
        );
        $this->insertDB($query, $params);
    }


    function addUserInformation($uid,$email,$hash,$code)
    {
        $query = "INSERT INTO  tbl_user_information (uid,email,password,designation,code,status) VALUES (?,?,?,?,?,?)"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),      
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $hash
            ),
            array(
                "param_type" => "i",
                "param_value" => 3
            ),
            array(
                "param_type" => "i",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => 'UNVERIFIED'
            )
        );
        $this->insertDB($query, $params);
    }

    function addUserTeacherInformation($uid,$email,$hash,$code)
    {
        $query = "INSERT INTO  tbl_user_information (uid,email,password,designation,code,status) VALUES (?,?,?,?,?,?)"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),      
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $hash
            ),
            array(
                "param_type" => "i",
                "param_value" => 2
            ),
            array(
                "param_type" => "i",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => 'UNVERIFIED'
            )
        );
        $this->insertDB($query, $params);
    }

    function validateSimilarSyCode($sycode)
    {
        $query = "SELECT * FROM tbl_user_school_year TUSY  WHERE TUSY.sycode = ?";

        $params = array( 
           array(
               "param_type" => "i",
               "param_value" => $sycode
           )
       );
       
       $checkSYearInformation = $this->getDBResult($query, $params);
       return $checkSYearInformation;
    }

    function checkStudentRecord($rid)
    {
        $query = "SELECT * FROM tbl_school_student_record TSSR LEFT JOIN tbl_school_year_details_grade TSYDG ON TSSR.current_level = TSYDG.gid LEFT JOIN tbl_school_year_details_section TSYDS ON TSSR.current_section = TSYDS.sid WHERE TSSR.rid = ?";

        $params = array( 
           array(
               "param_type" => "i",
               "param_value" => $rid
           )
       );
       
       $checkInformation = $this->getDBResult($query, $params);
       return $checkInformation;
    }

    function deleteConfirmation($uid)
    {
        $query = "DELETE FROM tbl_student_confirmation_for_enrollment WHERE uid = ?"; 

        $params = array( 
            array(
                "param_type" => "?",
                "param_value" => $uid
            )
        );
        
        $checkInformation = $this->getDBResult($query, $params);
        return $checkInformation;
    }

    function movingUp($sycode, $next_level)
    {
        $query = "SELECT * FROM tbl_school_year_details_grade TSYDG WHERE TSYDG.sycode = ? AND TSYDG.grade = ?"; 

        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "s",
                "param_value" => $next_level
            )
        );
        
        $checkInformation = $this->getDBResult($query, $params);
        return $checkInformation;

    }

    function updateStudentRecord($sycode,$uid,$rid,$rgid,$sid)
    {
        $query = "UPDATE tbl_school_student_record SET sycode= ?, current_level = ?, current_section =? WHERE uid = ? AND rid = ?";
        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "i",
                "param_value" => $rgid
            ),
            array(
                "param_type" => "i",
                "param_value" => $sid
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "i",
                "param_value" => $rid
            )
        );
        $this->updateDB($query, $params);
    }

    function addRequestType($type)
    {
        $query = "INSERT INTO tbl_school_request_type (type) VALUES (?)"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $type
            )
        );
        $this->insertDB($query, $params);
    }

    function getAllRequestType()
    {
        $query = "SELECT * FROM tbl_school_request_type TSRT";
        $allRequestType = $this->getDBResult($query);
        return $allRequestType;
    }

    function getStudentEnrollForCurrentSchoolYear()
    {
        $query = "SELECT * FROM tbl_school_student_record TSSR LEFT JOIN tbl_user_school_year TUSSY ON TSSR.sycode = TUSSY.sycode WHERE TUSSY.status = 'ACTIVATED'";
        $allConfirmedStudentApplicableForRequest = $this->getDBResult($query);
        return $allConfirmedStudentApplicableForRequest;
    }

    function addStudentRequest($sycode, $uid, $request_type, $note)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO tbl_school_student_request (sycode, uid, request_type, note, status, date_created) VALUES (?,?,?,?,?,?)"; 

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "i",
                "param_value" => $request_type
            ),
            array(
                "param_type" => "s",
                "param_value" => $note
            ),
            array(
                "param_type" => "s",
                "param_value" => 'NEW'
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        $this->insertDB($query, $params);
    }

    function getStudentRequestCurrentSchoolYear()
    {
        $query = "SELECT *,TSSR.date_created as requestcreationdate,TSSR.status as requeststatus FROM tbl_school_student_request TSSR LEFT JOIN  tbl_user_school_year TUSSY ON TSSR.sycode = TUSSY.sycode LEFT JOIN tbl_school_request_type TSRT ON TSSR.request_type = TSRT.req LEFT JOIN tbl_school_student_record TSR ON TSSR.uid = TSR.uid 
        LEFT JOIN tbl_school_year_details_grade TSYDG ON TSR.current_level = TSYDG.gid
        LEFT JOIN tbl_school_year_details_section TSYDS ON TSR.current_section = TSYDS.sid
        WHERE TUSSY.status = 'ACTIVATED' AND TSSR.status = 'NEW'";
        $allStudentRequest = $this->getDBResult($query);
        return $allStudentRequest;
    }

    function VisitingStudentRequest($reqid)
    {
        $query = "SELECT * FROM tbl_school_student_request TSSR WHERE TSSR.reqid = ?"; 

        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $reqid
            )
        );
        
        $checkRequestInformation = $this->getDBResult($query, $params);
        return $checkRequestInformation;
    }

    function addStudentRequestHistory($reqid, $unote)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "INSERT INTO tbl_school_student_request_history (reqid, note, date_added) VALUES (?,?,?)"; 

        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $reqid
            ),
            array(
                "param_type" => "s",
                "param_value" => $unote
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        
        $this->insertDB($query, $params);
    }

    function updateStudentRequest($reqid, $note, $status)
    {
        $query = "UPDATE tbl_school_student_request SET note= ?, status = ? WHERE reqid = ?";
        $params = array( 
            array(
                "param_type" => "s",
                "param_value" => $note
            ),
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "i",
                "param_value" => $reqid
            )
        );
        $this->updateDB($query, $params);
    }

    function getStudentRequestCurrentSchoolYearApprove()
    {
        $query = "SELECT *,TSSR.date_created as requestcreationdate,TSSR.status as requeststatus FROM tbl_school_student_request TSSR LEFT JOIN  tbl_user_school_year TUSSY ON TSSR.sycode = TUSSY.sycode LEFT JOIN tbl_school_request_type TSRT ON TSSR.request_type = TSRT.req LEFT JOIN tbl_school_student_record TSR ON TSSR.uid = TSR.uid 
        LEFT JOIN tbl_school_year_details_grade TSYDG ON TSR.current_level = TSYDG.gid
        LEFT JOIN tbl_school_year_details_section TSYDS ON TSR.current_section = TSYDS.sid
        WHERE TUSSY.status = 'ACTIVATED' AND TSSR.status = 'APPROVED'";
        $allStudentRequest = $this->getDBResult($query);
        return $allStudentRequest;
    }

    function getStudentRequestCurrentSchoolYearRejected()
    {
        $query = "SELECT *,TSSR.date_created as requestcreationdate,TSSR.status as requeststatus FROM tbl_school_student_request TSSR LEFT JOIN  tbl_user_school_year TUSSY ON TSSR.sycode = TUSSY.sycode LEFT JOIN tbl_school_request_type TSRT ON TSSR.request_type = TSRT.req LEFT JOIN tbl_school_student_record TSR ON TSSR.uid = TSR.uid 
        LEFT JOIN tbl_school_year_details_grade TSYDG ON TSR.current_level = TSYDG.gid
        LEFT JOIN tbl_school_year_details_section TSYDS ON TSR.current_section = TSYDS.sid
        WHERE TUSSY.status = 'ACTIVATED' AND TSSR.status = 'REJECTED'";
        $allStudentRequest = $this->getDBResult($query);
        return $allStudentRequest;
    }


    function specificStudentRequest($reqid)
    {
        $query = "SELECT *,TSSR.date_created as requestcreationdate,TSSR.status as requeststatus FROM tbl_school_student_request TSSR LEFT JOIN  tbl_user_school_year TUSSY ON TSSR.sycode = TUSSY.sycode LEFT JOIN tbl_school_request_type TSRT ON TSSR.request_type = TSRT.req LEFT JOIN tbl_school_student_record TSR ON TSSR.uid = TSR.uid 
        LEFT JOIN tbl_school_year_details_grade TSYDG ON TSR.current_level = TSYDG.gid
        LEFT JOIN tbl_school_year_details_section TSYDS ON TSR.current_section = TSYDS.sid
        WHERE TSSR.reqid = ?"; 

        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $reqid
            )
        );
        
        $checkRequestInformation = $this->getDBResult($query, $params);
        return $checkRequestInformation;
    }

    function specificRequestHistory($reqid)
    {
        $query = "SELECT * FROM tbl_school_student_request_history WHERE reqid = ? ORDER BY 1 DESC";

        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $reqid
            )
        );
        
        $checkRequestInformation = $this->getDBResult($query, $params);
        return $checkRequestInformation;

    }

    function checkApproveRequest($sycode)
    {
        $query = "SELECT COUNT(*) as total FROM `tbl_school_student_request` WHERE status = 'APPROVED' AND sycode = ?";

        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $sycode
            )
        );
        
        $checkRequestInformation = $this->getDBResult($query, $params);
        return $checkRequestInformation;
    }

    function checkAnnouncement(){
        date_default_timezone_set('Asia/Manila');
        $query = "UPDATE tbl_school_announcement SET status = ? WHERE DATE(end) = CURDATE()";
      
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => 'INACTIVE'
            )
        );

        $this->updateDB($query, $params);
    }


    function checkRejectRequest($sycode)
    {
        $query = "SELECT COUNT(*) as total FROM `tbl_school_student_request` WHERE status = 'REJECTED' AND sycode = ?";

        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $sycode
            )
        );
        
        $checkRequestInformation = $this->getDBResult($query, $params);
        return $checkRequestInformation;
    }


    function allAccountStudent()
    {
        $query = "SELECT * FROM tbl_school_student_record TSSR LEFT JOIN  tbl_user_information TUI ON TSSR.uid = TUI.uid LEFT JOIN  tbl_school_year_details_grade TSYDG ON TSSR.current_section = TSYDG.gid LEFT JOIN tbl_school_year_details_section TSYDS ON TSSR.current_section = TSYDS.sid WHERE TSSR.sycode IN (SELECT TUSSY.sycode FROM tbl_user_school_year TUSSY WHERE TUSSY.status = 'ACTIVATED')";
        $allStudentAccount = $this->getDBResult($query);
        return $allStudentAccount;
    }

    function allAccountStudentFilteredSearch($gid, $sid)
    {
        $query = "SELECT * FROM tbl_school_student_record TSSR LEFT JOIN  tbl_user_information TUI ON TSSR.uid = TUI.uid LEFT JOIN  tbl_school_year_details_grade TSYDG ON TSSR.current_section = TSYDG.gid LEFT JOIN tbl_school_year_details_section TSYDS ON TSSR.current_section = TSYDS.sid WHERE TSSR.current_level = ? AND TSSR.current_section = ?";
        
        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $gid
            ),
            array(
                "param_type" => "i",
                "param_value" => $sid
            )
        );
        
        $allStudentAccount = $this->getDBResult($query, $params);
        return $allStudentAccount;
    }


    function addTeacherInformationRecord($sycode, $uid, $fname,$mname, $lname, $street, $region_text, $city_text, $barangay_text)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "INSERT INTO tbl_school_teacher_record (sycode ,uid, fname, mname, lname, street, region_text, city_text, barangay_text, date_created) VALUES (?, ?,?,?,?,?,?,?,?,?)"; 

        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $fname
            ),
            array(
                "param_type" => "s",
                "param_value" => $mname
            ),
            array(
                "param_type" => "s",
                "param_value" => $lname
            ),
            array(
                "param_type" => "s",
                "param_value" => $street
            ),
            array(
                "param_type" => "s",
                "param_value" => $region_text
            ),
            array(
                "param_type" => "s",
                "param_value" => $city_text
            ),
            array(
                "param_type" => "s",
                "param_value" => $barangay_text
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        
        $this->insertDB($query, $params);
    }
    
    function allAccountTeacher()
    {
        $query = "SELECT * FROM tbl_school_teacher_record TSTR LEFT JOIN tbl_user_information TUI ON TSTR.uid = TUI.uid";
        $allTeacherAccount = $this->getDBResult($query);
        return $allTeacherAccount;
    }

    function AllAccountToDisplayTeacher()
    {
        $query = "SELECT * FROM tbl_school_teacher_record TSTR LEFT JOIN tbl_user_information TUI ON TSTR.uid = TUI.uid LEFT JOIN teacher_assigned_section TAS ON TAS.uid = TSTR.uid LEFT JOIN tbl_school_year_details_section TSYDS ON TAS.sid = TSYDS.sid LEFT JOIN tbl_school_year_details_grade TSYDG ON TSYDS.gid = TSYDG.gid";
        $allTeacherAccount = $this->getDBResult($query);
        return $allTeacherAccount;
    }

    function allAnnoucement()
    {
        $query = "SELECT * FROM  tbl_school_announcement TSA WHERE status = 'ACTIVE'";
        $allAnnouncement = $this->getDBResult($query);
        return $allAnnouncement;
    }

    function allInActiveAnnoucement()
    {
        $query = "SELECT * FROM  tbl_school_announcement TSA WHERE status = 'INACTIVE'";
        $allAnnouncement = $this->getDBResult($query);
        return $allAnnouncement;
    }

    function announcementCreation($title, $description, $start, $end, $photoPath)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "INSERT INTO tbl_school_announcement (title, description, start, end, image_path, status) VALUES (?, ?, ?, ?, ?, ?)";
      
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $title
            ),
            array(
                "param_type" => "s",
                "param_value" => $description
            ),
            array(
                "param_type" => "s",
                "param_value" => $start
            ),
            array(
                "param_type" => "s",
                "param_value" => $end
            ),
            array(
                "param_type" => "s",
                "param_value" => $photoPath
            ),
            array(
                "param_type" => "s",
                "param_value" => 'ACTIVE'
            )
        );

        $this->insertDB($query, $params);
    }

    function announcementUpdate($id, $title, $description, $start, $end, $photoPath)
    {
        $query = "UPDATE tbl_school_announcement SET title = ?,description = ?,start = ?,end = ?, image_path= ? WHERE id = ?";
      
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $title
            ),
            array(
                "param_type" => "s",
                "param_value" => $description
            ),
            array(
                "param_type" => "s",
                "param_value" => $start
            ),
            array(
                "param_type" => "s",
                "param_value" => $end
            ),
            array(
                "param_type" => "s",
                "param_value" => $photoPath
            ),
            array(
                "param_type" => "i",
                "param_value" => $id
            )
        );

        $this->updateDB($query, $params);
    }

    function updateGradeSchoolYearDetails($sycode, $gid, $grade)
    {
        $query = "UPDATE tbl_school_year_details_grade SET sycode = ?,grade = ?  WHERE gid = ?";
      
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "s",
                "param_value" => $grade
            ),
            array(
                "param_type" => "i",
                "param_value" => $gid
            )
        );

        $this->updateDB($query, $params);
    }

    function lostCreation($item, $uid, $rid, $another, $photoPath)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "INSERT INTO tbl_school_lost (item, foundby, foundin, image_path, status, another, date) VALUES (?, ?, ?, ?, ?, ?, ?)";
      
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $item
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $rid
            ),
            array(
                "param_type" => "s",
                "param_value" => $photoPath
            ),
            array(
                "param_type" => "s",
                "param_value" => 'LOST'
            ),
            array(
                "param_type" => "s",
                "param_value" => $another
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );

        $this->insertDB($query, $params);
    }

    function lostUpdateStatusCreation($fid, $status)
    {
        $query = "UPDATE tbl_school_lost SET status = ? WHERE fid = ?";
      
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "i",
                "param_value" => $fid
            )
        );

        $this->updateDB($query, $params);
    }

    function lostUpdate($fid, $item, $foundby, $foundin, $status, $another, $photoPath)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "UPDATE tbl_school_lost SET item = ?, foundby = ?, foundin = ?, image_path = ?, status = ?, another = ? WHERE fid = ?";
      
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $item
            ),
            array(
                "param_type" => "s",
                "param_value" => $foundby
            ),
            array(
                "param_type" => "s",
                "param_value" => $foundin
            ),
            array(
                "param_type" => "s",
                "param_value" => $photoPath
            ),
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "s",
                "param_value" => $another
            ),
            array(
                "param_type" => "i",
                "param_value" => $fid
            )
        );

        $this->updateDB($query, $params);
    }


    function allLost()
    {
        $query = "SELECT * FROM  tbl_school_lost TSL LEFT JOIN tbl_school_student_record TSSR ON TSL.foundby = TSSR.uid LEFT JOIN tbl_school_year_details_map TSYDM ON TSL.foundin = TSYDM.id WHERE TSL.status = 'LOST'";
        $allLost = $this->getDBResult($query);
        return $allLost;
    }

    function allLostItemReUpdate()
    {
        $query = "SELECT * FROM  tbl_school_lost TSL LEFT JOIN tbl_school_student_record TSSR ON TSL.foundby = TSSR.uid LEFT JOIN tbl_school_year_details_map TSYDM ON TSL.foundin = TSYDM.id WHERE TSL.status = 'LOST'";
        $allLost = $this->getDBResult($query);
        return $allLost;
    }

    function allFound()
    {
        $query = "SELECT * FROM  tbl_school_lost TSL LEFT JOIN tbl_school_student_record TSSR ON TSL.foundby = TSSR.uid LEFT JOIN tbl_school_year_details_map TSYDM ON TSL.foundin = TSYDM.id WHERE TSL.status = 'FOUND'";
        $allLost = $this->getDBResult($query);
        return $allLost;
    }

    function verifyUserCredentials($code, $hash)
    {
        $query = "UPDATE tbl_user_information SET password = ?, status = ? WHERE code = ?";
        $params = array( 
            array(
                "param_type" => "s",
                "param_value" => $hash
            ),
            array(
                "param_type" => "s",
                "param_value" => 'VERIFIED'
            ),
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        $this->updateDB($query, $params);
    }

    function getStudentEnrollForCurrentSpecificStudentDataSchoolYear($uid)
    {
        $query = "SELECT * FROM tbl_school_student_record TSSR LEFT JOIN tbl_user_school_year TUSSY ON TSSR.sycode = TUSSY.sycode WHERE TUSSY.status = 'ACTIVATED' AND TSSR.uid = ?";
        
        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $uid
            )
        );
        
        $checkRequestInformation = $this->getDBResult($query, $params);
        return $checkRequestInformation;
        
    }


    function getStudentRequestSpecificStudentCurrentSchoolYear($uid)
    {
        $query = "SELECT *,TSSR.date_created as requestcreationdate,TSSR.status as requeststatus FROM tbl_school_student_request TSSR LEFT JOIN  tbl_user_school_year TUSSY ON TSSR.sycode = TUSSY.sycode LEFT JOIN tbl_school_request_type TSRT ON TSSR.request_type = TSRT.req LEFT JOIN tbl_school_student_record TSR ON TSSR.uid = TSR.uid 
        LEFT JOIN tbl_school_year_details_grade TSYDG ON TSR.current_level = TSYDG.gid
        LEFT JOIN tbl_school_year_details_section TSYDS ON TSR.current_section = TSYDS.sid
        WHERE TUSSY.status = 'ACTIVATED' AND TSSR.uid = ? ORDER BY TSSR.reqid DESC"; 

        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $uid
            )
        );

        $checkRequestInformation = $this->getDBResult($query, $params);
        return $checkRequestInformation;
        

    }

    function checkScannedUid($uid)
    {
        $query = "SELECT * FROM tbl_user_information TUI LEFT JOIN tbl_user_designation TUD ON TUI.designation = TUD.did LEFT JOIN tbl_school_student_record TSSR ON TUI.uid = TSSR.uid LEFT JOIN tbl_school_year_details_section TSYDS ON TSSR.current_section = TSYDS.sid 
        LEFT JOIN  tbl_school_year_details_grade TSYDG ON TSYDG.gid = TSSR.current_level
        WHERE TUI.uid = ?";

        $params = array(
           
           array(
               "param_type" => "s",
               "param_value" => $uid
           )
       );
       
       $userCredentials = $this->getDBResult($query, $params);
       return $userCredentials;
    }

    function checkOutputScannedUid($uid)
    {
        $query = "SELECT * FROM tbl_user_information TUI LEFT JOIN tbl_user_designation TUD ON TUI.designation = TUD.did LEFT JOIN tbl_school_student_record TSSR ON TUI.uid = TSSR.uid LEFT JOIN tbl_school_year_details_section TSYDS ON TSSR.current_section = TSYDS.sid 
        LEFT JOIN  tbl_school_year_details_grade TSYDG ON TSYDG.gid = TSSR.current_level LEFT JOIN tbl_school_monitoring_attendance TSMA ON TUI.uid = TSMA.uid 
        WHERE TUI.uid = ?";

        $params = array(
           
           array(
               "param_type" => "s",
               "param_value" => $uid
           )
       );
       
       $userCredentials = $this->getDBResult($query, $params);
       return $userCredentials;
    }


    function myScannedUid($uid,$room_id,$date_inserted)
    {
        $query = "SELECT * FROM tbl_school_monitoring_attendance TUI WHERE TUI.uid = ? AND room = ? AND date_inserted = ?";

        $params = array(
           
           array(
               "param_type" => "s",
               "param_value" => $uid
           ),
           array(
            "param_type" => "s",
            "param_value" => $room_id
          ),
           array(
            "param_type" => "s",
            "param_value" => $date_inserted
          )
       );
       
       $userCredentials = $this->getDBResult($query, $params);
       return $userCredentials;
    }

    function insertScannedUid($uid,$room_id,$current_time,$date_inserted)
    {
        $query = "INSERT INTO tbl_school_monitoring_attendance (room, uid, timein, date_inserted) VALUES (?, ?, ?, ?)";
      
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $room_id
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $current_time
            ),
            array(
                "param_type" => "s",
                "param_value" => $date_inserted
            )
        );

        $this->insertDB($query, $params);
    }


    function updateScannedUid($uid,$room_id,$current_time,$date_inserted)
    {
        $query = "UPDATE tbl_school_monitoring_attendance SET timeout = ? WHERE uid = ? AND room = ? AND date_inserted = ?";
        $params = array( 
            array(
                "param_type" => "s",
                "param_value" => $current_time
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "i",
                "param_value" => $room_id
            ),
            array(
                "param_type" => "s",
                "param_value" => $date_inserted
            )
        );
        $this->updateDB($query, $params);
    }

    function myAttendanceMonitoringToday($uid)
    {

        $query = "SELECT * FROM tbl_school_monitoring_attendance TSMA LEFT JOIN tbl_school_year_details_map TSYDM ON TSMA.room = TSYDM.id WHERE TSMA.uid = ? AND DATE(TSMA.date_inserted) = CURDATE()"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myAttendanceMonitoringTodayTeacher($sid)
    {

        date_default_timezone_get('Asia/Manila');
        $query = "SELECT * FROM tbl_school_monitoring_attendance TSMA LEFT JOIN tbl_school_year_details_map TSYDM ON TSMA.room = TSYDM.id LEFT JOIN tbl_school_student_record TSSR ON TSMA.uid = TSSR.uid
        WHERE TSSR.current_section = ? AND DATE(TSMA.date_inserted) = CURDATE()"; 

        $params = array(
           
            array(
                "param_type" => "i",
                "param_value" => $sid
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myAttendanceMonitoringTodayGroup($uid)
    {
        date_default_timezone_get('Asia/Manila');
        $query = "SELECT * FROM tbl_school_monitoring_attendance TSMA LEFT JOIN tbl_school_year_details_map TSYDM ON TSMA.room = TSYDM.id WHERE TSMA.uid = ? AND DATE(TSMA.date_inserted) = CURDATE() GROUP BY TSMA.date_inserted"; 

        $params = array(
           
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }


    function myAttendanceMonitoringOverallGroup($uid)
    {
        $query = "SELECT * FROM tbl_school_monitoring_attendance TSMA LEFT JOIN tbl_school_year_details_map TSYDM ON TSMA.room = TSYDM.id WHERE TSMA.uid = ? GROUP BY TSMA.date_inserted"; 

        $params = array(
           
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myAttendanceMonitoringOverall($uid)
    {
        $query = "SELECT * FROM tbl_school_monitoring_attendance TSMA LEFT JOIN tbl_school_year_details_map TSYDM ON TSMA.room = TSYDM.id WHERE TSMA.uid = ?"; 

        $params = array(
           
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myAttendanceMonitoringOverallTeacher($sid)
    {
        date_default_timezone_get('Asia/Manila');
        $query = "SELECT * FROM tbl_school_monitoring_attendance TSMA LEFT JOIN tbl_school_year_details_map TSYDM ON TSMA.room = TSYDM.id LEFT JOIN tbl_school_student_record TSSR ON TSMA.uid = TSSR.uid
        WHERE TSSR.current_section = ?"; 

        $params = array(
           
            array(
                "param_type" => "i",
                "param_value" => $sid
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function allSectionForSy()
    {
        $query = "SELECT * FROM tbl_user_school_year TUSY LEFT JOIN tbl_school_year_details_section TSYDS ON TUSY.sycode = TSYDS.sycode
        LEFT JOIN tbl_school_year_details_grade TSYDG ON TSYDS.gid = TSYDG.gid
        WHERE TUSY.status = 'ACTIVATED'";
        $allSection = $this->getDBResult($query);
        return $allSection;

    }


    function checkIfExistingAlreadyTeacher($uid)
    {
        $query = "SELECT * FROM teacher_assigned_section TAS WHERE TAS.uid = ?"; 

        $params = array(
           
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function addSectionForTeacher($uid, $sycode, $sid)
    {
        $query = "INSERT INTO teacher_assigned_section (uid, sid, sycode) VALUES (?, ?, ?)";
      
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "i",
                "param_value" => $sid
            ),
            array(
                "param_type" => "s",
                "param_value" => $sycode
            )
        );

        $this->insertDB($query, $params);
    }

    function updateSectionForTeacher($uid, $sycode, $sid)
    {
        $query = "UPDATE teacher_assigned_section SET sid = ?, sycode = ? WHERE uid = ?";
        $params = array( 
            array(
                "param_type" => "i",
                "param_value" => $sid
            ),
            array(
                "param_type" => "s",
                "param_value" => $sycode
            ),
            array(
                "param_type" => "i",
                "param_value" => $sid
            )
        );
        $this->updateDB($query, $params);
    }

    function insertSectionForTeacherHistory($uid, $prevSycode, $prevSid)
    {
        $query = "INSERT INTO tbl_assigned_teacher_section_history (uid, sid, sycode) VALUES (?, ?, ?)";
      
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "i",
                "param_value" => $prevSid
            ),
            array(
                "param_type" => "s",
                "param_value" => $prevSycode
            )
        );

        $this->insertDB($query, $params);
    }


    function myAttendanceMonitoringOverallNoSpecific()
    {
        $query = "SELECT * FROM tbl_school_monitoring_attendance TSMA LEFT JOIN tbl_school_year_details_map TSYDM ON TSMA.room = TSYDM.id LEFT JOIN tbl_school_student_record TSSR
        ON TSMA.uid = TSSR.uid LEFT JOIN tbl_school_year_details_grade TSYDG ON TSSR.current_level = TSYDG.gid LEFT JOIN tbl_school_year_details_section TSYDS ON TSSR.current_section 
        = TSYDS.sid"; 

        $allMonitoring = $this->getDBResult($query);
        return $allMonitoring;
    }

    function myAttendanceMonitoringTodayOverall()
    {

        $query = "SELECT * FROM tbl_school_monitoring_attendance TSMA LEFT JOIN tbl_school_year_details_map TSYDM ON TSMA.room = TSYDM.id LEFT JOIN tbl_school_student_record TSSR
        ON TSMA.uid = TSSR.uid LEFT JOIN tbl_school_year_details_grade TSYDG ON TSSR.current_level = TSYDG.gid LEFT JOIN tbl_school_year_details_section TSYDS ON TSSR.current_section 
        = TSYDS.sid WHERE TSMA.date_inserted = NOW()"; 

        $allMonitoring = $this->getDBResult($query);
        return $allMonitoring;

    }

    function checkTotalStudentForTheActivatedSY()
    {
        $query = "SELECT TUSY.year_from,TUSY.year_to,TUSY.sycode,COUNT(*) as total FROM tbl_school_student_record TSSR LEFT JOIN tbl_user_school_year TUSY ON TSSR.sycode = TUSY.sycode WHERE TUSY.status = 'ACTIVATED'";
        $allMonitoring = $this->getDBResult($query);
        return $allMonitoring;
    }

    function checkTotalTeacherForTheActivatedSY()
    {
        $query = "SELECT TUSY.year_from,TUSY.year_to,TUSY.sycode,COUNT(*) as total  FROM teacher_assigned_section TAS LEFT JOIN  tbl_school_teacher_record TSTR ON TAS.uid = TSTR.uid LEFT JOIN tbl_user_school_year TUSY ON TAS.sycode = TUSY.sycode WHERE TUSY.status = 'ACTIVATED'";
        $allMonitoring = $this->getDBResult($query);
        return $allMonitoring;
    }

    function myTeacherInformation($uid)
    {
        $query = "SELECT * FROM tbl_user_information TUI LEFT JOIN tbl_school_teacher_record TSTR ON TUI.uid = TSTR.uid LEFT JOIN teacher_assigned_section TAS ON TAS.uid = TSTR.uid 
        LEFT JOIN tbl_school_year_details_section TSYDS ON TAS.sid = TSYDS.sid LEFT JOIN tbl_school_year_details_grade TSYDG ON TSYDS.gid = TSYDG.gid WHERE TUI.uid = ?"; 

        $params = array(
                
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );

        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myTeacherStudent($sid)
    {
        $query = "SELECT * FROM tbl_school_student_record TSSR LEFT JOIN tbl_school_year_details_grade TSYDG ON TSSR.current_level = TSYDG.gid LEFT JOIN tbl_school_year_details_section TSYDS ON TSYDS.sid = TSSR.current_section 
        WHERE TSSR.current_section = ?"; 

        $params = array(
                        
            array(
                "param_type" => "s",
                "param_value" => $sid
            )
        );

        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;

    }

    function checkForgotten($uid,$role)
    {
        $query = "SELECT * FROM tbl_user_information TUI LEFT JOIN tbl_user_designation TUD ON TUI.designation = TUD.did WHERE TUI.uid = ? AND TUD.role = ?"; 

        $params = array(
                        
            array(
                "param_type" => "s",
                "param_value" => $uid
            ), array(
                "param_type" => "s",
                "param_value" => $role
            )
        );

        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;

    }


    function updateForgotten($uid,$hash)
    {
        $query = "UPDATE tbl_user_information SET password = ? WHERE uid = ?";
        $params = array( 
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $hash
            )
        );
        $this->updateDB($query, $params);
    }


    







    
}