<?php

/**
 * JPGraph v3.6.15
 */
require_once __DIR__ . '/../../vendor/autoload.php';
use Amenadiel\JpGraph\Graph;

require_once 'jpgraph/jpgraph_canvas.php';
require_once 'jpgraph/jpgraph_table.php';

$cols = 4;
$rows = 3;
$data = [['', 'Jan', 'Feb', 'Mar', 'Apr'],
    ['Min', '15.2', '12.5', '9.9', '70.0'],
    ['Max', '23.9', '14.2', '18.6', '71.3']];

// Create a basic graph context
$graph = new CanvasGraph(300, 200);

// Create a basic table
$table = new GTextTable($cols, $rows);
$table->Set($data);

//Add table to the graph
$graph->Add($table);

// Send back table to the client
$graph->Stroke();
