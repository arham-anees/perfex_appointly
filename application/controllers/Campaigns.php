<?php defined('BASEPATH') or exit('No direct script access allowed');

class Campaigns extends ClientsController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('leadevo/Campaigns_model');
    }

    public function index()
    {
        $data['campaigns'] = $this->Campaigns_model->get_all();
        $this->data($data);
        $this->view('clients/campaigns/campaign');
        $this->layout();
    }

    public function create()
    {
        if ($this->input->post()) {

            $start_date = $this->input->post('start_date');
            $end_date = $this->input->post('end_date');
            $current_date = date('Y-m-d');

            // Validate dates
            if ($start_date < $current_date) {
                $this->session->set_flashdata('error', 'Start date cannot be before the current date.');
                redirect(site_url('campaigns/create'));
            }
            if ($end_date < $start_date) {
                $this->session->set_flashdata('error', 'End date cannot be before the start date.');
                redirect(site_url('campaigns/create'));
            }
            if ($end_date < $current_date) {
                $this->session->set_flashdata('error', 'End date cannot be before the current date.');
                redirect(site_url('campaigns/create'));
            }
            // Collect data from POST request
            $data = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'status_id' => $this->input->post('status_id'),
                'budget' => $this->input->post('budget'),
                'is_active' => $this->input->post('is_active') ? 1 : 0,
                'tenant_id' => $this->tenant_id
            ];

            $this->Campaigns_model->insert($data);
            set_alert('success', 'Campaign created successfully.');
            redirect(site_url('leadevo/campaigns'));
        }

        // Fetch statuses for the dropdown
        $data['statuses'] = $this->Campaigns_model->get_campaign_statuses();

        // Load the view for creating a campaign
        // $this->load->view('setup/campaigns/campaign_create', $data);       
        $this->data($data);
        $this->view('clients/campaigns/campaign_create');
        $this->layout();
    }
    public function edit($id)
    {
        if ($this->input->post()) {

            $start_date = $this->input->post('start_date');
            $end_date = $this->input->post('end_date');
            $current_date = date('Y-m-d');

            // Validate dates
            if ($start_date < $current_date) {
                $this->session->set_flashdata('error', 'Start date cannot be before the current date.');
                redirect(site_url('campaigns/edit/' . $id));
            }
            if ($end_date < $start_date) {
                $this->session->set_flashdata('error', 'End date cannot be before the start date.');
                redirect(site_url('campaigns/edit/' . $id));
            }
            if ($end_date < $current_date) {
                $this->session->set_flashdata('error', 'End date cannot be before the current date.');
                redirect(site_url('campaigns/edit/' . $id));
            }
            $data = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'status_id' => $this->input->post('status_id'),
                'budget' => $this->input->post('budget'),
                'is_active' => $this->input->post('is_active') ? 1 : 0,
                'tenant_id' => $this->tenant_id

            ];
            $this->Campaigns_model->update($id, $data);
            set_alert('success', 'Campaign updated successfully.');
            redirect(site_url('campaigns'));
        }
        $data['campaign'] = $this->Campaigns_model->get($id);
        $data['statuses'] = $this->Campaigns_model->get_campaign_statuses();
        // $this->load->view('setup/campaigns/campaign_edit', $data);
        $this->data($data);
        $this->view('clients/campaigns/campaign_edit');
        $this->layout();
    }

    public function delete($id)
    {
        if ($this->Campaigns_model->delete($id)) {
            set_alert('success', 'Campaign deleted successfully.');
        } else {
            set_alert('danger', 'Failed to delete campaign.');
        }
        redirect(site_url('campaigns'));
    }

    public function view($id)
    {
        $data['campaign'] = $this->Campaigns_model->get($id);
        // $this->load->view('setup/campaigns/campaign_view', $data);
        $this->data($data);
        $this->view('clients/campaigns/campaign_view');
        $this->layout();
    }
}
