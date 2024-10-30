<?php include 'condition.php'; ?>
<div class="bwd-step-icon <?php echo esc_attr( $stepIconF . $stepIconS . $stepIconTw . $stepIconTT ); ?>">
    <span class="bwdib-icon <?php echo esc_attr($bwdIconF); ?>">
        <?php \Elementor\Icons_Manager::render_icon( $item['bwdas_step_content_icon'], ['aria-hidden' => 'true'] ); ?>
    </span>
</div>