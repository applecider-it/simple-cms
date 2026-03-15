import { marked } from "marked";
import { createApp } from "vue";

import PostEdit from "./vue/PostEdit.vue";

const editor = document.getElementById("editor") as HTMLTextAreaElement;
const preview = document.getElementById("preview") as HTMLDivElement;

const makePreview = async (): Promise<void> => {
    const markdown: string = editor.value;
    preview.innerHTML = await marked.parse(markdown);
};

editor.addEventListener("input", () => {
    makePreview();
});

makePreview();

const el = document.getElementById("post-edit");

if (el) {
    createApp(PostEdit).mount(el);
}
