<?php

namespace Pc\Custom\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Support\Str;

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
        if (parent::handle() === false && !$this->option('force')) {
            return;
        }
        $this->createFactory();

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
        if ($this->option('pivot')) {
            return __DIR__ . '/stubs/lookup.stub';
        }
        return __DIR__ . '/../stubs/model.stub';
    }

    /**
     * Create a model factory for the model.
     *
     * @return void
     */
    protected function createFactory()
    {
        $factory = Str::studly(class_basename($this->argument('name')));

        $this->call('make:factory', [
            'name' => "{$factory}Factory",
            '--model' => $this->qualifyClass($this->getNameInput()),
        ]);
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string $rootNamespace
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
            ['pivot', 'p', InputOption::VALUE_NONE, 'Indicates if the generated model should be a custom intermediate table model'],

        ];
    }
}
