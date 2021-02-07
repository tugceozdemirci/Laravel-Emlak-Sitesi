@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
@extends('layouts.home')

@section('title', 'About Us')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
    <section class="py-1 bg-cover bg-gray">
        <div class="container py-1">
            <div aria-label="breadcrumb" class="nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container py-5">
            <div class="row">
                <h1 class="lined">Hakkımızda</h1>
                {!!$setting->aboutus!!}
                <h1 class="lined">Üyelik Sözleşmesi</h1>
                <p>
                    Üyelik Sözleşmesi</br>
                    EMLAKSİTEM GAYRİMENKUL ÜYELİK SÖZLEŞMESİ</br>
                    </br>
                    MADDE 1 - TARAFLAR   </br>
                    </br>
                    İşbu sözleşme; merkez adresi Anadolu Cumhuriyet Bulvarı No:77 Çırpıcı İş Merkezi K:1 D:101 Alsancak İzmir Türkiye olan EMLAKSİTEM GAYRİMENKUL REKLAM TANITIM HİZMETLERİ TUR. TİC. LTD. ŞTİ. (Bundan sonra EMLAKSİTEM olarak anılacaktır.) ile http://www.emlaksitem.com (aşağıda kısaca SİTE olarak anılacaktır.) isimli internet sitesinin aşağıda belirtilen hizmetlerinden faydalanan …………………  (Bundan sonra ÜYE olarak anılacaktır)  arasında akdedilmiştir.
                    İŞBU SÖZLEŞMEDE YER ALAN HİZMETLERDEN ÜCRETSİZ OLARAK YARARLANMASI KARARLAŞTIRILAN ÜYELER HAKKINDA SÖZLEŞMEDE YER ALAN ÜCRETE İLİŞKİN MADDELER HARİCİNDE DİĞER TÜM HÜKÜMLER GEÇERLİDİR.
                    </br>
                    </br>
                    MADDE 2 – KONU VE KAPSAM</br>
                    </br>
                    İşbu sözleşmenin konusu, üye konumunda bulunan emlakçı, müteahhit ve inşaat şirketleri de dahil olmak üzere gerçek ve tüzel kişiler tarafından, gayrimenkul satma, kiralama ve benzeri hizmetlerin ve işlemlerin gerçekleştirilmesi amacına yönelik olarak söz konusu gayrimenkullere ilişkin ilgili ilanlar için üyelere çeşitli nitelik ve koşullara tabi ilan listeleme ve görüntüleme seçeneklerinin sunulmasını ve bu ilanların üyelerin ve Kullanıcıların görüntüleyebilmeleri için erişimlerine sunulmasını sağlamaktır. İşbu sözleşmenin konusu, SİTE’ de EMLAKSİTEM tarafından sağlanan uygulamaların ÜYE ve Kullanıcı tarafından yararlanılmasına ilişkin şartların ve koşulların belirlenmesi ve bu doğrultuda tarafların hak ve yükümlülüklerinin tespitidir. İşbu sözleşmenin kapsamı ise, SİTE’ de yer alan tüm hizmet, uygulamalara ve içeriğe ilişkin şart ve koşulların belirlenmesi olup SİTE’ de EMLAKSİTEM tarafından yapılan hizmetlere kullanıma, içeriklere, uygulamalara ve kullanıcılara yönelik her türlü beyan işbu sözleşmenin ayrılmaz parçası olarak kabul edilecektir. İşbu sözleşmenin kabulü ile ÜYE, SİTE’ de yer alan ve yer alacak olan EMLAKSİTEM tarafından yapılan hizmetlere, kullanıma, içeriklere, uygulamalara ve kullanıcılara yönelik her türlü beyanı da kabul etmiş olur.
                    </br>
                    </br>
                    MADDE 3 - EMLAKSİTEM’İN SORUMLULUKLARI</br>
                    </br>
                    3.1. EMLAKSİTEM, SİTE içerisinde ve tamamen bu sitenin formatına bağlı kalarak, ÜYE' ye ait gayrimenkulün özelliklerini yayınlanması ile ilgili olarak teknik hizmet desteği verecektir. EMLAKSİTEM, işbu sözleşme kapsamında verilen hizmetin kesintisiz olarak sağlanabilmesi hususunda elinden gelen her türlü çabayı sarf edecektir. Ancak EMLAKSİTEM ' in elinden geleni yapmasına karşın önlenemeyen teknik arızalardan dolayı hizmetin sağlanamaması halinde ÜYE, EMLAKSİTEM’ i sorumlu tutmayacağını ve bu nedenle de her ne nam adı altında olursa olsun bir hak, tazminat veya başkaca bir alacak talep etmeyeceğini peşinen kabul ve taahhüt eder.</br>
                    3.2. EMLAKSİTEM' in sözleşme konusu hizmeti ÜYE' ye sunma yükümlülüğü hizmetin satın alınması ile ilgili olarak ÜYE tarafından verilen kredi kartı limitinin hizmet bedelini karşılayacak düzeyde olması ve EMLAKSİTEM' in işbu kredi kartı vasıtasıyla hizmet bedelini tahsil edebilmiş olması veya ÜYE tarafından sözleşme konusu hizmet bedelinin EFT veya banka havalesi suretiyle EMLAKSİTEM' e ödenmiş olması şartına bağlıdır. ÜYE tarafından herhangi bir ödeme yapılmadan EMLAKSİTEM hizmet sağlamaya başlamaz. Taraflar arasında ÜYE’ nin sistemden ücretsiz olarak yararlanması kararlaştırıldığı takdirde EMLAKSİTEM hizmete mümkün olan en kısa sürede başlayacaktır.</br>
                    3.3. SİTE isimli internet sitesinin amacı, emlak sektöründe yer alan her türlü ürün ve hizmeti internet ortamındaki milyonların faydasına sunmaktır. Gerek hizmetin arzı ve gerekse iletişim enstrümanları ve ÜYE’ lerin girdileri yönünden EMLAKSİTEM' e hiçbir sorumluluk yüklenemez. ÜYE ve kullanıcılar arasındaki hiçbir işlemde, EMLAKSİTEM' in bizzat taraf olduğu özel anlaşmalar dışında, hukuki sorumluluk taşımaz.</br>
                </p>

                <h1 class="lined">Gizlilik Politikası</h1>
                <p>
                    EmlakSitem.COM sitesinin tüm hakları EMLAKSİTEM REKLAM TANITIM HİZMETLERİ TURİZM TİCARET LİMİTED ŞİRKETİ 'NE aittir. EmlakSitem sitesi tüm bireysel ve kurumsal üyelerinin üye bilgilerini, güvenlik ve gizlilik prensipleri doğrultusunda koruyan interaktif bir platform olmayı hedeflemektedir. EmlakSitem sitesi Üye'nin siteyi aşağıdaki Gizlilik Prensipleri'ne veya yasalara aykırı olarak kullandığını tespit ederse veya yetkili mercilerce bu konuda bir tespit veya inceleme talebi gelirse, Üye ile ilgili bilgileri yetkili makamlara bildirmek hakkına sahiptir. Ayrıca benzer bir durumda EmlakSitem sitesi Gizlilik Prensipleri'nde öngörülen diğer tedbirleri alma hakkına da sahiptir. EmlakSitem sitesi vermiş olduğunuz bilgilerin güvenliğini sağlamaya yönelik olarak gelişen teknolojiye uygun teknik önlemlerle desteklenmektedir. Internet üzerinden iletilen kişisel bilgilerin gizliliği konusunda mutlak bir garanti verilmesinin söz konusu olmadığını, internet üzerinde kişisel bilgilerin iletilirken kullanıcılara mümkün olan en üst düzey tedbir almalarını EmlakSitem sitesi tavsiye etmektedir.</br>
                    <p>
                    EmlakSitem sitesi işbu Gizlilik Politikası’nı herhangi bir sebepten dolayı bildirimde bulunmaksızın değiştirebilir veya yenileyebilir. EmlakSitem sitesi değişiklik yaptığı Gizlilik Politikası hükümleri www.EmlakSitem.COM adlı web sitesinde ("Web Sitesi") yayınlandığı tarihte yürürlülük kazanır. EmlakSitem sitesi yenilenen sözleşmeler konusunda bireysel ve kurumsal üyeleri uyaramayabilir. Ancak bu durumda Gizlilik Politikası’nın söz konusu değişiklikleri yansıtan güncellenmiş hali www.EmlakSitem.COM adlı web sitesine ("Web Sitesi") yüklenecektir. İşbu sebeple EmlakSitem sitesi güncellenen Gizlilik Politikası hakkında bireysel ve kurumsal üyelerin bilgi sahibi olmaları ve periyodik olarak gözden geçirmesini önermektedir. Bireysel ve kurumsal üyelerin yapılan değişikliklerden sorumlu olacakları için, bu Gizlilik Politikası’nı her kullanım öncesi kontrol etmelerini EmlakSitem sitesi önermektedir. İşbu Gizlilik Politikası’nda kullanılan “ Kişisel Bilgiler” terimi bireysel ve kurumsal üyeleri tanımlayabilecek isim-soyisim, telefon, adres, e-posta adresleri dahil fakat bunlarla sınırlı olmamak kaydıyla kredi kartı bilgileri, kimlik bilgileri gibi bilgileri ifade etmektedir. Hürriyetemlak.com, kullanıcıların kendisine www.EmlakSitem.COM adlı web sitesi ("Web Sitesi") üzerinden elektronik ortamdan iletilen kişisel bilgilerini aşağıdaki amaçlar için kullanacaktır, hiçbir durumda öngörülen amacın dışında kullanmayacak, üçüncü kişilere açıklamayacak, paylaşmayacak, satmayacak veya kullandırmayacaktır.</br>
                    Yayınlar göndermek,
                    Elektronik posta ile bülten göndermek ya da bildirimler de bulunmak,
                    Sorularınızı cevaplamak ve etkin bir müşteri hizmeti sunmak, Yeni hizmetler hakkında bilgi vermek,
                    EmlakSitem sitesi veya işbirliği içinde olduğu kişiler tarafından doğrudan pazarlama yapmak,
                    Gerektiğinde kullanıcıyla temas kurmak,
                    Kullanıcının kimliği ifşa edilmeden çeşitli istatistiksel değerlendirmeler, veri tabanı oluşturma ve pazar araştırmalarında kullanmak amacıyla,
                    Bireysel ve kurumsal üyeler Web Site’sini kullandığı andan itibaren kendilerinden toplanan tüm bilgilerin belirtilen şekilde ve nedenlerle, bu Gizlilik Politikası’nda anlatıldığı gibi, EmlakSitem sitesi tarafından kullanılmasını kabul etmiş olurlar.
                    </p>
                </p>


            </div>
        </div>
    </section>


@endsection
