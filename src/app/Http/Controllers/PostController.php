<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Post;

use App\Services\Post\ListService;

/**
 * 投稿管理コントローラー
 * 
 * ドキュメント
 * /documents/features/post.md
 */
class PostController extends Controller
{
    public function __construct(
        private ListService $listService,
    ) {}

    /** 一覧ページ */
    public function index(Request $request)
    {
        $page = $request->input('page', 1);

        $postCategoryId = $request->input('post_category_id');

        [$posts, $selectedCategory] = $this->listService->getPosts($postCategoryId);

        $posts = $posts->paginate(5, page: $page)->onEachSide(1)->withQueryString();

        $posts->withQueryString();

        return view('post.index', compact('posts', 'selectedCategory'));
    }

    /** 詳細ページ */
    public function show(Request $request, $slug)
    {
        $post = Post::with(['categories' => fn($query) => $query->forUser()])
            ->where('slug', $slug)
            ->firstOrFail();

        return view('post.show', compact('post'));
    }
}
