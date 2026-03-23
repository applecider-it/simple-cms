<script setup lang="ts">
defineProps<{
    id: string;
}>();
</script>

<template>
    <div v-if="id === 'img'">
        <ol class="list-decimal list-inside">
            <li>ファイル一覧を別タブで表示</li>
            <li>コピーをクリック</li>
            <li>張り付ける</li>
        </ol>
    </div>
</template>
