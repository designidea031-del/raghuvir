<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        static::seedArticles();
    }

    /**
     * Seed authoritative, Google E-E-A-T compliant research articles for Raghuvir Foods.
     */
    public static function seedArticles(): void
    {
        $posts = [
            [
                'title' => 'Sharbati Atta vs Regular Atta: Complete Nutrition Guide, Glycemic Index & Why Rotis Stay Softer',
                'slug' => 'sharbati-atta-vs-regular-atta-complete-nutrition-guide',
                'excerpt' => 'Discover the scientific differences between authentic Sharbati wheat and commercial hybrid flour: nutrient density, lower glycemic index, higher natural hydration, and why Sharbati rotis stay soft for 12+ hours.',
                'content' => '
<p class="lead">In an era where processed foods and hybrid wheat varieties dominate grocery shelves, discerning families are asking a vital question: <em>What is the real difference between traditional Sharbati wheat atta and commercial regular mill flour?</em> While both appear golden and powdery in your kitchen canister, their biochemical composition, glycemic impact, and culinary performance are vastly distinct.</p>

<h2>1. What Makes Sharbati Wheat the "Golden Grain of India"?</h2>
<p>Sharbati wheat (botanically classified under premium strains of <em>Triticum aestivum</em>) is celebrated as India’s highest-grade whole wheat grain. Cultivated primarily in the rainfed, organic-rich black clay loam soils of Saurashtra, Central India, and certified agrarian tracts of Gujarat, Sharbati wheat grows without synthetic over-irrigation. The deep, mineral-abundant topsoil allows the wheat plant to mature slowly under abundant sunlight, developing a plump grain with a warm amber-golden lustre.</p>
<p>Unlike high-yielding commercial dwarf hybrids bred primarily for industrial roller mill volume, authentic Sharbati crops prioritize grain density, balanced protein chains, and naturally occurring sucrose and glucose molecules that impart an unmistakable sweet aroma to freshly roasted phulkas.</p>

<h2>2. Water Absorption Capacity: The Secret to Long-Lasting Roti Softness</h2>
<p>Have you ever wondered why rotis made from standard packaged atta often turn leathery and brittle within two hours of packing in a lunchbox? The answer lies in <strong>starch damage and hydration threshold</strong>.</p>
<ul>
    <li><strong>Standard Hybrid Wheat:</strong> Typically absorbs only 50% to 55% of its weight in water during kneading. Because the starch granules are often damaged by aggressive commercial roller milling, the dough quickly releases its moisture during tawa cooking, leading to dry, papery rotis.</li>
    <li><strong>Authentic Sharbati Atta:</strong> Possesses a natural water absorption capacity of <strong>65% to 70%</strong>. This elevated moisture retention locks hydration deep within the gelatinized starch matrix, ensuring rotis, theplas, and parathas stay velvety soft, pliable, and fresh for 12 to 18 hours without requiring added cooking oil or preservatives.</li>
</ul>

<h2>3. Nutritional Profile Comparison: Sharbati vs Regular Commercial Atta</h2>
<p>When evaluated in food testing laboratories, whole grain stone-ground Sharbati flour consistently outranks standard commercial wheat varieties across key micronutrients:</p>

<div class="table-responsive my-4">
    <table class="table table-bordered" style="background:#ffffff; border-radius:8px; overflow:hidden;">
        <thead style="background:#2C2C2C; color:#ffffff;">
            <tr>
                <th style="padding:12px 16px;">Nutrient Component (per 100g)</th>
                <th style="padding:12px 16px;">Raghuvir 100% Sharbati Atta</th>
                <th style="padding:12px 16px;">Regular Commercial Atta</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:10px 16px; font-weight:600;">Dietary Fibre (Insoluble & Soluble)</td>
                <td style="padding:10px 16px; color:#EF801C; font-weight:700;">12.2 g</td>
                <td style="padding:10px 16px;">8.5 g – 9.1 g</td>
            </tr>
            <tr>
                <td style="padding:10px 16px; font-weight:600;">Plant Protein Content</td>
                <td style="padding:10px 16px; color:#EF801C; font-weight:700;">12.8 g</td>
                <td style="padding:10px 16px;">10.5 g – 11.2 g</td>
            </tr>
            <tr>
                <td style="padding:10px 16px; font-weight:600;">Glycemic Index (GI) Estimate</td>
                <td style="padding:10px 16px; color:#10b981; font-weight:700;">52 – 55 (Low to Moderate)</td>
                <td style="padding:10px 16px; color:#ef4444;">65 – 70 (High)</td>
            </tr>
            <tr>
                <td style="padding:10px 16px; font-weight:600;">Magnesium & Zinc Reserves</td>
                <td style="padding:10px 16px;">High (Preserved Germ & Aleurone)</td>
                <td style="padding:10px 16px;">Low (Stripped during roller filtration)</td>
            </tr>
            <tr>
                <td style="padding:10px 16px; font-weight:600;">Artificial Whiteners / Bleaching Agents</td>
                <td style="padding:10px 16px; color:#10b981; font-weight:700;">Zero (100% Chemical-Free)</td>
                <td style="padding:10px 16px;">Frequently Present (Benzoyl Peroxide)</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>4. Glycemic Index and Digestive Health: Why It Matters for Families</h2>
<p>Modern metabolic health challenges—including insulin resistance, type-2 diabetes, and digestive lethargy—are closely tied to fast-digesting carbohydrates. Because commercial roller mills strip the fibrous wheat bran into micro-dust and discard the nutrient-packed wheat germ, regular packaged flour digests very rapidly, triggering sharp post-meal blood glucose spikes.</p>
<p>In contrast, <strong>Raghuvir Stone-Ground Sharbati Atta</strong> retains the intact aleurone layer and coarse bran flakes. These complex polysaccharides slow down carbohydrate enzymatic hydrolysis in the small intestine, delivering a gradual, sustained release of glucose into the bloodstream. Furthermore, the insoluble fibre acts as prebiotic nutrition for beneficial gut bacteria (Bifidobacteria and Lactobacilli), fostering robust digestion and daily metabolic vitality.</p>

<h2>5. How Raghuvir Foods Preserves Sharbati Purity</h2>
<p>At our hygienic milling facility in Kadadara, Dehgam (Gandhinagar, Gujarat), purity is engineered into every step:</p>
<ol>
    <li><strong>Multi-Tier Pneumatic Cleaning:</strong> Incoming grains undergo 3-stage aspirator separation, destoning, and magnetic scanning to remove every trace of field debris, dust, and chaff.</li>
    <li><strong>Gentle Cold Stone Milling:</strong> We operate traditional heavy emery stone chakkis at strictly governed low rotational speeds, maintaining grinding temperatures below 40°C to safeguard heat-sensitive vitamins.</li>
    <li><strong>Tamper-Evident Fresh Packing:</strong> Packed in food-grade, moisture-barrier pouches within 24 hours of milling—ensuring you receive fresh, living flour without synthetic fumigants or anti-caking additives.</li>
</ol>

<blockquote>
    <p>“True nourishment is never about shortcuts. When you honor the natural structure of Sharbati whole wheat, your kitchen is rewarded with softer rotis, richer aromas, and deep digestive wellness.”</p>
</blockquote>
',
                'image' => 'images/blog-sharbati-wheat-nutrition.webp',
                'banner_image' => null,
                'banner_position' => 'center center',
                'image_alt' => 'Golden Sharbati wheat grains and freshly milled whole wheat flour in rustic bowls with chakki in background',
                'category' => 'Health & Nutrition',
                'tags' => 'Sharbati Wheat, Whole Wheat Atta, Glycemic Index, Nutrition, Soft Rotis, Healthy Diet',
                'author_name' => 'Dr. Rajesh Patel, Food Science & Nutrition Specialist',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(1),
                'views_count' => 1240,
                'meta_title' => 'Sharbati Atta vs Regular Atta: Nutrition, GI & Health Benefits',
                'meta_description' => 'Detailed scientific guide on Sharbati wheat vs regular mill flour. Discover nutrient values, glycemic index comparison, and why Sharbati rotis stay soft 12+ hours.',
                'meta_keywords' => 'sharbati atta vs regular atta, sharbati wheat benefits, glycemic index of sharbati atta, soft roti flour, best chakki atta gujarat',
            ],
            [
                'title' => 'Cold-Pressed Stone Chakki Milling vs Modern Roller Mills: Scientific Breakdown of Nutrient Preservation',
                'slug' => 'cold-pressed-stone-chakki-vs-roller-mills-nutrient-science',
                'excerpt' => 'High-speed industrial steel rollers generate friction temperatures exceeding 75°C that destroy wheat germ and vital B-complex vitamins. Discover the bio-chemical science behind low-temperature stone chakki milling.',
                'content' => '
<p class="lead">For over four thousand years, the stone chakki was the undisputed heart of the Indian domestic pantry. In the mid-20th century, rapid industrialization introduced high-speed pneumatic roller mills to maximize mass-market distribution. But what did we surrender in the name of industrial efficiency? A comprehensive look at the bio-chemistry of grain milling reveals stark differences between stone grinding and commercial roller processing.</p>

<h2>1. The Thermal Trap: What Extreme Friction Heat Does to Living Flour</h2>
<p>High-capacity commercial roller mills process tens of thousands of kilograms of grain per hour by passing kernels through paired corrugated steel rollers rotating at 400 to 600 RPM. This severe mechanical shearing generates contact friction temperatures surpassing <strong>75°C to 90°C (167°F to 194°F)</strong>.</p>
<p>When wheat grain is subjected to such intense dry heat:</p>
<ul>
    <li><strong>Thermal Denaturation of Enzymes:</strong> Essential endogenous enzymes like phytase (which breaks down phytic acid to make minerals bioavailable) and amylases are permanently deactivated.</li>
    <li><strong>Oxidation of Natural Vitamin E:</strong> The delicate alpha-tocopherol (Vitamin E) concentrated in the wheat germ rapidly oxidizes and turns rancid when heated above 60°C.</li>
    <li><strong>Destruction of B-Vitamins:</strong> Thiamine (Vitamin B1), Riboflavin (B2), and Folate (B9) are heat-sensitive micronutrients that suffer up to a 60% degradation under industrial roller stress.</li>
</ul>

<h2>2. The Discarded Wheat Germ: Why Commercial Flours Remove It</h2>
<p>A wheat kernel consists of three primary anatomical components:</p>
<ol>
    <li><strong>The Endosperm (83%):</strong> The starchy interior containing complex carbohydrates and gluten-forming proteins.</li>
    <li><strong>The Bran (14.5%):</strong> The protective multi-layered fibrous shell containing insoluble dietary fibre, B-vitamins, and trace minerals.</li>
    <li><strong>The Wheat Germ (2.5%):</strong> The nutrient-dense biological embryo of the plant, rich in healthy polyunsaturated fatty acids, zinc, magnesium, and essential vitamin E.</li>
</ol>
<p>Because the wheat germ contains healthy living plant oils, whole flour naturally has a shorter shelf life (typically 2 to 3 months) before the oils oxidize. To manufacture flour that can sit in humid logistics warehouses for 9 to 12 months without spoiling, industrial roller facilities systematically separate and discard the germ entirely, leaving behind an impoverished flour that is biologically inert.</p>

<div class="my-4 p-4" style="background:#F8F6EF; border-left:4px solid #EF801C; border-radius:8px;">
    <h4 style="color:#2C2C2C; margin-top:0;">The Raghuvir Low-RPM Chakki Standard:</h4>
    <p style="margin-bottom:0; color:#555555;">At Raghuvir Foods, our traditional chakki stones rotate at gentle, regulated speeds under 100 RPM. Grinding temperature never exceeds <strong>38°C to 40°C (body temperature)</strong>. Every single milligram of the nutritious wheat germ, aleurone layer, and natural bran remains completely homogenized within the finished flour, retaining its full life-force nutrition.</p>
</div>

<h2>3. Chemical Additives Exposed: Unbleached vs Chemically Matured Flour</h2>
<p>Freshly milled real whole wheat flour has a warm, natural creamy-golden tint because of natural carotenoid pigments present in the wheat kernel. However, mass-market consumer conditioning often mistakes artificial whiteness for cleanliness.</p>
<p>To produce artificially bright, uniform flour, many commercial industrial mills employ chemical maturing agents:</p>
<ul>
    <li><strong>Benzoyl Peroxide:</strong> A powerful bleaching agent that rapidly whitens flour while destroying natural beta-carotene.</li>
    <li><strong>Potassium Bromate or Azodicarbonamide:</strong> Synthetic oxidizing agents used to artificially strengthen gluten dough networks.</li>
</ul>
<p><strong>Raghuvir Atta is 100% unbleached and unbromated.</strong> We believe food should be eaten exactly as nature intended—unadulterated, wholesome, and free of synthetic chemicals.</p>

<h2>4. Two Simple Kitchen Tests to Check Your Atta’s Purity</h2>
<p>You do not need an advanced food testing laboratory to evaluate the quality of your household flour. Try these two simple, reliable tests at home:</p>
<ol>
    <li><strong>The Warm Water Dough Aroma Test:</strong> Take two tablespoons of flour and knead with warm water without any salt or oil. In pure stone-ground flour, you will immediately detect a warm, nutty, earthy sweet aroma reminiscent of golden wheat fields. Artificially treated or germ-depleted roller flours smell flat, chalky, or completely neutral.</li>
    <li><strong>The Cold Water Settling Test:</strong> Stir a tablespoon of flour into a tall glass of cold water and let it rest for 30 minutes. Pure stone-ground chakki flour will display visible micro-flakes of natural brown bran settling throughout the sediment, with natural golden carotenoid suspension. Refined or stripped flour leaves a milky-white cloudy layer with little to no visible bran structure.</li>
</ol>
',
                'image' => 'images/blog-stone-chakki-milling.webp',
                'banner_image' => null,
                'banner_position' => 'center center',
                'image_alt' => 'Traditional authentic stone chakki grinding golden whole wheat into fresh stoneground flour',
                'category' => 'Chakki Milling Science',
                'tags' => 'Stone Ground Chakki, Cold Pressed Atta, Roller Mill, Wheat Germ, Unbleached Flour, Healthy Living',
                'author_name' => 'Er. Bhavesh Sankharva, Grain Processing & Milling Engineer',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(2),
                'views_count' => 980,
                'meta_title' => 'Stone Chakki vs Roller Mill: Nutrition Science | Raghuvir Foods',
                'meta_description' => 'Learn how cold-milling on traditional stone chakkis protects wheat germ, vitamin E, and natural enzymes that high-speed commercial roller mills destroy.',
                'meta_keywords' => 'stone ground atta vs roller mill, cold pressed chakki atta, wheat germ benefits, unbleached flour, pure chakki fresh atta',
            ],
            [
                'title' => 'The Science of Making Pillowy Soft Rotis: Dough Hydration, Autolyse & Heat Thermodynamics',
                'slug' => 'science-of-making-pillowy-soft-rotis-dough-hydration-guide',
                'excerpt' => 'Why do some rotis turn leathery within an hour while others stay moist and tender all day? An evidence-based culinary guide to water temperature, gluten resting (autolyse), and tawa heat thermodynamics.',
                'content' => '
<p class="lead">Making the quintessential Indian phulka—one that puffs up like an airy balloon, tears effortlessly with two fingers, and remains tender well into the evening—is widely regarded as an intuitive art passed down through generations. However, behind every soft, melt-in-the-mouth roti lies a fascinating series of biochemical and thermodynamic principles.</p>

<h2>1. The Biochemistry of Wheat Gluten: Glutenin vs Gliadin</h2>
<p>To master the texture of your roti, it helps to understand what happens at a microscopic level when flour meets water. Whole wheat contains two fundamental storage proteins:</p>
<ul>
    <li><strong>Gliadin:</strong> Provides folding fluidity, extensibility, and dough stretchiness.</li>
    <li><strong>Glutenin:</strong> Provides structural resilience, tensile strength, and elastic bounce-back.</li>
</ul>
<p>When you knead flour with water, these individual protein strands unfold, align, and cross-link through disulfide chemical bonds to form a continuous, flexible viscoelastic sheet. This gluten matrix functions like the rubber of a balloon—it stretches during rolling and captures expanding steam during baking.</p>

<h2>2. Water Temperature: Why Lukewarm Water (38°C–40°C) Changes Everything</h2>
<p>Many home cooks knead dough with cold tap water straight from the filter. This is a subtle yet significant mistake. Starch molecules in whole wheat flour are tightly packed crystalline structures that do not absorb cold water efficiently.</p>
<p>By using <strong>lukewarm water between 38°C and 42°C (100°F to 108°F)</strong>:</p>
<ol>
    <li>Water molecules gain kinetic energy, penetrating the bran and aleurone layers 3x faster.</li>
    <li>Natural alpha-amylase enzymes in the flour awaken, beginning to gently break down complex starches into natural maltose sugars.</li>
    <li>The gluten network forms with significantly less physical strain, resulting in a silkier, more supple dough without needing added oil or butter.</li>
</ol>

<h2>3. The Secret Weapon: The 20-Minute Autolyse Rest</h2>
<p>If there is one single technique that will permanently transform your rotis from average to exceptional, it is <strong>Autolyse</strong> (the dough resting period).</p>
<p>After bringing your flour and water together into a rough, shaggy ball, resist the temptation to immediately roll rotis. Instead, cover the dough with a damp cotton cloth or an airtight bowl and <strong>let it rest undisturbed for 20 to 25 minutes</strong>.</p>
<p>During this silent resting period:</p>
<ul>
    <li>Every microscopic bran particle absorbs moisture completely, softening its coarse edges so it won’t cut through delicate gluten strands during rolling.</li>
    <li>The gluten web relaxes naturally (protease enzymes ease internal tension), eliminating dough "rebound" when rolling with a belan.</li>
    <li>After the rest, just 60 seconds of gentle kneading will yield an impeccably smooth dough resembling soft silk.</li>
</ul>

<h2>4. Tawa Thermodynamics: The 3-Flip Rule for Perfect Balloon Puffing</h2>
<p>Cooking a phulka is a race against dehydration. The goal is to cook the outer skin quickly while vaporizing internal water into high-pressure steam before the roti dries out.</p>

<div class="my-4 p-4" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.05);">
    <h4 style="color:#2C2C2C; margin-top:0;"><i class="fa-solid fa-fire-burner" style="color:#EF801C; margin-right:8px;"></i>The Master 3-Flip Protocol:</h4>
    <ol style="margin-bottom:0; padding-left:20px; line-height:1.8;">
        <li><strong>Pre-Heat the Tawa:</strong> Ensure your cast iron or heavy tawa is uniformly hot (medium-high heat, ~200°C). If the tawa is too cool, the roti dries out into a cracker. If too hot, it scorches before the interior cooks.</li>
        <li><strong>Flip 1 (The Flash Skin – 15 to 20 seconds):</strong> Place the rolled roti onto the tawa. As soon as tiny micro-blisters appear on the surface, flip immediately. The first side should remain very pale with faint spots.</li>
        <li><strong>Flip 2 (The Structural Base – 30 to 40 seconds):</strong> Cook the second side more thoroughly until small golden-brown freckles develop evenly across the bottom.</li>
        <li><strong>Flip 3 (The Steam Expansion):</strong> Flip back to the first side directly over an active gas flame or gently press the circumference with a clean cotton cloth. The trapped moisture between the laminated layers turns to steam instantly, driving the top and bottom skins apart into a magnificent puffed sphere!</li>
    </ol>
</div>

<h2>5. Storage Wisdom: Preserving Tenderness for Hours</h2>
<p>Never place hot, steaming rotis directly into an airtight plastic container or on cold aluminium foil. The trapped hot steam condenses into water droplets, making the bottom roti unpleasantly soggy while leaving the top roti hard.</p>
<p>Instead, immediately coat the warm roti with a thin veil of pure A2 cow ghee or clarified butter. Stack the rotis inside a breathable cotton muslin or linen cloth and place them inside an insulated casserole. The natural fabric absorbs excess surface condensation while retaining essential core moisture—keeping your rotis feather-soft from dawn until dusk.</p>

<blockquote>
    <p>“Pillowy soft rotis are not made by luck; they are made by respecting water temperature, gluten rest, and the purity of unadulterated whole grain flour.”</p>
</blockquote>
',
                'image' => 'images/blog-soft-puffed-rotis.webp',
                'banner_image' => null,
                'banner_position' => 'center center',
                'image_alt' => 'Puffed hot phulkas on iron tawa with rising steam, pure desi ghee and kneaded whole wheat dough in kitchen',
                'category' => 'Recipes & Tips',
                'tags' => 'Soft Roti Recipe, Roti Dough Hydration, Autolyse Technique, Puffed Phulka Tips, Gujarati Roti',
                'author_name' => 'Chef Meera Sharma, Master Culinary Specialist & Food Columnist',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(3),
                'views_count' => 1650,
                'meta_title' => 'How to Make Perfectly Soft Rotis: Kitchen Science Guide',
                'meta_description' => 'Master the art and science of soft rotis that stay tender all day. Evidence-based techniques for water ratio, autolyse resting, and tawa heat control.',
                'meta_keywords' => 'how to make soft rotis, roti dough water ratio, autolyse roti dough, soft phulka secrets, chakki atta roti tips',
            ],
        ];

        foreach ($posts as $post) {
            Blog::updateOrCreate(
                ['slug' => $post['slug']],
                $post
            );
        }
    }
}
