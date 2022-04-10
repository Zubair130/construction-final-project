<?php
defined('BASEPATH') or exit('No direct script access allowed');
class My_model extends CI_Model
{
    public function insertData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function insertID($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function insertBatch($table, $data)
    {
        $this->db->insert_batch($table, $data);
    }

    public function getData($table, $resultType = 'result_array', $arg = [])
    {
        if (isset($arg['select'])) {
            $this->db->select($arg['select']);
        }
        if (isset($arg['where'])) {
            $this->db->where($arg['where']);
        }
        if (isset($arg['where_in'])) {
            $this->db->where_in($arg['where_in']);
        }
        if (isset($arg['or_where'])) {
            $this->db->where($arg['or_where']);
        }
        if (isset($arg['join'])) {
            $this->db->join($arg['join']['table'], $arg['join']['query'], $arg['join']['type']);
        }
        if (isset($arg['join1'])) {
            $this->db->join($arg['join1']['table'], $arg['join1']['query'], $arg['join1']['type']);
        }
        if (isset($arg['join2'])) {
            $this->db->join($arg['join2']['table'], $arg['join2']['query'], $arg['join2']['type']);
        }
        if (isset($arg['join3'])) {
            $this->db->join($arg['join3']['table'], $arg['join3']['query'], $arg['join3']['type']);
        }
        if (isset($arg['join4'])) {
            $this->db->join($arg['join4']['table'], $arg['join4']['query'], $arg['join4']['type']);
        }
        if (isset($arg['group'])) {
            $this->db->group_by($arg['group']['col']);
        }
        if (isset($arg['limit'])) {
            $this->db->limit($arg['limit']['value'], $arg['limit']['offset']);
        }
        if (isset($arg['order'])) {
            $this->db->order_by($arg['order']['col'], $arg['order']['type']);
        }
        if (isset($arg['order2'])) {
            $this->db->order_by($arg['order2'][0]['col'], $arg['order2'][0]['type']);
            $this->db->order_by($arg['order2'][1]['col'], $arg['order2'][1]['type']);
        }
        if (isset($arg['like'])) {
            $this->db->like($arg['like']['col'], $arg['like']['query']);
        }
        if ($resultType == "result_array") {
            $return = $this->db->get($table)->result_array();
        } else if ($resultType == "row_array") {
            $return = $this->db->get($table)->row_array();
        } else if ($resultType == "row") {
            $return = $this->db->get($table)->row();
        } else if ($resultType == "result") {
            $return = $this->db->get($table)->result();
        } else if ($resultType == "count_all_results") {
            $return = $this->db->count_all_results($table);
        }
        return $return;
    }

    public function updateData($table, $data, $where = false)
    {
        if ($where !== false) {
            $this->db->where($where);
        }
        $this->db->update($table, $data);
    }

    public function updateBatch($table, $data, $where)
    {
        $this->db->update_batch($table, $data, $where);
    }

    public function deleteData($table, $data)
    {
        $this->db->delete($table, $data);
    }

    public function deleteBatch($table, $field, $data)
    {
        $this->db->where_in($field, $data);
        $this->db->delete($table);
    }
}  