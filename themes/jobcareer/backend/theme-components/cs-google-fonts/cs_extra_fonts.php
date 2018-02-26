<?php
// Get fonts files
$cs_fonts_vars = array('fonts');
$cs_fonts_vars = CS_JOBCAREER_GLOBALS()->globalizing($cs_fonts_vars);
extract($cs_fonts_vars);

 $fonts .= '{
   "kind": "webfonts#webfont",
   "family": "Days One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/daysone/v6/kzwZjNhc1iabMsrc_hKBIA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dekko",
   "category": "handwriting",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/dekko/v2/AKtgABKC1rUxgIgS-bpojw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Delius",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/delius/v6/TQA163qafki2-gV-B6F_ag.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Delius Swash Caps",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/deliusswashcaps/v8/uXyrEUnoWApxIOICunRq7yIrxb5zDVgU2N3VzXm7zq4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Delius Unicase",
   "category": "handwriting",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/deliusunicase/v9/7FTMTITcb4dxUp99FAdTqNy5weKXdcrx-wE0cgECMq8.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/deliusunicase/v9/b2sKujV3Q48RV2PQ0k1vqu6rPKfVZo7L2bERcf0BDns.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Della Respira",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/dellarespira/v4/F4E6Lo_IZ6L9AJCcbqtDVeDcg5akpSnIcsPhLOFv7l8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Denk One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/denkone/v4/TdXOeA4eA_hEx4W8Sh9wPw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Devonshire",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/devonshire/v5/I3ct_2t12SYizP8ZC-KFi_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dhurjati",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/dhurjati/v4/uV6jO5e2iFMbGB0z79Cy5g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Didact Gothic",
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
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/didactgothic/v7/v8_72sD3DYMKyM0dn3LtWotBLojGU5Qdl8-5NL4v70w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Diplomata",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-03-20",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/diplomata/v6/u-ByBiKgN6rTMA36H3kcKg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Diplomata SC",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/diplomatasc/v5/JdVwAwfE1a_pahXjk5qpNi3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Domine",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/domine/v4/phBcG1ZbQFxUIt18hPVxnw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/domine/v4/wfVIgamVFjMNQAEWurCiHA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Donegal One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/donegalone/v4/6kN4-fDxz7T9s5U61HwfF6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Doppio One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/doppioone/v4/WHZ3HJQotpk_4aSMNBo_t_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dorsa",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/dorsa/v7/wCc3cUe6XrmG2LQE6GlIrw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dosis",
   "category": "sans-serif",
   "variants": [
    "200",
    "300",
    "regular",
    "500",
    "600",
    "700",
    "800"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/dosis/v4/ztftab0r6hcd7AeurUGrSQ.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/dosis/v4/awIB6L0h5mb0plIKorXmuA.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/dosis/v4/ruEXDOFMxDPGnjCBKRqdAQ.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/dosis/v4/KNAswRNwm3tfONddYyidxg.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/dosis/v4/AEEAj0ONidK8NQQMBBlSig.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/dosis/v4/nlrKd8E69vvUU39XGsvR7Q.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/dosis/v4/rJRlixu-w0JZ1MyhJpao_Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dr Sugiyama",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/drsugiyama/v5/S5Yx3MIckgoyHhhS4C9Tv6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Droid Sans",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/droidsans/v6/EFpQQyG9GqCrobXxL-KRMQJKKGfqHaYFsRG-T3ceEVo.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/droidsans/v6/rS9BT6-asrfjpkcV3DXf__esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Droid Sans Mono",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/droidsansmono/v7/ns-m2xQYezAtqh7ai59hJcwD6PD0c3_abh9zHKQtbGU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Droid Serif",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/droidserif/v6/QQt14e8dY39u-eYBZmppwXe1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/droidserif/v6/DgAtPy6rIVa2Zx3Xh9KaNaCWcynf_cDxXwCLxiixG1c.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/droidserif/v6/cj2hUnSRBhwmSPr9kS5890eOrDcLawS7-ssYqLr2Xp4.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/droidserif/v6/c92rD_x0V1LslSFt3-QEps_zJjSACmk0BRPxQqhnNLU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Duru Sans",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-07-30",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/durusans/v9/xn7iYH8xwmSyTvEV_HOxTw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Dynalight",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/dynalight/v5/-CWsIe8OUDWTIHjSAh41kA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "EB Garamond",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "cyrillic-ext",
    "latin-ext",
    "vietnamese",
    "cyrillic",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ebgaramond/v7/CDR0kuiFK7I1OZ2hSdR7G6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Eagle Lake",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/eaglelake/v4/ZKlYin7caemhx9eSg6RvPfesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Eater",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/eater/v5/gm6f3OmYEdbs3lPQtUfBkA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Economica",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/economica/v4/UK4l2VEpwjv3gdcwbwXE9C3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/economica/v4/G4rJRujzZbq9Nxngu9l3hg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/economica/v4/p5O9AVeUqx_n35xQRinNYaCWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/economica/v4/ac5dlUsedQ03RqGOeay-3Xe1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Eczar",
   "category": "serif",
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
   "version": "v2",
   "lastModified": "2015-08-12",
   "files": {
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/eczar/v2/Ooe4KaPp2594tF8TbMfdlQ.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/eczar/v2/IjQsWW0bmgkZ6lnN72cnTQ.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/eczar/v2/ELC8RVXfBMb3VuuHtMwBOA.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/eczar/v2/9Uyt6nTZLx_Qj5_WRah-iQ.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/eczar/v2/uKZcAQ5JBBs1UbeXFRbBRg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ek Mukta",
   "category": "sans-serif",
   "variants": [
    "200",
    "300",
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
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/ekmukta/v7/crtkNHh5JcM3VJKG0E-B36CWcynf_cDxXwCLxiixG1c.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/ekmukta/v7/mpaAv7CIyk0VnZlqSneVxKCWcynf_cDxXwCLxiixG1c.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/ekmukta/v7/PZ1y2MstFczWvBlFSgzMyaCWcynf_cDxXwCLxiixG1c.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/ekmukta/v7/Z5Mfzeu6M3emakcJO2QeTqCWcynf_cDxXwCLxiixG1c.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/ekmukta/v7/4ugcOGR28Jn-oBIn0-qLYaCWcynf_cDxXwCLxiixG1c.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/ekmukta/v7/O68TH5OjEhVmn9_gIrcfS6CWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ekmukta/v7/aFcjXdC5jyJ1p8w54wIIrg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Electrolize",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/electrolize/v5/yFVu5iokC-nt4B1Cyfxb9aCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Elsie",
   "category": "display",
   "variants": [
    "regular",
    "900"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/elsie/v5/1t-9f0N2NFYwAgN7oaISqg.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/elsie/v5/gwspePauE45BJu6Ok1QrfQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Elsie Swash Caps",
   "category": "display",
   "variants": [
    "regular",
    "900"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/elsieswashcaps/v4/iZnus9qif0tR5pGaDv5zdKoKBWBozTtxi30NfZDOXXU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/elsieswashcaps/v4/9L3hIJMPCf6sxCltnxd6X2YeFSdnSpRYv5h9gpdlD1g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Emblema One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/emblemaone/v5/7IlBUjBWPIiw7cr_O2IfSaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Emilys Candy",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/emilyscandy/v4/PofLVm6v1SwZGOzC8s-I3S3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Engagement",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/engagement/v5/4Uz0Jii7oVPcaFRYmbpU6vesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Englebert",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/englebert/v4/sll38iOvOuarDTYBchlP3Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Enriqueta",
   "category": "serif",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/enriqueta/v5/I27Pb-wEGH2ajLYP0QrtSC3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/enriqueta/v5/_p90TrIwR1SC-vDKtmrv6A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Erica One",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ericaone/v6/cIBnH2VAqQMIGYAcE4ufvQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Esteban",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/esteban/v4/ESyhLgqDDyK5JcFPp2svDw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Euphoria Script",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/euphoriascript/v4/c4XB4Iijj_NvSsCF4I0O2MxLhO8OSNnfAp53LK1_iRs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Ewert",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/ewert/v4/Em8hrzuzSbfHcTVqMjbAQg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Exo",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
    "200",
    "200italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
    "600",
    "600italic",
    "700",
    "700italic",
    "800",
    "800italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/RI7A9uwjRmPbVp0n8e-Jvg.ttf",
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/F8OfC_swrRRxpFt-tlXZQg.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/SBrN7TKUqgGUvfxqHqsnNw.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/jCg6DmGGXt_OVyp5ofQHPw.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/q_SG5kXUmOcIvFpgtdZnlw.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/3_jwsL4v9uHjl5Q37G57mw.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/yLPuxBuV0lzqibRJyooOJg.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/97d0nd6Yv4-SA_X92xAuZA.ttf",
    "100italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/qtGyZZlWb2EEvby3ZPosxw.ttf",
    "200italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/fr4HBfXHYiIngW2_bhlgRw.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/3gmiLjBegIfcDLISjTGA1g.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/eUEzTFueNXRVhbt4PEB8kQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/cfgolWisMSURhpQeVHl_NA.ttf",
    "500italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/lo5eTdCNJZQVN08p8RnzAQ.ttf",
    "600italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/0cExa8K_pxS2lTuMr68XUA.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/0me55yJIxd5vyQ9bF7SsiA.ttf",
    "800italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/n3LejeKVj_8gtZq5fIgNYw.ttf",
    "900italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo/v4/JHTkQVhzyLtkY13Ye95TJQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Exo 2",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
    "200",
    "200italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "500",
    "500italic",
    "600",
    "600italic",
    "700",
    "700italic",
    "800",
    "800italic",
    "900",
    "900italic"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v3",
   "lastModified": "2015-04-06",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/oVOtQy53isv97g4UhBUDqg.ttf",
    "200": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/qa-Ci2pBwJdCxciE1ErifQ.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/nLUBdz_lHHoVIPor05Byhw.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/oM0rzUuPqVJpW-VEIpuW5w.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/YnSn3HsyvyI1feGSdRMYqA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/2DiK4XkdTckfTk6we73-bQ.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/IVYl_7dJruOg8zKRpC8Hrw.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/e8csG8Wnu87AF6uCndkFRQ.ttf",
    "100italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/LNYVgsJcaCxoKFHmd4AZcg.ttf",
    "200italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/DCrVxDVvS69n50O-5erZVvesZW2xOQ-xsNqO47m55DA.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/iSy9VTeUTiqiurQg2ywtu_esZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/Pf_kZuIH5c5WKVkQUaeSWQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/xxA5ZscX9sTU6U0lZJUlYA.ttf",
    "500italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/amzRVCB-gipwdihZZ2LtT_esZW2xOQ-xsNqO47m55DA.ttf",
    "600italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/Vmo58BiptGwfVFb0teU5gPesZW2xOQ-xsNqO47m55DA.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/Sdo-zW-4_--pDkTg6bYrY_esZW2xOQ-xsNqO47m55DA.ttf",
    "800italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/p0TA6KeOz1o4rySEbvUxI_esZW2xOQ-xsNqO47m55DA.ttf",
    "900italic": "'.cs_server_protocol().'fonts.gstatic.com/s/exo2/v3/KPhsGCoT2-7Uj6pMlRscH_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Expletus Sans",
   "category": "display",
   "variants": [
    "regular",
    "italic",
    "500",
    "500italic",
    "600",
    "600italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-08-12",
   "files": {
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/expletussans/v8/cl6rhMY77Ilk8lB_uYRRwAqQmZ7VjhwksfpNVG0pqGc.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/expletussans/v8/cl6rhMY77Ilk8lB_uYRRwCvj1tU7IJMS3CS9kCx2B3U.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/expletussans/v8/cl6rhMY77Ilk8lB_uYRRwFCbmAUID8LN-q3pJpOk3Ys.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/expletussans/v8/gegTSDBDs5le3g6uxU1ZsX8f0n03UdmQgF_CLvNR2vg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/expletussans/v8/Y-erXmY0b6DU_i2Qu0hTJj4G9C9ttb0Oz5Cvf0qOitE.ttf",
    "500italic": "'.cs_server_protocol().'fonts.gstatic.com/s/expletussans/v8/sRBNtc46w65uJE451UYmW87DCVO6wo6i5LKIyZDzK40.ttf",
    "600italic": "'.cs_server_protocol().'fonts.gstatic.com/s/expletussans/v8/sRBNtc46w65uJE451UYmW8yKH23ZS6zCKOFHG0e_4JE.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/expletussans/v8/sRBNtc46w65uJE451UYmW5F66r9C4AnxxlBlGd7xY4g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fanwood Text",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fanwoodtext/v6/hDNDHUlsSb8bgnEmDp4T_i3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/fanwoodtext/v6/0J3SBbkMZqBV-3iGxs5E9_MZXuCXbOrAvx5R0IT5Oyo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fascinate",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fascinate/v5/ZE0637WWkBPKt1AmFaqD3Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fascinate Inline",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fascinateinline/v6/lRguYfMfWArflkm5aOQ5QJmp8DTZ6iHear7UV05iykg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Faster One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fasterone/v5/YxTOW2sf56uxD1T7byP5K_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fasthand",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v7",
   "lastModified": "2015-04-03",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fasthand/v7/6XAagHH_KmpZL67wTvsETQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fauna One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/faunaone/v4/8kL-wpAPofcAMELI_5NRnQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Federant",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/federant/v7/tddZFSiGvxICNOGra0i5aA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Federo",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/federo/v8/JPhe1S2tujeyaR79gXBLeQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Felipa",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/felipa/v4/SeyfyFZY7abAQXGrOIYnYg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fenix",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fenix/v4/Ak8wR3VSlAN7VN_eMeJj7Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Finger Paint",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fingerpaint/v4/m_ZRbiY-aPb13R3DWPBGXy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fira Mono",
   "category": "monospace",
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
   "version": "v3",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/firamono/v3/l24Wph3FsyKAbJ8dfExTZy3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/firamono/v3/WQOm1D4RO-yvA9q9trJc8g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fira Sans",
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
    "greek",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/firasans/v5/VTBnrK42EiOBncVyQXZ7jy3USBnSvpkopQaUR-2r7iU.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/firasans/v5/zM2u8V3CuPVwAAXFQcDi4C3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/firasans/v5/DugPdSljmOTocZOR2CItOi3USBnSvpkopQaUR-2r7iU.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/firasans/v5/6s0YCA9oCTF6hM60YM-qTS9-WlPSxbfiI49GsXo3q0g.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/firasans/v5/nsT0isDy56OkSX99sFQbXw.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/firasans/v5/cPT_2ddmoxsUuMtQqa8zGqCWcynf_cDxXwCLxiixG1c.ttf",
    "500italic": "'.cs_server_protocol().'fonts.gstatic.com/s/firasans/v5/6s0YCA9oCTF6hM60YM-qTcCNfqCYlB_eIx7H1TVXe60.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/firasans/v5/6s0YCA9oCTF6hM60YM-qTXe1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fjalla One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fjallaone/v4/3b7vWCfOZsU53vMa8LWsf_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fjord One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fjordone/v5/R_YHK8au2uFPw5tNu5N7zw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Flamenco",
   "category": "display",
   "variants": [
    "300",
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/flamenco/v6/x9iI5CogvuZVCGoRHwXuo6CWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/flamenco/v6/HC0ugfLLgt26I5_BWD1PZA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Flavors",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/flavors/v5/SPJi5QclATvon8ExcKGRvQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fondamento",
   "category": "handwriting",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fondamento/v5/6LWXcjT1B7bnWluAOSNfMPesZW2xOQ-xsNqO47m55DA.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/fondamento/v5/y6TmwhSbZ8rYq7OTFyo7OS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fontdiner Swanky",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fontdinerswanky/v6/8_GxIO5ixMtn5P6COsF3TlBjMPLzPAFJwRBn-s1U7kA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Forum",
   "category": "display",
   "variants": [
    "regular"
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/forum/v7/MZUpsq1VfLrqv8eSDcbrrQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Francois One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/francoisone/v9/bYbkq2nU2TSx4SwFbz5sCC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Freckle Face",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/freckleface/v4/7-B8j9BPJgazdHIGqPNv8y3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fredericka the Great",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/frederickathegreat/v5/7Es8Lxoku-e5eOZWpxw18nrnet6gXN1McwdQxS1dVrI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fredoka One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fredokaone/v4/QKfwXi-z-KtJAlnO2ethYqCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Freehand",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/freehand/v8/uEBQxvA0lnn_BrD6krlxMw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fresca",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fresca/v5/2q7Qm9sCo1tWvVgSDVWNIw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Frijole",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/frijole/v5/L2MfZse-2gCascuD-nLhWg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fruktur",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fruktur/v6/PnQvfEi1LssAvhJsCwH__w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Fugaz One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/fugazone/v6/5tteVDCwxsr8-5RuSiRWOw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "GFS Didot",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "greek"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gfsdidot/v6/jQKxZy2RU-h9tkPZcRVluA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "GFS Neohellenic",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "greek"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/gfsneohellenic/v7/7HwjPQa7qNiOsnUce2h4448_BwCLZY3eDSV6kppAwI8.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gfsneohellenic/v7/B4xRqbn-tANVqVgamMsSDiayCZa0z7CpFzlkqoCHztc.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/gfsneohellenic/v7/KnaWrO4awITAqigQIIYXKkCTdomiyJpIzPbEbIES3rU.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/gfsneohellenic/v7/FwWjoX6XqT-szJFyqsu_GYFF0fM4h-krcpQk7emtCpE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gabriela",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gabriela/v4/B-2ZfbAO3HDrxqV6lR5tdA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gafata",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gafata/v5/aTFqlki_3Dc3geo-FxHTvQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Galdeano",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/galdeano/v6/ZKFMQI6HxEG1jOT0UGSZUg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Galindo",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/galindo/v4/2lafAS_ZEfB33OJryhXDUg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gentium Basic",
   "category": "serif",
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
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/gentiumbasic/v7/2qL6yulgGf0wwgOp-UqGyLNuTeOOLg3nUymsEEGmdO0.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gentiumbasic/v7/KCktj43blvLkhOTolFn-MYtBLojGU5Qdl8-5NL4v70w.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/gentiumbasic/v7/qoFz4NSMaYC2UmsMAG3lyTj3mvXnCeAk09uTtmkJGRc.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/gentiumbasic/v7/8N9-c_aQDJ8LbI1NGVMrwtswO1vWwP9exiF8s0wqW10.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gentium Book Basic",
   "category": "serif",
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
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/gentiumbookbasic/v6/T2vUYmWzlqUtgLYdlemGnaWESMHIjnSjm9UUxYtEOko.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gentiumbookbasic/v6/IRFxB2matTxrjZt6a3FUnrWDjKAyldGEr6eEi2MBNeY.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/gentiumbookbasic/v6/qHqW2lwKO8-uTfIkh8FsUfXfjMwrYnmPVsQth2IcAPY.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/gentiumbookbasic/v6/632u7TMIoFDWQYUaHFUp5PA2A9KyRZEkn4TZVuhsWRM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Geo",
   "category": "sans-serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/geo/v8/mJuJYk5Pww84B4uHAQ1XaA.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/geo/v8/8_r1wToF7nPdDuX1qxel6Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Geostar",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/geostar/v6/A8WQbhQbpYx3GWWaShJ9GA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Geostar Fill",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/geostarfill/v6/Y5ovXPPOHYTfQzK2aM-hui3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Germania One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/germaniaone/v4/3_6AyUql_-FbDi1e68jHdC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gidugu",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "telugu",
    "latin"
   ],
   "version": "v3",
   "lastModified": "2015-04-07",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gidugu/v3/Ey6Eq3hrT6MM58iFItFcgw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gilda Display",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gildadisplay/v4/8yAVUZLLZ3wb7dSsjix0CADHmap7fRWINAsw8-RaxNg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Give You Glory",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/giveyouglory/v6/DFEWZFgGmfseyIdGRJAxuBwwkpSPZdvjnMtysdqprfI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Glass Antiqua",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/glassantiqua/v4/0yLrXKplgdUDIMz5TnCHNODcg5akpSnIcsPhLOFv7l8.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Glegoo",
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
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/glegoo/v5/TlLolbauH0-0Aiz1LUH5og.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/glegoo/v5/2tf-h3n2A_SNYXEO0C8bKw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gloria Hallelujah",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-08-14",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gloriahallelujah/v8/CA1k7SlXcY5kvI81M_R28Q3RdPdyebSUyJECJouPsvA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Goblin One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/goblinone/v6/331XtzoXgpVEvNTVcBJ_C_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gochi Hand",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gochihand/v7/KT1-WxgHsittJ34_20IfAPesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gorditas",
   "category": "display",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/gorditas/v4/6-XCeknmxaon8AUqVkMnHaCWcynf_cDxXwCLxiixG1c.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gorditas/v4/uMgZhXUyH6qNGF3QsjQT5Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Goudy Bookletter 1911",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/goudybookletter1911/v6/l5lwlGTN3pEY5Bf-rQEuIIjNDsyURsIKu4GSfvSE4mA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Graduate",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/graduate/v4/JpAmYLHqcIh9_Ff35HHwiA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Grand Hotel",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/grandhotel/v4/C_A8HiFZjXPpnMt38XnK7qCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gravitas One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gravitasone/v6/nBHdBv6zVNU8MtP6w9FwTS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Great Vibes",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/greatvibes/v4/4Mi5RG_9LjQYrTU55GN_L6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Griffy",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/griffy/v4/vWkyYGBSyE5xjnShNtJtzw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gruppo",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gruppo/v7/pS_JM0cK_piBZve-lfUq9w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gudea",
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
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/gudea/v4/lsip4aiWhJ9bx172Y9FN_w.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gudea/v4/S-4QqBlkMPiiA3jNeCR5yw.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/gudea/v4/7mNgsGw_vfS-uUgRVXNDSw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Gurajada",
   "category": "serif",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/gurajada/v4/6Adfkl4PCRyq6XTENACEyA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Habibi",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/habibi/v5/YYyqXF6pWpL7kmKgS_2iUA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Halant",
   "category": "serif",
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
   "lastModified": "2015-04-01",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/halant/v1/dM3ItAOWNNod_Cf3MnLlEg.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/halant/v1/tlsNj3K-hJKtiirTDtUbkQ.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/halant/v1/zNR2WvI_V8o652vIZp3X4Q.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/halant/v1/D9FN7OH89AuCmZDLHbPQfA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/halant/v1/rEs7Jk3SVyt3cTx6DoTu1w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Hammersmith One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/hammersmithone/v7/FWNn6ITYqL6or7ZTmBxRhjjVlsJB_M_Q_LtZxsoxvlw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Hanalei",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/hanalei/v6/Sx8vVMBnXSQyK6Cn0CBJ3A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Hanalei Fill",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/hanaleifill/v5/5uPeWLnaDdtm4UBG26Ds6C3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Handlee",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/handlee/v5/6OfkXkyC0E5NZN80ED8u3A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Hanuman",
   "category": "serif",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v9",
   "lastModified": "2015-08-26",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/hanuman/v9/lzzXZ2l84x88giDrbfq76vesZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/hanuman/v9/hRhwOGGmElJSl6KSPvEnOQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Happy Monkey",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/happymonkey/v5/c2o0ps8nkBmaOYctqBq1rS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Headland One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/headlandone/v4/iGmBeOvQGfq9DSbjJ8jDVy3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Henny Penny",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/hennypenny/v4/XRgo3ogXyi3tpsFfjImRF6CWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Herr Von Muellerhoff",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/herrvonmuellerhoff/v6/mmy24EUmk4tjm4gAEjUd7NLGIYrUsBdh-JWHYgiDiMU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Hind",
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
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/hind/v5/qa346Adgv9kPDXoD1my4kA.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/hind/v5/2cs8RCVcYtiv4iNDH1UsQQ.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/hind/v5/TUKUmFMXSoxloBP1ni08oA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/hind/v5/cXJJavLdUbCfjxlsA6DqTw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/hind/v5/mktFHh5Z5P9YjGKSslSUtA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Holtwood One SC",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/holtwoodonesc/v7/sToOq3cIxbfnhbEkgYNuBbAgSRh1LpJXlLfl8IbsmHg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Homemade Apple",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/homemadeapple/v6/yg3UMEsefgZ8IHz_ryz86BiPOmFWYV1WlrJkRafc4c0.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Homenaje",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/homenaje/v5/v0YBU0iBRrGdVjDNQILxtA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell DW Pica",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/imfelldwpica/v6/W81bfaWiUicLSPbJhW-ATsA5qm663gJGVdtpamafG5A.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/imfelldwpica/v6/alQJ8SK5aSOZVaelYoyT4PL2asmh5DlYQYCosKo6yQs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell DW Pica SC",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/imfelldwpicasc/v6/xBKKJV4z2KsrtQnmjGO17JZ9RBdEL0H9o5qzT1Rtof4.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell Double Pica",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/imfelldoublepica/v6/yN1wY_01BkQnO0LYAhXdUol14jEdVOhEmvtCMCVwYak.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/imfelldoublepica/v6/64odUh2hAw8D9dkFKTlWYq0AWwkgdQfsRHec8TYi4mI.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell Double Pica SC",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/imfelldoublepicasc/v6/jkrUtrLFpMw4ZazhfkKsGwc4LoC4OJUqLw9omnT3VOU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell English",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/imfellenglish/v6/xwIisCqGFi8pff-oa9uSVHGNmx1fDm-u2eBJHQkdrmk.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/imfellenglish/v6/Z3cnIAI_L3XTRfz4JuZKbuewladMPCWTthtMv9cPS-c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell English SC",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/imfellenglishsc/v6/h3Tn6yWfw4b5qaLD1RWvz5ATixNthKRRR1XVH3rJNiw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell French Canon",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/imfellfrenchcanon/v6/iKB0WL1BagSpNPz3NLMdsJ3V2FNpBrlLSvqUnERhBP8.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/imfellfrenchcanon/v6/owCuNQkLLFW7TBBPJbMnhRa-QL94KdW80H29tcyld2A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell French Canon SC",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/imfellfrenchcanonsc/v6/kA3bS19-tQbeT_iG32EZmaiyyzHwYrAbmNulTz423iM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell Great Primer",
   "category": "serif",
   "variants": [
    "regular",
    "italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/imfellgreatprimer/v6/AL8ALGNthei20f9Cu3e93rgeX3ROgtTz44CitKAxzKI.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/imfellgreatprimer/v6/1a-artkXMVg682r7TTxVY1_YG2SFv8Ma7CxRl1S3o7g.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "IM Fell Great Primer SC",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/imfellgreatprimersc/v6/A313vRj97hMMGFjt6rgSJtRg-ciw1Y27JeXb2Zv4lZQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Iceberg",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/iceberg/v4/p2XVm4M-N0AOEEOymFKC5w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Iceland",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/iceland/v5/kq3uTMGgvzWGNi39B_WxGA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Imprima",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/imprima/v4/eRjquWLjwLGnTEhLH7u3kA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Inconsolata",
   "category": "monospace",
   "variants": [
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v11",
   "lastModified": "2015-05-14",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/inconsolata/v11/AIed271kqQlcIRSOnQH0yXe1Pd76Vl7zRpE7NLJQ7XU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/inconsolata/v11/7bMKuoy6Nh0ft0SHnIGMuaCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Inder",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/inder/v5/C38TwecLTfKxIHDc_Adcrw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Indie Flower",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v8",
   "lastModified": "2015-08-14",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/indieflower/v8/10JVD_humAd5zP2yrFqw6i3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Inika",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/inika/v4/bl3ZoTyrWsFun2zYbsgJrA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/inika/v4/eZCrULQGaIxkrRoGz_DjhQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Inknut Antiqua",
   "category": "serif",
   "variants": [
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
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-06-11",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVIg6hmPNSXwHGnJQCeQHKUMo.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVIiYCDvi1XFzRnTV7qUFsNgk.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVIjLEgY6PI0GrY6L00mykcEQ.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVIlRhfXn9P4_QueZ7VkUHUNc.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVInARjXVu2t2krcNTHiCb1qY.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/inknutantiqua/v1/CagoW52rBcslcXzHh6tVIrTsNy1JrFNT1qKy8j7W3CU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/inknutantiqua/v1/VlmmTfOrxr3HfcnhMueX9arFJ4O13IHVxZbM6yoslpo.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Irish Grover",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/irishgrover/v6/kUp7uUPooL-KsLGzeVJbBC3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Istok Web",
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
   "version": "v10",
   "lastModified": "2015-06-11",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/istokweb/v10/2koEo4AKFSvK4B52O_Mwai3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/istokweb/v10/RYLSjEXQ0nNtLLc4n7--dQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/istokweb/v10/kvcT2SlTjmGbC3YlZxmrl6CWcynf_cDxXwCLxiixG1c.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/istokweb/v10/ycQ3g52ELrh3o_HYCNNUw3e1Pd76Vl7zRpE7NLJQ7XU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Italiana",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/italiana/v4/dt95fkCSTOF-c6QNjwSycA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Italianno",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/italianno/v6/HsyHnLpKf8uP7aMpDQHZmg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Itim",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "vietnamese",
    "thai",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-08-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/itim/v1/HHV9WK2x5lUkc5bxMXG8Tw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jacques Francois",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/jacquesfrancois/v4/_-0XWPQIW6tOzTHg4KaJ_M13D_4KM32Q4UmTSjpuNGQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jacques Francois Shadow",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/jacquesfrancoisshadow/v4/V14y0H3vq56fY9SV4OL_FASt0D_oLVawA8L8b9iKjbs.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jaldi",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/jaldi/v2/OIbtgjjEp3aVWtjF6WY8mA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/jaldi/v2/x1vR-bPW9a1EB-BUVqttCw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jim Nightshade",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/jimnightshade/v4/_n43lYHXVWNgXegdYRIK9CF1W_bo0EdycfH0kHciIic.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jockey One",
   "category": "sans-serif",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/jockeyone/v6/cAucnOZLvFo07w2AbufBCfesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jolly Lodger",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/jollylodger/v4/RX8HnkBgaEKQSHQyP9itiS3USBnSvpkopQaUR-2r7iU.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Josefin Sans",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "600",
    "600italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinsans/v9/q9w3H4aeBxj0hZ8Osfi3d8SVQ0giZ-l_NELu3lgGyYw.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinsans/v9/C6HYlRF50SGJq1XyXj04z6cQoVhARpoaILP7amxE_8g.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinsans/v9/C6HYlRF50SGJq1XyXj04z2v8CylhIUtwUiYO7Z2wXbE.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinsans/v9/C6HYlRF50SGJq1XyXj04z0D2ttfZwueP-QU272T9-k4.ttf",
    "100italic": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinsans/v9/s7-P1gqRNRNn-YWdOYnAOXXcj1rQwlNLIS625o-SrL0.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinsans/v9/ppse0J9fKSaoxCIIJb33Gyna0FLWfcB-J_SAYmcAXaI.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinsans/v9/xgzbb53t8j-Mo-vYa23n5i3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinsans/v9/q9w3H4aeBxj0hZ8Osfi3d_MZXuCXbOrAvx5R0IT5Oyo.ttf",
    "600italic": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinsans/v9/ppse0J9fKSaoxCIIJb33G4R-5-urNOGAobhAyctHvW8.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinsans/v9/ppse0J9fKSaoxCIIJb33G_As9-1nE9qOqhChW0m4nDE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Josefin Slab",
   "category": "serif",
   "variants": [
    "100",
    "100italic",
    "300",
    "300italic",
    "regular",
    "italic",
    "600",
    "600italic",
    "700",
    "700italic"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-04-06",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinslab/v6/etsUjZYO8lTLU85lDhZwUsSVQ0giZ-l_NELu3lgGyYw.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinslab/v6/NbE6ykYuM2IyEwxQxOIi2KcQoVhARpoaILP7amxE_8g.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinslab/v6/NbE6ykYuM2IyEwxQxOIi2Gv8CylhIUtwUiYO7Z2wXbE.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinslab/v6/NbE6ykYuM2IyEwxQxOIi2ED2ttfZwueP-QU272T9-k4.ttf",
    "100italic": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinslab/v6/8BjDChqLgBF3RJKfwHIYh3Xcj1rQwlNLIS625o-SrL0.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinslab/v6/af9sBoKGPbGO0r21xJulyyna0FLWfcB-J_SAYmcAXaI.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinslab/v6/46aYWdgz-1oFX11flmyEfS3USBnSvpkopQaUR-2r7iU.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinslab/v6/etsUjZYO8lTLU85lDhZwUvMZXuCXbOrAvx5R0IT5Oyo.ttf",
    "600italic": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinslab/v6/af9sBoKGPbGO0r21xJuly4R-5-urNOGAobhAyctHvW8.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/josefinslab/v6/af9sBoKGPbGO0r21xJuly_As9-1nE9qOqhChW0m4nDE.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Joti One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/jotione/v4/P3r_Th0ESHJdzunsvWgUfQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Judson",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/judson/v7/he4a2LwiPJc7r8x0oKCKiA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/judson/v7/znM1AAs0eytUaJzf1CrYZQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/judson/v7/GVqQW9P52ygW-ySq-CLwAA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Julee",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/julee/v6/CAib-jsUsSO8SvVRnE9fHA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Julius Sans One",
   "category": "sans-serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v5",
   "lastModified": "2015-04-22",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/juliussansone/v5/iU65JP9acQHPDLkdalCF7jjVlsJB_M_Q_LtZxsoxvlw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Junge",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/junge/v4/j4IXCXtxrw9qIBheercp3A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Jura",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "500",
    "600"
   ],
   "subsets": [
    "cyrillic-ext",
    "greek",
    "latin-ext",
    "cyrillic",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/jura/v7/Rqx_xy1UnN0C7wD3FUSyPQ.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/jura/v7/16xhfjHCiaLj3tsqqgmtGg.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/jura/v7/iwseduOwJSdY8wQ1Y6CJdA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/jura/v7/YAWMwF3sN0KCbynMq-Yr_Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Just Another Hand",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/justanotherhand/v7/fKV8XYuRNNagXr38eqbRf99BnJIEGrvoojniP57E51c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Just Me Again Down Here",
   "category": "handwriting",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/justmeagaindownhere/v8/sN06iTc9ITubLTgXoG-kc3M9eVLpVTSK6TqZTIgBrWQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kadwa",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/kadwa/v1/NFPZaBfekj_Io-7vUMz4Ww.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kadwa/v1/VwEN8oKGqaa0ug9kRpvSSg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kalam",
   "category": "handwriting",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin-ext",
    "devanagari",
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-08-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/kalam/v7/MgQQlk1SgPEHdlkWMNh7Jg.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/kalam/v7/95nLItUGyWtNLZjSckluLQ.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kalam/v7/hNEJkp2K-aql7e5WQish4Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kameron",
   "category": "serif",
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
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/kameron/v7/rabVVbzlflqvmXJUFlKnu_esZW2xOQ-xsNqO47m55DA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kameron/v7/9r8HYhqDSwcq9WMjupL82A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kantumruy",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v3",
   "lastModified": "2015-04-03",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/kantumruy/v3/ERRwQE0WG5uanaZWmOFXNi3USBnSvpkopQaUR-2r7iU.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/kantumruy/v3/gie_zErpGf_rNzs920C2Ji3USBnSvpkopQaUR-2r7iU.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kantumruy/v3/kQfXNYElQxr5dS8FyjD39Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Karla",
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
   "version": "v5",
   "lastModified": "2015-04-06",
   "files": {
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/karla/v5/JS501sZLxZ4zraLQdncOUA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/karla/v5/78UgGRwJFkhqaoFimqoKpQ.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/karla/v5/51UBKly9RQOnOkj95ZwEFw.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/karla/v5/3YDyi09gQjCRh-5-SVhTTvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Karma",
   "category": "serif",
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
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/karma/v5/lH6ijJnguWR2Sz7tEl6MQQ.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/karma/v5/9YGjxi6Hcvz2Kh-rzO_cAw.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/karma/v5/h_CVzXXtqSxjfS2sIwaejA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/karma/v5/smuSM08oApsQPPVYbHd1CA.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/karma/v5/wvqTxAGBUrTqU0urTEoPIw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kaushan Script",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kaushanscript/v4/qx1LSqts-NtiKcLw4N03IBnpV0hQCek3EmWnCPrvGRM.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kavoon",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kavoon/v4/382m-6baKXqJFQjEgobt6Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kdam Thmor",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v3",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kdamthmor/v3/otCdP6UU-VBIrBfVDWBQJ_esZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Keania One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/keaniaone/v4/PACrDKZWngXzgo-ucl6buvesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kelly Slab",
   "category": "display",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kellyslab/v6/F_2oS1e9XdYx1MAi8XEVefesZW2xOQ-xsNqO47m55DA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kenia",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kenia/v8/OLM9-XfITK9PsTLKbGBrwg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Khand",
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
   "version": "v4",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/khand/v4/072zRl4OU9Pinjjkg174LA.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/khand/v4/46_p-SqtuMe56nxQdteWxg.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/khand/v4/zggGWYIiPJyMTgkfxP_kaA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/khand/v4/0I0UWaN-X5QBmfexpXKhqg.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/khand/v4/HdLdTNFqNIDGJZl1ZEj84w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Khmer",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/khmer/v9/vWaBJIbaQuBNz02ALIKJ3A.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Khula",
   "category": "sans-serif",
   "variants": [
    "300",
    "regular",
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
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/khula/v1/_1LySU5Upq-sc4OZ1b_GIw.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/khula/v1/4ZH86Hce-aeFDaedTnbkbg.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/khula/v1/UGVExGl-Jjs-YPpGv-MZ6w.ttf",
    "800": "'.cs_server_protocol().'fonts.gstatic.com/s/khula/v1/Sccp_oOo8FWgbx5smie7xQ.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/khula/v1/izcPIFyCSd16XI1Ak_Wk7Q.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kite One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kiteone/v4/8ojWmgUc97m0f_i6sTqLoQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Knewave",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/knewave/v5/KGHM4XWr4iKnBMqzZLkPBg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kotta One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kottaone/v4/AB2Q7hVw6niJYDgLvFXu5w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Koulen",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "khmer"
   ],
   "version": "v10",
   "lastModified": "2015-04-06",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/koulen/v10/AAYOK8RSRO7FTskTzFuzNw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kranky",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kranky/v6/C8dxxTS99-fZ84vWk8SDrg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kreon",
   "category": "serif",
   "variants": [
    "300",
    "regular",
    "700"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v9",
   "lastModified": "2015-04-06",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/kreon/v9/HKtJRiq5C2zbq5N1IX32sA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/kreon/v9/jh0dSmaPodjxISiblIUTkw.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kreon/v9/zA_IZt0u0S3cvHJu-n1oEg.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kristi",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kristi/v7/aRsgBQrkQkMlu4UPSnJyOQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Krona One",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kronaone/v4/zcQj4ljqTo166AdourlF9w.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Kurale",
   "category": "serif",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "cyrillic",
    "devanagari",
    "latin"
   ],
   "version": "v1",
   "lastModified": "2015-05-14",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/kurale/v1/rxeyIcvQlT4XAWwNbXFCfw.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "La Belle Aurore",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin"
   ],
   "version": "v7",
   "lastModified": "2015-08-12",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/labelleaurore/v7/Irdbc4ASuUoWDjd_Wc3md123K2iuuhwZgaKapkyRTY8.ttf"
   }


  },
  {
   "kind": "webfonts#webfont",
   "family": "Laila",
   "category": "serif",
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
   "lastModified": "2015-04-01",
   "files": {
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/laila/v1/bLbIVEZF3IWSZ-in72GJvA.ttf",
    "500": "'.cs_server_protocol().'fonts.gstatic.com/s/laila/v1/tkf8VtFvW9g3VsxQCA6WOQ.ttf",
    "600": "'.cs_server_protocol().'fonts.gstatic.com/s/laila/v1/3EMP2L6JRQ4GaHIxCldCeA.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/laila/v1/R7P4z1xjcjecmjZ9GyhqHQ.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/laila/v1/6iYor3edprH7360qtBGoag.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lakki Reddy",
   "category": "handwriting",
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
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/lakkireddy/v3/Q5EpFa91FjW37t0FCnedaKCWcynf_cDxXwCLxiixG1c.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lancelot",
   "category": "display",
   "variants": [
    "regular"
   ],
   "subsets": [
    "latin-ext",
    "latin"
   ],
   "version": "v6",
   "lastModified": "2015-08-12",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/lancelot/v6/XMT7T_oo_MQUGAnU2v-sdA.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lateef",
   "category": "handwriting",
   "variants": [
    "regular"
   ],
   "subsets": [
    "arabic",
    "latin"
   ],
   "version": "v10",
   "lastModified": "2015-04-07",
   "files": {
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/lateef/v10/PAsKCgi1qc7XPwvzo_I-DQ.ttf"
   }
  },
  {
   "kind": "webfonts#webfont",
   "family": "Lato",
   "category": "sans-serif",
   "variants": [
    "100",
    "100italic",
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
   "version": "v11",
   "lastModified": "2015-04-06",
   "files": {
    "100": "'.cs_server_protocol().'fonts.gstatic.com/s/lato/v11/Upp-ka9rLQmHYCsFgwL-eg.ttf",
    "300": "'.cs_server_protocol().'fonts.gstatic.com/s/lato/v11/Ja02qOppOVq9jeRjWekbHg.ttf",
    "700": "'.cs_server_protocol().'fonts.gstatic.com/s/lato/v11/iX_QxBBZLhNj5JHlTzHQzg.ttf",
    "900": "'.cs_server_protocol().'fonts.gstatic.com/s/lato/v11/8TPEV6NbYWZlNsXjbYVv7w.ttf",
    "100italic": "'.cs_server_protocol().'fonts.gstatic.com/s/lato/v11/zLegi10uS_9-fnUDISl0KA.ttf",
    "300italic": "'.cs_server_protocol().'fonts.gstatic.com/s/lato/v11/dVebFcn7EV7wAKwgYestUg.ttf",
    "regular": "'.cs_server_protocol().'fonts.gstatic.com/s/lato/v11/h7rISIcQapZBpei-sXwIwg.ttf",
    "italic": "'.cs_server_protocol().'fonts.gstatic.com/s/lato/v11/P_dJOFJylV3A870UIOtr0w.ttf",
    "700italic": "'.cs_server_protocol().'fonts.gstatic.com/s/lato/v11/WFcZakHrrCKeUJxHA4T_gw.ttf",
    "900italic": "'.cs_server_protocol().'fonts.gstatic.com/s/lato/v11/draWperrI7n2xi35Cl08fA.ttf"
   }
  },';
