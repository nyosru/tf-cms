<div>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="mb-0">Заказы</h3>
                </div>
                <div class="col-sm-4">
                    <input type="text" wire:model.live="searchTerm" placeholder="Поиск по клиенту ..."
                           class="form-control">
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Бухгалтерия</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Заказы
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->

    {{--    <div class="container xh-100 d-flex xjustify-content-center xalign-items-center">--}}
    {{--        <div class="row w-100">--}}
    {{--            <div class="col border p-3 xtext-center w-25">--}}
{{--    <div class="m-2 w-25">--}}
{{--        <input type="text" wire:model.live="searchTerm" placeholder="Поиск по клиенту ..."--}}
{{--               class="form-control">--}}
{{--        --}}{{--                </div>--}}
{{--    </div>--}}
    {{--            <div class="col border p-1 xtext-center"><span class="bg-warning p-3">{{ $searchTerm }}</span></div>--}}
    {{--            <div class="col border p-3 xtext-center"></div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="px-2">
        <!-- Table with orders and clients -->
        <table class="table table-striped " style="font-size:14px;">

            <thead>
            <tr>
                <th scope="col" style="text-align: center">№ заказа</th>
                <th scope="col" style="text-align: center">
                    ФИО Клиента
                    <br/>
                    {{--            </th>--}}
                    {{--            <th scope="col">--}}
                    Заказ
                </th>
                            <th scope="col" style="text-align: center">Дата<br/>создания</th>

                {{--            <th scope="col">№ Заказа</th>--}}
                <th scope="col" class="text-end">Цена</th>
                <th scope="col" class="text-end">Выручка</th>
                {{--            <th scope="col">Камень</th>--}}
                {{--            <th scope="col">Фасады</th>--}}
                <th scope="col" class="text-end">Камень<br/>
                    Фасады
                </th>
                <th scope="col" class="text-end">Фурнитура
                    {{--            </th>--}}
                    <br/>
                    {{--            <th scope="col">--}}
                    Работы
                </th>

                {{--            <th scope="col">Монтаж</th>--}}
                {{--            <th scope="col">Сборка</th>--}}
                <th scope="col" class="text-end">Монтаж<br/>
                    Сборка
                </th>

                <th scope="col" class="text-end">Замер</th>
                <th scope="col" class="text-end">Доставка<br/>
                    Грузчики
                </th>
                {{--            <th scope="col">Менеджер</th>--}}
                {{--            <th scope="col">Скидка</th>--}}
                <th scope="col" class="text-end">Менеджер<br/>
                    Скидка
                </th>
                <th scope="col" class="text-end">Доп заказ</th>
                {{--            <th scope="col">Дизайн</th>--}}
                {{--            <th scope="col">Технолог</th>--}}
                <th scope="col" class="text-end">Дизайн<br/>
                    Технолог
                </th>
                {{--            <th scope="col">Остаток</th>--}}
                {{--            <th scope="col">График</th>--}}
            </tr>
            </thead>

            <tbody>
            @if( isset($items) && count($items) == 0 )

                <tr>
                    <td colspan="102" class="text-xl-center bg-warning" style="font-size:1rem">
                        Не найдено данных, поиск: <u>{{ $searchTerm }}</u>
                    </td>
                </tr>

            @else

                @foreach($items as $key => $order)
                    <tr>

                        {{--                <td>{{ $items->firstItem() + $key }}</td>--}}

                        {{--                номер заказа--}}
                        <td  style="text-align: center" >

                            @if( $order->service == "A" )
                                <a href="https://crm.marudi.store/fabcrm/page/order_info?service_id={{ $order->service . $order->virtual_service_id }}&service&id={{ $order->id }}"
                                   target="_blank"
                                >
                                    {{ $order->service . $order->virtual_service_id }}
                                </a>
                            @else
                                <a href="https://crm.marudi.store/fabcrm/page/order_info?id={{ $order->id }}"
                                   target="_blank"
                                >
                                    {{ $order->id }}
                                </a>
                            @endif

                            {{--                    <br/>--}}
                            {{--                    {% if i.service == "A" %}--}}
                            {{--                    <a href="{{fabcrm}}/fabcrm/page/order_info?service_id={{i.service}}{{i.virtual_service_id}}&service&id={{i.id}}">--}}
                            {{--                        {{ i.service }}{{ i.virtual_service_id }}--}}
                            {{--                        {%else%}--}}
                            {{--                        <a href="{{ fabcrm }}/fabcrm/page/order_info?id={{ i.id }}">--}}
                            {{--                            {{ i.virtual_order_id }}--}}
                            {{--                        {%endif%}--}}


                        </td>
                        {{--                фио клиента--}}
                        <td>
                            <b>{{ $order->client->name_i }} {{ $order->client->name_f }} {{ $order->client->name_o }}</b>
                            <br/>
                            {{--                    <br/>--}}
                            {{--                    <nobr><button wire:сlick="changeVisible({{ $order->id }})">скрыть/показать</button></nobr>--}}
                            {{--                    {{ $visible[$order->id] ?? '-' }}--}}
                            {{--                </td>--}}
                            {{-- название заказа--}}
                            {{--                <td>--}}
                            {{ $order->name }}</td>
                        {{-- дата создания--}}
                         <td>
{{--                             {{ $order->add_ts ?? '-' }}--}}
{{--                             <br/>--}}
                             @if (!empty($order->add_ts))
{{--                                 {{ \Carbon\Carbon::parse($order->add_ts)->format('d.m.Y H:i') }}--}}
                                 {{ \Carbon\Carbon::parse($order->add_ts)->format('d.m.y') }}
                             @else
                                 -
                             @endif
                         </td>
                        {{-- <td>-</td>--}}
                        <td class="text-end"
                            style="font-size: 120%">{{ $order->price ? number_format($order->price,0,'.','`') : '-' }}</td>
                        {{--                выручка--}}
                        <td style="font-size: 120%"
                            class="text-end  @if( $order->viruchka > 0 )text-success @else text-danger @endif ">

                            {{ number_format($order->viruchka,0,'.','`') }}</td>

                        {{--                Камень--}}
                        {{--                <td>-</td>--}}
                        {{--                Фасады--}}

                        <td class="text-end">-
                            <br/>
                            -
                        </td>

                        <td class="text-end">
                            {{--                Фурнитура--}}
                            -
                            <br/>
                            {{--                РАботы--}}
                            {{ $order->summa_work ? number_format($order->summa_work,0,'.','`') : '-' }}
                        </td>
                        {{--                <td>-</td>--}}

                        <td class="text-end">
                            {{--                Монтаж--}}
                            {{ $order->summa_install ? number_format($order->summa_install,0,'.','`') : '-' }}
                            <br/>
                            {{--                Сборка--}}
                            {{ $order->summa_build ? number_format($order->summa_build,0,'.','`') : '-' }}
                        </td>

                        {{--                orders.summa_build, orders.summa_zamer,--}}
                        {{--                orders.summa_dost, orders.summa_gruz,--}}
                        {{--                orders.summa_tech, orders.summa_manager,                --}}

                        {{--                Замер--}}
                        <td class="text-end">
                            {{ $order->summa_zamer ? number_format($order->summa_zamer,0,'.','`') : '-' }}
                        </td>
                        {{--                Доставка--}}
                        {{--                <td>-</td>--}}
                        {{--                грузчики--}}
                        <td class="text-end">
                            {{--                Доставка--}}
                            {{ $order->summa_dost ? number_format($order->summa_dost,0,'.','`') : '-' }}
                            <br/>
                            {{--                грузчики--}}
                            {{ $order->summa_gruz ? number_format($order->summa_gruz,0,'.','`') : '-' }}
                        </td>
                        {{--                <td>-</td>--}}
                        <td class="text-end">
                            {{--                менеджер--}}
                            -
                            <br/>
                            {{--                скидка--}}
                            -
                        </td>
                        {{--                доп заказ--}}
                        <td class="text-end">
                            {{ $order->summa_dop ? number_format($order->summa_dop,0,'.','`') : '-' }}
                        </td>

                        {{--                <td>-</td>--}}

                        <td class="text-end">
                            {{--                дизайн--}}
                            {{ $order->design ? number_format($order->design,0,'.','`') : '-' }}
                            <br/>
                            {{--                Технолог--}}
                            -
                        </td>
                        {{--                Остаток--}}
                        {{--                    <td class="text-end">-</td>--}}
                        {{--график--}}
                        {{--                <td>-</td>--}}
                        {{--                <td>-</td>--}}
                    </tr>

                    @if( $order->id == 'x1242' )
                        <tr>
                            <td colspan="10">
                                <pre
                                    style="max-height: 300px; font-size: 10px; overflow:auto;">{{ print_r($items ) }}</pre>
                            </td>
                        </tr>
                    @endif

                @endforeach

            @endif
            </tbody>

        </table>
    </div>
    <!-- Pagination links -->

    {{--    @ include('livewire.cms2.buh-pagination') --}}
    {{ $items->onEachSide(2)->links('livewire.cms2.buh-pagination') }}


</div>
