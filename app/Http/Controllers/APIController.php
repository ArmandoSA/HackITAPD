<?php

namespace App\Http\Controllers;

use App\API;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Schema;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carrito = API::all();
        $alldata=[];
        return view('welcome')->with(compact('carrito',"alldata"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $alldata=[] ;
        $string = $request->input('hola');

        $client = new Client();
        $url ='https://wsgi.cisco.com/cso/search/SearchExtService';
        $array = 'query={"appId":"2905745d38","query":"'.$string.'","hits":"500","filterQuery": ["table:cdc"],"sort": [".score:desc","date:desc"],"offset": ["0"],"securityRealmId": ["cisco"],"securityPrincipalId": ["jesutorr"],"securityPrincipalName": ["jesutorr"],"fields": ["title" ],"collapse": ["partition_key"],"appName": ["HackIT"],"appOwner": ["jesutorr"]}&src=TOPIC';
        $res = $client->request('POST', $url, [
        'body' => $array,
        'headers' => [
        'Content-Type'     => 'application/x-www-form-urlencoded',
        ],
        'auth' => [
                'jossanc3', 
                'Peppillo&123']    

        ]);


        echo $res->getStatusCode();
        $data = json_decode($res->getBody(),true);
        
        
        $alldata= $data['documents'];
        // dd($data['documents'][8]);
        // foreach($data['documents'] as $datos){
        //     dd($datos['fields']['title'][0]);
            
        //     $title = $datos['fields']['title'][0];
        //     $url = $datos['fields']['uri'][0];
        //     $date = $datos['fields']['date'][0];
            
        //     $alldata = array(
        //         "title" => $title,
        //         "url" => $url,
        //         "date" => $date
        //       );   

        // }
       

        
        return view('welcome')->with(compact('alldata'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function edit(API $aPI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, API $aPI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(API $aPI)
    {
        //
    }
}
