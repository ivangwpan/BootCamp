@extends('layout.fontTemplete')
@section('main-content')
    <section class="messageBoard">
        <div class="container">
            <div class="d-flex flex-column justify-content-center flex-wrap align-items-center">
                @foreach ($messages as $item)
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->message }}</h5>
                            <form action="{{ route('messageUpdate', ['id' => $item->id]) }}" method="post" class="mod-form d-none"
                                data-id="{{ $item->id }}">
                                @csrf
                                @method('put')
                                <div class="form-floating mb-3">
                                    <input type="text" name="message" class="form-control" id="floatingInput"
                                        placeholder="修改您的訊息">
                                    <label for="floatingInput">修改訊息</label>
                                </div>
                                <button type="button" class="btn btn-primary cancel-mod"
                                    onclick="cancelMod({{ $item->id }})" data-id="{{ $item->id }}">取消修改</button>
                                <button type="submit" class="btn btn-primary submit-mod" onclick="submitMod({{ $item->id }})">確認修改</button>
                            </form>
                            <div class="d-flex">

                                <button type="button" class="btn mb-2 btn-success  btn-success-self edit-mese" data-id="{{ $item->id }}" onclick="editMese({{ $item->id }})">Edit</button>

                                <form action="{{ route('messageDestroy', ['id' => $item->id]) }}" method="post"
                                    class="delete-alert" data-name="{{ $item->name }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn  btn-success  btn-success-self">Delete</button>
                                </form>

                            </div>

                            @foreach ($item->replyToMessage as $reply)
                            {{-- @dump($replys); --}}
                            {{-- $item->productTypeImg --}}
                            {{-- {{$reply->replyToMessage}} --}}
                            <h5 class="card-title">{{ $reply->replay_message }}</h5>
                            @endforeach
                            <form action="{{ route('replayStore', ['id' => $item->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="message_id" value="{{ $item->id }}">
                                <div class="form-floating mb-3">
                                    <input type="text" name="reply" class="form-control" id="floatingInput"
                                        placeholder="留下您的訊息">
                                    <label for="floatingInput">回覆留言板</label>
                                </div>
                                <button type="submit" class="btn btn-primary">傳送訊息</button>
                            </form>

                            {{-- <form action="{{route('messageStore')}}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="message" class="form-control" id="floatingInput" placeholder="留下您的訊息">
                                <label for="floatingInput">回覆留言板</label>
                            </div>
                            <button type="submit" class="btn btn-primary">傳送訊息</button>
                        </form> --}}
                        </div>
                    </div>
                @endforeach
                {{-- 初始欄位 --}}
                <div class="card w-100">
                    <div class="card-body">
                        <form action="{{ route('messageStore') }}" method="post">
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
    function cancelMod(id) {
        console.log(`Canceling form with ID ${id}`);
        const form = document.querySelector(`.mod-form[data-id="${id}"]`);
        const cancel = document.querySelector(`.cancel-mod[data-id="${id}"]`);

        if (cancel) {
            form.classList.add('d-none');
        }

    }
    function editMese(id) {
        console.log(`editMesewith ID ${id}`);
        const form = document.querySelector(`.mod-form[data-id="${id}"]`);
        const editMese = document.querySelector(`.edit-mese[data-id="${id}"]`);

        if (editMese) {
            form.classList.remove('d-none');
        }

    }
     function submitMod(id) {
        console.log(`submitMod with ID ${id}`);
        const form = document.querySelector(`.mod-form[data-id="${id}"]`);
        const submit = document.querySelector(`.submit-mod[data-id="${id}"]`);

        if (submit) {
            form.classList.add('d-none');
        }

    }
</script>
