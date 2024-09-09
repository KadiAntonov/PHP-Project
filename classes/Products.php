<?php

abstract class Products {
    abstract public function setAttributes();
}

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