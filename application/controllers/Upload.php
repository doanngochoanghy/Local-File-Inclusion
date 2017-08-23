<?php 
if (!empty($_FILES['filetoupload']['tmp_name'])) {
	//$myfile = fopen($_FILES['filetoupload']['tmp_name'], "r") or die("Unable to open file!");
	//echo pathinfo($_FILES['filetoupload']['name'],PATHINFO_EXTENSION);
	// var_dump($_FILES['filetoupload']);
	$arrayExtension = array('gif');
	$filename=$_FILES['filetoupload']['name'];
	if (in_array(pathinfo($filename,PATHINFO_EXTENSION),$arrayExtension)) {
		if (!file_exists("uploads/".$filename)) {
			move_uploaded_file($_FILES['filetoupload']['tmp_name'],"uploads/".$filename);
			$img=@imagecreatefromgif("uploads/".$filename);
			if ($img==False) {
				unlink("uploads/$filename");
				$this->session->set_flashdata('message', 'Upload Failed.');
			}
			else
			{
				$this->session->set_flashdata('message', 'Upload Successed.');
			}
		}

		else
		{
			$this->session->set_flashdata('message', 'File exist!');
		}
	}
	else
	{
		$this->session->set_flashdata('message', 'File upload not invalid type.');
	}
}
else {
	$this->session->set_flashdata('message', 'Chon file upload');
}
redirect('functionality?page=upload_form.php');
?>