<x-tests.app>
  <x-slot name="header">ヘッダー1</x-slot>
  コンポーネントテスト１

  <x-tests.card title="タイトル1" content="本文1" :message="$message" />
  <x-tests.card title="タイトル3"  />
</x-tests.app>