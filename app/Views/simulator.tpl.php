<?php dump($viewData); ?>
<div class="wrapper">
    
    <div class="select-boon">
        <label for="pet-select">Bienfait de frappe :</label>
        
        <select onchange="selectInfo(this)" name="strike" id="strike-select">
            <option value="">--Please choose an option--</option>
        <?php foreach ($viewData['strikeList'] as $boon) : ?>
            <option value="<?= utf8_encode($boon->getName()); ?>"><?= utf8_encode($boon->getName()); ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    
    <div class="select-boon">
        <label for="pet-select">Bienfait de Technique :</label>
        
        <select onchange="selectInfo(this)" name="strike" id="strike-select">
            <option value="">--Please choose an option--</option>
        <?php foreach ($viewData['technicalList'] as $boon) : ?>
            <option value="<?= utf8_encode($boon->getName()); ?>"><?= utf8_encode($boon->getName()); ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    
    <div class="select-boon">
        <label for="pet-select">Bienfait de Tir :</label>
        
        <select onchange="selectInfo(this)" name="strike" id="strike-select">
            <option value="">--Please choose an option--</option>
        <?php foreach ($viewData['shootList'] as $boon) : ?>
            <option value="<?= utf8_encode($boon->getName()); ?>"><?= utf8_encode($boon->getName()); ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    
    <div class="select-boon">
        <label for="pet-select">Bienfait d'Élan :</label>
        
        <select onchange="selectInfo(this)" name="strike" id="strike-select">
            <option value="">--Please choose an option--</option>
        <?php foreach ($viewData['dashList'] as $boon) : ?>
            <option value="<?= utf8_encode($boon->getName()); ?>"><?= utf8_encode($boon->getName()); ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    
    <div class="select-boon">
        <label for="pet-select">Bienfait de Soutien :</label>
        
        <select onchange="selectInfo(this)" name="strike" id="strike-select">
            <option value="">--Please choose an option--</option>
        <?php foreach ($viewData['aidList'] as $boon) : ?>
            <option value="<?= utf8_encode($boon->getName()); ?>"><?= utf8_encode($boon->getName()); ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    <div><input type="submit" value="test"></div>

    <div class="passives">

        passifs
    </div>
</div>
