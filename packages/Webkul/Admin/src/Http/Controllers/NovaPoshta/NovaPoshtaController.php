<?php

namespace Webkul\Admin\Http\Controllers\NovaPoshta;

use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Attribute\Http\Requests\AttributeForm;

class NovaPoshtaController extends Controller
{

    public function __construct()
    {
        
    }

    public function index()
    {
      $data_1 = [
        'apiKey' => '3b3bcc32ff8ca33f778a7265f2598554',
        'modelName' => "TrackingDocument",
        "calledMethod" => "getStatusDocuments",
        "methodProperties" => (object) [
          "Documents" => [
            (object) [
              "DocumentNumber" => "20400048799000",
              "Phone" => "380600000000",
            ],
          ]
        ],
      ];

      $data = [
        'title' => 'foo',
        'body' => "bar",
        "userId" => 1
      ];

      $ch = curl_init('https://jsonplaceholder.typicode.com/posts');
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HEADER, false);
      $res = curl_exec($ch);
      curl_close($ch);

      $res = json_encode($res, JSON_UNESCAPED_UNICODE);

      echo "<pre>";
      print_r($res);
      echo "</pre>";

    }

    public function create()
    {

    }

    public function store(AttributeForm $request)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(AttributeForm $request, $id)
    {
       
    }


    public function search()
    {
        
    }

    public function destroy($id)
    {
        
    }

    public function massDestroy()
    {
        
    }
}
