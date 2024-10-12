@extends('template')
@section('main_section')
    <h2>Update User</h2>

    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
        </div>
    
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="picture">Profile Picture:</label>
            <input type="file" id="picture" name="picture" class="form-control">
        </div>
    
        <div class="mb-3">
            <label class="form-label">Contact</label>
            <input type="text" name="contact" value="{{ old('contact', $user->contact) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea name="address" class="form-control" required>{{ old('address', $user->address) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Role</label>
            <select name="usertype" class="form-control" required>
                <option value="user" {{ old('usertype', $user->usertype) == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ old('usertype', $user->usertype) == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
    
@endsection
