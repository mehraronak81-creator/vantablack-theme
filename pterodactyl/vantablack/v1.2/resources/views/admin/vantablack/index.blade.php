@extends('layouts.vantablack', ['navbar' => 'index', 'sideEditor' => true])

@section('title')
    Vantablack Theme
@endsection

@section('content')
    <form action="{{ route('admin.vantablack') }}" method="POST">
        <div class="header">
            <p>General settings</p>
            <span class="description-text">Change the general settings of Vantablack Theme.</span>
        </div>
        <div class="input-field hr">
            <label for="vantablack:logo">Panel logo</label>
            <input type="text" id="vantablack:logo" name="vantablack:logo" value="{{ old('vantablack:logo', $logo) }}" />
        </div>
        <div class="input-field hr">
            <label for="vantablack:logoHeight">Panel logo height</label>
            <input type="text" id="vantablack:logoHeight" name="vantablack:logoHeight" value="{{ old('vantablack:logoHeight', $logoHeight) }}" />
        </div>
        <div class="input-field hr">
            <label for="vantablack:fullLogo">Logo only</label>
            <select name="vantablack:fullLogo" value="{{ old('vantablack:fullLogo', $fullLogo) }}">
                <option value="false">Disable</option>
                <option value="true" @if(old('vantablack:fullLogo', $fullLogo) == 'true') selected @endif>Enable</option>
            </select>
            <small>Enable or disable the text next to the panel logo.</small>
        </div>
        <div class="input-field hr">
            <label for="vantablack:discord">Discord ID</label>
            <input type="text" id="vantablack:discord" name="vantablack:discord" value="{{ old('vantablack:discord', $discord) }}" />
            <small>Leave empty remove the discord link from your panel</small>
        </div>
        <div class="input-field hr">
            <label for="vantablack:support">Supportcenter</label>
            <input type="text" id="vantablack:support" name="vantablack:support" value="{{ old('vantablack:support', $support) }}" />
            <small>Leave empty to remove the support link from your panel</small>
        </div>
        <div class="input-field hr">
            <label for="vantablack:status">Status page</label>
            <input type="text" id="vantablack:status" name="vantablack:status" value="{{ old('vantablack:status', $status) }}" />
            <small>Leave empty to remove the support link from your panel</small>
        </div>
        <div class="input-field hr">
            <label for="vantablack:billing">Billing area</label>
            <input type="text" id="vantablack:billing" name="vantablack:billing" value="{{ old('vantablack:billing', $billing) }}" />
            <small>Leave empty to remove the support link from your panel</small>
        </div>
        <div class="floating-button">
            {!! csrf_field() !!}
            <button type="submit" class="button button-primary">Save changes</button>
        </div>
    </form>
@endsection