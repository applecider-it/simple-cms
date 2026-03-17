# 投稿モデル

## DB

| 項目名 | 内容 | 型 | 詳細 |
|--------|--------|--------|--------|
| title | タイトル | string |  |
| slug | URL識別名 | string, unique |  |
| content | 投稿内容 | text |  |
| published_at | 投稿日時 | timestamp, nullable |  |

