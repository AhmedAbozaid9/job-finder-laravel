<x-layout title="Candidates - {{ $job->title }}">
    <div class="max-w-7xl mx-auto pb-12">
        <!-- Back Link -->
        <a href="{{ route('profile.my-jobs') }}"
            class="inline-flex items-center gap-2 text-sm text-text-secondary hover:text-pink mb-8 transition-colors group">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 transform group-hover:-translate-x-1 transition-transform" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M9.707 14.707a1 1 0 01-1.414 0L3.586 10l4.707-4.707a1 1 0 111.414 1.414L6.414 10l3.293 3.293a1 1 0 010 1.414z"
                    clip-rule="evenodd" />
            </svg>
            Back to My Jobs
        </a>

        <div class="flex items-center justify-between mb-8 pb-6 border-b border-dark-border">
            <div>
                <h1 class="text-3xl font-bold text-white mb-2">Candidates</h1>
                <p class="text-text-muted">For job: <span class="text-white font-medium">{{ $job->title }}</span></p>
            </div>
        </div>

        <div class="bg-dark-surface border border-dark-border rounded-2xl p-6 md:p-8 animate-slide-up">
            @if ($candidates->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-text-muted text-sm border-b border-dark-border">
                                <th class="pb-4 font-medium pl-4">Candidate</th>
                                <th class="pb-4 font-medium">Applied Date</th>
                                <th class="pb-4 font-medium">Email</th>
                                <th class="pb-4 font-medium">Status</th>
                                <th class="pb-4 font-medium text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-dark-border">
                            @foreach ($candidates as $candidate)
                                <tr class="group hover:bg-white/5 transition-colors">
                                    <td class="py-4 pl-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full bg-gradient-pink p-0.5">
                                                <div
                                                    class="w-full h-full rounded-full bg-black flex items-center justify-center text-sm font-bold text-white uppercase">
                                                    {{ substr($candidate->name, 0, 1) }}
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold text-white">{{ $candidate->name }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 text-text-secondary">
                                        {{ $candidate->pivot->created_at->format('M d, Y') }}
                                    </td>
                                    <td class="py-4 text-text-secondary">
                                        {{ $candidate->email }}
                                    </td>
                                    <td class="py-4">
                                        @php
                                            $statusColors = [
                                                'pending' => 'bg-yellow-500/10 text-yellow-500 border-yellow-500/20',
                                                'accepted' => 'bg-green-500/10 text-green-500 border-green-500/20',
                                                'rejected' => 'bg-red-500/10 text-red-500 border-red-500/20',
                                            ];
                                            $status = $candidate->pivot->status;
                                        @endphp
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border {{ $statusColors[$status] ?? 'bg-gray-500/10 text-gray-400' }}">
                                            {{ ucfirst($status) }}
                                        </span>
                                    </td>
                                    <td class="py-4 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            @if ($candidate->pivot->status === 'pending')
                                                <form
                                                    action="{{ route('profile.candidates.update', [$job, $candidate]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="accepted">
                                                    <button type="submit" title="Accept Candidate"
                                                        class="p-2 rounded-lg text-green-500 hover:bg-green-500/10 transition-colors border border-transparent hover:border-green-500/30">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </button>
                                                </form>

                                                <form
                                                    action="{{ route('profile.candidates.update', [$job, $candidate]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="rejected">
                                                    <button type="submit" title="Reject Candidate"
                                                        class="p-2 rounded-lg text-red-500 hover:bg-red-500/10 transition-colors border border-transparent hover:border-red-500/30">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            @else
                                                <span class="text-sm text-text-muted italic">Decision made</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 border-t border-dark-border pt-6">
                    {{ $candidates->links('vendor.pagination.tailwind') }}
                </div>
            @else
                <div class="text-center py-12">
                    <div
                        class="w-16 h-16 bg-dark-elevated rounded-full flex items-center justify-center mx-auto mb-4 text-text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-white mb-2">No Candidates Yet</h3>
                    <p class="text-text-muted">Wait for talented people to apply to your job!</p>
                </div>
            @endif
        </div>
    </div>
</x-layout>
