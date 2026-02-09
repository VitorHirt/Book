<section class="book-banner container-fluid">
    <div class="row align-items-center justify-content-center h-100 w-100 m-0">
        
        <div class="col-lg-3 col-md-10 mb-4 mb-lg-0 px-lg-4">
            <h1 class="fw-bold display-5">Happy reading, Harvey</h1>
            <p class="text-muted my-4">
                Wow! you've delved deep into the wizarding world's secrets. 
                Have Harry's parents died yet? Oops, looks like you're not there yet. Get reading now!
            </p>
            <a href="#" class="btn-read">Start reading &nbsp; &nearrow;</a>
        </div>

        <div class="col-lg-5 col-md-10 text-center mb-4 mb-lg-0">
            <img src="assets/img/book.png" 
                 alt="Open Book Illustration" 
                 class="book-illustration">
        </div>

        <div class="col-lg-3 col-md-10 px-lg-4">
            <h2 class="fw-bold h1">The Chambers of Secrets</h2>
            
            <div class="page-status my-3">
                <span class="current-page">154</span> 
                <span class="total-pages">/ 300 pages</span>
            </div>

            <p class="text-secondary small">
                Harry as he returns to Hogwarts school of witchcraft and wizardry for his 2nd year, only to discover that..
            </p>
            
            <div class="text-end mt-4">
                <span class="author">- JK Rowlings</span>
            </div>
        </div>

    </div>
</section>

<style>
    .book-banner {
        background-color: #f8f6f0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        width: 100%;
        height: 600px;
        padding: 0; /* Removi o padding para a Row controlar o alinhamento */
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .book-banner .btn-read {
        background-color: #24242e;
        color: white;
        border-radius: 30px;
        padding: 12px 25px;
        text-decoration: none;
        display: inline-block;
        transition: transform 0.2s;
    }

    .book-banner .btn-read:hover {
        transform: scale(1.05);
        color: #fff;
    }

    .book-banner .book-illustration {
        max-width: 100%;
        max-height: 800px; /* Limita a altura para não quebrar o layout */
        object-fit: contain;
        filter: drop-shadow(0 20px 30px rgba(0,0,0,0.15));
    }

    .book-banner .page-status {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .book-banner .current-page {
        color: #d9534f;
    }

    .book-banner .total-pages {
        color: #adb5bd;
        font-weight: normal;
    }

    .book-banner .author {
        font-style: italic;
        color: #6c757d;
    }
</style>