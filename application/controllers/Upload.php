<?php 
if (!empty($_FILES['filetoupload']['tmp_name'])) {
	//$myfile = fopen($_FILES['filetoupload']['tmp_name'], "r") or die("Unable to open file!");
	//echo pathinfo($_FILES['filetoupload']['name'],PATHINFO_EXTENSION);
	// var_dump($_FILES['filetoupload']);
	$arrayExtension = array('png','jpg','gif' );
	$filename=$_FILES['filetoupload']['name'];
	if (in_array(pathinfo($filename,PATHINFO_EXTENSION),$arrayExtension)) {
		if (!file_exists("uploads/".$filename)) {
			move_uploaded_file($_FILES['filetoupload']['tmp_name'],"uploads/".$filename);
			$img=imagecreatefromgif("uploads/".$filename);
			// if (imagecreatefromgif("uploads/".$filename)!==FALSE) {
			// 	$this->session->set_flashdata('message', 'Upload file success');
			// 	redirect('functionality?page=upload_form');
			// }
			// else
			// {
			// 	$this->session->set_flashdata('message', 'Upload file fail');
			// 	redirect('functionality?page=upload_form');
			// }
		}

		else
		{
			$this->session->set_flashdata('message', 'File exist!');
			redirect('functionality?page=upload_form');
		}
	}
	else
	{
		$this->session->set_flashdata('message', 'File upload not invalid type.');
		redirect('functionality?page=upload_form');
	}
	//$img=imagecreatefromgif($_FILES['filetoupload']['path']);
	//fclose($myfile);
	//echo "Upload thành công!";
	// unset($_FILES);
}
else {
	echo "Chưa chọn file để upload";
}
?>