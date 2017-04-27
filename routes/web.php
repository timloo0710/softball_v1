<?php

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

use App\User;
use App\Address;
use App\Post;
use App\Role;

use Illuminate\Http\Request;
//use Request;

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'WelcomeController@index');

Route::get('/getRequest', function(Request $request){
    if($request->ajax()){
        return "服務端有把要求傳回給用戶端，已接到請求";
    }
});

Route::post('/register', function(Request $request){
    if($request->ajax()){
        $fname = $request->input('firstname');
        $lname = $request->input('lastname');

        $reg = new App\Register;
        $reg->firstname = $fname;
        $reg->lastname = $lname;

        $reg->save();
        return Response::json($request->all());//"服務端有把要求傳回給用戶端，已接到請求";
    }
});

Route::get('/cups', function () {
    return view('hello');
});

Route::get('/cups/{id}', function ($id) {
    $cup = App\Cup::findOrFail($id);
    return $cup->toJson();
});

Route::put('/cups/{id}', function ($id,Request $request) {
    $cup = App\Cup::findOrFail($id);
    $cup->cupname = $request->input('cupname');
    $cup->place = $request->input('place');
    $cup->creator = $request->input('creator');
    //$cup->junior = $request->input('junior');
    $cup->save();

    $cups = App\Cup::select('id','cupname')->get();
    return $cups->toJson();
});

Route::delete('/cups/{id}', function ($id) {
    $cup = App\Cup::findOrFail($id);
    $cup->delete();

    $cups = App\Cup::select('id','cupname')->get();
    return $cups->toJson();
});


Route::post('/cups/store', function(Request $request){
    if($request->ajax()){
        //$fname = $request->input('cupname');
        //$lname = $request->input('place');
        //$fname = $request->input('creator');
        //$lname = $request->input('junior');

        $cup = new App\Cup;
        $cup->cupname = $request->input('cupname');
        $cup->place = $request->input('place');
        $cup->creator = $request->input('creator');
        $cup->interval ="四月第二週"; 
        $cup->teams ="多筆，參賽學校，被school";
        $cup->memos ="多讀手冊不見得有效，因為不知道這種情況"; 
        //$cup->junior = $request->input('junior');

        $cup->save();

        //$cups = DB::table('cups')->pluck('id', 'cupname');

        //return Response::json($request->all());//"服務端有把要求傳回給用戶端，已接到請求";
        //return Response::json($cups);
        //return ['cups' => $cups];
        //$cups = App\Cup::find(2);//with('id','cupname')->first(); //all()
        $cups = App\Cup::select('id','cupname')->get();
        return $cups->toJson();

    }
});


Route::get('/schools/all', function(Request $request){
       // $cid = $request->cup_id;
        $schools = App\School::select('id','name')->all(); //where('cup_id', $cid )->get();
        return $schools->toJson();
});

Route::get('/schools/byCup', function(Request $request){
    if($request->ajax()){
        $cid = $request->cup_id;
        $schools = App\School::select('id','name')->where('cup_id', $cid )->get();
        return $schools->toJson();
    }
});



Route::get('/schools/{id}', function($id){
    $school = App\School::findOrFail($id);
    return $school->toJson();
});

Route::put('/schools/{id}', function ($id,Request $request) {
    $school = App\School::findOrFail($id);
    $school->name = $request->input('schoolname');
    $school->save();

    $schools = App\School::select('id','name')->get();
    return $schools->toJson();
});

Route::delete('/schools/{id}', function ($id) {
    $school = App\School::findOrFail($id);
    $school->delete();

    $school = App\School::select('id','name')->get();
    return $school->toJson();
});


Route::post('/schools/store', function(Request $request){
    if($request->ajax()){
        $school = new App\School;
        $school->name = $request->input('schoolname');
        $school->cup_id = $request->input('cup_id');
        $school->save();
        $cid = $request->cup_id;
        $schools = App\School::select('id','name')->where('cup_id', $cid )->get();
        return $schools->toJson();
    }
});


