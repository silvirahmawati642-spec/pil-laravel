flowchart LR
  subgraph S1[Data Sources]
    A1[Sensor IoT (lokasi, suhu)]
    A2[WMS / Warehouse DB]
    A3[ERP / Order Management]
    A4[Pihak Ketiga / Carrier APIs]
    A5[Pengguna / Input Manual]
  end

  subgraph S2[Integrasi & Penyimpanan]
    B1[API Gateway]
    B2[ETL / Data Ingestion]
    B3[Data Lake / Raw Storage]
    B4[Data Warehouse / OLAP]
    B5[Master Data (produk, lokasi)]
  end

  subgraph S3[Komponen SPK]
    C1[Preprocessing & Cleansing]
    C2[Model Evaluasi (AHP / TOPSIS / PROMETHEE)]
    C3[Optimasi Rute & Penjadwalan (solver)]
    C4[Rules Engine / Business Rules]
    C5[Analitik & KPI Engine]
  end

  subgraph S4[Backend & API]
    D1[Service Orchestration]
    D2[Decision API]
    D3[Auth & Audit]
  end

  subgraph S5[Presentasi]
    E1[Dashboard Admin]
    E2[Mobile App Pengemudi]
    E3[Portal Pelanggan]
    E4[Laporan & Export CSV/PDF]
  end

  %% Aliran
  A1 --> B1
  A2 --> B1
  A3 --> B1
  A4 --> B1
  A5 --> B1

  B1 --> B2
  B2 --> B3
  B3 --> C1
  B3 --> B4
  B4 --> C2
  B5 --> C1

  C1 --> C2
  C1 --> C3
  C2 --> D2
  C3 --> D2
  C4 --> D2
  C5 --> D2

  D2 --> D1
  D1 --> E1
  D1 --> E2
  D1 --> E3
  D1 --> E4

  %% Monitoring & Feedback loop
  E2 --> B1
  E1 --> B5
  E3 --> B1
