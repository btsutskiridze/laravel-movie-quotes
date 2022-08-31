<x-layout>

    @include('_header')
    <x-setting heading="Publish New Post">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
        @csrf
        
        <x-form.input name="quote_title_en"/>
        <x-form.input name="quote_title_ka"/>
        <x-form.input name="slug" />
        <x-form.input name="thumbnail" type="file"/>
        <x-form.button>Add quote</x-form.button>
        </form>
    </x-setting>
</x-layout>