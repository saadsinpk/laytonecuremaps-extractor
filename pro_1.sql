-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 11:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` int(11) DEFAULT NULL,
  `data_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_power_oem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_power_stage1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_power_stage2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_torque_oem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_torque_stage1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_torque_stage2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_chart_rpm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_chart_power_oem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_chart_power_stage1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_chart_power_stage2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_chart_torque_oem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_chart_torque_stage1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_chart_torque_stage2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_vehicle_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_vehicle_make` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_vehicle_make_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_vehicle_model` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_vehicle_generation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_vehicle_fuel_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_vehicle_engine` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_vehicle_gearbox` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_vehicle_engine_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_selected_type_id` int(11) DEFAULT NULL,
  `data_selected_type_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_selected_make_id` int(11) DEFAULT NULL,
  `data_selected_make_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_selected_model_id` int(11) DEFAULT NULL,
  `data_selected_model_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_selected_generation_id` int(11) DEFAULT NULL,
  `data_selected_generation_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_selected_generation_yearStart` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_selected_generation_yearEnd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_selected_engine_fuelTypeId` int(11) DEFAULT NULL,
  `data_selected_engine_fuelTypeName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_selected_engine_id` int(11) DEFAULT NULL,
  `data_selected_engine_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_selected_ecu_id` int(11) DEFAULT NULL,
  `data_selected_ecu_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ecu_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ecu_location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ecu_locationImg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ecu_obdLocation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ecu_obdLocationImg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ecu_adbulueLocation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ecu_adbulueLocationImg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_files_obdHelp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_files_kessv2Help` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_files_ktagHelp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_tools_jobType` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_tools_kessv2Protocol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_tools_ktagProtocol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_tools_ktagProcessor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_tools_autotuner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_tools_x17` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_tools_cmd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_tools_ktagTsm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_tools_ktagClone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_checkedOptions_idNameAvailableComment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_notes_primary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_notes_secondary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ecus_id` int(11) DEFAULT NULL,
  `ecus_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_access_control` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raw_json_format` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`raw_json_format`)),
  `insert_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `data_id`, `data_name`, `data_power_oem`, `data_power_stage1`, `data_power_stage2`, `data_torque_oem`, `data_torque_stage1`, `data_torque_stage2`, `data_chart_rpm`, `data_chart_power_oem`, `data_chart_power_stage1`, `data_chart_power_stage2`, `data_chart_torque_oem`, `data_chart_torque_stage1`, `data_chart_torque_stage2`, `data_vehicle_type`, `data_vehicle_make`, `data_vehicle_make_image`, `data_vehicle_model`, `data_vehicle_generation`, `data_vehicle_fuel_type`, `data_vehicle_engine`, `data_vehicle_gearbox`, `data_vehicle_engine_code`, `data_selected_type_id`, `data_selected_type_name`, `data_selected_make_id`, `data_selected_make_name`, `data_selected_model_id`, `data_selected_model_name`, `data_selected_generation_id`, `data_selected_generation_name`, `data_selected_generation_yearStart`, `data_selected_generation_yearEnd`, `data_selected_engine_fuelTypeId`, `data_selected_engine_fuelTypeName`, `data_selected_engine_id`, `data_selected_engine_name`, `data_selected_ecu_id`, `data_selected_ecu_name`, `data_ecu_name`, `data_ecu_location`, `data_ecu_locationImg`, `data_ecu_obdLocation`, `data_ecu_obdLocationImg`, `data_ecu_adbulueLocation`, `data_ecu_adbulueLocationImg`, `data_files_obdHelp`, `data_files_kessv2Help`, `data_files_ktagHelp`, `data_tools_jobType`, `data_tools_kessv2Protocol`, `data_tools_ktagProtocol`, `data_tools_ktagProcessor`, `data_tools_autotuner`, `data_tools_x17`, `data_tools_cmd`, `data_tools_ktagTsm`, `data_tools_ktagClone`, `data_checkedOptions_idNameAvailableComment`, `data_notes_primary`, `data_notes_secondary`, `ecus_id`, `ecus_name`, `full`, `user_access_control`, `raw_json_format`, `insert_time`) VALUES
(1, 14076, 'Daihatsu Hijet 1.0 - 42-BHP  - 31-KW', '42', '', '', '0', '', '', '0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4500, 5000, 5500, 6000, 6500, 7000,', '0, 10, 17, 22, 28, 32, 37, 41, 41, 42, 42, 34, 0, 0', '', '', '', '', '', 'Vans', 'Daihatsu', 'https://tuning-files.s3.eu-west-2.amazonaws.com/images/media/X3OrtWtyhPgZ0DH9ggIrOsTbmsnVJL1iNd5ePYAx.png', 'Hijet', '1993 - 2006', 'Petrol', '1.0 - 42-BHP  - 31-KW', '', '', 292, 'Vans', 387, 'Daihatsu', 1700, 'Hijet', 0, '1993 - 2006', '1993', '2006', 16067, 'Petrol', 8725, '1.0 - 42-BHP  - 31-KW', 15345, 'Unknown ECU', 'Unknown ECU', '', '', '', '', '', '', '', '', '', '', '', '', 'Not yet supported - Check tool', 'Not yet supported - Check tool', 'Not yet supported - Check tool', 'Not yet supported - Check tool', '', '', 'id: 16341, name: ADBLUE/SCR OFF, available: , comment:  | id: 18611, name: AGS OFF (Active Grill Shutter), available: , comment:  | id: 16351, name: BMW SPORTS DISPLAY, available: , comment:  | id: 17828, name: COLD START NOISE, available: , comment:  | id: 16346, name: DPF/FAP OFF, available: , comment:  | id: 16339, name: DTC OFF, available: , comment:  | id: 16345, name: EGR OFF, available: 1, comment:  | id: 18259, name: ENCRYPT/DECRYPT, available: , comment:  | id: 16353, name: EVAP REMOVAL, available: , comment:  | id: 16354, name: EXHAUST FLAP REMOVAL, available: , comment:  | id: 16355, name: GPF/OPF OFF, available: , comment:  | id: 16349, name: HARDCUT POPCORN LIMITER (DIESEL ONLY), available: , comment:  | id: 16343, name: HOT START, available: , comment:  | id: 17841, name: IMMO OFF, available: , comment:  | id: 16347, name: MAF OFF, available: , comment:  | id: 16344, name: O2/LAMBA OFF, available: , comment:  | id: 16357, name: ORIGINAL FILE REQUEST, available: , comment:  | id: 16352, name: POP & BANG (PETROL ONLY), available: , comment:  | id: 17842, name: READINESS CALIBRATION, available: , comment:  | id: 16358, name: SAP DELETE (Secondry Air Pump), available: , comment:  | id: 16340, name: SPEED LIMIT OFF, available: 1, comment:  | id: 16338, name: START STOP DISABLE, available: , comment:  | id: 16342, name: SWIRL FLAPS OFF, available: , comment:  | id: 16350, name: TQ MONITORING OFF, available: , comment:  | id: 16348, name: TVA OFF, available: , comment: ', '', '', 15345, 'Unknown ECU', '1', '{\"upload\":{\"service\":\"upload\",\"status\":true,\"limit\":30,\"usage\":0,\"exceeded\":false},\"vsearch\":{\"service\":\"vsearch\",\"status\":true,\"limit\":30,\"usage\":4,\"exceeded\":false},\"vrm\":{\"service\":\"vrm\",\"status\":false,\"limit\":0,\"usage\":0,\"exceeded\":false},\"ticket\":{\"service\":\"ticket\",\"status\":false,\"limit\":0}}', '{\"data\":{\"id\":14076,\"name\":\"Daihatsu Hijet 1.0 - 42-BHP  - 31-KW\",\"power\":{\"oem\":42,\"stage1\":null,\"stage2\":null},\"torque\":{\"oem\":0,\"stage1\":null,\"stage2\":null},\"chart\":{\"rpm\":\"0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4500, 5000, 5500, 6000, 6500, 7000,\",\"power\":{\"oem\":\"0, 10, 17, 22, 28, 32, 37, 41, 41, 42, 42, 34, 0, 0\",\"stage1\":null,\"stage2\":null},\"torque\":{\"oem\":null,\"stage1\":null,\"stage2\":null}},\"vehicle\":{\"type\":\"Vans\",\"make\":\"Daihatsu\",\"make_image\":\"https://tuning-files.s3.eu-west-2.amazonaws.com/images/media/X3OrtWtyhPgZ0DH9ggIrOsTbmsnVJL1iNd5ePYAx.png\",\"model\":\"Hijet\",\"generation\":\"1993 - 2006\",\"fuel_type\":\"Petrol\",\"engine\":\"1.0 - 42-BHP  - 31-KW\",\"gearbox\":null,\"engine_code\":\"\"},\"selected\":{\"type\":{\"id\":292,\"name\":\"Vans\"},\"make\":{\"id\":387,\"name\":\"Daihatsu\"},\"model\":{\"id\":1700,\"name\":\"Hijet\"},\"generation\":{\"id\":0,\"name\":\"1993 - 2006\",\"year_start\":1993,\"year_end\":2006},\"engine\":{\"fuel_type_id\":16067,\"fuel_type_name\":\"Petrol\",\"id\":8725,\"name\":\"1.0 - 42-BHP  - 31-KW\"},\"ecu\":{\"id\":15345,\"name\":\"Unknown ECU\"}},\"ecu\":{\"name\":\"Unknown ECU\",\"ecu_location\":null,\"ecu_location_image\":null,\"obd_location\":null,\"obd_location_image\":null,\"adblue_location\":null,\"adblue_location_image\":null},\"files\":{\"obd_help\":null,\"kessv2_help\":null,\"ktag_help\":null},\"tools\":{\"job_type\":null,\"kessv2_protocol\":\"\",\"ktag_protocol\":\"\",\"ktag_processor\":\"Not yet supported - Check tool\",\"autotuner\":\"Not yet supported - Check tool\",\"x17\":\"Not yet supported - Check tool\",\"cmd\":\"Not yet supported - Check tool\",\"ktag_tsm\":null,\"ktag_clone\":null},\"checked_options\":[{\"id\":16341,\"name\":\"ADBLUE/SCR OFF\",\"available\":false,\"comment\":null},{\"id\":18611,\"name\":\"AGS OFF (Active Grill Shutter)\",\"available\":false,\"comment\":null},{\"id\":16351,\"name\":\"BMW SPORTS DISPLAY\",\"available\":false,\"comment\":null},{\"id\":17828,\"name\":\"COLD START NOISE\",\"available\":false,\"comment\":null},{\"id\":16346,\"name\":\"DPF/FAP OFF\",\"available\":false,\"comment\":null},{\"id\":16339,\"name\":\"DTC OFF\",\"available\":false,\"comment\":null},{\"id\":16345,\"name\":\"EGR OFF\",\"available\":true,\"comment\":null},{\"id\":18259,\"name\":\"ENCRYPT/DECRYPT\",\"available\":false,\"comment\":null},{\"id\":16353,\"name\":\"EVAP REMOVAL\",\"available\":false,\"comment\":null},{\"id\":16354,\"name\":\"EXHAUST FLAP REMOVAL\",\"available\":false,\"comment\":null},{\"id\":16355,\"name\":\"GPF/OPF OFF\",\"available\":false,\"comment\":null},{\"id\":16349,\"name\":\"HARDCUT POPCORN LIMITER (DIESEL ONLY)\",\"available\":false,\"comment\":null},{\"id\":16343,\"name\":\"HOT START\",\"available\":false,\"comment\":null},{\"id\":17841,\"name\":\"IMMO OFF\",\"available\":false,\"comment\":null},{\"id\":16347,\"name\":\"MAF OFF\",\"available\":false,\"comment\":null},{\"id\":16344,\"name\":\"O2/LAMBA OFF\",\"available\":false,\"comment\":null},{\"id\":16357,\"name\":\"ORIGINAL FILE REQUEST\",\"available\":false,\"comment\":null},{\"id\":16352,\"name\":\"POP & BANG (PETROL ONLY)\",\"available\":false,\"comment\":null},{\"id\":17842,\"name\":\"READINESS CALIBRATION\",\"available\":false,\"comment\":null},{\"id\":16358,\"name\":\"SAP DELETE (Secondry Air Pump)\",\"available\":false,\"comment\":null},{\"id\":16340,\"name\":\"SPEED LIMIT OFF\",\"available\":true,\"comment\":null},{\"id\":16338,\"name\":\"START STOP DISABLE\",\"available\":false,\"comment\":null},{\"id\":16342,\"name\":\"SWIRL FLAPS OFF\",\"available\":false,\"comment\":null},{\"id\":16350,\"name\":\"TQ MONITORING OFF\",\"available\":false,\"comment\":null},{\"id\":16348,\"name\":\"TVA OFF\",\"available\":false,\"comment\":null}],\"notes\":{\"primary\":\"\",\"secondary\":\"\"}},\"ecus\":[{\"id\":15345,\"name\":\"Unknown ECU\"}],\"full\":true,\"user\":{\"access_control\":{\"upload\":{\"service\":\"upload\",\"status\":true,\"limit\":30,\"usage\":0,\"exceeded\":false},\"vsearch\":{\"service\":\"vsearch\",\"status\":true,\"limit\":30,\"usage\":4,\"exceeded\":false},\"vrm\":{\"service\":\"vrm\",\"status\":false,\"limit\":0,\"usage\":0,\"exceeded\":false},\"ticket\":{\"service\":\"ticket\",\"status\":false,\"limit\":0}}},\"status\":true}', NULL),
(6, 14076, 'Daihatsu Hijet 1.0 - 42-BHP  - 31-KW', '42', '', '', '0', '', '', '0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4500, 5000, 5500, 6000, 6500, 7000,', '0, 10, 17, 22, 28, 32, 37, 41, 41, 42, 42, 34, 0, 0', '', '', '', '', '', 'Vans', 'Daihatsu', 'https://tuning-files.s3.eu-west-2.amazonaws.com/images/media/X3OrtWtyhPgZ0DH9ggIrOsTbmsnVJL1iNd5ePYAx.png', 'Hijet', '1993 - 2006', 'Petrol', '1.0 - 42-BHP  - 31-KW', '', '', 292, 'Vans', 387, 'Daihatsu', 1700, 'Hijet', 0, '1993 - 2006', '1993', '2006', 16067, 'Petrol', 8725, '1.0 - 42-BHP  - 31-KW', 15345, 'Unknown ECU', 'Unknown ECU', '', '', '', '', '', '', '', '', '', '', '', '', 'Not yet supported - Check tool', 'Not yet supported - Check tool', 'Not yet supported - Check tool', 'Not yet supported - Check tool', '', '', 'id: 16341, name: ADBLUE/SCR OFF, available: , comment:  | id: 18611, name: AGS OFF (Active Grill Shutter), available: , comment:  | id: 16351, name: BMW SPORTS DISPLAY, available: , comment:  | id: 17828, name: COLD START NOISE, available: , comment:  | id: 16346, name: DPF/FAP OFF, available: , comment:  | id: 16339, name: DTC OFF, available: , comment:  | id: 16345, name: EGR OFF, available: 1, comment:  | id: 18259, name: ENCRYPT/DECRYPT, available: , comment:  | id: 16353, name: EVAP REMOVAL, available: , comment:  | id: 16354, name: EXHAUST FLAP REMOVAL, available: , comment:  | id: 16355, name: GPF/OPF OFF, available: , comment:  | id: 16349, name: HARDCUT POPCORN LIMITER (DIESEL ONLY), available: , comment:  | id: 16343, name: HOT START, available: , comment:  | id: 17841, name: IMMO OFF, available: , comment:  | id: 16347, name: MAF OFF, available: , comment:  | id: 16344, name: O2/LAMBA OFF, available: , comment:  | id: 16357, name: ORIGINAL FILE REQUEST, available: , comment:  | id: 16352, name: POP & BANG (PETROL ONLY), available: , comment:  | id: 17842, name: READINESS CALIBRATION, available: , comment:  | id: 16358, name: SAP DELETE (Secondry Air Pump), available: , comment:  | id: 16340, name: SPEED LIMIT OFF, available: 1, comment:  | id: 16338, name: START STOP DISABLE, available: , comment:  | id: 16342, name: SWIRL FLAPS OFF, available: , comment:  | id: 16350, name: TQ MONITORING OFF, available: , comment:  | id: 16348, name: TVA OFF, available: , comment: ', '', '', 15345, 'Unknown ECU', '1', '{\"upload\":{\"service\":\"upload\",\"status\":true,\"limit\":30,\"usage\":0,\"exceeded\":false},\"vsearch\":{\"service\":\"vsearch\",\"status\":true,\"limit\":30,\"usage\":4,\"exceeded\":false},\"vrm\":{\"service\":\"vrm\",\"status\":false,\"limit\":0,\"usage\":0,\"exceeded\":false},\"ticket\":{\"service\":\"ticket\",\"status\":false,\"limit\":0}}', '{\"data\":{\"id\":14076,\"name\":\"Daihatsu Hijet 1.0 - 42-BHP  - 31-KW\",\"power\":{\"oem\":42,\"stage1\":null,\"stage2\":null},\"torque\":{\"oem\":0,\"stage1\":null,\"stage2\":null},\"chart\":{\"rpm\":\"0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4500, 5000, 5500, 6000, 6500, 7000,\",\"power\":{\"oem\":\"0, 10, 17, 22, 28, 32, 37, 41, 41, 42, 42, 34, 0, 0\",\"stage1\":null,\"stage2\":null},\"torque\":{\"oem\":null,\"stage1\":null,\"stage2\":null}},\"vehicle\":{\"type\":\"Vans\",\"make\":\"Daihatsu\",\"make_image\":\"https://tuning-files.s3.eu-west-2.amazonaws.com/images/media/X3OrtWtyhPgZ0DH9ggIrOsTbmsnVJL1iNd5ePYAx.png\",\"model\":\"Hijet\",\"generation\":\"1993 - 2006\",\"fuel_type\":\"Petrol\",\"engine\":\"1.0 - 42-BHP  - 31-KW\",\"gearbox\":null,\"engine_code\":\"\"},\"selected\":{\"type\":{\"id\":292,\"name\":\"Vans\"},\"make\":{\"id\":387,\"name\":\"Daihatsu\"},\"model\":{\"id\":1700,\"name\":\"Hijet\"},\"generation\":{\"id\":0,\"name\":\"1993 - 2006\",\"year_start\":1993,\"year_end\":2006},\"engine\":{\"fuel_type_id\":16067,\"fuel_type_name\":\"Petrol\",\"id\":8725,\"name\":\"1.0 - 42-BHP  - 31-KW\"},\"ecu\":{\"id\":15345,\"name\":\"Unknown ECU\"}},\"ecu\":{\"name\":\"Unknown ECU\",\"ecu_location\":null,\"ecu_location_image\":null,\"obd_location\":null,\"obd_location_image\":null,\"adblue_location\":null,\"adblue_location_image\":null},\"files\":{\"obd_help\":null,\"kessv2_help\":null,\"ktag_help\":null},\"tools\":{\"job_type\":null,\"kessv2_protocol\":\"\",\"ktag_protocol\":\"\",\"ktag_processor\":\"Not yet supported - Check tool\",\"autotuner\":\"Not yet supported - Check tool\",\"x17\":\"Not yet supported - Check tool\",\"cmd\":\"Not yet supported - Check tool\",\"ktag_tsm\":null,\"ktag_clone\":null},\"checked_options\":[{\"id\":16341,\"name\":\"ADBLUE/SCR OFF\",\"available\":false,\"comment\":null},{\"id\":18611,\"name\":\"AGS OFF (Active Grill Shutter)\",\"available\":false,\"comment\":null},{\"id\":16351,\"name\":\"BMW SPORTS DISPLAY\",\"available\":false,\"comment\":null},{\"id\":17828,\"name\":\"COLD START NOISE\",\"available\":false,\"comment\":null},{\"id\":16346,\"name\":\"DPF/FAP OFF\",\"available\":false,\"comment\":null},{\"id\":16339,\"name\":\"DTC OFF\",\"available\":false,\"comment\":null},{\"id\":16345,\"name\":\"EGR OFF\",\"available\":true,\"comment\":null},{\"id\":18259,\"name\":\"ENCRYPT/DECRYPT\",\"available\":false,\"comment\":null},{\"id\":16353,\"name\":\"EVAP REMOVAL\",\"available\":false,\"comment\":null},{\"id\":16354,\"name\":\"EXHAUST FLAP REMOVAL\",\"available\":false,\"comment\":null},{\"id\":16355,\"name\":\"GPF/OPF OFF\",\"available\":false,\"comment\":null},{\"id\":16349,\"name\":\"HARDCUT POPCORN LIMITER (DIESEL ONLY)\",\"available\":false,\"comment\":null},{\"id\":16343,\"name\":\"HOT START\",\"available\":false,\"comment\":null},{\"id\":17841,\"name\":\"IMMO OFF\",\"available\":false,\"comment\":null},{\"id\":16347,\"name\":\"MAF OFF\",\"available\":false,\"comment\":null},{\"id\":16344,\"name\":\"O2/LAMBA OFF\",\"available\":false,\"comment\":null},{\"id\":16357,\"name\":\"ORIGINAL FILE REQUEST\",\"available\":false,\"comment\":null},{\"id\":16352,\"name\":\"POP & BANG (PETROL ONLY)\",\"available\":false,\"comment\":null},{\"id\":17842,\"name\":\"READINESS CALIBRATION\",\"available\":false,\"comment\":null},{\"id\":16358,\"name\":\"SAP DELETE (Secondry Air Pump)\",\"available\":false,\"comment\":null},{\"id\":16340,\"name\":\"SPEED LIMIT OFF\",\"available\":true,\"comment\":null},{\"id\":16338,\"name\":\"START STOP DISABLE\",\"available\":false,\"comment\":null},{\"id\":16342,\"name\":\"SWIRL FLAPS OFF\",\"available\":false,\"comment\":null},{\"id\":16350,\"name\":\"TQ MONITORING OFF\",\"available\":false,\"comment\":null},{\"id\":16348,\"name\":\"TVA OFF\",\"available\":false,\"comment\":null}],\"notes\":{\"primary\":\"\",\"secondary\":\"\"}},\"ecus\":[{\"id\":15345,\"name\":\"Unknown ECU\"}],\"full\":true,\"user\":{\"access_control\":{\"upload\":{\"service\":\"upload\",\"status\":true,\"limit\":30,\"usage\":0,\"exceeded\":false},\"vsearch\":{\"service\":\"vsearch\",\"status\":true,\"limit\":30,\"usage\":4,\"exceeded\":false},\"vrm\":{\"service\":\"vrm\",\"status\":false,\"limit\":0,\"usage\":0,\"exceeded\":false},\"ticket\":{\"service\":\"ticket\",\"status\":false,\"limit\":0}}},\"status\":true}', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `engine_datas`
--

CREATE TABLE `engine_datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `engine_datas`
--

