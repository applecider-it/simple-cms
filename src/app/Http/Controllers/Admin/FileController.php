<?php

namespace App\Http\Controllers\Admin;

use App\Models\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /** 一覧 */
    public function index(Request $request)
    {
        $query = File::latest();

        // 検索条件を保持したままページネーション
        $files = $query->paginate(5)->onEachSide(2)->withQueryString();

        return view('admin.file.index', compact('files'));
    }

    /** 新規作成 */
    public function create()
    {
        $file = new File();
        return view('admin.file.create', compact('file'));
    }

    /** 登録処理 */
    public function store(Request $request)
    {
        $request->validate(
            rules: [
                'file' => 'required|file|max:2048'
            ],
            attributes: [
                'file' => 'ファイル'
            ]
        );

        $uploadFile = $request->file('file');

        File::uploadFile($uploadFile);

        return redirect()->route('admin.files.index')->with('success', 'ファイルを作成しました');
    }

    /** 削除 */
    public function destroy(File $file)
    {
        $file->deleteFile();

        return redirect()->route('admin.files.index')->with('success', 'ファイルを削除しました');
    }
}
