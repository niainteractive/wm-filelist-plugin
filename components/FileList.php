<?php namespace NiaInteractive\FileList\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Storage;

class FileList extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'FileList',
            'description' => 'Displays a list of files in a given directory'
        ];
    }

    public function defineProperties()
    {
        return [
            'directory' => [
                'title'       => 'Directory',
                'description' => 'Path to the directory to list files from',
                'default'     => 'media',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $directory = $this->property('directory');
        $files = Storage::disk('local')->files($directory);

        $this->page['files'] = $files;
    }
}
