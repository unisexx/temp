<?php

class Webboards extends Public_Controller
{
	function __construct()
	{	
		$webboard_status_config = new webboard_status_config(1);
		
		if($webboard_status_config->board_status == 0){
			if (!is_login('Administrator')){
				redirect('webboards/close');
			}
		}
		
		parent::__construct();
		//$this->template->set_layout('webboard');
	}
	
	function index()
	{
		$data['slug'] = 'main';
		$data['categories'] = new webboard_category();
		$data['categories']->order_by('orderlist','asc')->get();
		$this->template->build('webboard_index',$data);
	}
	
	function category($id)
	{
		$data['slug'] = 'main';
		$data['category'] = new webboard_category($id);
		$data['category_id'] = $id;
		$data['webboard_quizs'] = new Webboard_quiz();
		$data['webboard_quizs']->where("webboard_category_id = $id and stick = 0")->order_by('id','desc')->get_page();
		$data['webboard_quizs_stick'] = new Webboard_quiz();
		$data['webboard_quizs_stick']->where("webboard_category_id = $id and stick = 1")->order_by('id','desc')->get_page();
		$this->template->build('webboard_topic_list',$data);
	}
	
	function view_topic($id)
	{
		$data['slug'] = 'main';
		$data['webboard_quizs'] = new Webboard_quiz($id);
		$data['webboard_quizs']->counter();
		$user_id = $data['webboard_quizs']->user_id;
		
		$webboard_answers = new Webboard_answer();
		$data['webboard_answers'] = $webboard_answers->where("webboard_quiz_id = '$id' order by id asc")->get_page(10);
		
		$data['webboard_quiz'] = new Webboard_quiz();
		$data['webboard_answer'] = new Webboard_answer();
		
		$data['user_session'] = $this->session->userdata('id');
		$this->template->build('webboard_view_topic',$data);
	}
	
	function newtopic($cat_id,$type,$id=FALSE)
	{
		$data['slug'] = 'main';
        /*
		if(!is_login()){
			set_notify('error','กรุณาเข้าสู่ระบบ');
			$site_redirect = "webboards/category/".$cat_id;
			redirect($site_redirect);
		}
        */
		$data['topic_type'] = $type;
		$data['categories'] = new webboard_category($cat_id);
		$data['webboard_quizs'] = new Webboard_quiz($id);
		$data['user'] = new User();
		$this->template->build('webboard_new_topic_form',$data);
	}
	
	function save($cat_id,$id=FALSE)
	{
		if($_POST){
			if($_POST['captcha']<>$this->session->userdata('captcha'))
			{
				set_notify('error','กรอกรหัสไม่ถูกต้อง');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$webboard_quiz = new Webboard_quiz($id);
				if(isset($webboard_quiz->user_id)){
					$_POST['user_id'] = $webboard_quiz->user_id;
				}else{
					$_POST['user_id'] = $this->session->userdata('id');
				}
				$_POST['group_id']=(@isset($_POST['group_id']))? $_POST['group_id']:'0';
				$webboard_quiz->ip = $this->input->ip_address();
				$webboard_quiz->from_array($_POST);
				$webboard_quiz->save();
				
				if($_POST['type'] == "vote")
				{
					foreach($_POST['name'] as $key => $item)
					{
						$id = $webboard_quiz->id;
						if($item)
						{
							$webboard_polldetail = new Webboard_polldetail(@$_POST['detail_id'][$key]);
							$webboard_polldetail->from_array(array('name' => $item,'webboard_quiz_id'=> $id));
							$webboard_polldetail->save();
						}
					}	
				}
				set_notify('success','Save Data Complete');
			}
		}
		$site_redirect = "webboards/category/".$cat_id;
		redirect($site_redirect);
	}
	
	function reply($topic_id,$quote_id=FALSE,$type=FALSE)
	{
		$data['slug'] = 'main';
        /*
		if(!is_login()){
			set_notify('error','กรุณาเข้าสู่ระบบ');
			$site_redirect = "webboards/view_topic/".$topic_id;
			redirect($site_redirect);
		}
		*/
		$data['webboard_quiz'] = new Webboard_quiz($topic_id);
		
		
		
		$data['type'] = $type;
		$data['quote_id'] = $quote_id;
		//$data['webboard_quiz'] = new Webboard_quiz($topic_id);
		$data['webboard_answer'] = new Webboard_answer($quote_id);
		
		if($type == "edit" && !is_owner($data['webboard_answer']->user_id)){
			set_notify('error','ไม่สามารถเข้าถึงได้');
			$site_redirect = "webboards/view_topic/".$topic_id;
			redirect($site_redirect);
		}

		$this->template->build('webboard_reply_form',$data);
	}
	
	function save_reply($topic_id,$id=FALSE,$type=FALSE)
	{
		if($_POST){
			if($_POST['captcha']<>$this->session->userdata('captcha'))
			{
				set_notify('error','กรอกรหัสไม่ถูกต้อง');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				if($type == "edit"){
					$webboard_answer = new Webboard_answer($id);
				}else{
					$webboard_answer = new Webboard_answer();
				}
				$_POST['webboard_quiz_id'] =  $topic_id;
				$_POST['user_id'] = $this->session->userdata('id');
				$webboard_answer->ip = $this->input->ip_address();
				$webboard_answer->from_array($_POST);
				$webboard_answer->save();
				set_notify('success', 'Save Data Complete');
			}
		}
		$site_redirect = "webboards/view_topic/".$topic_id;
		redirect($site_redirect);
	}
	
	
	
