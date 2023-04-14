@extends('layouts.landingqumantu');

@section('slot')
<section class="h-100 w-100 bg-white" style="box-sizing: border-box;">
    <div class="empty-2-1 container mx-auto d-flex align-items-center justify-content-center flex-column" style="font-family: 'Poppins', sans-serif;">
        <!-- <img class="main-img img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState2/Empty-2-1.png" alt=""> -->
        <div class="text-center w-100">
            <h1 class="title-text">
                Maaf! Akun Kamu Tidak Aktif
            </h1>
            <p class="title-caption">
                {{-- Halaman yang Anda cari tidak ditemukan. Kita <br class="d-sm-block d-none"> menyarankan Anda Kembali ke Beranda.
                The page you’re looking for isn’t found. We suggest you Back to Homepage. --}}
                Kamu tidak dapat mengakses halaman ini. Kita <br class="d-sm-block d-none"> menyarankan Anda Kembali ke Beranda.
            </p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-back d-inline-flex text-white">
                    Back to Homepage
                </button>
            </div>
        </div>
    </div>
  </section>
@endsection

@push('style')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    .empty-2-1{
        padding: 4rem 2rem 4rem;
    }
    .empty-2-1 .main-img{
        object-fit: contain;
        object-position: center;
        margin-bottom: 3rem;
        width: 75%;
    }
    .empty-2-1 .title-text{
        color: #272E35;
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 1.25rem;
    }
    .empty-2-1 .title-caption{
        color: #9C9C9C;
        margin-bottom: 4rem;
        letter-spacing: 0.025em;
        line-height: 1.75rem;
    }
    .empty-2-1 .btn-back{
        background-color: #FF7C57;
        font: 600 1.125rem/1.75rem Poppins, sans-serif;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
    }
    .empty-2-1 .btn-back:hover{
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }
    @media(min-width: 425px){
        .empty-2-1 .title-text{
            font-size: 40px;
        }
    }
    @media (min-width: 576px) {
        .empty-2-1{
            padding-top: 5rem;
        }
        .empty-2-1 .main-img{
            margin-bottom: 4rem;
            width: auto;
        }
    }
</style>
@endpush
