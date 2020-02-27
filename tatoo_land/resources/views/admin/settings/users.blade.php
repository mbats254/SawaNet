@extends('admin.settings.app')
@section('settings')
    <div class="content">
        <h5>Users</h5>

        <table class="table mt-4">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Verified</th>
                <th>Admin</th>
                <th>Joined</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                @php $verified = ($user->hasVerifiedPhone() && $user->hasVerifiedEmail()) @endphp
                <tr @if($user->admin) class="font-weight-bold" @endif
                @if($verified) class="text-success" @endif>
                    <td><i>{{ @++$i }}</i></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        {{ $verified ? 'Yes' : 'No' }}
                    </td>
                    <td>{{ $user->admin ? 'Yes' : 'No' }}</td>
                    <td>{{ $user->created_at->format('M d, H:i') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    </div>
@endsection