@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
<div class="content">
    <div class="game_choice">
        <div class="slider_container">
            <div class="img">
                <img src="{{asset("res/game.png")}}" alt="" class="slider">
            </div>
            <div class="choice_recommendation">
                @for($i = 0; $i < 5; $i++)
                    <div class="recommendation_game_part">
                        <div class="img">
                            <img src="{{asset("res/game_small.png")}}" alt="">
                        </div>
                        <p>Fall Guys</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="card_container">
        <div class="cards_options_do">
            <h2>Игры со скидками <span>></span></h2>
            <div class="arrows_container">
                <span class="arrow_left arrow"><</span>
                <span class="arrow_right arrow">˃</span>
            </div>
        </div>
        <div class="card_list">
            @for($i = 0; $i < 5; $i++)
                <a href="" class="card">
                    <div class="img">
                        <img src="{{asset("res/card_img.png")}}" alt="" class="card_img">
                    </div>
                    <p>The Silent Age</p>
                    <div class="price_information">
                        <div class="price_information_part percent">
                            <span>-75 %</span>
                        </div>
                        <div class="price_information_part">
                            <s>199 ₽</s>
                        </div>
                        <div class="price_information_part">
                            <p>49,75 ₽</p>
                        </div>
                    </div>
                </a>
            @endfor
        </div>
    </div>
    <div class="more_game_information">
        @for($i = 0; $i < 3; $i++)
            <div class="information_part">
                <div class="img">
                    <a href="">
                        <img src="{{asset("res/car_game.png")}}" alt="">
                    </a>
                </div>
                <h3>Распродажа гоночных игр Ubisoft</h3>
                <p>Сэкономьте до 80% на гоночных играх,
                    включая Riders Republic, The Crew 2 и Steep.
                    Заканчивается 11 августа.</p>
                <div class="reclam_do">
                    <a href="">Узнать больше</a>
                </div>
            </div>
        @endfor
    </div>
    <div class="free_games">
        <div class="free_games_options">
            <div class="get_more_line">
                <div class="line_part">
                    <div class="img img_present">
                        <img src="{{asset("res/present.png")}}" alt="">
                    </div>
                    <p>Бесплатные игры</p>
                </div>
                <div>
                    <button>Подробнее</button>
                </div>
            </div>
            <div class="game_options">
                @for($i = 0; $i < 2; $i++)
                    <div class="free_games_part">
                        <div class="img">
                            <img src="{{asset("res/free_games.png")}}" alt="">
                            <p>Сейчас бесплатно</p>
                        </div>
                        <p class="game_name">Unrailed!</p>
                        <p class="time_free">Бесплатно до <span>18:00</span> <span>11авг</span></p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="game_structure">
        <div class="game_structure_part">
            <div class="top_line">
                <div>
                    <p>Новые игры</p>
                </div>
                <div>
                    <button>Показать больше</button>
                </div>
            </div>
            <div class="main_game_blocks">
                @for($i = 0; $i < 5; $i++)
                    <div class="game_blocks_part">
                        <div class="img">
                            <img src="{{asset("res/game2.png")}}" alt="">
                        </div>
                        <div class="game_information">
                            <p>Toonstruck</p>
                            <span>199 ₽</span>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="game_structure_part center_game_block">
            <div class="top_line">
                <div>
                    <p>Самые покупаемые</p>
                </div>
                <div>
                    <button>Показать больше</button>
                </div>
            </div>
            <div class="main_game_block">
                @for($i = 0; $i < 5; $i++)
                    <div class="game_blocks_part">
                        <div class="img">
                            <img src="{{asset("res/game2.png")}}" alt="">
                        </div>
                        <div class="game_information">
                            <p>Toonstruck</p>
                            <span>199 ₽</span>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="game_structure_part">
            <div class="top_line">
                <div>
                    <p>Скоро появится</p>
                </div>
                <div>
                    <button>Показать больше</button>
                </div>
            </div>
            <div class="main_game_blocks">
                @for($i = 0; $i < 5; $i++)
                    <div class="game_blocks_part">
                        <div class="img">
                            <img src="{{asset("res/game2.png")}}" alt="">
                        </div>
                        <div class="game_information">
                            <p>Toonstruck</p>
                            <span>199 ₽</span>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="card_container">
        <div class="cards_options_do">
            <h2>Игры с достижениями <span>></span></h2>
            <div class="arrows_container">
                <span class="arrow_left arrow"><</span>
                <span class="arrow_right arrow">˃</span>
            </div>
        </div>
        <div class="card_list">
            @for($i = 0; $i < 5; $i++)
                <a href="" class="card">
                    <div class="img">
                        <img src="{{asset("res/card_img.png")}}" alt="" class="card_img">
                    </div>
                    <p>The Silent Age</p>
                    <div class="price_information">
                        <div class="price_information_part percent">
                            <span>-75 %</span>
                        </div>
                        <div class="price_information_part">
                            <s>199 ₽</s>
                        </div>
                        <div class="price_information_part">
                            <p>49,75 ₽</p>
                        </div>
                    </div>
                </a>
            @endfor
        </div>
    </div>
    <div class="game_advertisement">
        <a href="">
            <div class="img">
                <img src="{{asset("res/game_reclam.png")}}" alt="" class="advertisement_img">
            </div>
        </a>
        <div class="advertisement_game_part">
            <a href=""><h3>Goat Simulator 3 — эксклюзив EGS</h3></a>
            <p class="game_information">Собирайте стадо и отправляйтесь в
                Goat Simulator 3 — новую реалистичную «песочницу» на ферме.</p>
            <span class="price">2 308 ₽</span>
            <div class="buttons">
                <a href=""><button>Оформить предпокупку</button></a>
                <a href="" class="buttons_block_part">
                    <div class="img"><img src="{{asset("res/plus.png")}}" alt=""></div>
                    <p>В список желаемого</p>
                </a>
            </div>
        </div>
    </div>
    <div class="card_container">
        <div class="cards_options_do">
            <h2>Недавно обновленные</h2>
            <div class="arrows_container">
                <span class="arrow_left arrow"><</span>
                <span class="arrow_right arrow">˃</span>
            </div>
        </div>
        <div class="card_list">
            @for($i = 0; $i < 5; $i++)
                <a href="" class="card">
                    <div class="img">
                        <img src="{{asset("res/card_img.png")}}" alt="" class="card_img">
                    </div>
                    <p>The Silent Age</p>
                    <div class="price_information">
                        <div class="price_information_part percent">
                            <span>-75 %</span>
                        </div>
                        <div class="price_information_part">
                            <s>199 ₽</s>
                        </div>
                        <div class="price_information_part">
                            <p>49,75 ₽</p>
                        </div>
                    </div>
                </a>
            @endfor
        </div>
    </div>
    <div class="card_container">
        <div class="cards_options_do">
            <h2>Наиболее популярные <span>></span></h2>
            <div class="arrows_container">
                <span class="arrow_left arrow"><</span>
                <span class="arrow_right arrow">˃</span>
            </div>
        </div>
        <div class="card_list">
            @for($i = 0; $i < 5; $i++)
                <a href="" class="card">
                    <div class="img">
                        <img src="{{asset("res/card_img.png")}}" alt="" class="card_img">
                    </div>
                    <p>The Silent Age</p>
                    <div class="price_information">
                        <div class="price_information_part percent">
                            <span>-75 %</span>
                        </div>
                        <div class="price_information_part">
                            <s>199 ₽</s>
                        </div>
                        <div class="price_information_part">
                            <p>49,75 ₽</p>
                        </div>
                    </div>
                </a>
            @endfor
        </div>
    </div>
    <div class="new_games">
        <h2>Новинка в Epic Games Store</h2>
        <div class="main_part">
            @for($i = 0; $i < 4; $i++)
                <a href="" class="card">
                    <div class="img">
                        <img src="{{asset("res/new_game.png")}}" alt="">
                    </div>
                    <p>Judas</p>
                    <p class="game_information">Новое в epic</p>
                    <div class="price_information">
                        <div class="price_information_part percent">
                            <span>-50 %</span>
                        </div>
                        <div class="price_information_part">
                            <s>66 ₽</s>
                        </div>
                        <div class="price_information_part">
                            <p>33 ₽</p>
                        </div>
                    </div>
                </a>
            @endfor
        </div>
    </div>
    <div class="game_advertisement learn_catalog">
        <a href="">
            <div class="img">
                <img src="{{asset("res/game_reclam2.png")}}" alt="" class="advertisement_img">
            </div>
        </a>
        <div class="advertisement_game_part">
            <a href=""><h3>Исследуйте наш каталог</h3></a>
            <p class="game_information">Просматривайте игры, сортируя их по жанрам,
                функциям, цене и другим критериям, чтобы
                найти новые интересные проекты.</p>
            <div class="buttons">
                <a href=""><button>Узнать больше</button></a>
            </div>
        </div>
    </div>
</div>
    @include("layouts/footer")
@stop
