<?php
if (post_password_required()) {
    ?>
    <p class="nocomments"><?php _e('Ce post est protégé par mot de passe. Veuillez entrez le mot de passe pour continuer.', 'cloriato'); ?></p>
    <?php
    return;
}
?>
<?php if (comments_open() && post_type_supports(get_post_type(), 'comments')) : // comments are closed ?>
    <h3><?php _e('Commentaires &amp; Réponses', 'cloriato'); ?></h3>
<?php endif; ?>
<!-- You can start editing here. -->
<div id="commentsbox">
    <?php if (have_comments()) : ?>
        <h3 id="comments">
            <?php comments_number('Pas de réponses', 'Une réponse', '% Réponses'); ?>
            <?php _e('pour le moment.', 'cloriato'); ?>
        </h3>
        <ol class="commentlist">
            <?php wp_list_comments(); ?>
        </ol>
        <div class="comment-nav">
            <div class="alignleft">
                <?php previous_comments_link() ?>
            </div>
            <div class="alignright">
                <?php next_comments_link() ?>
            </div>
        </div>
    <?php else : // this is displayed if there are no comments so far ?>
        <?php if (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : // comments are closed ?>
            <!-- If comments are closed. -->
        <?php endif; ?>
    <?php endif; ?>
    <?php if (comments_open()) : ?>
        <div id="comment-form">
            <?php comment_form(array('comment_notes_after' => '')); ?>
        </div>
    <?php endif; // if you delete this the sky will fall on your head  ?>
</div>
