<?php
 class ControllerBlogBlog extends Controller {
 	public function index() {
 		$this->language->load('blog/blog');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
 		   'text' => $this->language->get('text_home'),
 		   'href' => $this->url->link('common/home')
 		);

		$data['breadcrumbs'][] = array(
 		  'text' => $this->language->get('blog'),
 		  'href' => $this->url->link('blog/blog', '', true)
		);

		$data['breadcrumbs'][] = array(
 		  'text' => $this->language->get('blog'),
 		  'href' => $this->url->link('blog/blog')
 		);

		$data['column_left'] = $this->load->controller('common/column_left');
 		$data['column_right'] = $this->load->controller('common/column_right');
 		$data['content_top'] = $this->load->controller('common/content_top');
 		$data['content_bottom'] = $this->load->controller('common/content_bottom');
 		$data['footer'] = $this->load->controller('common/footer');
 		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('extension/module/blog', $data));
	}
}?>
