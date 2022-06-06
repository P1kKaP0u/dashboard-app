<?php
class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Users_model");
        $this->viewFolder = "users_v";
        
    }

    public function index()
    {
        
         /* Tablodan verilerin getirilmesi */
         $items = $this->Users_model->get_all();
         /* Verinin incelenmesi */
        //print_r($items);

        /* View yapısının kurulması */

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }

    public function newForm()
    {
        
        /* View yapısının kurulması */
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
        
    }

    public function insert()
    {

        $data = array(

            "user_name" => $this->input->post("user_name"),
            "full_name" => $this->input->post("full_name"),       
            "email"     => $this->input->post("email"),
            "isactive"  => $this->input->post("isactive")
            
        );
        

        
        $insert = $this->Users_model->insert($data);
        if($insert)
        {
            redirect("users/index");
        }
        else{
            redirect("users/newForm");
        }
    }


    public function delete($where = array ())
    {

        $delete = $this->Users_model->delete($where);
        if($delete)
        {
            redirect("users/index");
        }

    }


    public function updateForm($where = array())
    {

        $items = array(

            "items" => $this->Users_model->get($where)

        );

        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "update";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);

    }


    public function update($where = array())
    {
     
      
        $data = array(

            "user_name" => $this->input->post("user_name"),
            "full_name" => $this->input->post("full_name"),       
            "email"     => $this->input->post("email"),
            "isactive"  => $this->input->post("isactive")
            
        );

        $update = $this->Users_model->update($where, $data);
        if($update)
        {
            redirect("users/index");
        }  
        
    }




}




?>