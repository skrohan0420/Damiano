<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Common extends CI_Controller
{
	public function __construct()
	{
		ini_set('error_reporting', E_ALL & ~E_DEPRECATED);
		parent::__construct();

	}

	public function response($resp)
	{
		$response = json_encode($resp);
		echo $response;
	}

	public function init_model($model)
	{
		$this->load->model($model);
	}

	public function load_page($page, $data)
	{
		$this->load_headers($data['data_header']);
		$this->load->view($page, $data['data_page']);
		$this->load_footers($data['data_footer']);
	}
	private function load_headers($data)
	{
		$this->init_model(MODEL_PAGES);
		$this->load->view('/' . $data['site'] . '/inc/header_link.php', $data);
		$this->load->view('/' . $data['site'] . '/inc/header.php',  $data);

	}

	private function load_footers($data)
	{

		$this->load->view('/' . $data['site'] . '/inc/footer.php');
		$this->load->view('/' . $data['site'] . '/inc/footer_link.php', $data);

	}
	public function load_login()
	{
		$this->load->view('admin/login');

	}
	public function prd($data)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		die();
	}
	public function pr($data)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}

	private function uid()
	{
		return strtoupper(bin2hex(openssl_random_pseudo_bytes(4)));
	}

	public function generate_uid($purpose)
	{
		return $purpose . $this->uid() . date('Ymd');
	}


	public function upload_files($path, $file_name, $allowed_types, $max_size)
	{
		if (!file_exists($path)) {
			mkdir($path, 0777, true);
		}
		$config['upload_path'] = $path;
		$config['allowed_types'] = $allowed_types;
		$config['max_size'] = $max_size;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		$data = [];

		//$this->prd($_FILES[$file_name]);

		if (count($_FILES[$file_name]['name']) == 1) {
			$_FILES['userfile']['name'] 	= $_FILES[$file_name]['name'][0];
			$_FILES['userfile']['type'] 	= $_FILES[$file_name]['type'][0];
			$_FILES['userfile']['tmp_name'] = $_FILES[$file_name]['tmp_name'][0];
			$_FILES['userfile']['error'] 	= $_FILES[$file_name]['error'][0];
			$_FILES['userfile']['size'] 	= $_FILES[$file_name]['size'][0];

			$this->upload->initialize($config);
			$this->upload->do_upload('userfile');

			$data = $this->upload->data();
			return $data;
		} else {
			foreach ($_FILES[$file_name]['name'] as $key => $value) {
				$_FILES['userfile']['name'] 	= $_FILES[$file_name]['name'][$key];
				$_FILES['userfile']['type'] 	= $_FILES[$file_name]['type'][$key];
				$_FILES['userfile']['tmp_name'] = $_FILES[$file_name]['tmp_name'][$key];
				$_FILES['userfile']['error'] 	= $_FILES[$file_name]['error'][$key];
				$_FILES['userfile']['size'] 	= $_FILES[$file_name]['size'][$key];

				$this->upload->initialize($config);
				$this->upload->do_upload('userfile');

				$data[$key] = $this->upload->data();
			}
			return  $data;
		}

	}

	public function isAssociativeArray($array)
	{
		if (!is_array($array)) {
			return false;
		}

		$keys = array_keys($array);

		// Check if the keys are sequential (0, 1, 2, ...) or non-sequential
		return array_keys($keys) !== $keys;
	}

}

?>