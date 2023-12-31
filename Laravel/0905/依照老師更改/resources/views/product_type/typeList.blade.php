{{-- 連結的樣板 --}}
@extends('Layout.template')

{{-- 樣板裡放入的資料 --}}
@section('head')
    <style>
        .test {
            width: 100px;
            height: 100px;
        }
    </style>
    {{-- css區域 --}}
@endsection

{{-- 樣板裡放入的資料 --}}
@section('main')
    <div class="container">
        {{-- @dd($types,$typesImg) --}}
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <!-- page header -->
                <div>
                    <h2>Type List</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order List</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100 card-lg">
                    <div class=" p-6 ">
                        <div class="row justify-content-between ">
                            <div class="col-md-4 col-12 mb-2 mb-md-0 flex-row">
                                <!-- form -->
                                <form class="d-flex" role="search">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    <a href="{{ route('type.create') }}" class="btn btn-primary">新增類別 {{-- <button href="/Addcartlist" class="btn btn-primary"></button> --}}
                                    </a>
                                </form>
                            </div>
                            <div class="col-lg-2 col-md-4 col-12">
                                <!-- select -->
                                <select class="form-select">
                                    <option selected="">Status</option>
                                    <option value="Success">Success</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Cancel">Cancel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body p-0">
                        <!-- table responsive -->
                        <div class="table-responsive">
                            <table
                                class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                                <thead class="bg-light">
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="checkAll">
                                                <label class="form-check-label" for="checkAll">

                                                </label>
                                            </div>
                                        </th>
                                        <th>Image</th>
                                        <th>類別名稱</th>
                                        <th>類別描述</th>
                                        <th>新增日期</th>
                                        <th>功能</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($types as $type)
                                        {{-- @dd($type->productTypeImg) --}}
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="orderOne">
                                                    <label class="form-check-label" for="orderOne">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                @foreach ($type->productTypeImg ?? [] as $img)
                                                    <a href="#"> <img src="{{ asset($img->img_path) }}" alt=""
                                                            class="icon-shape icon-md"></a>
                                                @endforeach
                                            </td>
                                            <td>{{ $type->name }}</td>
                                            <td>{{ $type->desc }}</td>
                                            <td>{{ $type->created_at->format('Y/m/d') }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <div>
                                                        <form action="{{ route('type.destroy', ['type' => $type->id]) }}" data-name="{{ $type->name}}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item" type="submit">
                                                                <i class="fa-regular fa-trash-can me-3"></i>
                                                                刪除
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div><a class="dropdown-item"
                                                            href="{{ route('type.edit', ['type' => $type->id]) }}">
                                                            <i class="fa-light fa-pen-to-square me-3"></i>編輯</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                        <span>Showing 1 to 8 of 12 entries</span>
                        <nav class="mt-2 mt-md-0">
                            <ul class="pagination mb-0 ">
                                <li class="page-item disabled"><a class="page-link " href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>

        </div>
    </div>
    
@endsection

{{-- 樣板裡放入的資料 --}}

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const forms = document.querySelectorAll('td .dropdown form')
        // forms.addEventListener('click',()=>{
        //     alert("COOOOOOOL");
        // })
        forms.forEach(element => {
            console.log(element);
            element.addEventListener('submit', (event) => {
                event.preventDefault();
                // alert("COOOOOOOL");
                Swal.fire({
                    title: 'Do you want to save the changes?',
                    showDenyButton: true,
                    confirmButtonText: 'Hell！ＮＯＯＯＯＯＯＯ！',
                    denyButtonText: `刪拉`,
                }).then((result) => {
                    if (result.isDenied) {
                        element.submit();
                    } 
                })
            })
        })
    </script>
@endsection
