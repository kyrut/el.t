@php /** @var \App\Models\ShopProduct $shopProduct*/ @endphp
<div class="row justify-content-center h-100">
    <div class="card w-100 h-100" style="border-left: none;border-top-left-radius: 0;border-bottom-left-radius: 0;">
        <div class="card-body">
            <div class="form-group">
                <label for="published" class="m-0">Статус</label>
                <select class="form-select form-select-sm" id="published" name="published" required >
                    @if(isset($shopProduct->published))
                        <option value="0" @if($shopProduct->published === 0) selected @endif > Черновик </option>
                        <option value="1" @if($shopProduct->published === 1) selected @endif > Опубликовано </option>
                    @else
                        <option value="0" selected >Черновик</option>
                        <option value="1" >Опубликовано</option>
                    @endif

                </select>
            </div>
            <div class="form-group">
<!--                <image-uploader :file-src="{{json_encode($image)}}" ></image-uploader>-->
            </div>
            <div class="form-group mb-1 pt-3 w-100">
                <button type="submit" class="btn btn-sm btn-outline-success btn-block"><i class="fa fa-save"></i> Сохранить</button>
            </div>
            @if (isset($shopProduct->created_at))
                <div class="form-group mb-1">
                    <label for="created_at" class="m-0">Создано</label>
                    <input type="text"
                        id="created_at"
                        value="{{$shopProduct->created_at ?? ''}}"
                        name="created_at"
                        readonly
                        class="form-control form-control-sm"
                    >
                </div>
                <div class="form-group mb-1">
                    <label for="updated_at" class="m-0">Изменено</label>
                    <input type="text"
                        id="updated_at"
                        value="{{$shopProduct->updated_at ?? ''}}"
                        name="updated_at"
                        readonly
                        class="form-control form-control-sm"
                    >
                </div>
                <div class="form-group mb-1">
                    <label for="deleted_at" class="m-0">Удалено</label>
                    <input type="text"
                        id="deleted_at"
                        value="{{$shopProduct->deleted_at ?? ''}}"
                        name="deleted_at"
                        readonly
                        class="form-control form-control-sm"
                    >
                </div>
            @endif
        </div>
    </div>
</div>
