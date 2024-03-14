

<!DOCTYPE html>
<html lang='pt-br'>
   <head>
      <title></title>
      
      <link rel='icon' href='src/pix/logo.svg' type='svg+xml'>
      <meta charset='UTF-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
      <style>
         @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Cinzel+Decorative:wght@400;700;900&family=Open+Sans:wght@500;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tangerine:wght@400;700&display=swap');

         *:not( h1,h2,h3,h4,h5,h6,p,menu,ul,ol,li,hr,pre,dd,blockquote,fieldset,legend ),
         *:not( h1,h2,h3,h4,h5,h6,p,menu,ul,ol,li,hr,pre,dd,blockquote,fieldset,legend )::before,
         *:not( h1,h2,h3,h4,h5,h6,p,menu,ul,ol,li,hr,pre,dd,blockquote,fieldset,legend )::after {
            margin:0; padding:0; box-sizing:border-box;
         }
         
         :root {
            --dark0: #16181c;   --dark1: #1b1d22;
            --dark2: #212329;   --dark3: #505257;

            --light0: #ffffff;  --light1: #f5f5f5;

            --pink: #905;   --amber: #ffab00;   --red: #ce3635;
            --azul: #27f;   --green: #006400;   --blue: #149cbe;
            --texto: #e9e6e3;

            --green-dark: #8b6d19;  --green-light: #a17d1a;    --green-bg: #fbf6e9;
            --purple-dark: #603479; --purple-light: #965bb9;   --purple-bg: #f4edf7;
            --red-dark: #902726;    --red-light: #b83232;      --red-bg: #fceeee;
            --blue-dark: #1c5b6e;   --blue-light: #267d97;     --blue-bg: #ebf6fb;

            --appbar-height: 81px;
            --appbar-filter-shadow: drop-shadow( #0009 0 0 5px );
            --sidebar-width: 68px;
         }
         
         navlink { cursor: pointer; }
         navlink:hover { color: #27f; transition: .3s ease-in-out; }
         
         ::-webkit-scrollbar {
            width: 10px;
         }
         ::-webkit-scrollbar-track {
            background: var( --pink );
            border-radius: 5px;
         }
         ::-webkit-scrollbar-thumb {
            background: var( --dark0 );
            border-radius: 5px;
         }
         
         html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            
            background-color: #1b1d22;
            background-image:   linear-gradient( 0deg, #00000000 24px, #212329 25px ),
            linear-gradient( 90deg, #00000000 24px, #212329 25px );
            background: #fff;
            background-size: 25px 25px;
         }
         body {
            width: calc( 100% - var( --sidebar-width ) );
            min-height: 100vh;
            /* margin-left: var( --sidebar-width ); */
            padding-top: 81px;
            /* color: var( --texto ); */
            font-family: 'Poppins';
            -webkit-font-smoothing: antialiased;
            
            background: #fff;
            position: absolute;
            top: 71px; left: 0;
            padding: 3rem 0 2rem;
         }
         body > main {
            margin: 0 auto;
            padding: 2.5rem;
         }
         body > main > article,
         body > main > section {
            width: 90%;
            margin: 0 auto;
            padding: 1rem;
         }
         t1, t2, t3, t4, t5, t6, t7 {
            font-size: 3em;
            font-weight: bold;
            line-height: 1.2;
            word-wrap: break-word;
            color: #27f;
         }
         t { font-size: 1rem; }
         t1 { font-size: 3rem; color: #e33; }
         t2 { font-size: 2.5rem; color: #f29; }
         t3 { font-size: 2.25rem; }
         t4 { font-size: 1.8rem; }
         t5 { font-size: 1.5rem; }
         t6 { font-size: 1.25rem; }
         t7 { font-size: 1.1rem; }
         p { word-wrap: break-word; }
         li { margin: 0.8ch 0; font-size: inherit; }
         li > :nth-child( 1n ) {
            padding-top: 1ch;
            padding-bottom: 1ch;
         }
         li::marker {
            /* unicode-bidi: isolate;
            font-variant-numeric: tabular-nums;
            font-variant-numeric: slashed-zero;
            text-transform: none;
            text-indent: 0px !important;
            text-align: start !important;
            text-align-last: start !important; */
            font-size: larger;
            font-weight: bolder;
            color: #da0;
         }
         appbar {
            /* display: block;
            width: 100%;
            height: 81px;
            position: fixed;
            top: 0; left: 0;
            background: var( --dark0 );
            filter: var( --appbar-filter-shadow ); */
            z-index: 9;
            
            display: block;
            width: 100%;
            height: 98px;
            position: fixed;
            top: 0; left: 0;
            background: #5099;
            box-shadow: #509c 0 0 0 6px;
            filter: drop-shadow( #0009 0 0 5px );
            border-bottom-left-radius: 2rem;
            border-bottom-right-radius: 2rem;
            border-bottom: #29f 5px dashed;
            border-left: #29f 5px dashed;
            border-right: #29f 5px dashed;
         }
         appbar-body {
            display: grid;
            grid-template-columns: auto 1fr auto;
            width: 99%;
            height: 81px;
            margin: 0 auto;
            background: #27fc;
            box-shadow: #27f 0 0 0 6px;
            filter: drop-shadow( #0009 0 0 5px );
            border-bottom-left-radius: 7ch;
            border-bottom-right-radius: 7ch;
            border-bottom: #29f 5px dashed;
            border-left: #29f 5px dashed;
            border-right: #29f 5px dashed;
         }
         appbar-body > t1 {
            color: #59f;
            display: grid;
            place-items: center;
         }
         sidebar {
            display: grid;
            grid-template-columns: var( --sidebar-width ) 256px;
            width: var( --sidebar-width );
            height: calc( 100% - var( --appbar-height ) );
            height: 100dvh;
            margin-top: var( --appbar-height );
            position: fixed;
            top: 0; left: 0;
            z-index: 6;
            overflow-x: hidden;
            background: var( --dark0 );
         }
         sidebar::-webkit-scrollbar { width: 0; }
         sidebar-body {
            display: grid;
            grid-template-columns: repeat( 1, 60px );
            grid-template-rows: repeat( auto-fill, 62px );
            justify-content: center;
            gap: 8px;
            padding-top: 18px;
         }
         sidebar-header {
            display: grid;
            width: 100%;
            height: 100%;
         }
         sidebar-body {
            display: grid;
            width: 100%;
            height: 100%;
         }
         sidebar-options {
            display: grid;
            width: 100%;
            height: 100%;
         }
         icon {
            display: grid;
            grid-template-columns: repeat( 1, 80% );
            grid-template-rows: 80% 20%;
            justify-content: center;
            place-items: center;
            gap: 2%;
            padding: 4px;
            border-radius: 0.5em;
            cursor: pointer;
            overflow: hidden;
            transition: all .2s ease;
         }
         icon:has( icon-img ):hover {
            background: #0005;
            border-left: #27f 2px solid;
            color: #ffab00;
            transition: all .2s ease;
         }
         icon-img {
            display: grid !important;
            place-items: center;
            width: 100%;
            aspect-ratio: 1 / 1;
            border-radius: 5em;
            background: #f5f5f510;
         }
         icon-name {
            text-transform: capitalize;
            font-size: x-small;
         }
         drawer {
            display: block;
            height: 100%;
            background: var( --dark1 );
         }
         card {
            display: grid;
            width: clamp( 100px, 90%, 950px );
            height: 100%;
            margin: 0 auto;
            padding: 2rem;
            background: #2232;
            box-shadow: #2233 0 0 0 13px;
            filter: drop-shadow( #9052 0 0 6px );
            border-radius: 1.5rem;
            border: 6px dashed #f275;
         }
         card-body {
            display: block;
            width: 100%;
            height: 100%;
            padding: 1.5em 2.5em;
            background: #f5f5f5;
         }
         label {
            display: grid;
         }
         label > :first-child {
            font-size: 1.5rem;
            margin: 1ch 0 .5ch;
            font-variant: small;
         }
         label > input {
            border-radius: 9px;
            border: transparent;
            padding: 0.5rem;
            font-size: 1.1rem;
            outline: transparent;
            cursor: pointer;
         }
         label > input:focus-visible {
         }
         fieldset {
            border-radius: 2rem;
            margin: 1rem 0;
            padding: 1rem;
         }
         legend { font-weight: bolder; }
         hr {
            width: 100%;
            border: #da05 solid;
            border-radius: 2rem;
         }
         button, input[type='button'] {
            padding: 1rem 2rem;
            border-radius: 0.5em;
            border: none;
            background: var( --azul );
            box-shadow: var( --purple-light ) 0 2px 0 1px;
            transform: translateY( -1px );
            font-size: 1.25rem;
            line-height: 1.75rem;
            color: #fff;
            transition: .15s all ease;
            cursor: pointer;
         }
         button:hover, input[type='button']:hover {
            box-shadow: var( --purple-light ) 0 4px 0 1px;
            transform: translateY(-3px);
            transition: .15s all ease;
         }
         button:active, input[type='button']:active {
            box-shadow: var( --purple-light ) 0 2px 0 1px;
            transform: translateY(-1px);
            transition: .15s all ease;
         }
         article > section {
            margin: 0 auto;
            padding: 24px;
            background: var( --dark1 );
         }
         article > section > header-links {
            display: block;
         }
         article > section > home {
            display: block;
            margin: 20px 0 50px;
         }
         article > section > home > * {
            padding: 20px 0;
         }
         post {
            display: block;
            flex: auto;
            max-width: 800px;
            margin: 0 auto;
            padding: 90px 0;
         }
         post-body {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            position: relative;
            border-radius: 6px;
            background: #212329;
         }
         post-body > post-header {
            display: block;
            padding: 70px 95px;
         }
         post-body:has( post-header ) post-body {
            padding-top: 0;
         }
      </style>
   </head>
   <body>
      <appbar>
         <appbar-body>
            <appbar-brand></appbar-brand>
            <t1></t1>
            <appbar-options></appbar-options>
         </appbar-body>
      </appbar>

      <main>
         <?php 
            echo "oi"; 
            $php = json_encode( array( 'red'=>'apple', 'yellow'=>'banana', 'orange'=>'orange', 'peach'=>'peach' ) );
            echo "<script>var php2Js = $php</script>"; 

            $data = array(
               'name' => 'John',
               'age' => 30,
               'city' => 'New York'
            );
         
            $json = json_encode( $data );
            echo "<script>var data = $json;</script>";  
         ?>
            
          <!-- <?php 
            if( isset( $_POST ) ) {
               $dataFrom = file_get_contents( "php://input" );
               $data = json_decode( $dataFrom, true );   // return list
               // $data = json_decode( $dataFrom );   // return objct
               echo json_encode( $data );
            }
            $file = fopen( "db.db", "a" ) or die( "" );
            fwrite( $file, "oi" );
            fwrite( $file, "io" );
            fclose( $file );
         ?>  -->

         <card id="target"></card>
      </main>

      <script>
         'use strict';
         /* ==[ properties ]================= */
         const 
            $ = v => document.querySelector( v ),
            $$ = v => document.querySelectorAll( v ),
            _ = ( ...v ) => console.log( ...v );
         /* -------------------------------- */



         /* ==[ events ]==================== */
         window.addEventListener( 'load', ev => {
            let NavLinks = $$( 'navlink' );



            NavLinks.forEach( link => link.addEventListener( 'click', ev => {
               window.open( link.getAttribute( 'to' ), '_blank' );
            } ) );

         } );

         let 
            objct = {
               id: 1,
               name: "Céo"
            }
            ,
            orb = {}
         ;
         fetch(
            "script.php",
            {
               method: "POST",
               headers: {
                  "Content-Type": "application/json; charset=utf-8"
               },
               "body": JSON.stringify( objct )
            }
         ).then( response => {
            // return( response.text() );
            return( response.json() );
         } ).then( data => {
            orb = { ...data };
            // _( data );
            _( "orb: ", orb );
            for( v in orb ) {
               target.innerHTML += `
                  <t>${ v }</t> - 
               `;
            }
         } );

         // let 
         //    php2Js = JSON.parse( "<?php echo json_encode( $php ); ?>" )
         // ;

      </script>
   </body>
</html>
