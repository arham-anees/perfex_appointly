<?php defined('BASEPATH') or exit('No direct script access allowed');

class Explanatory_videos_model extends CI_Model
{
    protected $table = 'tblleadevo_explanatory_videos';

    public function __construct()
    {
        parent::__construct();
        // Correctly load the 'leadevo_marketplace' database connection
        $this->load->database();

    }

    public function get_all()
    {
        $query = $this->db->get($this->table);
        if ($query === FALSE) {
            log_message('error', 'Query failed in get_all method.');
            return [];
        }
        return $query->result_array();
    }
    // Insert a new explanatory video
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Update an existing explanatory video
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    // Delete an explanatory video
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    // Get a single explanatory video by ID
    public function get($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->table)->row_array();
    }
}
