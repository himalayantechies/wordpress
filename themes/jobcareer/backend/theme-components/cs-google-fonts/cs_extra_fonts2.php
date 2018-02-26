<?php
// Get fonts files
$cs_fonts_vars = array('fonts');
$cs_fonts_vars = CS_JOBCAREER_GLOBALS()->globalizing($cs_fonts_vars);
extract($cs_fonts_vars);

 $fonts .= '{
   "kind": "webfonts#webfont",
   "family": "League Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/leaguescript/v7/wnRFLvfabWK_DauqppD6vSeUSrabuTpOsMEiRLtKwk0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Leckerli One",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/leckerlione/v7/S2Y_iLrItTu8kIJTkS7DrC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ledger",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ledger/v4/G432jp-tahOfWHbCYkI0jw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lekton",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/lekton/v7/WZw-uL8WTkx3SBVfTlevXQ.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/lekton/v7/r483JYmxf5PjIm4jVAm8Yg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/lekton/v7/_UbDIPBA1wDqSbhp-OED7A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Marcellus SC",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/marcellussc/v4/_jugwxhkkynrvsfrxVx8gS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Marck Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/marckscript/v7/O_D1NAZVOFOobLbVtW3bci3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Margarine",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/margarine/v5/DJnJwIrcO_cGkjSzY3MERw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Marko One",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/markoone/v6/hpP7j861sOAco43iDc4n4w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Marmelad",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/marmelad/v6/jI0_FBlSOIRLL0ePWOhOwQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Martel",
   "category": "serif",
   "variants": [
    "200",
    "300",
    "regular",
    "600",
    "700",
    "800",
    "900"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-04-22",
   "files": {
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/martel/v1/_wfGdswZbat7P4tupHLA1w.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/martel/v1/SghoV2F2VPdVU3P0a4fa9w.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/martel/v1/Kt9uPhH1PvUwuZ5Y6zuAMQ.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/martel/v1/4OzIiKB5wE36xXL2U0vzWQ.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/martel/v1/RVF8drcQoRkRL7l_ZkpTlQ.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/martel/v1/iS0YUpFJoiLRlnyl40rpEA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/martel/v1/9ALu5czkaaf5zsYk6GJEnQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Martel Sans",
   "category": "sans-serif",
   "variants": [
    "200",
    "300",
    "regular",
    "600",
    "700",
    "800",
    "900"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-04-07",
   "files": {
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/martelsans/v1/7ajme85aKKx_SCWF59ImQEnzyIngrzGjGh22wPb6cGM.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/martelsans/v1/7ajme85aKKx_SCWF59ImQC9-WlPSxbfiI49GsXo3q0g.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/martelsans/v1/7ajme85aKKx_SCWF59ImQJZ7xm-Bj30Bj2KNdXDzSZg.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/martelsans/v1/7ajme85aKKx_SCWF59ImQHe1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/martelsans/v1/7ajme85aKKx_SCWF59ImQA89PwPrYLaRFJ-HNCU9NbA.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/martelsans/v1/7ajme85aKKx_SCWF59ImQCenaqEuufTBk9XMKnKmgDA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/martelsans/v1/91c8DPDZncMc0RFfhmc2RqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Marvel",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/marvel/v6/WrHDBL1RupWGo2UcdgxB3Q.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/marvel/v6/Fg1dO8tWVb-MlyqhsbXEkg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/marvel/v6/HzyjFB-oR5usrc7Lxz9g8w.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/marvel/v6/Gzf5NT09Y6xskdQRj2kz1qCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mate",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/mate/v5/ooFviPcJ6hZP5bAE71Cawg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/mate/v5/5XwW6_cbisGvCX5qmNiqfA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mate SC",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/matesc/v5/-YkIT2TZoPZF6pawKzDpWw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Maven Pro",
   "category": "sans-serif",
   "variants": [
    "regular",
    "500",
    "700",
    "900"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/mavenpro/v7/SQVfzoJBbj9t3aVcmbspRi3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/mavenpro/v7/uDssvmXgp7Nj3i336k_dSi3USBnSvpkopQaUR-2r7iU.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/mavenpro/v7/-91TwiFzqeL1F7Kh91APwS3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/mavenpro/v7/sqPJIFG4gqsjl-0q_46Gbw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "McLaren",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/mclaren/v4/OprvTGxaiINBKW_1_U0eoQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Meddon",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-08-12",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/meddon/v9/f8zJO98uu2EtSj9p7ci9RA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "MedievalSharp",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/medievalsharp/v8/85X_PjV6tftJ0-rX7KYQkOe45sJkivqprK7VkUlzfg0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Medula One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/medulaone/v6/AasPgDQak81dsTGQHc5zUPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Megrim",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/megrim/v7/e-9jVUC9lv1zxaFQARuftw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Meie Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/meiescript/v4/oTIWE5MmPye-rCyVp_6KEqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Merienda",
   "category": "handwriting",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/merienda/v4/GlwcvRLlgiVE2MBFQ4r0sKCWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/merienda/v4/MYY6Og1qZlOQtPW2G95Y3A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Merienda One",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/meriendaone/v7/bCA-uDdUx6nTO8SjzCLXvS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Merriweather",
   "category": "serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweather/v8/ZvcMqxEwPfh2qDWBPxn6nqcQoVhARpoaILP7amxE_8g.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweather/v8/ZvcMqxEwPfh2qDWBPxn6nkD2ttfZwueP-QU272T9-k4.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweather/v8/ZvcMqxEwPfh2qDWBPxn6nqObDOjC3UL77puoeHsE3fw.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweather/v8/EYh7Vl4ywhowqULgRdYwICna0FLWfcB-J_SAYmcAXaI.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweather/v8/RFda8w1V0eDZheqfcyQ4EC3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweather/v8/So5lHxHT37p2SS4-t60SlPMZXuCXbOrAvx5R0IT5Oyo.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweather/v8/EYh7Vl4ywhowqULgRdYwIPAs9-1nE9qOqhChW0m4nDE.ttf",
    "900italic": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweather/v8/EYh7Vl4ywhowqULgRdYwIBd0_s6jQr9r5s5OZYvtzBY.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Merriweather Sans",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "700",
    "700italic",
    "800",
    "800italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweathersans/v5/6LmGj5dOJopQKEkt88Gowan5N8K-_DP0e9e_v51obXQ.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweathersans/v5/6LmGj5dOJopQKEkt88GowbqxG25nQNOioCZSK4sU-CA.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweathersans/v5/6LmGj5dOJopQKEkt88GowYufzO2zUYSj5LqoJ3UGkco.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweathersans/v5/nAqt4hiqwq3tzCecpgPmVdytE4nGXk2hYD5nJ740tBw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweathersans/v5/AKu1CjQ4qnV8MUltkAX3sOAj_ty82iuwwDTNEYXGiyQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweathersans/v5/3Mz4hOHzs2npRMG3B1ascZ32VBCoA_HLsn85tSWZmdo.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweathersans/v5/nAqt4hiqwq3tzCecpgPmVbuqAJxizi8Dk_SK5et7kMg.ttf",
    "800italic": "'.cs_server_protocol().'fonts.gstatic.com/s/merriweathersans/v5/nAqt4hiqwq3tzCecpgPmVdDmPrYMy3aZO4LmnZsxTQw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Metal",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v9",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/metal/v9/zA3UOP13ooQcxjv04BZX5g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Metal Mania",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/metalmania/v6/isriV_rAUgj6bPWPN6l9QKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Metamorphous",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/metamorphous/v6/wGqUKXRinIYggz-BTRU9ei3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Metrophobic",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/metrophobic/v6/SaglWZWCrrv_D17u1i4v_aCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Michroma",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/michroma/v7/0c2XrW81_QsiKV8T9thumA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Milonga",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/milonga/v4/dzNdIUSTGFmy2ahovDRcWg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Miltonian",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/miltonian/v8/Z4HrYZyqm0BnNNzcCUfzoQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Miltonian Tattoo",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/miltoniantattoo/v9/1oU_8OGYwW46eh02YHydn2uk0YtI6thZkz1Hmh-odwg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Miniver",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/miniver/v5/4yTQohOH_cWKRS5laRFhYg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Miss Fajardose",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/missfajardose/v6/WcXjlQPKn6nBfr8LY3ktNu6rPKfVZo7L2bERcf0BDns.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Modak",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/modak/v1/lMsN0QIKid-pCPvL0hH4nw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Modern Antiqua",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/modernantiqua/v6/8qX_tr6Xzy4t9fvZDXPkh6rFJ4O13IHVxZbM6yoslpo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Molengo",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/molengo/v7/jcjgeGuzv83I55AzOTpXNQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Molle",
   "category": "handwriting",
   "variants": [
    "italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/molle/v4/9XTdCsjPXifLqo5et-YoGA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Monda",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/monda/v4/EVOzZUyc_j1w2GuTgTAW1g.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/monda/v4/qFMHZ9zvR6B_gnoIgosPrw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Monofett",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/monofett/v6/C6K5L799Rgxzg2brgOaqAw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Monoton",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/monoton/v6/aCz8ja_bE4dg-7agSvExdw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Monsieur La Doulaise",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/monsieurladoulaise/v5/IMAdMj6Eq9jZ46CPctFtMKP61oAqTJXlx5ZVOBmcPdM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Montaga",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/montaga/v4/PwTwUboiD-M4-mFjZfJs2A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Montez",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/montez/v6/kx58rLOWQQLGFM4pDHv5Ng.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Montserrat",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/montserrat/v6/IQHow_FEYlDC4Gzy_m8fcgJKKGfqHaYFsRG-T3ceEVo.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/montserrat/v6/Kqy6-utIpx_30Xzecmeo8_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Montserrat Alternates",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/montserratalternates/v4/YENqOGAVzwIHjYNjmKuAZpeqBKvsAhm-s2I4RVSXFfc.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/montserratalternates/v4/z2n1Sjxk9souK3HCtdHuklPuEVRGaG9GCQnmM16YWq0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Montserrat Subrayada",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/montserratsubrayada/v4/wf-IKpsHcfm0C9uaz9IeGJvEcF1LWArDbGWgKZSH9go.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/montserratsubrayada/v4/nzoCWCz0e9c7Mr2Gl8bbgrJymm6ilkk9f0nDA_sC_qk.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Moul",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/moul/v8/Kb0ALQnfyXawP1a_P_gpTQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Moulpali",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v9",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/moulpali/v9/diD74BprGhmVkJoerKmrKA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mountains of Christmas",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/mountainsofchristmas/v8/PymufKtHszoLrY0uiAYKNM9cPTbSBTrQyTa5TWAe3vE.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/mountainsofchristmas/v8/dVGBFPwd6G44IWDbQtPew2Auds3jz1Fxb61CgfaGDr4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mouse Memoirs",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/mousememoirs/v4/NBFaaJFux_j0AQbAsW3QeH8f0n03UdmQgF_CLvNR2vg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mr Bedfort",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/mrbedfort/v5/81bGgHTRikLs_puEGshl7_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mr Dafoe",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/mrdafoe/v5/s32Q1S6ZkT7EaX53mUirvQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mr De Haviland",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/mrdehaviland/v5/fD8y4L6PJ4vqDk7z8Y8e27v4lrhng1lzu7-weKO6cw8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mrs Saint Delafield",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/mrssaintdelafield/v4/vuWagfFT7bj9lFtZOFBwmjHMBelqWf3tJeGyts2SmKU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mrs Sheppards",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/mrssheppards/v5/2WFsWMV3VUeCz6UVH7UjCn8f0n03UdmQgF_CLvNR2vg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Muli",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/muli/v7/VJw4F3ZHRAZ7Hmg3nQu5YQ.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/muli/v7/s-NKMCru8HiyjEt0ZDoBoA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/muli/v7/KJiP6KznxbALQgfJcDdPAw.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/muli/v7/Cg0K_IWANs9xkNoxV7H1_w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Mystery Quest",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/mysteryquest/v4/467jJvg0c7HgucvBB9PLDyeUSrabuTpOsMEiRLtKwk0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "NTR",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "telugu",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-07",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ntr/v4/e7H4ZLtGfVOYyOupo6T12g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Neucha",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic",
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-08-14",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/neucha/v8/bijdhB-TzQdtpl0ykhGh4Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Neuton",
   "category": "serif",
   "variants": [
    "200",
    "300",
    "regular",
    "italic",
    "700",
    "800"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/neuton/v8/DA3Mkew3XqSkPpi1f4tJow.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/neuton/v8/xrc_aZ2hx-gdeV0mlY8Vww.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/neuton/v8/gnWpkWY7DirkKiovncYrfg.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/neuton/v8/XPzBQV4lY6enLxQG9cF1jw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/neuton/v8/9R-MGIOQUdjAVeB6nE6PcQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/neuton/v8/uVMT3JOB5BNFi3lgPp6kEg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "New Rocker",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/newrocker/v5/EFUWzHJedEkpW399zYOHofesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "News Cycle",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v13",
   "lastModified": "2015-04-16",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/newscycle/v13/G28Ny31cr5orMqEQy6ljtwJKKGfqHaYFsRG-T3ceEVo.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/newscycle/v13/xyMAr8VfiUzIOvS1abHJO_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Niconne",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/niconne/v6/ZA-mFw2QNXodx5y7kfELBg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nixie One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/nixieone/v7/h6kQfmzm0Shdnp3eswRaqQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nobile",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/nobile/v7/9p6M-Yrg_r_QPmSD1skrOg.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/nobile/v7/lC_lPi1ddtN38iXTCRh6ow.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/nobile/v7/vGmrpKzWQQSrb-PR6FWBIA.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/nobile/v7/oQ1eYPaXV638N03KvsNvyKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nokora",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/nokora/v9/QMqqa4QEOhQpiig3cAPmbQ.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/nokora/v9/dRyz1JfnyKPNaRcBNX9F9A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Norican",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/norican/v4/SHnSqhYAWG5sZTWcPzEHig.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nosifer",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/nosifer/v5/7eJGoIuHRrtcG00j6CptSA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nothing You Could Do",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/nothingyoucoulddo/v6/jpk1K3jbJoyoK0XKaSyQAf-TpkXjXYGWiJZAEtBRjPU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Noticia Text",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin-ext",
    "vietnamese",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/noticiatext/v6/pEko-RqEtp45bE2P80AAKUD2ttfZwueP-QU272T9-k4.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/noticiatext/v6/wdyV6x3eKpdeUPQ7BJ5uUC3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/noticiatext/v6/dAuxVpkYE_Q_IwIm6elsKPMZXuCXbOrAvx5R0IT5Oyo.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/noticiatext/v6/-rQ7V8ARjf28_b7kRa0JuvAs9-1nE9qOqhChW0m4nDE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Noto Sans",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "greek-ext",
    "greek",
    "latin-ext",
    "vietnamese",
    "cyrillic",
    "devanagari",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/notosans/v6/PIbvSEyHEdL91QLOQRnZ1y3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/notosans/v6/0Ue9FiUJwVhi4NGfHJS5uA.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/notosans/v6/dLcNKMgJ1H5RVoZFraDz0qCWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/notosans/v6/9Z3uUWMRR7crzm1TjRicDne1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Noto Serif",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "greek-ext",
    "greek",
    "latin-ext",
    "vietnamese",
    "cyrillic",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/notoserif/v4/lJAvZoKA5NttpPc9yc6lPQJKKGfqHaYFsRG-T3ceEVo.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/notoserif/v4/zW6mc7bC1CWw8dH0yxY8JfesZW2xOQ-xsNqO47m55DA.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/notoserif/v4/HQXBIwLHsOJCNEQeX9kNzy3USBnSvpkopQaUR-2r7iU.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/notoserif/v4/Wreg0Be4tcFGM2t6VWytvED2ttfZwueP-QU272T9-k4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Cut",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/novacut/v8/6q12jWcBvj0KO2cMRP97tA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Flat",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/novaflat/v8/pK7a0CoGzI684qe_XSHBqQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Mono",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "greek",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/novamono/v7/6-SChr5ZIaaasJFBkgrLNw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Oval",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/novaoval/v8/VuukVpKP8BwUf8o9W5LYQQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Round",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/novaround/v8/7-cK3Ari_8XYYFgVMxVhDvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Script",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/novascript/v8/dEvxQDLgx1M1TKY-NmBWYaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Slim",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/novaslim/v8/rPYXC81_VL2EW-4CzBX65g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nova Square",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/novasquare/v8/BcBzXoaDzYX78rquGXVuSqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Numans",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/numans/v6/g5snI2p6OEjjTNmTHyBdiQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Nunito",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/nunito/v7/zXQvrWBJqUooM7Xv98MrQw.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/nunito/v7/aEdlqgMuYbpe4U3TnqOQMA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/nunito/v7/ySZTeT3IuzJj0GK6uGpbBg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Odor Mean Chey",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/odormeanchey/v8/GK3E7EjPoBkeZhYshGFo0eVKG8sq4NyGgdteJLvqLDs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Offside",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/offside/v4/v0C913SB8wqQUvcu1faUqw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Old Standard TT",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/oldstandardtt/v7/5Ywdce7XEbTSbxs__4X1_HJqbZqK7TdZ58X80Q_Lw8Y.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/oldstandardtt/v7/n6RTCDcIPWSE8UNBa4k-DLcB5jyhm1VsHs65c3QNDr0.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/oldstandardtt/v7/QQT_AUSp4AV4dpJfIN7U5PWrQzeMtsHf8QsWQ2cZg3c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oldenburg",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/oldenburg/v4/dqA_M_uoCVXZbCO-oKBTnQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oleo Script",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/oleoscript/v5/hudNQFKFl98JdNnlo363fne1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/oleoscript/v5/21stZcmPyzbQVXtmGegyqKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oleo Script Swash Caps",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/oleoscriptswashcaps/v4/HMO3ftxA9AU5floml9c755reFYaXZ4zuJXJ8fr8OO1g.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/oleoscriptswashcaps/v4/vdWhGqsBUAP-FF3NOYTe4iMF4kXAPemmyaDpMXQ31P0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Open Sans",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "600",
    "600italic",
    "700",
    "700italic",
    "800",
    "800italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "greek-ext",
    "greek",
    "latin-ext",
    "vietnamese",
    "cyrillic",
    "latin"
   ],
   "version": "v13",
   "lastModified": "2015-05-18",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTS3USBnSvpkopQaUR-2r7iU.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSi3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzC3USBnSvpkopQaUR-2r7iU.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/opensans/v13/EInbV5DfGHOiMmvb1Xr-hi3USBnSvpkopQaUR-2r7iU.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxi9-WlPSxbfiI49GsXo3q0g.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/opensans/v13/IgZJs4-7SA1XX_edsoXWog.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/opensans/v13/O4NhV7_qs9r9seTo7fnsVKCWcynf_cDxXwCLxiixG1c.ttf",
    "600italic": "'.cs_server_protocol().'fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxpZ7xm-Bj30Bj2KNdXDzSZg.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxne1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "800italic": "'.cs_server_protocol().'fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxg89PwPrYLaRFJ-HNCU9NbA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Open Sans Condensed",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "700"
   ],
   "subsets": [
    "cyrillic-ext",
    "greek-ext",
    "greek",
    "latin-ext",
    "vietnamese",
    "cyrillic",
    "latin"
   ],
   "version": "v10",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/opensanscondensed/v10/gk5FxslNkTTHtojXrkp-xEMwSSh38KQVJx4ABtsZTnA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/opensanscondensed/v10/gk5FxslNkTTHtojXrkp-xBEM87DM3yorPOrvA-vB930.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/opensanscondensed/v10/jIXlqT1WKafUSwj6s9AzV4_LkTZ_uhAwfmGJ084hlvM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oranienbaum",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-08-12",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/oranienbaum/v5/M98jYwCSn0PaFhXXgviCoaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Orbitron",
   "category": "sans-serif",
   "variants": [
    "regular",
    "500",
    "700",
    "900"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-08-14",
   "files": {
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/orbitron/v7/p-y_ffzMdo5JN_7ia0vYEqCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/orbitron/v7/PS9_6SLkY1Y6OgPO3APr6qCWcynf_cDxXwCLxiixG1c.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/orbitron/v7/2I3-8i9hT294TE_pyjy9SaCWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/orbitron/v7/DY8swouAZjR3RaUPRf0HDQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oregano",
   "category": "display",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/oregano/v4/UiLhqNixVv2EpjRoBG6axA.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/oregano/v4/_iwqGEht6XsAuEaCbYG64Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Orienta",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/orienta/v4/_NKSk93mMs0xsqtfjCsB3Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Original Surfer",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/originalsurfer/v5/gdHw6HpSIN4D6Xt7pi1-qIkEz33TDwAZczo_6fY7eg0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oswald",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v10",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/oswald/v10/y3tZpCdiRD4oNRRYFcAR5Q.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/oswald/v10/7wj8ldV_5Ti37rHa0m1DDw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/oswald/v10/uLEd2g2vJglLPfsBF91DCg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Over the Rainbow",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/overtherainbow/v7/6gp-gkpI2kie2dHQQLM2jQBdxkZd83xOSx-PAQ2QmiI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Overlock",
   "category": "display",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/overlock/v5/Fexr8SqXM8Bm_gEVUA7AKaCWcynf_cDxXwCLxiixG1c.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/overlock/v5/YPJCVTT8ZbG3899l_-KIGqCWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/overlock/v5/Z8oYsGi88-E1cUB8YBFMAg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/overlock/v5/rq6EacukHROOBrFrK_zF6_esZW2xOQ-xsNqO47m55DA.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/overlock/v5/wFWnYgeXKYBks6gEUwYnfAJKKGfqHaYFsRG-T3ceEVo.ttf",
    "900italic": "'.cs_server_protocol().'fonts.gstatic.com/s/overlock/v5/iOZhxT2zlg7W5ij_lb-oDp0EAVxt0G0biEntp43Qt6E.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Overlock SC",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/overlocksc/v5/8D7HYDsvS_g1GhBnlHzgzaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ovo",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ovo/v7/mFg27dimu3s9t09qjCwB1g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oxygen",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-08-26",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/oxygen/v5/lZ31r0bR1Bzt_DfGZu1S8A.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/oxygen/v5/yLqkmDwuNtt5pSqsJmhyrg.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/oxygen/v5/uhoyAE7XlQL22abzQieHjw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Oxygen Mono",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/oxygenmono/v4/DigTu7k4b7OmM8ubt1Qza6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Mono",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ptmono/v4/QUbM8H9yJK5NhpQ0REO6Wg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Sans",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/ptsans/v8/F51BEgHuR0tYHxF0bD4vwvesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ptsans/v8/UFoEz2uiuMypUGZL1NKoeg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ptsans/v8/yls9EYWOd496wiu7qzfgNg.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ptsans/v8/lILlYDvubYemzYzN7GbLkC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Sans Caption",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/ptsanscaption/v9/Q-gJrFokeE7JydPpxASt25tc0eyfI4QDEsobEEpk_hA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ptsanscaption/v9/OXYTDOzBcXU8MTNBvBHeSW8by34Z3mUMtM-o4y-SHCY.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Sans Narrow",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/ptsansnarrow/v7/Q_pTky3Sc3ubRibGToTAYsLtdzs3iyjn_YuT226ZsLU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ptsansnarrow/v7/UyYrYy3ltEffJV9QueSi4ZTvAuddT2xDMbdz0mdLyZY.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Serif",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/ptserif/v8/kyZw18tqQ5if-_wpmxxOeKCWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ptserif/v8/sAo427rn3-QL9sWCbMZXhA.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ptserif/v8/9khWhKzhpkH0OkNnBKS3n_esZW2xOQ-xsNqO47m55DA.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ptserif/v8/Foydq9xJp--nfYIx2TBz9QJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "PT Serif Caption",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ptserifcaption/v8/7xkFOeTxxO1GMC1suOUYWVsRioCqs5fohhaYel24W3k.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ptserifcaption/v8/0kfPsmrmTSgiec7u_Wa0DB1mqvzPHelJwRcF_s_EUM0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pacifico",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/pacifico/v7/GIrpeRY1r5CzbfL8r182lw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Palanquin",
   "category": "sans-serif",
   "variants": [
    "100",
    "200",
    "300",
    "regular",
    "500",
    "600",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-04-22",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/palanquin/v1/Hu0eGDVGK_g4saUFu6AK3KCWcynf_cDxXwCLxiixG1c.ttf",
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/palanquin/v1/pqXYXD7-VI5ezTjeqQOcyC3USBnSvpkopQaUR-2r7iU.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/palanquin/v1/c0-J5OCAagpFCKkKraz-Ey3USBnSvpkopQaUR-2r7iU.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/palanquin/v1/wLvvkEcZMKy95afLWh2EfC3USBnSvpkopQaUR-2r7iU.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/palanquin/v1/405UIAv95_yZkCECrH6y-i3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/palanquin/v1/-UtkePo3NFvxEN3rGCtTvi3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/palanquin/v1/xCwBUoAEV0kzCDwerAZ0Aw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Palanquin Dark",
   "category": "sans-serif",
   "variants": [
    "regular",
    "500",
    "600",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-04-22",
   "files": {
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/palanquindark/v1/iXyBGf5UbFUu6BG8hOY-maMZTo-EwKMRQt3RWHocLi0.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/palanquindark/v1/iXyBGf5UbFUu6BG8hOY-mVNxaunw8i4Gywrk2SigRnk.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/palanquindark/v1/iXyBGf5UbFUu6BG8hOY-mWToair6W0TEE44XrlfKbiM.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/palanquindark/v1/PamTqrrgbBh_M3702w39rOfChn3JSg5yz_Q_xmrKQN0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Paprika",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/paprika/v4/b-VpyoRSieBdB5BPJVF8HQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Parisienne",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/parisienne/v4/TW74B5QISJNx9moxGlmJfvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Passero One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/passeroone/v8/Yc-7nH5deCCv9Ed0MMnAQqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Passion One",
   "category": "display",
   "variants": [
    "regular",
    "700",
    "900"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/passionone/v6/feOcYDy2R-f3Ysy72PYJ2ne1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/passionone/v6/feOcYDy2R-f3Ysy72PYJ2ienaqEuufTBk9XMKnKmgDA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/passionone/v6/1UIK1tg3bKJ4J3o35M4heqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pathway Gothic One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/pathwaygothicone/v4/Lqv9ztoTUV8Q0FmQZzPqaA6A6xIYD7vYcYDop1i-K-c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Patrick Hand",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "vietnamese",
    "latin"
   ],
   "version": "v10",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/patrickhand/v10/9BG3JJgt_HlF3NpEUehL0C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Patrick Hand SC",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "vietnamese",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/patrickhandsc/v4/OYFWCgfCR-7uHIovjUZXsbAgSRh1LpJXlLfl8IbsmHg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Patua One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/patuaone/v6/njZwotTYjswR4qdhsW-kJw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Paytone One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/paytoneone/v8/3WCxC7JAJjQHQVoIE0ZwvqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Peddana",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "telugu",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/peddana/v4/zaSZuj_GhmC8AOTugOROnA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Peralta",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/peralta/v4/cTJX5KEuc0GKRU9NXSm-8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Permanent Marker",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/permanentmarker/v5/9vYsg5VgPHKK8SXYbf3sMol14xj5tdg9OHF8w4E7StQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Petit Formal Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/petitformalscript/v4/OEZwr2-ovBsq2n3ACCKoEvVPl2Gjtxj0D6F7QLy1VQc.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Petrona",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/petrona/v5/nnQwxlP6dhrGovYEFtemTg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Philosopher",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "cyrillic",
    "latin"

   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/philosopher/v7/napvkewXG9Gqby5vwGHICHe1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/philosopher/v7/oZLTrB9jmJsyV0u_T0TKEaCWcynf_cDxXwCLxiixG1c.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/philosopher/v7/_9Hnc_gz9k7Qq6uKaeHKmUeOrDcLawS7-ssYqLr2Xp4.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/philosopher/v7/PuKlryTcvTj7-qZWfLCFIM_zJjSACmk0BRPxQqhnNLU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Piedra",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/piedra/v5/owf-AvEEyAj9LJ2tVZ_3Mw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pinyon Script",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/pinyonscript/v6/TzghnhfCn7TuE73f-CBQ0CeUSrabuTpOsMEiRLtKwk0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pirata One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/pirataone/v4/WnbD86B4vB2ckYcL7oxuhvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Plaster",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/plaster/v7/O4QG9Z5116CXyfJdR9zxLw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Play",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "cyrillic-ext",
    "greek",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/play/v6/crPhg6I0alLI-MpB3vW-zw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/play/v6/GWvfObW8LhtsOX333MCpBg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Playball",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/playball/v6/3hOFiQm_EUzycTpcN9uz4w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Playfair Display",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v10",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplay/v10/UC3ZEjagJi85gF9qFaBgICsv6SrURqJprbhH_C1Mw8w.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplay/v10/UC3ZEjagJi85gF9qFaBgIKqwMe2wjvZrAR44M0BJZ48.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplay/v10/2NBgzUtEeyB-Xtpr9bm1CV6uyC_qD11hrFQ6EGgTJWI.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplay/v10/9MkijrV-dEJ0-_NWV7E6NzMsbnvDNEBX25F5HWk9AhI.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplay/v10/n7G4PqJvFP2Kubl0VBLDECsYW3XoOVcYyYdp9NzzS9E.ttf",
    "900italic": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplay/v10/n7G4PqJvFP2Kubl0VBLDEC0JfJ4xmm7j1kL6D7mPxrA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Playfair Display SC",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-08-14",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplaysc/v5/5ggqGkvWJU_TtW2W8cEubA-Amcyomnuy4WsCiPxGHjw.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplaysc/v5/5ggqGkvWJU_TtW2W8cEubKXL3C32k275YmX_AcBPZ7w.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplaysc/v5/G0-tvBxd4eQRdwFKB8dRkcpjYTDWIvcAwAccqeW9uNM.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplaysc/v5/myuYiFR-4NTrUT4w6TKls2klJsJYggW8rlNoTOTuau0.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplaysc/v5/6X0OQrQhEEnPo56RalREX4krgPi80XvBcbTwmz-rgmU.ttf",
    "900italic": "'.cs_server_protocol().'fonts.gstatic.com/s/playfairdisplaysc/v5/6X0OQrQhEEnPo56RalREX8Zag2q3ssKz8uH1RU4a9gs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Podkova",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/podkova/v8/SqW4aa8m_KVrOgYSydQ33vesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/podkova/v8/eylljyGVfB8ZUQjYY3WZRQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Poiret One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/poiretone/v4/dWcYed048E5gHGDIt8i1CPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Poller One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/pollerone/v6/dkctmDlTPcZ6boC8662RA_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Poly",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/poly/v7/bcMAuiacS2qkd54BcwW6_Q.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/poly/v7/Zkx-eIlZSjKUrPGYhV5PeA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pompiere",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/pompiere/v6/o_va2p9CD5JfmFohAkGZIA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pontano Sans",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/pontanosans/v4/gTHiwyxi6S7iiHpqAoiE3C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Poppins",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "500",
    "600",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-06-03",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/poppins/v1/VIeViZ2fPtYBt3B2fQZplvesZW2xOQ-xsNqO47m55DA.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/poppins/v1/4WGKlFyjcmCFVl8pRsgZ9vesZW2xOQ-xsNqO47m55DA.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/poppins/v1/-zOABrCWORC3lyDh-ajNnPesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/poppins/v1/8JitanEsk5aDh7mDYs-fYfesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/poppins/v1/hlvAxH6aIdOjWlLzgm0jqg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Port Lligat Sans",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/portlligatsans/v5/CUEdhRk7oC7up0p6t0g4P6mASEpx5X0ZpsuJOuvfOGA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Port Lligat Slab",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/portlligatslab/v5/CUEdhRk7oC7up0p6t0g4PxLSPACXvawUYCBEnHsOe30.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Pragati Narrow",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v2",
   "lastModified": "2015-06-10",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/pragatinarrow/v2/DnSI1zRkc0CY-hI5SC3q3MLtdzs3iyjn_YuT226ZsLU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/pragatinarrow/v2/HzG2TfC862qPNsZsV_djPpTvAuddT2xDMbdz0mdLyZY.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Prata",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/prata/v6/3gmx8r842loRRm9iQkCDGg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Preahvihear",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/preahvihear/v8/82tDI-xTc53CxxOzEG4hDaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Press Start 2P",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "greek",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/pressstart2p/v4/8Lg6LX8-ntOHUQnvQ0E7o1jfl3W46Sz5gOkEVhcFWF4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Princess Sofia",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/princesssofia/v4/8g5l8r9BM0t1QsXLTajDe-wjmA7ie-lFcByzHGRhCIg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Prociono",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/prociono/v6/43ZYDHWogdFeNBWTl6ksmw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Prosto One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-08-12",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/prostoone/v5/bsqnAElAqk9kX7eABTRFJPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Puritan",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-08-12",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/puritan/v8/pJS2SdwI0SCiVnO0iQSFT_esZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/puritan/v8/wv_RtgVBSCn-or2MC0n4Kg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/puritan/v8/BqZX8Tp200LeMv1KlzXgLQ.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/puritan/v8/rFG3XkMJL75nUNZwCEIJqC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Purple Purse",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/purplepurse/v5/Q5heFUrdmei9axbMITxxxS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quando",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/quando/v4/03nDiEZuO2-h3xvtG6UmHg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quantico",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/quantico/v5/OVZZzjcZ3Hkq2ojVcUtDjaCWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/quantico/v5/pwSnP8Xpaix2rIz99HrSlQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/quantico/v5/KQhDd2OsZi6HiITUeFQ2U_esZW2xOQ-xsNqO47m55DA.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/quantico/v5/HeCYRcZbdRso3ZUu01ELbQJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quattrocento",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/quattrocento/v7/Uvi-cRwyvqFpl9j3oT2mqkD2ttfZwueP-QU272T9-k4.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/quattrocento/v7/WZDISdyil4HsmirlOdBRFC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quattrocento Sans",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/quattrocentosans/v8/tXSgPxDl7Lk8Zr_5qX8FIbqxG25nQNOioCZSK4sU-CA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/quattrocentosans/v8/efd6FGWWGX5Z3ztwLBrG9eAj_ty82iuwwDTNEYXGiyQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/quattrocentosans/v8/8PXYbvM__bjl0rBnKiByg532VBCoA_HLsn85tSWZmdo.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/quattrocentosans/v8/8N1PdXpbG6RtFvTjl-5E7buqAJxizi8Dk_SK5et7kMg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Questrial",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/questrial/v6/MoHHaw_WwNs_hd9ob1zTVw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quicksand",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/quicksand/v5/qhfoJiLu10kFjChCCTvGlC3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/quicksand/v5/32nyIRHyCu6iqEka_hbKsi3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/quicksand/v5/Ngv3fIJjKB7sD-bTUGIFCA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Quintessential",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/quintessential/v4/mmk6ioesnTrEky_Zb92E5s02lXbtMOtZWfuxKeMZO8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Qwigley",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/qwigley/v6/aDqxws-KubFID85TZHFouw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Racing Sans One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/racingsansone/v4/1r3DpWaCiT7y3PD4KgkNyDjVlsJB_M_Q_LtZxsoxvlw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Radley",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/radley/v9/FgE9di09a-mXGzAIyI6Q9Q.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/radley/v9/Z_JcACuPAOO2f9kzQcGRug.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rajdhani",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "500",
    "600",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/rajdhani/v5/9pItuEhQZVGdq8spnHTku6CWcynf_cDxXwCLxiixG1c.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/rajdhani/v5/nd_5ZpVwm710HcLual0fBqCWcynf_cDxXwCLxiixG1c.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/rajdhani/v5/5fnmZahByDeTtgxIiqbJSaCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/rajdhani/v5/UBK6d2Hg7X7wYLlF92aXW6CWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rajdhani/v5/Wfy5zp4PGFAFS7-Wetehzw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Raleway",
   "category": "sans-serif",
   "variants": [
    "100",
    "200",
    "300",
    "regular",
    "500",
    "600",
    "700",
    "800",
    "900"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/raleway/v9/UDfD6oxBaBnmFJwQ7XAFNw.ttf",
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/raleway/v9/LAQwev4hdCtYkOYX4Oc7nPesZW2xOQ-xsNqO47m55DA.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/raleway/v9/2VvSZU2kb4DZwFfRM4fLQPesZW2xOQ-xsNqO47m55DA.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/raleway/v9/348gn6PEmbLDWlHbbV15d_esZW2xOQ-xsNqO47m55DA.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/raleway/v9/M7no6oPkwKYJkedjB1wqEvesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/raleway/v9/VGEV9-DrblisWOWLbK-1XPesZW2xOQ-xsNqO47m55DA.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/raleway/v9/mMh0JrsYMXcLO69jgJwpUvesZW2xOQ-xsNqO47m55DA.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/raleway/v9/ajQQGcDBLcyLpaUfD76UuPesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/raleway/v9/_dCzxpXzIS3sL-gdJWAP8A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Raleway Dots",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ralewaydots/v4/lhLgmWCRcyz-QXo8LCzTfC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ramabhadra",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "telugu",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-07",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ramabhadra/v5/JyhxLXRVQChLDGADS_c5MPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ramaraja",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "telugu",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ramaraja/v1/XIqzxFapVczstBedHdQTiw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rambla",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/rambla/v4/C5VZH8BxQKmnBuoC00UPpw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rambla/v4/YaTmpvm5gFg_ShJKTQmdzg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/rambla/v4/mhUgsKmp0qw3uATdDDAuwA.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/rambla/v4/ziMzUZya6QahrKONSI1TzqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rammetto One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rammettoone/v5/mh0uQ1tV8QgSx9v_KyEYPC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ranchers",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ranchers/v4/9ya8CZYhqT66VERfjQ7eLA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rancho",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rancho/v6/ekp3-4QykC4--6KaslRgHA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ranga",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-04-03",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/ranga/v1/h8G_gEUH7vHKH-NkjAs34A.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ranga/v1/xpW6zFTNzY1JykoBIqE1Zg.ttf"
   }
  },';
