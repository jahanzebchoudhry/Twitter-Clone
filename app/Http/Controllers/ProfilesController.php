<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->paginate(4)
        ]);
    }

    public function edit(User $user)
    {
        //ONE way of not allowing current user not to edit followed users
        // if ($user->isNot(current_user())) {
        //     abort(404);
        // }

        //SECOND way of not allowing current user not to edit followed users
        // abort_if($user->isNot(current_user()), 404);

        //THIRD way of not allowing current user not to edit followed users USING POLICY(USER POLICY)
        // $this->authorize('edit', $user);

        //Alternatively Use the authorization in Route file

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => ['string', 'required', 'max:255'],
            'username' => ['string', 'required', 'max:255', '', Rule::unique('users')->ignore($user)],
            'email' => ['required', 'string', 'max:255'],
            'avatar' => ['file'],
            'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed'],
        ]);

        if (request('avatar')) {
            $data['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($data);
        return redirect($user->path());
    }
}