INSERT INTO `engine_datas` (`id`, `data_id`, `name`, `fuel_type_id`, `fuel_type_name`, `created_at`, `updated_at`) VALUES
(1, '4654', '0.6 - 54-BHP - 40-KW', '55454', 'petrol', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generation_datas`
--

CREATE TABLE `generation_datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generation_datas`
--

INSERT INTO `generation_datas` (`id`, `data_id`, `name`, `year_start`, `year_end`, `created_at`, `updated_at`) VALUES
(1, '245454', '2002 - 2003', '2002', '2003', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `make_datas`
--

CREATE TABLE `make_datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `make_datas`
--

INSERT INTO `make_datas` (`id`, `data_id`, `name`, `created_at`, `updated_at`) VALUES
(1, '56454', 'New york', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_10_114212_create_datas_table', 2),
(7, '2022_03_10_180317_create_engine_datas_table', 3),
(8, '2022_03_10_180507_create_generation_datas_table', 3),
(9, '2022_03_10_180608_create_make_datas_table', 3),
(10, '2022_03_10_180800_create_modal_datas_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `modal_datas`
--

CREATE TABLE `modal_datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modal_datas`
--

INSERT INTO `modal_datas` (`id`, `data_id`, `name`, `created_at`, `updated_at`) VALUES
(1, '4454', 'Earth', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('webproject7864@gmail.com', '$2y$10$L.ZvYI6nb4vjsTfKgr4sweeD0H61oN3RoX4fh111XmJ7YOnTKGvxy', '2022-03-09 13:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `img`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'user58', 'admin2', 'admin@mail.com', 'uploads/uploaded_profile/S5Ka5RAW05SND7z1xMQaDVUsgvTZFK9muEyo8hW4.png', NULL, '$2y$10$1c7ki8t0/cvqPzocIOoSzeozqc4o5cGeBjWL.2Ab84.vkQqGwWifm', NULL, '2022-03-10 14:06:44', '2022-03-10 14:06:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engine_datas`
--
ALTER TABLE `engine_datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `generation_datas`
--
ALTER TABLE `generation_datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make_datas`
--
ALTER TABLE `make_datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modal_datas`
--
ALTER TABLE `modal_datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `engine_datas`
--
ALTER TABLE `engine_datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generation_datas`
--
ALTER TABLE `generation_datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `make_datas`
--
ALTER TABLE `make_datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `modal_datas`
--
ALTER TABLE `modal_datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
