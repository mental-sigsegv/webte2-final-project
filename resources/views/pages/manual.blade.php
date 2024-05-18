<x-layouts.app>
    <div class="container mx-auto p-6">
        <button onclick="window.location.href='{{ route('manual.download') }}'"
                class="download-button bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
            Download as PDF
        </button>

        <div class="mt-8 space-y-6 text-white">
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Login:</h2>
                <p>Users can log in using their own registration.</p>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Change Password:</h2>
                <p>Users can change their password.</p>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Questions:</h2>
                    Questions can be created in the "New Question" menu.
                    Users can define multiple voting questions.
                    Each question has a generated QR code and a unique 5-character code.
                </ul>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Question Types:</h2>
                    Questions with a choice of correct answers.
                    Questions with an open short answer.
                </ul>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Results Display:</h2>
                    Results can be displayed for questions.
                </ul>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Question Editing:</h2>
                    Users can edit whether the question is active, change the subject and wording of the question, and delete existing questions.
                </ul>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Question Filtering:</h2>
                    Questions can be filtered by subject and creation date.
                </ul>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Export Questions and Answers:</h2>
                    Option to export questions and answers to CSV.
                </ul>
                <p>The administrator has the same functionality as a logged-in user with the difference that they have access to voting questions of all logged-in users with the ability to filter over selected users.</p>
                <p>When creating a new voting question, the administrator can specify whether they are doing it in their own name or on behalf of another user.</p>
                <p>The administrator has access to managing logged-in users, including creating, reading, updating, and deleting (CRUD) user accounts, as well as the ability to change their roles and passwords.</p>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Getting a Poll Question:</h2>
                    User can get to the page with the poll question:
                    <ul class="list-disc list-inside pl-6">
                        <li>By scanning the published QR code.</li>
                        <li>By entering the access code on the application's home page.</li>
                        <li>By entering the address into the browser in the form <code class="bg-gray-500 p-1 rounded-lg">https://nodeXX.webte.fei.stuba.sk/abcde</code>,
                            where <code class="bg-gray-500 p-1 rounded-lg">abcde</code> is a 5-character access code.</li>
                    </ul>
                </ul>
            </div>
            <div class="bg-gray-800 border border-gray-300 rounded-lg p-4">
                <h2 class="text-2xl font-bold mb-2">Completing a Poll Question:</h2>
                <p>After completing the poll question, the user will be redirected to a page with graphical representation of the voting results for that question.</p>
            </div>
        </div>
    </div>
</x-layouts.app>
