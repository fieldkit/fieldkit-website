<?php
$header_heading = get_sub_field('header_heading');
$header_body = get_sub_field('header_body');
$items = get_sub_field('items');
?>
<section class="section section-definition-list">
	<div class="section__inner">
		<?php if ($header_heading || $header_body) : ?>
			<header class="rich-text section-definition-list__header">
				<?php if ($header_heading) : ?>
					<h2 class="heading-4"><?php echo $header_heading; ?></h2>
				<?php endif; ?>
				<?php if ($header_body) echo $header_body; ?>
			</header>
		<?php endif; ?>
		<div class="section-definition-list__list">
			<?php
			foreach ($items as $item) :
				$image = $item["image"];
				$row_id = $item["row_id"];
				$name = $item["name"];
				$definition = $item["definition"];
			?>
				<div class="section-definition-list__item"<?php if ($row_id) : ?> id="<?php echo htmlspecialchars($row_id); ?>"<?php endif; ?>>
					<?php if ($image) : ?>
						<a href="<?php echo $image['url']; ?>" class="mp-lightbox">
							<div class="section-definition-list__item-image">
								<?php echo wp_get_attachment_image($image['ID'], 'full'); ?>
							</div>
						</a>
					<?php endif; ?>
					<?php if ($name || $definition) : ?>
					<div class="section-definition-list__item-text rich-text">
						<?php if ($name) : ?>
							<h3 class="section-definition-list__item-text-name heading-5"><?php echo $name; ?></h3>
						<?php endif; ?>
						<?php if ($definition) : ?>
							<?php echo $definition; ?>
						<?php endif; ?>
					</div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
