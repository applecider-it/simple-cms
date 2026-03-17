export const conf = [
    {
        id: "header",
        name: "ヘッダー",
        grammar: `# title`,
    },
    {
        id: "list",
        name: "リスト表示",
        grammar: `- list
- list
- list
`,
    },
    {
        id: "table",
        name: "テーブル表示",
        grammar: `| 項目 | 項目 | 項目 |
|------|------|------|
| 内容 | 内容 | 内容 |
| 内容 | 内容 | 内容 |
| 内容 | 内容 | 内容 |
`,
    },
    {
        id: "img",
        name: "画像",
        grammar: `![代替テキスト](画像URL)`,
    },
];
