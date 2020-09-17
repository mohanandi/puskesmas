<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('kode')) {
        redirect('auth');
    } else {
        // $role_id = $ci->session->userdata('role_id');
        // $menu = $ci->uri->segment(1);

        // $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        // $menu_id = $queryMenu['id'];

        // $userAccess = $ci->db->get_where('user_access_menu', [
        //     'role_id' => $role_id,
        //     'menu_id' => $menu_id
        // ]);

        // if ($userAccess->num_rows() < 1) {
        //     redirect('auth/blocked');
        // }
    }
}


function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function is_terisi($data, $name)
{
    $ci = get_instance();
    $database = $data;
    if ($data) :
        if ($name) :
            echo '<option value="' . $name . '">' . $name . '</option>';
        else :
            echo "<option value='$database'> $database </option>";
        endif;
    else :
        if ($name) :
            echo '<option value="' . $name . '">' . $name . '</option>';
        else :
            echo "<option selected>Pilih ...</option>";
        endif;
    endif;
}

function ppkp($table, $kode)
{
    $ci = get_instance();
    $data = $ci->db->get_where($table, ['kode' => $kode])->row_array();
    if ($data['dipandu_jelas'] == 1) {
        $nilai1 = 10;
    } else if ($data['dipandu_jelas'] == 2) {
        $nilai1 = 5;
    } else if ($data['dipandu_jelas'] == 3) {
        $nilai1 = 0;
    }
    if ($data['jadwal_jelas'] == 1) {
        $nilai2 = 10;
    } else if ($data['jadwal_jelas'] == 2) {
        $nilai2 = 5;
    } else if ($data['jadwal_jelas'] == 3) {
        $nilai2 = 0;
    }

    if ($data['lintas_program'] == 1) {
        $nilai3 = 10;
    } else if ($data['lintas_program'] == 2) {
        $nilai3 = 5;
    } else if ($data['lintas_program'] == 3) {
        $nilai3 = 0;
    }
    if ($data['dimonitor_kepala'] == 1) {
        $nilai4 = 10;
    } else if ($data['dimonitor_kepala'] == 2) {
        $nilai4 = 5;
    } else if ($data['dimonitor_kepala'] == 3) {
        $nilai4 = 0;
    }
    if ($data['masukan_pelanggan'] == 1) {
        $nilai5 = 10;
    } else if ($data['masukan_pelanggan'] == 2) {
        $nilai5 = 5;
    } else if ($data['masukan_pelanggan'] == 3) {
        $nilai5 = 0;
    }

    if ($data['pelayanan_pelanggan'] == 1) {
        $nilai6 = 10;
    } else if ($data['pelayanan_pelanggan'] == 2) {
        $nilai6 = 5;
    } else if ($data['pelayanan_pelanggan'] == 3) {
        $nilai6 = 0;
    }
    return $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6;
}
