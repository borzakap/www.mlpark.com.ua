<?php
global $wp_query;
// $price_low = '';
// $price_up = '';
// $filter_buy_rent = $_GET['filter-buy-rent'];
$filter_property = $_GET['filter-property'];
$filter_number = $_GET['filter-number'];
// $filter_furnished = $_GET['filter-furnished'];
// $filter_price_from = $_GET['filter-price-from'];
// $filter_price_to = $_GET['filter-price-to'];
$filter_area_from = $_GET['filter-area-from'];
$filter_area_to = $_GET['filter-area-to'];
// $price = get_min_max_properties_price();
$area = get_min_max_properties_area();
?>
<form class="filter-form" method="GET"  action="/choose-flat/">
    <div class="flats-filter-box">
        <div class="filter-box house-filter">
        
        <span class="form-label">Обрати будинок</span>
        <div class="form-select">
            <?php $choices = get_field_object('field_65ad8047f6dc1')['choices'] ?? []; ?>
            <select name="filter-property" id="filter-property">
                <option value="any">Всі будинки</option>
                <?php foreach ($choices as $k => $choice): ?>
                    <option value="<?php echo $k ?>" <?php echo $filter_property == $k ? 'selected' : '' ?>><?php echo $choice ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        <!---->
        <div class="filter-box type-filter">
            <span class="form-label">Тип квартири</span>
            <div class="form-select">
                <?php $choices = get_field_object('field_65ad80ad9aa05')['choices'] ?? []; ?>
                <select name="filter-number" id="filter-number">
                    <option value="any">Всі планування</option>
                    <?php foreach ($choices as $k => $choice): ?>
                        <option value="<?php echo $k ?>" <?php echo $filter_number == $k ? 'selected' : '' ?>><?php echo $choice ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        
        </div>
        <!---->
        <div class="filter-box squere-filter">
        
            <span class="form-label">Площа, кв.м</span>
            <div class="form-range">
                <ul class="form-range_list">
                    <li id="form-area_low" data-value="<?php echo $area['min'] ?>" data-value-now="<?php echo $filter_area_from  ?: $area['min'] ?>"></li>
                    <li id="form-area_up" data-value="<?php echo $area['max'] ?>" data-value-now="<?php echo $filter_area_to  ?: $area['max'] ?>"></li>
                </ul>
                <input type="hidden" name="filter-area-from" value="">
                <input type="hidden" name="filter-area-to" value="">
                <div class="form-range_line" id="form-area"></div>
            </div>
        </div>
        <!---->
    </div>
    <input type="hidden" name="order" value="<?php echo $_GET['order'] ?: 'ASC' ?>">
    <button class="button-one">Підібрати</button>
</form>