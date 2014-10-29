<?php
/**
 * Murat ÇAMCI Tarafından Oluşturulmuştur
 * Tarih: 28.10.14
 * Saat: 19:11
 * Dosya : LoginController.php
 */

class LoginController extends BaseController {

        public function login(){
            $user = array(
                'kullanici' => Input::get('kullanici'),
                'password' => Input::get('sifre')
            );

            if (Auth::attempt($user)) {
               Return Redirect::to('/');

            }

              Return Redirect::to('login');
        }

    public function register(){
        return View::make('user.register');
    }

    public function registerPost(){
        $rules = array("kullanici" => "required",
        "sifre" => "required");
        $mesaj = array(
            'required' => 'Please fill in all fields'
        );

        $valid = Validator::make(Input::all(),$rules,$mesaj);
        if($valid->fails()){
            return Redirect::back()->withInput()->withErrors($valid);
        }else{
            $new = new User;
            $new->kullanici = Input::get('kullanici');
            $new->password     = Hash::make(Input::get('sifre'));
            $new->save();
            return Redirect::to('login');
        }
    }

} 