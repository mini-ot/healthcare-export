<?php

$con = file_get_contents('./3(1).xml');
$con = str_replace('{{name}}', $data['name'], $con);
if ($data['sex'] == 2)
    $con = str_replace('□女', '☑女', $con);
else
    $con = str_replace('□男', '☑男', $con);
$con = str_replace('{{age}}', $data['age'], $con);
$con = str_replace('{{address}}', $data['address'], $con);

$con = str_replace('{{contact_name}}', $data['contact_name'], $con);
$con = str_replace('{{contact_mobile}}', $data['contact_mobile'], $con);
$con = str_replace('{{mobile}}', $data['mobile'], $con);
$con = str_replace('{{sin}}', $data['sin'], $con);
$con = str_replace('{{idcard}}', $data['idcard'], $con);


$con = str_replace('{{birthday_year}}', date('Y', strtotime($data['birthday'])), $con);
$con = str_replace('{{birthday_month}}', date('m', strtotime($data['birthday'])), $con);
$con = str_replace('{{birthday_day}}', date('d', strtotime($data['birthday'])), $con);

if ($data['nation'] == '汉族' || $data['nation'] == '汉') {
    $con = str_replace('□汉族', '☑汉族', $con);
    $con = str_replace('{{nation}}', '    ', $con);
} else {
    $con = str_replace('□少数民族', '☑少数民族', $con);
    $con = str_replace('{{nation}}', $data['nation'], $con);
}

$education_level = '□文盲及半文盲□小学□初中□高中/技校/中专□大学专科及以上□不详';
switch ($data['education_level']) {
    case 1:
        $education_level = str_replace('□文盲及半文盲', '☑文盲及半文盲', $education_level);
        break;
    case 2:
        $education_level = str_replace('□小学', '☑小学', $education_level);
        break;
    case 3:
        $education_level = str_replace('□初中', '☑初中', $education_level);
        break;
    case 4:
        $education_level = str_replace('□高中/技校/中专', '☑高中/技校/中专', $education_level);
        break;
    case 5:
        $education_level = str_replace('□大学专科及以上', '☑大学专科及以上', $education_level);
        break;
    case 6:
        $education_level = str_replace('□不详', '☑不详', $education_level);
        break;
}
$con = str_replace('{{education_level}}', $education_level, $con);

$profession = '□国家机关/党群组织/企业/事业单位负责人□专业技术人员□办事人员和有关人员□商业、服务业人员□ 农、林、牧、渔、水利业生产人员□生产、运输设备操作人员及有关人员□军人□不便分类的其他从业人员';
switch ($data['profession']) {
    case 1:
        $profession = str_replace('□国家机关/党群组织/企业/事业单位负责人', '☑国家机关/党群组织/企业/事业单位负责人', $profession);
        break;
    case 2:
        $profession = str_replace('□专业技术人员', '☑专业技术人员', $profession);
        break;
    case 3:
        $profession = str_replace('□办事人员和有关人员', '☑办事人员和有关人员', $profession);
        break;
    case 4:
        $profession = str_replace('□商业、服务业人员', '☑商业、服务业人员', $profession);
        break;
    case 5:
        $profession = str_replace('□农、林、牧、渔、水利业生产人员', '☑农、林、牧、渔、水利业生产人员', $profession);
        break;
    case 6:
        $profession = str_replace('□生产、运输设备操作人员及有关人员', '☑生产、运输设备操作人员及有关人员', $profession);
        break;
    case 7:
        $profession = str_replace('□军人', '☑军人', $profession);
        break;
    case 8:
        $profession = str_replace('□不便分类的其他从业人员', '☑不便分类的其他从业人员', $profession);
        break;
}
$con = str_replace('{{profession}}', $profession, $con);

switch ($data['marital_status']) {
    case 1:
        $con = str_replace('{{marital_status}}', '☑未婚□已婚□丧偶□离婚□未说明的婚姻状况', $con);
        break;
    case 2:
        $con = str_replace('{{marital_status}}', '□未婚☑已婚□丧偶□离婚□未说明的婚姻状况', $con);
        break;
    case 3:
        $con = str_replace('{{marital_status}}', '□未婚□已婚☑丧偶□离婚□未说明的婚姻状况', $con);
        break;
    case 4:
        $con = str_replace('{{marital_status}}', '□未婚□已婚□丧偶☑离婚□未说明的婚姻状况', $con);
        break;
    case 5:
        $con = str_replace('{{marital_status}}', '□未婚□已婚□丧偶□离婚☑未说明的婚姻状况', $con);
        break;
    default:
        $con = str_replace('{{marital_status}}', '□未婚□已婚□丧偶□离婚□未说明的婚姻状况', $con);
        break;
}

