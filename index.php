<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/additionally/styleIndex.css" type="text/css">
    <link rel="stylesheet" href="/additionally/styleIncludes.css" type="text/css">
    <title>VALORLIB</title>
</head>

<body>
     <?php include 'includes/header.php'; ?>

    <div class="MainDiv">
        <video loop muted autoplay poster="" class="videoFon">
            <source src="video/12_05_Homescreen.mp4" type="video/mp4">
            <source src="video/12_05_Homescreen.webm" type="video/webm">
        </video>
        <div class="NavigatDiv">
            <img src="img/MainImg.png">
            <p>Подгрузитесь в богатый лор, изучите уникальных агентов и стратегические карты тактического шутера от Riot
                Games. Откройте для себя конфликт между мирами Альфа и Омега, сражение за радиант и историю протокола
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
                <p>История альтернативной Земли, загадка «Первого света» и тайное противостояние с Землёй Омега.</p> <!-- Желательно добавить текст -->
                <a href="#" class="cardLink">Подробнее ➤</a>
            </div>

            <!-- Карточка 2 (пример, чтобы блок не был пустым) -->
            <div class="cardBasic">
                <div class="cardIcon">
                    <img src="/img/AgentIcon.jpg">
                </div>
                <h3>Агенты</h3>
                <p>Биографии, способности и характер героев «Протокола VALORANT». От Джетт до Микса — найдите того, кто подходит вашему стилю.</p>
                <a href="agent.php" class="cardLink">Подробнее ➤</a>
            </div>
            <!-- Карточка 3 -->
            <div class="cardBasic">
                <div class="cardIcon">
                    <img src="/img/IconMap.jpg">
                </div>
                <h3>Карты</h3>
                <p>Тактическое описание локаций и их секреты. От Венеции до льдов Icebox — узнайте поле боя изнутри.</p>
                <a href="#" class="cardLink">Подробнее ➤</a>
            </div>
            <!-- Карточка 4 -->
            <div class="cardBasic">
                <div class="cardIcon">
                    <img src="/img/IconFact.jpg">
                </div>
                <h3>Интересные факты</h3>
                <p>Пасхалки на картах, неожиданные связи между героями и детали, которые вы не заметили в бою.</p>
                <a href="#" class="cardLink">Подробнее ➤</a>
            </div>
        </div>
    </section>

    <!--Секция "Обновления и патчи"-->

    <section class="ContentBlock" style="background: linear-gradient(to left, #1D2934, #0f1923),">
        <h2>Обновления и патчи</h2>
        <div class="cardsDivPatch">

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
            <p>Miks задает настроение на поле боя, вдохновляет союзников и помогает им поддерживать нужный темп.</p>        
        </div>

        <div class="cardPatch">
            <div class="cardIconPatch">
                <video loop muted autoplay>
                    <source src="/video/Black_spikes.mp4" type="video/mp4">
                </video>
                <div class="cardHeader">
                <span>НОВАЯ КОЛЛЕКЦИЯ</span>
                <span>Патч 12.05</span>
            </div>
            </div>
            <h3>Облик "Чёрные шипы"</h3>
            <p>Станьте занозой для врагов. В магазине расцветают розы с черными шипами. Встречайте флекс и облики для Vandal, Marshal, Guardian, Classic и клинков.</p>        
        </div>

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
            <p>В 2027 году VCT переходит на открытую турнирную модель: путь на Masters и Champions — через открытые квалификации для всех команд, 8 кубков в 16+ городах, призовые более $6 млн в год.</p>        
        </div>

        <div class="cardPatch">
            <div class="cardIconPatch">
                <video loop muted autoplay>
                    <source src="/video/Notification.mp4" type="video/mp4">
                </video>
                <div class="cardHeader">
                <span>СКОРО</span>
                <span>Патч 12.07</span>
            </div>
            </div>
            <h3>Продолжение лора</h3>
            <p>Письмо от Deadlock для Brimstone о страхе перед потерей воскрешения, голосовое сообщение от Miks с жалобой на Vyse из-за шума и оповещение Viper (Омега-Земля) о давлении на Sage и плане уничтожить воскрешение.</p>        
        </div>
        </div>  
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        const btn = document.getElementById('btnMain');
        const sectorAgent = document.getElementById('sctBasic');
        btn.addEventListener('click', function () {
            sectorAgent.scrollIntoView({ behavior: "smooth", block: "start" });
        });
    </script>

</body>

</html>