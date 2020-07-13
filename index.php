<?php
get_header();
?>
                <section class="hero row">
                    <!-- TODO: load image from media library -->
                    <!-- TODO: for dynamic content - adjust font color depending on image, alternatively use an opacity layer for legibility -->
                    <!-- Conscious choice to deviate from design and center/fill hero image instead of left-aligning -->
                    <?php echo '<img src="' . get_theme_file_uri() . '/assets/images/alex.png" class="col-12" alt="Hero image" />'; ?>
                    <span class="hero-text col-md-4 col-sm-12">Condimentum, lacus pha.</span>
                </section>
                <section class="slider">
                    <!-- TODO: load content dynamically -->
                    <div class="slider-content active row justify-content-between">
                        <div class="slider-text col-lg-6 col-sm-12">
                            <span class="slider-text-heading">Intro</span>
                            <h2 class="slider-text-preamble">
                                Duis porta, ligula rhoncus euis mod pretiu, nisi tellus eleifend odio, 
                                luctus viverra sem dolor id sem. Maecena sa venenatis en m, quis porttitor magna.
                            </h2>
                            <p class="slider-text-paragraph">
                                Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. 
                                Pra esent sollici tudin felis vel mi facilisis posuere. 
                                Nulla ultrices facilisis ju sto, non varius nisl semp ervel. 
                                Interdum et malesuada fames ac antei psum primis in faucibus. 
                                Phasellus at ante mattis, condimentum velite t, dignissim nunc. 
                                Integer quis tincidunt purus. Duis dignissim maurisv el elit commodo, 
                                eu hendrerit leo ultrices. Nulla vehicula vestibulum p urus at rutrum. 
                                Pellentesque habitant morbi tristique senectus et netu s et malesuada 
                                fames ac turpis egestas. Curabitur dignissim massa ne c libero scelerisque rutrum. 
                                Curabitur ac purus id elit hendrerit lacinia.
                            </p>
                        </div>
                        <?php echo '<img class="slider-image col-lg-5 col-sm-12" src="' . get_theme_file_uri() . '/assets/images/joyce.png" alt="Hero image" />'; ?>
                    </div>
                    <!-- Content in the design was not available for download/copying, I chose to change the text only -->
                    <div class="slider-content row justify-content-between">
                        <div class="slider-text col-lg-6 col-sm-12">
                            <span class="slider-text-heading">Intro</span>
                            <h2 class="slider-text-preamble">
                                Slide 2 Maecena sa venenatis en m, quis porttitor magna.
                            </h2>
                            <p class="slider-text-paragraph">
                                Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. 
                                Pra esent sollici tudin felis vel mi facilisis posuere. 
                                Nulla ultrices facilisis ju sto, non varius nisl semp ervel. 
                                Interdum et malesuada fames ac antei psum primis in faucibus. 
                                Phasellus at ante mattis, condimentum velite t, dignissim nunc.
                            </p>
                        </div>
                        <?php echo '<img class="slider-image col-lg-5 col-sm-12" src="' . get_theme_file_uri() . '/assets/images/joyce.png" alt="Hero image" />'; ?>
                    </div>
                    <div class="slider-content row justify-content-between">
                        <div class="slider-text col-lg-6 col-sm-12">
                            <span class="slider-text-heading">Intro</span>
                            <h2 class="slider-text-preamble">
                                Slide 3 Duis porta, ligula rhoncus euis mod pretiu.
                            </h2>
                            <p class="slider-text-paragraph">
                                Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. 
                                Pra esent sollici tudin felis vel mi facilisis posuere. 
                                Nulla ultrices facilisis ju sto, non varius nisl semp ervel.
                            </p>
                        </div>
                        <?php echo '<img class="slider-image col-lg-5 col-sm-12" src="' . get_theme_file_uri() . '/assets/images/joyce.png" alt="Hero image" />'; ?>
                    </div>
                    <div class="slider-link-wrapper">
                        <span class="slider-link active">01. Lorem</span>
                        <span class="slider-link">02. Ipsum</span>
                        <span class="slider-link">03. Dolores</span>
                    </div>
                </section>
                <section class="form row justify-content-between">
                    <!-- TODO: load content dynamically -->
                    <div class="form-text-container col-md-6 col-sm-12">
                        <h2 class="form-header">
                            Registrera dig
                        </h2>
                        <p class="form-paragraph">
                            Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. 
                            Pra esent sollici tudin felis vel mi facilisis posuere. 
                            Nulla ultrices facilisis ju sto, non varius nisl semp ervel. 
                            Interdum et malesuada fames ac antei psum primis in faucibus. 
                            Phasellus at ante mattis, condimentum velite t, dignissim nunc. 
                            Integer quis tincidunt purus. Duis dignissim maurisv el elit commodo, 
                            eu hendrerit leo ultrices. Nulla vehicula vestibulum p urus at rutrum. 
                            Pellentesque habitant morbi tristique senectus et netu s et malesuada 
                            fames ac turpis egestas. Curabitur dignissim massa ne c libero scelerisque 
                            rutrum. Curabitur ac purus id elit hendrerit lacinia.
                        </p>
                    </div>
                    <div class="form-input-container col-md-5 col-sm-12">
                        <!-- TODO: Dynamic fields and content -->
                        <!-- Browser validation for required fields and email is supported but more validation should be added -->
                        <input class="form-input-text" type="text" required placeholder="Namn*" />
                        <input class="form-input-text" type="email" required placeholder="Epost*" />
                        <input class="form-input-text" type="text" required placeholder="Födelseår*" />
                        <input class="form-input-text" type="password" required placeholder="Lösenord*" />
                        <input class="form-input-text" type="password" required placeholder="Bekräfta lösenord*" />
                        <div class="form-terms-accept-wrapper row no-gutters align-items-center">
                            <input id="form-terms-accept" class="col-1" type="radio" />
                            <label for="form-terms-accept" class="col-11">Etiam convallis elementum sapien, a aliquam turpis.</label>
                        </div>
                        <p class="form-terms">
                            Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. 
                            Praesent sollicit udi n felis vel mi facilisis posuere. 
                            Nulla ultrices facilisis justo, non varius nisl semper vel. 
                            I nterdum et malesuada fames ac ante ipsum primis in faucibus. 
                            Phasellus at ante matti s, condimentum velit et, dignissim nunc. 
                            Integer quis tincidunt purus.
                        </p>
                        <button>Skicka</button>
                    </div>
                </section>
        <?php wp_footer(); ?>