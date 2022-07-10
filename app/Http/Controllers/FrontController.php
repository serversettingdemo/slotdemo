<?php

namespace App\Http\Controllers;

use App\Models\Gamelist;
use App\Models\Homedesc;
use App\Models\Slotpgsoft;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class FrontController extends Controller
{
    public function home()
    {
        // max deskripsi 100-140
        SEOMeta::setCanonical(route('homepage'));
        SEOMeta::setDescription('Pragmatic Slot Demo permainan slot bisa anda mainkan secara gratis tanpa harus melakukan pendaftaran terlebih dahulu tanpa menggunakan uang asli dengan puluhan permainan tersedia');
        SEOMeta::addKeyword([
            'slot gacor', 'slot game', 'slot game gacor', 'game gacor', 'game demo',
            'slot game demo', 'slot judi online', 'judi online', 'judi online demo'
        ]);
        OpenGraph::setDescription('Pragmatic Slot Demo permainan slot bisa anda mainkan secara gratis tanpa harus melakukan pendaftaran terlebih dahulu tanpa menggunakan uang asli dengan puluhan permainan tersedia');
        OpenGraph::setTitle('Pragmatic - Game Slot Demo Pragmatic Play Tanpa Deposit');
        OpenGraph::setUrl(route('homepage'));
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'id_ID');
        OpenGraph::addProperty('locale:alternate', ['id_ID']);

        return view('frontend.landing', [
            'title' => "Pragmatic - Game Slot Demo Pragmatic Play Tanpa Deposit",
            'gamelist' => Gamelist::all(),
            'homedesc' => Homedesc::first()
        ]);
    }

    public function gamelist_show(Gamelist $gamelist)
    {
        // View Page Count, by 7 day +1
        $expireAt = now()->addDay(7);
        views($gamelist)->cooldown($expireAt)->record();

        // max deskripsi 100-140
        SEOMeta::setCanonical(route('gamelistshow', $gamelist->slug));
        SEOMeta::setDescription('Pragmatic Slot Demo permainan slot bisa anda mainkan secara gratis tanpa harus melakukan pendaftaran terlebih dahulu tanpa menggunakan uang asli dengan puluhan permainan tersedia');
        SEOMeta::addKeyword([
            'slot gacor', 'slot game', 'slot game gacor', 'game gacor', 'game demo',
            'slot game demo', 'slot judi online', 'judi online', 'judi online demo'
        ]);
        OpenGraph::setDescription('Pragmatic Slot Demo permainan slot bisa anda mainkan secara gratis tanpa harus melakukan pendaftaran terlebih dahulu tanpa menggunakan uang asli dengan puluhan permainan tersedia');
        OpenGraph::setTitle($gamelist->title);
        OpenGraph::setUrl(route('gamelistshow', $gamelist->slug));
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'id_ID');
        OpenGraph::addProperty('locale:alternate', ['id_ID']);

        return view('frontend.gamelist.show', [
            'title' => $gamelist->title,
            'gamelist' => $gamelist
        ]);
    }

    public function pgsoft()
    {
         // max deskripsi 100-140
         SEOMeta::setCanonical(route('pgsoft'));
        SEOMeta::setDescription('Pragmatic Slot Demo permainan slot bisa anda mainkan secara gratis tanpa harus melakukan pendaftaran terlebih dahulu tanpa menggunakan uang asli dengan puluhan permainan tersedia');
        SEOMeta::addKeyword([
            'slot gacor', 'slot game', 'slot game gacor', 'game gacor', 'game demo',
            'slot game demo', 'slot judi online', 'judi online', 'judi online demo'
        ]);
        OpenGraph::setDescription('Pragmatic Slot Demo permainan slot bisa anda mainkan secara gratis tanpa harus melakukan pendaftaran terlebih dahulu tanpa menggunakan uang asli dengan puluhan permainan tersedia');
        OpenGraph::setTitle('Slot Demo Pg Soft');
        OpenGraph::setUrl(route('pgsoft'));
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'id_ID');
        OpenGraph::addProperty('locale:alternate', ['id_ID']);

        return view('frontend.pgsoft.index', [
            'title' => "Demo Slot Pg Soft",
            'pgsoft' => Slotpgsoft::all(),
            'homedesc' => Homedesc::first()
        ]);
    }

    public function pgsoft_show(Slotpgsoft $slotpgsoft)
    {
        // View Page Count, by 7 day +1
        $expireAtpgsoft = now()->addDay(7);
        views($slotpgsoft)->cooldown($expireAtpgsoft)->record();

        // max deskripsi 100-140
        SEOMeta::setCanonical(route('pgsoftshow', $slotpgsoft->slug));
        SEOMeta::setDescription('Pragmatic Slot Demo permainan slot bisa anda mainkan secara gratis tanpa harus melakukan pendaftaran terlebih dahulu tanpa menggunakan uang asli dengan puluhan permainan tersedia');
        SEOMeta::addKeyword([
            'slot gacor', 'slot game', 'slot game gacor', 'game gacor', 'game demo',
            'slot game demo', 'slot judi online', 'judi online', 'judi online demo'
        ]);
        OpenGraph::setDescription('Pragmatic Slot Demo permainan slot bisa anda mainkan secara gratis tanpa harus melakukan pendaftaran terlebih dahulu tanpa menggunakan uang asli dengan puluhan permainan tersedia');
        OpenGraph::setTitle($slotpgsoft->title);
        OpenGraph::setUrl(route('pgsoftshow', $slotpgsoft->slug));
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'id_ID');
        OpenGraph::addProperty('locale:alternate', ['id_ID']);

        return view('frontend.pgsoft.show', [
            'title' => $slotpgsoft->title,
            'slotpgsoft' => $slotpgsoft
        ]);
    }
}
