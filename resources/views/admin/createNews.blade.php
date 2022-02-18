@extends('admin')

@section('body')
    <div class="page-content pt-150 col-lg-10 m-auto">

        <h2 class="header"> Добавление довой статьи</h2>

        <form method="post" action="{{ route('news.store') }}" class="m-5 p-3 shadow">
            @foreach (config('translatable.locales') as $locale)

                @csrf
                <h4>Данные для {{strtoupper($locale)}} языка</h4>
                <div class="mb-3">
                    <label for="source" class="form-label">Источник</label>
                    <input type="text" name="{{ $locale }}[source]" class="form-control" id="source">
                </div>
                <div class="mb-3">
                    <label for="source_link" class="form-label">Источник</label>
                    <input type="text" name="{{ $locale }}[source_link]" class="form-control" id="source_link">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Заголовок</label>
                    <input type="text" name="{{ $locale }}[title]" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Статья</label>
                    <textarea class="form-control ckeditor" name="{{ $locale }}[text]" id="text" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Обложка</label>
                    <input type="file" name="{{ $locale }}[img]" class="form-control" id="img">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Дата публикации</label>
                    <input type="date" name="{{ $locale }}[date]" class="form-control" id="date">
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection

@section('customJs')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection