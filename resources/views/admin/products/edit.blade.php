@extends('layouts.admin')

@section('content')
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" novalidate class="needs-validation" onsubmit="updateEditorContent()">
        @csrf
        @method('PUT')

        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Product</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Products</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger m-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Product Details</h5>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="nav-tab-items-wrapper nav nav-justified invoice-overview-tab-item">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#uzContent">O'zbekcha</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#enContent">English</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#ruContent">Русский</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content pt-3">
                                        <div class="tab-pane fade show active" id="uzContent">
                                            <div class="form-group pb-3">
                                                <label for="name_uz">Name (UZ):</label>
                                                <input type="text" class="form-control" id="name_uz" name="name_uz" value="{{ old('name_uz', $product->name_uz) }}" required>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_uz">Description (UZ):</label>
                                                <div id="editor_description_uz" style="height:200px;">{!! old('description_uz', $product->description_uz) !!}</div>
                                                <input type="hidden" id="description_uz" name="description_uz">
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="content_uz">Content (UZ):</label>
                                                <div id="editor_uz" style="height:400px;">{!! old('content_uz', $product->content_uz) !!}</div>
                                                <input type="hidden" id="text_uz" name="content_uz">
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="enContent">
                                            <div class="form-group pb-3">
                                                <label for="name_en">Name (EN):</label>
                                                <input type="text" class="form-control" id="name_en" name="name_en" value="{{ old('name_en', $product->name_en) }}" required>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_en">Description (EN):</label>
                                                <div id="editor_description_en" style="height:200px;">{!! old('description_en', $product->description_en) !!}</div>
                                                <input type="hidden" id="description_en" name="description_en">
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="content_en">Content (EN):</label>
                                                <div id="editor_en" style="height:400px;">{!! old('content_en', $product->content_en) !!}</div>
                                                <input type="hidden" id="text_en" name="content_en">
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="ruContent">
                                            <div class="form-group pb-3">
                                                <label for="name_ru">Name (RU):</label>
                                                <input type="text" class="form-control" id="name_ru" name="name_ru" value="{{ old('name_ru', $product->name_ru) }}" required>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_ru">Description (RU):</label>
                                                <div id="editor_description_ru" style="height:200px;">{!! old('description_ru', $product->description_ru) !!}</div>
                                                <input type="hidden" id="description_ru" name="description_ru">
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="content_ru">Content (RU):</label>
                                                <div id="editor_ru" style="height:400px;">{!! old('content_ru', $product->content_ru) !!}</div>
                                                <input type="hidden" id="text_ru" name="content_ru">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Изображение продукта</h5>
                                </div>
                                <div class="card-body p-4">
                                    <!-- Rasm yuklash -->
                                    <div class="form-group pb-3">
                                        <label for="image">Изображение:</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>

                                    @if ($product->image)
                                        <div class="mb-3">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="Изображение продукта" class="img-fluid" width="100" >
                                        </div>
                                    @endif

                                    <div class="form-group pb-3">
                                        <label for="gallery">Изображения-2:</label>
                                        <input type="file" class="form-control" id="gallery" name="gallery[]" multiple>
                                    </div>

                                    @php
                                        $galleryItems = is_array($product->gallery) ? $product->gallery : json_decode($product->gallery, true);
                                    @endphp

                                    @if ($galleryItems)
                                        <div class="mb-3">
                                            @foreach($galleryItems as $gallery)
                                                <img src="{{ asset('storage/' . $gallery) }}" alt="Изображение продукта" class="img-fluid" width="100">
                                            @endforeach
                                        </div>
                                    @endif




                                    <!-- PDF fayl yuklash -->
                                    <div class="form-group pb-3">
                                        <label for="pdf">PDF файл:</label>
                                        <input type="file" class="form-control" id="pdf" name="pdf">
                                    </div>

                                    <!-- Mavjud PDF faylni ko'rsatish -->
                                    @if ($product->pdf)
                                        <div class="mb-3">
                                            <a href="{{ asset('storage/' . $product->pdf) }}" target="_blank" class="btn btn-info" >
                                                Скачать текущий PDF
                                            </a>
                                        </div>
                                    @endif

                                    <!-- Mavjud YouTube URLni ko'rsatish -->
                                    @if ($product->video)
                                        <div class="mb-3">
                                            <label>Текущий YouTube URL:</label>
                                            <p><a  href="{{ $product->video }}" target="_blank">{{ $product->video }}</a></p>
                                        </div>
                                    @endif

                                    <!-- YouTube URL o'zgartirish -->
                                    <div class="form-group pb-3">
                                        <label for="video">YouTube URL:</label>
                                        <input type="url" class="form-control" id="video" name="video" placeholder="Введите URL видео"
                                               value="{{ old('video', $product->video) }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </form>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script>
        var editorUz = new Quill('#editor_uz', { theme: 'snow' });
        var editorEn = new Quill('#editor_en', { theme: 'snow' });
        var editorRu = new Quill('#editor_ru', { theme: 'snow' });
        var editorDescriptionUz = new Quill('#editor_description_uz', { theme: 'snow' });
        var editorDescriptionEn = new Quill('#editor_description_en', { theme: 'snow' });
        var editorDescriptionRu = new Quill('#editor_description_ru', { theme: 'snow' });


        function updateEditorContent() {
            document.getElementById('text_uz').value = editorUz.root.innerHTML;
            document.getElementById('text_en').value = editorEn.root.innerHTML;
            document.getElementById('text_ru').value = editorRu.root.innerHTML;
            document.getElementById('description_uz').value = editorDescriptionUz.root.innerHTML;
            document.getElementById('description_en').value = editorDescriptionEn.root.innerHTML;
            document.getElementById('description_ru').value = editorDescriptionRu.root.innerHTML;
        }

        document.querySelector('form').addEventListener('submit', function(event){
            updateEditorContent();
        });
    </script>
@endsection
