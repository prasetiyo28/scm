<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('MScm');

	}
	public function index()
	{
		$id = $this->session->userdata('user_id');

		$data['content'] = $this->load->view('kasir/pages/dashboard','',true);
		$this->load->view('kasir/default',$data);
	}

	public function transaksi(){
		$data2['data'] = $this->MScm->get_paket_all();
		$data['content'] = $this->load->view('kasir/pages/transaksi',$data2,true);
		$this->load->view('kasir/default',$data);
	}

    public function penjualan()
    {
        $userid = $this->session->userdata('user_id');
        $id_cabang = $this->MScm->get_kasir($userid)->id_cabang;

        $data2['penjualan'] = $this->MScm->get_penjualan($id_cabang);
        $data['content'] = $this->load->view('kasir/pages/data_penjualan',$data2,true);
        $this->load->view('kasir/default',$data);
        // echo json_encode($data2);
    }

	function add_to_cart(){ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('produk_id'), 
			'name' => $this->input->post('produk_nama'), 
			'price' => $this->input->post('produk_harga'), 
			'qty' => $this->input->post('quantity'), 
		);
		$this->cart->insert($data);
        echo $this->show_cart(); //tampilkan cart setelah added
    }

    function show_cart(){ //Fungsi untuk menampilkan Cart
    	$output = '';
    	$no = 0;
    	foreach ($this->cart->contents() as $items) {
    		$no++;
    		$output .='
    		<tr>
    		<td>'.$items['name'].'</td>
    		<td>'.number_format($items['price']).'</td>
    		<td>'.$items['qty'].'</td>
    		<td>'.number_format($items['subtotal']).'</td>
    		<td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
    		</tr>
    		';
    	}
    	$output .= '
    	<tr>
    	<th colspan="3">Total</th>
    	<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
    	</tr>
    	';
    	return $output;
    }

    function load_cart(){ //load data cart
    	echo $this->show_cart();
    }

    function hapus_cart(){ //fungsi untuk menghapus item cart
    	$data = array(
    		'rowid' => $this->input->post('row_id'), 
    		'qty' => 0, 
    	);
    	$this->cart->update($data);
    	echo $this->show_cart();
    }

    public function checkout(){
        $userid = $this->session->userdata('user_id');
        $id_cabang = $this->MScm->get_kasir($userid)->id_cabang;
        $data2['bayar'] = $this->input->post('bayar');
        $data2['total'] = $this->cart->total();
        $id_struk = intval($this->MScm->get_id_struk()->struk) + 1;
        foreach ($this->cart->contents() as $items) {

            $data['jumlah'] = $items['qty'];
            $data['id_paket'] = $items['id'];
            $data['id_cabang'] = $id_cabang;

            $data['struk'] = $id_struk;
            $this->MScm->tambah_data('transaksi',$data);
            // $this->Amcloth->update_stock($data['id_stock'],$items['qty']);
            // echo json_encode($data);
        }

        $data2['cart'] = $this->cart->contents();

        $this->cart->destroy();

        $this->load->view('kasir/pages/struk',$data2);
        // echo json_encode($id_struk);

        

    }

}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */