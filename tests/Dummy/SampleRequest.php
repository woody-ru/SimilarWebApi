<?php
namespace Thunder\SimilarWebApi\Tests\Dummy;

use Thunder\SimilarWebApi\AbstractRequest;

class SampleRequest extends AbstractRequest
    {
    public function __construct()
        {
        $this->args['invalid'] = $this->validateArg('invalid', null);
        }

    public function getName() { return null; }
    public function getUrl() { return null; }
    public function getMapping() { return null; }
    }
