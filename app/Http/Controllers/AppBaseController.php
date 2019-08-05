<?php

namespace App\Http\Controllers;

use InfyOm\Generator\Utils\ResponseUtil;
use Response;
use Auth;

/**
 * @SWG\Swagger(
 *   basePath="api/v1",
 *   @SWG\Info(
 *     title="Laravel Generator APIs",
 *     version="1.0.0",
 *   )
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller
{

    public function randomName($length)
    {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }
    
    public function uploadFile($request, $field_name)
    {
        
        $imageName = NULL;
        
        if ($request->file($field_name)) :
            
            //$imageName = pathinfo($request->file($field_name)->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $this->randomName(12).".".$request->file($field_name)->getClientOriginalExtension();
            $request->file($field_name)->move(base_path() . '/public/uploads/', $imageName);
        endif;

        return $imageName;
    }
}
