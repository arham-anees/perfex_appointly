<?php defined('BASEPATH') or exit('No direct script access allowed');

class Affiliate_training_videos extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Affiliate_training_videos_model');
    }

    public function index()
    {
        $data['videos'] = $this->Affiliate_training_videos_model->get_all();
        $this->load->view('leadevo/affiliate-training-videos/affiliate_training_videos', $data);
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'url' => $this->input->post('url')
            ];

            if ($this->Affiliate_training_videos_model->update($id, $data)) {
                set_alert('success', 'Video information updated successfully.');
            } else {
                set_alert('danger', 'Failed to update video information.');
            }
            redirect(admin_url('leadevo/affiliate_training_videos'));
        }

        $data['video'] = $this->Affiliate_training_videos_model->get($id);
        $this->load->view('leadevo/affiliate-training-videos/edit', $data);
    }

    public function delete($id)
    {
        if ($this->Affiliate_training_videos_model->delete($id)) {
            set_alert('success', 'Video deleted successfully.');
        } else {
            set_alert('danger', 'Failed to delete video.');
        }
        redirect(admin_url('leadevo/affiliate_training_videos'));
    }

    public function view($id)
    {
        $data['video'] = $this->Affiliate_training_videos_model->get($id);
        $this->load->view('leadevo/affiliate-training-videos/view', $data);
    }
}
