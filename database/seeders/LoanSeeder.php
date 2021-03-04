<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loan::truncate();

        Loan::create([
            'name' => 'Home Loan',
            'title' => 'Hassle-free finance',
            'slug' => 'home-loan',
            'description' => 'It’s hard to find the time to search and compare finance options when you’re busy running your business. Your Aussie Broker can find options from over 30 lenders^, leaving you free to focus on your business. We can help you with finance solutions for almost anything you need to increase production and capacity to help your business forge ahead. This includes:',
            'hero_title' => 'Help your business achieve its potential',
            'hero_desc' => 'Investing in new vehicles, machinery and equipment drives business growth. But it’s important to get the finance right.',
            'hero_image' => 'assets/images/loan/business-loan.png'
        ]);

        Loan::create([
            'name' => 'Car Loan',
            'title' => 'Hassle-free finance',
            'slug' => 'car-loan',
            'description' => 'It’s hard to find the time to search and compare finance options when you’re busy running your business. Your Aussie Broker can find options from over 30 lenders^, leaving you free to focus on your business. We can help you with finance solutions for almost anything you need to increase production and capacity to help your business forge ahead. This includes:',
            'hero_title' => 'Help your business achieve its potential',
            'hero_desc' => 'Investing in new vehicles, machinery and equipment drives business growth. But it’s important to get the finance right.',
            'hero_image' => 'assets/images/loan/business-loan.png'
        ]);

        Loan::create([
            'name' => 'Personal Loan',
            'title' => 'Hassle-free finance',
            'slug' => 'personal-loan',
            'description' => 'It’s hard to find the time to search and compare finance options when you’re busy running your business. Your Aussie Broker can find options from over 30 lenders^, leaving you free to focus on your business. We can help you with finance solutions for almost anything you need to increase production and capacity to help your business forge ahead. This includes:',
            'hero_title' => 'Help your business achieve its potential',
            'hero_desc' => 'Investing in new vehicles, machinery and equipment drives business growth. But it’s important to get the finance right.',
            'hero_image' => 'assets/images/loan/business-loan.png'
        ]);

        Loan::create([
            'name' => 'Business Loan',
            'title' => 'Hassle-free finance',
            'slug' => 'business-loan',
            'description' => 'It’s hard to find the time to search and compare finance options when you’re busy running your business. Your Aussie Broker can find options from over 30 lenders^, leaving you free to focus on your business. We can help you with finance solutions for almost anything you need to increase production and capacity to help your business forge ahead. This includes:',
            'hero_title' => 'Help your business achieve its potential',
            'hero_desc' => 'Investing in new vehicles, machinery and equipment drives business growth. But it’s important to get the finance right.',
            'hero_image' => 'assets/images/loan/business-loan.png'
        ]);

        Loan::create([
            'name' => 'Loan Refinance',
            'title' => 'Hassle-free finance',
            'slug' => 'loan-refinance',
            'description' => 'It’s hard to find the time to search and compare finance options when you’re busy running your business. Your Aussie Broker can find options from over 30 lenders^, leaving you free to focus on your business. We can help you with finance solutions for almost anything you need to increase production and capacity to help your business forge ahead. This includes:',
            'hero_title' => 'Help your business achieve its potential',
            'hero_desc' => 'Investing in new vehicles, machinery and equipment drives business growth. But it’s important to get the finance right.',
            'hero_image' => 'assets/images/loan/business-loan.png'
        ]);
    }
}
