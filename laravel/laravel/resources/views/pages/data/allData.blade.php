@extends('layouts.master')
@section('mainContent')

<div class="container">
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">All Engine Data</span>
            </h3>
            <div class="float-end">
                <a href="{{ route('exportData') }}" class="btn btn-sm btn-primary">Export</a>
            </div>
        </div>
        <div class="card-body py-3">
            @if (\Session::has('success'))
                <span class="text-success border-success">{!! \Session::get('success') !!}</span>
            @endif
            <div class="table-responsive">
                <table class="table table-row-bordered table-row-gray-100 gs-0 gy-3 overflow-y-scroll">
                    <thead class=" align-middle">
                        <tr class="fw-bolder border text-muted">
                            <th class="min-w-140px text-center align-middle px-3" colspan="" rowspan="2">ID</th>
                            <th class="min-w-140px text-center" colspan="11">Data</th>
                            <th class="min-w-140px text-center align-middle" rowspan="2">ECUS</th>
                            <th class="min-w-140px text-center align-middle" rowspan="2">Full</th>
                            <th class="min-w-140px text-center p-3 align-middle" rowspan="2">User</th>
                            <th class="min-w-100px text-center align-middle p-" rowspan="2">Actions</th>
                        </tr>
                        <tr class="fw-bolder border text-muted">
                            <th class="min-w-140px p-2 text-center">Name</th>
                            <th class="min-w-140px p-2 text-center">Power</th>
                            <th class="min-w-140px p-2 text-center">Torque</th>
                            <th class="min-w-140px p-2 text-center">Chart</th>
                            <th class="min-w-140px p-2 text-center">Vehicle</th>
                            <th class="min-w-140px p-2 text-center">Selected</th>
                            <th class="min-w-140px p-2 text-center">ECU</th>
                            <th class="min-w-140px p-2 text-center">Files</th>
                            <th class="min-w-140px p-2 text-center">Tools</th>
                            <th class="min-w-140px p-2 text-center">Checked Option</th>
                            <th class="min-w-140px p-2 text-center">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allData as $row)
                        <tr class="border text-left align-start">
                            <td class="px-2">{{ $row->data_id }}</td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->data_name }}</span>
                            </td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_power_oem: <span class="text-muted">{{ $row->data_power_oem }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_power_stage1: <span class="text-muted">{{ $row->data_power_stage1 }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_power_stage2: <span class="text-muted">{{ $row->data_power_stage2 }}</span></span>
                            </td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_torque_oem: <span class="text-muted">{{ $row->data_torque_oem }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_torque_stage1: <span class="text-muted">{{ $row->data_torque_stage1 }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_torque_stage2: <span class="text-muted">{{ $row->data_torque_stage2 }}</span></span>
                            </td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_chart_rpm: <span class="text-muted">{{ $row->data_chart_rpm }}</span></span>
                                <hr class="p-0 m-0">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_chart_power_oem: <span class="text-muted">{{ $row->data_chart_power_oem }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_chart_power_stage1: <span class="text-muted">{{ $row->data_chart_power_stage1 }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_chart_power_stage2: <span class="text-muted">{{ $row->data_chart_power_stage2 }}</span></span>
                                <hr class="p-0 m-0">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_chart_torque_oem: <span class="text-muted">{{ $row->data_chart_torque_oem }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_chart_torque_stage1: <span class="text-muted">{{ $row->data_chart_torque_stage1 }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_chart_torque_stage2: <span class="text-muted">{{ $row->data_chart_torque_stage2 }}</span></span>
                            </td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_vehicle_type: <span class="text-muted">{{ $row->data_vehicle_type }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_vehicle_make: <span class="text-muted">{{ $row->data_vehicle_make }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block max-w-100px fs-7">data_vehicle_make_image: <img class="img-fluid p-0 m-0" src="{{ $row->data_vehicle_make_image }}" alt=""></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_vehicle_model: <span class="text-muted">{{ $row->data_vehicle_model }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_vehicle_generation: <span class="text-muted">{{ $row->data_vehicle_generation }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_vehicle_fuel_type: <span class="text-muted">{{ $row->data_vehicle_fuel_type }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_vehicle_engine: <span class="text-muted">{{ $row->data_vehicle_engine }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_vehicle_gearbox: <span class="text-muted">{{ $row->data_vehicle_gearbox }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_vehicle_engine_code: <span class="text-muted">{{ $row->data_vehicle_engine_code }}</span></span>
                            </td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_type_id: <span class="text-muted">{{ $row->data_selected_type_id }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_type_name: <span class="text-muted">{{ $row->data_selected_type_name }}</span></span>
                                <hr class="p-0 m-0">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_make_id: <span class="text-muted">{{ $row->data_selected_make_id }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_make_name: <span class="text-muted">{{ $row->data_selected_make_name }}</span></span>
                                <hr class="p-0 m-0">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_model_id: <span class="text-muted">{{ $row->data_selected_model_id }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_model_name: <span class="text-muted">{{ $row->data_selected_model_name }}</span></span>
                                <hr class="p-0 m-0">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_generation_id: <span class="text-muted">{{ $row->data_selected_generation_id }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_generation_name: <span class="text-muted">{{ $row->data_selected_generation_name }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_generation_yearStart: <span class="text-muted">{{ $row->data_selected_generation_yearStart }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_generation_yearEnd: <span class="text-muted">{{ $row->data_selected_generation_yearEnd }}</span></span>
                                <hr class="p-0 m-0">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_engine_fuelTypeId: <span class="text-muted">{{ $row->data_selected_engine_fuelTypeId }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_engine_fuelTypeName: <span class="text-muted">{{ $row->data_selected_engine_fuelTypeName }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_engine_id: <span class="text-muted">{{ $row->data_selected_engine_id }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_engine_name: <span class="text-muted">{{ $row->data_selected_engine_name }}</span></span>
                                <hr class="p-0 m-0">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_ecu_id: <span class="text-muted">{{ $row->data_selected_ecu_id }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_selected_ecu_name: <span class="text-muted">{{ $row->data_selected_ecu_name }}</span></span>
                            </td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_ecu_name: <span class="text-muted">{{ $row->data_ecu_name }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_ecu_location: <span class="text-muted">{{ $row->data_ecu_location }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block max-w-100px fs-7">data_ecu_locationImg: <img class="img-fluid" src="{{ $row->data_ecu_locationImg }}" alt=""></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_ecu_obdLocation: <span class="text-muted">{{ $row->data_ecu_obdLocation }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block max-w-100px fs-7">data_ecu_obdLocationImg: <img class="img-fluid" src="{{ $row->data_ecu_obdLocationImg }}" alt=""></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_ecu_adbulueLocation: <span class="text-muted">{{ $row->data_ecu_adbulueLocation }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block max-w-100px fs-7">data_ecu_adbulueLocationImg: <img class="img-fluid" src="{{ $row->data_ecu_adbulueLocationImg }}" alt=""></span>
                            </td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_files_obdHelp: <span class="text-muted">{{ $row->data_files_obdHelp }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_files_kessv2Help: <span class="text-muted">{{ $row->data_files_kessv2Help }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_files_ktagHelp: <span class="text-muted">{{ $row->data_files_ktagHelp }}</span></span>
                            </td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_tools_jobType: <span class="text-muted">{{ $row->data_tools_jobType }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_tools_kessv2Protocol: <span class="text-muted">{{ $row->data_tools_kessv2Protocol }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_tools_ktagProtocol: <span class="text-muted">{{ $row->data_tools_ktagProtocol }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_tools_ktagProcessor: <span class="text-muted">{{ $row->data_tools_ktagProcessor }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_tools_autotuner: <span class="text-muted">{{ $row->data_tools_autotuner }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_tools_x17: <span class="text-muted">{{ $row->data_tools_x17 }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_tools_cmd: <span class="text-muted">{{ $row->data_tools_cmd }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_tools_ktagTsm: <span class="text-muted">{{ $row->data_tools_ktagTsm }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_tools_ktagClone: <span class="text-muted">{{ $row->data_tools_ktagClone }}</span></span>
                            </td>
                            <td class="px-2">
                                <!-- {{ $row->data_checkedOptions_idNameAvailableComment }} -->
                                {!!mb_strimwidth(($row->data_checkedOptions_idNameAvailableComment),0,100,'....')!!}
                            </td>
                            
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_notes_primary: <span class="text-muted">{{ $row->data_notes_primary }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">data_notes_secondary: <span class="text-muted">{{ $row->data_notes_secondary }}</span></span>
                            </td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">ecus_id: <span class="text-muted">{{ $row->ecus_id }}</span></span>
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">ecus_name: <span class="text-muted">{{ $row->ecus_name }}</span></span>
                            </td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">full: <span class="text-muted">{{ $row->full }}</span></span>
                            </td>
                            <td class="px-2">
                                <span class="text-dark fw-bolder text-hover-primary text-dark d-block fs-7">user_access_control: <span class="text-muted">{{ $row->user_access_control }}</span></span>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('deleteData') }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" value="{{ $row->id }}" name="user_id">
                                    <button type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection