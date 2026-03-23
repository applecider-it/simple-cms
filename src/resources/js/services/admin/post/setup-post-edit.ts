import { createApp } from "vue";
import PostEdit from "./vue/PostEdit.vue";

import { setupEditor } from "./editor";

setupEditor();

const el = document.getElementById("post-edit");

if (el) {
    createApp(PostEdit).mount(el);
}
