@extends('website.master')

@section('title')
    Personal Record
@endsection

@section('content')
<style>
    #icon_style
    {
        height: 40px;
        width: 40px;
        margin-right: 10px;
    }
</style>
    <h1>This is personal record</h1>

    <div class="container-fluid">
        <div class="row">
            @php
                $runnings   = DB::table('workouts')->where('workout_type','running')->get();
                $cyclings   = DB::table('workouts')->where('workout_type','cycling')->get();
                $walkings   = DB::table('workouts')->where('workout_type','walking')->get();
                $yogas      = DB::table('workouts')->where('workout_type','yoga')->get();
            @endphp
            <div class="col-xl-4 col-xxl-6 col-lg-6">
                <div class="card">
                    <div class="card-header bg-warning">
                        <div class="d-flex me-3 align-items-center">
                            <img id="icon_style" src="{{ asset('website/images/run.png') }}" alt="icon-image">
                            <h4 class="fs-20 text-white mb-0 ml-2"> Running</h4>
                        </div>
                        {{-- <a href="javascript:void(0);" class="btn rounded text-white border border-white">
                            <svg class="me-2" width="21" height="20" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.31615 4H12.4744C12.4744 4.53043 12.6882 5.03914 13.0686 5.41421C13.4491 5.78929 13.9651 6 14.5032 6H16.532C17.07 6 17.5861 5.78929 17.9665 5.41421C18.347 5.03914 18.5607 4.53043 18.5607 4H19.5751C19.8442 4 20.1022 3.89464 20.2924 3.70711C20.4827 3.51957 20.5895 3.26522 20.5895 3C20.5895 2.73478 20.4827 2.48043 20.2924 2.29289C20.1022 2.10536 19.8442 2 19.5751 2H18.5607C18.5607 1.46957 18.347 0.960859 17.9665 0.585786C17.5861 0.210714 17.07 0 16.532 0H14.5032C13.9651 0 13.4491 0.210714 13.0686 0.585786C12.6882 0.960859 12.4744 1.46957 12.4744 2H1.31615C1.04711 2 0.7891 2.10536 0.598865 2.29289C0.408631 2.48043 0.301758 2.73478 0.301758 3C0.301758 3.26522 0.408631 3.51957 0.598865 3.70711C0.7891 3.89464 1.04711 4 1.31615 4ZM14.5032 2H16.532V3V4H14.5032V2ZM19.5751 9H10.4456C10.4456 8.46957 10.2319 7.96086 9.85143 7.58579C9.47096 7.21071 8.95493 7 8.41687 7H6.38809C5.85002 7 5.334 7.21071 4.95353 7.58579C4.57306 7.96086 4.35931 8.46957 4.35931 9H1.31615C1.04711 9 0.7891 9.10536 0.598865 9.29289C0.408631 9.48043 0.301758 9.73479 0.301758 10C0.301758 10.2652 0.408631 10.5196 0.598865 10.7071C0.7891 10.8946 1.04711 11 1.31615 11H4.35931C4.35931 11.5304 4.57306 12.0391 4.95353 12.4142C5.334 12.7893 5.85002 13 6.38809 13H8.41687C8.95493 13 9.47096 12.7893 9.85143 12.4142C10.2319 12.0391 10.4456 11.5304 10.4456 11H19.5751C19.8442 11 20.1022 10.8946 20.2924 10.7071C20.4827 10.5196 20.5895 10.2652 20.5895 10C20.5895 9.73479 20.4827 9.48043 20.2924 9.29289C20.1022 9.10536 19.8442 9 19.5751 9ZM6.38809 11V9H8.41687V10V11H6.38809ZM19.5751 16H16.532C16.532 15.4696 16.3182 14.9609 15.9378 14.5858C15.5573 14.2107 15.0413 14 14.5032 14H12.4744C11.9364 14 11.4203 14.2107 11.0399 14.5858C10.6594 14.9609 10.4456 15.4696 10.4456 16H1.31615C1.04711 16 0.7891 16.1054 0.598865 16.2929C0.408631 16.4804 0.301758 16.7348 0.301758 17C0.301758 17.2652 0.408631 17.5196 0.598865 17.7071C0.7891 17.8946 1.04711 18 1.31615 18H10.4456C10.4456 18.5304 10.6594 19.0391 11.0399 19.4142C11.4203 19.7893 11.9364 20 12.4744 20H14.5032C15.0413 20 15.5573 19.7893 15.9378 19.4142C16.3182 19.0391 16.532 18.5304 16.532 18H19.5751C19.8442 18 20.1022 17.8946 20.2924 17.7071C20.4827 17.5196 20.5895 17.2652 20.5895 17C20.5895 16.7348 20.4827 16.4804 20.2924 16.2929C20.1022 16.1054 19.8442 16 19.5751 16ZM12.4744 18V16H14.5032V17V18H12.4744Z"
                                    fill="white" />
                            </svg>
                            Filter
                        </a> --}}
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table shadow-hover">
                                <thead>
                                    <tr>
                                        <th><span class="font-w600 text-black fs-16">Date</span></th>
                                        <th><span class="font-w600 text-black fs-16">Distance</span></th>
                                        <th><span class="font-w600 text-black fs-16">Time</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($runnings as $running)
                                    <tr>
                                        <td>
                                            <p class="text-black mb-1 font-w600">Sunday</p>
                                            <span class="fs-14">{{ $running->date }}</span>
                                        </td>
                                        <td>
                                            <p class="text-black mb-1 font-w600">{{ $running->workout_duration }}</p>
                                            <span class="fs-14">Target 40mins</span>
                                        </td>
                                        <td>
                                            <p class="text-black mb-1 font-w600">{{ $running->calories_burned }}</p>
                                            <span class="fs-14">Target 700cal</span>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-6 col-lg-6">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="d-flex me-3 align-items-center">
                            <img id="icon_style" src="{{ asset('website/images/bicycle.png') }}" alt="icon-image">

                            <h4 class="fs-20 text-white mb-0">Cycling</h4>
                        </div>
                        {{-- <a href="javascript:void(0);" class="btn rounded text-white border border-white">
                            <svg class="me-2" width="21" height="20" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.31615 4H12.4744C12.4744 4.53043 12.6882 5.03914 13.0686 5.41421C13.4491 5.78929 13.9651 6 14.5032 6H16.532C17.07 6 17.5861 5.78929 17.9665 5.41421C18.347 5.03914 18.5607 4.53043 18.5607 4H19.5751C19.8442 4 20.1022 3.89464 20.2924 3.70711C20.4827 3.51957 20.5895 3.26522 20.5895 3C20.5895 2.73478 20.4827 2.48043 20.2924 2.29289C20.1022 2.10536 19.8442 2 19.5751 2H18.5607C18.5607 1.46957 18.347 0.960859 17.9665 0.585786C17.5861 0.210714 17.07 0 16.532 0H14.5032C13.9651 0 13.4491 0.210714 13.0686 0.585786C12.6882 0.960859 12.4744 1.46957 12.4744 2H1.31615C1.04711 2 0.7891 2.10536 0.598865 2.29289C0.408631 2.48043 0.301758 2.73478 0.301758 3C0.301758 3.26522 0.408631 3.51957 0.598865 3.70711C0.7891 3.89464 1.04711 4 1.31615 4ZM14.5032 2H16.532V3V4H14.5032V2ZM19.5751 9H10.4456C10.4456 8.46957 10.2319 7.96086 9.85143 7.58579C9.47096 7.21071 8.95493 7 8.41687 7H6.38809C5.85002 7 5.334 7.21071 4.95353 7.58579C4.57306 7.96086 4.35931 8.46957 4.35931 9H1.31615C1.04711 9 0.7891 9.10536 0.598865 9.29289C0.408631 9.48043 0.301758 9.73479 0.301758 10C0.301758 10.2652 0.408631 10.5196 0.598865 10.7071C0.7891 10.8946 1.04711 11 1.31615 11H4.35931C4.35931 11.5304 4.57306 12.0391 4.95353 12.4142C5.334 12.7893 5.85002 13 6.38809 13H8.41687C8.95493 13 9.47096 12.7893 9.85143 12.4142C10.2319 12.0391 10.4456 11.5304 10.4456 11H19.5751C19.8442 11 20.1022 10.8946 20.2924 10.7071C20.4827 10.5196 20.5895 10.2652 20.5895 10C20.5895 9.73479 20.4827 9.48043 20.2924 9.29289C20.1022 9.10536 19.8442 9 19.5751 9ZM6.38809 11V9H8.41687V10V11H6.38809ZM19.5751 16H16.532C16.532 15.4696 16.3182 14.9609 15.9378 14.5858C15.5573 14.2107 15.0413 14 14.5032 14H12.4744C11.9364 14 11.4203 14.2107 11.0399 14.5858C10.6594 14.9609 10.4456 15.4696 10.4456 16H1.31615C1.04711 16 0.7891 16.1054 0.598865 16.2929C0.408631 16.4804 0.301758 16.7348 0.301758 17C0.301758 17.2652 0.408631 17.5196 0.598865 17.7071C0.7891 17.8946 1.04711 18 1.31615 18H10.4456C10.4456 18.5304 10.6594 19.0391 11.0399 19.4142C11.4203 19.7893 11.9364 20 12.4744 20H14.5032C15.0413 20 15.5573 19.7893 15.9378 19.4142C16.3182 19.0391 16.532 18.5304 16.532 18H19.5751C19.8442 18 20.1022 17.8946 20.2924 17.7071C20.4827 17.5196 20.5895 17.2652 20.5895 17C20.5895 16.7348 20.4827 16.4804 20.2924 16.2929C20.1022 16.1054 19.8442 16 19.5751 16ZM12.4744 18V16H14.5032V17V18H12.4744Z"
                                    fill="white" />
                            </svg>
                            Filter
                        </a> --}}
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table shadow-hover">
                                <thead>
                                    <tr>
                                        <th><span class="font-w600 text-black fs-16">Date</span></th>
                                        <th><span class="font-w600 text-black fs-16">Distance</span></th>
                                        <th><span class="font-w600 text-black fs-16">Time</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cyclings as $cycling)
                                    <tr>
                                        <td>

                                            <span class="fs-14">{{ $cycling->date }}</span>
                                        </td>
                                        <td>
                                            <p class="text-black mb-1 font-w600">{{ $cycling->workout_duration }}</p>
                                            <span class="fs-14">Target 40mins</span>
                                        </td>
                                        <td>
                                            <p class="text-black mb-1 font-w600">{{ $cycling->calories_burned }}</p>
                                            <span class="fs-14">Target 700cal</span>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-6 col-lg-6">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <div class="d-flex align-items-center me-3">
                            <img id="icon_style" src="{{ asset('website/images/walking.png') }}" alt="icon-image">
                            <h4 class="fs-20 text-white mb-0">Walking</h4>
                        </div>
                        {{-- <a href="javascript:void(0);" class="btn rounded text-white border border-white">
                            <svg class="me-2" width="21" height="20" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.31615 4H12.4744C12.4744 4.53043 12.6882 5.03914 13.0686 5.41421C13.4491 5.78929 13.9651 6 14.5032 6H16.532C17.07 6 17.5861 5.78929 17.9665 5.41421C18.347 5.03914 18.5607 4.53043 18.5607 4H19.5751C19.8442 4 20.1022 3.89464 20.2924 3.70711C20.4827 3.51957 20.5895 3.26522 20.5895 3C20.5895 2.73478 20.4827 2.48043 20.2924 2.29289C20.1022 2.10536 19.8442 2 19.5751 2H18.5607C18.5607 1.46957 18.347 0.960859 17.9665 0.585786C17.5861 0.210714 17.07 0 16.532 0H14.5032C13.9651 0 13.4491 0.210714 13.0686 0.585786C12.6882 0.960859 12.4744 1.46957 12.4744 2H1.31615C1.04711 2 0.7891 2.10536 0.598865 2.29289C0.408631 2.48043 0.301758 2.73478 0.301758 3C0.301758 3.26522 0.408631 3.51957 0.598865 3.70711C0.7891 3.89464 1.04711 4 1.31615 4ZM14.5032 2H16.532V3V4H14.5032V2ZM19.5751 9H10.4456C10.4456 8.46957 10.2319 7.96086 9.85143 7.58579C9.47096 7.21071 8.95493 7 8.41687 7H6.38809C5.85002 7 5.334 7.21071 4.95353 7.58579C4.57306 7.96086 4.35931 8.46957 4.35931 9H1.31615C1.04711 9 0.7891 9.10536 0.598865 9.29289C0.408631 9.48043 0.301758 9.73479 0.301758 10C0.301758 10.2652 0.408631 10.5196 0.598865 10.7071C0.7891 10.8946 1.04711 11 1.31615 11H4.35931C4.35931 11.5304 4.57306 12.0391 4.95353 12.4142C5.334 12.7893 5.85002 13 6.38809 13H8.41687C8.95493 13 9.47096 12.7893 9.85143 12.4142C10.2319 12.0391 10.4456 11.5304 10.4456 11H19.5751C19.8442 11 20.1022 10.8946 20.2924 10.7071C20.4827 10.5196 20.5895 10.2652 20.5895 10C20.5895 9.73479 20.4827 9.48043 20.2924 9.29289C20.1022 9.10536 19.8442 9 19.5751 9ZM6.38809 11V9H8.41687V10V11H6.38809ZM19.5751 16H16.532C16.532 15.4696 16.3182 14.9609 15.9378 14.5858C15.5573 14.2107 15.0413 14 14.5032 14H12.4744C11.9364 14 11.4203 14.2107 11.0399 14.5858C10.6594 14.9609 10.4456 15.4696 10.4456 16H1.31615C1.04711 16 0.7891 16.1054 0.598865 16.2929C0.408631 16.4804 0.301758 16.7348 0.301758 17C0.301758 17.2652 0.408631 17.5196 0.598865 17.7071C0.7891 17.8946 1.04711 18 1.31615 18H10.4456C10.4456 18.5304 10.6594 19.0391 11.0399 19.4142C11.4203 19.7893 11.9364 20 12.4744 20H14.5032C15.0413 20 15.5573 19.7893 15.9378 19.4142C16.3182 19.0391 16.532 18.5304 16.532 18H19.5751C19.8442 18 20.1022 17.8946 20.2924 17.7071C20.4827 17.5196 20.5895 17.2652 20.5895 17C20.5895 16.7348 20.4827 16.4804 20.2924 16.2929C20.1022 16.1054 19.8442 16 19.5751 16ZM12.4744 18V16H14.5032V17V18H12.4744Z"
                                    fill="white" />
                            </svg>
                            Filter
                        </a> --}}
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table shadow-hover">
                                <thead>
                                    <tr>
                                        <th><span class="font-w600 text-black fs-16">Date</span></th>
                                        <th><span class="font-w600 text-black fs-16">Distance</span></th>
                                        <th><span class="font-w600 text-black fs-16">Time</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($walkings as $walking)
                                    <tr>
                                        <td>

                                            <span class="fs-14">{{ $walking->date }}</span>
                                        </td>
                                        <td>
                                            <p class="text-black mb-1 font-w600">{{ $walking->workout_duration }}</p>
                                            <span class="fs-14">Target 40mins</span>
                                        </td>
                                        <td>
                                            <p class="text-black mb-1 font-w600">{{ $walking->calories_burned }}</p>
                                            <span class="fs-14">Target 700cal</span>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-6 col-lg-6">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <div class="d-flex align-items-center me-3">
                            <img id="icon_style" src="{{ asset('website/images/yoga.png') }}" alt="icon-image">

                            <h4 class="fs-20 text-white mb-0">Yoga</h4>
                        </div>
                        {{-- <a href="javascript:void(0);" class="btn rounded text-white border border-white">
                            <svg class="me-2" width="21" height="20" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.31615 4H12.4744C12.4744 4.53043 12.6882 5.03914 13.0686 5.41421C13.4491 5.78929 13.9651 6 14.5032 6H16.532C17.07 6 17.5861 5.78929 17.9665 5.41421C18.347 5.03914 18.5607 4.53043 18.5607 4H19.5751C19.8442 4 20.1022 3.89464 20.2924 3.70711C20.4827 3.51957 20.5895 3.26522 20.5895 3C20.5895 2.73478 20.4827 2.48043 20.2924 2.29289C20.1022 2.10536 19.8442 2 19.5751 2H18.5607C18.5607 1.46957 18.347 0.960859 17.9665 0.585786C17.5861 0.210714 17.07 0 16.532 0H14.5032C13.9651 0 13.4491 0.210714 13.0686 0.585786C12.6882 0.960859 12.4744 1.46957 12.4744 2H1.31615C1.04711 2 0.7891 2.10536 0.598865 2.29289C0.408631 2.48043 0.301758 2.73478 0.301758 3C0.301758 3.26522 0.408631 3.51957 0.598865 3.70711C0.7891 3.89464 1.04711 4 1.31615 4ZM14.5032 2H16.532V3V4H14.5032V2ZM19.5751 9H10.4456C10.4456 8.46957 10.2319 7.96086 9.85143 7.58579C9.47096 7.21071 8.95493 7 8.41687 7H6.38809C5.85002 7 5.334 7.21071 4.95353 7.58579C4.57306 7.96086 4.35931 8.46957 4.35931 9H1.31615C1.04711 9 0.7891 9.10536 0.598865 9.29289C0.408631 9.48043 0.301758 9.73479 0.301758 10C0.301758 10.2652 0.408631 10.5196 0.598865 10.7071C0.7891 10.8946 1.04711 11 1.31615 11H4.35931C4.35931 11.5304 4.57306 12.0391 4.95353 12.4142C5.334 12.7893 5.85002 13 6.38809 13H8.41687C8.95493 13 9.47096 12.7893 9.85143 12.4142C10.2319 12.0391 10.4456 11.5304 10.4456 11H19.5751C19.8442 11 20.1022 10.8946 20.2924 10.7071C20.4827 10.5196 20.5895 10.2652 20.5895 10C20.5895 9.73479 20.4827 9.48043 20.2924 9.29289C20.1022 9.10536 19.8442 9 19.5751 9ZM6.38809 11V9H8.41687V10V11H6.38809ZM19.5751 16H16.532C16.532 15.4696 16.3182 14.9609 15.9378 14.5858C15.5573 14.2107 15.0413 14 14.5032 14H12.4744C11.9364 14 11.4203 14.2107 11.0399 14.5858C10.6594 14.9609 10.4456 15.4696 10.4456 16H1.31615C1.04711 16 0.7891 16.1054 0.598865 16.2929C0.408631 16.4804 0.301758 16.7348 0.301758 17C0.301758 17.2652 0.408631 17.5196 0.598865 17.7071C0.7891 17.8946 1.04711 18 1.31615 18H10.4456C10.4456 18.5304 10.6594 19.0391 11.0399 19.4142C11.4203 19.7893 11.9364 20 12.4744 20H14.5032C15.0413 20 15.5573 19.7893 15.9378 19.4142C16.3182 19.0391 16.532 18.5304 16.532 18H19.5751C19.8442 18 20.1022 17.8946 20.2924 17.7071C20.4827 17.5196 20.5895 17.2652 20.5895 17C20.5895 16.7348 20.4827 16.4804 20.2924 16.2929C20.1022 16.1054 19.8442 16 19.5751 16ZM12.4744 18V16H14.5032V17V18H12.4744Z"
                                    fill="white" />
                            </svg>
                            Filter
                        </a> --}}
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table shadow-hover">
                                <thead>
                                    <tr>
                                        <th><span class="font-w600 text-black fs-16">Date</span></th>
                                        <th><span class="font-w600 text-black fs-16">Distance</span></th>
                                        <th><span class="font-w600 text-black fs-16">Time</span></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($yogas as $yoga)
                                    <tr>
                                        <td>

                                            <span class="fs-14">{{ $yoga->date }}</span>
                                        </td>
                                        <td>
                                            <p class="text-black mb-1 font-w600">{{ $yoga->workout_duration }}</p>
                                            <span class="fs-14">Target 40mins</span>
                                        </td>
                                        <td>
                                            <p class="text-black mb-1 font-w600">{{ $yoga->calories_burned }}</p>
                                            <span class="fs-14">Target 700cal</span>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
