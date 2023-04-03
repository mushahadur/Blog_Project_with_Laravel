@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Course Information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Course ID</th>
                            <td>{{$course->id}}</td>
                        </tr>
                        <tr>
                            <th>Course Title</th>
                            <td>{{$course->title}}</td>
                        </tr>
                        <tr>
                            <th>Course Author</th>
                            <td>{{$course->teacher->name}}</td>
                        </tr>
                        <tr>
                            <th>Course Category</th>
                            <td>{{$course->category->name}}</td>
                        </tr>
                        <tr>
                            <th>Course Objective</th>
                            <td>{{$course->objective}}</td>
                        </tr>
                        <tr>
                            <th>Course Description</th>
                            <td>{!! $course->description !!}</td>
                        </tr>
                        <tr>
                            <th>Course Starting</th>
                            <td>{{$course->starting_date}}</td>
                        </tr>
                        <tr>
                            <th>Course Fee</th>
                            <td>{{$course->fee}}</td>
                        </tr>
                        <tr>
                            <th>Course Image</th>
                            <td><img src="{{asset($course->image)}}" alt="" height="200" width="220"/></td>
                        </tr>
                        <tr>
                            <th>Total View</th>
                            <td>{{$course->hit_count}}</td>
                        </tr>
                        <tr>
                            <th>Course Offer Status</th>
                            <td>{{$course->offer_status == 1 ? 'Course Published on Offer' : 'Not Available'}}</td>
                        </tr>
                        <tr>
                            <th>Course Published Status</th>
                            <td>{{$course->status == 1 ? 'Course Published' : 'Not Available'}}</td>
                        </tr>
                        @if($course->offer_status == 1)
                            <tr>
                                <th>Course Offer Fee</th>
                                <td>{{$course->offer_fee}}</td>
                            </tr>
                            <tr>
                                <th>Course Offer Image</th>
                                <td><img src="{{asset($course->offer_image)}}" alt="" height="140" width="220"/></td>
                            </tr>
                            <tr>
                                <th>Course Offer Date</th>
                                <td>{{$course->offer_date}}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection



