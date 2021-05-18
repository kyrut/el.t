@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="m-3">
                            <a href="{{route('posts.create')}}" class="btn btn-sm btn-outline-primary">Добавить товар</a>
                        </div>
                        @if(count($paginator)>0)
                            <table class="table table-sm table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Наименование</th>
                                    <th scope="col">Категория</th>
                                    <th scope="col">Статус</th>
                                    <th scope="col">Состояние</th>
                                    <th scope="col">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($paginator as $shopProduct)
                                    @php /** @var \App\Models\ShopProduct $shopProduct*/ @endphp
                                    <tr>
                                        <th scope="row" style="vertical-align: inherit">{{$shopProduct->id}}</th>
                                        <td style="vertical-align: inherit"><a href="{{route('posts.edit', $shopProduct)}}">{{$shopProduct->title}}</a></td>
                                        <td style="vertical-align: inherit">{{$shopProduct->category_id}}</td>
                                        <td style="vertical-align: inherit"> @if($shopProduct->published == true )Опубликовано @else Черновик @endif </td>
                                        <td style="vertical-align: inherit">
                                            @if($shopProduct->deleted_at == null ) Активная @else
                                                <a href="{{route('posts.restore', $shopProduct->id)}}">Востановить</a>
                                            @endif </td>
                                        <td>
                                            <form onsubmit="if(confirm('Удалить?')){return true}else{return false}" action="{{route('posts.destroy', $shopProduct)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                    <a href="{{route('posts.edit', $shopProduct)}}" class="btn btn-outline-primary" title="Редактировать"><i class="far fa-edit"></i></a>
                                                    <button type="submit" class="btn btn-outline-primary" title="Удалить"><i class="far fa-trash-alt"></i></button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    @if($paginator->total()>$paginator->count())
                        <div class="card-footer">
                            {{$paginator->links()}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
