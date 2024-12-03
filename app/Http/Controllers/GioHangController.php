<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
class GioHangController extends Controller
{
    
    public function index()
    {
        $cartItems = Cart::content();
        return view('pages.giohang', compact('cartItems'));
    }

    public function add(Request $request)
    {
        // Kiểm tra dữ liệu gửi lên từ form
        $validated = $request->validate([
            'san_pham_id' => 'required',
            'ten_san_pham' => 'required|string',
            'gia' => 'required|numeric|min:0',
            'qty' => 'required|integer|min:1',
        ]);
    
        // Thêm sản phẩm vào giỏ hàng
        Cart::add(
            $validated['san_pham_id'], // ID sản phẩm
            $validated['ten_san_pham'], // Tên sản phẩm
            $validated['qty'], // Số lượng
            $validated['gia'] // Giá mỗi sản phẩm
        );
    
        // Chuyển hướng về trang giỏ hàng
        return redirect()->back()->with('success', 'Đã thêm sản phẩm vào giỏ hàng!');
    }
    

    public function remove($rowId)
{
    // Kiểm tra sản phẩm có tồn tại trong giỏ hàng không
    if (Cart::get($rowId)) {
        // Xóa sản phẩm khỏi giỏ hàng
        Cart::remove($rowId);

        // Chuyển hướng về trang giỏ hàng với thông báo
        return redirect()->route('giohang.index')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng!');
    }

    // Nếu không tìm thấy sản phẩm, chuyển hướng với thông báo lỗi
    return redirect()->route('giohang.index')->with('error', 'Không tìm thấy sản phẩm trong giỏ hàng!');
}
public function update(Request $request, $rowId)
{
    // Kiểm tra dữ liệu đầu vào
    $validated = $request->validate([
        'qty' => 'required|integer|min:1', // Số lượng phải >= 1
    ]);

    // Kiểm tra sản phẩm tồn tại trong giỏ hàng
    if (Cart::get($rowId)) {
        // Cập nhật số lượng sản phẩm
        Cart::update($rowId, $validated['qty']);

        // Chuyển hướng với thông báo
        return redirect()->route('giohang.index')->with('success', 'Cập nhật giỏ hàng thành công!');
    }

    // Nếu không tìm thấy sản phẩm
    return redirect()->route('giohang.index')->with('error', 'Không tìm thấy sản phẩm trong giỏ hàng!');
    dd($request->all(), session()->all());

}


}
