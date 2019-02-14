<?php
class Cushy extends CI_Controller {
    public function view($page = 'index') {
        if ($page == 'get_client_info') {
            $params = array();
            $url = parse_url($_SERVER['REQUEST_URI']);
            parse_str($url('query'), $params);
            $sql = $this->db->query("SELECT * FROM member where alias = " . params[0]);

            return;
        }

        else if ($page == 'register') {
            $params = $this->uri->segment(2);
            $param = explode(":", $params);

            $name = urldecode($param[0]);
            $birth = $param[1];
            $tel = $param[2];
            $manager = urldecode($param[3]);
            $alias = urldecode($param[4]);

            $sql = $this->db->query("INSERT INTO member (name, birth, phone, assign, alias)" .
                    " VALUES ('" . $name . "', '" . $birth . "', '" . $tel . "', '" . $manager . "', '" . $alias . "')");

            return 200;
        }

        if (!file_exists(APPPATH.'views/pages/'.$page.'.php'))
            show_404();

        // $data['title'] = ucfirst($page);

        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        // $this->load->view('pages/'.$page, $data);
        // $this->load->view('pages/' . $page);

        switch ($page) {
            case 'program_list': {
                $sql = $this->db->query("SELECT * FROM program");
                $data['program'] = $sql->result();

                $this->load->view('pages/' . $page, $data);
            }

            default:
                $this->load->view('pages/' . $page);
        }


        $this->load->view('templates/footer');
    }
}