<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Dosen;
use App\Models\Berita;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\DB;
use App\Charts\ChartPeminjaman;



class AdminController extends Controller
{


    public function inputBerita()
    { 
        return view('admin.inputBerita');
    }

    
    public function tambah()
    {
        return view('admin.tambah');
    }

    public function postTambahAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users,email', // tambahkan validasi unik untuk email
            'jenisKelamin' => 'required',
            'password' => 'required|min:8|max:20|confirmed'
        ]);
    
        $user = new User;
    
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = 'admin';
        $user->jenis_kelamin = $request->jenisKelamin; // pastikan nama kolom sesuai dengan database
        $user->password = Hash::make($request->password);
    
        $user->save();
    
        if($user){
            return back()->with('success', 'Admin baru berhasil ditambah!');
        } else {
            return back()->with('failed', 'Gagal menambah admin baru!');
        }
    }    

    public function editAdmin($id)
    {
        $data = User::find($id);

        return view('admin.edit', compact('data'));
    }

    public function postEditAdmin(Request $request, $id) 
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email:dns',
        'jenisKelamin' => 'required',
    ]);

    $user = User::find($id);

    $user->name = $request->name;
    $user->email = $request->email;
    $user->jenis_kelamin = $request->jenisKelamin;

    $user->save();

    if($user){
        return back()->with('success', 'Data admin berhasil di update!'); 
    } else {
        return back()->with('failed', 'Gagal mengupdate data admin!');
    }
}

        public function deleteAdmin($id)
    {
        try {
            $data = User::findOrFail($id);
            $data->delete();
            return back()->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('failed', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }

    public function adminBuku(Request $request){
        $search = $request->input('search');
        $data = Buku::where(function($query) use ($search) {
        $query->where('judul_buku', 'LIKE', '%' .$search. '%');
        })->paginate(5);
        return view('admin.buku', compact('data'));
        }
        public function tambahBuku(){
        return view('admin.tambahBuku');
        }
        public function postTambahBuku(Request $request){
        $request->validate([
        'kodeBuku' => 'required',
        'judulBuku' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahunTerbit' => 'required|date',
        'gambar' => 'required|image|max:5120',
         'deskripsi' => 'required',
         'kategori' => 'required',
        ]);
        $buku = new Buku;
        $buku->kode_buku = $request->kodeBuku;
        $buku->judul_buku = $request->judulBuku;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahunTerbit;
         $buku->deskripsi = $request-> deskripsi;
         $buku->kategori = $request-> kategori;
        if($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('images/', $filename);
        $buku->gambar = $filename;
        }
        $buku->save();
        if($buku) {
        return back()->with('success', 'Buku baru berhasil 
        ditambahkan!');
        } else{
        return back()->with('failed', 'Data gagal ditambahkan!');
        }
        }
        public function editBuku($id) {
            $data = Buku::find($id);
            $kategori = ['sains', 'programer', 'komik']; 
            return view('admin.editBuku', compact('data', 'kategori'));
        }
        
        
        public function postEditBuku(Request $request, $id) {
            $request->validate([
                'kodeBuku' => 'required',
                'judulBuku' => 'required',
                'penulis' => 'required',
                'penerbit' => 'required',
                'tahunTerbit' => 'required|date',
                'gambar' => 'image|max:5120',
                'deskripsi' => 'required',
                'kategori' => 'required'
            ]);
        
            $buku = Buku::find($id);
        
            $buku->kode_buku = $request->kodeBuku;
            $buku->judul_buku = $request->judulBuku;
            $buku->penulis = $request->penulis;
            $buku->penerbit = $request->penerbit;
            $buku->tahun_terbit = $request->tahunTerbit;
            $buku->deskripsi = $request->deskripsi;
            $buku->kategori = $request->kategori;
        
            if($request->hasFile('gambar')) {
                $filepath = 'images/'.$buku->gambar;
                if(File::exists($filepath)) {
                    File::delete($filepath);
                }
                $file = $request->file('gambar');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('images/', $filename);
                $buku->gambar = $filename;
            }
        
            $buku->save();
        
            if($buku) {
                return back()->with('success', 'Buku berhasil diupdate!');
            } else{
                return back()->with('failed', 'Buku gagal diupdate!');
            }
        }
        
        public function deleteBuku($id) {
            $buku = Buku::find($id);
        
            if(!$buku) {
                return back()->with('failed', 'Buku tidak ditemukan!');
            }
        
            $filepath = 'images/'.$buku->gambar;
        
            if(File::exists($filepath)) {
                File::delete($filepath);
            }
        
            $buku->delete();
        
            return back()->with('success', 'Data buku berhasil dihapus!');
        }
        public function adminPeminjaman(Request $request, ChartPeminjaman
$chartPeminjaman) {
$chart = $chartPeminjaman->build();
$search = $request->input('search');
$data = Peminjaman::where(function($query) use ($search) {
$query->where('id_user', 'LIKE', '%' .$search. '%');
})->paginate(5);
return view('admin.peminjaman', compact('data', 'chart'));
}
            public function tambahPeminjaman() {
            return view('admin.tambahPeminjaman');
            }
            public function postTambahPeminjaman(Request $request) {
                $request->validate([
                'idUser' => 'required',
                'kodeBuku' => 'required|int',
                'tanggalPeminjaman' => 'required|date',
                'tanggalPengembalian' => 'required|date'
                ]);
                $peminjaman = new Peminjaman;
                $peminjaman->id_user = $request->idUser;
                $peminjaman->id_buku = $request->kodeBuku;
                $peminjaman->tanggal_pinjam = $request->tanggalPeminjaman;
                $peminjaman->tanggal_kembali = $request->tanggalPengembalian;
                $peminjaman->status = 'Belum Dikembalikan';
                $peminjaman->save();
                if($peminjaman) {
                return back()->with('success', 'Data peminjaman berhasil ditambahkan!'); 
                } else {
                return back()->with('failed', 'Gagal menambahkan data peminjaman!');
                }
             }
            
            
            public function editPeminjaman($id) {
            $data = Peminjaman::find($id);
            return view('admin/editPeminjaman', compact('data'));
            }
            public function postEditPeminjaman(Request $request, $id) {
            $request->validate([
            'idUser' => 'required',
            'kodeBuku' => 'required|int',
            'tanggalPeminjaman' => 'required',
            'tanggalPengembalian' => 'required',
            'status' => 'required'
            ]);
            $peminjaman = Peminjaman::find($id);
            $peminjaman->id_user = $request->idUser;
            $peminjaman->id_buku = $request->kodeBuku;
            $peminjaman->tanggal_pinjam = $request->tanggalPeminjaman;
            $peminjaman->tanggal_kembali = $request->tanggalPengembalian;
            $peminjaman->status = $request->status;
            $peminjaman->save();
            if($peminjaman->id_buku == $request->kodeBuku){
            return back()->with('success', 'Data peminjaman berhasil di update!'); 
            } else {
            return back()->with('failed', 'Gagal mengupdate data peminjaman!');
            }
            }
            public function deletePeminjaman($id) {
                $data = Peminjaman::find($id);
            
                if ($data) {
                    $data->delete();
                    return back()->with('success', 'Data peminjaman berhasil dihapus!');
                } else {
                    return back()->with('failed', 'Gagal menghapus data peminjaman. Data tidak ditemukan.');
                }
            }
            
            public function detailPeminjaman($id_peminjaman, $id_user, $id_buku) {
                $detailPeminjaman = Peminjaman::select('peminjaman.*', 'buku.*', 'users.*')
                                    ->join('buku', 'peminjaman.id_buku', '=', 'buku.id')
                                    ->join('users', 'peminjaman.id_user', '=', 'users.id')
                                    ->where('peminjaman.id', $id_peminjaman)
                                    ->where('buku.id', $id_buku)
                                    ->where('users.id', $id_user)
                                    ->first();
    
                return view('admin.detailPeminjaman', compact('detailPeminjaman'));
            }
            
    public function inputDosen() {
            return view('admin.inputDosen');
            }
    public function postTambahDosen(Request $request)
    {
    // Memvalidasi data yang diterima dari formulir
    $request->validate([
        'nama' => 'required',
        'nip' => 'required',
        'email' => 'required|email',
        'mata_kuliah' => 'required'
    ]);

    // Mengambil data dari request
    $nama = $request->input('nama');
    $nip = $request->input('nip');
    $email = $request->input('email');
    $mata_kuliah = $request->input('mata_kuliah');

    // Lakukan operasi untuk menyimpan data ke database atau melakukan tindakan lainnya
    // Contoh: Menyimpan data ke dalam database
    $dosen = new Dosen();
    $dosen->nama = $nama;
    $dosen->nip = $nip;
    $dosen->email = $email;
    $dosen->mata_kuliah = $mata_kuliah;
    $dosen->save();

    // Jika data berhasil disimpan, Anda dapat mengirimkan respons atau mengalihkan pengguna ke halaman lain
    return redirect()->route('admin.inputDosen')->with('success', 'Data Dosen berhasil ditambahkan');
}
public function dosen()
{
    $dosens = Dosen::all();
    return view('admin.dosen', compact('dosens'));
}
public function postDosen(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'nip' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'mata_kuliah' => 'required|string|max:255',
    ]);

    try {
        // Buat instansi baru dari model Dosen dan beri atribut
        $dosen = new Dosen;
        $dosen->nama = $request->input('nama');
        $dosen->nip = $request->input('nip');
        $dosen->email = $request->input('email');
        $dosen->mata_kuliah = $request->input('mata_kuliah');

        // Simpan data Dosen baru ke database
        $dosen->save();

        // Berikan pesan sukses kepada pengguna
        return redirect()->route('admin.dosen')->with('success', 'Data Dosen berhasil ditambahkan');
    } catch (\Exception $e) {
        // Tangani jika terjadi kesalahan saat menyimpan data
        return redirect()->route('admin.dosen')->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
    }
}
public function cetakDataPeminjaman() {
    $data = DB::table('peminjaman')
    ->join('users', 'users.id', '=', 'peminjaman.id_user')
    ->join('buku', 'buku.id', '=', 'peminjaman.id_buku')
    ->select('peminjaman.*', 'users.name', 'buku.judul_buku')
    ->get();
    $pdf = PDF::loadView('admin.cetakPeminjaman', ['data' => $data]);
    return $pdf->stream();
    }
    public function postInputBerita(Request $request)
{
    // Validasi input
    $request->validate([
        'judulBerita' => 'required|max:255',
        'isiBerita' => 'required',
        'foto' => 'required|image|max:5000', 
    ]);

 
    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('images'); 
        $foto = basename($fotoPath); 
    } else {
        $foto = null; 
    }

    $berita = new Berita;
    $berita->judul = $request->input('judulBerita');
    $berita->isi = $request->input('isiBerita');
    $berita->foto = $foto;
    $berita->save();

    return redirect()->route('admin.berita')->with('success', 'Berita berhasil ditambahkan.');
}

public function berita()
{
    $beritas = Berita::all();
    return view('admin.berita', compact('beritas'));
}
public function deleteBerita($id)
{
    try {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return back()->with('success', 'Berita berhasil dihapus.');
    } catch (\Exception $e) {
        return back()->with('failed', 'Gagal menghapus berita: ' . $e->getMessage());
    }
}
public function deleteDosen($id)
{
    try {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return back()->with('success', 'Dosen berhasil dihapus.');
    } catch (\Exception $e) {
        return back()->with('failed', 'Gagal menghapus dosen: ' . $e->getMessage());
    }
}
public function editDosen($id)
{
    $dosen = Dosen::findOrFail($id);
    return view('admin.editDosen', compact('dosen'));
}

public function updateDosen(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'nip' => 'required',
        'email' => 'required|email',
        'mata_kuliah' => 'required',
    ]);

    $dosen = Dosen::findOrFail($id);
    $dosen->nama = $request->input('nama');
    $dosen->nip = $request->input('nip');
    $dosen->email = $request->input('email');
    $dosen->mata_kuliah = $request->input('mata_kuliah');
    $dosen->save();

    return redirect()->route('admin.dosen')->with('success', 'Data dosen berhasil diperbarui.');
}

// ...
}




