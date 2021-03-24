<?php

namespace frontend\controllers;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Yii;
use common\models\User;
use common\logics\UserSearchLogic;
use yii\web\NotFoundHttpException;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends BaseController
{
    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearchLogic();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * 数据导出
     * @throws \PhpOffice\PhpSpreadsheet\Writer\Exception
     */
    public function actionExport()
    {
        $users = User::find()
            ->orderBy(['id' => SORT_DESC])
            ->all();

        $newExcel = new Spreadsheet();  //创建一个新的excel文档
        $objSheet = $newExcel->getActiveSheet();  //获取当前操作sheet的对象

        $titles = [
            'id', 'title', 'gender', 'txtForename', 'txtSurname',
            'Preferred first name', 'Previous surname at 16th birthday',
            'Postal address', 'Is your permanent home in the UK?',
            'Home address', 'txtHomePhone', 'txtMobilePhone', 'emailText', 'Date of birth', 'Country of birth', 'Date of first entry to UK',
            'Nationality', 'Dual nationality', 'Area of permanent residence',
            'Residential category', 'Unique Learner Number (ULN)',
            'Test of English as a Foreign Language (TOEFL) Number',
            'International English Language Testing System (IELTS) TRF Number', 'Do you require a student visa?',
            'Have you previously studied in the UK on a student visa?',
            'Fee code', 'Student support arrangements',
            'Have you ever lived or worked in the EU (excluding the UK), European Economic Area (EEA) or Switzerland?',
            'Do you have a parent, step parent, spouse or civil partner who is an EU (excluding the UK), EEA or Swiss national?',
            'Full name of nominee', 'Relationship to you',
            'Category',
            'Please give details of any special needs',
            'Choices',
            'Education',
            'Employment',
            'Personal statement',
        ];

        $k_pre = 'A';
        foreach ($titles as $key => $val) {
            $objSheet->setCellValue($k_pre . '1', $val);
            $k_pre++;
        }

        $i = 2;
        foreach ($users as $key => $val) {
            $objSheet->setCellValue('A' . $i, $val->id);
            $objSheet->setCellValue('B' . $i, $val->title);
            $objSheet->setCellValue('C' . $i, $val->gender);
            $objSheet->setCellValue('D' . $i, $val->txtForename);
            $objSheet->setCellValue('E' . $i, $val->txtSurname);
            $objSheet->setCellValue('F' . $i, $val->personalDetails['txtPrefFName']);
            $objSheet->setCellValue('G' . $i, $val->personalDetails['txtPrefFName']);
            $objSheet->setCellValue('H' . $i, $val->addrLine1Text . PHP_EOL . $val->addrLine2Text . PHP_EOL . $val->addrLine3Text . PHP_EOL . $val->addrLine4Text . PHP_EOL . $val->Country);
            $objSheet->setCellValue('I' . $i, $val->personalDetails['rdPermUK']);
            $objSheet->setCellValue('J' . $i, $val->personalDetails['addrLine1Text'] . PHP_EOL . $val->personalDetails['addrLine2Text'] . PHP_EOL . $val->personalDetails['addrLine3Text'] . PHP_EOL . $val->personalDetails['addrLine4Text'] . PHP_EOL . $val->Country);
            $objSheet->setCellValue('K' . $i, $val->txtHomePhone);
            $objSheet->setCellValue('L' . $i, $val->txtMobilePhone);
            $objSheet->setCellValue('M' . $i, $val->emailText);
            $objSheet->setCellValue('N' . $i, $val->cboDobDay . '/' . $val->cboDobMonth . '/' . $val->cboDobYear);
            $objSheet->setCellValue('O' . $i, $val->personalDetails['txtCntryOfBirth']);
            $objSheet->setCellValue('P' . $i, $val->personalDetails['cboEntryUkDay'] . '/' . $val->personalDetails['cboEntryUkMonth'] . '/' . $val->personalDetails['cboEntryUkYear']);
            $objSheet->setCellValue('Q' . $i, $val->personalDetails['txtNatioality']);
            $objSheet->setCellValue('R' . $i, $val->personalDetails['txtDualNatioality']);
            $objSheet->setCellValue('S' . $i, $val->personalDetails['txtResidenceArea']);
            $objSheet->setCellValue('T' . $i, $val->personalDetails['txtResidentialCategory']);
            $objSheet->setCellValue('U' . $i, $val->personalDetails['txtUniqueLearnerNo']);
            $objSheet->setCellValue('V' . $i, $val->personalDetails['txtToeflNo']);
            $objSheet->setCellValue('W' . $i, $val->personalDetails['txtIeltsNo']);
            $objSheet->setCellValue('X' . $i, $val->personalDetails['cboStudentVisa']);
            $objSheet->setCellValue('Y' . $i, $val->personalDetails['cboStudiedUK']);
            $objSheet->setCellValue('Z' . $i, $val->personalDetails['cboFeeCode']);
            $objSheet->setCellValue('AA' . $i, $val->personalDetails['txtSSA_FeeName']);
            $objSheet->setCellValue('AB' . $i, $val->personalDetails['euAnswers']);
            $objSheet->setCellValue('AC' . $i, $val->personalDetails['parentSpouse']);
            $objSheet->setCellValue('AD' . $i, $val->personalDetails['txtNominPerson']);
            $objSheet->setCellValue('AE' . $i, $val->personalDetails['txtNominPersonRelation']);
            $objSheet->setCellValue('AF' . $i, $val->personalDetails['txtDisabilitySplNeeds']);
            $objSheet->setCellValue('AG' . $i, $val->personalDetails['txtDisabilitySplNeedsText']);
            $choices = '';
            foreach ($val->choices as $choice) {
                $choices .= $choice->txtInstCode1 . '(' . $choice->txtInstCode . ')' . PHP_EOL;
                $choices .= $choice->txtCourseCode . PHP_EOL;
                $choices .= 'Campus:' . $choice->txtCampusCode . ';Live at home while studying?:' . $choice->rdHome . PHP_EOL;
                $choices .= 'Start date:' . $choice->txtStartDate . ' ;Deferred entry?: No' . PHP_EOL;
                $choices .= 'Point of entry: ' . $choice->txtPOE . PHP_EOL;
                $choices .= PHP_EOL;
            }
            $objSheet->setCellValue('AH' . $i, $choices);
            $education = '';
            foreach ($val->schools as $school) {
                $education .= $school->txtCentreName . '(' . $school->cboStartMonth . '/' . $school->cboStartYear .
                    ' - ' . $school->cboFinishMonth . '/' . $school->cboFinishYear . ',' . $school->rdAttendance . ')';
                $education .= PHP_EOL;
            }
            $objSheet->setCellValue('AI' . $i, $education);
            $employment = '';
            foreach ($val->employers as $employer) {
                $employment .= $employer->txtEmpName . PHP_EOL;
                $employment .= 'Address: ' . $employer->txtEmpAddress . PHP_EOL;
                $employment .= 'Nature of work: ' . $employer->txtEmpNature . PHP_EOL;
                $employment .= 'From ' . $employer->cboStartMonth . '/' . $employer->cboStartYear . ' to ' . $employer->cboEndMonth .
                    '/' . $employer->cboEndYear . ',' . $employer->radioEmpType . PHP_EOL;
                $employment .= PHP_EOL;
            }
            $objSheet->setCellValue('AJ' . $i, $employment);
            $statement = '';
            if (isset($val->statement['taPersonalStatementArr'])) {
                foreach ($val->statement['taPersonalStatementArr'] as $v) {
                    $statement .= $v . PHP_EOL;
                }
            }
            $objSheet->setCellValue('AK' . $i, $statement);
            $i++;
        }

        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment;filename=" . 'users_' . date('Ymd') . '.' . 'xls');
        header('Cache-Control: max-age=0');
        $objWriter = IOFactory::createWriter($newExcel, 'Xls');
        $objWriter->save('php://output');
        exit;
    }
}
