<?php

namespace App\Controllers;

use CodeIgniter\Validation\Rules;

class ImageUpload extends BaseController
{
    public function index()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'image' => [
                    'label' => 'Gambar',
                    'rules' => 'uploaded[image]|is_image[image]|max_size[image, 1024]'
                ],
                'keterangan' => [
                    'label' => 'keterangan gambar',
                    'rules' => 'required'
                ]
            ];
            if ($this->validate($rules)) {
                $image = $this->request->getFile('image');
                $image->move('uploads');

                redirect()->back()->with('success', 'Data berhasil disimpan');
            }
            return redirect()->back()->withInput()->with('validation', $this->validator->getError());
        }

        return view('upload');
    }
}
