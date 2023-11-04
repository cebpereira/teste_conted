<?php

namespace App\Helpers;

class Button
{
    public static function DataTableButton($href, $id, $title, $icon, $name)
    {
        return '
            <div class="btn-group btn-group-sm ">
                <a href="' . $href . '"
                    class="' . $class . '"
                    data-id="' . $id . '"
                    title="' . $title . '" data-toggle="tooltip">
                    <i class="fas fa-' . $icon . ' fa-lg"></i>
                    &nbsp&nbsp' . $name . '
                </a>
            </div>';

    }
}
