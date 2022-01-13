 <?php
class Home extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('Course_c', 'c');
		$this->load->model('Video_v','v');
		
	}
	
	public function index()
	{
		$this->accueil();
	}

	public function accueil()
	{
		$this->load->view('home/header',true);
		$this->load->view('home/accueil');
		$this->load->view('home/footer');
	}
	public function courses()
	{
		$this->load->view('home/header',true);
		$data['courses'] = $this->c->courseTitle();
		//var_dump($data['courses']);die;
		$data['course_titles'] = $this->c->getAllcoursesTitle();
		$this->load->view('home/courses',$data);
		$this->load->view('home/footer');
	}
	public function articles()
	{
		$dir    = 'application/views/articles';
		$files['file'] = scandir($dir);
		
		
		$this->load->view('home/header',true);
		$this->load->view('home/articles',$files);
		$this->load->view('home/footer');
	}
	public function forum()
	{
		$this->load->view('home/header',true);
		$this->load->view('home/forum');
		$this->load->view('home/footer');
	}
	public function concepts()
	{
		$this->load->view('home/header',true);
		$this->load->view('home/concepts');
		$this->load->view('home/footer');
	}
	public function projects()
	{
		$this->load->view('home/header',true);
		$this->load->view('home/projects');
		$this->load->view('home/footer');
	}
	public function videos()
	{
		$this->load->view('home/header',true);
		$data['videos'] = $this->v->videoTitle();
		//var_dump($data['videos']);die;
		$data['video_titles'] = $this->v->getAllvideosTitle();
		$this->load->view('home/videos',$data);
		$this->load->view('home/footer');
	}
	
	public function connexion()
	{
		$this->load->view('connexion/login_form');
	}
	public function conn()
	{
		$this->load->view('home/header',true);
		$this->load->view('home/conn');
	}
	
	public function inscription()
	
	{
		$data['page_de_inscription'] = true; 
		$this->load->view('home/header',$data);
		$this->load->view('inscription/signin');
	}
}