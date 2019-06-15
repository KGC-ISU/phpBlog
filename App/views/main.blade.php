@extends('layout/master')

@section('maincontent')
<div class="wrap">
    <div class="slide">

        @foreach($slide as $imgs)
        <div class="imgs">
            {!! $imgs->thumbnail !!}
            <div class="text">
                <p>좋다</p>
            </div>
        </div>
        @endforeach

        <!-- <div class="imgs">
            <img src="/uploads/20190611/190611104832_Penguins.jpg">
            <div class="text">
                <p>슬라이드 2</p>
            </div>
        </div>

        <div class="imgs">
            <img src="/imgs/van.jpg" alt="slide2">
            <div class="text">
                <p>슬라이드 3</p>
            </div>
        </div> -->

        <div class="slide-btn">
            <span class="left">&lt;</span>
            <span class="right">&gt;</span>
        </div>
    </div>

    <div class="board-info">
        <h1>유용한 정보들</h1>
    </div>

    <div class="board-list">
        @foreach($list as $item)
            <div class="board">
                <div class="img">
                    {!! $item->thumbnail !!}
                </div>
                <div class="content">
                    <div class="title">
                        <a href="/view?id={{$item->id}}"><h3>{{$item->title}} {{ date("Y년 m월 d일", strtotime($item->wdate) ) }}</h3></a>
                    </div>
                    <div class="text">
                        <p>{{$item->content}}</p>
                    </div>
                    <div class="bottom">
                        <p><i class="fas fa-heart"></i> &nbsp; 0</p>
                        <p>공유하기</p>
                        <p><a class="btn btn-outline-primary" href="/mod?id={{$item->id}}">수정</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="board-nav">
        <ul>
            @if($p->prev)
                <li class="pre"><a href="/?p={{$p->start - 1}}">&lt;</a></li>
            @endif

            @for($i = $p->start; $i <= $p->end; $i++)
                @if($i == $p->current)
                    <li style="background-color: #ef9a9a;">
                        <a href="/?p={{$i}}">{{ $i }}</a>
                    </li>
                @else
                    <li>
                        <a href="/?p={{$i}}">{{ $i }}</a>
                    </li>
                @endif                
            @endfor

            @if($p->next)
                <li class="next"><a href="/?p={{$p->end + 1}}">&gt;</a></li>
            @endif
        </ul>
    </div>
</div>

@endsection