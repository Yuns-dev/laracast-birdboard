<div class="card flex flex-col mt-3">
    <h3 class="text-xl py-3 pl-4 -ml-5 mb-3 border-l-4 border-blue-400">
        Invite a User
    </h3>

    <form method="post" action="{{$project->path() . '/invitations'}}">
        @csrf
        <div class="mb-3">
            <input
                type="email"
                name="email"
                class="border border-gray-500 rounded-lg w-full py-2 px-3"
                placeholder="Email address"
            />
        </div>
        <button type="submit" class="button">
            Invite
        </button>
    </form>
    @include('errors', ['bag' => 'invitations'])
</div>
