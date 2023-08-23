<?php
use App\Http\Controllers\HomeController;
use App\NewsletterList;
use Illuminate\Support\Facades\Route;
 use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::post('newsletter',function (Request $request){

    if(!$request->name || !$request->phone || !$request->email)
    {
        return redirect(route('home'))->with('error','Lütfen boş alan bırakmayınız! :/');

    }

$add_newsletter = NewsletterList::insert([
    'name'=>$request->name,
    'phone'=>$request->phone,
    'email'=>$request->email,
    'created_at'=>date('Y-m-d'),
]);
if ($add_newsletter)
{
    return redirect(route('home'))->with('message','Tebrikler abone listesine başarıyla kayıt oldunuz');
}
})->name('newsletter');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
