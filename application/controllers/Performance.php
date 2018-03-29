<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance extends MY_Controller {

	public $auth_only = true;

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->page_title = 'PERFORMANCE';

		$this->breadcrumbs = array(
			'performance' => 'Performance'
		);

		$valid_object = array('order', 'good_receipt');
		$q = $this->input->get('q');
		$status = $this->input->get('status');
		$object = in_array($this->input->get('object'), $valid_object) ? $this->input->get('object') : 'order';

		if ($object == 'order') {
			$doc_type = 'Maintenance';
		}

		if ($object == 'good_receipt') {
			$doc_type = 'Batch';
		}

		$status_condition = (!$status || $status == 'All') ? '1 = 1' : "doc_status = '{$status}'";

		$performance = $this->db
			->select('docfiles.*, ziw39.actual_order_finish_date as transaction_completed')
			->join('ziw39', 'ziw39.order1 = docfiles.doc_no', 'LEFT')
			->where('doc_type', $doc_type)
			->where($status_condition)
			->group_start()
				->like('doc_no', $q)
				->or_like('doc_aircraft', $q)
				->or_like('doc_work_package', $q)
				->or_like('doc_category', $q)
				->or_like('doc_reason', $q)
			->group_end()
			->get('docfiles')
			->result();

		$action = $this->input->get('action');

		if ($action == 'export_to_excel')
		{
			header("Content-type: application/vnd-ms-excel");
			header("Content-Disposition: attachment; filename=performance-record.xls");
			header("Pragma: no-cache");
			header("Expires: 0");

			$this->load->view('performance/excel', array(
				'performance' => $performance
			));
		}

		else if ($action == 'export_to_pdf')
		{
			$html = $this->load->view('templates/pdf', array(
				'content' => $this->load->view('performance/pdf', array('performance' => $performance), true)
			), true);

			// echo $html;

			$this->load->helper("pdf");
			$dompdf = dompdf();
			$dompdf->loadHtml($html);
		    $dompdf->setPaper('A4', 'landscape');
		    $dompdf->render();
		    $dompdf->stream('performace-record.pdf');
		}

		else
		{
			$this->scripts = array('performance/_script');

			$this->render('performance/index', array(
				'object' => $object,
				'performance' => $performance
			));
		}
	}
}
