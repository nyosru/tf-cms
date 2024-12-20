<div>

    @if(1==2)
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Бухгалтерия
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        {{--                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.--}}
                        ссылки <br/>
                        ссылки <br/>
                        ссылки <br/>
                        ссылки <br/>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    @endif

    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">

            <a href="#" class="nav-link xblock w-100 {{ (
                request()->routeIs('buh.zakazs') ||
                request()->routeIs('buh.sheta') ||
                request()->routeIs('buh.uslugi')
                ) ? 'active' : '' }}"
               style="text-decoration: auto;"
            >

                <i class="xnav-icon bi bi-wallet"></i>&nbsp;&nbsp;Бухгалтерия
                {{--                    <i class="nav-arrow bi bi-chevron-right"></i>--}}
                {{--                    <i style="float:right;" class="inline xnav-arrow bi bi-arrow-down-square-fill"></i>--}}
            </a>
            <div style="margin-left: 20px;">
                <ul class="nav nav-treeview w-100">

                    <li class="nav-item w-100 text-end ">
                        <a href="{{ route('buh.zakazs') }}"
                           wire:navigate
                           class="nav-link {{ request()->routeIs('buh.zakazs') ? 'active' : '' }}">
                            {{--                    <i class="nav-icon bi bi-circle"></i>--}}
                            Заказы
                        </a>
                    </li>

                    <li class="nav-item w-100">
                        <a href="{{ route('buh.uslugi') }}"
                           wire:navigate
                           class="nav-link {{ request()->routeIs('buh.uslugi') ? 'active' : '' }}">
                            {{--                    <i class="nav-icon bi bi-circle"></i>--}}
                            Услуги
                        </a>
                    </li>

                    <li class="nav-item w-100">
                        <a href="{{ route('buh.sheta') }}"
                           wire:navigate
                           class="nav-link {{ request()->routeIs('buh.sheta') ? 'active' : '' }}">
                            {{--                    <i class="nav-icon bi bi-circle"></i>--}}
                            Счета
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="nav-item">

            <a href="https://crm.marudi.store" class="nav-link
               style="text-decoration: auto;"
            >

                <i class="xnav-icon bi bi-asterisk"></i>&nbsp;&nbsp;Перейти на crm.marudi.store
                {{--                    <i class="nav-arrow bi bi-chevron-right"></i>--}}
                {{--                    <i style="float:right;" class="inline xnav-arrow bi bi-arrow-down-square-fill"></i>--}}
            </a>
        </li>


        @if(1==2)
            <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

            <!--<li class="nav-item">
              <a href="/fabcrm" class="nav-link">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p>Статистика</p>
              </a>
            </li>-->

            <li class="nav-item">
                <a href="https://crm.marudi.store/fabcrm/page/orders?id=2" class="nav-link ">
                    <i class="nav-icon  fas fa-shopping-cart"></i>
                    <p>Заказы</p>
                    <span class="right" data-toggle="tooltip" data-placement="top" title=""
                          data-original-title="Есть срочные заказы - 3">
                      <i class="fas fa-fire text-warning"></i>
                  </span>
                </a>
            </li>


            <li class="nav-item">
                <a href="https://crm.marudi.store/fabcrm/page/services" class="nav-link ">
                    <i class="nav-icon fa fa-cart-plus" aria-hidden="true"></i>
                    <p>Услуги</p>
                    <span class="right" data-toggle="tooltip" data-placement="top" title=""
                          data-original-title="Есть срочные услуги - 5">
                      <i class="fas fa-fire text-warning"></i>
                  </span>
                </a>
            </li>


            <li class="nav-item">
                <a href="https://crm.marudi.store/fabcrm/page/files" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Зона обмена
                        <!--                        <span class="right badge badge-danger">New</span>-->
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="https://crm.marudi.store/fabcrm/page/fittings" class="nav-link">
                    <i class="nav-icon fas fa-file-contract"></i>
                    <p>Фурнитура
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>

                </a>
            </li>

            <li class="nav-item">
                <a href="https://crm.marudi.store/fabcrm/page/facade" class="nav-link">
                    <i class="nav-icon fas fa-file-contract"></i>
                    <p>Фасады</p>
                    <span class="right badge badge-warning">TFMF</span>
                </a>
            </li>


            <li class="nav-item">
                <a href="https://crm.marudi.store/fabcrm/page/clients" class="nav-link ">
                    <i class="nav-icon fas fas fa-user-tie"></i>
                    <p>Клиенты</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="https://crm.marudi.store/fabcrm/page/staff_list">
                    <i class="nav-icon fas fa-people-carry"></i>
                    <p>Сотрудники</p>
                    <!--                        -->
                    <!--                            <span class="right badge badge-success" data-toggle="tooltip" data-placement="top"-->
                    <!--                                  title="В сети - 1">online</span>-->
                    <!--                        -->
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="https://crm.marudi.store/fabcrm/page/leads">
                    <i class="nav-icon fas fa-shekel-sign"></i>
                    <p>Лиды</p></a>
            </li>

            <li class="nav-item">
                <a href="https://crm.marudi.store/fabcrm/page/statistic_table" class="nav-link ">
                    <i class="nav-icon fas fa-chart-bar"></i>
                    <p>Статистика</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="https://crm.marudi.store/fabcrm/page/regedit" class="nav-link ">
                    <i class="nav-icon fas fa-window-restore"></i>
                    <p>Реестр</p>
                </a>
            </li>


            <li class="nav-item  menu-open">
                <a href="#" class="nav-link  active ">
                    <i class="nav-icon fas fa-wallet"></i>
                    <p>Бухгалтерия <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://crm.marudi.store/fabcrm/page/accounting" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Заказы</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://crm.marudi.store/fabcrm/page/accounting?services=1" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Услуги</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://crm.marudi.store/fabcrm/page/check_payment" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Счета</p>
                        </a>
                    </li>
                </ul>

            </li>


            <li class="nav-item">
                <a href="https://crm.marudi.store/fabcrm/page/contracts" class="nav-link ">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Договора</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link  " href="https://crm.marudi.store/fabcrm/page/brigade">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Бригады</p></a>
            </li>

            <!--<li class="nav-item">
                <a class="nav-link " href="/fabcrm/page/skins"><i class="nav-icon fas fa-layer-group"></i> <p>Пленки</p></a>
            </li> -->

            <li class="nav-item ">
                <a class="nav-link " href="https://crm.marudi.store/fabcrm/page/schedule"><i
                        class="nav-icon fas fa-calendar-alt"></i>
                    <p>График</p></a>
            </li>


            <li class="nav-item">
                <a class="nav-link " href="https://crm.marudi.store/fabcrm/page/providers">
                    <i class="nav-icon fas fa-city"></i>
                    <p>Поставщики</p>
                    <span class="right badge badge-success" data-toggle="tooltip" data-placement="top" title=""
                          data-original-title="Количество поставщиков - 22">
                          22
                      </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="https://crm.marudi.store/fabcrm/page/materials"><i
                        class="nav-icon fas fa-truck"></i>
                    <p>Снабжение</p></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link " href="https://crm.marudi.store/fabcrm/page/warehouse">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>Склад</p></a>
            </li>

            <!--
                            <li class="nav-item">
                <a class="nav-link  " href="/fabcrm/page/settings"><i class="nav-icon fas fa-cogs"></i> <p>Настройки</p></a>
            </li>
                            -->
        @endif


        {{--оригинал    --}}
        @if(1==2)
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open"><a href="#" class="nav-link active"> <i
                            class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="./index.html" class="nav-link active"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v1</p>
                            </a></li>
                        <li class="nav-item"><a href="./index2.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v2</p>
                            </a></li>
                        <li class="nav-item"><a href="./index3.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v3</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="./generate/theme.html" class="nav-link"> <i
                            class="nav-icon bi bi-palette"></i>
                        <p>Theme Generate</p>
                    </a></li>
                <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Widgets
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="./widgets/small-box.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Small Box</p>
                            </a></li>
                        <li class="nav-item"><a href="./widgets/info-box.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>info Box</p>
                            </a></li>
                        <li class="nav-item"><a href="./widgets/cards.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Cards</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-clipboard-fill"></i>
                        <p>
                            Layout Options
                            <span class="nav-badge badge text-bg-secondary me-3">6</span> <i
                                class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="./layout/unfixed-sidebar.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Default Sidebar</p>
                            </a></li>
                        <li class="nav-item"><a href="./layout/fixed-sidebar.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Fixed Sidebar</p>
                            </a></li>
                        <li class="nav-item"><a href="./layout/layout-custom-area.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Layout <small>+ Custom Area </small></p>
                            </a></li>
                        <li class="nav-item"><a href="./layout/sidebar-mini.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Sidebar Mini</p>
                            </a></li>
                        <li class="nav-item"><a href="./layout/collapsed-sidebar.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Sidebar Mini <small>+ Collapsed</small></p>
                            </a></li>
                        <li class="nav-item"><a href="./layout/logo-switch.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Sidebar Mini <small>+ Logo Switch</small></p>
                            </a></li>
                        <li class="nav-item"><a href="./layout/layout-rtl.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Layout RTL</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-tree-fill"></i>
                        <p>
                            UI Elements
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="./UI/general.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>General</p>
                            </a></li>
                        <li class="nav-item"><a href="./UI/icons.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Icons</p>
                            </a></li>
                        <li class="nav-item"><a href="./UI/timeline.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Timeline</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-pencil-square"></i>
                        <p>
                            Forms
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="./forms/general.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>General Elements</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-table"></i>
                        <p>
                            Tables
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="./tables/simple.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Simple Tables</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item"><a href="#" class="nav-link"> <i
                            class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Auth
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="#" class="nav-link"> <i
                                    class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Version 1
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="./examples/login.html" class="nav-link"> <i
                                            class="nav-icon bi bi-circle"></i>
                                        <p>Login</p>
                                    </a></li>
                                <li class="nav-item"><a href="./examples/register.html" class="nav-link"> <i
                                            class="nav-icon bi bi-circle"></i>
                                        <p>Register</p>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link"> <i
                                    class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Version 2
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="./examples/login-v2.html" class="nav-link"> <i
                                            class="nav-icon bi bi-circle"></i>
                                        <p>Login</p>
                                    </a></li>
                                <li class="nav-item"><a href="./examples/register-v2.html" class="nav-link"> <i
                                            class="nav-icon bi bi-circle"></i>
                                        <p>Register</p>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="./examples/lockscreen.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Lockscreen</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-header">DOCUMENTATIONS</li>
                <li class="nav-item"><a href="./docs/introduction.html" class="nav-link"> <i
                            class="nav-icon bi bi-download"></i>
                        <p>Installation</p>
                    </a></li>
                <li class="nav-item"><a href="./docs/layout.html" class="nav-link"> <i
                            class="nav-icon bi bi-grip-horizontal"></i>
                        <p>Layout</p>
                    </a></li>
                <li class="nav-item"><a href="./docs/color-mode.html" class="nav-link"> <i
                            class="nav-icon bi bi-star-half"></i>
                        <p>Color Mode</p>
                    </a></li>
                <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-ui-checks-grid"></i>
                        <p>
                            Components
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="./docs/components/main-header.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Main Header</p>
                            </a></li>
                        <li class="nav-item"><a href="./docs/components/main-sidebar.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Main Sidebar</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-filetype-js"></i>
                        <p>
                            Javascript
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="./docs/javascript/treeview.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Treeview</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="./docs/browser-support.html" class="nav-link"> <i
                            class="nav-icon bi bi-browser-edge"></i>
                        <p>Browser Support</p>
                    </a></li>
                <li class="nav-item"><a href="./docs/how-to-contribute.html" class="nav-link"> <i
                            class="nav-icon bi bi-hand-thumbs-up-fill"></i>
                        <p>How To Contribute</p>
                    </a></li>
                <li class="nav-item"><a href="./docs/faq.html" class="nav-link"> <i
                            class="nav-icon bi bi-question-circle-fill"></i>
                        <p>FAQ</p>
                    </a></li>
                <li class="nav-item"><a href="./docs/license.html" class="nav-link"> <i
                            class="nav-icon bi bi-patch-check-fill"></i>
                        <p>License</p>
                    </a></li>
                <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>Level 1</p>
                    </a></li>
                <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Level 1
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Level 2</p>
                            </a></li>
                        <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>
                                    Level 2
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="#" class="nav-link"> <i
                                            class="nav-icon bi bi-record-circle-fill"></i>
                                        <p>Level 3</p>
                                    </a></li>
                                <li class="nav-item"><a href="#" class="nav-link"> <i
                                            class="nav-icon bi bi-record-circle-fill"></i>
                                        <p>Level 3</p>
                                    </a></li>
                                <li class="nav-item"><a href="#" class="nav-link"> <i
                                            class="nav-icon bi bi-record-circle-fill"></i>
                                        <p>Level 3</p>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Level 2</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>Level 1</p>
                    </a></li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item"><a href="#" class="nav-link"> <i
                            class="nav-icon bi bi-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a></li>
                <li class="nav-item"><a href="#" class="nav-link"> <i
                            class="nav-icon bi bi-circle text-warning"></i>
                        <p>Warning</p>
                    </a></li>
                <li class="nav-item"><a href="#" class="nav-link"> <i
                            class="nav-icon bi bi-circle text-info"></i>
                        <p>Informational</p>
                    </a></li>
            </ul> <!--end::Sidebar Menu-->
        @endif


    </ul>


</div>
