<?php

namespace App\Http\Requests\User\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\File;
use Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $dateValidation = date('Y m d', time());
        return [
            'name' => 'required|string',
            // 'email' => 'required|email|unique:users,email,'.Auth::id().',id',
            'phone_number' => 'required|digits_between:4,15',
            'tanggal_pesan' => 'required|date|after_or_equal:'.$dateValidation,
            'lokasi_penjemputan' => 'required',
            'metode_pembayaran' => 'required',
            'bukti' => [
                'required_if:metode_pembayaran,Transfer',
                function ($attribute, $value, $fail) {
                    if ($this->input('metode_pembayaran') === 'Transfer') {
                        if (empty($value)) {
                            $fail('Bukti pembayaran harus diunggah untuk metode pembayaran Transfer.');
                        } elseif (!File::isFile($value)) {
                            $fail('Bukti pembayaran harus berupa file gambar.');
                        }
                    }
                },
            ],
        ];
    }
    public function messages(): array
{
    return [
        'name.required' => 'Nama harus diisi.',
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.unique' => 'Email sudah digunakan.',
        'phone_number.required' => 'Nomor telepon harus diisi.',
        'phone_number.regex' => 'Format nomor telepon salah.',
        'phone_number.digits_between' => 'Panjang nomor telepon tidak valid.',
        'tanggal_pesan.required' => 'Tanggal pesanan harus diisi.',
        'tanggal_pesan.date' => 'Format tanggal pesanan tidak valid.',
        'metode_pembayaran.required' => 'Metode pembayaran harus dipilih.',
        'bukti.required_if' => 'Bukti pembayaran harus diunggah untuk metode pembayaran Transfer.',
        'bukti.file' => 'Bukti pembayaran harus berupa file gambar.',
    ];
}




}
