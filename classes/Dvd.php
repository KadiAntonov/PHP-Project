<?php

class DVD extends Products {
    public function setAttributes()
    {
        return '
            <div id="DVD">
                <label for="size">Size (MB)</label>
                <input type="number" name="size" id="size">
                <p>*Please provide size*</p>
            </div>
        ';
    }
}