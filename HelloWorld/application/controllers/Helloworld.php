<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helloworld extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('array');
		$this->load->helper('html');

		$images = directory_map('/mnt/images/');
		$image = get_cookie('image');

		if(sizeOf($images) === 0) {
			$data['image'] = img('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
		} else {
			if($image) {
				$data['image'] = img('/helloworld/show/' . $image, TRUE);
			} else {
				$data['image'] = img('/helloworld/show/' . random_element($images), TRUE);
			}
		}

		$this->load->view('index', $data);
	}

	public function show($file)
	{
		$this->load->helper('file');

		$mime = get_mime_by_extension($file);
		$image = read_file('/mnt/images/' . $file);

		$this->output->set_header('Cache-Control: no-cache, no-store, must-revalidate');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header('Expires: 0');
		$this->output->set_content_type($mime);
		$this->output->set_output($image);
	}

	public function save()
	{
		$this->load->helper('url');
		$this->load->helper('cookie');

		$config['upload_path'] = '/mnt/images/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);

		$this->upload->do_upload('file');
		$image = $this->upload->data();
		set_cookie('image', $image['file_name'], -1);
		redirect('/');
	}
}
