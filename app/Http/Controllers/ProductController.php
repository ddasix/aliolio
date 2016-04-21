<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Goutte\Client as GoutteClient;
use GuzzleHttp\Client as GuzzleClient;
use App\Products;
use App\OpenGraph;


class ProductController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$graph = OpenGraph::fetch('http://kr.iherb.com/p/40005');
		var_dump($graph->keys());
		var_dump($graph->schema);

		foreach ($graph as $key => $value) {
		    echo "$key => $value";
		}
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
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getAliExpressProductInfo() {
		echo "dasdadsads";
//        $url = Input::get("url");//
//        $guzzle = new GuzzleClient(
//                array(
//                    'defaults' => array(
//                        'allow_redirects' => false,
//                        'cookies' => false
//                    )
//                )
//            );
//        $client = new GoutteClient();
//        $client->setClient($guzzle);
//        $crawler = $client->request('GET', $url);
//        var_dump($crawler);
	}
	
	public function showDetail($id){
		//$cookie = new Cookie('ali_apache_id', '204.2.171.15.1449206506184.209652.6', false, '/', '.aliexpress.com', false, false, true);
/*
		$guzzle = new GuzzleClient(
					array(
						'defaults' => array(
							'allow_redirects' => false,
							'cookies' => false
						)
					)
				);
		$client = new GoutteClient();
		$client->setClient($guzzle);
		$crawler = $client->request('GET', '//www.aliexpress.com/item//'.$id.'.html');
		*/
		$crawler = $this->responseCurl('//www.aliexpress.com/item//'.$id.'.html');

		$images = $crawler->filter('.image-nav-item span img')->each(function ($node) {
			return str_replace("_50x50", "", $node->attr('src'));
		});

		return view('products.detail',['images'=>$images]);
	}

	private function responseCurl($url, array $params = []){
		$guzzle = new GuzzleClient(
					array(
						'defaults' => array(
							'allow_redirects' => false,
							'cookies' => false
						)
					)
				);
		$client = new GoutteClient();
		$client->setClient($guzzle);
		return $client->request('GET', $url, ['query'=>$params]);
	}
}
