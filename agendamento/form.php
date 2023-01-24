<?php include "../includes.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
=======
    <title><?php echo $lang['AGENDAMENTO_TITULO']?></title>
>>>>>>> 6baf67c04cfe5ed8e5da4a263ae0112f78f5e326
    <link rel="stylesheet" href="main.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="mx-auto container">

        <!-- Progress Form -->
        <form id="progress-form" class="p-4 progress-form" method="post" action="submit.php" lang="pt" novalidate>
      
          <!-- Step Navigation -->
          <div class="d-flex align-items-start mb-3 sm:mb-5 progress-form__tabs" role="tablist">
<<<<<<< HEAD
            <button id="progress-form__tab-1" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-1" aria-selected="true">
              <!-- <span class="d-block step" aria-hidden="true">Step 1 <span class="sm:d-none">of 3</span></span>
              Details -->
            </button>
            <button id="progress-form__tab-2" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-2" aria-selected="false" tabindex="-1" aria-disabled="true">
              <!-- <span class="d-block step" aria-hidden="true">Step 2 <span class="sm:d-none">of 3</span></span>
              Shipping -->
            </button>
            <button id="progress-form__tab-3" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-3" aria-selected="false" tabindex="-1" aria-disabled="true">
              <!-- <span class="d-block step" aria-hidden="true">Step 3 <span class="sm:d-none">of 3</span></span>
              Survey -->
            </button>
=======
            <button id="progress-form__tab-1" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-1" aria-selected="true"></button>
            <button id="progress-form__tab-2" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-2" aria-selected="false" tabindex="-1" aria-disabled="true"></button>
            <!-- <button id="progress-form__tab-3" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-3" aria-selected="false" tabindex="-1" aria-disabled="true"></button> -->
>>>>>>> 6baf67c04cfe5ed8e5da4a263ae0112f78f5e326
          </div>
          <!-- / End Step Navigation -->
      
          <!-- Step 1 -->
          <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0">
            <div class="sm:d-grid sm:grid-col-1 sm:mt-3">
              <div class="mt-3 sm:mt-0 form__field">
                <label for="first-name">
                  Nome Completo
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="first-name" type="text" name="nome" autocomplete="given-name" required>
              </div>
      
