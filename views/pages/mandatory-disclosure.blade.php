@extends('layouts.guest')

@section('content')



<x-container>

    
    <div class="flex md:w-2/3 gap-3">
    

        <div class="w-full space-y-6">

            <!-- General Information -->
            <section>
                <h2 class="mb-2 border-b border-gray-300 pb-2 text-2xl font-medium text-gray-700">
                    General Information
                </h2>

                <table class="w-full border-collapse text-base md:text-xl text-gray-800">
                    <tbody>
                        <tr class="border-b border-gray-300">
                            <th class="w-[35%] px-1.5 py-2 text-left font-bold">
                                Name of the School
                            </th>
                            <td class="px-1.5 py-2">
                                Shanthiniketan School
                            </td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <th class="px-1.5 py-2 text-left font-bold">Affiliation No</th>
                            <td class="px-1.5 py-2">930727</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <th class="px-1.5 py-2 text-left font-bold">School Code</th>
                            <td class="px-1.5 py-2">75732</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <th class="px-1.5 py-2 text-left font-bold align-top">Address</th>
                            <td class="px-1.5 py-2">
                                Kunnumpuram, Vilappil P. O.<br>
                                Thiruvananthapuram - 695 543
                            </td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <th class="px-1.5 py-2 text-left font-bold">Principal Name</th>
                            <td class="px-1.5 py-2">Ms. Anitha Rinu George</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <th class="px-1.5 py-2 text-left font-bold">Principal Qualification</th>
                            <td class="px-1.5 py-2">M.Sc, M.Ed</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <th class="px-1.5 py-2 text-left font-bold">School Email ID</th>
                            <td class="px-1.5 py-2 break-all">
                                info@shanthiniketanschool.com
                            </td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <th class="px-1.5 py-2 text-left font-bold">Name of Society</th>
                            <td class="px-1.5 py-2">
                                Shanthiniketan Educational &amp; Cultural Society
                            </td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <th class="px-1.5 py-2 text-left font-bold">Contact No</th>
                            <td class="px-1.5 py-2">8606477227</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <th class="px-1.5 py-2 text-left font-bold">Contact No (mob)</th>
                            <td class="px-1.5 py-2">9061559572</td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <!-- Facilities and Infrastructure -->
            <section>
                <h2 class="mb-2 border-b border-gray-300 pb-2 text-2xl font-medium text-gray-700">
                    Facilities and Infrastructure
                </h2>

                <table class="w-full border-collapse text-base md:text-xl text-gray-800">
                    <tbody>
                        <tr class="border-b border-gray-300">
                            <td class="w-[39%] px-3.5 py-4">Building blocks</td>
                            <td class="px-3.5 py-4">3 Nos</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">Total area of school</td>
                            <td class="px-3.5 py-4">9308 Square metres</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">Play grounds</td>
                            <td class="px-3.5 py-4">2 Nos</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">Total area of play ground</td>
                            <td class="px-3.5 py-4">3500 Square metres</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">Class Rooms</td>
                            <td class="px-3.5 py-4">32(17/15) 36 sq.m/48 sq.m</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">Libraries</td>
                            <td class="px-3.5 py-4">1 Nos</td>
                        </tr>

                        <!-- Add remaining facilities here -->

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">Internet Facility</td>
                            <td class="px-3.5 py-4">Yes</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">Auditoriums</td>
                            <td class="px-3.5 py-4">1 Nos</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">Digital classrooms</td>
                            <td class="px-3.5 py-4">2 Nos</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">Computers</td>
                            <td class="px-3.5 py-4">17 Nos</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">No: of Girls Toilets</td>
                            <td class="px-3.5 py-4">25</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">No: of Boys Toilets</td>
                            <td class="px-3.5 py-4">21</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4">No: of CWSN Toilets</td>
                            <td class="px-3.5 py-4">1</td>
                        </tr>

                        <tr class="border-b border-gray-300">
                            <td class="px-3.5 py-4 align-top">
                                Link of Youtube video of the inspection of school
                                covering the infrastructure of the school
                            </td>
                            <td class="px-3.5 py-4 break-all">
                                <a
                                    href="https://www.youtube.com/@shanthiniketanschooltrivan2901"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="hover:underline"
                                >
                                    https://www.youtube.com/@shanthiniketanschooltrivan2901
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </div>



    <div class="md:w-1/3">
    
    

        <h4 class="mb-3 text-xl font-semibold text-gray-800">
            Documents
        </h4>

        <ul class="overflow-hidden rounded-md border border-gray-200 divide-y divide-gray-200">

            <li>
                <a href="uploads/mandatory_disclosure/2026/general-information.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>GENERAL INFORMATION</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/staff-teaching.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>STAFF (TEACHING)</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/school-infrastructure.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>SCHOOL INFRASTRUCTURE</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/affiliation-extension-certificate.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>AFFILIATION EXTENSION CERTIFICATE</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/society.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>SOCIETY</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/no-objection-certificate.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>NO OBJECTION CERTIFICATE</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/provisional-recognition-certificate.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>PROVISIONAL RECOGNITION CERTIFICATE</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/building-fitness-certificate.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>BUILDING FITNESS CERTIFICATE</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/fire-and-safety-certificate.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>FIRE AND SAFETY CERTIFICATE</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/self-certification-by-school.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>SELF CERTIFICATION BY SCHOOL</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/water-test-report.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>WATER TEST REPORT</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/sanitary-fitness-certificate.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>SANITARY FITNESS CERTIFICATE</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/fee-structure.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>FEE STRUCTURE</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/academic-calendar.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>ANNUAL ACADEMIC CALENDAR 2024 25</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/school-management-committee.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>SCHOOL MANAGEMENT COMMITTEE</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/pta-members.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>PTA MEMBERS</span>
                </a>
            </li>

            <li>
                <a href="uploads/mandatory_disclosure/2026/3-year-result.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 transition-colors hover:bg-gray-50 hover:text-primary">
                    <i class="bx bx-download text-lg"></i>
                    <span>3 YEAR RESULT</span>
                </a>
            </li>

        </ul>


    </div>


    </div>


</x-container>


@endsection

