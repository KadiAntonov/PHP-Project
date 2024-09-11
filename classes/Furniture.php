<?php

class Furniture extends Products {
    public function setAttributes()
    {
        return '
        <div id="Furniture">
                <label for="height">Height (CM)</label>
                <input type="number" name="height" id="height"><br><br>
                <label for="width">Width (CM)</label>
                <input type="number" name="width" id="width"><br><br>
                <label for="length">Length (CM)</label>
                <input type="number" name="length" id="length">
                <p>*Please provide dimensions*</p>
        </div>
        ';
    }
}