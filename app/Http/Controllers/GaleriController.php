<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;




class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/galeri";
        $token = session('token'); // Retrieve the token from the session
        $headers = [
            'Authorization' => "Bearer $token",
        ];
        $response = $client->request('GET', $url, ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        $contenArray = json_decode($content, true);
        $data = $contenArray['data'];
        return view('galeri.index', [
            'data' => $data,
            'title' => "Galeri Desa"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/galeri";
        $token = session('token'); // Retrieve the token from the session
        $headers = [
            'Authorization' => "Bearer $token",
        ];
        $response = $client->request('GET', $url, ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        $contenArray = json_decode($content, true);
        $data = $contenArray['data'];
        return view('galeri.create', [
            'data' => $data,
            'title' => "Tambah Galeri"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar1' => 'required|image',
            'gambar2' => 'required|image',
            'gambar3' => 'required|image',
            'gambar4' => 'required|image',
            'gambar5' => 'required|image',
            'gambar6' => 'required|image',
        ]);

        // Get the token from session
        $token = session('token');

        // Set the API URL
        $apiUrl = 'http://127.0.0.1:8000/api/galeri';

        // Create a new Guzzle client
        $client = new Client();

        $file1 = $request->file('gambar1');
        $fileContents1 = fopen($file1->path(), 'r');
        $fileName1 = $file1->getClientOriginalName();

        $file2 = $request->file('gambar2');
        $fileContents2 = fopen($file2->path(), 'r');
        $fileName2 = $file2->getClientOriginalName();

        $file3 = $request->file('gambar3');
        $fileContents3 = fopen($file3->path(), 'r');
        $fileName3 = $file3->getClientOriginalName();

        $file4 = $request->file('gambar4');
        $fileContents4 = fopen($file4->path(), 'r');
        $fileName4 = $file4->getClientOriginalName();

        $file5 = $request->file('gambar5');
        $fileContents5 = fopen($file5->path(), 'r');
        $fileName5 = $file5->getClientOriginalName();

        $file6 = $request->file('gambar6');
        $fileContents6 = fopen($file6->path(), 'r');
        $fileName6 = $file6->getClientOriginalName();

        $response = $client->post($apiUrl, [
            'multipart' => [
                [
                    'name' => 'gambar1',
                    'contents' => $fileContents1, // Menggunakan variabel yang telah dibuka sebelumnya
                    'filename' => $fileName1,
                ],
                [
                    'name' => 'gambar2',
                    'contents' => $fileContents2, // Menggunakan variabel yang telah dibuka sebelumnya
                    'filename' => $fileName2,
                ],
                [
                    'name' => 'gambar3',
                    'contents' => $fileContents3, // Menggunakan variabel yang telah dibuka sebelumnya
                    'filename' => $fileName3,
                ],
                [
                    'name' => 'gambar4',
                    'contents' => $fileContents4, // Menggunakan variabel yang telah dibuka sebelumnya
                    'filename' => $fileName4,
                ],
                [
                    'name' => 'gambar5',
                    'contents' => $fileContents5, // Menggunakan variabel yang telah dibuka sebelumnya
                    'filename' => $fileName5,
                ],
                [
                    'name' => 'gambar6',
                    'contents' => $fileContents6, // Menggunakan variabel yang telah dibuka sebelumnya
                    'filename' => $fileName6,
                ],
                [
                    'name' => 'judul',
                    'contents' => $request->judul,
                ],


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
            // Galeri created successfully, redirect to galeri.index
            return redirect()->route('galeri.index')->with('success', 'Galeri created successfully!');
        } else {
            // Error occurred, redirect to galeri.index with error message
            $errorMessage = $data['message'] ?? 'Failed to create Galeri. Please try again.';
            return redirect()->route('galeri.index')->withErrors(['error' => $errorMessage]);
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
        $url = "http://127.0.0.1:8000/api/galeri/$id"; // tambahkan $id ke endpoint URL
        $token = session('token');
        $headers = [
            'Authorization' => "Bearer $token",
        ];
        $response = $client->request('GET', $url, ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        $galeri = json_decode($content, true); // mengubah response menjadi array

        return view('galeri.edit', [
            'galeri' => $galeri, // mengirim data galeri dengan key 'galeri'
            'title' => "Edit galeri"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'gambar1' => 'nullable|image',
            'gambar2' => 'nullable|image',
            'gambar3' => 'nullable|image',
            'gambar4' => 'nullable|image',
            'gambar5' => 'nullable|image',
            'gambar6' => 'nullable|image',
        ]);

        // Get the token from session
        $token = session('token');

        // Set the API URL
        $apiUrl = 'http://127.0.0.1:8000/api/galeri/' . $id;

        // Create a new Guzzle client
        $client = new Client();

        // Initialize the multipart data with fields for updating berita
        $multipartData = [
            [
                'name' => 'judul',
                'contents' => $request->judul,
            ],
            // You can add other fields here as needed
        ];

        // Check if a new image file is uploaded
        if ($request->hasFile('gambar1')) {
            $file1 = $request->file('gambar1');
            $fileContents1 = fopen($file1->path(), 'r');
            $fileName1 = $file1->getClientOriginalName();

            // Add the image field to multipart data
            $multipartData[] = [
                'name' => 'gambar1',
                'contents' => $fileContents1,
                'filename' => $fileName1,
            ];
        } else if ($request->hasFile('gambar2')) {
            $file2 = $request->file('gambar2');
            $fileContents2 = fopen($file2->path(), 'r');
            $fileName2 = $file2->getClientOriginalName();

            // Add the image field to multipart data
            $multipartData[] = [
                'name' => 'gambar2',
                'contents' => $fileContents2,
                'filename' => $fileName2,
            ];
        } else if ($request->hasFile('gambar3')) {
            $file3 = $request->file('gambar3');
            $fileContents3 = fopen($file3->path(), 'r');
            $fileName3 = $file3->getClientOriginalName();

            // Add the image field to multipart data
            $multipartData[] = [
                'name' => 'gambar3',
                'contents' => $fileContents3,
                'filename' => $fileName3,
            ];
        } else if ($request->hasFile('gambar4')) {
            $file4 = $request->file('gambar4');
            $fileContents4 = fopen($file4->path(), 'r');
            $fileName4 = $file4->getClientOriginalName();

            // Add the image field to multipart data
            $multipartData[] = [
                'name' => 'gambar4',
                'contents' => $fileContents4,
                'filename' => $fileName4,
            ];
        } else if ($request->hasFile('gambar5')) {
            $file5 = $request->file('gambar5');
            $fileContents5 = fopen($file5->path(), 'r');
            $fileName5 = $file5->getClientOriginalName();

            // Add the image field to multipart data
            $multipartData[] = [
                'name' => 'gambar5',
                'contents' => $fileContents5,
                'filename' => $fileName5,
            ];
        } else if ($request->hasFile('gambar6')) {
            $file6 = $request->file('gambar6');
            $fileContents6 = fopen($file6->path(), 'r');
            $fileName6 = $file6->getClientOriginalName();

            // Add the image field to multipart data
            $multipartData[] = [
                'name' => 'gambar6',
                'contents' => $fileContents6,
                'filename' => $fileName6,
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
            return redirect()->route('galeri.index')->with('success', 'Galeri updated successfully!');
        } else {
            // Error occurred, show error message from response
            $errorMessage = $data['message'] ?? 'Failed to update galeri. Please try again.';
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

        // Set the API URL for updating the specific galeri
        $apiUrl = 'http://127.0.0.1:8000/api/galeri/' . $id;

        // Create a new Guzzle client
        $client = new Client();
        $response = $client->delete($apiUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        // Periksa status kode respons untuk menentukan apakah penghapusan berhasil
        if ($response->getStatusCode() == 200) {
            return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus!');
        } else {
            // Jika terjadi kesalahan dalam penghapusan di API, kembalikan respons dengan pesan kesalahan
            return response()->json(['message' => 'Gagal menghapus galeri'], 400);
        }
    }
}
