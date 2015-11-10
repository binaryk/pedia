<div class="portlet portlet-sortable box green-haze">
    <div class="rich-editor-title portlet-title">
        <div class="caption">
            	<label class="control-label titlu-camp" for="{{$name}}">
					@if($feedback == Easy\Form\Base::FEEDBACK_SUCCESS)
						<i class="fa fa-check"></i>
					@elseif($feedback == Easy\Form\Base::FEEDBACK_WARNING)
						<i class="fa fa-bell-o"></i>
					@elseif($feedback == Easy\Form\Base::FEEDBACK_ERROR)
						<i class="fa fa-times-circle-o"></i>
					@endif
					{!! $caption !!}
				</label>
        </div>
        <div class="actions"> 
         <!--   <a href="#tab-1" data-toggle="tab" class="info">
            </a> -->   
            <a href="#" data-id = "{!!$name!!}" title = "Sterge" ng-click="removeUx({!!$name!!})" class="delete_area sterge">
            </a> 
        </div>
    </div>
    <div class="rich-editor-body portlet-body">
         <div class="form-group{{$feedback ? ' has-' . $feedback : ''}}">
             	<div class="form-group">
					<div class="col-md-12 note-block">
						{!! Form::textarea($name, $value, $attributes) !!}
					</div>

					<div style="float:left;width: 50%;">
						<a ng-click="showCommentBox({!! $attributes['id'] !!})">Adauga comentariu</a ><br />
						<div id="comment-{!! $attributes['id'] !!}" style="display: none;">
							{!! Form::textarea('comment') !!}<br />
							<a ng-click="saveCommentBox({!! $attributes['id'] !!})" >Salveaza</a >
						</div>
					</div>
					<div style="float:left;width: 50%;">
						<a ng-click="showComments({!! $attributes['id'] !!})">Arata comentariile</a >
						<ul class="comment-{!! $attributes['id'] !!}" style="display:none;">
							@foreach($comments as $comment)
								<li><a id="comment_id-{!! $comment['id'] !!}" ng-click="deleteComment({!! $comment['id'] !!})">delete</a >{!! $comment->comment !!} <br />Added by : {!! $comment->user->name !!}</li>
							@endforeach
						</ul>
				</div>
				<div class="clearfix"></div>
			@if($help)
				<p class="help-block">{{$help}}</p>
			@endif
		</div>

    </div>
</div> 