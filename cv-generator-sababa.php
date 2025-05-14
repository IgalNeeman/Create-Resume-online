<?php
/*
Plugin Name: CV Generator Sababa
Description: טופס ליצירת קובץ קורות חיים והורדתו בלחיצת כפתור.
Version: 1.0
Author: Sababa Jobs
*/

function cv_generator_shortcode() {
    ob_start(); ?>
    
    <form id="cvForm">
        <label>שם מלא:</label>
        <input type="text" id="name" placeholder="ישראל ישראלי" required>

        <label>טלפון:</label>
        <input type="text" id="phone" placeholder="050-0000000">

        <label>אימייל:</label>
        <input type="email" id="email" placeholder="example@mail.com">

        <label>תקציר מקצועי:</label>
        <textarea id="summary" rows="3" placeholder="נסיון של 5 שנים בתחום..."></textarea>

        <label>ניסיון תעסוקתי:</label>
        <textarea id="experience" rows="4" placeholder="2019–2023 – איש שירות באלקטרה"></textarea>

        <label>השכלה:</label>
        <textarea id="education" rows="3" placeholder="הנדסאי תוכנה, מכללת אריאל, 2020"></textarea>

        <label>כישורים נוספים:</label>
        <textarea id="skills" rows="3" placeholder="שליטה באופיס, אנגלית ברמה גבוהה"></textarea>

        <label>שירות צבאי / לאומי:</label>
        <textarea id="army" rows="3" placeholder="חיל קשר, לוחם, 2015–2018"></textarea>

        <button type="submit">📄 הורד קובץ קורות חיים</button>
    </form>

    <?php return ob_get_clean();
}
add_shortcode('cv_generator', 'cv_generator_shortcode');

function cv_generator_enqueue_assets() {
    wp_enqueue_script('cv-generator-script', plugin_dir_url(__FILE__) . 'assets/script.js', array(), null, true);
    wp_enqueue_style('cv-generator-style', plugin_dir_url(__FILE__) . 'assets/style.css');
}
add_action('wp_enqueue_scripts', 'cv_generator_enqueue_assets');
