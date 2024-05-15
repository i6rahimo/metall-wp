



<div class="filter__mobile" data-type="popup-5">
    <p class="filter__mobile-text">Фильтры</p>
    <div class="filter__mobile-arrow">
        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.16667 1L15 7M15 7L9.16667 13M15 7L1 7" stroke="#181818" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </div>
</div>
<form method="get" class="filter__filter">
    <div class="accordion filter__accordion">
        <div class="accordion__item filter__item open">
            <div class="accordion__header filter__header">Производитель</div>
            <div class="accordion__content filter__content open">
                <?php
                    $args = get_terms([
                        'taxonomy' => 'product_tag',
                        'hide_empty' => false,
                    ]);        
                    foreach($args as $item):
                        ?>
                            <!-- <label class="filter__label" for="<?php echo $item->term_id?>">    
                                <input  class="filter__input" type="submit" name="post_tag" value="<?php echo $item->slug; ?>" id="<?php echo $item->term_id ?>" 
                                <button  class="filter__button"><?php echo $item->name; ?></button>
                            </label> -->
                            <a href="?product_tag=<?php echo $item->slug; ?>" class="filter__button"><?php echo $item->name; ?></a>
                        <?php
                    endforeach
                ?>
                <button class="filter__button">ММК</button>
                <button class="filter__button">ЧМК</button>
                <button class="filter__button">Северсталь</button>
                <button class="filter__button">Мечел</button>
                <button class="filter__button">НМЛК</button>
                <button class="filter__button active">Борский трубный завод</button>
                <button class="filter__button">Евраз Холдинг</button>
            </div>
        </div>
    </div>

    <div class="accordion filter__accordion">
        <div class="accordion__item filter__item open">
            <div class="accordion__header filter__header">Тип изделия</div>
            <div class="accordion__content filter__content">
                <button class="filter__button">Арматура рифленая (А3)</button>
                <button class="filter__button">Арматура гладкая (А1)</button>
                <button class="filter__button">Круг стальной</button>
            </div>
        </div>
    </div>


    <div class="accordion filter__accordion">
        <div class="accordion__item filter__item open">
            <div class="accordion__header filter__header">Материал</div>
            <div class="accordion__content filter__content">
                <button class="filter__button">35ГС</button>
                <button class="filter__button">25Г2С</button>
                <button class="filter__button">А500С</button>
                <button class="filter__button">А500СП</button>
                <button class="filter__button">А400С</button>
            </div>
        </div>
    </div>

    <div class="accordion filter__accordion open">
        <div class="accordion__item filter__item open">
            <div class="accordion__header filter__header open">Размер</div>
            <div class="accordion__content filter__content">
                <button class="filter__button">6 мм</button>
                <button class="filter__button">8 мм</button>
                <button class="filter__button">10 мм</button>
                <button class="filter__button">12 мм</button>
                <button class="filter__button">14 мм</button>
                <button class="filter__button">16 мм</button>
            </div>
        </div>
    </div>

                    </form>