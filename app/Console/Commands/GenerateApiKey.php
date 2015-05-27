<?php namespace Rahasi\Console\Commands;

use App;
use Rahasi\Repositories\Models\Eloquents\ApiKey;
use Config;
use Sentry;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class GenerateApiKey extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'rahasi-api-key:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate an API key';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $userId = $this->getOption('user-id', Config::get('apiguard.user_id', 0));

        if ( ! empty($userId)) {

            // check whether this user already has an API key
            $apiKeyModel = App::make(Config::get('apiguard.model', 'Rahasi\Repositories\Models\Eloquents\ApiKey'));

            $apiKey = $apiKeyModel->where('user_id', '=', $userId)->first();

            if ($apiKey) {
                $overwrite = $this->ask("This user already has an existing API key. Do you want to create another one? [y/n]");
                if ($overwrite == 'n') {
                    return;
                }
            }
        }

        $apiKey = App::make(Config::get('apiguard.model', 'Rahasi\Repositories\Models\Eloquents\ApiKey'));
        /** API KEYS NAMES DEFINITION */
        $apiKey->live_sk = 'live_sk_'.$apiKey->generateKey();
        $apiKey->live_pk = 'live_pk_'.$apiKey->generateKey();
        $apiKey->test_sk = 'test_sk_'.$apiKey->generateKey();
        $apiKey->test_pk = 'test_pk_'.$apiKey->generateKey();
        /** END OF THE DEFINITIONS */
        $apiKey->user_id = $this->getOption('user-id', 0);
        $apiKey->level = $this->getOption('level', 10);
        $apiKey->ignore_limits = $this->getOption('ignore-limits', 1);

        if ($apiKey->save() === false) {
            $this->error("Failed to save API key to the database.");
            return;
        }

        if (empty($apiKey->user_id)) {
            $this->info("You have successfully generated an API key:");
        } else {
            $this->info("You have successfully generated an API key for user ID#{$apiKey->user_id}:");
        }
        $this->info($apiKey->key);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array();
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
            array('user-id', null, InputOption::VALUE_OPTIONAL, 'Link the generated API key to a user ID', null),
            array('level', null, InputOption::VALUE_OPTIONAL, 'Permission level of the generated API key', null),
            array('ignore-limits', null, InputOption::VALUE_OPTIONAL, 'Specify whether this API key will ignore limits or not', null),
        );
    }

    protected function getOption($name, $defaultValue)
    {
        $var = $this->option($name);

        if (is_null($var)) {
            return $defaultValue;
        }

        return $var;
    }

}