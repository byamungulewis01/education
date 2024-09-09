@extends('layouts.student')
@section('title', 'My Training')
@section('body')
    <div class="container">
        <h4 class="dashboard-title">Purchase History</h4>

        <!-- Dashboard Purchase History Start -->
        <div class="dashboard-purchase-history">
            <div class="dashboard-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="id">ID</th>
                            <th class="courses">Training</th>
                            <th class="amount">Amount</th>
                            <th class="status">Status</th>
                            <th class="date">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trainings as $item)
                            <tr>
                                <td>
                                    <div class="dashboard-table__text">
                                        #{{ str_pad($loop->iteration, 3, '0', STR_PAD_LEFT) }}</div>
                                </td>
                                <td class="course-info">
                                    <div class="dashboard-table__mobile-heading">Training</div>
                                    <div class="dashboard-table__text">
                                        <p>{{ $item->training->title }}</p>
                                    </div>
                                </td>
                                <td class="correct">
                                    <div class="dashboard-table__text">
                                        <span class="sale-price">${{ number_format($item->training->price) }}.<small
                                                class="separator">00</small></span>
                                    </div>
                                </td>
                                <td class="incorrect">
                                    @if ($item->is_payed)
                                    <div class="dashboard-table__text completed">Completed</div>
                                    @else
                                        <div class="dashboard-table__text">Processing</div>
                                    @endif
                                </td>
                                <td class="earned">
                                    <div class="dashboard-table__text">{{ $item->created_at->format('F d, Y') }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Dashboard Purchase History End -->
    </div>

@endsection
