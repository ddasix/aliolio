<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Products;
use anlutro\cURL\cURL as cURL;

class ProductsController extends Controller
{
    public function __construct(){
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdts = Products::all();
        $curl = new cURL;
        $i = 0;
        
        foreach($pdts as $key => $val ){
            $response = $curl->get('http://kr.iherb.com/p/' . $val->PCODE);
            $meta_tags = $this->getMetaTags($response->body);
            
            $product_info[$i]['title'] = $meta_tags['og:title'];
            $product_info[$i]['amount_price'] = $meta_tags['og:price:amount'];
            $product_info[$i]['standard_price'] = $meta_tags['og:standard_price'];
            $product_info[$i]['brand'] = $meta_tags['og:brand'];
            $product_info[$i]['product_id'] = $meta_tags['og:product_id'];
            $product_info[$i]['availability'] = $meta_tags['og:availability'];
            $product_info[$i]['rating'] = $meta_tags['og:rating'];
            $product_info[$i]['rating_scale'] = $meta_tags['og:rating_scale'];
            $product_info[$i]['rating_count'] = $meta_tags['og:rating_count'];
            $product_info[$i]['images'] = $meta_tags['og:images'];
            $product_info[$i]['keywords'] = !empty($meta_tags['keywords'])?$meta_tags['keywords']:null;
            $product_info[$i]['description'] = explode(",",$meta_tags['description']);
            $product_info[$i]['image'] = $meta_tags['og:image'];
            
            $i++;
        }
        return view('main',['product_info'=>$product_info]);
    }
    
    private function getMetaTags($str)
    {
        $pattern = '
        ~<\s*meta\s

        # using lookahead to capture type to $1
            (?=[^>]*?
            \b(?:name|property|http-equiv)\s*=\s*
            (?|"\s*([^"]*?)\s*"|\'\s*([^\']*?)\s*\'|
            ([^"\'>]*?)(?=\s*/?\s*>|\s\w+\s*=))
        )

        # capture content to $2
        [^>]*?\bcontent\s*=\s*
            (?|"\s*([^"]*?)\s*"|\'\s*([^\']*?)\s*\'|
            ([^"\'>]*?)(?=\s*/?\s*>|\s\w+\s*=))
        [^>]*>

        ~ix';
        
        if(preg_match_all($pattern, $str, $out)){
            return $this->array_combine_($out[1], $out[2]);  
        }
        return array();
    }
    private function array_combine_($keys, $values)
    {
        $result = array();
        foreach ($keys as $i => $k) {
            $result[$k][] = $values[$i];
        }
        array_walk($result, create_function('&$v', '$v = (count($v) == 1)? array_pop($v): $v;'));
        return    $result;
    }

    public function productInfo($pcode){
        return view('products.layer_detail');
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
}
