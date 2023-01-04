<?php
class Products_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read_datatable($condition)
    {
        $query = [
            'result' => 'result',
            'table'  => 'products',
            'select' => ['product_id', 'product_slug', 'product_title', 'product_icon'],
        ];

        $query += $this->lib_db->filter_datatables($condition);
        $data = [
            'total_rows' => $this->lib_db->count_all($query),
            'result' => $this->lib_db->read($query),
            'searchable' => array_map(function ($e) {
                return $e . ":name";
            }, $condition['column_search'])
        ];

        return objectify($data);
    }

    public function read_all()
    {
        $query = [
            'result' => 'result',
            'table'  => 'products',
        ];

        $data = [
            'result' => $this->lib_db->read($query)
        ];

        return objectify($data);
    }

    public function read($product_id)
    {
        $query = [
            'result' => 'row',
            'table'  => 'products',
            'where'  => ['product_id' => $product_id]
        ];

        $data = [
            'result' => $this->lib_db->read($query)
        ];
        return objectify($data);
    }

    public function create($data)
    {
        return $this->lib_db->insert('products', $data);
    }

    public function update($data)
    {
        $where = ['product_id' => $data['product_id']];
        return $this->lib_db->update('products', $data['data'], $where);
    }
    public function delete($selections)
    {
        $selections = array_map(function ($e) {
            return ['product_id' => piljur_decrypt($e)];
        }, $selections);
        $response = $this->lib_db->delete('products', $selections);
        return $response;
    }
}
