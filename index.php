<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/img/icon.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="/additionally/styleIndex.css" type="text/css">
    <link rel="stylesheet" href="/additionally/styleIncludes.css" type="text/css">
    <title>VALORLIB</title>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <main>

        <div class="MainDiv">
            <video loop muted autoplay poster="" class="videoFon">
                <source src="video/12_05_Homescreen.mp4" type="video/mp4">
                <source src="video/12_05_Homescreen.webm" type="video/webm">
            </video>
            <div class="NavigatDiv">
                <img src="img/MainImg.png">
                <p>Подгрузитесь в богатый лор, изучите уникальных агентов и стратегические карты тактического шутера от
                    Riot
                    Games. Откройте для себя конфликт между мирами Альфа и Омега, сражение за радиант и историю
                    протокола
                    VALORANT.</p>
                <button id="btnMain">Исследовать вселенную</button>
            </div>
        </div>


        <section id="sctBasic" class="ContentBlock" style="background: linear-gradient(to right, #1D2934, #0f1923)">
            <h2>Что вас ждёт</h2>
            <div class="cardsDiv">
                <!-- Карточка 1 -->
                <div class="cardBasic">
                    <div class="cardIcon">
                        <img src="/img/IconLor.jpg">
                    </div>
                    <h3>Лор вселенной</h3>
                    <p>История альтернативной Земли, загадка «Первого света» и тайное противостояние с Землёй Омега.</p>
                    <!-- Желательно добавить текст -->
                    <a href="lor.php" class="cardLink">Подробнее ➤</a>
                </div>

                <!-- Карточка 2 (пример, чтобы блок не был пустым) -->
                <div class="cardBasic">
                    <div class="cardIcon">
                        <img src="/img/AgentIcon.jpg">
                    </div>
                    <h3>Агенты</h3>
                    <p>Биографии, способности и характер героев «Протокола VALORANT». От Джетт до Микса — найдите того,
                        кто подходит вашему стилю.</p>
                    <a href="agent.php" class="cardLink">Подробнее ➤</a>
                </div>
                <!-- Карточка 3 -->
                <div class="cardBasic">
                    <div class="cardIcon">
                        <img src="/img/IconMap.jpg">
                    </div>
                    <h3>Карты</h3>
                    <p>Тактическое описание локаций и их секреты. От Венеции до льдов Icebox — узнайте поле боя изнутри.
                    </p>
                    <a href="maps.php" class="cardLink">Подробнее ➤</a>
                </div>
                <!-- Карточка 4 -->
                <div class="cardBasic">
                    <div class="cardIcon">
                        <img src="/img/IconFact.jpg">
                    </div>
                    <h3>Интересные факты</h3>
                    <p>Пасхалки на картах, неожиданные связи между героями и детали, которые вы не заметили в бою.</p>
                    <a href="facts.php" class="cardLink">Подробнее ➤</a>
                </div>
            </div>
        </section>

        <!--Секция "Обновления и патчи"-->

        <section class="ContentBlock" style="background: linear-gradient(to left, #1D2934, #0f1923),">
            <h2>Обновления и патчи</h2>
            <div class="cardsDivPatch">

                <a href="https://www.youtube.com/watch?v=3CObqmMfjGc">
                    <div class="cardPatch">
                        <div class="cardIconPatch">
                            <video loop muted autoplay>
                                <source src="/video/Teaser_Miks.mp4" type="video/mp4">
                            </video>
                            <div class="cardHeader">
                                <span>НОВЫЙ АГЕНТ</span>
                                <span>Патч 12.05</span>
                            </div>
                        </div>
                        <h3>Miks - специалист из Хорватии</h3>
                        <p>Miks задает настроение на поле боя, вдохновляет союзников и помогает им поддерживать нужный
                            темп.
                        </p>
                    </div>
                </a>

                <a href="https://www.youtube.com/watch?v=LbpRrH4QLFY">
                    <div class="cardPatch">
                        <div class="cardIconPatch">
                            <video loop muted autoplay>
                                <source src="/video/Kuronami_Skin.mp4" type="video/mp4">
                            </video>
                            <div class="cardHeader">
                                <span>НОВАЯ КОЛЛЕКЦИЯ</span>
                                <span>Патч 12.08</span>
                            </div>
                        </div>
                        <h3>Облик "Куронами 2.0"</h3>
                        <p>Вновь овладейте стихией бури и тени с помощью Kuronami Phantom, Operator, Guardian, Ghost и
                            трансформирующегося куная.</p>
                    </div>
                </a>

                <a href="https://valorantesports.com/ru-RU/news/the-new-valorant-champions-tour">
                    <div class="cardPatch">
                        <div class="cardIconPatch">
                            <video loop muted autoplay>
                                <source src="/video/Champions.mp4" type="video/mp4">
                            </video>
                            <div class="cardHeader">
                                <span>VCT 2027</span>
                            </div>
                        </div>
                        <h3>Новый VALORANT Champions Tour</h3>
                        <p>В 2027 году VCT переходит на открытую турнирную модель: путь на Masters и Champions — через
                            открытые квалификации для всех команд, 8 кубков в 16+ городах, призовые более $6 млн в год.
                        </p>
                    </div>
                </a>

                <a href="https://www.youtube.com/watch?v=LbpRrH4QLFY">
                    <div class="cardPatch">
                        <div class="cardIconPatch">
                            <video loop muted autoplay>
                                <source src="/video/Notification.mp4" type="video/mp4">
                            </video>
                            <div class="cardHeader">
                                <span>Новый режим</span>
                                <span>Патч 12.08</span>
                            </div>
                        </div>
                        <h3>Столкновение: возвышение</h3>
                        <p>Появился совершенно новый способ соревноваться, и он становится более личным. Вот всё, что
                            вам
                            нужно знать о новом соревновательном событии 1v1 и 2v2 Столкновение: Возвышение.</p>
                    </div>
                </a>
            </div>
        </section>

    </main>
    <?php include 'includes/footer.php'; ?>

    <script>
    const btn = document.getElementById('btnMain');
    const sectorAgent = document.getElementById('sctBasic');
    btn.addEventListener('click', function() {
        sectorAgent.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    });
    </script>
</body>

</html>