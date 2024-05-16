<?php
    $language = session()->get('language');
?>


<a href="{{ route('change-language', 'en') }}" class="{{$language === 'en' ? 'bg-gray-900 text-white': 'text-black-300 hover:bg-gray-700 hover:text-white'}} btn btn-xs btn-info pull-right rounded-md px-3 py-2 text-sm font-medium">EN</a>
<a href="{{ route('change-language', 'sk') }}" class="{{$language === 'sk' ? 'bg-gray-900 text-white': 'text-black-300 hover:bg-gray-700 hover:text-white'}} btn btn-xs btn-info pull-right rounded-md px-3 py-2 text-sm font-medium">SK</a>

