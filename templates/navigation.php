
                    <div id="navigWrap">
                        <a href="/">
                            <div class="navigItem" id="navigItemFirst">
                                <span>Главная страница</span>
                            </div>
                        </a>
                        <?php
                        out_admin(
                            '<a href="/?do=admin">
                            <div class="navigItem">
                                <span>Админпанель</span>
                            </div>
                        </a>'
                        );
                        out_user(
                            '<a href="/?do=admin">
                            <div class="navigItem">
                                <span>Авторизация</span>
                            </div>
                        </a>'
                        );
                        ?>
                        
                        <a href="/?do=about">
                            <div class="navigItem">
                                <span>О ресурсе</span>
                            </div>
                        </a>
                        <a href="/?do=feedback">
                            <div class="navigItem">
                                <span>Обратная связь</span>
                            </div>
                        </a>
                    </div>