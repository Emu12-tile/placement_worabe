<!DOCTYPE html>
<html lang="en">

<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



    <title>Document</title>
    <style>
        /* @font-face {
            font-family: 'noto sans ethiopic', sans-serif;
            font-style: normal;
            font-weight: normal;

            src: url('https://fonts.googleapis.com/css2?family=Noto+Sans+Ethiopic&display=swap.ttf') format('truetype');
        } */
        /* @font-face {
            font-family: 'Noto Sans Ethiopic';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            src: url(https://fonts.gstatic.com/s/notosansethiopic/v42/7cHPv50vjIepfJVOZZgcpQ5B9FBTH9KGNfhSTgtoow1KVnIvyBoMSzUMacb-T35OK5D1yGbuaQ.woff2) format('woff2');
            unicode-range: U+1200-1399, U+2D80-2DDE, U+AB01-AB2E;
        } */


        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(2) {
            /* background-color: #6d6a6a; */
        }

        /* #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        } */

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            /* background-color: #5f5656; */
            color: rgb(29, 28, 28);
        }
    </style>
</head>

<body>

    <div id="element-to-print">

        <h1 style="font-family: Noto Sans Ethiopic, sans-serif; text-align:center ">አዲስ አበባ ሳይንስና ቴክኖሎጂ ዩኒቨርሲቲ </h1>
        <h3 style="text-align:center">የአስተዳደር ሠራተኞች ፕሮፋይል</h3>
        <p>ሙሉ ስም:- {{ $hr->form->full_name }}</p>


        {{-- <p>ሙሉ ስም:- {{ $hr->user->name }}</p> --}}
        <p>ለትምህርት ዝግጅት የሚሰጥ ነጥብ:-
            {{ $hr->performance }}</p>
        <p>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ:-
            {{ $hr->experience }}</p>
        <p>ለውጤት ተኮር ምዘና:-{{ $hr->resultbased }}</p>

        <p>አጠቃላይ ውጤት(100%):-
            {{ $hr->performance + $hr->experience + $hr->resultbased }}
        </p>



    </div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"
    integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var element = document.getElementById("element-to-print")
    html2pdf(element, {
        margin: 15,
        filename: 'Application form.pdf',
        image: {
            type: 'jpeg',
            quality: 0.98
        },
        html2canvas: {
            scale: 3,
            logging: true,
            dpi: 192,
            letterRendering: true
        },
        jsPDF: {
            unit: 'mm',
            format: 'a4',
            orientation: 'portrait'
        }
    })
</script>

</html>
