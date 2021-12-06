<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Intervention\Image\Facades\Image;

use App\Services\CheckExtensionServices;
use App\Services\FileUploadServices;

use App\Http\Requests\ValidateRequest;
class UsersController extends Controller
{
    public function index()
    {
        // ユーザ一覧をidの降順で取得
        $users = User::orderBy('id', 'desc')->paginate(10);

        
        // ユーザ一覧ビューでそれを表示
        return view('users.index', [
            'users' => $users,
        ]);
    }
     
     
    public function show($id)
    {

        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        
        // 関係するモデルの件数をロード
        $user->loadRelationshipCounts();
        
        if(empty($user->img_name)){
            $img_name = "/images/user_image.PNG";
        } else {
            // $img_name = "/storage/images/" . $user->img_name;
            $img_name = "data:image/png;base64," . $user->img_name;
        }
        // ユーザの投稿一覧を作成日時の降順で取得
        $wordbooks = $user->wordbooks()->orderBy('created_at', 'desc')->paginate(10);
        
        // ユーザ詳細ビューでそれを表示
        return view('users.show', [
            'user' => $user,
            'wordbooks' => $wordbooks,
            'img_name' => $img_name,
        ]);
    }
    
    public function edit($id)
    {
        $user = User::findorFail($id);

        return view('users.edit', compact('user')); 
    }

    public function update(ValidateRequest $request, $id)
    {

        $user = User::findorFail($id);

        if(!is_null($request['img_name'])){
            $imageFile = $request['img_name'];
            $imgSize = filesize($imageFile);

            if($imgSize < 1100000){

                $list = FileUploadServices::fileUpload($imageFile);
                // list($extension, $fileNameToStore, $fileData) = $list;
                list($extension, $fileData) = $list;

                $data_url = CheckExtensionServices::checkExtension($fileData, $extension);
                // $imagefile = Image::make($data_url);s        
                // $image->resize(200,200)->save(storage_path() . '/app/public/images/' . $fileNameToStore );
                
                // $imagefile->resize(200,200);s

                // $image = base64_encode($image);
                // $image = base64_encode($imagefile->encode('png'));s

                // $user->img_name = $fileNameToStore;
                // dd($data_url);
                // $user->img_name = $image; s
                $user->img_name = $data_url;

            }
            
        }
        
        $user->self_introduction = $request->self_introduction;

        $user->save();

        return redirect()->route('users.show',['user' => $id]);
    }

    public function followings($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);

        // 関係するモデルの件数をロード
        $user->loadRelationshipCounts();

        // ユーザのフォロー一覧を取得
        $followings = $user->followings()->paginate(10);

        if(empty($user->img_name)){
            $img_name = "/images/user_image.PNG";
        } else {
            // $img_name = "/storage/images/" . $user->img_name;
            $img_name = "data:image/png;base64," . $user->img_name;
        }

        // フォロー一覧ビューでそれらを表示
        return view('users.followings', [
            'user' => $user,
            'users' => $followings,
            'img_name' => $img_name,
        ]);
    }
    
    public function followers($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);

        // 関係するモデルの件数をロード
        $user->loadRelationshipCounts();

        // ユーザのフォロワー一覧を取得
        $followers = $user->followers()->paginate(10);

        if(empty($user->img_name)){
            $img_name = "/images/user_image.PNG";
        } else {
            // $img_name = "/storage/images/" . $user->img_name;
            $img_name = "data:image/png;base64," . $user->img_name;
        }

        // フォロワー一覧ビューでそれらを表示
        return view('users.followers', [
            'user' => $user,
            'users' => $followers,
            'img_name' => $img_name,
        ]);
    }
}
