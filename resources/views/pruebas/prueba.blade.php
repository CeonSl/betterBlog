@section('title', 'Prueba')
<x-app-layout>
    <style>


        .container-title {
            color: blueviolet;
            font-weight: 900;
            font-size: 25px;

        }
    </style>

    <body>

        <div class="container container-title">
            <h1 class="py-5">GRID tailwind</h1>
        </div>

        <div class="container">
            <div class="grid grid-flow-col grid-rows-3 grid-cols-4">
                <div class="bg-blue-100">1</div>
                <div class="bg-blue-200">2</div>
                <div class="bg-blue-300">3</div>
                <div class="bg-blue-400">4</div>
                <div class="bg-blue-500">5</div>
                <div class="bg-blue-600">6</div>
                <div class="bg-blue-700">7</div>
                <div class="bg-blue-800">8</div>
                <div class="bg-blue-900">9</div>
            </div>
        </div>

        <div class="container container-title">
            <h1 class="py-5">Change Aspect Ratio tailwind</h1>
        </div>

        <div class="container py-5">

            <div class="grid grid-cols-3 gap-6">
                <div class="col-span-2 ">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/rTVoyWu8r6g"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="bg-red-400 aspect-video">
                    </div>
                </div>
                <div class="col-span-1 bg-blue-200">
                </div>
            </div>
        </div>

        <div class="container container-title">
            <h1 class="py-5">Columns tailwind</h1>
        </div>

        <div class="container py-5">
            <div class="columns-2 gap-4">
                <p class="bg-red-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius in exercitationem
                    nostrum minus
                    assumenda, magnam ea praesentium. Alias illum expedita corporis odio non assumenda consectetur quam
                    accusantium ipsum! Iure, necessitatibus!</p>
                <p class="bg-blue-200 x">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius recusandae odio
                    sunt minus
                    necessitatibus hic iure animi cumque rem, commodi, ea provident nobis error voluptas magnam maiores
                    dicta impedit aspernatur.</p>
                {{-- break-inside-avoid-column --}} <p class="bg-green-200 break-inside-avoid-column">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Repudiandae quae, deleniti voluptates iure
                    dolores et inventore nisi dolor voluptatum veniam delectus ipsum quasi nam iusto consequuntur
                    asperiores a aut modi.</p>
                <p class="bg-indigo-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus
                    voluptatibus vero animi.
                    Doloremque optio hic nihil eveniet, similique distinctio officiis aut iste. Deleniti saepe sed
                    repellat totam, omnis dicta rerum?</p>
                <p class="bg-yellow-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, fugiat labore
                    delectus reprehenderit
                    praesentium ullam repellendus qui ea sunt nostrum nisi, tenetur impedit non voluptates sint aliquam
                    natus nihil. Ex.</p>
            </div>
        </div>

        <div class="container container-title">
            <h1 class="py-5">Display tailwind</h1>
        </div>

        <div class="container py-5">

            <div class="flex">
                <div>1</div>
                <div>2</div>
                <div>3</div>
            </div>

            <p class="bg-red-200 hidden lg:inline-block mb-4">Esto es una etiqueta en bloque</p>
            <div class="bg-red-200">Esta tambiés es una etiqueta de bloque</div>
            <blockquote class="bg-red-200">También etiqueta de bloque</blockquote>

            <span class="bg-blue-300 block">Etiqueta inline</span>
            <a class="bg-green-300 block">Esta también es una etiqueta inline</a>
        </div>

        <div class="container container-title">
            <h1 class="py-5">Typegraphy tailwind</h1>
        </div>

        <div class="container ">
            <h1 class="font-sans text-6xl md:text-3xl font-bold mb-4">Este es un titulo de prueba</h1>
            <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium voluptatum porro,
                debitis ab nostrum dignissimos amet commodi molestias fugiat quos id ducimus neque distinctio omnis
                nulla tempora modi dolor illo.</p>
            <ul>
                <li class="">Elemento 01</li>
                <li class="">Elemento 02</li>
                <li class="">Elemento 03</li>
            </ul>
        </div>

        <div class="container container-title">
            <h1 class="py-5">Fonts Google tailwind</h1>
        </div>

        <div class="container">
            <p class="font-roboto font-bold tracking-widest">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Adipisci quos sunt harum quaerat saepe, repellat corporis vero similique ipsum possimus perspiciatis at.
                Quod laborum laudantium exercitationem nemo sit unde natus.</p>
            <p class="font-roboto font-semibold">Sequi quisquam asperiores vitae officiis, quae id voluptate tenetur aut
                rem, vero reprehenderit, doloremque cupiditate aliquid? Suscipit perspiciatis odit id ullam aliquid,
                incidunt natus facilis maiores quia nobis sunt quibusdam.</p>
            <p class="font-roboto font-extralight">A harum blanditiis, itaque sapiente temporibus architecto cupiditate,
                animi quasi voluptatum natus ex illum accusantium delectus placeat facilis distinctio! Culpa, nostrum
                laboriosam odit molestiae exercitationem architecto fugiat voluptas laudantium ullam?</p>
            <p class="font-roboto font-normal tracking-tighter">Numquam repellat dolore officia quos doloremque omnis
                dignissimos. Illum ducimus sed, assumenda voluptatum ullam temporibus dolorem tenetur aut odit vel ipsam
                adipisci nostrum repellat, soluta sit, nisi obcaecati reprehenderit quaerat.</p>


            <h1 class="text-xl font-bold text-left md:text-center lg:text-right underline uppercase">Este es el titulo
            </h1>

            <p class="text-rose-400 hover:text-opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minima provident perspiciatis deleniti sunt, quas harum molestiae quisquam libero, rerum non molestias
                illo. Nobis consequatur cupiditate quam aut facere quos dolorum?</p>

            <ul class="list-decimal md:list-disc list-inside">
                <li class="line-through">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque vitae sint
                    dolore velit, iusto
                    voluptatem tempora! A maxime perferendis suscipit animi natus officiis quod voluptatibus dolores
                    illo! Exercitationem, dolor quas!</li>
                <li class="lowercase">Sint obcaecati sit incidunt, praesentium omnis ea excepturi soluta nemo! Eos nihil
                    quis vitae rerum
                    repudiandae iste dolores? Placeat perferendis et pariatur exercitationem, ea possimus vel totam est
                    commodi qui!</li>
                <li>Inventore ex beatae aut ipsam neque quasi quas laborum recusandae distinctio nisi magnam libero
                    facere tenetur officia perspiciatis, ipsa natus dolorum maiores tempore dolores accusamus dolorem!
                    Dolorum accusamus vero quod.</li>
                <li>Magnam, pariatur magni eveniet, beatae quaerat quam qui assumenda incidunt vitae dolorem laboriosam
                    ex? Repudiandae cupiditate officia reprehenderit deleniti nam ab temporibus quo, doloribus omnis
                    obcaecati neque ipsa magnam. Vel!</li>
                <li>Porro rem vero cumque excepturi, quaerat nisi enim repellat pariatur ipsam asperiores, deleniti qui
                    numquam necessitatibus fugit velit illum quae corporis non voluptates beatae consequatur nihil
                    delectus ipsum laboriosam. Voluptate.</li>
            </ul>

            <p class="capitalize">carlos enrique oropeza negron</p>
        </div>

        <div class="container container-title">
            <h1 class="py-5">Background tailwind</h1>
        </div>


        <div class="container">
            <h1 class="text-center text-3xl font-bold mb-3">BackGround</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quos, itaque fugit consequuntur ad ipsam
                temporibus excepturi voluptas eius cumque ut quis, eligendi ab vel maxime iusto repellat repudiandae
                modi?</p>
            <div
                class="imagen bg-cover bg-right border-8 border-blue-600 border-dashed bg-clip-content hover:bg-clip-padding p-4">
            </div>
            <div class="imagen bg-fixed">
                
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptate veritatis facere iste excepturi
                nisi possimus pariatur. Tenetur temporibus dolorum perspiciatis, ducimus eveniet illum ex nulla.
                Adipisci, quam quod! Consequatur.</p>
            <p>Labore natus sunt id ratione eos laboriosam dolor iure, voluptas quidem rerum aut nisi et ad modi
                officiis adipisci animi impedit ipsam! Beatae nam nulla ullam quod inventore, quisquam praesentium?</p>

            <div
                class=" bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400 text-center font-extrabold text-5xl bg-clip-text text-transparent py-5">
                Hola mundo
            </div>
        </div>

        <div class="container container-title">
            <h1 class="py-5">Borders tailwind</h1>
        </div>

        <div class="container py-5">
            <div class="w-64 h-64 bg-gray-500 border-4 border-blue-800 hover:border-opacity-50 rounded-full">

            </div>
            <div class="divide-y-8 divide-gray-600 divide-dashed">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad laboriosam error nobis et quod, fuga
                    maiores,
                    suscipit laudantium adipisci totam exercitationem, sapiente reiciendis nulla non ullam magnam
                    molestias
                    ratione dolore?</p>
                <p>Aspernatur impedit animi quaerat aut architecto quisquam id a possimus eos non. Vero rem cupiditate
                    id
                    dolore accusamus qui esse perferendis amet consequatur eius, quasi numquam velit ab possimus
                    laborum.
                </p>
                <p>Ullam perferendis nesciunt officiis ea, facere beatae fuga. Aperiam blanditiis voluptatibus ad!
                    Eligendi
                    expedita modi culpa eius rerum architecto nihil, laudantium ullam reprehenderit dignissimos, a
                    accusantium, aut quasi velit maiores.</p>
                <p>Earum, nemo culpa quas omnis velit doloribus perspiciatis natus minima neque adipisci sit ex placeat
                    repellendus accusantium, iusto voluptas consequuntur fugit. Soluta id beatae vero ipsa qui
                    repellendus
                    culpa et.</p>
                <p>Cumque mollitia debitis illo nihil rerum, impedit ex aliquam architecto nobis perferendis soluta aut
                    dolore explicabo? Accusantium obcaecati necessitatibus odio aut! Qui, excepturi. Nulla nostrum,
                    reiciendis animi molestiae deserunt eius?</p>
            </div>

            <nav class="divide-x-2 divide-blue-600">
                <a href="">Link 1</a>
                <a href="">Link 2</a>
                <a href="">Link 3</a>
                <a href="">Link 4</a>
                <a href="">Link 5</a>
            </nav>
        </div>

        <div class="container container-title">
            <h1 class="py-5">Tablas tailwind</h1>
        </div>

        <div class="container">
            <table class="table w-full border-separate lg:border-collapse table-fixed">
                <thead>
                    <th class="w-1/4">Pais</th>
                    <th class="w-1/4">Ciudad</th>
                    <th class="w-1/2">Descripcion</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Peru</td>
                        <td>Lima</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum omnis similique molestias
                            laudantium asperiores cumque soluta? Alias, magni. Culpa eos velit modi recusandae tempora,
                            rerum sapiente corrupti molestias. Soluta, nostrum.</td>
                    </tr>
                    <tr>
                        <td>Colombia</td>
                        <td>Bogota</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis officia molestias amet
                            iure, nobis beatae velit fugit voluptatibus, sunt eos aliquid, perspiciatis distinctio
                            quisquam! Id accusamus cumque animi iure nam?</td>
                    </tr>
                    <tr>
                        <td>España</td>
                        <td>Madrid</td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum cumque consequatur molestiae
                            dolores ut! Illum, magni est illo, doloremque, eos eum cum at atque veniam commodi ad
                            aspernatur officiis voluptatem!</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container container-title">
            <h1 class="py-5">Sizes tailwind</h1>
        </div>

        <div class="bg-black w-64 h-screen">

        </div>

        <div class="container container-title">
            <h1 class="py-5">Layouts tailwind</h1>
        </div>

        <div class="container mt-4">
            <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500 box-content">
                <div class="bg-gray-500 h-full w-full">

                </div>
            </div>
        </div>

        <div class="container mt-4 bg-blue-500">
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline">1</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline">2</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline">3</div>
        </div>

        <div class="container mt-4 bg-blue-500">
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">1</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline-block">2</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">3</div>
        </div>

        <div class="container mt-4 bg-blue-500">
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">1</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline-block">2</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">3</div>
        </div>

        <div class="container">

            <img class="float-left m-2"
                src="https://images.pexels.com/photos/12906178/pexels-photo-12906178.jpeg?auto=compress&cs=tinysrgb&w=300&lazy=load"
                alt="">

            <img class="float-right m-2"
                src="https://images.pexels.com/photos/8641296/pexels-photo-8641296.jpeg?auto=compress&cs=tinysrgb&w=300&lazy=load"
                alt="">
            <p class="mb-2 clear-both">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur tempore ipsum
                totam
                officiis fugiat dicta nobis repudiandae quis, ad nostrum non. Excepturi delectus repellat vel placeat at
                quidem nulla nemo!</p>
            <p class="mb-2">Minus impedit nostrum vel consequuntur reprehenderit provident magnam alias molestiae
                dolore id repudiandae, doloribus odio officiis enim a facere aspernatur consequatur corrupti corporis
                inventore ratione! Cum laborum natus at quos?</p>
            <p class="mb-2">Ut voluptatum dolores quisquam! Quaerat laboriosam aspernatur cumque. Dolore pariatur
                neque numquam voluptates placeat harum aut nisi ipsum sunt. Accusamus harum debitis ab cupiditate
                aspernatur nostrum laboriosam deserunt autem mollitia.</p>
            <p class="mb-2">Aperiam alias quaerat nemo itaque eligendi, eveniet exercitationem praesentium earum
                laudantium omnis cumque perspiciatis deleniti labore iusto quos tempore. Dicta reiciendis officia
                repudiandae ut tenetur error, numquam dignissimos iure facere!</p>
            <p class="mb-2">Necessitatibus aperiam recusandae consectetur nobis dicta, ut, maiores quisquam, ipsa
                fugiat eos tempore tenetur porro temporibus iusto ratione debitis accusantium adipisci consequuntur.
                Facere incidunt fugit minus temporibus officia ipsum aliquam?</p>
        </div>

        <div class="container bg-gray-300">

            <img class="w-full h-64 object-none"
                src="https://cdn.pixabay.com/photo/2022/10/07/12/02/sunset-7504891_960_720.jpg" alt="">

        </div>

        <div class="container bg-gray-300">

            <div class="bg-gray-300 p-4 h-64 overflow-auto">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ex hic distinctio aspernatur aut
                    odit officia odio totam ipsam recusandae voluptatibus et qui blanditiis, at repellat minima! Iure,
                    atque nihil.</p>
                <p>In error ex inventore ut accusamus temporibus asperiores. Dolorum, minus. Necessitatibus cupiditate
                    nesciunt mollitia minima accusantium enim eligendi laboriosam odit quibusdam sit ea, veniam
                    voluptatum, qui similique, officiis sunt inventore.</p>
                <p>Corporis nesciunt in veniam at consectetur placeat quidem. Totam tempore dolor incidunt repudiandae
                    dolorem. Aut officia voluptates atque, dolores molestias magni culpa rerum asperiores vel modi ad
                    autem itaque adipisci?</p>
                <p>Quasi fuga sunt quas similique quo provident suscipit exercitationem officiis error temporibus magni
                    veritatis cumque, placeat et quos, hic corporis sed? Quasi error aliquam reiciendis praesentium
                    minima. Deleniti, labore laboriosam?</p>
                <p>Earum sunt inventore, voluptatibus aliquid nulla maxime unde laboriosam dolor animi. Quam eveniet
                    odit corporis unde? Nesciunt distinctio accusantium qui, perferendis iste impedit perspiciatis
                    suscipit maiores molestias. Eligendi, id doloremque?</p>
                <p>Quis dicta magni officiis expedita beatae ipsum vitae eligendi, quasi omnis dolorum doloribus,
                    asperiores eos explicabo exercitationem saepe minus quos nesciunt culpa quas soluta corporis eius!
                    Quas ad labore cumque.</p>
                <p>Esse dolore iste eaque illum similique distinctio. Aut, eaque. Veniam repellendus eaque corrupti
                    quibusdam doloremque cum atque sint vel incidunt neque consequuntur porro, suscipit, reprehenderit
                    possimus, accusantium tenetur quos repellat!</p>
                <p>Aspernatur pariatur doloribus tempora, excepturi quod aperiam cupiditate nisi culpa dolores! Amet
                    quasi quia distinctio esse ratione reprehenderit assumenda. Eligendi soluta labore voluptate
                    voluptatem tenetur provident doloribus accusamus quaerat quisquam.</p>
            </div>
        </div>

        <div class="container mt-4">
            <div class="bg-gray-300 p-4 relative">
                <div class="bg-gray-400 p-4 relative">

                    <div class="bg-blue-400 p-4"></div>
                    <div class="bg-blue-600 p-4 absolute inset-x-0 bottom-0"></div>

                </div>
            </div>
        </div>

        {{-- <nav class="bg-blue-300 h-16 fixed w-full z-50">
            qwdwqdqwdqwdqdqdhqwidduhqwdiqduwqh
        </nav>

        <aside class="w-64 bg-gray-800 fixed inset-y-0 z-40">

        </aside>

        <div class="container pt-16">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id cupiditate, quas exercitationem doloremque
                repudiandae quod, veritatis dolorem commodi, dolores eos reiciendis vitae in architecto assumenda minima
                eius tempore inventore accusamus!</p>
            <p>Debitis, voluptates! In magnam nobis illum porro, laboriosam neque, nihil, consectetur sunt
                necessitatibus ipsam dolorem ad impedit incidunt officiis error! Vel minima impedit beatae vero
                doloremque voluptas numquam, voluptate repellat.</p>
            <p>Consectetur dolores est mollitia libero repudiandae consequuntur illum ipsam odio! Enim quasi, velit
                adipisci aspernatur vitae, voluptatem, amet non nihil consectetur assumenda repellat obcaecati vero
                libero similique blanditiis ad sequi.</p>
            <p>Ducimus corrupti sunt distinctio consectetur. Veniam, debitis labore sapiente quod ipsa hic nulla ut ex.
                Sapiente, quas soluta rerum vitae facilis debitis aperiam ipsam neque doloribus eum, distinctio
                laboriosam accusantium.</p>
            <p>Cum optio pariatur consequatur cumque inventore quos omnis tempore possimus harum error asperiores quae
                laborum vel doloremque maiores, veritatis amet animi dolorum. Natus vel magni odit debitis? Minima, at
                quaerat?</p>
            <p>Non expedita unde repudiandae corporis alias rem vitae, quia aperiam nemo officia molestiae hic sint sit,
                voluptate blanditiis atque reiciendis est ex. Alias molestiae nihil eligendi molestias excepturi impedit
                tempore.</p>
            <p>Dignissimos blanditiis error perspiciatis tempore quae, ad distinctio optio voluptatum architecto sint,
                quia aut magni incidunt. Consequatur laudantium cupiditate ex est commodi. Quis quibusdam voluptatibus
                similique unde quaerat. Sunt, amet.</p>
            <p>Aperiam doloribus magni accusamus reprehenderit quas quia minima libero molestiae sequi quibusdam eveniet
                cupiditate pariatur similique, repellat impedit, totam dolorum suscipit, nostrum veritatis inventore
                fugiat atque labore fugit soluta. Delectus!</p>
            <p>Harum numquam ducimus natus placeat illum atque deleniti sunt, veritatis dolorum ratione, sapiente,
                obcaecati amet molestias eos cupiditate sed quae quasi iure eligendi quibusdam maxime hic. Eaque eveniet
                magnam corporis?</p>
            <p>Est repellendus omnis, commodi veritatis ex a repudiandae? Ea optio fugit, nulla nobis nam error libero
                eveniet veritatis omnis maiores, vitae consequatur consequuntur nemo veniam ad itaque enim vel aliquid?
            </p>
            <p>Temporibus qui corporis consequuntur culpa dolorum itaque voluptate dolores numquam excepturi animi, quo
                ab eum nisi aperiam autem ullam beatae inventore magnam facere sed, sint sunt corrupti quaerat
                reprehenderit. Veritatis.</p>
            <p>Itaque, tempora excepturi! Unde ipsum architecto laudantium deserunt voluptates ex enim non incidunt
                pariatur. Harum, accusamus fuga incidunt quis recusandae quam totam omnis, temporibus aliquam sed quod
                voluptatibus consectetur quasi.</p>
            <p>Aliquid facere, libero vitae corrupti, deserunt optio cum laboriosam, cumque veniam voluptas saepe sed
                velit ea hic? Vel ipsa officiis a voluptatum, corporis magnam cum porro voluptate quis deleniti quaerat.
            </p>
            <p>Quas consectetur soluta nemo sunt voluptatibus, id sint. Dolores sed, quisquam rerum, perspiciatis quis
                quibusdam reiciendis quia animi fugit optio hic id nam atque similique neque recusandae obcaecati
                deleniti voluptatem.</p>
            <p>Cupiditate tempore, in, doloribus, molestiae quis est doloremque exercitationem aspernatur quos illum
                odio ipsa! Accusamus officia illum, iure incidunt unde illo fugiat beatae quis velit porro, non veniam
                laboriosam rem.</p>
            <p>Dicta sint quia unde incidunt modi voluptatibus eum dolorum earum recusandae architecto necessitatibus
                dolorem natus sunt maiores ducimus deserunt ut delectus est nesciunt expedita voluptate tenetur, eveniet
                facere? Temporibus, amet.</p>
        </div> --}}

        <div class="container">
            <h2 class="bg-gray-300 text-gray-700 font-bold sticky top-0">Titulo 1</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A ipsa officiis laborum consequuntur quas sequi
                quo modi saepe fugiat enim voluptatibus, assumenda fuga harum, tempore debitis qui expedita pariatur ea?
            </p>
            <p>Rem perspiciatis nobis mollitia odio sunt laudantium repudiandae earum totam. Sed illum aut neque odit
                nihil blanditiis. Neque sint repudiandae magnam cupiditate beatae quod animi qui distinctio, labore
                error natus.</p>
            <p>Accusantium, saepe aspernatur dignissimos fugit recusandae minus incidunt animi architecto, sequi culpa
                ducimus nihil quaerat veritatis obcaecati, repellat est. Corporis nihil delectus explicabo deserunt
                libero natus dolores harum suscipit aliquam!</p>
            <p>Nam placeat quis, facilis odio voluptate omnis labore quae. Repellat rerum nobis tempora neque explicabo
                voluptas! Illo saepe eos debitis. Impedit cum assumenda, omnis tempora quasi iusto porro optio cumque!
            </p>

            <h2 class="bg-gray-300 text-gray-700 font-bold sticky top-0">Titulo 2</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A ipsa officiis laborum consequuntur quas sequi
                quo modi saepe fugiat enim voluptatibus, assumenda fuga harum, tempore debitis qui expedita pariatur ea?
            </p>
            <p>Rem perspiciatis nobis mollitia odio sunt laudantium repudiandae earum totam. Sed illum aut neque odit
                nihil blanditiis. Neque sint repudiandae magnam cupiditate beatae quod animi qui distinctio, labore
                error natus.</p>
            <p>Accusantium, saepe aspernatur dignissimos fugit recusandae minus incidunt animi architecto, sequi culpa
                ducimus nihil quaerat veritatis obcaecati, repellat est. Corporis nihil delectus explicabo deserunt
                libero natus dolores harum suscipit aliquam!</p>
            <p>Nam placeat quis, facilis odio voluptate omnis labore quae. Repellat rerum nobis tempora neque explicabo
                voluptas! Illo saepe eos debitis. Impedit cum assumenda, omnis tempora quasi iusto porro optio cumque!
            </p>

            <h2 class="bg-gray-300 text-gray-700 font-bold sticky top-0">Titulo 3</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A ipsa officiis laborum consequuntur quas sequi
                quo modi saepe fugiat enim voluptatibus, assumenda fuga harum, tempore debitis qui expedita pariatur ea?
            </p>
            <p>Rem perspiciatis nobis mollitia odio sunt laudantium repudiandae earum totam. Sed illum aut neque odit
                nihil blanditiis. Neque sint repudiandae magnam cupiditate beatae quod animi qui distinctio, labore
                error natus.</p>
            <p>Accusantium, saepe aspernatur dignissimos fugit recusandae minus incidunt animi architecto, sequi culpa
                ducimus nihil quaerat veritatis obcaecati, repellat est. Corporis nihil delectus explicabo deserunt
                libero natus dolores harum suscipit aliquam!</p>
            <p>Nam placeat quis, facilis odio voluptate omnis labore quae. Repellat rerum nobis tempora neque explicabo
                voluptas! Illo saepe eos debitis. Impedit cum assumenda, omnis tempora quasi iusto porro optio cumque!
            </p>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam in doloremque sapiente, modi est
                doloribus fugit nostrum, consequuntur, mollitia porro eligendi quae necessitatibus fugiat. Consequuntur
                similique quod praesentium quibusdam laudantium.</p>
            <p>Doloribus aperiam possimus consequuntur, voluptas deserunt excepturi consectetur sequi recusandae
                perferendis, accusantium dolor asperiores. Incidunt tempore blanditiis quam dolor sit ea id similique
                debitis! Assumenda similique unde fugiat natus ut.</p>
            <p>Deserunt aut ullam aperiam praesentium at repellendus laborum nihil nesciunt eos consequatur veniam quos
                sapiente vitae cumque itaque, est maxime laboriosam ut dicta provident dolorem? Cupiditate eum quaerat
                fugiat laborum!</p>
            <p>Reiciendis quis velit alias quos delectus fugit, inventore repellendus dignissimos! Debitis voluptas
                eius, quam modi maxime exercitationem, commodi odit consequuntur, recusandae enim ea! Tempore ex ipsam
                voluptatem asperiores cumque maxime?</p>
            <p>Suscipit officia ullam laborum maiores, aspernatur provident magnam porro facilis minus nisi fuga
                consectetur, consequuntur sed tenetur amet cupiditate itaque incidunt. Eos sed autem aliquid. Deleniti
                dolorem doloremque repudiandae molestias.</p>
            <p>Nihil ipsam possimus hic iste facilis illo laudantium! Voluptatem vitae quasi fugiat fugit a nostrum
                mollitia, molestiae est, corporis ab itaque aspernatur maiores impedit eligendi? Dolorem officiis non
                soluta veritatis.</p>
            <p>Quam animi nobis, eaque enim assumenda eum nemo dolorem, alias fuga minus similique a asperiores!
                Repudiandae dolores quo minima iste. Quis aliquam delectus velit labore ex doloribus natus error maxime?
            </p>
            <p>Ipsa magnam, at perspiciatis animi, quisquam aspernatur aperiam quis saepe culpa quas blanditiis labore,
                quo cum itaque aut. Praesentium dolor quaerat perferendis. Enim earum fugiat voluptatibus, deleniti odio
                sequi ipsam!</p>
            <p>Necessitatibus quidem, adipisci laborum nihil molestiae vel quis minus fugiat culpa blanditiis
                reiciendis, fuga porro nostrum voluptate, ratione ut consectetur magnam tempore rerum omnis tempora
                ipsum? Sed laudantium debitis eius.</p>
            <p>Praesentium, recusandae libero provident eligendi laborum eos modi quaerat non veritatis rerum
                repudiandae at deserunt necessitatibus minus enim accusamus dolores alias. Nobis, nulla excepturi
                numquam nemo sit cupiditate saepe asperiores!</p>
            <p>Nihil laboriosam ea, facere omnis rem est dolore similique dicta maxime et incidunt eos molestiae.
                Provident error unde sed totam iste, at et, soluta vero impedit ducimus recusandae odio officiis!</p>
            <p>Accusamus aliquam quidem minus nobis iusto nostrum expedita necessitatibus? Perspiciatis quisquam
                accusamus cum placeat eum incidunt nemo asperiores nam odio, quia ratione. Pariatur autem, saepe in hic
                sint vitae maxime.</p>
            <p>Dolore similique ut harum tempore fugit perspiciatis quibusdam dicta recusandae placeat! Velit ipsum,
                maiores laboriosam iusto sed quasi blanditiis maxime exercitationem! Voluptate deserunt adipisci ad
                ullam, nostrum repellendus asperiores delectus.</p>
            <p>Dicta iusto voluptatem architecto excepturi sint eius ducimus id eaque eum exercitationem maxime cumque,
                labore quam repellat voluptates autem fugiat, hic suscipit aperiam molestiae? Officia fugiat
                necessitatibus molestiae cum placeat.</p>
            <p>Libero nostrum necessitatibus minus beatae aliquid error culpa, ab maxime. Accusamus eveniet quis dolorum
                porro? Suscipit esse consectetur recusandae. Repellat magni mollitia facilis fugit at ducimus in
                exercitationem possimus laudantium.</p>
            <p>Saepe, tempore odio, ipsum, facilis sed perspiciatis error quasi aperiam adipisci iusto eius sunt nobis
                ea nihil maiores quos vitae! Tempore quis dolorum provident earum sint, esse non laborum praesentium?
            </p>
            <p>Molestiae consectetur veritatis, consequatur asperiores odio expedita dolores vel saepe qui iste nesciunt
                reprehenderit, dolorum quaerat, nisi totam quam esse. Nisi quasi voluptas vitae tempore inventore
                cupiditate nesciunt libero? Quae.</p>
            <p>Accusamus rem tempora tenetur atque libero ad iure voluptas odit enim ipsam nam aperiam sequi quam ab, ut
                cupiditate quo perspiciatis earum nisi, dolore at neque saepe deleniti dignissimos. Debitis.</p>
            <p>Saepe cum quo labore soluta voluptates doloremque voluptatem aliquam! Suscipit minus eius illo? Voluptas
                culpa labore nulla aut doloribus debitis, quidem quis facilis. Numquam molestias asperiores quos. Ipsam,
                deleniti natus!</p>
            <p>Tenetur, sunt non. Sunt nostrum corporis dolores esse temporibus aperiam voluptate iure praesentium rerum
                itaque ut quidem totam dolore eveniet distinctio rem sint expedita, voluptatibus consequuntur
                dignissimos recusandae? Earum, velit.</p>
            <p>Aliquam delectus expedita vitae? Alias molestias minima in quas labore, aperiam laboriosam commodi
                architecto eius! Veritatis quod omnis tenetur. Omnis doloribus alias non qui est animi reprehenderit,
                dicta repellat in!</p>
            <p>Autem, voluptates? Illo dolorum explicabo id commodi, suscipit facere nemo, libero, optio aperiam cumque
                saepe incidunt. Pariatur, eaque recusandae saepe nesciunt soluta, maxime laborum minima dignissimos,
                vero sint repellat explicabo!</p>
            <p>Libero fugiat distinctio in beatae explicabo exercitationem, quidem quia voluptatum sequi sit optio non
                consequuntur harum maiores consectetur magni ipsa obcaecati quis molestias, odit voluptate tempore ipsum
                minima accusamus! Placeat?</p>
            <p>At, accusantium cum, inventore beatae error debitis modi commodi facilis reprehenderit nostrum unde
                laborum earum! Quae quod ipsum laudantium totam nulla. Voluptatum error vitae recusandae magnam qui, sit
                veritatis officia.</p>
            <p>Architecto laborum cumque consequuntur quisquam dignissimos temporibus quasi quidem pariatur? Ea amet
                veritatis eveniet distinctio corporis earum suscipit id. Commodi eum repudiandae aliquam, hic tempora
                molestias mollitia. Impedit, culpa provident!</p>
            <p>Aspernatur eum quo facere velit, possimus dicta eius ipsa, excepturi dolore itaque sunt ab non neque
                deserunt nisi sed quasi soluta? Nobis officia nostrum non at quam! Eligendi, corporis id.</p>
            <p>Praesentium incidunt illo exercitationem enim assumenda ex ratione optio expedita repellendus repudiandae
                dolor odit natus rerum quas blanditiis asperiores soluta, nisi fugiat eum labore quia velit voluptatem?
                Beatae, at eius!</p>
            <p>Consectetur saepe, neque vel error non, maiores aut impedit sapiente ratione quisquam est amet
                consequatur suscipit. Sit quia autem maxime vitae. Quo tempora atque adipisci, natus dolores quas
                corrupti enim!</p>
            <p>Earum, ipsam id? Molestiae minima voluptatum quod recusandae expedita veniam, sed neque quibusdam dolorum
                saepe laboriosam aut obcaecati magni vero. Ad odio cupiditate mollitia, suscipit in voluptatem cum
                temporibus voluptates.</p>
            <p>Excepturi necessitatibus velit similique aperiam repellat quo, impedit commodi dicta quidem, pariatur
                obcaecati nam sequi culpa, ea architecto corrupti at cum blanditiis perspiciatis exercitationem harum
                minima? Eum perspiciatis aut sunt.</p>

        </div>

        <div class="container container-title">
            <h1 class="py-5">Flexbox tailwind</h1>
        </div>

        <div class="bg-gray-300 flex">

            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2 flex-1">1</div>
            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2 flex-1">2</div>
            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2 flex-1">3</div>

        </div>

        <div class="bg-gray-300 flex justify-between my-2">

            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2">1</div>
            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2">2</div>
            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2">3</div>

        </div>

        <div class="bg-gray-300 flex justify-around">

            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2">1</div>
            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2">2</div>
            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2">3</div>

        </div>

        <div class="bg-gray-300 flex justify-around my-2">

            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2 flex-1 order-2">1</div>
            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2 flex-1 order-3">2</div>
            <div class="bg-gray-400 text-gray-700 py-2 px-4 m-2 flex-1 order-1">3</div>

        </div>
    </body>
</x-app-layout>
