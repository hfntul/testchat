<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'id_pasien', 'nim', 'mayor', 'fakultas', 'kode_strata', 'jenis_kelamin', 'umur', 'no_bpjs', 'goldar', 'no_hp', 'alamat',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rm()
        {
            return $table->hasMany('\App\RekamMedis');
        }

        public function messages()
        {
          return $this->hasMany(Message::class);
        }
}
