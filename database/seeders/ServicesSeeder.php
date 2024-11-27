<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'service_name' => '2D Ultrasound Cavitation + RF + Vacu Slimming Treatment',
            'service_description' => "Looking for a safe and effective way to achieve a slimmer figure without undergoing surgery? Are you looking to shed stubborn fat without going under the surgeon's scalpel? Our Ultrasound Cavitation, also known as Non-Invasive Liposuction, is the perfect solution for men and women seeking a safe and effective way to reduce unwanted fat. It is recommended to repeat the treatment twice a week throughout the slimming program.The best part? You can see results even after just one session. Imagine the possibilities with multiple sessions! The treatment is convenient and painless. It is a combination of Ultrasound Cavitation, Lymphatic drainage, and multipolar radiofrequency technology. Each session lasts only 45  minutes, allowing you to fit it into your busy schedule. With our experienced Slimming Consultant, you can receive personalized recommendations on the number of sessions needed to achieve your specific goals based on your body composition.",
            'service_price' => 700.00,
            'service_images' => [
                'https://totallytransformed.co.uk/wp-content/uploads/2024/03/2-1080x675.png',
                'https://www.konmison.com/wp-content/uploads/2023/08/image-36.png',
                'https://execmed.org/wp-content/uploads/2019/05/ultrasonic-cavitation-san-diego.jpeg',
                'https://vivoclinic.com/wp-content/uploads/2022/10/shutterstock_481572316-1-1.jpg',
                'https://static.wixstatic.com/media/3d8cef_78f3a9223b104559882396c8409fbf5f~mv2_d_2108_1244_s_2.jpg',
                'https://static.wixstatic.com/media/4c166c_7920c8f3a5694d768801b606368b632f~mv2.png',
                'https://cdn-5e625856f911c81cbcd612d6.closte.com/wp-content/uploads/2022/06/Ultrasonic-fat-cavitation-therapy.jpg',
                'https://eyecandybodycontouring.com/wp-content/uploads/2021/08/12-1.jpg',
            ],
            'service_video' => 'https://media.istockphoto.com/id/1765085439/video/vacuum-bipolar-and-multipolar-cavitation-treatment.mp4?s=mp4-640x640-is&k=20&c=CX_3etoeJ3NCvbLf_DRvhXQYrIx0plr9-u26e6Dq6Cs=',
            'service_benefits' => [
                'Destroy Fat Cells',
                'Leaves Surrounding Tissues Unharmed',
                '100% Safe and Non-invasive',
                'No Down Time',
                'No Discomfort or Pain',
            ],
            'service_rating' => 4.8,
            'service_reviews' => 120,
            'service_sale_tag' => 25,
            'category_id' => 2,
        ]);

        Service::create([
            'service_name' => 'Emerald Lipo Laser',
            'service_description' => "Embark on a transformative journey with Emerald Lipo Laser, a groundbreaking technology redefining the landscape of non-invasive and painless fat tissue dissolution. Say goodbye to stubborn fat through an advanced and innovative approach that sets the standard for effective body contouring.
Emerald Lipo Laser utilizes cutting-edge technology to target and dissolve fat tissues without the need for invasive procedures or discomfort. Experience a revolution in body sculpting as this state-of-the-art treatment harnesses the power of laser technology to precisely target and liquefy adipose deposits, leaving you with a more contoured and defined silhouette.
Step into a realm where innovation meets comfort. Unlike traditional methods, Emerald Lipo Laser ensures a painless experience, allowing you to achieve your desired results without the need for downtime or discomfort. The non-invasive nature of this treatment makes it a sought-after solution for those looking to enhance their body shape with ease.
Uncover the potential of Emerald Lipo Laser and witness a transformation that goes beyond the ordinary. This groundbreaking technology offers a safe, effective, and painless alternative for individuals seeking a non-invasive approach to dissolve stubborn fat tissues. Redefine your contours and embrace a more confident you with the Emerald Lipo Laser.",
            'service_price' => 1200.00,
            'service_images' => [
                'https://skinic.co/blog/wp-content/uploads/2022/02/photo-emeraldblog-2048x1583.jpg',
                'https://illuminateskinclinic.co.uk/wp-content/uploads/2024/06/2.png',
                'https://cdn.getthegloss.com/convert/files/2022/03/9cada7b0-9b2e-11ec-af5d-9d314eed0cf6-emerald-laser-aether-clinic.jpg/r%5Bwidth%5D=1920/9cada7b0-9b2e-11ec-af5d-9d314eed0cf6-emerald-laser-aether-clinic.webp',
                'https://skinic.co/blog/wp-content/uploads/2022/01/emerald-neck-picture.jpeg',
                'https://alorarejuvenation.com/wp-content/uploads/2022/08/Alora-Emerald-Laser.jpg',
                'https://rtaesthetics.co.uk/wp-content/uploads/2024/06/Emerald-Green-Laser-woman.jpg',
            ],
            'service_video' => 'https://emdhealth.net/wp-content/uploads/2024/04/EMERALD-LASER-Consultation_Rev1.mp4',
            'service_benefits' => [
                'No heating or freezing of the skin',
                'No pinching or bruising',
                'No incisions required',
                'No downtime',
                'No common side effects (discussed with your clinician)',
            ],
            'service_rating' => 4.5,
            'service_reviews' => 151,
            'service_sale_tag' => null,
            'category_id' => 1,
        ]);
    }
}
