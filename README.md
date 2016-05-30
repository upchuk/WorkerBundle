This is a demo bundle for the [Sitepoint article]() illustrating the use of custom Doctrine annotations in Symfony.

To get it going, clone this repo into the /src folder of your Symfony app and register the bundle like usual in your AppKernel:

```
// app/AppKernel.php
public function registerBundles()
{
    return array(
        // ...
        new WorkerBundle\WorkerBundle(),
        // ...
    );
}
```

Then configure your `parameters.yml` with the following options ():

```
worker_namespace: AppBundle\Workers
worker_directory: AppBundle/Workers
```

Replace `AppBundle\Workers` and `AppBundle/Workers` with your own option as needed. These are used to indicate where in your application the WorkerBundle should be looking for Workers.