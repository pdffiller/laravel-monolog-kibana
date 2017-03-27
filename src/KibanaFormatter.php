<?php

namespace PDFfiller\LaravelMonologKibana;

use PDFfiller\Monolog\Formatter\LogFileFormatter;
use PDFfiller\Monolog\Helpers\FieldsHelper;

/**
 * Serializes a log message to custom Logstash Event Format
 *
 * @see http://logstash.net/
 * @see https://github.com/logstash/logstash/blob/master/lib/logstash/event.rb
 *
 * @author Anton Balandin <anbalandin@gmail.com>
 * @author Valentin Nikolaev <nikolaev.valentin@gmail.com>
 */
class KibanaFormatter extends LogFileFormatter
{
    /**
     * @var string an application name for the Logstash log message, used to fill the @type field
     */
    protected $applicationName;


    /**
     * @param string $applicationName the application that sends the data, used as the "type" field of logstash
     * @param array $options especial options for LogFileFormatter
     */
    public function __construct($applicationName, array $options = [])
    {
        $this->applicationName = $applicationName;
        parent::__construct($options);
    }

    /**
     * @param array $record
     * @return array
     */
    public function prepareLogRecord(array $record)
    {
        $record = parent::prepareLogRecord($record);
        $record['channel'] = FieldsHelper::prepareChannel($this->applicationName);
        return $record;
    }
}