switch ($data['pay_method']) {
    case 1:
        $con = str_replace('{{pay_method}}', '☑未婚□已婚□丧偶□离婚□未说明的婚姻状况', $con);
        break;
    case 2:
        $con = str_replace('{{pay_method}}', '□未婚☑已婚□丧偶□离婚□未说明的婚姻状况', $con);
        break;
    case 3:
        $con = str_replace('{{pay_method}}', '□未婚□已婚☑丧偶□离婚□未说明的婚姻状况', $con);
        break;
    case 4:
        $con = str_replace('{{pay_method}}', '□未婚□已婚□丧偶☑离婚□未说明的婚姻状况', $con);
        break;
    case 5:
        $con = str_replace('{{pay_method}}', '□未婚□已婚□丧偶□离婚☑未说明的婚姻状况', $con);
        break;
    default:
        $con = str_replace('{{pay_method}}', '□未婚□已婚□丧偶□离婚□未说明的婚姻状况', $con);
        break;
}


switch ($data['live_status']) {
    case 1:
        $con = str_replace('{{live_status}}', '☑独居□与配偶/伴侣居住□与子女居住□与父母居住□与兄弟姐妹居住□与其他亲属居住□与非亲属关系的人居住□养老机构', $con);
        break;
    case 2:
        $con = str_replace('{{live_status}}', '□独居□与配偶/伴侣居住☑与子女居住□与父母居住□与兄弟姐妹居住□与其他亲属居住□与非亲属关系的人居住□养老机构', $con);
        break;
    case 3:
        $con = str_replace('{{live_status}}', '□独居□与配偶/伴侣居住□与子女居住□与父母居住☑与兄弟姐妹居住□与其他亲属居住□与非亲属关系的人居住□养老机构', $con);
        break;
    case 4:
        $con = str_replace('{{live_status}}', '□独居□与配偶/伴侣居住□与子女居住□与父母居住□与兄弟姐妹居住☑与其他亲属居住□与非亲属关系的人居住□养老机构', $con);
        break;
    case 5:
        $con = str_replace('{{live_status}}', '□独居□与配偶/伴侣居住□与子女居住□与父母居住□与兄弟姐妹居住□与其他亲属居住☑与非亲属关系的人居住□养老机构', $con);
        break;
    case 6:
        $con = str_replace('{{live_status}}', '□独居□与配偶/伴侣居住□与子女居住□与父母居住□与兄弟姐妹居住□与其他亲属居住□与非亲属关系的人居住☑养老机构', $con);
        break;
    default:
        $con = str_replace('{{live_status}}', '□独居□与配偶/伴侣居住□与子女居住□与父母居住□与兄弟姐妹居住□与其他亲属居住□与非亲属关系的人居住□养老机构', $con);
        break;
}

$money_source = '□退休金/养老金□子女补贴□亲友资助□其他补贴';
$money_source_arr = explode(',', $data['profession']);
if (in_array(1, $money_source_arr)) $profession = str_replace('□休金/养老金', '☑休金/养老金', $profession);
if (in_array(2, $money_source_arr)) $profession = str_replace('□子女补贴', '☑子女补贴', $profession);
if (in_array(3, $money_source_arr)) $profession = str_replace('□亲友资助', '☑亲友资助', $profession);
if (in_array(4, $money_source_arr)) $profession = str_replace('□其他补贴', '☑其他补贴', $profession);
$con = str_replace('{{money_source}}', $money_source, $con);

$informant = $data['informant'];
if (isset($informant[0])) {
    $data['informant'] = $informant[0]['informant'];
    $data['informant_relation'] = $informant[0]['informant_relation'];
    $data['informant_mobile'] = $informant[0]['informant_mobile'];
} else {
    $data['informant'] = '';
    $data['informant_relation'] = '';
    $data['informant_mobile'] = '';
}
if (isset($informant[1])) {
    $data['informant_1'] = $informant[1]['informant'];
    $data['informant_relation_1'] = $informant[1]['informant_relation'];
    $data['informant_mobile_1'] = $informant[1]['informant_mobile'];
} else {
    $data['informant_1'] = '';
    $data['informant_relation_1'] = '';
    $data['informant_mobile_1'] = '';
}

$con = str_replace('{{informant}}', $data['informant'], $con);
$con = str_replace('{{informant_relation}}', $data['informant_relation'], $con);
$con = str_replace('{{informant_mobile}}', $data['informant_mobile'], $con);
$con = str_replace('{{informant_1}}', $data['informant_1'], $con);
$con = str_replace('{{informant_relation_1}}', $data['informant_relation_1'], $con);
$con = str_replace('{{informant_mobile_1}}', $data['informant_mobile_1'], $con);
$con = str_replace('{{consulting_remark}}', $data['consulting_remark'], $con);

$con = checkbox_replace($con, $data, 'power_assess', ['', '无肢体障碍、无认知障碍', '下肢功能障碍', '轻度认知障碍', '下肢功能障碍、轻度认知障碍', '中度失能（上肢可活动、下肢失能）', '重度失能（四肢失能）', '失能失智（癌末/安宁）', '中度失智（非精神类疾病）']);

$con = checkbox_replace($con, $data, 'hobby', ['', '活动健身', '音乐舞蹈', '手工才艺', '书画阅读', '复合型']);

echo $con;

//替换选择框
function checkbox_replace($con, $data, $param, $options)
{
    $text = '';
    $arr = explode(',', $data[$param]);
    foreach ($options as $k => $v) {
        if ($v == '') continue;
        $text .= in_array($k, $arr) ? '☑' : '□';
        $text .= $v;
    }
    return str_replace('{{' . $param . '}}', $text, $con);
}