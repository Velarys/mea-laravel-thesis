<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="../../../../MeaNew/app/Http/Controllers/Auth/AuthController">
    {!! csrf_field() !!}
    <table>
        <tr>
            <td>
                <div class="float:left">First Name</div>
                <div class="float:right"><input type="text" name="firstname" value="{{ old('firstname') }}"></div>
            </td>
            <td>
                <div class="float:left">Last Name</div>
                <div class="float:right"><input type="text" name="lastname" value="{{ old('lastname') }}"></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="float:left">Sex</div>
                <div class="float:right"><input type="text" name="sex" value="{{ old('sex') }}"></div>
            </td>
            <td>
                <div class="float:left">Birthdate</div>
                <div class="float:right"><input type="date" name="birthdate" value="{{ old('birthdate') }}"></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="float:left">Address</div>
                <div class="float:right"><input type="text" name="address" value="{{ old('address') }}"></div>
            </td>
            <td>
                <div class="float:left">Level of Education</div>
                <div class="float:right"><input type="text" name="levelofeducation" value="{{ old('levelofeducation') }}"></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="float:left">Email</div>
                <div class="float:right"><input type="email" name="email" value="{{ old('email') }}"></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="float:left">Password</div>
                <div class="float:right"><input type="password" name="password"></div>
            </td>
            <td>
                <div class="float:left">Confirm Password</div>
                <div class="float:right"><input type="password" name="password_confirmation"></div>
            </td>
        </tr>
    </table>
    
    <div>
        <button type="submit">Register</button>
    </div>
</form>
    <!--
    <div>
        First Name
        <input type="text" name="firstname" value="{{ old('firstname') }}">
    </div>

    <div>
         Last Name
        <input type="text" name="lastname" value="{{ old('lastname') }}">
    </div>

     <div>
         Sex
        <input type="text" name="sex" value="{{ old('sex') }}">
    </div>

       <div>
         Birthdate
        <input type="date" name="birthdate" value="{{ old('birthdate') }}">
    </div>

    <div>
         Address
        <input type="text" name="address" value="{{ old('address') }}">
    </div>

    <div>
         Level of Education
        <input type="text" name="levelofeducation" value="{{ old('levelofeducation') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>
    -->