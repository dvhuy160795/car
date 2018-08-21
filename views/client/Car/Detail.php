<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div>
                <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top: 115px">
                    <ul class="nav nav-pills mb-3 bg-light" id="pills-tab" role="tablist" style="z-index: 10; position: fixed; width: 100%; border-top: thin solid cornflowerblue">
                        <?php foreach ($aryTab as $key => $tab) : ?>
                        <li class="nav-item" style=" font-size: 20px;">
                            <a class="nav-link <?php echo ($key == "tab_1")? "active" : ""; ?>"  style=" font-weight: bold;"
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
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="margin-top:100px">
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
</div>