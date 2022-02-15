@extends('admin')

@section('body')
    <div class="page-content pt-150 col-lg-10 m-auto">

        <h2 class="header"> Добавление дового актёра</h2>

        <form method="post" action="{{ route('actors.store') }}" class="m-5 p-3 shadow">
    @foreach (config('translatable.locales') as $locale)

        @csrf
        <h4>Данные для {{strtoupper($locale)}} языка</h4>
        <div class="mb-3">
            <label for="actorsName" class="form-label">@lang('Name') актёра</label>
            <input type="text" name="{{ $locale }}[name]" class="form-control" id="actorsName">
        </div>
        <div class="mb-3">
            <label for="actorsRole" class="form-label">Роль</label>
            <input type="text" name="{{ $locale }}[role]" class="form-control" id="actorsRole">
        </div>
        <div class="mb-3">
            <label for="actorsShortDesc" class="form-label">Краткое описание</label>
            <textarea class="form-control ckeditor" name="{{ $locale }}[short_desc]" id="actorsShortDesc" placeholder="В приделах 250 символов" required></textarea>
        </div>
        <div class="mb-3">
            <label for="actorsDesc" class="form-label">Все данные по актёру</label>
            <textarea class="form-control ckeditor" name="{{ $locale }}[desc]" id="actorsDesc" placeholder="Полное описание" required></textarea>
        </div>
        <div class="mb-3">
            <label for="{{ $locale }}[small_img]" class="form-label">Маленькая 110х110</label>
            <input type="file" name="{{ $locale }}[small_img]" class="form-control" aria-label="file example" required>
        </div>
        <div class="mb-3">
            <label for="{{ $locale }}[img]" class="form-label">Основная 415х450</label>
            <input type="file" name="{{ $locale }}[img]" class="form-control" aria-label="file example" required>
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