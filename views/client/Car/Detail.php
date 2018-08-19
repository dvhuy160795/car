<div class="container row">
    <div class="col-lg-12">
        <div>
            <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top: 85px">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="z-index: 10">
                    <?php foreach ($aryTab as $key => $tab) : ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($key == "tab_1")? "active" : ""; ?>" 
                               id="pills-home-tab" data-toggle="pill" href="#pills-<?php echo $key; ?>" 
                               role="tab" aria-controls="pills-<?php echo $key; ?>" aria-selected="true"><?php echo $tab; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container row">
    <div class="col-lg-12">
        <div>
            <div class="tab-content" id="pills-tabContent" style="min-height: 555px;">
                <?php foreach ($aryDataTab as $index => $fieldData) : ?>
                    <div class="tab-pane fade show <?php echo ($index == "tab_1")? "active" : ""; ?>" id="pills-<?php echo $index; ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                        <?php foreach ($fieldData as  $field) : ?>
                            <?php echo html_entity_decode($row[$field]); ?>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>