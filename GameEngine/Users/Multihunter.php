<?php


namespace Game\Users;


use App\Models\User;
use Tightenco\Parental\HasParent;

final class Multihunter extends User
{
    use HasParent;
}