<<<<<<< HEAD
              
            </div>
      
            <div class="mt-3 form__field">
              <label for="email-address">
                E-mail
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <input id="email-address" type="email" name="email" autocomplete="email" inputmode="email" required>
            </div>
      
            <!-- <div class="mt-1 form__field">
              <label class="form__choice-wrapper">
                <input id="email-newsletter" type="checkbox" name="email-newsletter" value="Yes" checked>
                <span>Yes, I would like to sign up to receive the newsletter</span>
              </label>
            </div> -->
            <div class="mt-3 sm:mt-0 form__field">
                <label for="address-state">
                  Pais
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <select id="address-state" name="id_pais" autocomplete="shipping address-level1" required>
                  <option value="" disabled selected>Selecione</option>
                  <option value="1">
                    <?php echo $lang['AFEGANISTAO']?> </option>
                    <option value="2">
                    <?php echo $lang['ACROTIRI_E_DECELIA']?>  </option>
                    <option value="3">
                    <?php echo $lang['AFRICA_DO_SUL']?>  </option>
                    <option value="4">
                    <?php echo $lang['ALBANIA']?> </option>
                    <option value="5">
                    <?php echo $lang['ALEMANHA']?> </option>
                    <option value="6">
                    <?php echo $lang['AMERICAN_SAMOA']?> </option>
                    <option value="7">
                    <?php echo $lang['ANDORRA']?>  </option>
                    <option value="8">
                    <?php echo $lang['ANGOLA']?> </option>
                    <option value="9">
                    <?php echo $lang['ANGUILLA']?>  </option>
                    <option value="10">
                    <?php echo $lang['ANTIGUA_E_BARBUDA']?></option>
                    <option value="11">
                    <?php echo $lang['ANTILHAS_NEERLANDESAS']?> </option>
                    <option value="12">
                    <?php echo $lang['ARABIA_SAUDITA']?>  </option>
                    <option value="13">
                    <?php echo $lang['ARGELIA']?> </option>
                    <option value="14">
                    <?php echo $lang['ARGENTINA']?> </option>
                    <option value="15">
                    <?php echo $lang['ARMENIA']?></option>
                    <option value="16">
                    <?php echo $lang['ARUBA']?> </option>
                    <option value="17">
                    <?php echo $lang['AUSTRALIA']?> </option>
                    <option value="18">
                    <?php echo $lang['AUSTRIA']?> </option>
                    <option value="19">
                    <?php echo $lang['AZERBAIJAO']?> </option>
                    <option value="20">
                    <?php echo $lang['BAHAMAS']?></option>
                    <option value="21">
                    <?php echo $lang['BANGLADECHE']?></option>
                    <option value="22">
                    <?php echo $lang['BARBADOS']?></option>
                    <option value="23">
                    <?php echo $lang['BAREM']?></option>
                    <option value="24">
                    <?php echo $lang['BASSAS_DA_INDIA']?></option>
                    <option value="25">
                    <?php echo $lang['BELGICA']?> </option>
                    <option value="26">
                    <?php echo $lang['BELIZE']?> </option>
                    <option value="27">
                    <?php echo $lang['BENIM']?> </option>
                    <option value="28">
                    <?php echo $lang['BERMUDAS']?> </option>
                    <option value="29">
                    <?php echo $lang['BIELORRUSSIA']?> </option>
                    <option value="30">
                    <?php echo $lang['BOLIVIA']?> </option>
                    <option value="31">
                    <?php echo $lang['BOSNIA_E_HERZEGOVINA']?> </option>
                    <option value="32">
                    <?php echo $lang['BOTSUANA']?> </option>
                    <option value="33">
                    <?php echo $lang['BRASIL']?> </option>
                    <option value="34">
                    <?php echo $lang['BRUNEI_DARUSSALAM']?> </option>
                    <option value="35">
                    <?php echo $lang['BULGARIA']?> </option>
                    <option value="36">
                    <?php echo $lang['BURQUINA_FASO']?> </option>
                    <option value="37">
                    <?php echo $lang['BURUNDI']?></option>
                    <option value="38">
                    <?php echo $lang['BUTAO']?> </option>
                    <option value="39">
                    <?php echo $lang['CABO_VERDE']?> </option>
                    <option value="40">
                    <?php echo $lang['CAMAROES']?></option>
                    <option value="41">
                    <?php echo $lang['CAMBOJA']?> </option>
                    <option value="42">
                    <?php echo $lang['CANADA']?>  </option>
                    <option value="43">
                    <?php echo $lang['CATAR']?> </option>
                    <option value="44">
                    <?php echo $lang['CAZAQUISTAO']?> </option>
                    <option value="45">
                    <?php echo $lang['CENTRO_AFRICANA_REPUBLICA']?> </option>
                    <option value="46">
                    <?php echo $lang['CHADE']?> </option>
                    <option value="47">
                    <?php echo $lang['CHILE']?> </option>
                    <option value="48">
                    <?php echo $lang['CHINA']?> </option>
                    <option value="49">
                    <?php echo $lang['CHIPRE']?></option>
                    <option value="50">
                    <?php echo $lang['COLOMBIA']?> </option>
                    <option value="51">
                    <?php echo $lang['COMORES']?> </option>
                    <option value="52">
                    <?php echo $lang['CONGO']?> </option>
                    <option value="53">
                    <?php echo $lang['CONGO_REPÚBLICA_DEMOCRATICA']?> </option>
                    <option value="54">
                    <?php echo $lang['COREIA_DO_NORTE']?> </option>
                    <option value="55">
                    <?php echo $lang['COREIA_DO_SUL']?> </option>
                    <option value="56">
                    <?php echo $lang['COSTA_DO_MARFIM']?></option>
                    <option value="57">
                    <?php echo $lang['COSTA_RICA']?> </option>
                    <option value="58">
                    <?php echo $lang['CROACIA']?> </option>
                    <option value="59">
                    <?php echo $lang['CUBA']?> </option>
                    <option value="60">
                    <?php echo $lang['DINAMARCA']?> </option>
                    <option value="61">
                    <?php echo $lang['DOMINICA']?> </option>
                    <option value="62">
                    <?php echo $lang['EGIPTO']?> </option>
                    <option value="63">
                    <?php echo $lang['EMIRADOS_ARABES_UNIDOS']?> </option>
                    <option value="64">
                    <?php echo $lang['EQUADOR']?> </option>
                    <option value="65">
                    <?php echo $lang['ERITREIA']?> </option>
                    <option value="66">
                    <?php echo $lang['ESLOVAQUIA']?></option>
                    <option value="67">
                    <?php echo $lang['ESLOVENIA']?>  </option>
                    <option value="68">
                    <?php echo $lang['ESPANHA']?> </option>
                    <option value="69">
                    <?php echo $lang['ESTADOS_UNIDOS']?> </option>
                    <option value="70">
                    <?php echo $lang['ESTONIA']?> </option>
                    <option value="71">
                    <?php echo $lang['ETIOPIA']?> </option>
                    <option value="72">
                    <?php echo $lang['FAIXA_DE_GAZA']?> </option>
                    <option value="73">
                    <?php echo $lang['FIJI']?></option>
                    <option value="74">
                    <?php echo $lang['FILIPINAS']?> </option>
                    <option value="75">
                    <?php echo $lang['FINLANDIA']?> </option>
                    <option value="76">
                    <?php echo $lang['FRANCA']?> </option>
                    <option value="77">
                    <?php echo $lang['GABAO']?> </option>
                    <option value="78">
                    <?php echo $lang['GAMBIA']?> </option>
                    <option value="79">
                    <?php echo $lang['GANA']?> </option>
                    <option value="80">
                    <?php echo $lang['GEORGIA']?></option>
                    <option value="81">
                    <?php echo $lang['GIBRALTAR']?> </option>
                    <option value="82">
                    <?php echo $lang['GRANADA']?> </option>
                    <option value="83">
                    <?php echo $lang['GRECIA']?></option>
                    <option value="84">
                    <?php echo $lang['GRONELANDIA']?> </option>
                    <option value="85">
                    <?php echo $lang['GUADALUPE']?> </option>
                    <option value="86">
                    <?php echo $lang['GUAM']?></option>
                    <option value="87">
                    <?php echo $lang['GUATEMALA']?></option>
                    <option value="88">
                    <?php echo $lang['GUERNSEY']?></option>
                    <option value="89">
                    <?php echo $lang['GUIANA']?></option>
                    <option value="90">
                    <?php echo $lang['GUIANA_FRANCESA']?>  </option>
                    <option value="91">
                    <?php echo $lang['GUINE']?> </option>
                    <option value="92">
                    <?php echo $lang['GUINE_EQUATORIAL']?></option>
                    <option value="93">
                    <?php echo $lang['GUINE_BISSAU']?> </option>
                    <option value="94">
                    <?php echo $lang['HAITI']?> </option>
                    <option value="95">
                    <?php echo $lang['HONDURAS']?> </option>
                    <option value="96">
                    <?php echo $lang['HONG_KONG']?></option>
                    <option value="97">
                    <?php echo $lang['HUNGRIA']?> </option>
                    <option value="98">
                    <?php echo $lang['IEMEN']?> </option>
                    <option value="99">
                    <?php echo $lang['ILHA_BOUVET']?></option>
                    <option value="100">
                    <?php echo $lang['ILHA_CHRISTMAS']?> </option>
                    <option value="101">
                    <?php echo $lang['ILHA_DE_CLIPPERTON']?> </option>
                    <option value="102">
                    <?php echo $lang['ILHA_DE_JOAO_DA_NOVA']?> </option>
                    <option value="103">
                    <?php echo $lang['ILHA_DE_MAN']?> </option>
                    <option value="104">
                    <?php echo $lang['ILHA_DE_NAVASSA']?> </option>
                    <option value="105">
                    <?php echo $lang['ILHA_EUROPA']?> </option>
                    <option value="106">
                    <?php echo $lang['ILHA_NORFOLK']?> </option>
                    <option value="107">
                    <?php echo $lang['ILHA_TROMELIN']?> </option>
                    <option value="108">
                    <?php echo $lang['ILHAS_ASHMORE_E_CARTIER']?></option>
                    <option value="109">
                    <?php echo $lang['ILHAS_CAIMAN']?>  </option>
                    <option value="110">
                    <?php echo $lang['ILHAS_COCOS_KEELING']?> </option>
                    <option value="111">
                    <?php echo $lang['ILHAS_COOK']?></option>
                    <option value="112">
                    <?php echo $lang['ILHAS_DO_MAR_DE_CORAL']?> </option>
                    <option value="113">
                    <?php echo $lang['ILHAS_FALKLANDS_ILHAS_MALVINAS']?> </option>
                    <option value="114">
                    <?php echo $lang['ILHAS_FEROE']?>  </option>
                    <option value="115">
                    <?php echo $lang['ILHAS_GEORGIA_DO_SUL_E_SANDWICH_DO_SUL']?>  </option>
                    <option value="116">
                    <?php echo $lang['ILHAS_MARIANAS_DO_NORTE']?>  </option>
                    <option value="117">
                    <?php echo $lang['ILHAS_MARSHALL']?></option>
                    <option value="118">
                    <?php echo $lang['ILHAS_PARACEL']?> </option>
                    <option value="119">
                    <?php echo $lang['ILHAS_PITCAIRN']?></option>
                    <option value="120">
                    <?php echo $lang['ILHAS_SALOMAO']?></option>
                    <option value="121">
                    <?php echo $lang['ILHAS_SPRATLY']?></option>
                    <option value="122">
                    <?php echo $lang['ILHAS_VIRGENS AMERICANAS']?>  </option>
                    <option value="123">
                    <?php echo $lang['ILHAS_VIRGENS BRITANICAS']?> </option>
                    <option value="124">
                    <?php echo $lang['INDIA']?> </option>
                    <option value="125">
                    <?php echo $lang['INDONÉSIA']?></option>
                    <option value="126">
                    <?php echo $lang['IRAO']?> </option>
                    <option value="127">
                    <?php echo $lang['IRAQUE']?> </option>
                    <option value="128">
                    <?php echo $lang['IRLANDA']?></option>
                    <option value="129">
                    <?php echo $lang['ISLANDIA']?> </option>
                    <option value="130">
                    <?php echo $lang['ISRAEL']?>  </option>
                    <option value="131">
                    <?php echo $lang['ITALIA']?>  </option>
                    <option value="132">
                    <?php echo $lang['JAMAICA']?> </option>
                    <option value="133">
                    <?php echo $lang['JAN_MAYEN']?> </option>
                    <option value="134">
                    <?php echo $lang['JAPAO']?>  </option>
                    <option value="135">
                    <?php echo $lang['JERSEY']?>  </option>
                    <option value="136">
                    <?php echo $lang['JIBUTI']?></option>
                    <option value="137">
                    <?php echo $lang['JORDANIA']?> </option>
                    <option value="138">
                    <?php echo $lang['KIRIBATI']?> </option>
                    <option value="139">
                    <?php echo $lang['KOWEIT']?></option>
                    <option value="140">
                    <?php echo $lang['LAOS']?></option>
                    <option value="141">
                    <?php echo $lang['LESOTO']?> </option>
                    <option value="142">
                    <?php echo $lang['LETONIA']?>  </option>
                    <option value="143">
                    <?php echo $lang['LIBANO']?> </option>
                    <option value="144">
                    <?php echo $lang['LIBERIA']?></option>
                    <option value="145">
                    <?php echo $lang['LIBIA']?> </option>
                    <option value="146">
                    <?php echo $lang['LISTENSTAINE']?> </option>
                    <option value="147">
                    <?php echo $lang['LITUANIA']?>  </option>
                    <option value="148">
                    <?php echo $lang['LUXEMBURGO']?> </option>
                    <option value="149">
                    <?php echo $lang['MACAU']?> </option>
                    <option value="150">
                    <?php echo $lang['MACEDONIA']?>  </option>
                    <option value="151">
                    <?php echo $lang['MADAGASCAR']?>  </option>
                    <option value="152">
                    <?php echo $lang['MALASIA']?></option>
                    <option value="153">
                    <?php echo $lang['MALAVI']?> </option>
                    <option value="154">
                    <?php echo $lang['MALDIVAS']?></option>
                    <option value="155">
                    <?php echo $lang['MALI']?></option>
                    <option value="156">
                    <?php echo $lang['MALTA']?> </option>
                    <option value="157">
                    <?php echo $lang['MARROCOS']?> </option>
                    <option value="158">
                    <?php echo $lang['MARTINICA']?> </option>
                    <option value="159">
                    <?php echo $lang['MAURICIA']?> </option>
                    <option value="160">
                    <?php echo $lang['MAURITANIA']?>  </option>
                    <option value="161">
                    <?php echo $lang['MAYOTTE']?>  </option>
                    <option value="162">
                    <?php echo $lang['MEXICO']?> </option>
                    <option value="163">
                    <?php echo $lang['MIANMAR']?></option>
                    <option value="164">
                    <?php echo $lang['MICRONESIA']?></option>
                    <option value="165">
                    <?php echo $lang['MOCAMBIQUE']?> </option>
                    <option value="166">
                    <?php echo $lang['MOLDAVIA']?> </option>
                    <option value="167">
                    <?php echo $lang['MONACO']?> </option>
                    <option value="168">
                    <?php echo $lang['MONGOLIA']?> </option>
                    <option value="169">
                    <?php echo $lang['MONTENEGRO']?>  </option>
                    <option value="170">
                    <?php echo $lang['MONTSERRAT']?> </option>
                    <option value="171">
                    <?php echo $lang['NAMIBIA']?> </option>
                    <option value="172">
                    <?php echo $lang['NAURU']?> </option>
                    <option value="173">
                    <?php echo $lang['NEPAL']?> </option>
                    <option value="174">
                    <?php echo $lang['NICARAGUA']?> </option>
                    <option value="175">
                    <?php echo $lang['NIGER']?> </option>
                    <option value="176">
                    <?php echo $lang['NIGERIA']?> </option>
                    <option value="177">
                    <?php echo $lang['NIUE']?> </option>
                    <option value="178">
                    <?php echo $lang['NORUEGA']?> </option>
                    <option value="179">
                    <?php echo $lang['NOVA_CALEDÓNIA']?> </option>
                    <option value="180">
                    <?php echo $lang['NOVA_ZELÂNDIA']?> </option>
                    <option value="181">
                    <?php echo $lang['OMA']?> </option>
                    <option value="182">
                    <?php echo $lang['PAISES_BAIXOS']?></option>
                    <option value="183">
                    <?php echo $lang['PALAU']?> </option>
                    <option value="184">
                    <?php echo $lang['PALESTINA']?> </option>
                    <option value="185">
                    <?php echo $lang['PANAMA']?> </option>
                    <option value="186">
                    <?php echo $lang['PAPUASIA_NOVA_GUINE']?> </option>
                    <option value="187">
                    <?php echo $lang['PAQUISTAO']?> </option>
                    <option value="188">
                    <?php echo $lang['PARAGUAI']?></option>
                    <option value="189">
                    <?php echo $lang['PERU']?>  </option>
                    <option value="190">
                    <?php echo $lang['POLINESIA_FRANCESA']?> </option>
                    <option value="191">
                    <?php echo $lang['POLONIA']?> </option>
                    <option value="192">
                    <?php echo $lang['PORTO_RICO']?></option>
                    <option value="193">
                    <?php echo $lang['PORTUGAL']?>  </option>
                    <option value="194">
                    <?php echo $lang['QUENIA']?></option>
                    <option value="195">
                    <?php echo $lang['QUIRGUIZISTAO']?> </option>
                    <option value="196">
                    <?php echo $lang['REINO_UNIDO']?></option>
                    <option value="197">
                    <?php echo $lang['REPUBLICA_CHECA']?></option>
                    <option value="198">
                    <?php echo $lang['REPUBLICA_DOMINICANA']?> </option>
                    <option value="199">
                    <?php echo $lang['ROMENIA']?></option>
                    <option value="200">
                    <?php echo $lang['RUANDA']?> </option>
                    <option value="201">
                    <?php echo $lang['RUSSIA']?>  </option>
                    <option value="202">
                    <?php echo $lang['SAHARA_OCCIDENTAL']?> </option>
                    <option value="203">
                    <?php echo $lang['SALVADOR']?> </option>
                    <option value="204">
                    <?php echo $lang['SAMOA']?> </option>
                    <option value="205">
                    <?php echo $lang['SANTA_HELENA']?> </option>
                    <option value="206">
                    <?php echo $lang['SANTA_LUCIA']?></option>
                    <option value="207">
                    <?php echo $lang['SANTA_SE']?> </option>
                    <option value="208">
                    <?php echo $lang['SAO_CRISTOVAO_E_NEVES']?> </option>
                    <option value="209">
                    <?php echo $lang['SAO_MARINO']?> </option>
                    <option value="210">
                    <?php echo $lang['SAO_PEDRO_E_MIQUELAO']?> </option>
                    <option value="211">
                    <?php echo $lang['SAO_TOME_E_PRINCIPE']?>  </option>
                    <option value="212">
                    <?php echo $lang['SAO_VICENTE_E_GRANADINAS']?>  </option>
                    <option value="213">
                    <?php echo $lang['SEICHELES']?> </option>
                    <option value="214">
                    <?php echo $lang['SENEGAL']?> </option>
                    <option value="215">
                    <?php echo $lang['SERRA_LEOA']?> </option>
                    <option value="216">
                    <?php echo $lang['SERVIA']?> </option>
                    <option value="217">
                    <?php echo $lang['SINGAPURA']?> </option>
                    <option value="218">
                    <?php echo $lang['SIRIA']?></option>
                    <option value="219">
                    <?php echo $lang['SOMALIA']?> </option>
                    <option value="220">
                    <?php echo $lang['SRI_LANCA']?> </option>
                    <option value="221">
                    <?php echo $lang['SUAZILANDIA']?> </option>
                    <option value="222">
                    <?php echo $lang['SUDAO']?> </option>
                    <option value="223">
                    <?php echo $lang['SUECIA']?></option>
                    <option value="224">
                    <?php echo $lang['SUICA']?> </option>
                    <option value="225">
                    <?php echo $lang['SURINAME']?> </option>
                    <option value="226">
                    <?php echo $lang['SVALBARD']?></option>
                    <option value="227">
                    <?php echo $lang['TAILANDIA']?> </option>
                    <option value="228">
                    <?php echo $lang['TAIWAN']?> </option>
                    <option value="229">
                    <?php echo $lang['TAJIQUISTAO']?></option>
                    <option value="230">
                    <?php echo $lang['TANZANIA']?> </option>
                    <option value="231">
                    <?php echo $lang['TERRITORIO_BRITANICO_DO_OCEANO_INDICO']?> </option>
                    <option value="232">
                    <?php echo $lang['TERRITORIO_DAS_ILHAS_HEARD_E_MCDONALD']?> </option>
                    <option value="233">
                    <?php echo $lang['TIMOR_LESTE']?>  </option>
                    <option value="234">
                    <?php echo $lang['TOGO']?></option>
                    <option value="235">
                    <?php echo $lang['TOKELAU']?>  </option>
                    <option value="236">
                    <?php echo $lang['TONGA']?>  </option>
                    <option value="237">
                    <?php echo $lang['TRINDADE_E_TOBAGO']?> </option>
                    <option value="238">
                    <?php echo $lang['TUNISIA']?>  </option>
                    <option value="239">
                    <?php echo $lang['TURKS_E_CAICOS']?></option>
                    <option value="240">
                    <?php echo $lang['TURQUEMENISTAO']?> </option>
                    <option value="241">
                    <?php echo $lang['TURQUIA']?> </option>
                    <option value="242">
                    <?php echo $lang['TUVALU']?> </option>
                    <option value="243">
                    <?php echo $lang['UCRANIA']?> </option>
                    <option value="244">
                    <?php echo $lang['UGANDA']?> </option>
                    <option value="245">
                    <?php echo $lang['URUGUAI']?> </option>
                    <option value="246">
                    <?php echo $lang['USBEQUISTAO']?>  </option>
                    <option value="247">
                    <?php echo $lang['VANUATU']?></option>
                    <option value="248">
                    <?php echo $lang['VENEZUELA']?> </option>
                    <option value="249">
                    <?php echo $lang['VIETNAME']?></option>
                    <option value="250">
                    <?php echo $lang['WALLIS_E_FUTUNA']?></option>
                    <option value="251">
                    <?php echo $lang['ZAMBIA']?> </option>
                    <option value="252">
                    <?php echo $lang['ZIMBABUE']?></option>
                </select>
              </div>
            <div class="mt-3 form__field">
              <label for="phone-number">
              Telefone (Whatsapp)
              </label>
              <input id="phone-number" type="tel" name="telefone" autocomplete="tel" inputmode="tel">
            </div>
      
            <div class="d-flex align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
              <button type="button" data-action="next">
                Continue
              </button>
            </div>
          </section>
          <!-- / End Step 1 -->
      
          <!-- Step 2 -->
          <section id="progress-form__panel-2" role="tabpanel" aria-labelledby="progress-form__tab-2" tabindex="0" hidden>
            <div class="mt-3 form__field">
              <label for="address">
                Address
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <input id="address" type="text" name="address" autocomplete="shipping address-line1" required>
            </div>
      
            <div class="mt-3 form__field">
              <label for="address-2">
                Apartment or suite (optional)
              </label>
              <input id="address-2" type="text" name="address-2" autocomplete="shipping address-line2">
            </div>
      
            <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
              <div class="mt-3 sm:mt-0 form__field">
                <label for="address-city">
                  City
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="address-city" type="text" name="address-city" autocomplete="shipping address-level2" required>
              </div>
      
              <div class="mt-3 sm:mt-0 form__field">
                <label for="address-state">
                  State
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <select id="address-state" name="address-state" autocomplete="shipping address-level1" required>
=======
              <div class="mt-3 sm:mt-0 form__field">
                <label for="last-name">
                  Nacionalidade
                  <span data-required="true" aria-hidden="true"></span>
                </label>
               <select id="address-state" name="pais" autocomplete="shipping address-level1" required>
