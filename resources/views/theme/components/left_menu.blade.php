
<div class="row align-items-center">
    <div class="logo col-2 align-self-center">
        <a class="d-lg-inline " href="{{URL::to('/')}}">
            <img class="logo-web" src="{{asset($_s['logo'])}}" width="100" />
        </a>
    </div>
     <div class="col-10 col-lg-10 text-end">

        <button type="button" class="d-md-none btn--link site-header__menu 
        js-mobile-nav-toggle mobile-nav--open" data-bs-toggle="tooltip" 
        data-bs-placement="bottom" title="Menu">
        <i class="icon an an-times"></i>
        <i class="icon an an-bars"></i>
        </button>

       <div class="d-lg-block d-none" >
        <nav class="grid__item" id="AccessibleNav">
            <ul id="siteNav" class="d-flex flex-wrap site-nav medium left ms-6 hidearrow justify-content-end">
                  @if($main_menu)
                    @foreach ($main_menu->children->where('parent_id',null) as $page)
                        <li class="lvl1 parent dropdown">
                                <a href="{{URL::to($page->link)}} ">{{$page->title}} 
                                <i class="an an-angle-down"></i></a>
                            @if(count($page->children) > 0)
                            <ul class="dropdown">
                                @foreach ($page->children as $chil_page)
                                <li><a href="{{URL::to($chil_page->link)}}" class="site-nav">{{$chil_page->title}}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>  
                    @endforeach
                @endif
            </ul>
        </nav>
     </div>
    </div>
</div>

