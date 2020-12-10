<?php

namespace App\Models {

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Subject extends Model
    {
        use HasFactory;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'user_id',
            'name',
            'color',
        ];

        /**
         * The attributes that should be cast to native types.
         *
         * @var array
         */
        protected $casts = [
            'id' => 'integer',
            'user_id' => 'integer',
        ];

        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function exam()
        {
            return $this->hasMany(Exam::class, "subject_id", "id");
        }

        public function work()
        {
            return $this->hasMany(Work::class, "subject_id", "id");
        }
    }
}
