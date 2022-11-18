<?php

namespace App\Helper;

class FlashMsg
{
    public static function item_success($custom_message)
    {
        return [
          'type' => __('success'),
          'msg' => $custom_message ?? __('Item inserted successfully..!'),
        ];
    }

    public static function item_delete($custom_message)
    {
        return [
            'type' => __('danger'),
            'msg' => $custom_message ?? __('Item deleted successfully..!'),
        ];
    }

    public static function item_info($custom_message)
    {
        return [
            'type' => __('info'),
            'msg' => $custom_message ?? __('Caution'),
        ];
    }

    public static function item_warning($custom_message)
    {
        return [
            'type' => __('warning'),
            'msg' => $custom_message ?? __('Something went wrong'),
        ];
    }

}
