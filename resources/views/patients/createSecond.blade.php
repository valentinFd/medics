@extends('layouts.app')

@section('title', 'Create a Patient (2)')

@section('heading', 'Create a Patient (2)')

@section('content')
    <form method="post" action="/create2">
        @csrf
        <h1>Nose</h1>
        <div class="mb-3">
            <label for="mucousMembrane1" class="form-label">Mucous Membrane</label>
            <select class="form-select w-25" name="mucousMembrane1" id="mucousMembrane1" required>
                <option value="pink">Pink</option>
                <option value="hyperemic">Hyperemic</option>
                <option value="cyanotic">Cyanotic</option>
                <option value="pale" {{ session('noseForm') === 'straight' ? 'selected' : '' }}>Pale</option>
            </select>
            <select class="form-select w-25" name="mucousMembrane2" id="mucousMembrane2" required>
                <option value="swollen">Swollen</option>
                <option value="atrophic">Atrophic</option>
                <option value="hypertrophic" {{ session('noseForm') === 'straight' ? 'selected' : '' }}>Hypertrophic
                </option>
            </select>
        </div>
        <div class="mb-3">
            <p>Nasal Passages</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="clear" name="passages[]" value="clear">
                <label class="form-check-label" for="clear">Clear</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="narrowed" name="passages[]"
                       value="narrowed" {{ session('noseForm') === 'deformed' ? 'checked' : '' }}>
                <label class="form-check-label" for="narrowed">Narrowed</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="adhesionn" name="passages[]" value="adhesion">
                <label class="form-check-label" for="adhesionn">Adhesion</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="molding" name="passages[]" value="molding">
                <label class="form-check-label" for="molding">Molding</label>
            </div>
        </div>
        <div class="mb-3">
            <p>Phlegm</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="serous" name="phlegm[]" value="serous">
                <label class="form-check-label" for="serous">Serous</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="mucous" name="phlegm[]" value="mucous">
                <label class="form-check-label" for="narrowed">Muscous</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="purulent" name="phlegm[]" value="purulent">
                <label class="form-check-label" for="purulent">Purulent</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="bloody" name="phlegm[]" value="bloody">
                <label class="form-check-label" for="bloody">Bloody</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="septum" class="form-label">Nasal Septum</label>
            <select class="form-select w-25" name="septum" id="septum" required>
                <option value="straight">Straight</option>
                <option value="deviated">Deviated</option>
                <option value="perforated">Perforated</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="breathing" class="form-label">Nasal Breathing</label>
            <select class="form-select w-25" name="breathing" id="breathing" required>
                <option value="clear">Clear</option>
                <option value="labored">Labored</option>
            </select>
        </div>
        <h1>Oral Cavity</h1>
        <div class="mb-3">
            <p>Throat Mucous Membrane</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="pink" name="throat1[]" value="pink">
                <label class="form-check-label" for="pink">Pink</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="hyperemic" name="throat1[]" value="hyperemic">
                <label class="form-check-label" for="hyperemic">Hyperemic</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="cyanotic" name="throat1[]" value="cyanotic">
                <label class="form-check-label" for="cyanotic">Cyanotic</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="pale" name="throat1[]" value="pale">
                <label class="form-check-label" for="pale">Pale</label>
            </div>
        </div>
        <div class="mb-3">
            <p>Throat</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="swollen" name="throat2[]" value="swollen">
                <label class="form-check-label" for="swollen">Swollen</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="atrophic" name="throat2[]" value="atrophic">
                <label class="form-check-label" for="atrophic">Atrophic</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="hypertrophic" name="throat2[]" value="hypertrophic">
                <label class="form-check-label" for="hypertrophic">Hypertrophic</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="tonsils" class="form-label">Tonsils</label>
            <select class="form-select w-25" name="tonsils" id="tonsils" required>
                <option value="normal_size">Normal Size</option>
                <option value="increased">Increased</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tonsilStones" class="form-label">Tonsil Stones</label>
            <select class="form-select w-25" name="tonsilStones" id="tonsilStones" required>
                <option value="0">Yes</option>
                <option value="1">No</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
