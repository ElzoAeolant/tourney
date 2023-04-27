<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Participant;
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
            /*'data1' => 'required',
            'data2' => 'required',
            'url' => 'required',*/
        ]);
        $newId = Participant::latest()->first();
        if ( isset($newId->id) ){
            $newId = $newId->id + 1;
        }else{
            $newId = 1;
        }
        $newId =  "pepebots_" . date('ymdhis') . "_" . str_pad($newId, 4, "0", STR_PAD_LEFT); 

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $input['folio'] = $newId;
        $destinationPath = public_path('/tourney/');
        $filename = $newId.".jpeg";
        $filenameOut = $destinationPath . $filename;
        $contentOrFalseOnFailure   = file_get_contents($input['url']);
        $byteCountOrFalseOnFailure = file_put_contents($filenameOut, $contentOrFalseOnFailure);
        $part = new Participant();
        $part->create($input);
        $success['code'] =  '00'; 
        $success['message'] =  "El registro fue creado satisfactoriamente, tu folio de participación es:*". $newId . "*.";
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