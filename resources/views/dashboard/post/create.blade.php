@extends('dashboard.layout')
<h1>Crear Post</h1>
@include('dashboard.fragment._errors-form')

<form action="{{route('post.store')}}" method="post">
    @csrf
    <label for="">Titulo</label>
    <input type="text" name="title" value="{{old('title', '')}}">
    <label for="">Slug</label>
    <input type="text" name="slug" value="{{old('slug', '')}}">
    <label for="">Categoria</label>
    <select name="category_id" id="">
       
        @foreach ($categories as $title => $id)
            <option "{{ old("category_id", "") == $id ? "selected" : ""}}" value="{{$id}}">{{$title}}</option>
        @endforeach
    </select>
    <label for="">Posteado</label>
    <select name="posted" id="">
        <option "{{ old('posted', '') == 'yes' ? 'selected' : ""}}" value="yes">Si</option>
        <option "{{ old('posted', '') == 'not' ? 'selected' : ""}}" value="not">No</option>
    </select>
    <label for="">contenido</label>
    <textarea name="content" id="" cols="30" rows="10">{{old('content', '')}}</textarea>
    <label for="">Descripcion</label>
    <input type="text" name="description" value="{{old('description', '')}}">
    <button type="submit">Enviar</button>
</form>