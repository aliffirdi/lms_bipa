<?php
/**
|--------------------------------------------------------------------------|
| Copyright Notice                                                         |
|--------------------------------------------------------------------------|
| TOLONG UNTUK TIDAK MENGUBAH-UBAH SCRIPT DALAM HALAMAN INI TANPA          |
| SEIZIN DARI PEMILIK SOURCE CODE. HARAGAILAH SETIAP PEKERJAAN YANG        |
| TELAH DILAKUKAN OLEH PEMBUAT APLIKASI INI. JIKA ANDA INGIN MENGUBAH      |
| SEBAGIAN ATAU SELURUH KODE YANG ADA DALAM SCRIPT DIBAWAH INI TOLONG      |
| HUBUNGI E-MAIL AUTHOR!!!.                                                |
|--------------------------------------------------------------------------|
 */
/**
 * @package sms
 * @author alif firdi <aliffirdi07@gmail.com>
 * @copyright 2020
 * @link https://aliffirdi.me
 * @since 1.0.0 beta
 */
class data_model extends CI_Model{
	function get($data)
	{
		$db_debug 			= $this->db->db_debug;
		$this->db->db_debug = FALSE;
		$result				= $this->db->get($data);
		$this->db->db_debug = $db_debug;

		return $result;
	}
	function ketika($db,$data)
	{
		$db_debug 			= $this->db->db_debug;
		$this->db->db_debug = FALSE;
		$result 			= $this->db->get_where($db,$data);
		$this->db->db_debug = $db_debug;

		return $result;
	}
	function update($db,$data,$syarat)
	{
		$db_debug 			= $this->db->db_debug;
		$this->db->db_debug = FALSE;
		$result 			= $this->db->update($db, $data, $syarat);
		$this->db->db_debug = $db_debug;

		return $result;
	}
	function insert($db,$data)
	{
		$db_debug 			= $this->db->db_debug;
		$this->db->db_debug = FALSE;
		$result 			= $this->db->insert($db, $data);
		$this->db->db_debug = $db_debug;

		return $result;
	}
	function delete($db,$data)
	{
		return $this->db->delete($db, $data);
	}
}