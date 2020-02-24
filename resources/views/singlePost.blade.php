@foreach($shares as $share)
    <div class="posty">
        <div class="post-bar no-margin">
            <div class="post_topbar">
                <div class="usy-dt">
                    <img src="{{ asset('avatar/'.$share->user->photo.'') }}" width="50px" alt="">
                    <div class="usy-name">
                        <h3>{{$share->user->name}}</h3>
                        <span><img src="images/clock.png" alt="">{{$share->date}}</span>
                    </div>
                </div>
                <div class="ed-opts">
                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                    <ul class="ed-options">
                        <li><a href="#" title="">Edit Post</a></li>
                        <li><a href="#" title="">Unsaved</a></li>
                        <li><a href="#" title="">Unbid</a></li>
                        <li><a href="#" title="">Close</a></li>
                        <li><a href="#" title="">Hide</a></li>
                    </ul>
                </div>
            </div>
            <div class="epi-sec">
                <ul class="descp">
                    <li><img src="images/icon9.png" alt=""><span>Sonra {{$share->city_name}}</span></li>
                </ul>
                <ul class="bk-links">
                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                </ul>
            </div>
            <div class="job_descp">
                <h3>{{$share->title}}</h3>
                <ul class="job-dt">
                    <li><a href="#" title="">{{ $share->categoryDetail->category_name }}</a></li>
                    <li><span>₺30 / hr</span></li>
                </ul>
                <p>{{$share->description}} <a href="{{route('view',$share->id)}}" title="">daha fazla</a></p>
                <ul class="skill-tags">
                    <li><a href="#" title="">HTML</a></li>
                    <li><a href="#" title="">PHP</a></li>
                    <li><a href="#" title="">CSS</a></li>
                    <li><a href="#" title="">Javascript</a></li>
                    <li><a href="#" title="">Wordpress</a></li>
                </ul>
            </div>
            <div class="job-status-bar">
                <ul class="like-com">
                    <li>
                        <a href="{{route('like',$share->id)}}">
                            <i class="fas fa-heart"></i> Beğen({{$likeCtr}})
                        </a>
                        <img src="images/liked-img.png" alt="">
                        <span>25</span>
                    </li>
                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Yorumlar ({{ count($share->comments) }})<a></li>
                </ul>
                <a href="#"><i class="fas fa-eye"></i>{{$share->hit}}</a>
            </div>
        </div>

        <div class="comment-section">
            @if(count($share->comments))
                @foreach ($share->comments as $comment)
                    <div class="comment-sec">
                        <ul>
                            <li>
                                <div class="comment-list">
                                    <div class="bg-img cm_img">
                                        <a href="friends/{{$comment->user->nickname}}"><img  src="{{asset('avatar/'.$comment->user->photo.'')}}" width="50px" alt=""></a>
                                    </div>
                                    <div class="comment">
                                        <span><img src="images/clock.png" alt=""> {{$comment->date}}</span>
                                        <p>{{$comment->comment}}</p>
                                        <a href="#" title=""><i class="la la-reply-all"></i>Cevapla</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endforeach
            @else
                <div class="comment-sec mb-3">
                    <ul>
                        <li>
                            Bu paylaşıma ait yorum bulunmamakta!
                        </li>
                    </ul>
                </div>
            @endif
            <div class="post-comment">
                <div class="cm_img">
                    <img src="{{asset('avatar/'.$userDetails->photo)}}" alt="">
                </div>
                <div class="comment_box">
                    <form action="{{ route('add.comment') }}" method="post">
                        @csrf
                        <input type="text" name="comment" autocomplete="off" placeholder="Yorum gönderin..">
                        <input type="hidden" value="{{$share->id}}" name="shares_id">
                        <button type="submit" id="addCom">Paylaş</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach