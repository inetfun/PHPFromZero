<?
//*************************************************************************************
//名称：13-8.php
//功能：用文件上传类轻松实现PHP文件上传	
//*************************************************************************************

class upload
{
	/********** Constructors **********/
	function __construct($array){
		if(is_array($array)){
			$MaxSize=(array_key_exists('MaxSize',$array))?intval($array['MaxSize']):100;
			$Mode=(array_key_exists('Mode',$array))?intval($array['Mode']):1;
			$SavePath=(array_key_exists('SavePath',$array))?$array['SavePath']:'upload';
			$FileType=(array_key_exists('FileType',$array))?$array['FileType']:'jpg/gif/png/bmp';
		}else{
			$MaxSize=100;
			$SavePath='upload';
			$FileType='jpg/gif';
			$Mode=1;
		}
		if((!is_int($MaxSize))||($MaxSize<0))$this->error(__FUNCTION__,$MaxSize.' is not a positive integer!');
		$this->MaxSize=$MaxSize;
		$this->SavePath=$SavePath;
		$this->FileType=$FileType;
		$this->Mode=$Mode;
	}
	
	/********** Get the file extension **********/
	function getFileType() {
		$type=strtolower(substr($this->FileName,strrpos($this->FileName,".")+1));
		return $type;
	}
	/********** Check allowed upload type **********/
	function checkFileType() {
		if ($this->FileName=="") {
			return false;
		} else {
			$type=$this->getFileType();
			if (strstr($this->FileType,$type)) {
			/*echo "<script>alert('".$this->FileType."-----------------".$type."');</script>";*/
				return true;
			} else {
				return false;
			}
		}
	}
	/*************** Check whether there directory ****************/
	function check_dir() {
		if (!is_dir($this->SavePath)) $this->mkfolder();	
		if (is_writable($this->SavePath)) {
			return true;
		}elseif(chmod($this->SavePath,0777)){
			return true;
		} else {
			return false;
		}
	}
	
	/* Generate unlimited-class directory */
	function mkfolder(){
		$arraydir=explode("/",$this->SavePath);
		$dirname="";
		for($i=0;$i<=count($arraydir);$i++){
			$dirname.=$arraydir[$i]."/";
			if(!is_dir($dirname)){
				mkdir($dirname,0777);
			}
		}
	}
	
	/********** Generated random file name **********/
	function random($Length) { 
		$hash = ''; 
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';   
		$max = strlen($chars) - 1; 
		mt_srand((double)microtime() * 1000000); 
		for($i = 0; $i < $Length; $i++) { 
			$hash .= $chars[mt_rand(0, $max)]; 
		} 
		return $this->random= $hash;
	}
	
	/************* Rename the file ***************/
	function nFileName(){
		switch($this->Mode){
			case '1':					//With the date named
				return $this->nFileName=date("Ymdhis").".".$this->getFileType();
				break;
			case '2':					//Random character-naming
				return $this->nFileName=$this->random(32).".".$this->getFileType();
				break;
			case '3':					//Date MD5 encryption named
				return $this->nFileName=md5(date("Ymdhis")).".".$this->getFileType();
				break;
			case '4':					//Date MD5 encryption named
				return $this->nFileName=date("Ymdhis").$this->random(6).".".$this->getFileType();
				break;
			default:
				return $this->nFileName=date("Ymdhis").".".$this->getFileType();
				break;
		}
	}
	
	/********** Get upload the file size **********/
	function GetFileSize(){
		if($this->TempFile!=''){
			return filesize($this->TempFile);
		} else {
			return false;
		}
	}
	
	/********** Upload files to specific directory **********/
	function upload_file() {
		if ($this->TempFile!="") {
			if(($this->MaxSize*1024)>$this->GetFileSize()){
				if ($this->check_dir()) {
					if ($this->checkFileType()) {
						$this->FilePath=$this->SavePath.$this->nFileName();
						if (@copy($this->TempFile,$this->FilePath) || (function_exists('move_uploaded_file') && @move_uploaded_file($this->TempFile,$this->FilePath))) 
						{ 
							@unlink($this->TempFile);
							return true;
						} else {
							return false;
						}
					}
				}
			}
		}
	}	
	function error($function,$errormsg)
	{
		 exit('Error in file <b>'.__FILE__.'</b> ,Function <b>'.$function.'()</b> :'.$errormsg);
	}
}
?>