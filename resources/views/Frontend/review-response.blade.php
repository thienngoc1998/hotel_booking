@if(!empty($comment))
    <li>
        <div class="review-item">
            <div class="review-image">
                <img src="upload/images/user/{{$comment->user->avatar}}" alt="image" height="87px">
            </div>
            <div class="review-content">
                <h5>{{$comment->user->name}}</h5>
                <p class="date">{{$comment->created_at->format('d/m/Y')}}</p>
                <p>{{$comment->content}}</p>
            </div>
        </div>
    </li>
@endif
