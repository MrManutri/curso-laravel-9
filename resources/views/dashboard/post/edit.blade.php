@extends('dashboard.layout')
<h1>Editar post: {{$post->title}}</h1>
@include('dashboard.fragment._errors-form')

<form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">

    @csrf
    @method('PATCH')
    <label for="">Titulo</label>
    <input type="text" name="title" value="{{$post->title}}">
    <label for="">Slug</label>
    <input readonly type="text" name="slug" value="{{$post->slug}}">
    <label for="">Categoria</label>
    <select name="category_id" id="">
        <option value=""></option>
        @foreach ($categories as $title => $id)

            <option {{$post->category_id == $id ? 'selected' : ''}} value="{{$id}}">{{$title}}</option>
        @endforeach
    </select>
    <label for="">Posteado</label>
    <select name="posted" id="">
        <option {{$post->posted == "yes" ? 'selected' : ''}} value="yes">Si</option>
        <option {{$post->posted == "not" ? 'selected' : ''}} value="not">No</option>
    </select>
    <label for="">contenido</label>
    <textarea name="content" value="" id="" cols="30" rows="10">{{$post->content}}</textarea>
    <label for="">Descripcion</label>
    <input type="text" name="description" value="{{$post->description}}">
    <label for="">Imagen</label>
    <input type="file" name="image" id="">
    <button type="submit">Enviar</button>
</form>