import { markdownToHtml } from "@/services/data/html";

/** テキストエリアのマークダウン変換のセットアップ */
export function setupEditor() {
    const editor = document.getElementById("editor") as HTMLTextAreaElement;
    const preview = document.getElementById("preview") as HTMLDivElement;

    const makePreview = async (): Promise<void> => {
        const markdown = editor.value;

        preview.innerHTML = await markdownToHtml(markdown);
    };

    editor.addEventListener("input", () => {
        makePreview();
    });

    makePreview();
}
