<?php
// php 5.4.4

// 1�s�ڂ̓ǂݍ���(��s�ڂɃp�����[�^N�̌�, ���[�U�[�̐l��M, �g�b�vK)
$data_first_line = trim(fgets(STDIN));

// �z��ɂ���
$data_first_array = explode(' ',$data_first_line);

// 2�s�ڂ̓ǂݍ���(�_���P��)
$data_sec_line = trim(fgets(STDIN));
// �z��ɂ���
$data_sec_array = explode(' ',$data_sec_line);

// 3�s�ڈȍ~�̎擾
for($i = 0; $data_first_array[1] > $i; $i++){
    $data_n_line[$i] = trim(fgets(STDIN));
    
    // �f�[�^��z��ɂ���
    $data_n_array[$i] = explode(' ',$data_n_line[$i]);
    
    // ���_�̌v�Z
    $score_data[$i] = 0;
    for ($y = 0; $data_first_array[0] > $y; $y++){
        
        $score_data[$i] += $data_n_array[$i][$y] * $data_sec_array[$y];
        
        // �����_�̌v�Z
        $score_data[$i] = round($score_data[$i],0);
        //$score_data[$i] = floor($score_data[$i]);
    }
    
}
// ���ʂÂ�
rsort($score_data);

// �o��
for ($x = 0; $data_first_array[2] > $x; $x++){
    
    echo $score_data[$x];
    echo "\n";
}
?>