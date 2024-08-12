// plugins/niainteractive/wn-filelist-plugin/Plugin.php

namespace NiaInteractive\FileList;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'FileList',
            'description' => 'Displays a list of files in a given directory',
            'author'      => 'Nia Interactive',
            'icon'        => 'icon-file'
        ];
    }

    public function registerComponents()
    {
        return [
            'NiaInteractive\FileList\Components\FileList' => 'filelist'
        ];
    }
}
