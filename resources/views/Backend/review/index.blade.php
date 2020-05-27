@extends('Backend.index')
@section('title')
Danh sách review
@endsection

@section('content')
<div class="dashboard-form">
    <div class="row">

        <!-- Listings -->
        <div class="col-lg-6 col-md-12 padding-right-30">

            <div class="dashboard-list-box margin-top-0">

                <h4 class="gray"> NGười ghé  thăm</h4>

                <ul>

                    <li>
                        <div class="comments listing-reviews">
                            <ul>
                                @foreach($reviews as $review)
                                <li>
                                    <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt=""></div>
                                    <div class="comment-content"><div class="arrow-comment"></div>
                                            <div class="comment-by">{{$review->user->name}}<div class="comment-by-listing" style="padding-left: 5px;">đã bình luận vào <a href="#" style="padding-left: 10px;">{{$review->room->name}}</a></div>
                                                <span class="date">{{$review->created_at->format('d/m/Y')}}</span>
                                            <div class="star-rating" data-rating="5"></div>
                                        </div>
                                        <p>{{$review->content}}</p>
{{--                                        <a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-action-undo"></i> Reply to this review</a>--}}
                                        @if($review->active == true)
                                        <a href="#" data-toggle="modal" data-target="#modalDelete"  data-delete-url="{{route('admin.block-review', $review->id)}}" class="rate-review popup-with-zoom-anim" style="background-color: red;"><i class="sl sl-icon-action-undo"></i> Xoá </a>
                                         @endif

                                    </div>
                                </li>
                                 @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Listings -->
{{--        <div class="col-lg-6 col-md-12 padding-left-30">--}}
{{--            <div class="dashboard-list-box margin-top-0">--}}
{{--                <h4 class="gray">Your Reviews</h4>--}}
{{--                <ul>--}}

{{--                    <li>--}}
{{--                        <div class="comments listing-reviews">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt=""></div>--}}
{{--                                    <div class="comment-content"><div class="arrow-comment"></div>--}}
{{--                                        <div class="comment-by">Your review <div class="comment-by-listing own-comment">on <a href="#">Tom's Restaurant</a></div> <span class="date">May 2017</span>--}}
{{--                                            <div class="star-rating" data-rating="4.5"></div>--}}
{{--                                        </div>--}}
{{--                                        <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo.</p>--}}
{{--                                        <a href="#" class="rate-review"><i class="sl sl-icon-note"></i> Edit</a>--}}
{{--                                    </div>--}}

{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <div class="comments listing-reviews">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt=""></div>--}}
{{--                                    <div class="comment-content"><div class="arrow-comment"></div>--}}
{{--                                        <div class="comment-by">Your review <div class="comment-by-listing own-comment">on <a href="#">Think Coffee</a></div> <span class="date">May 2017</span>--}}
{{--                                            <div class="star-rating" data-rating="5"></div>--}}
{{--                                        </div>--}}
{{--                                        <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>--}}
{{--                                        <a href="#" class="rate-review"><i class="sl sl-icon-note"></i> Edit</a>--}}
{{--                                    </div>--}}

{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="comments listing-reviews">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt=""></div>--}}
{{--                                    <div class="comment-content"><div class="arrow-comment"></div>--}}
{{--                                        <div class="comment-by">Kathy Brown <div class="comment-by-listing">on <a href="#">Burger House</a></div> <span class="date">June 2017</span>--}}
{{--                                            <div class="star-rating" data-rating="5"></div>--}}
{{--                                        </div>--}}
{{--                                        <p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>--}}

{{--                                        <a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-action-undo"></i> Reply to this review</a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <div class="comments listing-reviews">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt=""></div>--}}
{{--                                    <div class="comment-content"><div class="arrow-comment"></div>--}}
{{--                                        <div class="comment-by">Kathy Brown <div class="comment-by-listing">on <a href="#">Burger House</a></div> <span class="date">June 2017</span>--}}
{{--                                            <div class="star-rating" data-rating="5"></div>--}}
{{--                                        </div>--}}
{{--                                        <p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>--}}
{{--                                        <a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-action-undo"></i> Reply to this review</a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Pagination -->
        <div class="clearfix"></div>
        <div class="pagination-container">
            @include('includes.pagination', ['paging' => $reviews])
        </div>
        <!-- Pagination / End -->
    </div>
</div>
<div class="modal fade" id="modalDelete" role="dialog">
    <div class="modal-dialog mt-270">
        <div class="modal-content">
            <div class="modal-header bg-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-white">{{ trans('button.title') }}</h4>
            </div>
            <div class="modal-body text-center">
                <p> Bạn có muốn ẩn bình luận không？</p>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <a href="#" class="btn btn-success btn-delete-submit">
                        {{ trans('button.ok') }}
                    </a>
                    <button type="button" class="btn btn-danger ml-20" data-dismiss="modal">
                        {{ trans('button.cancel') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#modalDelete').on('show.bs.modal', function(e) {
            var url = $(e.relatedTarget).data('delete-url');
            $(e.currentTarget).find('.btn-delete-submit').attr("href", url);
        });
    });
</script>
@endsection
