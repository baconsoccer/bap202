<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function resetPassword()
    {
        return view(
        @extends('layouts.app')

        @section('content')

            <div class="container">
                <h1>Change Password</h1>

                <form action="">
                    @csrf
                    <div class="form-group">
                        <label for="">New password</label>
                        <input type="password" name="new_password" class="form-control" placeholder="Enter your new password"/>
                    </div>
                    <div class="form-group">
                        <label for="">New password again</label>
                        <input type="password" name="new_password_confirmation" class="form-control" placeholder="Confirm your password"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        );
    }
}