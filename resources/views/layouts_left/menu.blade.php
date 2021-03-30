<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="index.html">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="pages/typography.html">
                <i class="material-icons">text_fields</i>
                <span>Typography</span>
            </a>
        </li>
        <li>
            <a href="pages/helper-classes.html">
                <i class="material-icons">layers</i>
                <span>Helper Classes</span>
            </a>
        </li>
        <li>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Cards</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/widgets/cards/basic.html">Basic</a>
                        </li>
                        <li>
                            <a href="pages/widgets/cards/colored.html">Colored</a>
                        </li>
                        <li>
                            <a href="pages/widgets/cards/no-header.html">No Header</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Infobox</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                        </li>
                        <li>
                            <a href="pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                        </li>
                        <li>
                            <a href="pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                        </li>
                        <li>
                            <a href="pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                        </li>
                        <li>
                            <a href="pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="header">PROFILE</li>
            <a href="{{ url('logout') }}">
                <i class="material-icons col-amber">input</i>
                <span>Logout</span>
            </a>
            <a href="{{url('edit')}}">
                <i class="material-icons col-amber">person</i>
                <span>Edit Profile</span>
            </a>
        </li>
            
    </ul>
</div>
<!-- Menu -->