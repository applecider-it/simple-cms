import { createApp } from "vue";
import PostEditPopup from "./vue/PostEditPopup.vue";

import { setupEditor } from "./editor";

setupEditor();

const popup = document.getElementById("post-edit-popup");

if (popup) {
    createApp(PostEditPopup).mount(popup);
}
