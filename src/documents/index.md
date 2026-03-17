# シンプルなCMS

- [設計](./design.md)

## 実装内容

- [投稿](./features/post.md)

## モデル

`id`, `created_at`, `updated_at`, `deleted_at`の説明は省略しています。

カラムごとのvalidationは再利用しやすいようにモデルにまとめています。

- [ユーザー](./Models/User.md)
- [管理者](./Models/AdminUser.md)
- [投稿](./Models/Post.md)
- [ファイル](./Models/File.md)
