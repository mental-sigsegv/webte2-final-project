<?php

return [
    'download_pdf' => 'Download as PDF',
    'login' => 'Login:',
    'login_description' => 'Users can log in using their own registration.',
    'change_password' => 'Change Password:',
    'change_password_description' => 'Users can change their password.',
    'questions' => 'Questions:',
    'questions_description' => [
        '1' => 'Questions can be created in the "New Question" menu.',
        '2' => 'Users can define multiple voting questions.',
        '3' => 'Each question has a generated QR code and a unique 5-character code.',
    ],
    'question_types' => 'Question Types:',
    'question_types_description' => [
        '1' => 'Questions with a choice of correct answers.',
        '2' => 'Questions with an open short answer.',
    ],
    'results_display' => 'Results Display:',
    'results_display_description' => 'Results can be displayed for questions.',
    'results_display_methods' => [
        '1' => 'For multiple choice questions, a graph will be displayed.',
        '2' => 'For open-ended short answer questions, the answers will be displayed.',
    ],
    'question_editing' => 'Question Editing:',
    'question_editing_description' => 'Users can edit whether the question is active, change the subject and wording of the question, and delete existing questions.',
    'question_filtering' => 'Question Filtering:',
    'question_filtering_description' => 'Questions can be filtered by subject and creation date.',
    'export_questions' => 'Export Questions and Answers:',
    'export_questions_description' => 'Option to export questions and answers to CSV.',
    'admin_description' => [
        '1' => 'The administrator has the same functionality as a logged-in user with the difference that they have access to voting questions of all logged-in users with the ability to filter over selected users.',
        '2' => 'When creating a new voting question, the administrator can specify whether they are doing it in their own name or on behalf of another user.',
        '3' => 'The administrator has access to managing logged-in users, including creating, reading, updating, and deleting (CRUD) user accounts, as well as the ability to change their roles and passwords.',
    ],
    'getting_poll' => 'Getting a Poll Question:',
    'getting_poll_description' => 'User can get to the page with the poll question:',
    'getting_poll_methods' => [
        '1' => 'By scanning the published QR code.',
        '2' => 'By entering the access code on the application\'s home page.',
        '3' => 'By entering the address into the browser in the form :url, where :code is a 5-character access code.',
    ],
    'completing_poll' => 'Completing a Poll Question:',
    'completing_poll_description' => 'After completing the poll question, the user will be redirected to a page with graphical representation of the voting results for that question.',
];
