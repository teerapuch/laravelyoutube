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
                                            'class' => 'btn btn-primary btn-xs',
                                            'id' => 'addComment'
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
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection
