@extends('layout.app')

@section('main')
    <h1>Contact</h1>

    <article>
        <div>
            <a class="text-4xl font-hairline text-gray-700 hover:text-gray-800" href="email:me@fredesk.com">me@fredesk.com</a>
        </div>
        <hr>
        <form>
            <div>
                <label for="name" title="Name">Name</label>
                <input class="w-full" type="text">
            </div>
            <div>
                <label for="email" title="Email">Email</label>
                <input class="w-full" type="email">
            </div>
            <div>
                <label for="message">Message</label>
                <textarea class="w-full" name="message"></textarea>
            </div>
            <div>
                <button>Send</button>
            </div>
        </form>
    </article>


@endsection
