<?php

namespace App\Http\Controllers;

use App\Models\PemerintahDesa;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PemerintahDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/pemerintah_desa";
        $token = session('token'); // Retrieve the token from the session
        $headers = [
            'Authorization' => "Bearer $token",
        ];
        $response = $client->request('GET', $url, ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        $contenArray = json_decode($content, true);
        return view('pemerintah_desa.index', [
            'data' => $contenArray,
            'title' => "Pemerintah Desa"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/pemerintah_desa";
        $token = session('token'); // Retrieve the token from the session
        $headers = [
            'Authorization' => "Bearer $token",
        ];
        $response = $client->request('GET', $url, ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        $data = json_decode($content, true);

        return view('pemerintah_desa.create', [
            'data' => $data,
            'title' => "Tambah Pemerintah Desa"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'foto' => 'required|image|max:2048',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        // Get the authentication token from the current user session
        $token = session('token');

        // Set the API URL
        $apiUrl = 'http://127.0.0.1:8000/api/pemerintah_desa';

        // Create a new Guzzle client
        $client = new Client();

        // Upload the file
        $file = $request->file('foto');
        $fileContents = fopen($file->path(), 'r');
        $fileName = $file->getClientOriginalName();

        $response = $client->post($apiUrl, [
            'multipart' => [
                [
                    'name' => 'foto',
                    'contents' => $fileContents, // Menggunakan variabel yang telah dibuka sebelumnya
                    'filename' => $fileName,
                ],
                [
                    'name' => 'nama',
                    'contents' => $request->nama,
                ],
                [
                    'name' => 'jabatan',
                    'contents' => $request->jabatan,
                ],
                // tambahkan bidang lainnya sesuai kebutuhan
            ],
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        // Get the response content
        $content = $response->getBody()->getContents();

        // Decode the JSON response content
        $data = json_decode($content, true);

        // Check if response is successful
        if ($response->getStatusCode() == 201) {
            // pemerintah desa created successfully, redirect to dashboard or show success message
            return redirect()->route('pemerintah_desa.index')->with('success', 'pemerintah desa created successfully!');
        } else {
            // Error occurred, show error message from response
            $errorMessage = $data['message'] ?? 'Failed to create pemerintah desa. Please try again.';
            return back()->withErrors(['error' => $errorMessage]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/pemerintah_desa/$id";
        $token = session('token'); // Retrieve the token from the session
        $headers = [
            'Authorization' => "Bearer $token",
        ];
        $response = $client->request('GET', $url, ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        $pemerintah_desa = json_decode($content, true);
        return view('pemerintah_desa.edit', [
            'pemerintah_desa' => $pemerintah_desa,
            'title' => "Edit Pemerintah Desa"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'foto' => 'nullable|image|max:2048',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        // Get the authentication token from the current user session
        $token = session('token');

        // Set the API URL for updating the specific pemerintah desa
        $apiUrl = 'http://127.0.0.1:8000/api/pemerintah_desa/' . $id;

        // Create a new Guzzle client
        $client = new Client();

        // Initialize the multipart data with fields for updating pemerintah desa
        $multipartData = [
            [
                'name' => 'nama',
                'contents' => $request->nama,
            ],
            [
                'name' => 'jabatan',
                'contents' => $request->jabatan,
            ],
            // You can add other fields here as needed
        ];

        // Check if a new image file is uploaded
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileContents = fopen($file->path(), 'r');
            $fileName = $file->getClientOriginalName();

            // Add the image field to multipart data
            $multipartData[] = [
                'name' => 'foto',
                'contents' => $fileContents,
                'filename' => $fileName,
            ];
        }

        // Make the API call to update pemerintah desa
        $response = $client->post($apiUrl, [
            'multipart' => $multipartData,
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        // Check if response is successful
        if ($response->getStatusCode() == 200) {
            // Pemerintah desa updated successfully, redirect to dashboard or show success message
            return redirect()->route('pemerintah_desa.index')->with('success', 'Pemerintah Desa updated successfully!');
        } else {
            // Error occurred, redirect to index with error message
            return redirect()->route('pemerintah_desa.index')->withErrors(['error' => 'Failed to update Pemerintah Desa. Please try again.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Get the authentication token from the current user session
        $token = session('token');

        // Set the API URL for updating the specific berita
        $apiUrl = 'http://127.0.0.1:8000/api/pemerintah_desa/' . $id;

        // Create a new Guzzle client
        $client = new Client();
        $response = $client->delete($apiUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        // Periksa status kode respons untuk menentukan apakah penghapusan berhasil
        if ($response->getStatusCode() == 200) {
            return redirect()->route('pemerintah_desa.index')->with('success', 'Berita berhasil dihapus!');
        } else {
            // Jika terjadi kesalahan dalam penghapusan di API, kembalikan respons dengan pesan kesalahan
            return response()->json(['message' => 'Gagal menghapus berita'], 400);
        }
    }
}
