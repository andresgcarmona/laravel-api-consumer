<?php

    use Illuminate\Foundation\Application;
    use Optimus\ApiConsumer\Provider\LaravelServiceProvider;
    use Mockery as m;

class LaravelServiceProviderTest extends Orchestra\Testbench\TestCase {

    public function testServiceProviderIsWorking()
    {
        $appMock = m::mock(Application::class);

        /*$appMock->shouldReceive('singleton')->with(
            'apiconsumer',
            m::type('Closure')
        );*/

        $provider = $this->app->make(LaravelServiceProvider::class);

        $this->assertNull($provider->register());
        $provider->boot();
    }
    
}