Route::get('/matches/all', function(Request $request){
    if($request->ajax()){
        $cid = $request->cup_id;
        $matches = App\Match::select('id','visit_name','host_name','game_order')->where('cup_id', $cid )->get();//->whereIn('id', array(1, 2, 3))
        return $matches->toJson();
    }
});


Route::get('/matches/{id}/edit', function ($id) {
    $match = App\Match::findOrFail($id);
    return $match->toJson();
});

Route::put('/matches/{id}', function ($id,Request $request) {
    $match = App\Match::findOrFail($id);
    $match->holded_at = $request->holded_at;
    $match->begin_time_set = $request->input('begin_time_set');
    $match->game_order = $request->input('game_order');
    $match->visit_name = $request->input('visit_name');
    $match->host_name = $request->input('host_name');
    $match->js = '高中';
    $match->cup_id = $request->input('cid');
    $match->save();

    $matches = App\Match::select('id','name')->get();
    return $matches->toJson();
});

Route::delete('/matches/{id}', function ($id) {
    $match = App\Match::findOrFail($id);
    $match->delete();

    $matches = App\Match::select('id','visit_name','host_name','game_order')->get(); //->where('cup_id', $cid )
    return $matches->toJson();
});


Route::post('/matches/store', function(Request $request){
    if($request->ajax()){
        $match = new App\Match;
        $match->holded_at = $request->holded_at;
        $match->begin_time_set = $request->input('begin_time_set');
        $match->game_order = $request->input('game_order');
        $match->visit_name = $request->input('visit_name');
        $match->host_name = $request->input('host_name');
        $match->js = '高中';
        $match->cup_id = $request->input('cid');
        $match->save();

        $cid = $request->cid;
        $matches = App\Match::select('id','visit_name','host_name','game_order')->where('cup_id', $cid )->get();//->whereIn('id', array(1, 2, 3))
        return $matches->toJson();
    }
});

Route::post('/students/store', function(Request $request){
    if($request->ajax()){
        $student = new App\Student;
        $student->name = $request->input('studentname');
        $student->school_id = $request->input('school_id');
        $student->save();
        $sid = $request->school_id;
        $students = App\Student::select('id','name')->where('school_id', $sid )->get();
        return $students->toJson();
    }
});

Route::get('/students/all', function(Request $request){
    if($request->ajax()){
        $sid = $request->school_id;
        $students = App\Student::select('id','name')->where('school_id', $sid )->get();
        return $students->toJson();
    }
});

Route::get('/students/hv', function(Request $request){
    if($request->ajax()){
        $match_id = $request->match_id;
        $hv = $request->hv;
        $hvs =null;
        $hv_name="";
        if ($hv == 'V')
        {
            $hvs=App\Match::select('visit_name')->where('id', $match_id )->get();//->keyBy('visit_name')->toArray();->values()
            //echo $hvs->visit_name;
            //$hv_name = $hvs['visit_name'];  
            foreach ($hvs as $v) {
                $hv_name= $v['visit_name'];
            }
        } else {
            $hvs =App\Match::select('host_name')->where('id', $match_id )->get();//->keyBy('host_name')->toArray();->values()
            // echo $hvs->host_name;
            //$hv_name = $hvs['host_name'];
            foreach ($hvs  as $h) {
                $hv_name=$h['host_name'];
            }

        }
        //dd($hvs);
        
        $sids = App\School::select('id')->where('name', $hv_name )->get();
        //dd($sid);
        foreach ($sids  as $si) {
            $sid=$si['id'];
        }

        $students = App\Student::select('id','name')->where('school_id', $sid )->get();
        return $students->toJson();
    }
});



