@php
    $featured = get_featured_posts(5);
    $featuredList = [];
    if (!empty($featured)) {
        $featured->pluck('id')->all();
    }
@endphp

@if (!empty($featured))
    <section class="section pt-50 pb-50 bg-lightgray paddingTopCustom" >
        
		  <div  style="margin-top:-53px !important;">
            <div class="post-group post-group--hero">
			    
                @foreach ($featured as $feature_item)
                    @if ($loop->first)
                    <div class="post-group__left posgGroupLeft">
                        <article class="post post__inside post__inside--feature" >
                            <div class="post__thumbnail customPostThumbnail">
                                <img src="{{ get_object_image($feature_item->image, 'featured') }}" alt="{{ $feature_item->name }}"><a href="{{ route('public.single', $feature_item->slug) }}" class="post__overlay"></a>
                            </div>
                            <header class="post__header">
                                <h3 class="post__title"><a href="{{ route('public.single', $feature_item->slug) }}">{{ $feature_item->name }}</a></h3>
                                <div class="post__meta"><span class="post-category"><i class="ion-cube"></i>
                                        @if (!$feature_item->categories->isEmpty())<a href="{{ route('public.single', $feature_item->categories->first()->slug) }}">{{ $feature_item->categories->first()->name }}</a>@endif
                                        </span>
                                    <span class="created_at"><i class="ion-clock"></i><a href="#">{{ date_from_database($feature_item->created_at, 'M d Y') }}</a></span>
                                    <span class="post-author"><i class="ion-android-person"></i><a href="{{ route('public.author', $feature_item->user->username) }}">{{ $feature_item->user->getFullName() }}</a></span>
                                </div>
                            </header>
                        </article>
                    </div>
                    <div class="post-group__right postGroupRight">
                    @else
                        <div class="post-group__item" >
                            <article class="post post__inside post__inside--feature post__inside--feature-small">
                                <div class="post__thumbnail"><img src="{{ get_object_image($feature_item->image, 'medium') }}" alt="{{ $feature_item->name }}"><a href="{{ route('public.single', $feature_item->slug) }}" class="post__overlay"></a></div>
                                <header class="post__header">
                                    <h3 class="post__title"><a href="{{ route('public.single', $feature_item->slug) }}">{{ $feature_item->name }}</a></h3>
                                </header>
                            </article>
                        </div>
                        @if ($loop->last)
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
			</div>
       
    </section>
