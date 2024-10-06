@extends('template')
@section('main_section')

    @include('dashboard.includes.alerts')

    <div class="container">
        <div class="card col-12">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title mb-0">User List</h4>
            </div>
            <div class="card-body col-12">
                <table class="table table-hover table-responsive col-12">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Email</th>
                            <th scope="col" class="text-center">Picture</th>
                            <th scope="col" class="text-center">Contact</th>
                            <th scope="col" class="text-center">Usertype</th>
                            <th scope="col" class="text-center">Created At</th>
                            <th colspan="2" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td class="text-center">{{ $user->name }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('Profiles/pictures/' . $user->picture) }}"
                                         class="img-fluid rounded-circle" alt="Profile Picture"
                                         style="width: 150px; height: 150px;">
                                </td>
                                <td class="text-center">{{ $user->contact }}</td>
                                <td class="text-center">{{ $user->usertype }}</td>
                                <td class="text-center">{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
                                <td class="text-center" colspan="2"> <!-- Use colspan to span two columns -->
                                    <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-sm btn-primary me-2"> <!-- Added margin-end for spacing -->
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="{{ route('user.delete', $user->id) }}"
                                       class="btn btn-sm btn-danger delete-confirmation" data-id="{{ $user->id }}">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