Route::post('/players/store', function(Request $request){
    if($request->ajax()){
        $player = new App\Player;
        $player->hv = $request->hv;
        $player->hitorder = $request->input('hitorder');
        $player->pos = $request->input('pos');
        $player->name = $request->input('playername');
        $player->backno = $request->input('backno');
        //$player->js = '高中';
        $player->match_id = $request->input('mid');
        
        $player->save();
        $mid = $request->mid;
        $players = App\Player::select('backno','hv','name','hitorder','pos')->where('match_id', $mid )->get();
        return $players->toJson();
    }
});


Route::put('/pitchers/{id}', function ($id,Request $request) {
    $pitcher = App\Pitcher::findOrFail($id);
    $pitcher->inning_id = $request->inn;
    $pitcher->defender_id = $request->defender;
    $pitcher->attacker_id = $request->attacker;
    $pitcher->catcher = $request->catcher;
    $pitcher->p_result = $request->p_result;
    $pitcher->a_result = $request->a_result;
    $pitcher->d_result = $request->d_result;
    $pitcher->outs = $request->outs;
    $pitcher->defense = $request->defense;
    $pitcher->defense2 = $request->defense2;
    $pitcher->run = $request->run;
    $pitcher->save();
    $mid = $request->mid;
    $pitchers = App\Pitcher::select('inning_id','defender_id','attacker_id','p_result','outs','run','id')->where('match_id', $mid )->get();;
    return $pitchers->toJson();
});

Route::post('/pitchers/store', function(Request $request){
    if($request->ajax()){
        $pitcher = new App\Pitcher;
        //inn:inn,defender:defender,attacker:attacker,catcher:catcher,p_result:p_result,a_result:a_result,d_result:d_result,outs:outs,defense:defense,defense2:defense2,run:run
        $pitcher->inning_id = $request->inn;
        $pitcher->defender_id = $request->defender;
        $pitcher->attacker_id = $request->attacker;
        $pitcher->catcher = $request->catcher;
        $pitcher->passedball = "無";
        $pitcher->p_result = $request->p_result;
        $pitcher->a_result = $request->a_result;
        $pitcher->d_result = $request->d_result;
        $pitcher->outs = $request->outs;
        $pitcher->defense = $request->defense;
        $pitcher->defense2 = $request->defense2;
        $pitcher->defense3 = "無";
        $pitcher->home = "無";
        $pitcher->run = $request->run;
        $pitcher->match_id = $request->input('mid');
        $pitcher->save();

        $mid = $request->mid;
        $pitchers = App\Pitcher::select('inning_id','defender_id','attacker_id','p_result','outs','run')->where('match_id', $mid )->get();
        return $pitchers->toJson();
    }
});

Route::get('/pitchers/all', function(Request $request){
    if($request->ajax()){
        $mid = $request->mid;
        $pitchers = App\Pitcher::select('inning_id','defender_id','attacker_id','p_result','outs','run','id')->where('match_id', $mid )->get();
        return $pitchers->toJson();
    }
});

Route::get('/pitchers/{id}', function ($id) {
    $pitcher = App\Pitcher::findOrFail($id);
    return $pitcher->toJson();
});


Route::delete('/pitchers/{id}', function ($id) {
    $match = App\Match::findOrFail($id);
    $match->delete();

    $matches = App\Match::select('id','visit_name','host_name','game_order')->get(); //->where('cup_id', $cid )
    return $matches->toJson();
});


Route::post('/players/hv', function(Request $request){
    if($request->ajax()){
        $mid = $request->mid;
        $hv = $request->hv;
        $players = App\Player::select('backno','hv','name','hitorder','pos')->where('match_id', $mid )->where('hv', $hv )->get();
        return $players->toJson();
    }
});

Route::get('/players/all', function(Request $request){
    if($request->ajax()){
        $mid = $request->mid;
        $players = App\Player::select('id','backno','hv','name','hitorder','pos')->where('match_id', $mid )->get();
        return $players->toJson();
    }
});

