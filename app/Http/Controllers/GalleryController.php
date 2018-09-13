<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use File;

class GalleryController extends Controller
{

	public function __construct() {
		$this->middleware('auth');
	}
    
	public function index() {
		return view('admin.index')
				->with('images', Image::all());
	}

	public function upload(Request $request) {
		
		$file = $request->file('file');
		$filename = uniqid() . $file->getClientOriginalName();

		$size = $file->getSize();

		$file->move('gallery/images', $filename);

		$img = Image::create([
			'file_name' => $filename,
			'file_size' => $size,
			'file_mime' => $file->getClientMimeType(),
			'file_path' => 'gallery/images/' . $filename,
		]);

		return ['filename' => $filename, 'id' => $img->id];

	}

	public function deleteImage($id) {

		// Image::destroy($id);
		$img = Image::where('id', $id)->first();
		File::delete($img->file_path);
		$img->delete();
		return redirect('/editGallery');

	}

}
