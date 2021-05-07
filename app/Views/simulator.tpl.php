<?php dump($viewData); ?>
<div class="wrapper">
    
    <div class="select-boon">
        <label for="pet-select">Bienfait de frappe :</label>
        
        <select name="strike" id="strike-select">
            <option value="">--Please choose an option--</option>
        <?php foreach ($viewData['strikeList'] as $boon) : ?>
            <option value="<?= utf8_encode($boon->getName()); ?>"><?= utf8_encode($boon->getName()); ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    
    <div class="select-boon">
        <label for="pet-select">Bienfait de Technique :</label>
        
        <select name="strike" id="strike-select">
            <option value="">--Please choose an option--</option>
        <?php foreach ($viewData['technicalList'] as $boon) : ?>
            <option value="<?= utf8_encode($boon->getName()); ?>"><?= utf8_encode($boon->getName()); ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    
    <div class="select-boon">
        <label for="pet-select">Bienfait de Tir :</label>
        
        <select name="strike" id="strike-select">
            <option value="">--Please choose an option--</option>
        <?php foreach ($viewData['shootList'] as $boon) : ?>
            <option value="<?= utf8_encode($boon->getName()); ?>"><?= utf8_encode($boon->getName()); ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    
    <div class="select-boon">
        <label for="pet-select">Bienfait d'Élan :</label>
        
        <select name="strike" id="strike-select">
            <option value="">--Please choose an option--</option>
        <?php foreach ($viewData['dashList'] as $boon) : ?>
            <option value="<?= utf8_encode($boon->getName()); ?>"><?= utf8_encode($boon->getName()); ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    
    <div class="select-boon">
        <label for="pet-select">Bienfait de Soutien :</label>
        
        <select name="strike" id="strike-select">
            <option value="">--Please choose an option--</option>
        <?php foreach ($viewData['aidList'] as $boon) : ?>
            <option value="<?= utf8_encode($boon->getName()); ?>"><?= utf8_encode($boon->getName()); ?></option>
        <?php endforeach; ?>
        </select>
    </div>
</div>
