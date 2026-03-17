<script setup lang="ts">
import { ref, onMounted } from "vue";

import Modal from "@/services/ui/vue/popup/Modal.vue";
import { conf } from "./markdown";

const open = ref<boolean>(false);

onMounted(() => {
    const el = document.getElementById("markdown-desc");
    el.addEventListener('click', () => {
        open.value = true;
    })
});
</script>

<template>

    <Modal :isOpen="open" :onClose="() => {open = false;}"">
        <h2 className="text-xl font-bold mb-2">markdownの説明</h2>

        <div className="my-4">
            <div class="app-table-container">
                <table class="app-table">
                    <thead class="app-table-thead">
                        <tr>
                            <th class="app-table-th">種類</th>
                            <th class="app-table-th">文法</th>
                            <th class="app-table-th">詳細</th>
                        </tr>
                    </thead>
                    <tbody class="app-table-tbody">
                        <tr v-for="row in conf" :key="row.id">
                            <td class="app-table-td">{{ row.name }}</td>
                            <td class="app-table-td"><pre class="bg-gray-200">{{ row.grammar }}</pre></td>
                            <td class="app-table-td">
                                <div v-if="row.id === 'img'">
                                    <ol class="list-decimal list-inside">
                                        <li>ファイル一覧を別タブで表示</li>
                                        <li>コピーをクリック</li>
                                        <li>張り付ける</li>
                                    </ol>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <button
            @click="() => {open = false}"
            className="app-btn-secondary"
            type="button"
        >
            閉じる
        </button>
    </Modal>

</template>
