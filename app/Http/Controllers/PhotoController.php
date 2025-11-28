<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    // Menampilkan halaman admin
    public function index()
    {
        $photos = Photo::orderBy('position')->get();
        return view('admin.photos', compact('photos'));
    }

    // Update foto
    public function update(Request $request, $id)
    {
        $photo = Photo::findOrFail($id);    

        // Validasi file upload
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
        ]);

        // Hapus file lama jika ada
        if ($photo->filename && Storage::exists('public/photos/' . $photo->filename)) {
            Storage::delete('public/photos/' . $photo->filename);
        }

        // Simpan file baru
        $path = $request->file('photo')->store('public/photos');

        // Update database
        $photo->filename = basename($path);
        $photo->save();

        return back()->with('success', 'Foto berhasil diperbarui!');
    }
}
