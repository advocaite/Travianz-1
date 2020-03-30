<?php


namespace Game\Buildings\Queues;


use App\Models\BuildingQueue;
use Tightenco\Parental\HasParent;

final class Normal extends BuildingQueue
{
    use HasParent;
}
