<div class="bwd-step-number <?php echo esc_attr($stepNumS . $stepNumT . $stepNumFi . $stepNumSix . $stepNumEi . $stepNumN . $stepNumTh . $stepNumFT . $stepNumST . $stepNumTWF. $stepNumTWE); ?>">
    <?php $shapeArrowN = ['style24', 'style25'];
    if( in_array($styles, $shapeArrowN) ){ ?>
        <div class="show-arrow bwd-step-num-gbl"></div>
    <?php } ?>
    <div class="bwd-number-inner <?php echo esc_attr($stepNumF . $stepNumTw . $stepNumInrTh . $stepNumInrFT . $stepNumInrST); ?>"> 
        <?php echo esc_html($item['bwdas_step_content_number']); ?>
    </div>
</div>