<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item menu-open">

        <a href="#" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Бухгалтерия
                <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
        </a>

        <ul class="nav nav-treeview">
            <li class="nav-item w-full">
                <a href="{{ route('buh.sheta') }}"
                   wire:navigate
                   class="nav-link {{ request()->routeIs('buh.sheta') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>buh.sheta</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('buh.uslugi') }}"
                   wire:navigate
                   class="nav-link {{ request()->routeIs('buh.uslugi') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>buh.uslugi</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('buh.zakazs') }}"
                   wire:navigate
                   class="nav-link {{ request()->routeIs('buh.zakazs') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>buh.zakazs</p>
                </a>
            </li>
        </ul>

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
        <a class="nav-link " href="https://crm.marudi.store/fabcrm/page/materials"><i class="nav-icon fas fa-truck"></i>
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

</ul>
