<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Registrasi - Jernih Multi Komunikasi</title>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body { font-family: DejaVu Sans, Arial, sans-serif; font-size: 10px; color: #1a1a1a; background: #fff; }

  .header {
    background: linear-gradient(135deg, #1e3a5f 0%, #2563eb 100%);
    color: #fff;
    padding: 18px 24px;
    margin-bottom: 20px;
    border-radius: 6px;
  }
  .header h1 { font-size: 18px; font-weight: bold; letter-spacing: 0.5px; }
  .header p  { font-size: 10px; opacity: 0.85; margin-top: 3px; }
  .header .meta { font-size: 9px; opacity: 0.7; margin-top: 6px; }

  .card {
    border: 1px solid #e2e8f0;
    border-radius: 6px;
    margin-bottom: 20px;
    page-break-inside: avoid;
    overflow: hidden;
  }
  .card-header {
    background: #f1f5f9;
    padding: 8px 14px;
    border-bottom: 1px solid #e2e8f0;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .card-header .nomor {
    font-size: 11px;
    font-weight: bold;
    color: #2563eb;
  }
  .card-header .tanggal {
    font-size: 9px;
    color: #64748b;
  }

  .card-body { padding: 12px 14px; }

  .info-grid {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 12px;
  }
  .info-grid td {
    padding: 4px 8px;
    vertical-align: top;
    font-size: 10px;
  }
  .info-grid .label {
    color: #64748b;
    width: 35%;
    font-weight: bold;
  }
  .info-grid .value {
    color: #1a1a1a;
  }

  .bukti-title {
    font-size: 10px;
    font-weight: bold;
    color: #374151;
    margin-bottom: 8px;
    padding-bottom: 4px;
    border-bottom: 1px solid #e5e7eb;
  }

  .bukti-grid {
    width: 100%;
  }
  .bukti-grid td {
    width: 25%;
    padding: 4px;
    text-align: center;
    vertical-align: top;
  }
  .bukti-label {
    font-size: 8px;
    color: #6b7280;
    margin-bottom: 4px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 0.3px;
  }
  .bukti-img {
    width: 130px;
    height: 160px;
    object-fit: contain;
    border: 1px solid #e2e8f0;
    border-radius: 4px;
    background: #f8fafc;
  }
  .bukti-no-img {
    width: 130px;
    height: 160px;
    background: #f1f5f9;
    border: 1px dashed #cbd5e1;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 8px;
    color: #94a3b8;
    line-height: 160px;
    text-align: center;
  }

  .footer {
    text-align: center;
    font-size: 8px;
    color: #94a3b8;
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px solid #e2e8f0;
  }
  .page-break { page-break-after: always; }
</style>
</head>
<body>

<!-- Header -->
<div class="header">
  <h1>📋 Data Registrasi Pelanggan</h1>
  <p>Jernih Multi Komunikasi</p>
  <div class="meta">Dicetak pada: {{ now()->format('d M Y, H:i') }} · Total data: {{ $registrations->count() }}</div>
</div>

@foreach($registrations as $index => $reg)
<div class="card">
  <div class="card-header">
    <span class="nomor">#{{ $index + 1 }} — {{ $reg->nama }}</span>
    <span class="tanggal">{{ $reg->created_at->format('d M Y, H:i') }}</span>
  </div>
  <div class="card-body">
    <!-- Info Data -->
    <table class="info-grid">
      <tr>
        <td class="label">Nama Lengkap</td>
        <td class="value">{{ $reg->nama }}</td>
        <td class="label">No. Telepon</td>
        <td class="value">{{ $reg->no_telepon }}</td>
      </tr>
      <tr>
        <td class="label">Nomor ID</td>
        <td class="value">{{ $reg->nomor_id }}</td>
        <td class="label">Biaya Langganan</td>
        <td class="value">{{ $reg->biaya_langganan }}</td>
      </tr>
      <tr>
        <td class="label">Alamat</td>
        <td class="value" colspan="3">{{ $reg->alamat }}</td>
      </tr>
    </table>

    <!-- Bukti Gambar -->
    <div class="bukti-title">Bukti Upload</div>
    <table class="bukti-grid">
      <tr>
        <td>
          <div class="bukti-label">Instagram</div>
          @if($reg->bukti_ig)
            <img class="bukti-img" src="{{ storage_path('app/public/' . $reg->bukti_ig) }}">
          @else
            <div class="bukti-no-img">Belum ada</div>
          @endif
        </td>
        <td>
          <div class="bukti-label">TikTok @jernih.net</div>
          @if($reg->bukti_tiktok_jernih)
            <img class="bukti-img" src="{{ storage_path('app/public/' . $reg->bukti_tiktok_jernih) }}">
          @else
            <div class="bukti-no-img">Belum ada</div>
          @endif
        </td>
        <td>
          <div class="bukti-label">TikTok @jernihcreatif</div>
          @if($reg->bukti_tiktok_creatif)
            <img class="bukti-img" src="{{ storage_path('app/public/' . $reg->bukti_tiktok_creatif) }}">
          @else
            <div class="bukti-no-img">Belum ada</div>
          @endif
        </td>
        <td>
          <div class="bukti-label">Google Maps</div>
          @if($reg->bukti_gmaps)
            <img class="bukti-img" src="{{ storage_path('app/public/' . $reg->bukti_gmaps) }}">
          @else
            <div class="bukti-no-img">Belum ada</div>
          @endif
        </td>
      </tr>
    </table>
  </div>
</div>
@endforeach

<div class="footer">
  © {{ date('Y') }} Jernih Multi Komunikasi · Dokumen ini digenerate otomatis oleh sistem
</div>

</body>
</html>
