<?php
global $site_url;
?>
<?php require( $theme_path . 'main' . $_DS . 'mini-sidebar.php' );?>
<div class="container page-margin find_matches_cont">
    <div class="row r_margin">
        <?php if( IS_LOGGED ){ ?>
			<div class="col l3">
				<?php require( $theme_path . 'main' . $_DS . 'sidebar.php' );?>
			</div>
        <?php }?>
        <div class="col <?php if( IS_LOGGED ){ echo 'l9'; }else{ echo 'l12'; }?>">
			<div class="dt_sections qd_read_blog_section">
				<div class="qd_read_blog_head">
					<div class="catz"><a href="<?php echo $site_url;?>/blog/<?php echo $data['article']['category'] . '_' . url_slug(html_entity_decode(Dataset::blog_categories()[$data['article']['category']]));?>" data-ajax="/blog/<?php echo $data['article']['category'] . '_' . url_slug(html_entity_decode(Dataset::blog_categories()[$data['article']['category']]));?>"><?php echo Dataset::blog_categories()[$data['article']['category']];?></a></div>
					<h1><?php echo $data['article']['title'];?></h1>
					<div class="center">
						<time><?php echo get_time_ago($data['article']['created_at']) ;?></time>
						<span class="middot">·</span>
						<span class="views"><?php echo $data['article']['view'];?> <?php echo __('Views');?></span>
					</div>
					<br>
					<div class="row">
						<div class="col l8 m12 s12">
							<div class="qd_read_blog_thumb">
								<img src="<?php echo GetMedia($data['article']['thumbnail']);?>" alt="<?php echo $data['article']['title'];?>" />
							</div>
						</div>
						<div class="col l4 m12 s12">
							<div class="qd_read_blog_share">
								<p class="bold"><?php echo __( 'Share' );?></p>
								<ul>
									<li>
										<a href="https://www.facebook.com/sharer.php?u=<?php echo $data['article']['url'];?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#337ab7"><path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z"></path></svg><span> Facebook</span></a>
									</li>
									<li>
										<a href="http://twitter.com/intent/tweet?text=<?php echo $data['article']['title'];?>&amp;url=<?php echo $data['article']['url'];?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#55acee"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z"></path></svg><span> Twitter</span></a>
									</li>
									<li>
										<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $data['article']['url'];?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#007bb6"><path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z"></path></svg><span> Linkedin</span></a>
									</li>
									<li>
										<a href="http://pinterest.com/pin/create/button/?url=<?php echo $data['article']['url'];?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#cb2027"><path d="M9.04,21.54C10,21.83 10.97,22 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12C2,16.25 4.67,19.9 8.44,21.34C8.35,20.56 8.26,19.27 8.44,18.38L9.59,13.44C9.59,13.44 9.3,12.86 9.3,11.94C9.3,10.56 10.16,9.53 11.14,9.53C12,9.53 12.4,10.16 12.4,10.97C12.4,11.83 11.83,13.06 11.54,14.24C11.37,15.22 12.06,16.08 13.06,16.08C14.84,16.08 16.22,14.18 16.22,11.5C16.22,9.1 14.5,7.46 12.03,7.46C9.21,7.46 7.55,9.56 7.55,11.77C7.55,12.63 7.83,13.5 8.29,14.07C8.38,14.13 8.38,14.21 8.35,14.36L8.06,15.45C8.06,15.62 7.95,15.68 7.78,15.56C6.5,15 5.76,13.18 5.76,11.71C5.76,8.55 8,5.68 12.32,5.68C15.76,5.68 18.44,8.15 18.44,11.43C18.44,14.87 16.31,17.63 13.26,17.63C12.29,17.63 11.34,17.11 11,16.5L10.33,18.87C10.1,19.73 9.47,20.88 9.04,21.57V21.54Z"></path></svg><span> Pinterest</span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col l2 m1 s12"></div>
						<div class="col l10 m11 s12">
							<div class="blockquote">
								<blockquote><?php echo $data['article']['description'];?></blockquote>
							</div>
						</div>
					</div>
				</div>
				<article><?php echo br2nl( html_entity_decode( $data['article']['content'] ));?></article>
			</div>
			<p class="bold"><?php echo __( 'Tags' );?></p>
			<ul class="qd_read_blog_tags">
				<?php
					$tags = explode(',' , $data['article']['tags'] );
					foreach ($tags as $key => $tag) {
				?>
					<li><a href="<?php echo $site_url;?>/blog/<?php echo $tag;?>" data-ajax="/blog/<?php echo $tag;?>"><?php echo $tag;?></a></li>
				<?php }?>
			</ul>
        </div>
    </div>
</div>