<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 18.10.2015
 * Time: 3:56
 */


?>


<? if( isset( $ship->gfx ) ): ?>
<img class="ship_image" src="<?= $ship->gfx; ?>">
<? endif; ?>

<? if( $ship->gfx_speed != '' ): ?>
<img class="ship_engine" src="<?= $ship->gfx_speed; ?>">
<? endif; ?>

<? if( $ship->gfx_power != '' ): ?>
    <img class="ship_gun" src="<?= $ship->gfx_power; ?>">
<? endif; ?>

<? if( $ship->gfx_defend != '' ): ?>
    <img class="ship_image" src="<?= $ship->gfx_defend; ?>">
<? endif; ?>

<? if( $ship->gfx_artefact != '' ): ?>
    <img class="ship_image" src="<?= $ship->gfx_artefact; ?>">
<? endif; ?>