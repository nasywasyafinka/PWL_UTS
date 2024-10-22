<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Barryvdh\DomPDF\Facade\Pdf;

class ProfileController extends Controller
{
    public function index() {
        $breadcrumb = (object) [
            'title' => 'Profil User',
            'list' => ['Home', 'Profil']
        ];
    
        $activeMenu = 'profile'; // Set menu as active
        $level = LevelModel::all(); // If you're using levels
    
        $page = (object) [
            'title' => 'Profil User'
        ];
    
        // Pass the authenticated user
        $user = auth()->user();
    
        return view('profile.index', [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'level' => $level,
            'user' => $user, // Pass the user to the view
            'activeMenu' => $activeMenu
        ]);
    }    

    public function upload_foto(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|max:4096',
        ]);

        $file = $request->file('foto');

        $fileContents = file_get_contents($file->getRealPath());

        $user = auth()->user(); 
        $user->image = $fileContents;

        $user->save(); 

        return back()->with('success', 'Foto berhasil diperbarui.');
    }

    public function showProfileImage()
    {
        $user = auth()->user();

        if ($user && $user->image) {
            return response($user->image)->header('Content-Type', 'image/jpeg'); // Adjust MIME type accordingly
        } else {
            return response('No image', 404);
        }
    }

}