    <?php foreach ( $movie_names as $rating => $movie): ?>
        <ul>
            <li>
                <?= $movie ?>                            
                <div class="rating"><?= $movie_ratings[$rating] ?></div>
            </li>
        </ul>
    <?php endforeach; ?>