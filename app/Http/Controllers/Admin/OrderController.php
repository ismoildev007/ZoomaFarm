<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class OrderController extends Controller
{
    public function updateStatus(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', 'Zayafka muvaffaqiyatli qabul qilindi!');
    }
    public function index()
    {
        $orders = Order::latest()->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        $data = Order::create($request->all());
        $this->sendToTelegram($data);
        

        return redirect()->back()->with('success', 'Zayafka muvaffaqiyatli qabul qilindi!');
    }
    private function sendToTelegram($data)
    {
        $token = '7674421439:AAGc9RX1cjNk8ua-VtD9oWrpJC4qQFZC9oM';
        $chat_id = '6583641407';

        function escapeMarkdown($text) {
            $special_chars = ['_', '*', '[', ']', '(', ')', '~', '`', '>', '#', '+', '-', '=', '|', '{', '}', '.', '!'];
            return str_replace($special_chars, array_map(fn($c) => '\\' . $c, $special_chars), $text);
        }

        $message = "⚖️ *Yangi mijoz xabar qoldirdi* ⚖️\n\n\n" .
            "👤 *Ism:* " . escapeMarkdown($data['name']) . "\n" .
            "📞 *Telefon raqam:* " . ($data['phone'] ?? 'N/A') . "\n" .
            "📝 *Xabar:* " . escapeMarkdown($data['message']) . "\n" ;

        $client = new Client();
        $url = "https://api.telegram.org/bot{$token}/sendMessage";

        $client->post($url, [
            'form_params' => [
                'chat_id' => $chat_id,
                'text' => $message,
            ],
        ]);
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
            'status' => 'required|string|in:new,processing,completed',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Order muvaffaqiyatli yangilandi.');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order muvaffaqiyatli o\'chirildi.');
    }
}

