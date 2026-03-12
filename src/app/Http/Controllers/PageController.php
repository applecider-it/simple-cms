<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Services\Page\PageService;

/**
 * 独自ページ管理コントローラー
 * 
 * ドキュメント
 * /documents/features/page.md
 */
class PageController extends Controller
{
    public function __construct(
        private PageService $pageService,
    ) {}

    /** 詳細ページ */
    public function show(Request $request, $slug)
    {
        $info = $this->pageService->getPageInfo($slug);

        if (! $info) abort(404);

        return view('pages.show.' . $info['name']);
    }
}
