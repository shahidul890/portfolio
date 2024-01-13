@extends("layouts.welcome")

@section("page_title", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, est?")

@section("content")
    <x-welcome.page-header/>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card rounded-3 shadow mb-5">
                        <div class="card-body">
                            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, est?</h2>
                            
                            <div class="d-flex gap-3 text-muted mb-5">
                                <p class="m-0"> <i class="fa fa-calendar-days"></i> Published: {{now()->subdays(10)->format("F d, Y")}}</p>
                                <p class="m-0"> <i class="fa fa-recycle"></i> Last Updated: {{now()->subdays(2)->format("F d, Y")}}</p>
                            </div>

                            <div class="text-center">
                                <img src="{{asset('assets/blogs/server-room.jpg')}}" alt="server room" class="img-fluid mx-auto d-block rounded my-3" />
                                <caption></caption>
                            </div>

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque aliquam quaerat ipsum atque hic deleniti, reprehenderit non aliquid quos repellendus. Atque magni magnam quos, id porro a, quibusdam aliquid vero, minima saepe repellat quidem incidunt quis laudantium. Adipisci eius at maxime? Quas esse facilis, recusandae sit suscipit voluptatibus inventore consectetur neque, accusamus corporis ipsam aut aperiam. Aliquam rem quasi expedita, magnam est autem repudiandae ipsam dolores porro neque officia cumque ipsum, delectus, sit dolorem animi odio. Modi sint nobis blanditiis optio iure in earum deleniti nihil qui. Illum iste nulla accusantium quisquam, reiciendis qui modi. Dignissimos suscipit aperiam eos libero.</p>
                            
                            <img src="{{asset('assets/blogs/server-room-2.png')}}" alt="server room 2" class="img-fluid mx-auto d-block rounded my-3" />
                            
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda vitae aperiam dignissimos? Velit reiciendis tempore cum odio distinctio quo saepe. Fuga, perspiciatis suscipit! Ducimus placeat quas laborum qui nemo sit similique amet accusantium blanditiis aliquam, quo porro repellat, perspiciatis sint et non reiciendis quia! Sapiente, sequi nesciunt eum soluta non ut cupiditate impedit aut itaque placeat expedita similique ipsum eius voluptatem tempore iste accusantium molestiae facilis officiis consequuntur nobis, quam odit aliquam aperiam. Enim earum repellat labore, repellendus ab numquam autem. Minima exercitationem quis, aut, autem quisquam aperiam recusandae provident veniam, hic voluptatum illo. Earum illo odio culpa, vitae aperiam impedit iste molestias laudantium itaque nisi error optio hic provident fuga sed! Fugiat, quae sed. Delectus vero consectetur tenetur. Rerum molestiae a tempora tenetur voluptas, placeat eligendi suscipit vel odit quia numquam vitae laboriosam culpa rem? Libero cum distinctio minus optio officia laudantium, nam ipsum nemo ea, mollitia dolorem consequatur aperiam facere, ut harum et illo eius hic quas. Facere odio animi, obcaecati possimus impedit sequi, nostrum fugit harum a ut in. A corrupti minus est repudiandae, libero, odit architecto commodi consectetur assumenda nulla sequi! Ad vero veniam, corrupti illum aliquam deleniti, sit iure quia, molestiae illo cum? Nostrum, saepe?</p>

                            <img src="{{asset('assets/blogs/server-room-3.jpg')}}" alt="server room 3" class="img-fluid mx-auto d-block rounded my-3" />

                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, eius! Hic, rem labore sed ratione beatae reiciendis vitae quo officiis ipsam iusto delectus minus veniam in vero voluptates eveniet error facere accusantium dolore ex alias! Mollitia harum quisquam suscipit nesciunt animi magni blanditiis. Earum consequuntur provident deleniti mollitia qui repellat voluptatibus voluptate quidem similique doloremque eveniet dolor quos ipsa veniam eius, laudantium eos repudiandae modi repellendus exercitationem dolore in! Molestias, fugiat illo esse optio dicta iusto blanditiis! Fugit dignissimos obcaecati, officiis perspiciatis sint quidem iste magnam tempore porro vero dolores placeat aut vel incidunt corporis qui id eveniet nostrum repellendus facilis repellat eligendi a non. Tenetur, ratione! Dolor temporibus reiciendis, iusto qui placeat expedita ab, commodi autem, obcaecati magnam ullam corrupti? Quo recusandae hic earum et molestiae unde harum dolorum delectus? Consequuntur, rem qui pariatur animi culpa magnam corrupti commodi id veritatis deleniti non excepturi voluptatum aspernatur, sapiente dolore error? Necessitatibus illum nisi fuga ea sint minus voluptates aliquid illo delectus tempora voluptas ullam reiciendis molestias autem eveniet temporibus doloribus unde, nesciunt asperiores magni repudiandae deleniti neque suscipit. Unde tempora similique, ab, nemo, culpa libero eligendi dolore asperiores accusamus molestiae rem. Quaerat aliquam officiis vero consectetur eos quo amet expedita rerum, quidem numquam voluptas harum ratione id, neque sint exercitationem, officia omnis labore fuga est aliquid accusamus. Modi itaque iusto distinctio, optio, harum officiis reprehenderit architecto ducimus vitae doloribus fuga quasi repellat ab quos. Incidunt possimus saepe similique maxime beatae dicta neque, dolor alias, sunt facere inventore facilis impedit quidem. Deserunt velit voluptas libero accusantium temporibus hic facere. Inventore vero dolores voluptate nulla suscipit laborum reiciendis, quod et quibusdam doloribus, ipsa ipsam! Quibusdam eum excepturi voluptate optio laudantium nobis maxime provident soluta aspernatur nam eligendi vel, quae non at delectus ducimus? Rerum in veritatis voluptatibus placeat eos praesentium iusto. Architecto necessitatibus sapiente numquam libero recusandae voluptas quis accusamus sequi impedit amet, exercitationem quibusdam. Vitae, perferendis nesciunt earum esse necessitatibus velit. Ab, rerum! Pariatur nemo perferendis est facilis, nobis quasi neque hic impedit quam id temporibus dolores laboriosam accusamus perspiciatis consectetur debitis. Expedita at quia aliquam sunt dolores nostrum iure commodi voluptates aspernatur veritatis repellendus quas impedit vel deleniti, corrupti eligendi dolorum culpa incidunt. Error repellat voluptates sapiente, numquam natus necessitatibus facere praesentium laborum in ipsum illo. Natus dolor omnis saepe ipsam, consequuntur cupiditate aut, nostrum aliquid qui quod quia vitae deserunt ratione expedita! Modi fuga, vitae laboriosam tempore odio corporis at praesentium? Neque mollitia doloremque autem nostrum dolorem quod possimus excepturi amet aliquam, eius culpa dicta quibusdam unde, ipsa quas fugiat repudiandae pariatur tempora, veniam minima eaque earum. Suscipit id commodi tenetur esse vel dolorem debitis totam qui eos, deserunt, sunt illo. Mollitia ut modi temporibus nesciunt vel eligendi, fugit minus repellat nemo porro similique impedit, quos odio pariatur illo, consectetur eveniet rem amet facilis! Eaque molestiae tenetur neque voluptatem reprehenderit illum, omnis adipisci eius quisquam error. Aspernatur autem nostrum eius sequi accusantium neque ut unde esse, quas tenetur distinctio. Fugiat rem eum molestiae fuga cumque expedita, voluptas sit distinctio? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil cupiditate quas laboriosam provident expedita. Nostrum molestiae fugiat non quos illum quisquam vel eum sed incidunt itaque minus laudantium porro debitis commodi est hic quas obcaecati odio aspernatur, placeat nobis voluptas officiis veritatis. Ad inventore modi provident. Eum, voluptate porro numquam doloremque commodi neque expedita rerum dolorum, et adipisci labore vel, repudiandae nisi nulla quam optio hic laudantium voluptatem temporibus atque nam maiores? Quaerat similique enim blanditiis officia natus. Corrupti dolore veniam sunt iste minima commodi dicta mollitia ullam. Veniam ipsam voluptas praesentium officiis a maiores iste possimus ullam eos eveniet.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-5">
                    <p>Related Blogs</p>
                    <h1 style="font-size: 52px;">Maybe you will<span class="text-orange"> benefit to know </span> </h1>

                    <div class="row">
                        @for ($i=0; $i<3; $i++)
                            <div class="col-md-4 mb-5">
                                <div class="card shadow rounded-4">
                                    <div class="car-body">
                                        <img class="card-img-top rounded-top-4" src="{{asset("assets/blogs/web-hosting.jpg")}}" alt="web hosting feature image" />
                                        <div class="p-4">
                                            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam reiciendis neque voluptas unde dolorum official!</h5>
                                            <a href="{{url("/blog/lorem-ipsum")}}" class="mt-3 btn btn-orange px-4">Read More <i class="fa fa-angles-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection