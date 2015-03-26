# GNU: Terry Pratchett X-Clacks-Overhead Bundle

A Symfony bundle that adds the `X-Clacks-Overhead: GNU Terry Pratchett`` header to HTTP responses.

> “Do you not know that a man is not dead while his name is still spoken?”
> ? Terry Pratchett, Going Postal

In Going Postal, one of the last Discworld novels, the clacks (semaphore) system is "hacked" by operators (a bunch of
creative geeks) to carry names of people who died because of the clacks along in the messages' "overhead".

After Sir Terry passed away this march 2015, a [reddit thread was started](http://www.reddit.com/r/discworld/comments/2yt9j6/gnu_terry_pratchett/)
in order to keep Terry's name alive on the network. It soon derived in somebody publishing an [RFC for
Clacks & HTTP compatibility](https://github.com/clacks-overhead/clacks-protocol). Soon, a bunch of plugins emerged.

This is my Symfony2 version.

Of course, it is as easy to do it with one line of configuration of your web server, or add it to index.php. But does
it really matter ? :)

## Installation
Run `composer require bdunogier/gnu-terry-pratchett-bundle` from the root of a Symfony2 app.
