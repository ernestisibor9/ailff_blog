@extends('frontend.master')

@section('home')

@section('title')
    AILFF - Advert Page
@endsection

<style>
    h4 {
        text-align: center;
        font-size: 22px;
        font-weight: bold;
        color: #E83E8C;
        text-transform: uppercase;
        margin-bottom: 20px;
    }
    h5, h6 {
        font-weight: bold;
        color: #333;
        margin-top: 15px;
    }
    p {
        font-size: 16px;
        color: #555;
        line-height: 1.7;
    }
    table {
        margin-top: 15px;
        border-collapse: collapse;
    }
    table thead {
        background: ##E83E8C;
        color: #ffffff;
    }
    table th, table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
    }
    .highlight {
        font-weight: bold;
        color: ##E83E8C;
    }
    ul {
        list-style: none;
        padding-left: 0;
    }
    ul li {
        margin-bottom: 8px;
        font-size: 16px;
        color: #444;
    }
    .cta {
        background: #E83E8C;
        color: white;
        padding: 15px;
        margin-top: 25px;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        border-radius: 5px;
    }
    .cta strong {
        color: #fff700;
    }
    .footer {
        margin-top: 20px;
        text-align: center;
        font-style: italic;
        color: #777;
    }
</style>

<h4 class="mt-5">Adverts Placement</h4>

<div class="container mt-3 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h5>Revised Marketing Proposal: Banner Ads at AILFF’25 Website</h5>

            <h5>Why Advertise with AILFF’25?</h5>
            <p>
                The African Indigenous Language Film Festival (AILFF’25), scheduled for October 8–11, 2025, is a global
                platform celebrating African cultural heritage through film. With 500,000+ expected visitors from
                filmmakers, festival enthusiasts, and global audiences engaging with our thrice-weekly blog, your brand
                gains premium exposure to a culturally invested audience.
            </p>

            <h5>Ad Positions & Rates (NGN)</h5>
            <p>Maximize visibility with prime placements:</p>

            <table class="table">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Ad Size</th>
                        <th>Rate/Month</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Homepage Header</td>
                        <td>728x90 (Leaderboard)</td>
                        <td>₦ {{ number_format(500000, 2) }}</td>
                    </tr>
                    <tr>
                        <td>Sidebar</td>
                        <td>300x250 (Rectangle)</td>
                        <td>₦ {{ number_format(300000, 2) }}</td>
                    </tr>
                    <tr>
                        <td>Footer</td>
                        <td>336x280 (Rectangle)</td>
                        <td>₦ {{ number_format(250000, 2) }}</td>
                    </tr>
                </tbody>
            </table>

            <h5>Bundle Discount: All 3 placements for <span class="highlight">₦{{ number_format(840000, 2) }}/month</span> (save 20%).</h5>

            <h5>Benefits for Your Brand</h5>
            <ul>
                <li><span class="highlight">1. Global Audience:</span> Target filmmakers, cultural advocates, and creatives from 50+ countries.</li>
                <li><span class="highlight">2. Cultural Alignment:</span> Associate with UNESCO-endorsed diversity initiatives (boosts CSR appeal).</li>
                <li><span class="highlight">3. Digital Advantages:</span>
                    <ul>
                        <li>- SEO benefits from high-traffic backlinks.</li>
                        <li>- Monthly analytics (impressions, clicks, demographics).</li>
                    </ul>
                </li>
                <li><span class="highlight">4. Added Exposure:</span> Social media features (100k+ followers) and newsletter inclusion (50k+ subscribers).</li>
            </ul>

            <div class="cta">
                Act Now! Limited slots available. Contact <strong>info@ailff.com | +2348023141942</strong> by <strong>April 31st, 2025</strong> to secure your ad space.
            </div>

            <div class="footer">
                AILFF’25 – Amplifying African Stories, Connecting Cultures.
            </div>
        </div>
    </div>
</div>

@endsection
