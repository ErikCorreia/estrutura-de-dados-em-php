<?php
    
    use App\Classes\Queue;

    require_once './vendor/autoload.php';

    $queue = new Queue();

    $queue->add('A');
    $queue->add('B');   
    $queue->add('C');
    $queue->add('D');

    echo '<pre>';
    print_r($queue->get());
    echo '</pre>';

    $queue->remove();
    
    echo '<pre>';
    print_r($queue->get());
    echo '</pre>';

    $queue->add('E');

    echo '<pre>';
    print_r($queue->get());
    echo '</pre>';