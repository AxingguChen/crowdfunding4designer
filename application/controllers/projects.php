<?php
/*
test123
*/
class Projects extends CI_Controller
{
	private $SEARCH_BY_TITLE = 1;
	private $SEARCH_BY_CLOTHER_TYPE_ID = 2;

	public function __construct()
	{
	  parent::__construct();
	}
	
	//access
	//index.php/projects
	public function index()
	{
		$this->load->model('projects_model');		
		$data['rows'] = $this->projects_model->get_all();
		$this->load->view('projects_view', $data);
	}

	//access
	//index.php/projects/project/1
	public function project($projects_id = 1)
	{
		if ($projects_id > 0)
		{
			$this->load->model('projects_model');		
			$data['rows'] = $this->projects_model->get_by_id($projects_id);
		}
		else
		{
			$data['rows'] = array();
		}
		$this->load->view('project_view', $data);
		//comment should by get Asynchronously
		//here call it due to debug easily
		$this->comments($projects_id);
	}

	//access
	//index.php/projects/comments/2
	public function comments($projects_id = 0)
	{
		if ($projects_id > 0)
		{
			$this->load->model('project_comment_model');		
			$data['rows'] = $this->project_comment_model->get_comments_of_project($projects_id);
		}
		else
		{
			$data['rows'] = array();
		}

		$this->load->view('project_comment_view', $data);
	}

	//access
	//index.php/projects/search/1/coat
	//index.php/projects/search/2/2
	public function search($search_flag, $search_conent)
	{
		if ($search_flag == $this->SEARCH_BY_TITLE)
		{
			$this->load->model('projects_model');		
			$data['rows'] = $this->projects_model->get_by_project_title($search_conent);
		}
		else if ($search_flag == $this->SEARCH_BY_CLOTHER_TYPE_ID)
		{
			$this->load->model('projects_model');		
			$data['rows'] = $this->projects_model->get_by_clothes_type_id($search_conent);
		}
		else
		{
			$data['rows'] = array();
		}
		$this->load->view('projects_search_view', $data);
	}

	public function delete()
	{
		
	}

	public function modify()
	{

	}

	public function create()
	{
		print_r($this->input->post(NULL, TRUE));
		if (!$this->input->post(NULL, TRUE))
		{
			$this->load->view('project_create_view');
		}
		else
		{
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			/*
			 * for debug easily
			$this->form_validation->set_rules('madeof', 'Madeof', 'required');
			$this->form_validation->set_rules('howtowash', 'Howtowash', 'required');
			$this->form_validation->set_rules('whyme', 'Whyme', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('round', 'Round', 'required');
			$this->form_validation->set_rules('current_sale', 'Current Sale', 'required');
			$this->form_validation->set_rules('minimum_sale', 'Minimum Sale', 'required');
			 */

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('project_create_view');
			}
			else
			{
				$this->load->model('projects_model');		
				$data = $this->input->post(NULL, TRUE);
				// login do not done
				$data['users_id'] = 1;

				$ret = $this->projects_model->insert_project($data);
				if ($ret >= 0)
				{
					$data['rows'] = 1;
					//return succ
				}
				else
				{
					$data['rows'] = 2;
					//return fail
				}
				// for debug
				$this->load->view('project_create_view', $data);
			}
		}
	}
}
?>