>>>>>>> 6baf67c04cfe5ed8e5da4a263ae0112f78f5e326
                  <option value="" disabled selected>Please select</option>
                  <option value="1">
                  <?php echo $lang['AFEGANISTAO']?> </option>
                    <option value="2">
                    <?php echo $lang['ACROTIRI_E_DECELIA']?>  </option>
                    <option value="3">
                    <?php echo $lang['AFRICA_DO_SUL']?>  </option>
                    <option value="4">
                    <?php echo $lang['ALBANIA']?> </option>
                    <option value="5">
                    <?php echo $lang['ALEMANHA']?> </option>
                    <option value="6">
                    <?php echo $lang['AMERICAN_SAMOA']?> </option>
                    <option value="7">
                    <?php echo $lang['ANDORRA']?>  </option>
                    <option value="8">
                    <?php echo $lang['ANGOLA']?> </option>
                    <option value="9">
                    <?php echo $lang['ANGUILLA']?>  </option>
                    <option value="10">
                    <?php echo $lang['ANTIGUA_E_BARBUDA']?></option>
                    <option value="11">
                    <?php echo $lang['ANTILHAS_NEERLANDESAS']?> </option>
                    <option value="12">
                    <?php echo $lang['ARABIA_SAUDITA']?>  </option>
                    <option value="13">
                    <?php echo $lang['ARGELIA']?> </option>
                    <option value="14">
                    <?php echo $lang['ARGENTINA']?> </option>
                    <option value="15">
                    <?php echo $lang['ARMENIA']?></option>
                    <option value="16">
                    <?php echo $lang['ARUBA']?> </option>
                    <option value="17">
                    <?php echo $lang['AUSTRALIA']?> </option>
                    <option value="18">
                    <?php echo $lang['AUSTRIA']?> </option>
                    <option value="19">
                    <?php echo $lang['AZERBAIJAO']?> </option>
                    <option value="20">
                    <?php echo $lang['BAHAMAS']?></option>
                    <option value="21">
                    <?php echo $lang['BANGLADECHE']?></option>
                    <option value="22">
                    <?php echo $lang['BARBADOS']?></option>
                    <option value="23">
                    <?php echo $lang['BAREM']?></option>
                    <option value="24">
                    <?php echo $lang['BASSAS_DA_INDIA']?></option>
                    <option value="25">
                    <?php echo $lang['BELGICA']?> </option>
                    <option value="26">
                    <?php echo $lang['BELIZE']?> </option>
                    <option value="27">
                    <?php echo $lang['BENIM']?> </option>
                    <option value="28">
                    <?php echo $lang['BERMUDAS']?> </option>
                    <option value="29">
                    <?php echo $lang['BIELORRUSSIA']?> </option>
                    <option value="30">
                    <?php echo $lang['BOLIVIA']?> </option>
                    <option value="31">
                    <?php echo $lang['BOSNIA_E_HERZEGOVINA']?> </option>
                    <option value="32">
                    <?php echo $lang['BOTSUANA']?> </option>
                    <option value="33" selected="">
                    <?php echo $lang['BRASIL']?> </option>
                    <option value="34">
                    <?php echo $lang['BRUNEI_DARUSSALAM']?> </option>
                    <option value="35">
                    <?php echo $lang['BULGARIA']?> </option>
                    <option value="36">
                    <?php echo $lang['BURQUINA_FASO']?> </option>
                    <option value="37">
                    <?php echo $lang['BURUNDI']?></option>
                    <option value="38">
                    <?php echo $lang['BUTAO']?> </option>
                    <option value="39">
                    <?php echo $lang['CABO_VERDE']?> </option>
                    <option value="40">
                    <?php echo $lang['CAMAROES']?></option>
                    <option value="41">
                    <?php echo $lang['CAMBOJA']?> </option>
                    <option value="42">
                    <?php echo $lang['CANADA']?>  </option>
                    <option value="43">
                    <?php echo $lang['CATAR']?> </option>
                    <option value="44">
                    <?php echo $lang['CAZAQUISTAO']?> </option>
                    <option value="45">
                    <?php echo $lang['CENTRO_AFRICANA_REPUBLICA']?> </option>
                    <option value="46">
                    <?php echo $lang['CHADE']?> </option>
                    <option value="47">
                    <?php echo $lang['CHILE']?> </option>
                    <option value="48">
                    <?php echo $lang['CHINA']?> </option>
                    <option value="49">
                    <?php echo $lang['CHIPRE']?></option>
                    <option value="50">
                    <?php echo $lang['COLOMBIA']?> </option>
                    <option value="51">
                    <?php echo $lang['COMORES']?> </option>
                    <option value="52">
                    <?php echo $lang['CONGO']?> </option>
                    <option value="53">
                    <?php echo $lang['CONGO_REPÚBLICA_DEMOCRATICA']?> </option>
                    <option value="54">
                    <?php echo $lang['COREIA_DO_NORTE']?> </option>
                    <option value="55">
                    <?php echo $lang['COREIA_DO_SUL']?> </option>
                    <option value="56">
                    <?php echo $lang['COSTA_DO_MARFIM']?></option>
                    <option value="57">
                    <?php echo $lang['COSTA_RICA']?> </option>
                    <option value="58">
                    <?php echo $lang['CROACIA']?> </option>
                    <option value="59">
                    <?php echo $lang['CUBA']?> </option>
                    <option value="60">
                    <?php echo $lang['DINAMARCA']?> </option>
                    <option value="61">
                    <?php echo $lang['DOMINICA']?> </option>
                    <option value="62">
                    <?php echo $lang['EGIPTO']?> </option>
                    <option value="63">
                    <?php echo $lang['EMIRADOS_ARABES_UNIDOS']?> </option>
                    <option value="64">
                    <?php echo $lang['EQUADOR']?> </option>
                    <option value="65">
                    <?php echo $lang['ERITREIA']?> </option>
                    <option value="66">
                    <?php echo $lang['ESLOVAQUIA']?></option>
                    <option value="67">
                    <?php echo $lang['ESLOVENIA']?>  </option>
                    <option value="68">
                    <?php echo $lang['ESPANHA']?> </option>
                    <option value="69">
                    <?php echo $lang['ESTADOS_UNIDOS']?> </option>
                    <option value="70">
                    <?php echo $lang['ESTONIA']?> </option>
                    <option value="71">
                    <?php echo $lang['ETIOPIA']?> </option>
                    <option value="72">
                    <?php echo $lang['FAIXA_DE_GAZA']?> </option>
                    <option value="73">
                    <?php echo $lang['FIJI']?></option>
                    <option value="74">
                    <?php echo $lang['FILIPINAS']?> </option>
                    <option value="75">
                    <?php echo $lang['FINLANDIA']?> </option>
                    <option value="76">
                    <?php echo $lang['FRANCA']?> </option>
                    <option value="77">
                    <?php echo $lang['GABAO']?> </option>
                    <option value="78">
                    <?php echo $lang['GAMBIA']?> </option>
                    <option value="79">
                    <?php echo $lang['GANA']?> </option>
                    <option value="80">
                    <?php echo $lang['GEORGIA']?></option>
                    <option value="81">
                    <?php echo $lang['GIBRALTAR']?> </option>
                    <option value="82">
                    <?php echo $lang['GRANADA']?> </option>
                    <option value="83">
                    <?php echo $lang['GRECIA']?></option>
                    <option value="84">
                    <?php echo $lang['GRONELANDIA']?> </option>
                    <option value="85">
                    <?php echo $lang['GUADALUPE']?> </option>
                    <option value="86">
                    <?php echo $lang['GUAM']?></option>
                    <option value="87">
                    <?php echo $lang['GUATEMALA']?></option>
                    <option value="88">
                    <?php echo $lang['GUERNSEY']?></option>
                    <option value="89">
                    <?php echo $lang['GUIANA']?></option>
                    <option value="90">
                    <?php echo $lang['GUIANA_FRANCESA']?>  </option>
                    <option value="91">
                    <?php echo $lang['GUINE']?> </option>
                    <option value="92">
                    <?php echo $lang['GUINE_EQUATORIAL']?></option>
                    <option value="93">
                    <?php echo $lang['GUINE_BISSAU']?> </option>
                    <option value="94">
                    <?php echo $lang['HAITI']?> </option>
                    <option value="95">
                    <?php echo $lang['HONDURAS']?> </option>
                    <option value="96">
                    <?php echo $lang['HONG_KONG']?></option>
                    <option value="97">
                    <?php echo $lang['HUNGRIA']?> </option>
                    <option value="98">
                    <?php echo $lang['IEMEN']?> </option>
                    <option value="99">
                    <?php echo $lang['ILHA_BOUVET']?></option>
                    <option value="100">
                    <?php echo $lang['ILHA_CHRISTMAS']?> </option>
                    <option value="101">
                    <?php echo $lang['ILHA_DE_CLIPPERTON']?> </option>
                    <option value="102">
                    <?php echo $lang['ILHA_DE_JOAO_DA_NOVA']?> </option>
                    <option value="103">
                    <?php echo $lang['ILHA_DE_MAN']?> </option>
                    <option value="104">
                    <?php echo $lang['ILHA_DE_NAVASSA']?> </option>
                    <option value="105">
                    <?php echo $lang['ILHA_EUROPA']?> </option>
                    <option value="106">
                    <?php echo $lang['ILHA_NORFOLK']?> </option>
                    <option value="107">
                    <?php echo $lang['ILHA_TROMELIN']?> </option>
                    <option value="108">
                    <?php echo $lang['ILHAS_ASHMORE_E_CARTIER']?></option>
                    <option value="109">
                    <?php echo $lang['ILHAS_CAIMAN']?>  </option>
                    <option value="110">
                    <?php echo $lang['ILHAS_COCOS_KEELING']?> </option>
                    <option value="111">
                    <?php echo $lang['ILHAS_COOK']?></option>
                    <option value="112">
                    <?php echo $lang['ILHAS_DO_MAR_DE_CORAL']?> </option>
                    <option value="113">
                    <?php echo $lang['ILHAS_FALKLANDS_ILHAS_MALVINAS']?> </option>
                    <option value="114">
                    <?php echo $lang['ILHAS_FEROE']?>  </option>
                    <option value="115">
                    <?php echo $lang['ILHAS_GEORGIA_DO_SUL_E_SANDWICH_DO_SUL']?>  </option>
                    <option value="116">
                    <?php echo $lang['ILHAS_MARIANAS_DO_NORTE']?>  </option>
                    <option value="117">
                    <?php echo $lang['ILHAS_MARSHALL']?></option>
                    <option value="118">
                    <?php echo $lang['ILHAS_PARACEL']?> </option>
                    <option value="119">
                    <?php echo $lang['ILHAS_PITCAIRN']?></option>
                    <option value="120">
                    <?php echo $lang['ILHAS_SALOMAO']?></option>
                    <option value="121">
                    <?php echo $lang['ILHAS_SPRATLY']?></option>
                    <option value="122">
                    <?php echo $lang['ILHAS_VIRGENS AMERICANAS']?>  </option>
                    <option value="123">
                    <?php echo $lang['ILHAS_VIRGENS BRITANICAS']?> </option>
                    <option value="124">
                    <?php echo $lang['INDIA']?> </option>
                    <option value="125">
                    <?php echo $lang['INDONÉSIA']?></option>
                    <option value="126">
                    <?php echo $lang['IRAO']?> </option>
                    <option value="127">
                    <?php echo $lang['IRAQUE']?> </option>
                    <option value="128">
                    <?php echo $lang['IRLANDA']?></option>
                    <option value="129">
                    <?php echo $lang['ISLANDIA']?> </option>
                    <option value="130">
                    <?php echo $lang['ISRAEL']?>  </option>
                    <option value="131">
                    <?php echo $lang['ITALIA']?>  </option>
                    <option value="132">
                    <?php echo $lang['JAMAICA']?> </option>
                    <option value="133">
                    <?php echo $lang['JAN_MAYEN']?> </option>
                    <option value="134">
                    <?php echo $lang['JAPAO']?>  </option>
                    <option value="135">
                    <?php echo $lang['JERSEY']?>  </option>
                    <option value="136">
                    <?php echo $lang['JIBUTI']?></option>
                    <option value="137">
                    <?php echo $lang['JORDANIA']?> </option>
                    <option value="138">
                    <?php echo $lang['KIRIBATI']?> </option>
                    <option value="139">
                    <?php echo $lang['KOWEIT']?></option>
                    <option value="140">
                    <?php echo $lang['LAOS']?></option>
                    <option value="141">
                    <?php echo $lang['LESOTO']?> </option>
                    <option value="142">
                    <?php echo $lang['LETONIA']?>  </option>
                    <option value="143">
                    <?php echo $lang['LIBANO']?> </option>
                    <option value="144">
                    <?php echo $lang['LIBERIA']?></option>
                    <option value="145">
                    <?php echo $lang['LIBIA']?> </option>
                    <option value="146">
                    <?php echo $lang['LISTENSTAINE']?> </option>
                    <option value="147">
                    <?php echo $lang['LITUANIA']?>  </option>
                    <option value="148">
                    <?php echo $lang['LUXEMBURGO']?> </option>
                    <option value="149">
                    <?php echo $lang['MACAU']?> </option>
                    <option value="150">
                    <?php echo $lang['MACEDONIA']?>  </option>
                    <option value="151">
                    <?php echo $lang['MADAGASCAR']?>  </option>
                    <option value="152">
                    <?php echo $lang['MALASIA']?></option>
                    <option value="153">
                    <?php echo $lang['MALAVI']?> </option>
                    <option value="154">
                    <?php echo $lang['MALDIVAS']?></option>
                    <option value="155">
                    <?php echo $lang['MALI']?></option>
                    <option value="156">
                    <?php echo $lang['MALTA']?> </option>
                    <option value="157">
                    <?php echo $lang['MARROCOS']?> </option>
                    <option value="158">
                    <?php echo $lang['MARTINICA']?> </option>
                    <option value="159">
                    <?php echo $lang['MAURICIA']?> </option>
                    <option value="160">
                    <?php echo $lang['MAURITANIA']?>  </option>
                    <option value="161">
                    <?php echo $lang['MAYOTTE']?>  </option>
                    <option value="162">
                    <?php echo $lang['MEXICO']?> </option>
                    <option value="163">
                    <?php echo $lang['MIANMAR']?></option>
                    <option value="164">
                    <?php echo $lang['MICRONESIA']?></option>
                    <option value="165">
                    <?php echo $lang['MOCAMBIQUE']?> </option>
                    <option value="166">
                    <?php echo $lang['MOLDAVIA']?> </option>
                    <option value="167">
                    <?php echo $lang['MONACO']?> </option>
                    <option value="168">
                    <?php echo $lang['MONGOLIA']?> </option>
                    <option value="169">
                    <?php echo $lang['MONTENEGRO']?>  </option>
                    <option value="170">
                    <?php echo $lang['MONTSERRAT']?> </option>
                    <option value="171">
                    <?php echo $lang['NAMIBIA']?> </option>
                    <option value="172">
                    <?php echo $lang['NAURU']?> </option>
                    <option value="173">
                    <?php echo $lang['NEPAL']?> </option>
                    <option value="174">
                    <?php echo $lang['NICARAGUA']?> </option>
                    <option value="175">
                    <?php echo $lang['NIGER']?> </option>
                    <option value="176">
                    <?php echo $lang['NIGERIA']?> </option>
                    <option value="177">
                    <?php echo $lang['NIUE']?> </option>
                    <option value="178">
                    <?php echo $lang['NORUEGA']?> </option>
                    <option value="179">
                    <?php echo $lang['NOVA_CALEDÓNIA']?> </option>
                    <option value="180">
                    <?php echo $lang['NOVA_ZELÂNDIA']?> </option>
                    <option value="181">
                    <?php echo $lang['OMA']?> </option>
                    <option value="182">
                    <?php echo $lang['PAISES_BAIXOS']?></option>
                    <option value="183">
                    <?php echo $lang['PALAU']?> </option>
                    <option value="184">
                    <?php echo $lang['PALESTINA']?> </option>
                    <option value="185">
                    <?php echo $lang['PANAMA']?> </option>
                    <option value="186">
                    <?php echo $lang['PAPUASIA_NOVA_GUINE']?> </option>
                    <option value="187">
                    <?php echo $lang['PAQUISTAO']?> </option>
                    <option value="188">
                    <?php echo $lang['PARAGUAI']?></option>
                    <option value="189">
                    <?php echo $lang['PERU']?>  </option>
                    <option value="190">
                    <?php echo $lang['POLINESIA_FRANCESA']?> </option>
                    <option value="191">
                    <?php echo $lang['POLONIA']?> </option>
                    <option value="192">
                    <?php echo $lang['PORTO_RICO']?></option>
                    <option value="193">
                    <?php echo $lang['PORTUGAL']?>  </option>
                    <option value="194">
                    <?php echo $lang['QUENIA']?></option>
                    <option value="195">
                    <?php echo $lang['QUIRGUIZISTAO']?> </option>
                    <option value="196">
                    <?php echo $lang['REINO_UNIDO']?></option>
                    <option value="197">
                    <?php echo $lang['REPUBLICA_CHECA']?></option>
                    <option value="198">
                    <?php echo $lang['REPUBLICA_DOMINICANA']?> </option>
                    <option value="199">
                    <?php echo $lang['ROMENIA']?></option>
                    <option value="200">
                    <?php echo $lang['RUANDA']?> </option>
                    <option value="201">
                    <?php echo $lang['RUSSIA']?>  </option>
                    <option value="202">
                    <?php echo $lang['SAHARA_OCCIDENTAL']?> </option>
                    <option value="203">
                    <?php echo $lang['SALVADOR']?> </option>
                    <option value="204">
                    <?php echo $lang['SAMOA']?> </option>
                    <option value="205">
                    <?php echo $lang['SANTA_HELENA']?> </option>
                    <option value="206">
                    <?php echo $lang['SANTA_LUCIA']?></option>
                    <option value="207">
                    <?php echo $lang['SANTA_SE']?> </option>
                    <option value="208">
                    <?php echo $lang['SAO_CRISTOVAO_E_NEVES']?> </option>
                    <option value="209">
                    <?php echo $lang['SAO_MARINO']?> </option>
                    <option value="210">
                    <?php echo $lang['SAO_PEDRO_E_MIQUELAO']?> </option>
                    <option value="211">
                    <?php echo $lang['SAO_TOME_E_PRINCIPE']?>  </option>
                    <option value="212">
                    <?php echo $lang['SAO_VICENTE_E_GRANADINAS']?>  </option>
                    <option value="213">
                    <?php echo $lang['SEICHELES']?> </option>
                    <option value="214">
                    <?php echo $lang['SENEGAL']?> </option>
                    <option value="215">
                    <?php echo $lang['SERRA_LEOA']?> </option>
                    <option value="216">
                    <?php echo $lang['SERVIA']?> </option>
                    <option value="217">
                    <?php echo $lang['SINGAPURA']?> </option>
                    <option value="218">
                    <?php echo $lang['SIRIA']?></option>
                    <option value="219">
                    <?php echo $lang['SOMALIA']?> </option>
                    <option value="220">
                    <?php echo $lang['SRI_LANCA']?> </option>
                    <option value="221">
                    <?php echo $lang['SUAZILANDIA']?> </option>
                    <option value="222">
                    <?php echo $lang['SUDAO']?> </option>
                    <option value="223">
                    <?php echo $lang['SUECIA']?></option>
                    <option value="224">
                    <?php echo $lang['SUICA']?> </option>
                    <option value="225">
                    <?php echo $lang['SURINAME']?> </option>
                    <option value="226">
                    <?php echo $lang['SVALBARD']?></option>
                    <option value="227">
                    <?php echo $lang['TAILANDIA']?> </option>
                    <option value="228">
                    <?php echo $lang['TAIWAN']?> </option>
                    <option value="229">
                    <?php echo $lang['TAJIQUISTAO']?></option>
                    <option value="230">
                    <?php echo $lang['TANZANIA']?> </option>
                    <option value="231">
                    <?php echo $lang['TERRITORIO_BRITANICO_DO_OCEANO_INDICO']?> </option>
                    <option value="232">
                    <?php echo $lang['TERRITORIO_DAS_ILHAS_HEARD_E_MCDONALD']?> </option>
                    <option value="233">
                    <?php echo $lang['TIMOR_LESTE']?>  </option>
                    <option value="234">
                    <?php echo $lang['TOGO']?></option>
                    <option value="235">
                    <?php echo $lang['TOKELAU']?>  </option>
                    <option value="236">
                    <?php echo $lang['TONGA']?>  </option>
                    <option value="237">
                    <?php echo $lang['TRINDADE_E_TOBAGO']?> </option>
                    <option value="238">
                    <?php echo $lang['TUNISIA']?>  </option>
                    <option value="239">
                    <?php echo $lang['TURKS_E_CAICOS']?></option>
                    <option value="240">
                    <?php echo $lang['TURQUEMENISTAO']?> </option>
                    <option value="241">
                    <?php echo $lang['TURQUIA']?> </option>
                    <option value="242">
                    <?php echo $lang['TUVALU']?> </option>
                    <option value="243">
                    <?php echo $lang['UCRANIA']?> </option>
                    <option value="244">
                    <?php echo $lang['UGANDA']?> </option>
                    <option value="245">
                    <?php echo $lang['URUGUAI']?> </option>
                    <option value="246">
                    <?php echo $lang['USBEQUISTAO']?>  </option>
                    <option value="247">
                    <?php echo $lang['VANUATU']?></option>
                    <option value="248">
                    <?php echo $lang['VENEZUELA']?> </option>
                    <option value="249">
                    <?php echo $lang['VIETNAME']?></option>
                    <option value="250">
                    <?php echo $lang['WALLIS_E_FUTUNA']?></option>
                    <option value="251">
                    <?php echo $lang['ZAMBIA']?> </option>
                    <option value="252">
                    <?php echo $lang['ZIMBABUE']?></option>
                </select>
              </div>
            </div>
      
            <div class="mt-3 form__field">
              <label for="email-address">
                E-mail 
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <input id="email-address" type="email" name="email" autocomplete="email" inputmode="email" required>
            </div>
      
            <!-- <div class="mt-1 form__field">
              <label class="form__choice-wrapper">
                <input id="email-newsletter" type="checkbox" name="email-newsletter" value="Yes" checked>
                <span>Yes, I would like to sign up to receive the newsletter</span>
              </label>
            </div> -->
      
            <div class="mt-3 form__field">
              <label for="phone-number">
                Telefone(Whatsapp)
              </label>
              <input id="phone-number" type="tel" name="telefone" autocomplete="tel" inputmode="tel">
            </div>
      
            <div class="d-flex align-items-right justify-end sm:justify-end mt-4 sm:mt-5">
              <button type="button" data-action="next">
                Continue
              </button>
            </div>
          </section>
          <!-- / End Step 1 -->
      
          <!-- Step 2 -->
          <section id="progress-form__panel-2" role="tabpanel" aria-labelledby="progress-form__tab-2" tabindex="0" hidden>
            <div class="mt-3 form__field">
              <label for="address">
                Solicitante
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <input id="address" type="text" name="solicitante" autocomplete="shipping address-line1" required>
            </div>
      
            <div class="mt-3 form__field">
              <label for="address-2">
                Serviço
              </label>
              <input id="address-2" type="text" name="address-2" autocomplete="shipping address-line2">
            </div>
      
            <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
              <div class="mt-3 sm:mt-0 form__field">
                <label for="address-city">
                  Datas Disponíveis
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="address-city" type="text" name="address-city" autocomplete="shipping address-level2" required>
              </div>
      
              <!-- <div class="mt-3 sm:mt-0 form__field">
                <label for="address-state">
                  State
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                
              </div> -->
      
              <div class="mt-3 sm:mt-0 form__field">
                <label for="address-zip">
                  Hora
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="address-zip" type="text" name="address-zip" autocomplete="shipping postal-code" inputmode="numeric" required>
              </div>
            </div>
      
            <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
              <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
                Back
              </button>
              <button type="submit">
                Submit
              </button>
            </div>
          </section>
          <!-- / End Step 2 -->
      
          <!-- Step 3 -->
          <!-- <section id="progress-form__panel-3" role="tabpanel" aria-labelledby="progress-form__tab-3" tabindex="0" hidden>
            
            
      
            
      
            
      
            <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
              <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
                Back
              </button>
              <button type="submit">
                Submit
              </button>
            </div>
          </section> -->
          <!-- / End Step 3 -->
      
          <!-- Thank You -->
          <!-- <section id="progress-form__thank-you" hidden>
            <p>Thank you for your submission!</p>
            <p>We appreciate you contacting us. One of our team members will get back to you very&nbsp;soon.</p>
          </section> -->
          <!-- / End Thank You -->
      
        </form> 
        <!-- / End Progress Form -->
      
      </div>
      <footer class="footer text-center text-muted mt-auto fixed-bottom">
                <p>©<?php echo date('Y');?> <?php echo $lang['FEITO_POR']?> <i class="fa fa-heart fa-beat" style="color: red;"></i> <?php echo $lang['POR']?> <span><a href="#" target="_blank">Capital Prime</a></span>. <?php echo $lang['PARA_EMBAIXADA']?> <?php echo $lang['DIREITOS']?>.</p>
            </footer>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
      <script src="main.js"></script>
</body>
</html>