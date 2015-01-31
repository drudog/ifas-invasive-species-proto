<section class=""> <!-- SECTION OPTIONS:  b-clear, b-med-lines, b-white, b-dark -->
	<div class="outer-container">
		<div class="panel"> <!-- PANEL OPTIONS: panel-text, panel-large-image, panel-slideshow, panel-video, panel-accordion  -->



			<!-- CONDITIONALS: panel-text MAY contain a .blockquote or a .round-image container ONLY at the top of the panel -->
			<div class="blockquote">
				content
				<q>optional source</q>
			</div>
			<div class="round-image">
				<div class="round-image-container">
					<span style="background-image: url(image/link);" alt="image title"></span>
				</div>
			</div>
			<!-- END CONDITIONALS -->




			<!-- OPTIONS: Headline and/or subtext (probably not needed for the panel-text panels but ok) -->
			<!-- No headline or subtext on slideshows, it breaks the positioning of the arrows -->
			<div class="headline">
				<h1>content</h1>
			</div>
			<div class="subtext">
				<p>content</p>
			</div>
			<!-- END OPTIONS -->




		<!------------ PANEL CONTENT---------------------->


			<!-- if large image-->
			<figure>
				<img src="image/path" alt="image title"/>
				<figcaption>
					<p>caption</p>
				</figcaption>
			</figure>
			<!-- end large image-->


			<!-- if video -->
			<div class="video-container">
				<iframe src="video/embed/link" frameborder="0" allowfullscreen></iframe>
			</div>
			<!-- end video -->


			<!-- if accordion -->
			<dl>
				<!-- each accordion -->
				<dt>Visible part</dt>
				<dd>Toggled part</dd>
			</dl>
			<!-- end accordion -->


			<!-- if slide show -->
			<div class="r-slides-nav-container"></div>
			<ul class="rslides" id="uniqueID">
				<!-- each slide -->
				<li>
					<img src="image/path" alt="image title">
					<div class="content" style="display: none;">
						<p class="r-caption">caption</p>
					</div>
				</li>
			</ul>
			<div id="slide_content_panel"></div>
			<!-- end slide show -->


			<!-- if button -->
			<a class="button" href="button/link">button text</a>
			<!-- end button -->



		<!------------ END PANEL CONTENT---------------------->
		</div>
	</div>
</section>
