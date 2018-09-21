<?php header('image/svg+xml'); ?>
<svg width="580" height="400" xmlns="http://www.w3.org/2000/svg">
	<g>
		<rect fill="#fff" id="canvas_background" height="402" width="582" y="-1" x="-1"></rect>
		<g display="none" overflow="visible" y="0" x="0" height="100%" width="100%" id="canvasGrid">
			<rect fill="url(#gridpattern)" stroke-width="0" y="0" x="0" height="100%" width="100%"></rect>
		</g>
	</g>
	<g>
		<animateTransform attributeName="transform" type="rotate" from="0 150 150" to="360 150 150" dur="20s" repeatCount="indefinite"></animateTransform>
		<?php for($i=0;$i<45;$i++) {
			?>
			<rect
				stroke="#000"
				id="svg_<?=$i?>"
				height="6"
				width="12"
				y="0"
				x="100"
				stroke-width="1"
				fill="#fff"
				style="transform: translate(150px, 150px) rotateZ(<?= $i*8 ?>deg);"
			></rect>
			<?php
		} ?>
	</g>
    <g>
        <animateTransform attributeName="transform" type="rotate" from="0 150 150" to="-360 150 150" dur="16s" repeatCount="indefinite"></animateTransform>
		<?php for($i=0;$i<45;$i++) {
		    if ($i%5==0) continue;
			?>
            <rect
                    stroke="#000"
                    id="svg_<?=$i?>"
                    height="6"
                    width="12"
                    y="0"
                    x="80"
                    stroke-width="1"
                    fill="#fff"
                    style="transform: translate(150px, 150px) rotateZ(<?= $i*8 ?>deg);"
            ></rect>
			<?php
		} ?>
    </g>
</svg>
