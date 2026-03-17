import { marked } from "marked";

/**
 * HTML関連
 */

/** HTMLエスケープ */
export function escapeHtml(str) {
    str = String(str);
    return str
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
}

/** METAタグ内のJSONデータを返す。 */
export function getMetaJson(name: string) {
    const meta = document.querySelector(`meta[name="${name}"]`) as HTMLElement;

    if (meta) {
        const json = meta.dataset.json;
        const arr = JSON.parse(json);

        return arr;
    }

    return null;
}

/** scriptタグをHTMLエスケープ */
const escapeScriptTags = (html: string): string => {
    return html.replace(/<script[\s\S]*?>[\s\S]*?<\/script>/gi, (match) =>
        match.replace(/</g, "&lt;").replace(/>/g, "&gt;"),
    );
};

/** Laravelに近い挙動のマークダウン変換 */
export async function markdownToHtml(markdown: string) {
    const html = await marked.parse(markdown);

    const html2 = escapeScriptTags(html);

    return html2;
}
