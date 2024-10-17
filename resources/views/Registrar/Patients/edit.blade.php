@extends('template')
@section('main_section')
    

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mt-5 mb-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h2>Edit Patient</h2>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('patient.update', $patient->id) }}" method="POST"> <!-- Update with your route -->
                    @csrf
                    @method('PATCH') <!-- Use PUT for updating -->
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">
                            <i class="bi bi-person-fill"></i> Name
                        </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $patient->name) }}" placeholder="Enter patient's full name" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contact" class="form-label">
                            <i class="bi bi-telephone-fill"></i> Contact
                        </label>
                        <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" value="{{ old('contact', $patient->contact) }}" placeholder="e.g. +1234567890" required>
                        @error('contact')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">
                            <i class="bi bi-geo-alt-fill"></i> Address
                        </label>
                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="3" placeholder="Enter complete address" required>{{ old('address', $patient->address) }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">
                            <i class="bi bi-gender-ambiguous"></i> Gender
                        </label>
                        <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="Male" {{ (old('gender', $patient->gender) == 'Male') ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ (old('gender', $patient->gender) == 'Female') ? 'selected' : '' }}>Female</option>
                            <option value="Other" {{ (old('gender', $patient->gender) == 'Other') ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">
                            <i class="bi bi-calendar-fill"></i> Age
                        </label>
                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age', $patient->age) }}" placeholder="Enter patient's age" required>
                        @error('age')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="disease" class="form-label">
                            <i class="bi bi-heart-pulse-fill"></i> Disease
                        </label>
                        <select class="form-select @error('disease') is-invalid @enderror" id="disease" name="disease" required>
                            <option value="">Select Diagnosed Disease</option>
                            <option value="Diabetes" {{ (old('disease', $patient->disease) == 'Diabetes') ? 'selected' : '' }}>Diabetes</option>
                            <option value="Hypertension" {{ (old('disease', $patient->disease) == 'Hypertension') ? 'selected' : '' }}>Hypertension</option>
                            <option value="Asthma" {{ (old('disease', $patient->disease) == 'Asthma') ? 'selected' : '' }}>Asthma</option>
                            <option value="Cardiovascular Disease" {{ (old('disease', $patient->disease) == 'Cardiovascular Disease') ? 'selected' : '' }}>Cardiovascular Disease</option>
                            <option value="COVID-19" {{ (old('disease', $patient->disease) == 'COVID-19') ? 'selected' : '' }}>COVID-19</option>
                            <option value="Cancer" {{ (old('disease', $patient->disease) == 'Cancer') ? 'selected' : '' }}>Cancer</option>
                            <option value="Arthritis" {{ (old('disease', $patient->disease) == 'Arthritis') ? 'selected' : '' }}>Arthritis</option>
                            <option value="Chronic Kidney Disease" {{ (old('disease', $patient->disease) == 'Chronic Kidney Disease') ? 'selected' : '' }}>Chronic Kidney Disease</option>
                            <option value="Alzheimer's Disease" {{ (old('disease', $patient->disease) == "Alzheimer's Disease") ? 'selected' : '' }}>Alzheimer's Disease</option>
                            <option value="Influenza" {{ (old('disease', $patient->disease) == 'Influenza') ? 'selected' : '' }}>Influenza</option>
                            <option value="Migraine" {{ (old('disease', $patient->disease) == 'Migraine') ? 'selected' : '' }}>Migraine</option>
                            <option value="Other" {{ (old('disease', $patient->disease) == 'Other') ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('disease')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="symptoms" class="form-label">
                            <i class="bi bi-clipboard2-heart"></i> Symptoms
                        </label>
                        <input type="text" class="form-control @error('symptoms') is-invalid @enderror" id="symptoms" name="symptoms" value="{{ old('symptoms', $patient->symptoms) }}" placeholder="Enter symptoms separated by commas, e.g., Fever, Cough, Headache" required>
                        @error('symptoms')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Enter multiple symptoms separated by commas.</small>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-50">
                            <i class="bi bi-check-circle"></i> Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
