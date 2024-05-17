@extends('layouts.app')
@section('content')
    <div class="center jumbotron bg-info">
        <div class="text-center text-white mt-2 pt-1">
            <h1><i class="pr-3">Home Communication</i></h1>
        </div>
    </div>
    <h5 class="text-center mb-3">🏠大事なことをメモで140字以内で会話しよう🏠</h5>
    <div class="w-75 m-auto">エラーメッセージが入る場所</div>
    <div class="text-center mb-3">
        <form method="" action="" class="d-inline-block w-75">
            <div class="form-group">
                <textarea class="form-control" name="" rows=""></textarea>
                <div class="text-left mt-3">
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </div>
            </div>
        </form>
        <div class="MessageRepository">
        <section class="sale bg-light" id="sale">
        <div class="container text-dark">
            <div class="row">
                <div class="col-sm-7 mx-auto text-center">
                    <h2>CommunicationS</h2>
                    <h3>📝共有事項📝</h3>
                </div>
            </div>

            <div class="row mt-3 g-4">
                <div class="col-md-4">
                    <div class="game-card card-effect text-center">
                        <img src="{{ asset('images/29520534_s.jpg') }}" alt="" class="image-fixed-size">
                        <div class="my-4 px-1">
                            <h5>🍚食事🍚</h5>
                            <p>レシピや食事の計画</p>
                        </div>
                        <button class="btn btn-primary mb-3">ページへ</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="game-card card-effect text-center">
                        <img src="{{ asset('images/28691856_s.jpg') }}" alt="" class="image-fixed-size">
                        <div class="my-4 px-1">
                            <h5>🏫育児🏫</h5>
                            <p>伝達やスケジュールを記録</p>
                        </div>
                        <button class="btn btn-primary mb-3">ページへ</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="game-card card-effect text-center">
                        <img src="{{ asset('images/28600416_s.jpg') }}" alt="" class="image-fixed-size">
                        <div class="my-4 px-1">
                            <h5>🚘遊び計画🚘</h5>
                            <p>休日の予定を計画</p>
                        </div>
                        <button class="btn btn-primary mb-3">ページへ</button>
                    </div>
                </div>
            </div>

            <div class="row mt-3 g-4">
                <div class="col-md-4">
                    <div class="game-card card-effect text-center">
                        <img src="{{ asset('images/102677_02.jpeg') }}" alt="" class="image-fixed-size">
                        <div class="my-4 px-1">
                            <h5>🛒買い物リスト🛒</h5>
                            <p>必要なものを共有</p>
                        </div>
                        <button class="btn btn-primary mb-3">ページへ</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="game-card card-effect text-center">
                        <img src="{{ asset('images/360_F_437994421_xHKM865LpwfrhxsSXGqgMl5nPpdemSwZ.jpeg') }}" alt="" class="image-fixed-size">
                        <div class="my-4 px-1">
                            <h5>✨お願い✨</h5>
                            <p>家族同士のお願いごとを共有</p>
                        </div>
                        <button class="btn btn-primary mb-3">ページへ</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="game-card card-effect text-center">
                        <img src="{{ asset('images/tri_main.jpeg') }}" alt="" class="image-fixed-size">
                        <div class="my-4 px-1">
                            <h5>💻仕事💻</h5>
                            <p>仕事の予定</p>
                        </div>
                        <button class="btn btn-primary mb-3">ページへ</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </div>
    </div>
@endsection
