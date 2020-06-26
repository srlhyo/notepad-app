<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{

    public function index()
    {
        $notes = Note::all();
        return view('notes.index', ['notes' => $notes]);
    }

    public function show(Note $note)
    {
        return view('notes.show', ['note' => $note]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Note $note)
    {
        $note->create($this->validateNote());

        return redirect('/notes');
    }

    public function edit(Note $note)
    {
        return view('notes.edit', ['note' => $note]);
    }

    public function update(Note $note)
    {
        $note->update($this->validateNote());

        return redirect('/notes/' . $note->id);
    }

    public function destroy(Note $note)
    {
        $note->destroy($note->id);

        return redirect('/notes');
    }

    public function validateNote()
    {
        return request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
    }
}
