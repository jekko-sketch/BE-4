@extends('layouts.app')

@section('content')
    <div class="max-w-2xl">
        <div class="bg-surface-700 p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-4">Mijn Taken</h3>

            <form id="new-task-form" class="mb-6 flex gap-2">
                <input id="new-task-title" type="text" placeholder="Nieuwe taak..." 
                    class="flex-1 px-3 py-2 rounded bg-surface-800 text-slate-100" required />
                <button type="submit" class="px-4 py-2 bg-emerald-500 rounded hover:bg-emerald-600">
                    Toevoegen
                </button>
            </form>

            <ul id="tasks-list" class="space-y-3"></ul>
        </div>
    </div>
@endsection
