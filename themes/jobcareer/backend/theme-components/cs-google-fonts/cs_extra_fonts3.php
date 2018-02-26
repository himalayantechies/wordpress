<?php
// Get fonts files
$cs_fonts_vars = array('fonts');
$cs_fonts_vars = CS_JOBCAREER_GLOBALS()->globalizing($cs_fonts_vars);
extract($cs_fonts_vars);

 $fonts .= '{
   "kind": "webfonts#webfont",
   "family": "Rationale",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rationale/v7/7M2eN-di0NGLQse7HzJRfg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ravi Prakash",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "telugu",
    "latin"
   ],
   "version": "v3",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/raviprakash/v3/8EzbM7Rymjk25jWeHxbO6C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Redressed",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/redressed/v6/3aZ5sTBppH3oSm5SabegtA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Reenie Beanie",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-08-14",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/reeniebeanie/v7/ljpKc6CdXusL1cnGUSamX4jjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Revalia",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/revalia/v4/1TKw66fF5_poiL0Ktgo4_A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rhodium Libre",
   "category": "serif",
   "variants": [
    "regular"
   ],

   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-06-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rhodiumlibre/v1/Vxr7A4-xE2zsBDDI8BcseIjjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ribeye",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ribeye/v5/e5w3VE8HnWBln4Ll6lUj3Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ribeye Marrow",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ribeyemarrow/v6/q7cBSA-4ErAXBCDFPrhlY0cTNmV93fYG7UKgsLQNQWs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Righteous",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/righteous/v5/0nRRWM_gCGCt2S-BCfN8WQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Risque",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/risque/v4/92RnElGnl8yHP97-KV3Fyg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Roboto",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
    "700",
    "700italic",
    "900",
    "900italic"
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
   "version": "v15",
   "lastModified": "2015-04-06",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/7MygqTe2zs9YkP0adA9QQQ.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/dtpHsbgPEm2lVWciJZ0P-A.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/Uxzkqj-MIMWle-XP2pDNAA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/bdHGHleUa-ndQCOrdpfxfw.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/H1vB34nOKWXqzKotq25pcg.ttf",
    "100italic": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/T1xnudodhcgwXCmZQ490TPesZW2xOQ-xsNqO47m55DA.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/iE8HhaRzdhPxC93dOdA056CWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/W5F8_SL0XFawnjxHGsZjJA.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/hcKoSgxdnKlbH5dlTwKbow.ttf",
    "500italic": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/daIfzbEw-lbjMyv4rMUUTqCWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/owYYXKukxFDFjr0ZO8NXh6CWcynf_cDxXwCLxiixG1c.ttf",
    "900italic": "'.cs_server_protocol().'fonts.gstatic.com/s/roboto/v15/b9PWBSMHrT2zM5FgUdtu0aCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Roboto Condensed",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
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
   "version": "v13",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/robotocondensed/v13/b9QBgL0iMZfDSpmcXcE8nJRhFVcex_hajThhFkHyhYk.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/robotocondensed/v13/b9QBgL0iMZfDSpmcXcE8nPOYkGiSOYDq_T7HbIOV1hA.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/robotocondensed/v13/mg0cGfGRUERshzBlvqxeAPYa9bgCHecWXGgisnodcS0.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/robotocondensed/v13/Zd2E9abXLFGSr9G3YK2MsKDbm6fPDOZJsR8PmdG62gY.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/robotocondensed/v13/BP5K8ZAJv9qEbmuFp8RpJY_eiqgTfYGaH0bJiUDZ5GA.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/robotocondensed/v13/mg0cGfGRUERshzBlvqxeAE2zk2RGRC3SlyyLLQfjS_8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Roboto Mono",
   "category": "monospace",
   "variants": [
    "100",
    "100italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
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
   "lastModified": "2015-05-28",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/robotomono/v4/aOIeRp72J9_Hp_8KwQ9M-YAWxXGWZ3yJw6KhWS7MxOk.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/robotomono/v4/N4duVc9C58uwPiY8_59Fzy9-WlPSxbfiI49GsXo3q0g.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/robotomono/v4/N4duVc9C58uwPiY8_59Fz8CNfqCYlB_eIx7H1TVXe60.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/robotomono/v4/N4duVc9C58uwPiY8_59Fz3e1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "100italic": "'.cs_server_protocol().'fonts.gstatic.com/s/robotomono/v4/rqQ1zSE-ZGCKVZgew-A9dgyDtfpXZi-8rXUZYR4dumU.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/robotomono/v4/1OsMuiiO6FCF2x67vzDKA2o9eWDfYYxG3A176Zl7aIg.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/robotomono/v4/eJ4cxQe85Lo39t-LVoKa26CWcynf_cDxXwCLxiixG1c.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/robotomono/v4/mE0EPT_93c7f86_WQexR3EeOrDcLawS7-ssYqLr2Xp4.ttf",
    "500italic": "'.cs_server_protocol().'fonts.gstatic.com/s/robotomono/v4/1OsMuiiO6FCF2x67vzDKA2nWRcJAYo5PSCx8UfGMHCI.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/robotomono/v4/1OsMuiiO6FCF2x67vzDKA8_zJjSACmk0BRPxQqhnNLU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Roboto Slab",
   "category": "serif",
   "variants": [
    "100",
    "300",
    "regular",
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
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/robotoslab/v6/MEz38VLIFL-t46JUtkIEgIAWxXGWZ3yJw6KhWS7MxOk.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJS9-WlPSxbfiI49GsXo3q0g.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJXe1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/robotoslab/v6/3__ulTNA7unv0UtplybPiqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rochester",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rochester/v6/bnj8tmQBiOkdji_G_yvypg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rock Salt",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rocksalt/v6/Zy7JF9h9WbhD9V3SFMQ1UQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rokkitt",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-08-26",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/rokkitt/v9/gxlo-sr3rPmvgSixYog_ofesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rokkitt/v9/GMA7Z_ToF8uSvpZAgnp_VQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Romanesco",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/romanesco/v5/2udIjUrpK_CPzYSxRVzD4Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ropa Sans",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ropasans/v5/Gba7ZzVBuhg6nX_AoSwlkQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ropasans/v5/V1zbhZQscNrh63dy5Jk2nqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rosario",
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
   "version": "v10",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/rosario/v10/nrS6PJvDWN42RP4TFWccd_esZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rosario/v10/bL-cEh8dXtDupB2WccA2LA.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/rosario/v10/pkflNy18HEuVVx4EOjeb_Q.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/rosario/v10/EOgFX2Va5VGrkhn_eDpIRS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rosarivo",
   "category": "serif",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rosarivo/v4/EmPiINK0qyqc7KSsNjJamA.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/rosarivo/v4/u3VuWsWQlX1pDqsbz4paNPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rouge Script",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rougescript/v5/AgXDSqZJmy12qS0ixjs6Vy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rozha One",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v2",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rozhaone/v2/PyrMHQ6lucEIxwKmhqsX8A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rubik",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
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
   "version": "v1",
   "lastModified": "2015-07-22",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/rubik/v1/o1vXYO8YwDpErHEAPAxpOg.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/rubik/v1/D4HihERG27s-BJrQ4dvkbw.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/rubik/v1/m1GGHcpLe6Mb0_sAyjXE4g.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/rubik/v1/mOHfPRl5uP4vw7-5-dbnng.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/rubik/v1/NyXDvUhvZLSWiVfGa5KM-vesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rubik/v1/4sMyW_teKWHB3K8Hm-Il6A.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/rubik/v1/elD65ddI0qvNcCh42b1Iqg.ttf",
    "500italic": "'.cs_server_protocol().'fonts.gstatic.com/s/rubik/v1/0hcxMdoMbXtHiEM1ebdN6PesZW2xOQ-xsNqO47m55DA.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/rubik/v1/R4g_rs714cUXVZcdnRdHw_esZW2xOQ-xsNqO47m55DA.ttf",
    "900italic": "'.cs_server_protocol().'fonts.gstatic.com/s/rubik/v1/HH1b7kBbwInqlw8OQxRE5vesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rubik Mono One",
   "category": "sans-serif",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rubikmonoone/v5/e_cupPtD4BrZzotubJD7UbAREgn5xbW23GEXXnhMQ5Y.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rubik One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-07-22",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rubikone/v4/Zs6TtctNRSIR8T5PO018rQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ruda",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700",
    "900"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/ruda/v7/JABOu1SYOHcGXVejUq4w6g.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/ruda/v7/Uzusv-enCjoIrznlJJaBRw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ruda/v7/jPEIPB7DM2DNK_uBGv2HGw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rufina",
   "category": "serif",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/rufina/v4/D0RUjXFr55y4MVZY2Ww_RA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rufina/v4/s9IFr_fIemiohfZS-ZRDbQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ruge Boogie",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rugeboogie/v7/U-TTmltL8aENLVIqYbI5QaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ruluko",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ruluko/v4/lv4cMwJtrx_dzmlK5SDc1g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rum Raisin",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rumraisin/v4/kDiL-ntDOEq26B7kYM7cx_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ruslan Display",
   "category": "display",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ruslandisplay/v7/SREdhlyLNUfU1VssRBfs3rgH88D3l9N4auRNHrNS708.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Russo One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-08-14",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/russoone/v5/zfwxZ--UhUc7FVfgT21PRQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ruthie",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ruthie/v6/vJ2LorukHSbWYoEs5juivg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Rye",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/rye/v4/VUrJlpPpSZxspl3w_yNOrQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sacramento",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sacramento/v4/_kv-qycSHMNdhjiv0Kj7BvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sahitya",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-06-17",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/sahitya/v1/Zm5hNvMwUyN3tC4GMkH1l_esZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sahitya/v1/wQWULcDbZqljdTfjOUtDvw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sail",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sail/v6/iuEoG6kt-bePGvtdpL0GUQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Salsa",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/salsa/v6/BnpUCBmYdvggScEPs5JbpA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sanchez",
   "category": "serif",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sanchez/v4/BEL8ao-E2LJ5eHPLB2UAiw.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/sanchez/v4/iSrhkWLexUZzDeNxNEHtzA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sancreek",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sancreek/v7/8ZacBMraWMvHly4IJI3esw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sansita One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sansitaone/v6/xWqf68oB50JXqGIRR0h2hqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sarala",
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
   "version": "v1",
   "lastModified": "2015-06-17",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/sarala/v1/hpc9cz8KYsazwq2In_oJYw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sarala/v1/ohip9lixCHoBab7hTtgLnw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sarina",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sarina/v5/XYtRfaSknHIU3NHdfTdXoQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sarpanch",
   "category": "sans-serif",
   "variants": [
    "regular",
    "500",
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
   "lastModified": "2015-04-03",
   "files": {
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/sarpanch/v1/Ov7BxSrFSZYrfuJxL1LzQaCWcynf_cDxXwCLxiixG1c.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/sarpanch/v1/WTnP2wnc0qSbUaaDG-2OQ6CWcynf_cDxXwCLxiixG1c.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/sarpanch/v1/57kYsSpovYmFaEt2hsZhv6CWcynf_cDxXwCLxiixG1c.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/sarpanch/v1/OKyqPLjdnuVghR-1TV6RzaCWcynf_cDxXwCLxiixG1c.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/sarpanch/v1/JhYc2cr6kqWTo_P0vfvJR6CWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sarpanch/v1/YMBZdT27b6O5a1DADbAGSg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Satisfy",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/satisfy/v6/PRlyepkd-JCGHiN8e9WV2w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Scada",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/scada/v4/t6XNWdMdVWUz93EuRVmifQ.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/scada/v4/iZNC3ZEYwe3je6H-28d5Ug.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/scada/v4/PCGyLT1qNawkOUQ3uHFhBw.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/scada/v4/kLrBIf7V4mDMwcd_Yw7-D_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Scheherazade",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "arabic",
    "latin"
   ],
   "version": "v11",
   "lastModified": "2015-08-26",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/scheherazade/v11/C1wtT46acJkQxc6mPHwvHED2ttfZwueP-QU272T9-k4.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/scheherazade/v11/AuKlqGWzUC-8XqMOmsqXiy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Schoolbell",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/schoolbell/v6/95-3djEuubb3cJx-6E7j4vesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Seaweed Script",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/seaweedscript/v4/eorWAPpOvvWrPw5IHwE60BnpV0hQCek3EmWnCPrvGRM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sevillana",
   "category": "display",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sevillana/v4/6m1Nh35oP7YEt00U80Smiw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Seymour One",
   "category": "sans-serif",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/seymourone/v4/HrdG2AEG_870Xb7xBVv6C6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Shadows Into Light",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/shadowsintolight/v6/clhLqOv7MXn459PTh0gXYAW_5bEze-iLRNvGrRpJsfM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Shadows Into Light Two",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/shadowsintolighttwo/v4/gDxHeefcXIo-lOuZFCn2xVQrZk-Pga5KeEE_oZjkQjQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Shanti",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-08-12",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/shanti/v8/lc4nG_JG6Q-2FQSOMMhb_w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Share",
   "category": "display",
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
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/share/v5/XrU8e7a1YKurguyY2azk1Q.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/share/v5/1ytD7zSb_-g9I2GG67vmVw.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/share/v5/a9YGdQWFRlNJ0zClJVaY3Q.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/share/v5/A992-bLVYwAflKu6iaznufesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Share Tech",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sharetech/v4/Dq3DuZ5_0SW3oEfAWFpen_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Share Tech Mono",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-07-22",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sharetechmono/v5/RQxK-3RA0Lnf3gnnnNrAscwD6PD0c3_abh9zHKQtbGU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Shojumaru",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/shojumaru/v4/WP8cxonzQQVAoI3RJQ2wug.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Short Stack",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/shortstack/v6/v4dXPI0Rm8XN9gk4SDdqlqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Siemreap",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/siemreap/v9/JSK-mOIsXwxo-zE9XDDl_g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sigmar One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sigmarone/v6/oh_5NxD5JBZksdo2EntKefesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Signika",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "600",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/signika/v6/0wDPonOzsYeEo-1KO78w4fesZW2xOQ-xsNqO47m55DA.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/signika/v6/lQMOF6NUN2ooR7WvB7tADvesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/signika/v6/lEcnfPBICWJPv5BbVNnFJPesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/signika/v6/WvDswbww0oAtvBg2l1L-9w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Signika Negative",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "600",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/signikanegative/v5/q5TOjIw4CenPw6C-TW06FjYFXpUPtCmIEFDvjUnLLaI.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/signikanegative/v5/q5TOjIw4CenPw6C-TW06FrKLaDJM01OezSVA2R_O3qI.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/signikanegative/v5/q5TOjIw4CenPw6C-TW06FpYzPxtVvobH1w3hEppR8WI.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/signikanegative/v5/Z-Q1hzbY8uAo3TpTyPFMXVM1lnCWMnren5_v6047e5A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Simonetta",
   "category": "display",
   "variants": [
    "regular",
    "italic",
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
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/simonetta/v5/22EwvvJ2r1VwVCxit5LcVi3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/simonetta/v5/fN8puNuahBo4EYMQgp12Yg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/simonetta/v5/ynxQ3FqfF_Nziwy3T9ZwL6CWcynf_cDxXwCLxiixG1c.ttf",
    "900italic": "'.cs_server_protocol().'fonts.gstatic.com/s/simonetta/v5/WUXOpCgBZaRPrWtMCpeKoienaqEuufTBk9XMKnKmgDA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sintony",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/sintony/v4/zVXQB1wqJn6PE4dWXoYpvPesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sintony/v4/IDhCijoIMev2L6Lg5QsduQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sirin Stencil",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sirinstencil/v5/pRpLdo0SawzO7MoBpvowsImg74kgS1F7KeR8rWhYwkU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Six Caps",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sixcaps/v7/_XeDnO0HOV8Er9u97If1tQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Skranji",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/skranji/v4/Lcrhg-fviVkxiEgoadsI1vesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/skranji/v4/jnOLPS0iZmDL7dfWnW3nIw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Slabo 13px",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v3",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/slabo13px/v3/jPGWFTjRXfCSzy0qd1nqdvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Slabo 27px",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v3",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/slabo27px/v3/gC0o8B9eU21EafNkXlRAfPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Slackey",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/slackey/v6/evRIMNhGVCRJvCPv4kteeA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Smokum",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/smokum/v6/8YP4BuAcy97X8WfdKfxVRw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Smythe",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/smythe/v7/yACD1gy_MpbB9Ft42fUvYw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sniglet",
   "category": "display",
   "variants": [
    "regular",
    "800"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/sniglet/v7/NLF91nBmcEfkBgcEWbHFa_esZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sniglet/v7/XWhyQLHH4SpCVsHRPRgu9w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Snippet",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/snippet/v6/eUcYMLq2GtHZovLlQH_9kA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Snowburst One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/snowburstone/v4/zSQzKOPukXRux2oTqfYJjIjjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sofadi One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sofadione/v4/nirf4G12IcJ6KI8Eoj119fesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sofia",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sofia/v5/Imnvx0Ag9r6iDBFUY5_RaQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sonsie One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sonsieone/v5/KSP7xT1OSy0q2ob6RQOTWPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sorts Mill Goudy",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sortsmillgoudy/v6/JzRrPKdwEnE8F1TDmDLMUlIL2Qjg-Xlsg_fhGbe2P5U.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/sortsmillgoudy/v6/UUu1lKiy4hRmBWk599VL1TYNkCNSzLyoucKmbTguvr0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Source Code Pro",
   "category": "monospace",
   "variants": [
    "200",
    "300",
    "regular",
    "500",
    "600",
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
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqaXvKVW_haheDNrHjziJZVk.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqVP7R5lD_au4SZC6Ks_vyWs.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqX63uKwMO11Of4rJWV582wg.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqeiMeWyi5E_-XkTgB5psiDg.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqfgXsetDviZcdR5OzC1KPcw.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcecodepro/v6/leqv3v-yTsJNC7nFznSMqRA_awHl7mXRjE_LQVochcU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcecodepro/v6/mrl8jkM18OlOQN8JLgasD9Rl0pGnog23EMYRrBmUzJQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Source Sans Pro",
   "category": "sans-serif",
   "variants": [
    "200",
    "200italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "600",
    "600italic",
    "700",
    "700italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin-ext",
    "vietnamese",
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGKXvKVW_haheDNrHjziJZVk.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGFP7R5lD_au4SZC6Ks_vyWs.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGOiMeWyi5E_-XkTgB5psiDg.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGPgXsetDviZcdR5OzC1KPcw.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/toadOcfmlt9b38dHJxOBGBA_awHl7mXRjE_LQVochcU.ttf",
    "200italic": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/fpTVHK8qsXbIeTHTrnQH6OptKU7UIBg2hLM7eMTU8bI.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/fpTVHK8qsXbIeTHTrnQH6DUpNKoQAsDux-Todp8f29w.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/ODelI1aHBYDBqgeIAH2zlNRl0pGnog23EMYRrBmUzJQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/M2Jd71oPJhLKp0zdtTvoMwRX4TIfMQQEXLu74GftruE.ttf",
    "600italic": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/fpTVHK8qsXbIeTHTrnQH6Pp6lGoTTgjlW0sC4r900Co.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/fpTVHK8qsXbIeTHTrnQH6LVT4locI09aamSzFGQlDMY.ttf",
    "900italic": "'.cs_server_protocol().'fonts.gstatic.com/s/sourcesanspro/v9/fpTVHK8qsXbIeTHTrnQH6A0NcF6HPGWR298uWIdxWv0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Source Serif Pro",
   "category": "serif",
   "variants": [
    "regular",
    "600",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/sourceserifpro/v4/yd5lDMt8Sva2PE17yiLarGi4cQnvCGV11m1KlXh97aQ.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/sourceserifpro/v4/yd5lDMt8Sva2PE17yiLarEkpYHRvxGNSCrR82n_RDNk.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sourceserifpro/v4/CeUM4np2c42DV49nanp55YGL0S0YDpKs5GpLtZIQ0m4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Special Elite",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/specialelite/v6/9-wW4zu3WNoD5Fjka35Jm4jjx0o0jr6fNXxPgYh_a8Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Spicy Rice",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/spicyrice/v5/WGCtz7cLoggXARPi9OGD6_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Spinnaker",
   "category": "sans-serif",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/spinnaker/v8/MQdIXivKITpjROUdiN6Jgg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Spirax",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/spirax/v5/IOKqhk-Ccl7y31yDsePPkw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Squada One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/squadaone/v5/3tzGuaJdD65cZVgfQzN8uvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sree Krushnadevaraya",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sreekrushnadevaraya/v4/CdsXmnHyEqVl1ahzOh5qnzjDZVem5Eb4d0dXjXa0F_Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stalemate",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/stalemate/v4/wQLCnG0qB6mOu2Wit2dt_w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stalinist One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-07-23",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/stalinistone/v7/MQpS-WezM9W4Dd7D3B7I-UT7eZ8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stardos Stencil",
   "category": "display",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/stardosstencil/v6/h4ExtgvoXhPtv9Ieqd-XC81wDCbBgmIo8UyjIhmkeSM.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/stardosstencil/v6/ygEOyTW9a6u4fi4OXEZeTFf2eT4jUldwg_9fgfY_tHc.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stint Ultra Condensed",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/stintultracondensed/v5/8DqLK6-YSClFZt3u3EgOUYelbRYnLTTQA1Z5cVLnsI4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stint Ultra Expanded",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/stintultraexpanded/v4/FeigX-wDDgHMCKuhekhedQ7dxr0N5HY0cZKknTIL6n4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Stoke",
   "category": "serif",
   "variants": [
    "300",
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/stoke/v6/Sell9475FOS8jUqQsfFsUQ.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/stoke/v6/A7qJNoqOm2d6o1E6e0yUFg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Strait",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/strait/v4/m4W73ViNmProETY2ybc-Bg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sue Ellen Francisco",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sueellenfrancisco/v7/TwHX4vSxMUnJUdEz1JIgrhzazJzPVbGl8jnf1tisRz4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sumana",
   "category": "serif",
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
   "lastModified": "2015-05-04",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/sumana/v1/8AcM-KAproitONSBBHj3sQ.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sumana/v1/wgdl__wAK7pzliiWs0Nlog.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sunshiney",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sunshiney/v6/kaWOb4pGbwNijM7CkxK1sQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Supermercado One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/supermercadoone/v6/kMGPVTNFiFEp1U274uBMb4mm5hmSKNFf3C5YoMa-lrM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Sura",
   "category": "serif",
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
   "lastModified": "2015-06-17",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/sura/v1/Z5bXQaFGmoWicN1WlcncxA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/sura/v1/jznKrhTH5NezYxb0-Q5zzA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Suranna",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/suranna/v4/PYmfr6TQeTqZ-r8HnPM-kA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Suravaram",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "telugu",
    "latin"
   ],
   "version": "v3",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/suravaram/v3/G4dPee4pel_w2HqzavW4MA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Suwannaphum",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/suwannaphum/v9/1jIPOyXied3T79GCnSlCN6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Swanky and Moo Moo",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/swankyandmoomoo/v6/orVNZ9kDeE3lWp3U3YELu9DVLKqNC3_XMNHhr8S94FU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Syncopate",
   "category": "sans-serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-08-14",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/syncopate/v7/S5z8ixiOoC4WJ1im6jAlYC3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/syncopate/v7/RQVwO52fAH6MI764EcaYtw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tangerine",
   "category": "handwriting",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-08-14",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/tangerine/v7/UkFsr-RwJB_d2l9fIWsx3i3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/tangerine/v7/DTPeM3IROhnkz7aYG2a9sA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Taprom",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/taprom/v8/-KByU3BaUsyIvQs79qFObg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tauri",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/tauri/v4/XIWeYJDXNqiVNej0zEqtGg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Teko",
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
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/teko/v5/OobFGE9eo24rcBpN6zXDaQ.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/teko/v5/FQ0duU7gWM4cSaImOfAjBA.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/teko/v5/QDx_i8H-TZ1IK1JEVrqwEQ.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/teko/v5/xKfTxe_SWpH4xU75vmvylA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/teko/v5/UtekqODEqZXSN2L-njejpA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Telex",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/telex/v4/24-3xP9ywYeHOcFU3iGk8A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tenali Ramakrishna",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "telugu",
    "latin"
   ],
   "version": "v3",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/tenaliramakrishna/v3/M0nTmDqv2M7AGoGh-c946BZak5pSBHqWX6uyVMiMFoA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tenor Sans",
   "category": "sans-serif",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/tenorsans/v7/dUBulmjNJJInvK5vL7O9yfesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Text Me One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/textmeone/v4/9em_3ckd_P5PQkP4aDyDLqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "The Girl Next Door",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/thegirlnextdoor/v7/cWRA4JVGeEcHGcPl5hmX7kzo0nFFoM60ux_D9BUymX4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tienne",
   "category": "serif",
   "variants": [
    "regular",
    "700",
    "900"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/tienne/v8/JvoCDOlyOSEyYGRwCyfs3g.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/tienne/v8/FBano5T521OWexj2iRYLMw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/tienne/v8/-IIfDl701C0z7-fy2kmGvA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tillana",
   "category": "handwriting",
   "variants": [
    "regular",
    "500",
    "600",
    "700",
    "800"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-06-03",
   "files": {
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/tillana/v1/gqdUngSIcY9tSla5eCZky_esZW2xOQ-xsNqO47m55DA.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/tillana/v1/fqon6-r15hy8M1cyiYfQBvesZW2xOQ-xsNqO47m55DA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/tillana/v1/jGARMTxLrMerzTCpGBpMffesZW2xOQ-xsNqO47m55DA.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/tillana/v1/pmTtNH_Ibktj5Cyc1XrP6vesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/tillana/v1/zN0D-jDPsr1HzU3VRFLY5g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Timmana",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "telugu",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-04-07",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/timmana/v1/T25SicsJUJkc2s2sbBsDnA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tinos",
   "category": "serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "hebrew",
    "cyrillic-ext",
    "greek-ext",
    "greek",
    "latin-ext",
    "vietnamese",
    "cyrillic",
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-04-28",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/tinos/v9/vHXfhX8jZuQruowfon93yQ.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/tinos/v9/EqpUbkVmutfwZ0PjpoGwCg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/tinos/v9/slfyzlasCr9vTsaP4lUh9A.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/tinos/v9/M6kfzvDMM0CdxdraoFpG6vesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Titan One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/titanone/v4/FbvpRvzfV_oipS0De3iAZg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Titillium Web",
   "category": "sans-serif",
   "variants": [
    "200",
    "200italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "600",
    "600italic",
    "700",
    "700italic",
    "900"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wprzOdCrLccoxq42eaxM802O0.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wpr9ZAkYT8DuUZELiKLwMGWAo.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wpr28K9dEd5Ue-HTQrlA7E2xQ.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wpr2-6tpSbB9YhmWtmd1_gi_U.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wpr7L0GmZLri-m-nfoo0Vul4Y.ttf",
    "200italic": "'.cs_server_protocol().'fonts.gstatic.com/s/titilliumweb/v4/RZunN20OBmkvrU7sA4GPPj4N98U-66ThNJvtgddRfBE.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/titilliumweb/v4/RZunN20OBmkvrU7sA4GPPrfzCkqg7ORZlRf2cc4mXu8.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/titilliumweb/v4/7XUFZ5tgS-tD6QamInJTcTyagQBwYgYywpS70xNq8SQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/titilliumweb/v4/r9OmwyQxrgzUAhaLET_KO-ixohbIP6lHkU-1Mgq95cY.ttf",
    "600italic": "'.cs_server_protocol().'fonts.gstatic.com/s/titilliumweb/v4/RZunN20OBmkvrU7sA4GPPgOhzTSndyK8UWja2yJjKLc.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/titilliumweb/v4/RZunN20OBmkvrU7sA4GPPio3LEw-4MM8Ao2j9wPOfpw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Trade Winds",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/tradewinds/v5/sDOCVgAxw6PEUi2xdMsoDaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Trocchi",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/trocchi/v4/uldNPaKrUGVeGCVsmacLwA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Trochut",
   "category": "display",
   "variants": [
    "regular",
    "italic",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/trochut/v4/lWqNOv6ISR8ehNzGLFLnJ_esZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/trochut/v4/6Y65B0x-2JsnYt16OH5omw.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/trochut/v4/pczUwr4ZFvC79TgNO5cZng.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Trykker",
   "category": "serif",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/trykker/v5/YiVrVJpBFN7I1l_CWk6yYQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Tulpen One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/tulpenone/v6/lwcTfVIEVxpZLZlWzR5baPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ubuntu",
   "category": "sans-serif",
   "variants": [
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "cyrillic-ext",
    "greek-ext",
    "greek",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-08-26",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntu/v8/7-wH0j2QCTHKgp7vLh9-sQ.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntu/v8/bMbHEMwSUmkzcK2x_74QbA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntu/v8/B7BtHjNYwAp3HgLNagENOQ.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntu/v8/j-TYDdXcC_eQzhhp386SjaCWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntu/v8/lhhB5ZCwEkBRbHMSnYuKyA.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntu/v8/b9hP8wd30SygxZjGGk4DCQ.ttf",
    "500italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntu/v8/NWdMogIO7U6AtEM4dDdf_aCWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntu/v8/pqisLQoeO9YTDCNnlQ9bf6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ubuntu Condensed",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "greek-ext",
    "greek",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-08-26",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntucondensed/v7/DBCt-NXN57MTAFjitYxdrKDbm6fPDOZJsR8PmdG62gY.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ubuntu Mono",
   "category": "monospace",
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
    "cyrillic",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntumono/v6/ceqTZGKHipo8pJj4molytne1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntumono/v6/EgeuS9OtEmA0y_JRo03MQaCWcynf_cDxXwCLxiixG1c.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntumono/v6/KAKuHXAHZOeECOWAHsRKA0eOrDcLawS7-ssYqLr2Xp4.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/ubuntumono/v6/n_d8tv_JOIiYyMXR4eaV9c_zJjSACmk0BRPxQqhnNLU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ultra",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ultra/v8/OW8uXkOstRADuhEmGOFQLA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Uncial Antiqua",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/uncialantiqua/v4/F-leefDiFwQXsyd6eaSllqrFJ4O13IHVxZbM6yoslpo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Underdog",
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
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/underdog/v5/gBv9yjez_-5PnTprHWq0ig.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Unica One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/unicaone/v4/KbYKlhWMDpatWViqDkNQgA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "UnifrakturCook",
   "category": "display",
   "variants": [
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/unifrakturcook/v8/ASwh69ykD8iaoYijVEU6RrWZkcsCTHKV51zmcUsafQ0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "UnifrakturMaguntia",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/unifrakturmaguntia/v7/7KWy3ymCVR_xfAvvcIXm3-kdNg30GQauG_DE-tMYtWk.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Unkempt",
   "category": "display",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/unkempt/v7/V7H-GCl9bgwGwqFqTTgDHvesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/unkempt/v7/NLLBeNSspr0RGs71R5LHWA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Unlock",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/unlock/v6/rXEQzK7uIAlhoyoAEiMy1w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Unna",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/unna/v8/UAS0AM7AmbdCNY_80xyAZQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "VT323",
   "category": "monospace",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/vt323/v7/ITU2YQfM073o1iYK3nSOmQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vampiro One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/vampiroone/v6/OVDs4gY4WpS5u3Qd1gXRW6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Varela",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/varela/v7/ON7qs0cKUUixhhDFXlZUjw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Varela Round",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/varelaround/v6/APH4jr0uSos5wiut5cpjri3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vast Shadow",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/vastshadow/v6/io4hqKX3ibiqQQjYfW0-h6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vesper Libre",
   "category": "serif",
   "variants": [
    "regular",
    "500",
    "700",
    "900"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-06-03",
   "files": {
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/vesperlibre/v7/0liLgNkygqH6EOtsVjZDsZMQuUSAwdHsY8ov_6tk1oA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/vesperlibre/v7/0liLgNkygqH6EOtsVjZDsUD2ttfZwueP-QU272T9-k4.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/vesperlibre/v7/0liLgNkygqH6EOtsVjZDsaObDOjC3UL77puoeHsE3fw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/vesperlibre/v7/Cg-TeZFsqV8BaOcoVwzu2C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vibur",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/vibur/v7/xB9aKsUbJo68XP0bAg2iLw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vidaloka",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/vidaloka/v8/C6Nul0ogKUWkx356rrt9RA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Viga",
   "category": "sans-serif",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/viga/v5/uD87gDbhS7frHLX4uL6agg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Voces",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/voces/v4/QoBH6g6yKgNIgvL8A2aE2Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Volkhov",
   "category": "serif",
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
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/volkhov/v8/L8PbKS-kEoLHm7nP--NCzPesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/volkhov/v8/MDIZAofe1T_J3un5Kgo8zg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/volkhov/v8/1rTjmztKEpbkKH06JwF8Yw.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/volkhov/v8/W6oG0QDDjCgj0gmsHE520C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Vollkorn",
   "category": "serif",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/vollkorn/v6/gOwQjJVGXlDOONC12hVoBqCWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/vollkorn/v6/IiexqYAeh8uII223thYx3w.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/vollkorn/v6/UuIzosgR1ovBhJFdwVp3fvesZW2xOQ-xsNqO47m55DA.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/vollkorn/v6/KNiAlx6phRqXCwnZZG51JAJKKGfqHaYFsRG-T3ceEVo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Voltaire",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/voltaire/v6/WvqBzaGEBbRV-hrahwO2cA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Waiting for the Sunrise",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/waitingforthesunrise/v7/eNfH7kLpF1PZWpsetF-ha9TChrNgrDiT3Zy6yGf3FnM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Wallpoet",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-08-12",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/wallpoet/v8/hmum4WuBN4A0Z_7367NDIg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Walter Turncoat",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/walterturncoat/v6/sG9su5g4GXy1KP73cU3hvQplL2YwNeota48DxFlGDUo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Warnes",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/warnes/v6/MXG7_Phj4YpzAXxKGItuBw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Wellfleet",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/wellfleet/v4/J5tOx72iFRPgHYpbK9J4XQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Wendy One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/wendyone/v4/R8CJT2oDXdMk_ZtuHTxoxw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Wire One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/wireone/v6/sRLhaQOQpWnvXwIx0CycQw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Work Sans",
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
    "latin-ext",
    "latin"
   ],
   "version": "v2",
   "lastModified": "2015-08-26",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/worksans/v2/ZAhtNqLaAViKjGLajtuwWaCWcynf_cDxXwCLxiixG1c.ttf",
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/worksans/v2/u_mYNr_qYP37m7vgvmIYZy3USBnSvpkopQaUR-2r7iU.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/worksans/v2/FD_Udbezj8EHXbdsqLUply3USBnSvpkopQaUR-2r7iU.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/worksans/v2/Nbre-U_bp6Xktt8cpgwaJC3USBnSvpkopQaUR-2r7iU.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/worksans/v2/z9rX03Xuz9ZNHTMg1_ghGS3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/worksans/v2/4udXuXg54JlPEP5iKO5AmS3USBnSvpkopQaUR-2r7iU.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/worksans/v2/IQh-ap2Uqs7kl1YINeeEGi3USBnSvpkopQaUR-2r7iU.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/worksans/v2/Hjn0acvjHfjY_vAK9Uc6gi3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/worksans/v2/zVvigUiMvx7JVEnrJgc-5Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Yanone Kaffeesatz",
   "category": "sans-serif",
   "variants": [
    "200",
    "300",
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
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/yanonekaffeesatz/v7/We_iSDqttE3etzfdfhuPRbq92v6XxU4pSv06GI0NsGc.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/yanonekaffeesatz/v7/We_iSDqttE3etzfdfhuPRZlIwXPiNoNT_wxzJ2t3mTE.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/yanonekaffeesatz/v7/We_iSDqttE3etzfdfhuPRf2R4S6PlKaGXWPfWpHpcl0.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/yanonekaffeesatz/v7/YDAoLskQQ5MOAgvHUQCcLdXn3cHbFGWU4T2HrSN6JF4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Yantramanav",
   "category": "sans-serif",
   "variants": [
    "100",
    "300",
    "regular",
    "500",
    "700",
    "900"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-06-03",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/yantramanav/v1/Rs1I2PF4Z8GAb6qjgvr8wIAWxXGWZ3yJw6KhWS7MxOk.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/yantramanav/v1/HSfbC4Z8I8BZ00wiXeA5bC9-WlPSxbfiI49GsXo3q0g.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/yantramanav/v1/HSfbC4Z8I8BZ00wiXeA5bMCNfqCYlB_eIx7H1TVXe60.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/yantramanav/v1/HSfbC4Z8I8BZ00wiXeA5bHe1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/yantramanav/v1/HSfbC4Z8I8BZ00wiXeA5bCenaqEuufTBk9XMKnKmgDA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/yantramanav/v1/FwdziO-qWAO8pZg8e376kaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Yellowtail",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/yellowtail/v6/HLrU6lhCTjXfLZ7X60LcB_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Yeseva One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/yesevaone/v9/eenQQxvpzSA80JmisGcgX_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Yesteryear",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/yesteryear/v5/dv09hP_ZrdjVOfZQXKXuZvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Zeyada",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/zeyada/v6/hmonmGYYFwqTZQfG2nRswQ.ttf"
   }
  }
 ]
}';
