@php /** @var \App\Models\Post $post*/ @endphp
<div class="row justify-content-center mr-3 h-100">
    <div class="card w-100 h-100" style="border-top-right-radius: 0;border-bottom-right-radius: 0;">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="nav-pane1" href="#pane1" data-bs-toggle="tab" role="tab" aria-controls="pane1" aria-selected="true">Основные данные</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nav-pane2" href="#pane2" data-bs-toggle="tab" role="tab" aria-controls="pane2" aria-selected="false">Характеристики</a>
                </li>
            </ul>
            <br>
            <div class="tab-content">
                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-pane1" id="pane1">
                    <div class="form-group mb-1">
                        <label for="title" class="m-0">Заголовок</label>
                        <input type="text"
                                id="title"
                                value="{{old('title', optional($post)->title)}}"
                                name="title"
                                required
                                minlength="3"
                                class="form-control form-control-sm"
                        >
                    </div>
                    <div class="form-group mb-1">
                        <label for="slug" class="m-0">Идентификатор</label>
                        <input type="text"
                                id="slug"
                                value="{{$post->slug ?? ''}}"
                                name="slug"
                                readonly
                                placeholder="Автоматическая генерация"
                                class="form-control form-control-sm"
                        >
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group mb-1">
                                <label for="categories" class="m-0">Категория товара</label>
                                <select title="выберите категорию" class="form-select form-select-sm w-100"
                                        id="categories"
                                        name="category_id"
                                        required
                                >
                                    @include('layouts.products.includes._product_options', ['categories'=>$categories])
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-1">
                        <label for="description" class="m-0">Текст</label>
                        <textarea type="text"
                                id="description"
                                name="description"
                                class="form-control"
                                rows="3"
                                placeholder="Введите текст описания катогории"
                        >{{old('description', optional($post)->description)}}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-pane2" id="pane2">
                    @include('layouts.products.includes._form_specifications')
                </div>
            </div>
        </div>
    </div>
</div>

