<?php

class Book extends Products {
    public function setAttributes()
    {
        return '
            <div id="Book">
                <label for="weight">Weight (KG)</label>
                <input type="number" name="weight" id="weight">
                <p>*Please provide weight*</p>
            </div>
        ';
    }
}