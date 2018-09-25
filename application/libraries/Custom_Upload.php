<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Custom_Upload{

    private $CI;

    function __construct() {
        $this->CI = &get_instance();
    }
     
    /**
     *
     * function for create a uniquiee id as file name
     * @author Shiv kumar Tiwari
     * @Mob - +919266913291
     * @skype - shiv.tiwari86
     * @param - null
     * @return string $filename
     */   
    function GUID()
    {
        if (function_exists('com_create_guid') === true)
        {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }
    
    /**
     *
     * function for upload image and return data as array
     * @author Shiv kumar Tiwari
     * @Mob - +919266913291
     * @skype - shiv.tiwari86
     * @param - string $name what type of upload is
     * @return mixed array $aUploadData
     */    
    function uploadImage($name) {

        $aUploadData = array(
            'error' => array()
        );
        $arrDataThumb = false;
        $ext = pathinfo($_FILES[$name]['name'], PATHINFO_EXTENSION);
        switch ($name) {
            case 'avatar_admin' :
                $config['upload_path'] = FCPATH.'uploads/admin/users';
                $config['max_width'] = '2024';
                $config['max_height'] = '2024';
                $config['max_size'] = '2048'; //2MB
                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['file_name'] = $this->GUID();
                $arrDataThumb = array('source_path'=>$config['upload_path']."/".$config['file_name'].".".$ext,
                    "thumb_path"=>$config['upload_path']."/thumb/".SITE_ADMIN_AVATAR_PREFIX.$config['file_name'].".".$ext,
                    'width'=>200,'height'=>200,'file_name'=>$config['file_name']);
                break;
        }
        $this->CI->load->library('upload', $config);
        if (!$this->CI->upload->do_upload($name)) {
            $aUploadData['error'] = $this->CI->upload->display_errors();
        } else {
            $aUploadData = array_merge($aUploadData, $this->CI->upload->data());
            if($arrDataThumb){ 
                $this->createThumb($arrDataThumb);
            }
            return $aUploadData;
        }

        return $aUploadData;
    }
    
    /**
     *
     * function for create thumb
     * @author Shiv kumar Tiwari
     * @Mob - +919266913291
     * @skype - shiv.tiwari86
     * @param - mixed array to initialise the config
     * @return - void
     */
    
    public function createThumb($argArrData){
        $this->changePermission($argArrData['source_path'], 0777);
        $config['image_library'] = 'gd2';
        $config['source_image'] = $argArrData['source_path'];
        $config['new_image'] = $argArrData['thumb_path'];
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['thumb_marker'] = false;
        $config['width'] = $argArrData['width'];
        $config['height']= $argArrData['height'];
        $this->CI->load->library('image_lib', $config);
        $this->CI->image_lib->resize();
    }
    
    /**
     *
     * function for change permission of teh file
     * @author Shiv kumar Tiwari
     * @Mob - +919266913291
     * @skype - shiv.tiwari86
     * @param - string $filename,int permission
     * @return - void
     */
    public function changePermission($filePath,$permission){
        return chmod($filePath, 0777);
    }
    
    /**
     *
     * function for crop and return file name
     * @author Shiv kumar Tiwari
     * @Mob - +919266913291
     * @skype - shiv.tiwari86
     * @param - array('file_type','file_name','m_width','m_height',
     *          'o_width','o_height','imageMain')
     * @return string return file name
     */
    function CropImages($argArrData = array()) {
        $varReturnedFileName = "";
        if (isset($argArrData)) {
            $fileType = strtolower($argArrData["file_type"]);
            $finalname = $argArrData['file_name'];
            $main_width = $argArrData['m_width'];
            $main_height = $argArrData['m_height'];
            $org_width = $argArrData['o_width'];
            $org_height = $argArrData['o_height'];
            $sImage = $argArrData['imageMain'];
            $x = (isset($argArrData['x'])) ? $argArrData['x'] : 0;
            $y = (isset($argArrData['y'])) ? $argArrData['y'] : 0;
            $path = $argArrData['path'];
            if ($fileType == "image/jpeg" || $fileType == "image/pjpeg" || $fileType=='jpg' || $fileType=='jpeg' || $fileType=='pjpeg') {
                $src = imagecreatefromjpeg($sImage);
                $main = imagecreatetruecolor($main_width, $main_height);
                imagecopyresampled($main, $src, 0, 0, $x, $y, $main_width, $main_height, $org_width, $org_height);
                imagejpeg($main, $path . $finalname . ".jpeg", 90);
                $varReturnedFileName = $finalname . ".jpeg";
            } else if ($fileType == "image/png" || $fileType=="png") {
                $src = imagecreatefrompng($sImage);
                $main = imagecreatetruecolor($main_width, $main_height);
                imagecopyresampled($main, $src, 0, 0, $x, $y, $main_width, $main_height, $org_width, $org_height);
                imagepng($main, $path . $finalname . ".png", 8);
                $varReturnedFileName = $finalname . ".png";
            }
        }
        return $varReturnedFileName;
    }

}

?>