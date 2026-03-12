<?php

namespace App\Services\Page;

/**
 * 独自ページ管理
 */
class PageService
{
    private array $conf = [
        'page1' => [
            'name' => 'page1',
        ],
        'page2' => [
            'name' => 'page2',
        ],
    ];

    /**
     * ページ情報を返す
     */
    public function getPageInfo(string $slug): ?array
    {
        if (!array_key_exists($slug, $this->conf)) return null;

        $info = $this->conf[$slug];

        return $info;
    }
}
