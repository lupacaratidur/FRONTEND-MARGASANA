<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class BeritaController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berita";
        $token = session('token'); // Retrieve the token from the session
        $headers = [
            'Authorization' => "Bearer $token",
        ];
        $response = $client->request('GET', $url, ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        $contenArray = json_decode($content, true);
        $data = $contenArray['data'];
        return view('berita.index', [
            'data' => $data,
            'title' => "Berita Desa"
        ]);
    }

    public function create()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berita";
        $token = session('token'); // Retrieve the token from the session
        $headers = [
            'Authorization' => "Bearer $token",
        ];
        $response = $client->request('GET', $url, ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        $contenArray = json_decode($content, true);
        $data = $contenArray['data'];
        return view('berita.create', [
            'data' => $data,
            'title' => "Tambah Berita"
        ]);
    }



    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'gambar' => 'required|image|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        // Get the authentication token from the current user session
        $token = session('token');

        // Set the API URL
        $apiUrl = 'http://127.0.0.1:8000/api/berita';

        // Create a new Guzzle client
        $client = new Client();

        // Upload the file
        $file = $request->file('gambar');
        $fileContents = fopen($file->path(), 'r');
        $fileName = $file->getClientOriginalName();

        $response = $client->post($apiUrl, [
            'multipart' => [
                [
                    'name' => 'gambar',
                    'contents' => $fileContents, // Menggunakan variabel yang telah dibuka sebelumnya
                    'filename' => $fileName,
                ],
                [
                    'name' => 'judul',
                    'contents' => $request->judul,
                ],
                [
                    'name' => 'deskripsi',
                    'contents' => $request->deskripsi,
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
            // Berita created successfully, redirect to dashboard or show success message
            return redirect()->route('berita.index')->with('success', 'Berita created successfully!');
        } else {
            // Error occurred, show error message from response
            $errorMessage = $data['message'] ?? 'Failed to create berita. Please try again.';
            return back()->withErrors(['error' => $errorMessage]);
        }
    }

    public function edit($id)
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berita/$id"; // tambahkan $id ke endpoint URL
        $token = session('token');
        $headers = [
            'Authorization' => "Bearer $token",
        ];
        $response = $client->request('GET', $url, ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        $berita = json_decode($content, true); // mengubah response menjadi array

        return view('berita.edit', [
            'berita' => $berita, // mengirim data berita dengan key 'berita'
            'title' => "Edit Berita"
        ]);
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'gambar' => 'nullable|image|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        // Get the authentication token from the current user session
        $token = session('token');

        // Set the API URL for updating the specific berita
        $apiUrl = 'http://127.0.0.1:8000/api/berita/' . $id;

        // Create a new Guzzle client
        $client = new Client();

        // Initialize the multipart data with fields for updating berita
        $multipartData = [
            [
                'name' => 'judul',
                'contents' => $request->judul,
            ],
            [
                'name' => 'deskripsi',
                'contents' => $request->deskripsi,
            ],
            // You can add other fields here as needed
        ];

        // Check if a new image file is uploaded
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileContents = fopen($file->path(), 'r');
            $fileName = $file->getClientOriginalName();

            // Add the image field to multipart data
            $multipartData[] = [
                'name' => 'gambar',
                'contents' => $fileContents,
                'filename' => $fileName,
            ];
        }

        // Make the API call to update berita
        $response = $client->post($apiUrl, [
            'multipart' => $multipartData,
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        // Get the response content
        $content = $response->getBody()->getContents();

        // Decode the JSON response content
        $data = json_decode($content, true);

        // Check if response is successful
        if ($response->getStatusCode() == 200) {
            // Berita updated successfully, redirect to dashboard or show success message
            return redirect()->route('berita.index')->with('success', 'Berita updated successfully!');
        } else {
            // Error occurred, show error message from response
            $errorMessage = $data['message'] ?? 'Failed to update berita. Please try again.';
            return back()->withErrors(['error' => $errorMessage]);
        }
    }


    public function destroy($id)
    {
        // Get the authentication token from the current user session
        $token = session('token');

        // Set the API URL for updating the specific berita
        $apiUrl = 'http://127.0.0.1:8000/api/berita/' . $id;

        // Create a new Guzzle client
        $client = new Client();
        $response = $client->delete($apiUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        // Periksa status kode respons untuk menentukan apakah penghapusan berhasil
        if ($response->getStatusCode() == 200) {
            return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
        } else {
            // Jika terjadi kesalahan dalam penghapusan di API, kembalikan respons dengan pesan kesalahan
            return response()->json(['message' => 'Gagal menghapus berita'], 400);
        }
    }
}
