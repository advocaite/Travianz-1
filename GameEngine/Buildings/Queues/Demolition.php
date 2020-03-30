<?php


namespace Game\Buildings\Queues;


use App\Models\BuildingQueue;
use Tightenco\Parental\HasParent;

final class Demolition extends BuildingQueue
{
    use HasParent;
}
