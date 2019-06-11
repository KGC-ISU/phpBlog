@extends('layout/master')

@section('maincontent')
<div class="view-container">
    <div class="wrap">        
        <div class="board-visual">
            <p>게시글 보기</p>
        </div>
        <div class="view-form">
            <div class="view-info">
                <div class="top">
                    <div class="title">
                        글 제목
                    </div>
                    <div class="writer">
                        작성자
                    </div>
                    <div class="date">
                        글 작성일
                    </div>
                </div>
                <div class="bottom">
                    <div class="title">
                        {{ $data->title }}
                    </div>
                    <div class="writer">
                        {{ $data->writer }}
                    </div>
                    <div class="date">
                        {{ $data->wdate }}
                    </div>
                </div>                
            </div>
            <div class="view-content">
                <!-- {!! $data->content !!} -->
                {!! $data->content !!}
            </div>

            <div class="view-controll">
                <a href="/delete?id={{ $data->id }}">글삭제</a>
                <a href="/remote?id={{ $data->id }}">글수정</a>
            </div>
        </div>
    </div>
</div>
@endsection