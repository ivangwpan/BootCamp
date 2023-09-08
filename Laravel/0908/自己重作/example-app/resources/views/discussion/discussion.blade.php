@extends('templates.fontTemplete')
@section('main-content')
    <section class="messageBoard">
        <div class="container">
            <div class="d-flex flex-column justify-content-center flex-wrap align-items-center">
                {{-- @foreach ($messages as $item) --}}
                @foreach ($messages as $item)
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title">樓主說：{{ $item->discussion_head_message }}</h5>
                            <form method="post" class="mod-form d-none">
                                @csrf
                                @method('put')
                                <div class="form-floating mb-3">
                                    <input type="text" name="messages" class="form-control" id="floatingInput"
                                        placeholder="修改您的訊息">
                                    <label for="floatingInput">修改訊息</label>
                                    <button type="button" class="btn btn-primary cancel-mod" onclick="">取消修改</button>
                                    <button type="submit" class="btn btn-primary submit-mod" onclick="">確認修改</button>
                                </div>
                            </form>
                            <div class="d-flex">

                                <button type="button" class="btn mb-2 btn-success  btn-success-self edit-mese"
                                    onclick="">樓主編輯</button>

                                <form method="post" class="delete-alert">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="btn mb-2 btn-success  btn-success-self edit-mese">樓主刪除</button>
                                </form>
                            </div>
                            {{-- @dd($item->Messages); --}}
                            @foreach ($item->Messages as $reply)
                                <h5 class="card-title">酸民說：{{ $reply->reply_message }}</h5>
                            @endforeach
                            <form method="post">
                                @csrf
                                <input type="hidden" name="message_id" value="{{ $item->id }}">
                                <div class="form-floating mb-3">
                                    <input type="text" name="reply" class="form-control" id="floatingInput"
                                        placeholder="留下您的訊息">
                                    <label for="floatingInput">輸入你的酸民留言</label>
                                </div>
                                <button type="submit" class="btn btn-primary">酸他</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                {{-- @endforeach --}}

                {{-- 初始欄位 --}}
                <div class="card w-100">
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="message" class="form-control" id="floatingInput"
                                    placeholder="留下您的訊息">
                                <label for="floatingInput">留言板</label>
                            </div>
                            <button type="submit" class="btn btn-primary">傳送訊息</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

<script>
    // function cancelMod(id) {
    //     console.log(`Canceling form with ID ${id}`);
    //     const form = document.querySelector(`.mod-form[data-id="${id}"]`);
    //     const cancel = document.querySelector(`.cancel-mod[data-id="${id}"]`);

    //     if (cancel) {
    //         form.classList.add('d-none');
    //     }

    // }
    // function editMese(id) {
    //     console.log(`editMesewith ID ${id}`);
    //     const form = document.querySelector(`.mod-form[data-id="${id}"]`);
    //     const editMese = document.querySelector(`.edit-mese[data-id="${id}"]`);

    //     if (editMese) {
    //         form.classList.remove('d-none');
    //     }

    // }
    //  function submitMod(id) {
    //     console.log(`submitMod with ID ${id}`);
    //     const form = document.querySelector(`.mod-form[data-id="${id}"]`);
    //     const submit = document.querySelector(`.submit-mod[data-id="${id}"]`);

    //     if (submit) {
    //         form.classList.add('d-none');
    //     }

    // }
</script>
