<!-- Author Id Field -->
<div class="col-sm-12">
    {!! Form::label('author_id', 'Author Id:') !!}
    <p>{{ $comment->author_id }}</p>
</div>

<!-- Article Id Field -->
<div class="col-sm-12">
    {!! Form::label('article_id', 'Article Id:') !!}
    <p>{{ $comment->article_id }}</p>
</div>

<!-- Text Field -->
<div class="col-sm-12">
    {!! Form::label('text', 'Text:') !!}
    <p>{{ $comment->text }}</p>
</div>

