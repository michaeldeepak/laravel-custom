<?php

namespace Pc\Custom\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class CreateCustom extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Custom class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Custom';

    public function handle()
    {
        if (parent::handle() === false && ! $this->option('force')) {
            return;
        }

       /* if (! $this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0777, true, true);
        }*/

    }



    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/../stubs/model.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace;
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['force', null, InputOption::VALUE_NONE, 'Create the class even if the class already exists'],

        ];
    }
}
