<?php

class Chart {
    public $type;
    public $data;
    public $options;

    public function __construct($type = "line") {
        $this->type = $type;
        $this->data = new Data();
        $this->options = new Options();
    }
}

class Data {
    public $labels = array();
    public $datasets = array();

    public function addDataSet($ds) {
        $this->datasets[] = $ds;
    }
}

class DataSet {
    public $label = "";
    public $data = array();
    public $fill = false;
    public $borderWidth = 1;
    public $borderColor = "rgb(0, 0, 255)";
    public $backgroundColor = "rgb(0, 0, 255)";
    public $pointRadius = 0;
    public $steppedLine = false;
    public $lineTension = 0.25;
}

class Legend {
    public $display = false;
    public $position = "top";
    public $fullWidth = true;
    public $reverse = false;
    public $labels;

    public function __construct() {
        $this->labels = new LabelConfig();
    }
}

class LabelConfig {
    public $boxWidth = 40;
    public $fontSize = 12;
    public $fontStyle = "normal";
    public $fontColor = "#666";
    public $fontFamily = "Helvetica Neue";
    public $padding = 10;
    public $usePointStyle = false;
}

class Options {
    public $responsive = false;
    public $legend;
    public $scales;
    public $layout;

    public function __construct() {
        $this->legend = new Legend();
        $this->scales = new Scales();
        $this->layout = new Layout();
    }
}

class Scales {
    public $xAxes = array();
    public $yAxes = array();
}

class Scale {
    public $type = "linear";
    public $ticks;
    public $labels = array();
    public $position = "bottom";

    public function __construct() {
        $this->ticks = new Ticks();
    }
}

class Ticks {
    public $max = 1;
    public $min = 0;
}

class Layout {
    public $padding;
}

class Padding {
    public $left;
    public $top;
    public $right;
    public $bottom;
}

?>