<?php

namespace App\Http\Controllers;

use App\Models\BPD;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


class BPDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/bpd";
        $token = session('token'); // Retrieve the token from the session
        $headers = [
            'Authorization' => "Bearer $token",
        ];
        $response = $client->request('GET', $url, ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        $contenArray = json_decode($content, true);
        $data = $contenArray['data'];
        return view('bpd.index', [
            'data' => $data,
            'title' => "Berita Desa"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
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
        return view('bpd.create', [
            'data' => $data,
            'title' => "Tambah anggota BPD"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([

            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        // Get the authentication token from the current user session
        $token = session('token');

        // Set the API URL
        $apiUrl = 'http://127.0.0.1:8000/api/bpd';

        // Create a new Guzzle client
        $client = new Client();

        $response = $client->post($apiUrl, [
            'multipart' => [

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
            // Berita created successfully, redirect to dashboard or show success message
            return redirect()->route('bpd.index')->with('success', 'Berita created successfully!');
        } else {
            // Error occurred, show error message from response
            $errorMessage = $data['message'] ?? 'Failed to create berita. Please try again.';
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
        $url = "http://127.0.0.1:8000/api/bpd/$id"; // tambahkan $id ke endpoint URL
        $token = session('token');
        $headers = [
            'Authorization' => "Bearer $token",
        ];
        $response = $client->request('GET', $url, ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        $bpd = json_decode($content, true); // mengubah response menjadi array

        return view('bpd.edit', [
            'bpd' => $bpd, // mengirim data bpd dengan key 'bpd'
            'title' => "Edit Anggota BPD"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        // Get the authentication token from the current user session
        $token = session('token');

        // Set the API URL for updating the specific berita
        $apiUrl = 'http://127.0.0.1:8000/api/bpd/' . $id;

        // Create a new Guzzle client
        $client = new Client();

        // Initialize the data for updating bpd
        $data = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            // You can add other fields here as needed
        ];

        // Make the API call to update berita
        $response = $client->put($apiUrl, [
            'json' => $data,
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        // Check if response is successful
        if ($response->getStatusCode() == 200) {
            // BPD updated successfully, redirect to dashboard or show success message
            return redirect()->route('bpd.index')->with('success', 'BPD updated successfully!');
        } else {
            // Error occurred, show error message from response
            $content = $response->getBody()->getContents();
            $data = json_decode($content, true);
            $errorMessage = $data['message'] ?? 'Failed to update bpd. Please try again.';
            return back()->withErrors(['error' => $errorMessage]);
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
        $apiUrl = 'http://127.0.0.1:8000/api/bpd/' . $id;

        // Create a new Guzzle client
        $client = new Client();
        $response = $client->delete($apiUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        // Periksa status kode respons untuk menentukan apakah penghapusan berhasil
        if ($response->getStatusCode() == 200) {
            return redirect()->route('bpd.index')->with('success', 'Berita berhasil dihapus!');
        } else {
            // Jika terjadi kesalahan dalam penghapusan di API, kembalikan respons dengan pesan kesalahan
            return response()->json(['message' => 'Gagal menghapus berita'], 400);
        }
    }
}
