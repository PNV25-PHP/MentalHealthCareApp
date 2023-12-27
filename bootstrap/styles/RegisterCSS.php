<style>
    .container {
        width: 1080px;
    }

    .block_contain-lefl {
        width: 60%;
        text-align: center;
    }

    .block_contain-right {
        width: 40%;
        background: #C3C8CF;
    }

    .material-symbols-outlined {
        cursor: pointer;
    }

    .grid-cols-1.flex {
        width: 100%;
    }

    #form {
        display: grid;
        width: 60%;
        margin: 0% 15%;
        gap: 5px;
    }

    #form>div {
        margin: 5px 0px;
        width: 60%;
    }

    #sub {
        margin: 0 25%;
        margin-top: 5px;
        text-align: center !important;
        cursor: pointer;
        border-radius: 10px;
        background-color: #4285F4;
        width: 175px;
        height: 40px;
    }

    div>label {
        width: 200%;
        border-radius: 5px;
        text-align: left !important;
        margin: 1px 0px;
    }

    div>input {
        width: 200%;
        height: 40px;
        border-radius: 5px;
        text-align: left !important;
        margin: 1px 0px;
        padding: 8px 12px;
    }


    p>a {
        align-items: center;
        justify-content: center;

        color: #1e40af;
        font-style: italic;
        margin-bottom: 0.5rem;
    }

    p,
    h3 {
        text-align: center;
    }

    .title {
        color: var(--Dark-Blue, #1F2B6C);
        /* Poppin regular 50 */
        font-family: Poppins;
        font-size: 50px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    #front-text {
        color: #000;
        font-family: Beau Rivage;
        font-size: 50px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin: 10% 0px 10% 0px;
    }

    img {
        width: 100%;
    }

    @media screen and (max-width: 768px) {
        body {
            width: 768px !important;
        }

        .block_contain-right.col-span-1 {
            display: none;
        }

        .block_contain-lefl.col-span-1 {
            width: 100%;
        }

        #form {
            width: 50% !important;
            /* text-align: center; */
            margin: 0% 21%;
        }

        div>label,
        input {
            width: 126%;
        }
    }

    @media screen and (max-width: 640px) {
        body {
            width: 640px !important;
        }

        .block_contain-right.col-span-1 {
            display: none;
        }

        .block_contain-lefl.col-span-1 {
            width: 100%;
        }

        #form {
            width: 50% !important;
            /* text-align: center; */
            margin: 0% 13%;
        }

        .title {
            color: var(--Dark-Blue, #1F2B6C);
            font-family: Poppins;
            font-size: 50px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            width: 79%;
        }

        #instructure {
            text-align: center;
            width: 77%;
        }

        div>label {
            width: 126%;
        }

        div>input {
            width: 175%;
            height: 40px;
            border-radius: 5px;
            text-align: left !important;
            margin: 1px 0px;
            padding: 8px 12px;
        }

        #nut {
            width: 74%;
        }

        #fogettext {
            width: 70%;
        }
    }

    @media screen and (max-width: 509px) {
        body {
            width: 509px !important;
        }

        .block_contain-right.col-span-1 {
            display: none;
        }

        .block_contain-lefl.col-span-1 {
            width: 100%;
        }

        #form {
            width: 50% !important;
            /* text-align: center; */
            margin: 0% 7%;
        }

        .title {
            color: var(--Dark-Blue, #1F2B6C);
            font-family: Poppins;
            font-size: 40px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            width: 69%;
        }

        #instructure {
            text-align: center;
            width: 77%;
        }

        div>label {
            width: 126%;
        }

        div>input {
            width: 175%;
            height: 40px;
            border-radius: 5px;
            text-align: left !important;
            margin: 1px 0px;
            padding: 8px 12px;
        }

        #nut {
            width: 64%;
        }

        #fogettext {
            width: 65%;
        }
    }

    @media screen and (max-width: 414px) {
        body {
            width: 414px !important;
        }

        .block_contain-right.col-span-1 {
            display: none;
        }

        .block_contain-lefl.col-span-1 {
            width: 100%;
        }

        #form {
            width: 75% !important;
            /* text-align: center; */
            margin: 0% 5%;
        }

        .title {
            color: var(--Dark-Blue, #1F2B6C);
            font-family: Poppins;
            font-size: 35px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            width: 92%;
        }

        #instructure {
            width: 85%;
        }

        div>label {
            width: 126%;
        }

        div>input {
            width: 175%;
            height: 40px;
            border-radius: 5px;
            text-align: left !important;
            margin: 1px 0px;
            padding: 8px 12px;
        }

        #nut {
            width: 53%;
        }

        #sub {
            margin: 0 32%;
            margin-top: 5px;
            text-align: center !important;
            cursor: pointer;
            border-radius: 10px;
            background-color: #4285F4;
            width: 175px;
            height: 40px;
        }

        #fogettext {
            width: 84%;
        }

        .material-symbols-outlined {
            cursor: pointer;
            margin: 49% 4px;
        }
    }

    @media screen and (max-width: 376px) {
        body {
            width: 375px !important;
        }

        .block_contain-right.col-span-1 {
            display: none;
        }

        .block_contain-lefl.col-span-1 {
            width: 100%;
        }

        #form {
            width: 75% !important;
            /* text-align: center; */
            margin: 0% 5%;
        }

        .title {
            color: var(--Dark-Blue, #1F2B6C);
            font-family: Poppins;
            font-size: 35px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            width: 92%;
        }

        #instructure {
            width: 85%;
        }

        div>label {
            width: 126%;
        }

        div>input {
            width: 175%;
            height: 40px;
            border-radius: 5px;
            text-align: left !important;
            margin: 1px 0px;
            padding: 8px 12px;
        }

        #nut {
            width: 53%;
        }

        #sub {
            margin: 0 32%;
            margin-top: 5px;
            text-align: center !important;
            cursor: pointer;
            border-radius: 10px;
            background-color: #4285F4;
            width: 175px;
            height: 40px;
        }

        #fogettext {
            width: 84%;
        }

        .material-symbols-outlined {
            cursor: pointer;
            margin: 49% 4px;
        }
    }
</style>