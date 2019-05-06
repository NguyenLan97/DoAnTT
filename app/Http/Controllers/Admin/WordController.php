<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BillDetail;
use App\Models\Bill;
use App\Models\Product;

class WordController extends Controller
{
    //
    public function generateDocx($id)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $paragraphStyle = array('spacing' => 240, 'size' => 24);
        $phpWord->addParagraphStyle('paragraphStyle', array('spacing' => 480));

        $section = $phpWord->addSection();

        $name = "Cửa hàng: Kitchen Art";
        $address = "Địa chỉ: Đông Anh, Hà Nội";
        $phone = "Số điện thoại : 0968954840";
        $email = "Email : nguyenlan220897@gmail.com";

        $ordername = "ĐƠN ĐẶT HÀNG";

        $section->addText($name, array('bold'=>true));
        $section->addTextBreak();
        $section->addText($address);
        $section->addTextBreak();
        $section->addText($phone);
        $section->addTextBreak();
        $section->addText($email);
        $section->addTextBreak(1, null, $paragraphStyle);
        $section->addText($ordername , array('bold'=>true,'size' =>16), array('alignment' => 'center'));
        $section->addTextBreak(1, null, $paragraphStyle);


        $bill = Bill::where('id',$id)->get();
        foreach ($bill as $order)
        {
            $section->addText('Khách hàng:'.$order->bill_fullname);
            $section->addTextBreak();
            $section->addText('Địa chỉ:'.$order->bill_address);
            $section->addTextBreak();
            $section->addText('Điện thoại:'.$order->bill_phone);
            $section->addTextBreak();
            $section->addText('Email:'.$order->email);
            $section->addTextBreak();
        }

        $section->addTextBreak(1, null, $paragraphStyle);
        $table = $section->addTable(array('borderSize'=>2, 'cellMargin'=>10));
        $styleCell = ['bold'=>true, 'align'=>'center'];
        $table->addRow(900);
        $table->addCell(2000,$styleCell)->addText(' STT');
        $table->addCell(2000,$styleCell)->addText(' Tên sản phẩm');
        $table->addCell(2000,$styleCell)->addText(' Số lượng');
        $table->addCell(2000,$styleCell)->addText(' Ngày tạo');
        $table->addCell(2000,$styleCell)->addText(' Thành tiền');
        $detailorders = BillDetail::where('bii_id', $id)->get();
        foreach($detailorders as $detailorder){
            $table->addRow(900);
            $table->addCell(2000)->addText($detailorder->bill_id);
            $arr =[];
            array_push($arr,$detailorder->prod_id);
            foreach ($arr as $item){
                $products = Product::where('prod_id', $item)->select('name')->first();
                $table->addCell(2000)->addText($products->name);
            }
            $table->addCell(2000)->addText($detailorder->quantity);
            $table->addCell(2000)->addText($detailorder->created_at);
            $table->addCell(2000)->addText(number_format($detailorder->total,0,",",".").'VNĐ');
        }

        $revenue = BillDetail::where('bill_id', $id)->sum('total');
        $section->addText('Tổng đơn hàng :'.number_format($revenue,0,",",".") .'VNĐ',array('alignment' => 'right'));
        $section->addTextBreak();
        foreach ($orders as $order) {

            $section->addText('Thành tiền :' .number_format($order->total,0,",",".") . 'VNĐ', array('alignment' => 'right'));
        }

        $section->addTextBreak(1, null, $paragraphStyle);
        $style = array('alignment' => 'center');
        $section->addText('...Ngày ...Tháng .... Năm...',$style);
        $section->addTextBreak();
        $section->addText('Người lập' ,$style);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        try {

            $objWriter->save(storage_path('helloWorld.docx'));

        } catch (Exception $e) {

        }


        return response()->download(storage_path('helloWorld.docx'));
    }
}