Route::get('/style/{id}', function ( $id ) { 
    //Request $request
    //
    //$cup = DB::table('cups')->where('id', '=', 1)->get();
    //$match = DB::table('matches')->where('id', '=', 1)->get();
    //$player = DB::table('players')->where('id', '=', 1)->get();
    $style =  $id ;//$request->slStyle;;
    session(['style' => $style]);
    //$cup = DB::table('cups')->where('id', '=', 1)->get();
    //$switch = '1';
    //return view('home',compact('cup','match','player','style','switch'));
    $switch = session('switch');
    return redirect()->route('/home/',['switch' => $switch]);
    
});

Route::get('/home/{switch}', function ($switch) {
    //$users = DB::table('users')->get();
    //$users = DB::table('users')->where('votes', '=', 100)->get();
    //$cup = DB::table('cups')->where('id', '=', 1)->get();
    $cups = App\Cup::select('id','cupname')->get();
    $match = DB::table('matches')->where('id', '=', 1)->get();
    $player = DB::table('players')->where('id', '=', 1)->get();
    $style = session('style');;
    //$switch = '1';
    //$cup = DB::table('cups')->where('id', '=', 1)->get();
    session(['switch' => $switch]);
    if ($switch =='1')
        return view('home',compact('cups','match','player','style','switch'));
    else    
        return view('littledata',compact('cup','match','player','style','switch'));
});

//Route::resource('cups', 'CupController');

//Route::post('cups','CupController@store');
//Route::get('cups','CupController@store');


Route::get('/littledata', function () {
    //$users = DB::table('users')->get();
    //$users = DB::table('users')->where('votes', '=', 100)->get();
    $cup = DB::table('cups')->where('id', '=', 1)->get();
    $match = DB::table('matches')->where('id', '=', 1)->get();
    $player = DB::table('players')->where('id', '=', 1)->get();
    $style = '1';
    //$cup = DB::table('cups')->where('id', '=', 1)->get();
    
    return view('home',compact('cup','match','player','style'));
});


Route::get('account/login', function() {
  return View::make('login');
});
Route::post('account/login', 'AccountController@store');




Route::get('/create', function () {
    $user = User::findOrFail(3);

    $post = new Post(['title'=>'gy天氣變熱了','body'=>'xabcd1234432100 台灣的休斯頓裝肖 av NY NY 849487']);

    $user->posts()->save($post);

    $post = new Post(['title'=>'ggyy天氣變一點熱了','body'=>'98831234432100 台灣的休斯頓裝肖 av NY NY 849487']);

    $user->posts()->save($post);

    $post = new Post(['title'=>'ggyyggyy天氣變多點熱熱熱了','body'=>'94871234432100 台灣的休斯頓裝肖 av NY NY 849487']);

    $user->posts()->save($post);


});


Route::get('/query', function () {
    $user = User::findOrFail(3);

    //return $user->posts;
    //dd($user->posts);
    //dd($user);

    foreach($user->posts as $post){
        echo $post->title."<br>";
    }



});

Route::get('/modify', function () {
    $user = User::findOrFail(3);

    $user->posts()->where('id','=',6)->update(['title'=>'先設定where條件再設定where']);//whereid(1)


});

Route::get('/cancel', function () {
    $user = User::findOrFail(3);

    $user->posts()->where('id','=',5)->delete();//whereid(1)


});





Route::get('/insert', function () {
    $user = User::findOrFail(2);

    $address = new Address(['name'=>'1234432100 台灣的休斯頓裝肖 av NY NY 849487']);

    $user->address()->save($address);

});

Route::get('/update', function () {

   $address = Address::whereUserId(1)->first(); //where('user_id',1);
    
   $address->name = "4353第二次更新 update it" ;

   $address->save();


});


Route::get('/read', function () {

   $user = User::findOrFail(1);
    
   echo $user->address->name;

});

Route::get('/delete', function () {

   $user = User::findOrFail(1);

   $user->address()->delete();

   return "done";

});






Route::get('/new', function () {

   $user = User::find(4);

   $role = new Role(['name'=>'Administrator']);

   $user->roles()->save($role);





});

