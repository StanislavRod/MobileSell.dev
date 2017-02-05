<form action="/cart_items" method="post" id="cartform">
    <input type="hidden" value="put" name="_method">
    <input type="hidden" name="lang" value="ru">
    <fieldset>
        <table id="shopping-cart-table" class="data-table cart-table">
            <colgroup>
                <col width="1">
                <col>
                <col width="1">
                <col width="1">
                <col width="1">
                <col width="1">
                <col width="1">
            </colgroup>
            <thead>
            <tr class="first last">
                <th class="a-center" rowspan="1">&nbsp;</th>
                <th class="a-center" rowspan="1"><span class="nobr">Наименование</span></th>
                <th class="a-center" colspan="1"><span class="nobr">Цена</span></th>
                <th rowspan="1" class="a-center">Кол-во</th>
                <th class="a-center" colspan="1">Стоимость</th>
                <th rowspan="1" class="a-center"></th>
            </tr>
            </thead>
            <tfoot>
            <tr class="first last">
                <td colspan="50" class="a-right last">
                    <button type="button" title="Продолжить покупки" class="button btn-continue left"
                            onclick="location.href='/'"><span> <span>Продолжить покупки</span> </span></button>
                </td>
            </tr>
            </tfoot>
            <tbody>

            <tr id="cart_order_line_20402454">
                <td class="a-center"><a
                            href="https://static12.insales.ru/images/products/1/2298/13019386/large_15283.jpg"
                            rel="shadowbox" class="cart-img" title="Canon EF 14mm f/2.8L II USM"
                            style="background-image:url(https://static12.insales.ru/images/products/1/2298/13019386/thumb_15283.jpg)"> </a>
                </td>
                <td class="a-center"><h2 class="product-name"><a href="/product/canon-ef-14mm-f28l-ii-usm">Canon EF 14mm
                            f/2.8L II USM</a></h2></td>
                <td class="a-center"><span class="cart-price"> <span class="price">67700&nbsp;руб</span> </span></td>
                <td class="a-center quantity"><input type="text" maxlength="3" class="input-text qty" value="1"
                                                     style="padding:4px 0; line-height:14px;" price="67700.0"
                                                     name="cart[quantity][20402454]" id="ol_quantity_20402454" size="4"
                                                     processed="true"></td>
                <td class="a-center"><span class="cart-price"> <span
                                class="price total-price">67700&nbsp;руб</span> </span></td>
                <td class="a-center last del"><a href="#" id="delete_20402454" title="Удалить из корзины"
                                                 class="btn-remove btn-remove2" rel="/cart_items/20402454"
                                                 processed="true">удалить</a></td>
            </tr>

            </tbody>
        </table>
    </fieldset>
    <div class="cart-collaterals">
        <div class="col2-set">
            <div class="col-2"></div>
        </div>
        <div class="totals">
            <table id="shopping-cart-totals-table">
                <colgroup>
                    <col>
                    <col width="1">
                </colgroup>
                <tfoot>
                <tr>
                    <td class="a-right" colspan="1"><strong>Всего к оплате:</strong></td>
                    <td class="grndttl"><strong> <span id="total_price" class="price total_amount">67700&nbsp;руб</span>
                        </strong></td>
                </tr>
                </tfoot>
                <tbody>

                </tbody>
            </table>
            <ul class="checkout-types">
                <li>
                    <button type="submit" name="make_order" title="Оформить заказ" id="create_order"
                            class="button btn-proceed-checkout btn-checkout"><span> <span>Оформить заказ</span> </span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</form>
