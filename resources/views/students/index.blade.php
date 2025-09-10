<x-app-layout>
    <x-slot name="header">
        <h2 style="font-weight: 600; font-size: 20px; color: #2d3748; line-height: 1.5;">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div style="padding-top: 3rem; padding-bottom: 3rem;">
        <div style="max-width: 1200px; margin-left: auto; margin-right: auto; padding-left: 1.5rem; padding-right: 1.5rem;">
            <div style="background: #ffffff; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-radius: 0.5rem;">
                <div style="padding: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                        <h3 style="font-size: 18px; font-weight: 500; color: #1a202c;">All Students</h3>
                        <a href="{{ route('students.create') }}"
                           style="background: #3b82f6; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 0.375rem; text-decoration: none;">
                            Add New Student
                        </a>
                    </div>

                    @if(session('success'))
                        <div style="background: #d1fae5; border: 1px solid #10b981; color: #065f46; padding: 1rem; border-radius: 0.375rem; margin-bottom: 1rem;">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div style="background: #fee2e2; border: 1px solid #f87171; color: #991b1b; padding: 1rem; border-radius: 0.375rem; margin-bottom: 1rem;">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; border-spacing: 0;">
                            <thead style="background: #f9fafb; border-bottom: 2px solid #e5e7eb;">
                                <tr>
                                    <th style="padding: 12px; text-align: left; font-size: 12px; font-weight: 600; color: #6b7280; text-transform: uppercase;">ID</th>
                                    <th style="padding: 12px; text-align: left; font-size: 12px; font-weight: 600; color: #6b7280; text-transform: uppercase;">Name</th>
                                    <th style="padding: 12px; text-align: left; font-size: 12px; font-weight: 600; color: #6b7280; text-transform: uppercase;">Email</th>
                                    <th style="padding: 12px; text-align: left; font-size: 12px; font-weight: 600; color: #6b7280; text-transform: uppercase;">Grades Count</th>
                                    <th style="padding: 12px; text-align: left; font-size: 12px; font-weight: 600; color: #6b7280; text-transform: uppercase;">Created At</th>
                                    <th style="padding: 12px; text-align: left; font-size: 12px; font-weight: 600; color: #6b7280; text-transform: uppercase;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($students as $student)
                                <tr style="border-bottom: 1px solid #e5e7eb;">
                                    <td style="padding: 12px; font-size: 14px; color: #111827;">{{ $student->id }}</td>
                                    <td style="padding: 12px; font-size: 14px; font-weight: 500; color: #111827;">{{ $student->name }}</td>
                                    <td style="padding: 12px; font-size: 14px; color: #6b7280;">{{ $student->email }}</td>
                                    <td style="padding: 12px; font-size: 14px; color: #6b7280;">{{ $student->grades->count() }}</td>
                                    <td style="padding: 12px; font-size: 14px; color: #6b7280;">{{ $student->created_at->format('M d, Y') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" style="padding: 12px; text-align: center; color: #6b7280;">
                                        No students found.
                                        <a href="{{ route('students.create') }}" style="color: #2563eb; text-decoration: none;">Create one now</a>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
