<?php 
require_once 'config.php';
$sql = "SELECT * FROM easter";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/img/icon.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/additionally/styleIncludes.css" type="text/css">
    <link rel="stylesheet" href="/additionally/styleFacts.css" type="text/css">
    <title>Интересные факты — VALORLIB</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <div class="facts-content">
            <h2 class="main-title">ИНТЕРЕСНЫЕ ФАКТЫ</h2>

            <div class="welcom">
                <p>Вселенная VALORANT полна секретов, пасхалок и неочевидных деталей. Мы собрали для вас самые интересные факты об агентах, картах и разработке игры, которые вы могли пропустить.</p>
            </div>

            <div class="cardsDivPatch">
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <?php 
                        $media_folder = "img/Easter/";
                        $filename = htmlspecialchars($row['media']);
                        $full_path = $media_folder . $filename;
                        $file_extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                        $video_extensions = ['mp4', 'webm', 'ogg', 'mov', 'avi', 'mkv'];
                        $image_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp'];
                        ?>
                        
                        <div class="cardPatch">
                            <div class="cardIconPatch">
                                <?php if (!empty($filename)): ?>
                                    <?php if (in_array($file_extension, $video_extensions)): ?>
                                        <video loop muted autoplay playsinline>
                                            <source src="<?= $full_path ?>" type="video/<?= $file_extension == 'mp4' ? 'mp4' : ($file_extension == 'webm' ? 'webm' : 'ogg') ?>">
                                        </video>
                                    <?php elseif (in_array($file_extension, $image_extensions)): ?>
                                        <img src="<?= $full_path ?>" alt="<?= htmlspecialchars($row['name']) ?>">
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <h3><?= htmlspecialchars($row['name']) ?></h3>
                            <p><?= htmlspecialchars($row['description']) ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p style="color: white; text-align: center; width: 100%;">Пасхалок пока нет, но скоро появятся!</p>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>