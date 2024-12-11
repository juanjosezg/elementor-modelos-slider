<div class="widgetModelos">
  <div class="widgetModelos--cards">

    <div class="widgetModelos-controls">
      <div
        class="swiper-button-prev widgetModelos-prevButton">
      </div>
      <div
        class="swiper-button-next widgetModelos-nextButton">
      </div>
    </div>

    <div class="swiper widgetModelos-swiper">
      <div class="swiper-wrapper">
        <?php foreach ($settings['slides'] as $slide): ?>
        <div class="swiper-slide widgetModelos--card">
          <div class="widgetModelos--cardTop">
            <h4 class="widgetModelos--modelTitle">
              <?php echo esc_html($slide['modelo_titulo']); ?>
            </h4>

            <div class="widgetModelos--imagen">
            <img  src="<?php echo esc_url($slide['modelo_image']['url']); ?>" alt="<?php echo esc_url($slide['modelo_image']['alt']); ?>">
            </div>
           

            <div class="widgetModelos--precio">
              <?php echo $slide['modelo_precio']; ?>
            </div>

            <a class="widgetModelos--cta"
                <?php
                    $cta_link_1_type = isset($slide['cta_link_1_type']) ? $slide['cta_link_1_type'] : 'link';
                    $cta_link_1_text = isset($slide['cta_link_1_text']) ? $slide['cta_link_1_text'] : __('Aparta tu Auto', 'dalton-elementor-sliderModelos');

                    if ('popup' === $cta_link_1_type) {
                        // Si el tipo es popup, agrega atributos de Fancybox
                        $cta_link_1_popup = isset($slide['cta_link_1_popup']) ? $slide['cta_link_1_popup'] : '';
                        if (!empty($cta_link_1_popup)) {
                            echo 'data-fancybox="true" data-src="#' . esc_attr($cta_link_1_popup) . '"';
                        } else {
                            echo 'data-fancybox="true"'; // Fallback en caso de que no se seleccione un popup
                        }
                    } else {

                        echo ' href="' .$slide['cta_link_1']['url']. '" ';

                        // Agrega el atributo target si está habilitado
                        if (isset($slide['cta_link_1']['is_external']) && $slide['cta_link_1']['is_external']) {
                            echo ' target="_blank"';
                        }

                    }
                ?>>
                <?php echo $cta_link_1_text; ?>
            </a>

            <div class="widgetModelos--desc">
              <?php echo $slide['modelo_desc']; ?>
            </div>
          </div>
          <div  class="widgetModelos--cardBottom">
          <a class="widgetModelos--cta2" <?php
              // Get the settings for the second CTA
              $cta2_link_type = isset($slide['cta_link_2_type']) ? $slide['cta_link_2_type'] : 'link';
              $cta2_text = isset($slide['cta_link_2_text']) ? $slide['cta_link_2_text'] : __('Asesoria Personalizada', 'dalton-elementor-sliderModelos'); // Default text

      
                  // If it's a normal link, generate the external URL
                  $cta2_url = isset($slide['cta_link_2']['url']) ? $slide['cta_link_2']['url'] : '#'; // Default to # if no URL set
                  $cta2_icon =  isset($slide['cta_link_2_icon']) ? $slide['cta_link_2_icon'] : 'whatsapp';
                  echo 'href="' . esc_url($cta2_url) . '"';
              

              echo isset($settings['cta_link_2']['is_external']) &&  $slide['cta_link_2']['is_external'] ? 'target="_blank"' : '';
              echo isset($settings['cta_link_2']['nofollow']) && $ $slide['cta_link_2']['nofollow'] ? 'rel="nofollow"' : '';
          ?> >
              <div class="textLink">
                  <?php echo esc_html($cta2_text); // Display the custom text for the second CTA ?>
              </div>
              <div>
                  <?php if ($cta2_icon === 'whatsapp') { ?>
                  <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="Group">
                          <path id="Vector"
                              d="M15.3671 5.13014C14.9625 4.23698 14.3837 3.43495 13.6463 2.74685C12.9116 2.0607 12.0561 1.52233 11.1047 1.14671C10.1207 0.758062 9.07666 0.561462 7.99998 0.561462C6.92331 0.561462 5.87926 0.758713 4.89524 1.14671C3.9432 1.52233 3.08841 2.0607 2.35366 2.74685C1.61696 3.43495 1.03815 4.23633 0.632934 5.13014C0.212705 6.05716 0 7.04276 0 8.05832C0 9.83358 0.668184 11.5418 1.8858 12.8933L1.23327 16.4386L4.70732 14.8931C5.74354 15.3325 6.85023 15.5558 7.99998 15.5558C9.076 15.5558 10.1207 15.3586 11.1047 14.9706C12.0568 14.595 12.9116 14.0566 13.6463 13.3704C14.383 12.6823 14.9618 11.881 15.3671 10.9872C15.7873 10.0601 16 9.07452 16 8.05897C16 7.04342 15.7873 6.05846 15.3671 5.13079V5.13014ZM8.00065 14.6744C6.90962 14.6744 5.86296 14.4511 4.88938 14.0097L4.70863 13.9277L2.40585 14.9524L2.83653 12.614L2.68123 12.4512C1.52299 11.2397 0.884802 9.6793 0.884802 8.05767C0.884802 4.4095 4.07763 1.44161 8.00129 1.44161C11.9249 1.44161 15.1178 4.4095 15.1178 8.05767C15.1178 11.7058 11.9249 14.6737 8.00129 14.6737L8.00065 14.6744Z"
                              fill="#0B62BD" />
                          <path id="Vector_2"
                              d="M11.2417 9.55196C10.9004 9.3853 10.6538 9.27854 10.475 9.21083C10.3614 9.16917 10.1024 9.05394 10.0097 9.12751C9.72196 9.36382 9.41658 10.0239 9.09162 10.1489C8.28314 9.99008 7.53468 9.43608 6.94806 8.87167C6.68509 8.62104 6.20745 7.92317 6.10044 7.73243C6.08347 7.53713 6.43258 7.27738 6.50958 7.12961C6.91545 6.67261 6.60745 6.39072 6.5546 6.19803C6.46455 6.00143 6.30531 5.6538 6.16958 5.3628C6.05408 5.17271 6.02798 4.89604 5.81461 4.78927C4.9239 4.33162 4.41691 5.24497 4.2068 5.7215C2.94872 8.74538 10.5187 14.5093 12.058 10.5415C12.1357 10.1945 12.1056 10.0675 11.9836 9.90805C11.7585 9.75181 11.4844 9.6789 11.2411 9.5513L11.2417 9.55196Z"
                              fill="#0B62BD" />
                      </g>
                  </svg>
                 <?php } else if ($cta2_icon === 'attachment') { ?>
                     <svg width="15" height="21" viewBox="0 0 15 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M8.4375 9.75781C8.4375 9.48438 8.20312 9.28906 7.96875 9.28906H7.03125C6.75781 9.28906 6.5625 9.48438 6.5625 9.75781V13.0391H4.64844C4.21875 13.0391 4.02344 13.5469 4.29688 13.8203L7.10938 16.6328C7.30469 16.8281 7.65625 16.8281 7.85156 16.6328L10.6641 13.8203C10.9375 13.5469 10.7422 13.0391 10.3125 13.0391H8.4375V9.75781ZM14.4141 4.32812L11.1328 1.08594C10.7812 0.734375 10.3125 0.5 9.84375 0.5H1.83594C0.820312 0.539062 0 1.35938 0 2.41406V18.6641C0 19.6797 0.820312 20.5 1.83594 20.5H13.0859C14.1406 20.5 15 19.6797 15 18.6641V5.65625C15 5.1875 14.7656 4.67969 14.4141 4.32812ZM9.96094 2.53125L12.9688 5.53906H9.96094V2.53125ZM13.125 18.6641H1.83594V2.41406H8.08594V6.47656C8.08594 6.98438 8.51562 7.41406 9.02344 7.41406H13.125V18.6641Z" fill="#0063CC"/>
                     </svg>
                  <?php } else { ?>
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="Group">
                          <path id="Vector"
                              d="M15.3671 5.13014C14.9625 4.23698 14.3837 3.43495 13.6463 2.74685C12.9116 2.0607 12.0561 1.52233 11.1047 1.14671C10.1207 0.758062 9.07666 0.561462 7.99998 0.561462C6.92331 0.561462 5.87926 0.758713 4.89524 1.14671C3.9432 1.52233 3.08841 2.0607 2.35366 2.74685C1.61696 3.43495 1.03815 4.23633 0.632934 5.13014C0.212705 6.05716 0 7.04276 0 8.05832C0 9.83358 0.668184 11.5418 1.8858 12.8933L1.23327 16.4386L4.70732 14.8931C5.74354 15.3325 6.85023 15.5558 7.99998 15.5558C9.076 15.5558 10.1207 15.3586 11.1047 14.9706C12.0568 14.595 12.9116 14.0566 13.6463 13.3704C14.383 12.6823 14.9618 11.881 15.3671 10.9872C15.7873 10.0601 16 9.07452 16 8.05897C16 7.04342 15.7873 6.05846 15.3671 5.13079V5.13014ZM8.00065 14.6744C6.90962 14.6744 5.86296 14.4511 4.88938 14.0097L4.70863 13.9277L2.40585 14.9524L2.83653 12.614L2.68123 12.4512C1.52299 11.2397 0.884802 9.6793 0.884802 8.05767C0.884802 4.4095 4.07763 1.44161 8.00129 1.44161C11.9249 1.44161 15.1178 4.4095 15.1178 8.05767C15.1178 11.7058 11.9249 14.6737 8.00129 14.6737L8.00065 14.6744Z"
                              fill="#0B62BD" />
                          <path id="Vector_2"
                              d="M11.2417 9.55196C10.9004 9.3853 10.6538 9.27854 10.475 9.21083C10.3614 9.16917 10.1024 9.05394 10.0097 9.12751C9.72196 9.36382 9.41658 10.0239 9.09162 10.1489C8.28314 9.99008 7.53468 9.43608 6.94806 8.87167C6.68509 8.62104 6.20745 7.92317 6.10044 7.73243C6.08347 7.53713 6.43258 7.27738 6.50958 7.12961C6.91545 6.67261 6.60745 6.39072 6.5546 6.19803C6.46455 6.00143 6.30531 5.6538 6.16958 5.3628C6.05408 5.17271 6.02798 4.89604 5.81461 4.78927C4.9239 4.33162 4.41691 5.24497 4.2068 5.7215C2.94872 8.74538 10.5187 14.5093 12.058 10.5415C12.1357 10.1945 12.1056 10.0675 11.9836 9.90805C11.7585 9.75181 11.4844 9.6789 11.2411 9.5513L11.2417 9.55196Z"
                              fill="#0B62BD" />
                      </g>
                  </svg>
                    <?php } ?>
              </div>
          </a>
          </div>


        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</div>
