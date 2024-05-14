<?php


namespace App\Controllers;

/**
 * Description of ServiceController
 *
 * @author P  R  O  T  A  P
 */
class ServiceController extends BaseController{
    
    public function index(){
        $data = [
            "page_title" => "Services",
            "page_heading" => "Service Heading",
            "users"=>[
                ["id"=>1, "name"=>"Protap Barman", "email"=>"protaprocks@gmail.com"],
                ["id"=>2, "name"=>"Bipasha Bagchi", "email"=>"bipasha@gmail.com"],
                ["id"=>3, "name"=>"Riya Barman", "email"=>"riya@gmail.com"],
            ]
        ];
        return view("service_view",$data);
    }
    
    public function create(){
        return "<h1>this is create page</h1>";
    }
    
}
