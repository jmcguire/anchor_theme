<?php theme_include('header'); ?>

<main>

  <section>

    <header>
      <h1><?php echo article_title(); ?></h1>
      <?php if(article_description()): ?>
        <p class="post-description"><?php echo article_description(); ?></p>
      <?php endif; ?>
    </header>

    <footer class="post-about">
      <span class="date"><?php echo article_date(); ?></span>
      <span class="fa fa-star" aria-hidden="true"></span>
      <span class="category"><a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a></span>
    </footer>

    <article>
        <?php echo article_markdown(); ?>
        <?php echo article_custom_field('attribution'); ?>
    </article>

  </section>

  <section class="comments">

    <div class="star-bar"><span class="fa fa-star spin-star" aria-hidden="true"></span></div>

    <h2>Comments</h2>

    <!-- Comment List -->
    <?php if(comments_open() and has_comments()): ?>
      <?php while(comments()): ?>
        <div class="comment">
          <?php echo comment_text(); ?>
          <p><em>&mdash; by <?php echo comment_name(); ?> on <?php echo comment_date(); ?></em></p>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p>żaden.</p>
    <?php endif; ?>

    <h3>Add your voice</h3>

    <!-- Comment Form -->
    <?php if(comments_open()): ?>
      <form id="comment" method="post" action="<?php echo comment_form_url(); ?>#comment">
        <?php echo comment_form_notifications(); ?>

        <div class="form-line clearfix">
          <span class="fa fa-user" aria-hidden="true"></span>
          <input id="name" name="name" type="text" placeholder="⟨ Name ⟩">
        </div>

        <div class="form-line clearfix">
          <span class="fa fa-envelope" aria-hidden="true"></span>
          <input id="email" name="email" type="email" x-autocompletetype="email" autocompletetype="email" autocorrect="off" spellcheck="off" autocapitalize="off" placeholder="⟨ Email ⟩">
        </div>

        <div class="form-line clearfix">
          <span class="fa fa-commenting" aria-hidden="true"></span>
          <textarea id="text" name="text" placeholder="⟨ Your comment or question ⟩"></textarea>
        </div>

        <div class="form-submit clearfix">
          <?php echo comment_form_button(); ?>
        </div>

      </form>
    <?php endif; ?>

  </section>

</main>

<?php theme_include('footer'); ?>
