@extends('layout/master')

@section('scriptsection')
    <script src="/js/editor.js"></script>
@endsection

@section('maincontent')
<div class="board-wrap">
    <div class="board-form">
        <div class="board-visual">
            <p>게시글 쓰기</p>
        </div>
        <form class="board-form" action="/post" method="post">
            <input class="form-control" type="text" name="title" placeholder="글 제목을 입력해주세요">
            <textarea id="editor" rows="10" class="form-control" name="content" placeholder="글 내용을 입력해주세요"></textarea>
            <div class="write-btn">
                <button type="submit">글쓰기</button>
                <button type="reset">취소</button>
            </div>
        </form>
    </div>
</div>

@endsection