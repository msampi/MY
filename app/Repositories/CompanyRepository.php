<?php

namespace App\Repositories;

use App\Models\Company;
use App\User;
use InfyOm\Generator\Common\BaseRepository;
use Mail;

class CompanyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone',
        'country',
        'sector',
        'email',
        'contact_name',
        'contact_city',
        'contact_address',
        'website'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Company::class;
    }
    
    private function randomKey($length) {
        $pool = array_merge(range(0,9), range('a', 'z'),range('A', 'Z'));
        $key = '';
        for($i=0; $i < $length; $i++) {
            $key .= $pool[mt_rand(0, count($pool) - 1)];
        }
        return $key;
    }

    
    public function create(array $data)
    {
        
        $password = 'demo123';
        
        $user = User::create([
            'name' => $data['contact_name'],
            'last_name' => $data['contact_last_name'],
            'email' => $data['email'],
            'user_type_id' => 2,
            'image' => $data['image'],
            'password' => bcrypt($password),
        ]);
        $data['user_id'] = $user->id;
        $company = parent::create($data);
        
        $user->company_id = $company->id;
        $user->save();
        
        
         $send = Mail::send(['html' => 'emails.welcome'], [ 'name' => $user->name, 'last_name' => $user->last_name, 'password' => true ], function($message) use ($user) 
                {
                      $message->from( 'info@magyates.com', 'Magyates' );
                      $message->to($user->email, $user->name.' '.$user->last_name)->subject('Welcome to Magyates.com');


                });
        
        return $company;
    }
    
    public function update(array $data, $id)
    {
        
        $company = parent::update($data, $id);
        $user = User::find($company->user_id);
        $user->name = $data['contact_name'];
        $user->last_name = $data['contact_last_name'];
        $user->email = $data['email'];
        if ($data['image'])
            $user->image = $data['image'];
        $user->save();

        return $company;
    }
}
