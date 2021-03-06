<ul {!! $options !!}>
    @foreach ($menu_nodes as $key => $row)
    <li class="menu-item @if ($row->hasChild()) menu-item-has-children @endif {{ $row->css_class }} @if ($row->getRelated()->url == Request::url()) active @endif">
        @if($row->type=='category')
		<a href="{{ $row->getRel()->url }}" target="{{ $row->target }}">
            @if ($row->icon_font)<i class='{{ trim($row->icon_font) }}'></i> @endif{{ $row->getRelated()->name }}
        </a>
		@else
			<a href="{{ $row->getRelated()->url }}" target="{{ $row->target }}">
            @if ($row->icon_font)<i class='{{ trim($row->icon_font) }}'></i> @endif{{ $row->getRelated()->name }}
			</a>
		@endif	
		
		
		
        @if ($row->hasChild())
		          	
            {!!
                Menu::generateMenu([
                    'slug' => $row,
                    'view' => 'main-menu',
                    'options' => ['class' => 'sub-menu'],
                    'parent_id' => $row->id
                ])
            !!}
        @endif
    </li>
    @endforeach
</ul>
