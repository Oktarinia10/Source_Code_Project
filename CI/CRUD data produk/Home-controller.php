<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('products/Products_model', 'products_m');
    }

    public function index()
    {
        if ($this->input->is_ajax_request()) {
            $request_type = $this->input->get_post('request_type');
            switch ($request_type) {
                case 'request-table':
                    return $this->_datatable();
                    break;
                case 'delete':
                    return $this->_delete();
                    break;
            }
            return null;
        }
        $this->v_data += [
            'page_title' => 'Daftar Produk',
        ];
        $this->load->view('templates/v_header', $this->v_data);
        $this->load->view('products/home/v_index');
        $this->load->view('templates/v_footer');
    }

    public function create()
    {
        $_POST['product_slug'] = $this->input->post('product_title');
        $this->form_validation->set_rules([

            [
                'field' => 'product_title',
                'label' => 'Product Title',
                'rules' => 'required|trim|to_spaces|is_unique[products.product_title]',

            ],
            [
                'field' => 'product_slug',
                'label' => 'Product Slug',
                'rules' => 'trim|required|make_slug[products.product_slug]',

            ],
            [
                'field' => 'product_desc',
                'label' => 'Deskripsi Produk',
                'rules' => 'trim|required',

            ],
            [
                'field' => 'product_icon',
                'label' => 'Ikon Produk',
                'rules' => 'required|trim',

            ],

        ]);

        if ($this->form_validation->run() === FALSE) {
            $this->v_data += [
                'page_title' => 'Tambah Produk',
            ];
            $this->load->view('templates/v_header', $this->v_data);
            $this->load->view('products/home/v_crud');
            $this->load->view('templates/v_footer');
        } else {
            $product_data = [
                'product_id' => $this->input->post('product_id'),
                'product_title' => $this->input->post('product_title'),
                'product_slug' => $this->input->post('product_slug'),
                'product_desc' => $this->input->post('product_desc'),
                'product_icon' => $this->input->post('product_icon'),
            ];
            if ($this->products_m->create($product_data)) {
                $flash = [
                    'message'   => 'Berhasil menambahkan produk',
                    'type'        => 'success',
                ];
            } else {
                $flash = [
                    'message'   => 'Gagal menambahkan produk',
                    'type'        => 'danger',
                ];
            }
            set_flash($flash);
            return redirect('produk');
        }
    }
    public function update($product_id = '')
    {
        $product_id = piljur_decrypt($product_id);
        $product_data = $this->products_m->read($product_id);
        if (!$product_id or !$product_data->result) {
            return show_404();
        }
        $product_title = $product_data->result->product_title;
        $_POST['product_slug'] = $this->input->post('product_title');

        $this->form_validation->set_rules([

            [
                'field' => 'product_title',
                'label' => 'Nama Produk',
                'rules' => "required|trim|to_spaces|is_unique[products.product_title,product_title,{$product_title}]",

            ],
            [
                'field' => 'product_slug',
                'label' => 'Produk Slug',
                'rules' => 'trim|required|make_slug[products.product_slug,product_slug]',

            ],
            [
                'field' => 'product_desc',
                'label' => 'Deskripsi Produk',
                'rules' => 'trim|required',

            ],

            [
                'field' => 'product_icon',
                'label' => 'Ikon produk',
                'rules' => 'required|trim',

            ],

        ]);

        if ($this->form_validation->run() === FALSE) {
            $this->v_data += [
                'page_title' => 'Ubah Produk',
                'products' => $product_data->result,
            ];
            $this->load->view('templates/v_header', $this->v_data);
            $this->load->view('products/home/v_crud');
            $this->load->view('templates/v_footer');
        } else {
            $product_data = [
                'product_id' => $product_id,
                'data' => [
                    'product_slug' => $this->input->post('product_slug'),
                    'product_title' => $this->input->post('product_title'),
                    'product_desc' => $this->input->post('product_desc'),
                    'product_icon' => $this->input->post('product_icon'),
                ]
            ];
            if ($this->products_m->update($product_data)) {
                $flash = [
                    'message'   => 'Berhasil mengubah produk',
                    'type'        => 'success',
                ];
            } else {
                $flash = [
                    'message'   => 'Gagal mengubah produk',
                    'type'        => 'danger',
                ];
            }
            set_flash($flash);
            return redirect('produk');
        }
    }


    private function _datatable()
    {
        $condition = [
            'limit' => $this->input->get('length'),
            'offset' => $this->input->get('start'),
            'filter' => $this->input->get('searchBuilder'),
            'order' => $this->input->get('order')[0] ?? '',
            'search' => $this->input->get('search')['value'] ?? '',
            'column_search' => $this->input->get('searchable'),
            "orderable" => $this->input->get('orderable')
        ];
        $products = $this->products_m->read_datatable($condition);
        $data = $ids = [];
        foreach ($products->result as $field) {
            $product_id = piljur_encrypt($field->product_id);
            $ids[] = $product_id;
            $row = [
                'unique_id' => $product_id,
                'product_slug' => $field->product_slug,
                'product_title' => $field->product_title,
                'product_icon' => $field->product_icon,
            ];
            $data[] = $row;
        }

        $output = [
            "draw" => $this->input->get('draw'),
            "recordsFiltered" => $products->total_rows,
            "recordsTotal" => $products->total_rows,
            "data" => $data,
            "ids" => $ids,
        ];
        echo json_encode($output);
    }

    private function _delete()
    {
        $delete_data = $this->input->post('selections');
        $response = false;
        if ($delete_data) {
            $response = $this->products_m->delete($delete_data);
            if ($response > 0) {
                $flash = [
                    'message'   => "{$response} data produk berhasil dihapus",
                    'type'        => 'success',
                ];
                set_flash($flash);
            } else {
                $flash = [
                    'message'   => "Data produk gagal dihapus",
                    'type'        => 'success',
                ];
                set_flash($flash);
            }
        }
        echo json_encode($response);
    }
}
