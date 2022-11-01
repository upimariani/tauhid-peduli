<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPerhitungan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPerhitungan');
		$this->load->model('mPenilaian');
	}

	public function index()
	{
		$data = array(
			'data_siswa' => $this->mPerhitungan->hasil_siswa()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/aside');
		$this->load->view('Admin/vInformasiHasil', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function analisis()
	{
		$siswa = $this->mPenilaian->siswa();
		$total_raport = 0;

		$id_siswa = array();

		$var_raport = array();
		$var_tulis = array();
		$var_baca = array();
		$var_wawancara = array();
		$s = array();
		foreach ($siswa as $key => $value) {
			$id_siswa[] = $value->id_siswa;
			//variabel nilai raport
			$total_raport = $value->nilai_ing + $value->nilai_mtk + $value->nilai_indo;
			if ($total_raport >= 220 && $total_raport <= 235) {
				$var_raport[] = 1;
			} else if ($total_raport >= 236 && $total_raport <= 241) {
				$var_raport[] = 2;
			} else if ($total_raport >= 242 && $total_raport <= 300) {
				$var_raport[] = 3;
			} else if ($total_raport <= 219) {
				$var_raport[] = 1;
			}

			//variabel tes tulis
			if ($value->tes_tulis == '1') {
				$var_tulis[] = 1;
			} else if ($value->tes_tulis == '2') {
				$var_tulis[] = 2;
			} else if ($value->tes_tulis == '3') {
				$var_tulis[] = 3;
			}

			//variabel baca al-quran
			if ($value->tes_baca == '70') {
				$var_baca[] = 1;
			} else if ($value->tes_baca == '80') {
				$var_baca[] = 2;
			} else if ($value->tes_baca == '90') {
				$var_baca[] = 3;
			}

			//variabel tes wawancara
			if ($value->tes_wawancara == '70') {
				$var_wawancara[] = 1;
			} else if ($value->tes_wawancara == '80') {
				$var_wawancara[] = 2;
			} else if ($value->tes_wawancara == '90') {
				$var_wawancara[] = 3;
			}
		}

		// for ($i = 0; $i < sizeof($var_raport); $i++) {
		// 	echo $var_raport[$i];
		// 	echo '<br>';
		// }
		// echo '<hr>';
		// for ($j = 0; $j < sizeof($var_tulis); $j++) {
		// 	echo $var_tulis[$j];
		// 	echo '<br>';
		// }

		// echo '<hr>';
		// for ($k = 0; $k < sizeof($var_baca); $k++) {
		// 	echo $var_baca[$k];
		// 	echo '<br>';
		// }

		// echo '<hr>';
		// for ($l = 0; $l < sizeof($var_wawancara); $l++) {
		// 	echo $var_wawancara[$l];
		// 	echo '<br>';
		// }
		// echo '<hr>';

		for ($m = 0; $m < sizeof($var_tulis); $m++) {
			// echo $var_raport[$m];
			// echo $var_tulis[$m];
			// echo $var_baca[$m];
			// echo $var_wawancara[$m];
			// echo '<br>';

			$s[] = round((pow($var_raport[$m], 0.3)) * (pow($var_tulis[$m], 0.2)) * (pow($var_baca[$m], 0.2)) * (pow($var_wawancara[$m], 0.3)), 1);
		}

		//total s -> sn
		$tot = 0;
		for ($tot_pow = 0; $tot_pow < sizeof($s); $tot_pow++) {
			$tot += $s[$tot_pow];
		}
		echo '<br>Total ' .  $tot;


		$vektor = array();
		for ($pow = 0; $pow < sizeof($s); $pow++) {
			echo '<br>' .  $s[$pow];
			$vektor[] = round($s[$pow] / $tot, 4);
		}


		// rsort($vektor);

		for ($v = 0; $v < sizeof($vektor); $v++) {
			// echo '<br> Id Siswa : ' . $id_siswa[$v];
			// echo ' / ' . $vektor[$v];
			$data = array(
				'hasil' => $vektor[$v]
			);
			$this->db->where('id_siswa', $id_siswa[$v]);
			$this->db->update('data_siswa', $data);
		}

		$rangking = $this->mPerhitungan->rangking();
		$no = 1;
		foreach ($rangking as $key => $value) {
			$data = array(
				'keputusan' => $no++
			);
			$this->db->where('id_siswa', $value->id_siswa);
			$this->db->update('data_siswa', $data);
		}
		redirect('Admin/cDashboard');
	}
}

/* End of file cPerhitungan.php */
