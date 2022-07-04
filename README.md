# What is this?

Someone asked help in Symfony slack:

```
Anyone can help me with this: https://gist.github.com/tmac14/b5ebb4fc723761a44314fc231f53a08c 
--- Typed property App\Controller\Admin\AttachmentController::$slugger must not be accessed 
before initialization
```

I created this repository to try to reproduce that error, but looks like all works as
expected.

## Install

1. Clone this repository
2. Run `composer install`
3. Run `symfony serve`
4. Open `http://localhost:8000` in your browser
5. Profit that you see dumps about those paths and SluggerInterface

## License

MIt