@endif
<section class="section pt-50 pb-50">
    <div class="container">
        <div class="containercustom">
		<div class="row">
            <div class="col-lg-8">
			    <!--Destinasi -->
				<div class="row">
				<div class="col-lg-12">
                <div class="page-content">
                    <div class="post-group post-group--single">
                        <div class="post-group__header">
                            <h3 class="post-group__title">{{ __("Destination") }}</h3>
                        </div>
                        <div class="post-group__content">
                            <div class="row">
							   <!--Ambil categori Destinasi -->
                                @foreach (get_req_cat(7, 1) as $post)
                                    @if ($loop->first)
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <article class="post post__vertical post__vertical--single">
                                                <div class="post__thumbnail">
                                                    <img src="{{ get_object_image($post->image, 'medium') }}" alt="{{ $post->name }}"><a href="{{ route('public.single', $post->slug) }}" class="post__overlay"></a>
                                                </div>
                                                <div class="post__content-wrap">
                                                    <header class="post__header">
                                                        <h3 class="post__title"><a href="{{ route('public.single', $post->slug) }}">{{ $post->name }}</a></h3>
                                                        <div class="post__meta"><span class="created__month">{{ date_from_database($post->created_at, 'M') }}</span><span class="created__date">{{ date_from_database($post->created_at, 'd') }}</span><span class="created__year">{{ date_from_database($post->created_at, 'Y') }}</span></div>
                                                    </header>
                                                    <div class="post__content">
                                                        <p data-number-line="4">{{ $post->description }}</p>
                                                    </div>
                                                    <!--<div class="post__footer"><a href="{{ route('public.single', $post->slug) }}" class="post__readmore">{{ __('Read more') }}</a></div> -->
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                    @else
                                        <article class="post post__horizontal post__horizontal--single mb-20 clearfix">
                                            <div class="post__thumbnail">
                                                <img src="{{ get_object_image($post->image, 'medium') }}" alt="{{ $post->name }}"><a href="{{ route('public.single', $post->slug) }}" class="post__overlay"></a>
                                            </div>
                                            <div class="post__content-wrap">
                                                <header class="post__header">
                                                    <h3 class="post__title"><a href="{{ route('public.single', $post->slug) }}">{{ $post->name }}</a></h3>
                                                    <div class="post__meta"><span class="post__created-at"><a href="#">{{ date_from_database($post->created_at, 'M d, Y') }}</a></span></div>
                                                </header>
                                            </div>
                                        </article>
                                    @endif
                                    @if ($loop->last)
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
				</div>
				</div>
				<!--End Destinasi -->
				<div class="row">
					<!-- kerajinan -->
					<div class="col-lg-6">
						<div class="page-content">
							<div class="post-group post-group--single">
								<div class="post-group__header">
									<h3 class="post-group__title">{{ __("Kerajinan") }}</h3>
								</div>
							</div>
							<div class="post-group__content">
								@foreach (get_req_cat(7, 21) as $post)
									@if ($loop->first)
										<div class="td_module_mx1 td_module_wrap td-animation-stack">
											<div class="td-module-thumb">
												<a href="{{ route('public.single', $post->slug) }}" rel="bookmark" class="td-image-wrap" title="{{ $post->name }}">
												<img width="356" height="220" class="entry-thumb td-animation-stack-type0-2" src="{{ get_object_image($post->image, 'medium') }}" alt="" title="{{ $post->name }}">
												</a>
											</div>
											<div class="td-module-meta-info">
												<h3 class="entry-title td-module-title">
													<a href="{{ route('public.single', $post->slug) }}" rel="bookmark" title="{{ $post->name }}">{{ $post->name }}
													</a>
												</h3> 
												<div class="td-editor-date">
												<span class="td-author-date">
													<span class="td-post-date"><time class="entry-date updated td-module-date">{{ date_from_database($post->created_at, 'M') }} {{date_from_database($post->created_at, 'd') }}, {{date_from_database($post->created_at, 'Y') }}</time></span> 
												</span>
												</div>
											</div>
										</div>
									@else
										<article class="post post__horizontal post__horizontal--single mb-20 clearfix">
											<div class="post__thumbnail">
												<img src="{{ get_object_image($post->image, 'medium') }}" alt="{{ $post->name }}"><a href="{{ route('public.single', $post->slug) }}" class="post__overlay"></a>
											</div>
											<div class="post__content-wrap">
												<header class="post__header">
													<h3 class="post__title"><a href="{{ route('public.single', $post->slug) }}">{{ $post->name }}</a></h3>
													<div class="post__meta"><span class="post__created-at"><a href="#">{{ date_from_database($post->created_at, 'M d, Y') }}</a></span></div>
												</header>
											</div>
										</article>
									@endif
								@endforeach	

							</div>
						</div>
					</div>
				   <!-- end kerajinan --> 	
					<!-- Kuliner -->
					<div class="col-lg-6">
						<div class="page-content">
							<div class="post-group post-group--single">
								<div class="post-group__header">
									<h3 class="post-group__title">{{ __("Kuliner") }}</h3>									
								</div>
							</div>
							<div class="post-group__content">
								@foreach (get_req_cat(7, 22) as $post)
									@if ($loop->first)
										<div class="td_module_mx1 td_module_wrap td-animation-stack">
											<div class="td-module-thumb">
												<a href="{{ route('public.single', $post->slug) }}" rel="bookmark" class="td-image-wrap" title="{{ $post->name }}">
												<img width="356" height="220" class="entry-thumb td-animation-stack-type0-2" src="{{ get_object_image($post->image, 'medium') }}" alt="" title="{{ $post->name }}">
												</a>
											</div>
											<div class="td-module-meta-info">
												<h3 class="entry-title td-module-title">
													<a href="{{ route('public.single', $post->slug) }}" rel="bookmark" title="{{ $post->name }}">{{ $post->name }}
													</a>
												</h3> 
												<div class="td-editor-date">
												<span class="td-author-date">
													<span class="td-post-date"><time class="entry-date updated td-module-date">{{ date_from_database($post->created_at, 'M') }} {{date_from_database($post->created_at, 'd') }}, {{date_from_database($post->created_at, 'Y') }}</time></span> 
												</span>
												</div>
											</div>
										</div>
									@else
										<article class="post post__horizontal post__horizontal--single mb-20 clearfix">
											<div class="post__thumbnail">
												<img src="{{ get_object_image($post->image, 'medium') }}" alt="{{ $post->name }}"><a href="{{ route('public.single', $post->slug) }}" class="post__overlay"></a>
											</div>
											<div class="post__content-wrap">
												<header class="post__header">
													<h3 class="post__title"><a href="{{ route('public.single', $post->slug) }}">{{ $post->name }}</a></h3>
													<div class="post__meta"><span class="post__created-at"><a href="#">{{ date_from_database($post->created_at, 'M d, Y') }}</a></span></div>
												</header>
											</div>
										</article>
									@endif
								@endforeach	
							</div>	
						</div>
					</div>
				   <!-- end kuliner -->
				</div>
            </div>
            <div class="col-lg-4">
                <div class="page-sidebar">
                    {!! dynamic_sidebar('top_sidebar') !!}
                </div>
            </div>
			</div>
        </div>
    </div>
</section>



