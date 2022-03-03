<?php

namespace App\Http\Controllers;

use App\Mail\CastingMail;
use App\Models\Casting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\String\toString;

class CastingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('includes.casting');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasfile('pics'))
        {
            foreach($request->file('pics') as $key => $file)
            {
                $path = $file->store('public/files');
                $name = $file->getClientOriginalName();

                $insert[$key]['name'] = $name;
                $insert[$key]['path'] = $path;

            }
        }

        $castingDb = new Casting();

            $castingDb->city = $request->city;
            $castingDb->childName = $request->childName;
            $castingDb->dateOfBirth = $request->dateOfBirth;
            $castingDb->parentName = $request->parentName;
            $castingDb->height = $request->height;
            $castingDb->weight = $request->weight;
            $castingDb->education = $request->education;
            $castingDb->nation = $request->nation;
            $castingDb->clothesSize = $request->clothesSize;
            $castingDb->bootsSize = $request->bootsSize;
            $castingDb->langs = $request->langs;
            $castingDb->musicSkills = $request->musicSkills;
            $castingDb->danceSkills = $request->danceSkills;
            $castingDb->sports = $request->sports;
            $castingDb->horseRiding = $request->horseRiding;
            $castingDb->mobilePhone = $request->mobilePhone;
            $castingDb->homePhone = $request->homePhone;
            $castingDb->parentPhone = $request->parentPhone;
            $castingDb->email = $request->email;
            $castingDb->insta = $request->insta;
            $castingDb->experience = $request->experience;
            $castingDb->episode = $request->episode;
            $castingDb->mass = $request->mass;

         $castingDb->save();

       $data=[
           'city' => $request->city,
           'childName' => $request->childName,
           'dateOfBirth' => $request->dateOfBirth,
           'parentName' => $request->parentName,
           'height' => $request->height,
           'weight' => $request->weight,
           'education' => $request->education,
           'nation' => $request->nation,
           'clothesSize' => $request->clothesSize,
           'bootsSize' => $request->bootsSize,
           'langs' => $request->langs,
           'musicSkills' => $request->musicSkills,
           'danceSkills' => $request->danceSkills,
           'sports' => $request->sports,
           'horseRiding' => $request->horseRiding,
           'mobilePhone' => $request->mobilePhone,
           'homePhone' => $request->homePhone,
           'parentPhone' => $request->parentPhone,
           'email' => $request->email,
           'insta' => $request->insta,
           'experience' => $request->experience,
           'episode' => $request->episode,
           'mass' => $request->mass,
           'path' => $insert
       ];

        $phpWord = new \PhpOffice\PhpWord\PhpWord();


        $section = $phpWord->addSection();

        $description = "
            Новая анкеты с сайта <w:br/>
            Город проживания: ". $data['city']." <w:br/>
            ФИО ребенка: ".$data['childName']." <w:br/>
            Год рождения: ".$data['dateOfBirth']."<w:br/>
            ФИО родителей:  ".$data['parentName']." <w:br/>
            Рост:  ".$data['height']." <w:br/>
            Вес: ".$data['weight']." <w:br/>
            Образование: ".$data['education']." <w:br/>
            Национальность: ".$data['nation']." <w:br/>
            Размер одежды:  ".$data['clothesSize']." <w:br/>
            Размер обуви:  ".$data['bootsSize']." <w:br/>
            Знание языков: ".$data['langs']." <w:br/>
            Музыкальные навыки:  ".$data['musicSkills']." <w:br/>
            Танцевальные навыки: ".$data['danceSkills']." <w:br/>
            Какой вид спорта:  ".$data['sports']." <w:br/>
            Умеете скакать на лошади:  ".$data['horseRiding']." <w:br/>
            Мобильный телефон: ".$data['mobilePhone']." <w:br/>
            Домашний телефон:  ".$data['homePhone']." <w:br/>
            Контакты родителей: ".$data['parentPhone']." <w:br/>
            Е-mail:  ".$data['email']." <w:br/>
            Логин INSTAGRAM:  ".$data['insta']."<w:br/>
            В прошлом принимали ли Вы участие в съемках рекламы, клипов или кино?( уточните ): ".$data['experience']." <w:br/>
            Готовы ли Вы принимать участие в  эпизодах?: ".$data['episode']." <w:br/>
            Готовы ли Вы принимать участие в массовке?: ".$data['mass']." <w:br/>";


        $section->addText($description);
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path($data['childName'].'.docx'));
        } catch (Exception $e) {
        }

        Mail::to('casting.jambyl@gmail.com')->send(new CastingMail($data));

        foreach ($data['path'] as $file){
            Storage::delete($file['path']);

           // unlink(storage_path() . '/app/' .$file['path']);
        }
        Storage::delete(storage_path($data['childName'].'.docx'));
        return redirect('casting')->with('status', 'Загрузка анкеты прошла успешно!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
