<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use Session;

class DecController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
 * @OA\Get(
 *  path="/deconnexion",
 *      summary="dec()",
 *     @OA\Response(response="200", description=" Déconnecter et fermer la session"),
 *
 * )
 */
    public function dec(){
        auth()->logout();
        Session::flush();
        return redirect('/');
    }
}
