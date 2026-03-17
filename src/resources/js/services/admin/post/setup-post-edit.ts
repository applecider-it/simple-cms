import { createApp } from "vue";
import { markdownToHtml } from "@/services/data/html";
import PostEdit from "./vue/PostEdit.vue";

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

const el = document.getElementById("post-edit");

if (el) {
    createApp(PostEdit).mount(el);
}