	function relate($quiz_id,$ans_id)
	{
		$data['quiz_id'] =  $quiz_id;
		$data['ans_id'] =  $ans_id;
		$this->template->set_layout('blank');
		$this->template->build('webboard_relate_form',$data);
	}
	
	// function save_relate()
	// {
		// if($_POST){
			// $webboard_relate_dels = new Webboard_relate_del();
			// $_POST['user_id'] = $this->session->userdata('id');
			// $webboard_relate_dels->from_array($_POST);
			// $webboard_relate_dels->save();
			// set_notify('success', 'แจ้งลบความเห็นเรียบร้อย');
			// echo '<script type="text/javascript">
					// parent.location = unescape(parent.location.pathname);
					// </script>
			// ';
		// }
	// }
	function save_relate()
	{
	    if(!is_login()){
            set_notify('error','กรุณาเข้าสู่ระบบ');
            redirect($_SERVER['HTTP_REFERER']);
        }
		if($_POST && is_login()){
			$webboard_relate_dels = new Webboard_relate_del();
			$_POST['user_id'] = $this->session->userdata('id');
			$webboard_relate_dels->from_array($_POST);
			$webboard_relate_dels->save();
			set_notify('success', 'แจ้งลบความเห็นเรียบร้อย');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	
	function vote()
	{
		$webboard_pollresult = new webboard_pollresult();
		$webboard_pollresult->ip = $this->input->ip_address();
		$webboard_pollresult->webboard_quiz_id = $_GET['id'];
		$webboard_pollresult->webboard_polldetail_id = $_GET['id_ans'];
		$webboard_pollresult->save();

		$this->view($_GET['id']);
	}
	
	function view($id = FALSE)
	{
		$data['webboard_quizs'] = new Webboard_quiz();
		$data['webboard_quizs']->sql("select webboard_polldetails.*,round((count(webboard_pollresults.webboard_quiz_id)/(select count(webboard_quiz_id) from webboard_pollresults where webboard_quiz_id = $id)*100),2) percent,count(webboard_pollresults.id) num
from webboard_polldetails left join webboard_pollresults
on webboard_polldetails.id = webboard_pollresults.webboard_polldetail_id
where webboard_polldetails.webboard_quiz_id = $id
group by webboard_pollresults.webboard_polldetail_id
order by id asc")->get_page();
		//$data['polls']->checked
		$this->load->view('webboard_view_poll',$data);
	}
	
	function delete_poll_choice($id = FALSE)
	{
		if($id)
		{
			$webboard_polldetail = new Webboard_polldetail($id);
			$parent = $webboard_polldetail->webboard_quiz_id;
			$category_id = $webboard_polldetail->webboard_quiz->category_id;
			$webboard_polldetail->delete();
			set_notify('success','delete_data_complete');
		} 
		redirect('webboards/newtopic/'.$category_id.'/vote/'.$parent);
	}
	
	function delete_topic($id)
	{
		if(is_login('Administrator') or is_owner($webboard_quiz->user_id)){
			if($id)
			{
				$webboard_quiz = new webboard_quiz($id);
				$category_id = $webboard_quiz->webboard_category_id;
				if($webboard_quiz->type == "vote"){
					$webboard_quiz->webboard_polldetail->delete_all();
					$webboard_quiz->webboard_pollresult->delete_all();
				}
				$webboard_quiz->webboard_answer->delete_all();
				$webboard_quiz->delete();
				
				set_notify('success', 'delete_data_complete');
			} 
			redirect('webboards/category/'.$category_id);
		}else{
			$webboard_quiz = new webboard_quiz($id);
			$category_id = $webboard_quiz->category_id;
			set_notify('error','ไม่สามารถเข้าถึงได้');
			redirect('webboards/category/'.$category_id);
		}
	}
	
	function delete_answer($id)
	{
		$webboard_answer = new Webboard_answer($id);
		if(is_login('Administrator') or is_owner($webboard_answer->user_id)){
			if($id){
				$webboard_answer = new webboard_answer($id);
				$topic_id = $webboard_answer->webboard_quiz->id;
				$webboard_answer->delete();
				set_notify('success', 'ลบคำตอบเรียบร้อย');
			} 
			redirect('webboards/view_topic/'.$topic_id);
		}else{
			$webboard_answer = new webboard_answer($id);
			$topic_id = $webboard_answer->webboard_quiz->id;
			set_notify('error','ไม่สามารถเข้าถึงได้');
			redirect('webboards/view_topic/'.$topic_id);
			redirect($site_redirect);
		}
	}
	
	function stick_thread($id)
	{
		$data = new Webboard_quiz($id);
		$data->stick = 1;
		$data->save();
		set_notify('success', 'ปักหมุดกระทู้เรียบร้อย');
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function unstick_thread($id)
	{
		$data = new Webboard_quiz($id);
		$data->stick = 0;
		$data->save();
		set_notify('success', 'ยกเลิกการปักหมุดกระทู้เรียบร้อย');
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function topic_move_category($topic_id){
		$data['webboard_quizs'] = new Webboard_quiz($topic_id);
		$this->template->set_layout('blank');
		$this->template->build('webboard_topic_move_form',$data);
	}
	
	function save_topic_move($id=FALSE){
		if($_POST){
			$webboard_quiz = new Webboard_quiz($id);
			$webboard_quiz->from_array($_POST);
			$webboard_quiz->save();
			set_notify('success', 'ย้ายกระทู้เรียบร้อย');
			echo '<script type="text/javascript">
					parent.location = unescape(parent.location.pathname);
					</script>
			';
		}
	}
	
}

?>