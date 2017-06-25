@extends('layouts/main')
@section('title','Blog And Comment')

@section('content')
<h1>Hello Blog</h1>
    @forelse ($blog as $key => $b)
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $b->title }}
                    </div>
                    <div class="panel-body">
                        {{ $b->blog_th }}
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                {{ $b->created_at->diffForHumans() }}
                            </div>
                            <div class="col-md-6 text-right">
                                {{
                                    Html::link(
                                        '#',
                                        'Comment',
                                        array(
                                            'class' => 'addComment btn btn-primary btn-xs'
                                        )
                                    )
                                }}
                            </div>
                        </div><!-- /.row -->
                    </div>
                </div>
            </div><!-- /.col-md-8 -->
        </div> <!-- /.row -->

        @forelse ($comment as $key => $c)
            @if ($b->id === $c->id)
                <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                {{ $c->comment }}
                            </div>
                            <div class="panel-footer">
                                {{ $c->user }}
                                <span class='label label-success'>
                                    {{ $c->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            @endif
        @empty
        @endforelse
        <!-- /.end comment -->
    @empty
        <h3>No Post!!</h3>
    @endforelse
<div class="row">
    <div class="col-xs-5">
        {{
            Html::link(
                'blog/create',
                'Add New',
                array(
                    'class' => 'btn btn-primary'
                )
            )
        }}
    </div>
</div>


<div class="modal fade" id="modal">
    <div class="modal-dialog">
        {{ Form::open([ 'method'  => 'post', 'route' => [ 'comment.store']]) }}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Comment To Blog</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="comment">Comment</label>
                    {{ Form::textarea('comment', '', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="user">User</label>
                    {{ Form::text('user', '', ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                data-dismiss="modal">
                    Close
                </button>
                {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            </div>
        </div><!-- /.modal-content -->
        {{ Form::close() }}
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection
