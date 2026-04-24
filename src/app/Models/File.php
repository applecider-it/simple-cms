<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    protected $fillable = [
        'file_name',
        'file_path',
        'mime_type',
        'file_size'
    ];

    /** ファイルのURL */
    public function fileUrl()
    {
        return Storage::url($this->file_path);
    }

    /** ファイル削除 */
    public function deleteFile()
    {
        if (Storage::exists($this->file_path)) {
            Storage::delete($this->file_path);
        }

        $this->delete();
    }

    /** ファイルアップロード */
    public static function uploadFile($uploadFile)
    {
        $path = $uploadFile->store('uploads');

        $file = File::create([
            'file_name' => $uploadFile->getClientOriginalName(),
            'file_path' => $path,
            'mime_type' => $uploadFile->getClientMimeType(),
            'file_size' => $uploadFile->getSize()
        ]);
    }
}
