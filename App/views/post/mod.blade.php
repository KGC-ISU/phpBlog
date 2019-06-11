@extends('layout/master')

@section('scriptsection')
    <script src="/js/editor.js"></script>
@endsection

@section('maincontent')
<div class="board-wrap">
    <div class="board-form">
        <div class="board-visual">
            <p>게시물 수정</p>
        </div>
        <form class="board-form" action="/post" method="post">
            <input type="hidden" value="{{ $data->id }}" name="id">
            <input class="form-control" type="text" name="title" placeholder="글 제목을 입력해주세요" value="{{$data->title}}">
            <textarea id="editor" rows="10" class="form-control" name="content" placeholder="글 내용을 입력해주세요">{{ $data->content}}</textarea>
            <div class="write-btn">
                <button type="submit">수정하기</button>
                <button type="reset">취소</button>
            </div>
        </form>
    </div>
</div>

@endsection