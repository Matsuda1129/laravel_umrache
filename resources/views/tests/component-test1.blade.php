<x-tests.app>
    <x-slot name="header">ヘッダー１</x-slot>
    コンポーネントテスト１
    <x-tests.card title="タイトル" content="本文" :message="$message" />
    <x-tests.card title="タイトル２" />
    <x-tests.card title="cssを変更したい" class="bg-red-300" />
    <button type="button" class="cursor-pointer m-5 p-3 shadow-md rounded-md font-semibold text-white text-base bg-blue-500 hover:bg-blue-700 ring-blue-200 ring-2">
        テスト
    </button>
</x-tests.app>