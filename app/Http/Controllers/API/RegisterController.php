<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
   
class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            /**'data1' => 'required',
            'data2' => 'required',
            'url' => 'required',*/
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $destinationPath = public_path('/tourney/');
        $filename = date('y-m-d-h-i-s').".jpeg";
        $filenameOut = $destinationPath . $filename;
        $contentOrFalseOnFailure   = file_get_contents($input['url']);
        $byteCountOrFalseOnFailure = file_put_contents($filenameOut, $contentOrFalseOnFailure);

        $success['code'] =  '00'; 
        $success['message'] =  "https://pepebot.ecosur.mx:10443/tourney/".$filename;
        // TODO Crear un folio de seguimiento para el concursante. 
        return $this->sendResponse($success, 'Contestant register successfully.');
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function createToken(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('pepebotsTourney')->plainTextToken; 
            $success['name'] =  $user->name;
            return $this->sendResponse($success, 'User token created successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }
}