<?php


namespace Game\Buildings\Queues;


use App\Models\BuildingQueue;
use Tightenco\Parental\HasParent;

final class WaitingLoop extends BuildingQueue
{
    use HasParent;
}
