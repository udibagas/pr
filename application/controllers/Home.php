<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public $auth_only = true;

	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		redirect('home/order');
	}

	public function order()
	{
		// get filter from user input
		$q = $this->input->get('q');
		$work_package = $this->input->get('work_package');
		$aircraft = $this->input->get('aircraft');
		$category = $this->input->get('category');
		$action = $this->input->get('action');

		// default condition for "Order"
		$condition = 'doc_type LIKE "maintenance" ';

		if ($q) {
			$condition .= "AND (doc_no LIKE '%{$q}%'
				OR doc_work_package LIKE '%{$q}%'
				OR doc_aircraft LIKE '%{$q}%'
				OR doc_category LIKE '%{$q}%')";
		}

		if ($work_package) {
			$condition .= "AND doc_work_package LIKE '%{$work_package}%' ";
		}

		if ($aircraft) {
			$condition .= "AND doc_aircraft LIKE '%{$aircraft}%' ";
		}

		if ($category) {
			$condition .= "AND doc_category LIKE '%{$category}%' ";
		}

		$pagination = array(
			'base_url' => site_url('home/order'),
			'total_rows' => $this->db
						->join('ziw39', 'ziw39.order1 = docfiles.doc_no', 'LEFT')
						->where($condition)
						->count_all_results('docfiles'),
			'per_page' => 10
		);

        $this->pagination->initialize($pagination);
		$this->scripts = array('performance/_script');
		$offset = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

		// document_received, document_rejected, document_returned ambil dari doc_log
		// TODO : document filed ambil dari dokmee

		$sql = "SELECT
				d.*,
				ziw39.actual_order_finish_date AS transaction_completed,
				(SELECT TOP 1 log_posting_date
					FROM doc_log
					WHERE log_status = 'Available' AND log_docno = d.doc_no
					ORDER BY log_posting_date DESC) AS document_received,
				(SELECT TOP 1 log_posting_date
					FROM doc_log
					WHERE log_status = 'Return' AND log_docno = d.doc_no
					ORDER BY log_posting_date DESC) AS document_returned,
				(SELECT TOP 1 log_posting_date
					FROM doc_log
					WHERE log_status = 'Rejected' AND log_docno = d.doc_no
					ORDER BY log_posting_date DESC) AS document_rejected
			FROM docfiles d
			LEFT JOIN ziw39 ON ziw39.order1 = d.doc_no
			WHERE $condition
			ORDER BY doc_posting_date DESC";

		// untuk export pdf & excel
		$data_all = $this->db->query($sql)->result();

		// untuk pagination
		$sql .= " OFFSET $offset ROWS FETCH NEXT {$pagination['per_page']} ROWS ONLY";
		$data = $this->db->query($sql)->result();

		if ($action == 'export_to_excel')
		{
			header("Content-type: application/vnd-ms-excel");
			header("Content-Disposition: attachment; filename=performance-record.xls");
			header("Pragma: no-cache");
			header("Expires: 0");

			$this->load->view('performance/excel', array(
				'data' => $data_all
			));
		}

		else if ($action == 'export_to_pdf')
		{
			$html = $this->load->view('templates/pdf', array(
				'content' => $this->load
								->view('performance/pdf', array(
									'data' => $data_all
								), true)
			), true);

			// for debug only
			// echo $html;
			// exit();

			$this->load->helper("pdf");
			$dompdf = dompdf();
			$dompdf->loadHtml($html);
		    $dompdf->setPaper('A4', 'landscape');
		    $dompdf->render();
		    $dompdf->stream('performace-record-order.pdf');
		}

		else
		{
			// TODO: hitung untuk tampil di grafik
			$trx_completed = 0;
			$doc_received = 0;
			$doc_rejected = 0;
			$doc_filed = 0;
			$doc_returned = 0;

			foreach ($data_all as $d)
			{
				if ($d->transaction_completed){
					$trx_completed += 1;
				}

				if ($d->document_received){
					$doc_received += 1;
				}

				if ($d->document_rejected){
					$doc_rejected += 1;
				}

				if ($d->document_returned){
					$doc_returned += 1;
				}
			}

			$this->render('performance/index', array(
				'view' => 'performance/_data',
				'data_all' => $data_all,
				'data' => $data,
				'trx_completed' => $trx_completed,
				'doc_received' => $doc_received,
				'doc_rejected' => $doc_rejected,
				'doc_filed' => $doc_filed,
				'doc_returned' => $doc_returned,
				'period_start' => $data_all[count($data_all) - 1]->transaction_completed,
				'period_end' => $data_all[0]->transaction_completed,
			));
		}

	}

	public function good_receipt()
	{
		// get filter from user input
		$q = $this->input->get('q');
		$work_package = $this->input->get('work_package');
		$aircraft = $this->input->get('aircraft');
		$category = $this->input->get('category');

		// default condition for "Order"
		$condition = 'doc_type LIKE "batch" ';

		if ($q) {
			$condition .= "AND (doc_no LIKE '%{$q}%'
				OR doc_work_package LIKE '%{$q}%'
				OR doc_aircraft LIKE '%{$q}%'
				OR doc_category LIKE '%{$q}%')";
		}

		if ($work_package) {
			$condition .= "AND doc_work_package LIKE '%{$work_package}%' ";
		}

		if ($aircraft) {
			$condition .= "AND doc_aircraft LIKE '%{$aircraft}%' ";
		}

		if ($category) {
			$condition .= "AND doc_category LIKE '%{$category}%' ";
		}

		$pagination = array(
			'base_url' => site_url('home/order'),
			'total_rows' => $this->db
						->join('mb51', 'mb51.batch = docfiles.doc_no', 'LEFT')
						->where($condition)
						->count_all_results('docfiles'),
			'per_page' => 10
		);

        $this->pagination->initialize($pagination);
		$this->scripts = array('performance/_script');
		$offset = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

		// document_received, document_rejected, document_returned ambil dari doc_log
		// document filed ambil dari dokmee
		// TODO: benerin query
		$sql = "SELECT
				d.*,
				NULL AS transaction_completed,
				(SELECT TOP 1 log_posting_date
					FROM doc_log
					WHERE log_status = 'Available' AND log_docno = d.doc_no
					ORDER BY log_posting_date DESC) AS document_received,
				(SELECT TOP 1 log_posting_date
					FROM doc_log
					WHERE log_status = 'Return' AND log_docno = d.doc_no
					ORDER BY log_posting_date DESC) AS document_returned,
				(SELECT TOP 1 log_posting_date
					FROM doc_log
					WHERE log_status = 'Rejected' AND log_docno = d.doc_no
					ORDER BY log_posting_date DESC) AS document_rejected
			FROM docfiles d
			LEFT JOIN mb51 ON mb51.batch = d.doc_no
			WHERE $condition
			ORDER BY doc_posting_date DESC
			OFFSET $offset ROWS
			FETCH NEXT {$pagination['per_page']} ROWS ONLY";

		$this->render('performance/index', array(
			'view' => 'performance/_data',
			'data' => $this->db->query($sql)->result(),
		));
	}

	public function revision()
	{
		$this->render('performance/index', array(
			'view' => 'performance/_data',
			'data' => array()
		));
	}

	public function notification()
	{
		$this->render('performance/index', array(
			'view' => 'performance/_data',
			'data' => array()
		));
	}
}
