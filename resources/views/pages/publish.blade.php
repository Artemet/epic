@extends("layouts.app")
@section("content")
    @include("layouts/header_line")
    <div class="content">
        <div class="publish_container">
            <div class="img">
                <a href=""><img src="{{asset("res/epic_store.png")}}" alt="" class="epic_advertisement"></a>
            </div>
            <div class="why_us">
                <div class="why_us_part">
                    <div class="img why">
                        <img src="{{asset("res/face.png")}}" alt="">
                    </div>
                    <h3>Разделение дохода <br> 88/12</h3>
                    <p>Оставляйте себе 88% дохода от игр вместо 70%.</p>
                </div>
                <div class="why_us_part">
                    <div class="img why">
                        <img src="{{asset("res/voice.png")}}" alt="">
                    </div>
                    <h3>Поддержка авторов</h3>
                    <p>Выходите на авторов контента и блогеров с миллионами фанатов.</p>
                </div>
                <div class="why_us_part">
                    <div class="img why">
                        <img src="{{asset("res/joystick.png")}}" alt="">
                    </div>
                    <h3>Расширенное <br> управление</h3>
                    <p>Заполучите собственную страницу игры,
                        ленту новостей и прямую связь со своими игроками.</p>
                </div>
            </div>
            <div class="often_questions">
                <div class="questions_part">
                    <h2>Часто задаваемые вопросы</h2>
                    <div class="question">
                        <div>
                            <p class="open_question">В чём подвох? 88% — это доля прибыли, которая будет действовать только первое время?</p>
                        </div>
                        <div>
                            <span><b>+</b></span>
                        </div>
                        <div class="sub">
                            <p>Никакого подвоха. Разработчики получают фиксированную долю в размере 88% от дохода.
                                При этом доля Epic в размере 12% идёт на покрытие расходов магазина и на нашу прибыль.</p>
                        </div>
                    </div>
                    <div class="question">
                        <div>
                            <p class="open_question">Как выбираются игры для Epic Games Store?</p>
                        </div>
                        <div>
                            <span><b>+</b></span>
                        </div>
                        <div class="sub">
                            <p>В приоритет ставятся разработчики с гибким графиком и желанием сотрудничать
                                с нами на ранних стадиях развития магазина. Однако мы рассматриваем и прочие факторы, здесь нет единого алгоритма.</p>
                        </div>
                    </div>
                    <div class="question">
                        <div>
                            <p class="open_question">Моя игра создана на базе Unity или другого движка. Можно ли мне представить её на рассмотрение в Epic Games Store?</p>
                        </div>
                        <div>
                            <span><b>+</b></span>
                        </div>
                        <div class="sub">
                            <p>Да. Epic Games Store приветствует любые движки. Epic стремится предоставлять
                                игрокам отличные игры, независимо от того, на каком движке вы их создавали.</p>
                        </div>
                    </div>
                </div>
                <div class="questions_part">
                    <h2 style="text-align: left">Часто задаваемые вопросы по закрытому бета-тестированию инструментов для самостоятельной публикации</h2>
                    <div class="question">
                        <div>
                            <p class="open_question">В чём подвох? 88% — это доля прибыли, которая будет действовать только первое время?</p>
                        </div>
                        <div>
                            <span><b>+</b></span>
                        </div>
                        <div class="sub">
                            <p>Никакого подвоха. Разработчики получают фиксированную долю в размере 88% от дохода.
                                При этом доля Epic в размере 12% идёт на покрытие расходов магазина и на нашу прибыль.</p>
                        </div>
                    </div>
                    <div class="question">
                        <div>
                            <p class="open_question">Как выбираются игры для Epic Games Store?</p>
                        </div>
                        <div>
                            <span><b>+</b></span>
                        </div>
                        <div class="sub">
                            <p>В приоритет ставятся разработчики с гибким графиком и желанием сотрудничать
                                с нами на ранних стадиях развития магазина. Однако мы рассматриваем и прочие факторы, здесь нет единого алгоритма.</p>
                        </div>
                    </div>
                    <div class="question">
                        <div>
                            <p class="open_question">Моя игра создана на базе Unity или другого движка. Можно ли мне представить её на рассмотрение в Epic Games Store?</p>
                        </div>
                        <div>
                            <span><b>+</b></span>
                        </div>
                        <div class="sub">
                            <p>Да. Epic Games Store приветствует любые движки. Epic стремится предоставлять
                                игрокам отличные игры, независимо от того, на каком движке вы их создавали.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("layouts/footer")
@stop
