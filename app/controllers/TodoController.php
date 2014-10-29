<?php
/**
 * Murat ÇAMCI Tarafından Oluşturulmuştur
 * Tarih: 28.10.14
 * Saat: 15:44
 * Dosya : TodoController.php
 */

class TodoController extends BaseController {


        public function index(){
                $items = Todo::where('user','=',Auth::user()->id)->orderBy("id","DESC")->get();
                return View::make('todo/index',compact('items'));

        }

        public function create(){
                return View::make('todo/create');
        }

        public function createPost(){

                $rules = array(
                    "title" => "required",
                    "body" => "required"
                );

            $mesaj = array(
                'required' => 'Please fill in all fields'
            );

                $valid = Validator::make(Input::all(),$rules,$mesaj);

                if($valid->fails()){

                        return Redirect::back()->withInput()->withErrors($valid);

                }else{
                        $todo = new Todo;
                        $todo->title = Input::get('title');
                        $todo->body  = Input::get('body');
                        $todo->status = 0;
                        $todo->user = Auth::user()->id;
                        $todo->save();
                        Return Redirect::back();
                }

        }

        public function todo($getID){

                $todo = Todo::where('id','=',$getID)
                    ->where('user','=',Auth::user()->id)
                    ->first();

                $files = FileSave::where('todo_id','=',$getID)->where('user','=',Auth::user()->id)
                ->orderBy("id","DESC")->get();
                return View::make('todo.todo',compact('todo','files'));
        }

        public function delete($getID){
                $todo = Todo::findorFail($getID);
                $todo->delete();
                return Redirect::to('/');
        }

        public function success($getID){
                $todo = Todo::findOrFail($getID);
                $todo->status = 1;
                $todo->save();
                Return Redirect::to('/');
        }
        public function nosuccess($getID){
            $todo = Todo::findOrFail($getID);
            $todo->status = 0;
            $todo->save();
            Return Redirect::to('/');
        }

        public function upload($getID){
            $file = Input::file('file');

            $rules = array('file' => 'required|max:1024|mimes:doc,docx,jpg,png,gif,pdf,js,html,css,jpeg,xls,xlsx,ptt,sql,csv');

            $mesaj = array(
                'required' => 'Please select a file to upload'
            , 'max'      => 'You can upload files up to :max kilobytes in size.'
            , 'mimes'    => 'You can not install this extension file extensions allowed<b> doc,docx,jpg,png,gif,pdf,js,html,css,jpeg,xls,xlsx,ptt,sql,csv</b>'

            );
            $valid = Validator::make(Input::all(),$rules,$mesaj);
            if($valid->fails()) {

                return Redirect::back()->withInput()->withErrors($valid);

            }else{

                if ($file) {

                    $yol = public_path() . '/uploads/';
                    $dosyaAdi = Str::random(5)."_"."$getID"."_".$file->getClientOriginalName();

                    $sonuc = Input::file('file')->move($yol, $dosyaAdi);

                    if ($sonuc) {

                        $save = new FileSave;
                        $save->todo_id = $getID;
                        $save->files = $dosyaAdi;
                        $save->user = Auth::user()->id;
                        $save->save();
                        return Redirect::back();
                    } else {
                        return Redirect::back();

                    }
                }
            }
        }

        public function show($file){

            $files = public_path() . '/uploads/'.$file;
            $fullPath = $files;
            if($fullPath) {
                $fsize = filesize($fullPath);
                $path_parts = pathinfo($fullPath);
                $ext = strtolower($path_parts["extension"]);

                        header("Content-type: application/octet-stream");
                        header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");

                if($fsize) {
                    header("Content-length: $fsize");
                }
                readfile($fullPath);
                exit;
            }



        }

} 