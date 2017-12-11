<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?> </li>
    </ul>
</nav>

<div class="showtimes view large-9 medium-8 columns content">
    
    <p>Salle: <select name="choix">
        <option value="choix1">Salle A</option>
        <option value="choix2">Salle B</option>
    </select></p>
    
    <table>
        <thead>
        <tr>
            <th scope="col">L</th>
            <th scope="col">M</th>
            <th scope="col">M</th>
            <th scope="col">J</th>
            <th scope="col">V</th>
            <th scope="col">S</th>
            <th scope="col">D</th>
        </tr>
        </thead>
    </table>
</div>
