<script setup lang="ts">
import { ref, onMounted } from "vue";

import Modal from "@/services/ui/vue/popup/Modal.vue";

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
                        <tr>
                            <td class="app-table-td">ヘッダー</td>
                            <td class="app-table-td"># title</td>
                            <td class="app-table-td"></td>
                        </tr>
                        <tr>
                            <td class="app-table-td">リスト表示</td>
                            <td class="app-table-td">- list</td>
                            <td class="app-table-td"></td>
                        </tr>
                        <tr>
                            <td class="app-table-td">テーブル表示</td>
                            <td class="app-table-td">
                                | 項目 | 項目 | 項目 |<br/>
                                |------|------|------|<br/>
                                | 内容 | 内容 | 内容 |<br/>
                                | 内容 | 内容 | 内容 |<br/>
                                | 内容 | 内容 | 内容 |<br/>
                            </td>
                            <td class="app-table-td"></td>
                        </tr>
                        <tr>
                            <td class="app-table-td">画像</td>
                            <td class="app-table-td">![代替テキスト](画像URL)</td>
                            <td class="app-table-td">
                                <ul>
                                    <li>ファイル一覧を別タブで表示</li>
                                    <li>コピーをクリック</li>
                                    <li>張り付ける</li>
                                </ul>
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
