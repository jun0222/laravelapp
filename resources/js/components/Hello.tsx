import React from 'react';

/**
 * シンプルな挨拶メッセージを表示するReactコンポーネント。
 * 
 * このコンポーネントは、日本語の挨拶文を含むスタイル付きの`div`をレンダリングします。
 * プロパティを受け取らず、サンプルまたはデモンストレーション用として設計されています。
 */
const Hello = () => {
  return (
    <div className="p-4 bg-blue-100 rounded">
      <h1 className="text-xl font-bold text-blue-700">こんにちは React！</h1>
    </div>
  );
};

export default Hello;
